<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Checking keuzedelen in database:\n";
echo "===============================\n";

$keuzedelen = App\Models\Keuzedeel::all();

foreach ($keuzedelen as $keuzedeel) {
    echo "ID: " . $keuzedeel->id . "\n";
    echo "Titel: " . $keuzedeel->titel . "\n";
    echo "Code: " . $keuzedeel->code . "\n";
    echo "EC: " . $keuzedeel->ec . "\n";
    echo "Niveau: " . $keuzedeel->niveau . "\n";
    echo "Status: " . $keuzedeel->status . "\n";
    echo "Deelnemers: " . $keuzedeel->huidige_deelnemers . "/" . $keuzedeel->max_deelnemers . "\n";
    echo "Docent: " . $keuzedeel->docent . "\n";
    echo "------------------------\n";
}

echo "Total keuzedelen: " . $keuzedelen->count() . "\n";
