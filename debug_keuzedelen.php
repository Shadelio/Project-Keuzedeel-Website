<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "=== DEBUG KEUZEDELEN ===\n";

try {
    echo "1. Testing KeuzedeelController...\n";
    $controller = new App\Http\Controllers\KeuzedeelController();
    
    echo "2. Getting keuzedelen data...\n";
    $keuzedelen = App\Models\Keuzedeel::all();
    echo "   Found " . $keuzedelen->count() . " keuzedelen\n";
    
    echo "3. Testing view rendering...\n";
    $view = view('keuzedelen', ['keuzedelen' => $keuzedelen]);
    $rendered = $view->render();
    
    echo "4. View length: " . strlen($rendered) . " characters\n";
    echo "5. First 200 characters:\n";
    echo substr($rendered, 0, 200) . "...\n";
    
    echo "SUCCESS: Everything works!\n";
    
} catch (Exception $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . "\n";
    echo "Line: " . $e->getLine() . "\n";
    echo "Trace:\n" . $e->getTraceAsString() . "\n";
}
