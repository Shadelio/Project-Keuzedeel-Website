<?php

namespace App\Console\Commands;

use App\Models\User;
use App\Services\EduarteService;
use Illuminate\Console\Command;

class SyncEduarteCommand extends Command
{
    protected $signature = 'eduarte:sync {--user= : Sync specifieke gebruiker op email}';
    protected $description = 'Sync behaalde keuzedelen vanuit Eduarte';

    public function handle(EduarteService $eduarteService)
    {
        $this->info('Start Eduarte synchronisatie...');

        $userEmail = $this->option('user');

        if ($userEmail) {
            $users = User::where('email', $userEmail)->get();
        } else {
            $users = User::where('role', 'student')->get();
        }

        $totalSynced = 0;

        foreach ($users as $user) {
            $this->line("Syncing: {$user->email}");
            
            // Haal behaalde keuzedelen op van Eduarte
            $behaaldeKeuzedeelCodes = $eduarteService->syncBehaaldeKeuzedelen($user);
            
            // Markeer als behaald in database
            $count = $eduarteService->markeerAlsBehaald($user, $behaaldeKeuzedeelCodes);
            
            $totalSynced += $count;
            $this->info("  -> {$count} keuzedelen gesynchroniseerd");
        }

        $this->info("Synchronisatie voltooid. Totaal: {$totalSynced} keuzedelen.");
        
        return Command::SUCCESS;
    }
}
