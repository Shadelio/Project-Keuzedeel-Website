<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Session check:\n";
echo "=============\n";

if (auth()->check()) {
    $user = auth()->user();
    echo "User is logged in!\n";
    echo "ID: " . $user->id . "\n";
    echo "Name: " . $user->name . "\n";
    echo "Email: " . $user->email . "\n";
} else {
    echo "No user is currently logged in.\n";
}

echo "\nAll users in database:\n";
$users = App\Models\User::all();
foreach ($users as $user) {
    echo "- " . $user->name . " (" . $user->email . ")\n";
}
