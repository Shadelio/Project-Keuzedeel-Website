<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Updating keuzedelen with image URLs...\n";

$keuzedelen = App\Models\Keuzedeel::all();

$imageUrls = [
    1 => 'https://images.unsplash.com/photo-1461749280684-dccba630e2f6?w=400&h=200&fit=crop',
    2 => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=400&h=200&fit=crop',
    3 => 'https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=400&h=200&fit=crop',
    4 => 'https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=400&h=200&fit=crop',
    5 => 'https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=400&h=200&fit=crop',
];

foreach ($keuzedelen as $keuzedeel) {
    if (isset($imageUrls[$keuzedeel->id])) {
        $keuzedeel->image_url = $imageUrls[$keuzedeel->id];
        $keuzedeel->save();
        echo "Updated: " . $keuzedeel->titel . "\n";
    }
}

echo "Done!\n";
