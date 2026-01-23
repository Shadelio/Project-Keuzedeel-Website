<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Checking image URLs in database:\n";
echo "=================================\n";

$keuzedelen = App\Models\Keuzedeel::all();

foreach ($keuzedelen as $keuzedeel) {
    echo "ID: " . $keuzedeel->id . " - " . $keuzedeel->titel . "\n";
    echo "Image: " . ($keuzedeel->image_url ?? 'NULL') . "\n";
    echo "------------------------\n";
}
