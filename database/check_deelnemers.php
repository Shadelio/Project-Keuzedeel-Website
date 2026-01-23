<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

// Check alle keuzedelen en hun deelnemers
$keuzedelen = \App\Models\Keuzedeel::with('inschrijvingen')->get();

echo "=== KEUZEDELEN EN DEELNEMERS ===\n\n";

foreach ($keuzedelen as $keuzedeel) {
    $aantalIngeschreven = $keuzedeel->inschrijvingen()->where('status', 'geaccepteerd')->count();
    $isVol = $keuzedeel->isVol();
    
    echo "Keuzedeel: {$keuzedeel->titel}\n";
    echo "  Code: {$keuzedeel->code}\n";
    echo "  Max deelnemers: {$keuzedeel->max_deelnemers}\n";
    echo "  Huidige deelnemers (database): {$keuzedeel->huidige_deelnemers}\n";
    echo "  Huidige deelnemers (werkelijk): {$aantalIngeschreven}\n";
    echo "  Status: " . ($isVol ? "VOL" : "Beschikbaar") . "\n";
    echo "  Inschrijvingen:\n";
    
    foreach ($keuzedeel->inschrijvingen as $inschrijving) {
        echo "    - {$inschrijving->user->name} ({$inschrijving->status})\n";
    }
    
    echo "\n" . str_repeat("-", 50) . "\n\n";
}

echo "Totaal keuzedelen: " . $keuzedelen->count() . "\n";
