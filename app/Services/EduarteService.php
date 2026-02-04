<?php

namespace App\Services;

use App\Models\User;
use App\Models\Keuzedeel;
use App\Models\Inschrijving;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class EduarteService
{
    protected $apiUrl;
    protected $apiKey;

    public function __construct()
    {
        $this->apiUrl = config('services.eduarte.url');
        $this->apiKey = config('services.eduarte.key');
    }

    /**
     * Sync behaalde keuzedelen voor een student vanuit Eduarte
     */
    public function syncBehaaldeKeuzedelen(User $user): array
    {
        try {
            // TODO: Vervang met echte Eduarte API call
            // Voorbeeld API call:
            // $response = Http::withHeaders([
            //     'Authorization' => 'Bearer ' . $this->apiKey,
            // ])->get($this->apiUrl . '/students/' . $user->student_nummer . '/completed-modules');
            
            // Voor nu: return lege array (placeholder)
            // In productie: parse response en return array van keuzedeel codes
            
            Log::info("Eduarte sync voor student: {$user->email}");
            
            return [];
            
        } catch (\Exception $e) {
            Log::error("Eduarte sync fout: " . $e->getMessage());
            return [];
        }
    }

    /**
     * Markeer keuzedelen als behaald op basis van externe data
     */
    public function markeerAlsBehaald(User $user, array $keuzedeelCodes): int
    {
        $count = 0;
        
        foreach ($keuzedeelCodes as $code) {
            $keuzedeel = Keuzedeel::where('code', $code)->first();
            
            if ($keuzedeel) {
                // Check of er al een inschrijving bestaat
                $inschrijving = Inschrijving::where('user_id', $user->id)
                    ->where('keuzedeel_id', $keuzedeel->id)
                    ->first();
                
                if ($inschrijving) {
                    // Update bestaande inschrijving naar voltooid
                    $inschrijving->update([
                        'status' => 'voltooid',
                        'bron' => 'eduarte',
                    ]);
                } else {
                    // Maak nieuwe inschrijving met status voltooid
                    Inschrijving::create([
                        'user_id' => $user->id,
                        'keuzedeel_id' => $keuzedeel->id,
                        'status' => 'voltooid',
                        'bron' => 'eduarte',
                        'inschrijfdatum' => now(),
                    ]);
                }
                $count++;
            }
        }
        
        return $count;
    }

    /**
     * Haal alle behaalde keuzedelen op voor een student
     */
    public function getBehaaldeKeuzedelen(User $user)
    {
        return $user->inschrijvingen()
            ->where('status', 'voltooid')
            ->with('keuzedeel')
            ->get()
            ->pluck('keuzedeel');
    }
}
