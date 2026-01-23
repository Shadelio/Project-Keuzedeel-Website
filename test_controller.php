<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Testing KeuzedeelController...\n";

try {
    $controller = new App\Http\Controllers\KeuzedeelController();
    
    echo "Testing index method...\n";
    $keuzedelen = App\Models\Keuzedeel::all();
    echo "Found " . $keuzedelen->count() . " keuzedelen\n";
    
    foreach ($keuzedelen as $keuzedeel) {
        echo "- " . $keuzedeel->titel . " (ID: " . $keuzedeel->id . ")\n";
    }
    
    echo "Controller test successful!\n";
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
}
