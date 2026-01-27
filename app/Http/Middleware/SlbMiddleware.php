<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SlbMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        if (!Auth::user()->isSlb() && !Auth::user()->isAdmin()) {
            abort(403, 'Geen toegang - SLB rechten vereist');
        }

        return $next($request);
    }
}
