<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TCRAccessMiddleware
{
    /**
     * IP ranges voor TCR netwerken
     */
    private const TCR_IP_RANGES = [
        // TCR hoofdkantoor en locaties
        '145.136.0.0/16',     // TCR netwerk range
        '192.168.1.0/24',     // Local network (voor testing)
        '10.0.0.0/8',         // Private network
        '172.16.0.0/12',      // Private network
        '127.0.0.1',          // Localhost
        '::1',                // IPv6 localhost
    ];

    /**
     * Domeinen die toegang hebben
     */
    private const ALLOWED_DOMAINS = [
        'techniekcollege.nl',
        'tcr.nl',
        'student.techniekcollege.nl',
        'docent.techniekcollege.nl',
    ];

    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next)
    {
        // Check IP toegang
        if (!$this->isAllowedIP($request->ip())) {
            $this->logSecurityAttempt($request, 'IP blocked');
            abort(403, 'Toegang geweigerd - Uw locatie heeft geen toegang tot dit systeem');
        }

        // Check email domein voor ingelogde gebruikers
        if (Auth::check() && !$this->isAllowedDomain(Auth::user()->email)) {
            Auth::logout();
            abort(403, 'Toegang geweigerd - Alleen TCR email adressen zijn toegestaan');
        }

        // Check voor verdachte activiteit
        if ($this->isSuspiciousActivity($request)) {
            $this->logSecurityAttempt($request, 'Suspicious activity detected');
            abort(429, 'Te veel verzoeken - Probeer het later opnieuw');
        }

        return $next($request);
    }

    /**
     * Check if IP is allowed
     */
    private function isAllowedIP(string $ip): bool
    {
        // Allow localhost en private networks voor development
        if ($ip === '127.0.0.1' || $ip === '::1' || 
            str_starts_with($ip, '192.168.') || 
            str_starts_with($ip, '10.') || 
            str_starts_with($ip, '172.')) {
            return true;
        }

        // Check tegen TCR IP ranges
        foreach (self::TCR_IP_RANGES as $range) {
            if ($this->ipInRange($ip, $range)) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if email domain is allowed
     */
    private function isAllowedDomain(string $email): bool
    {
        $domain = strtolower(substr(strrchr($email, '@'), 1));
        
        foreach (self::ALLOWED_DOMAINS as $allowedDomain) {
            if (str_ends_with($domain, strtolower($allowedDomain))) {
                return true;
            }
        }

        return false;
    }

    /**
     * Check if IP is in range
     */
    private function ipInRange(string $ip, string $range): bool
    {
        if (strpos($range, '/') === false) {
            return $ip === $range;
        }

        [$subnet, $mask] = explode('/', $range);
        $subnet = ip2long($subnet);
        $ip = ip2long($ip);
        $mask = -1 << (32 - (int)$mask);

        return ($ip & $mask) === ($subnet & $mask);
    }

    /**
     * Check for suspicious activity
     */
    private function isSuspiciousActivity(Request $request): bool
    {
        // Rate limiting per IP
        $key = 'security_' . md5($request->ip());
        $attempts = cache()->get($key, 0);
        
        if ($attempts > 100) { // Max 100 verzoeken per uur
            return true;
        }

        cache()->put($key, $attempts + 1, 3600); // 1 uur
        
        // Check voor verdachte user agents
        $suspiciousAgents = ['bot', 'crawler', 'scanner', 'hack'];
        $userAgent = strtolower($request->userAgent());
        
        foreach ($suspiciousAgents as $agent) {
            if (strpos($userAgent, $agent) !== false) {
                return true;
            }
        }

        return false;
    }

    /**
     * Log security attempts
     */
    private function logSecurityAttempt(Request $request, string $reason): void
    {
        $data = [
            'ip' => $request->ip(),
            'user_agent' => $request->userAgent(),
            'url' => $request->fullUrl(),
            'method' => $request->method(),
            'reason' => $reason,
            'timestamp' => now(),
            'user_id' => Auth::id(),
        ];

        // Log naar security log (in productie naar file of external service)
        \Log::warning('TCR Security Attempt', $data);
        
        // Optioneel: stuur alert naar admin
        if (app()->environment('production')) {
            // Implementeer alert systeem
        }
    }
}
