<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Testing inschrijving functionality...\n";

$user = App\Models\User::find(1);
$keuzedeel = App\Models\Keuzedeel::find(2);

echo "User: " . $user->name . " (ID: " . $user->id . ")\n";
echo "Keuzedeel: " . $keuzedeel->titel . " (ID: " . $keuzedeel->id . ")\n";

// Test de isIngeschrevenVoorKeuzedeel methode
$isIngeschreven = $user->isIngeschrevenVoorKeuzedeel($keuzedeel->id);
echo "Is ingeschreven: " . ($isIngeschreven ? 'YES' : 'NO') . "\n";

// Test de inschrijvingen relatie
$inschrijvingen = $user->inschrijvingen;
echo "Aantal inschrijvingen: " . $inschrijvingen->count() . "\n";

echo "Test completed!\n";
