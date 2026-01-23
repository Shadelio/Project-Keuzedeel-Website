<?php

require_once __DIR__ . '/vendor/autoload.php';

$app = require_once __DIR__ . '/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "=== DEELNEMERS TELLING DEMO ===\n\n";

// Haal alle keuzedelen op
$keuzedelen = \App\Models\Keuzedeel::with('inschrijvingen')->get();

foreach ($keuzedelen as $keuzedeel) {
    echo "📚 Keuzedeel: {$keuzedeel->titel}\n";
    echo "   Code: {$keuzedeel->code}\n";
    echo "   Database kolom 'huidige_deelnemers': {$keuzedeel->getRawOriginal('huidige_deelnemers')}\n";
    echo "   Dynamisch geteld: {$keuzedeel->huidige_deelnemers}\n";
    echo "   Is vol? " . ($keuzedeel->isVol() ? "JA" : "NEE") . "\n";
    echo "   Max deelnemers: {$keuzedeel->max_deelnemers}\n";
    
    echo "   📋 Inschrijvingen:\n";
    foreach ($keuzedeel->inschrijvingen as $inschrijving) {
        echo "      - {$inschrijving->user->name} (status: {$inschrijving->status})\n";
    }
    
    echo "\n" . str_repeat("-", 60) . "\n\n";
}

echo "✅ De 'huidige_deelnemers' kolom wordt niet meer bijgewerkt!\n";
echo "🔄 We tellen nu dynamisch via de inschrijvingen tabel.\n";
echo "🎯 Dit is betrouwbaarder en voorkomt data inconsistenties.\n";
