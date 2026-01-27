<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

// Bootstrap Laravel
$app = require_once __DIR__ . '/bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

try {
    // Create SLB user
    $user = User::updateOrCreate(
        ['email' => 'slb@keuzedeel.nl'],
        [
            'name' => 'SLB Begeleider',
            'password' => Hash::make('slb123'),
            'role' => 'slb',
            'is_active' => true,
        ]
    );

    echo "SLB account succesvol aangemaakt of bijgewerkt!\n";
    echo "Email: slb@keuzedeel.nl\n";
    echo "Password: slb123\n";
    echo "Role: slb\n";
    echo "User ID: " . $user->id . "\n";
    
} catch (Exception $e) {
    echo "Error: " . $e->getMessage() . "\n";
}

echo "\nJe kunt nu inloggen met de SLB account!\n";
?>
