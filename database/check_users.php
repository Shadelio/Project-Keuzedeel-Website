<?php

require_once 'vendor/autoload.php';

$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "Checking users in database:\n";
echo "========================\n";

$users = App\Models\User::all();

foreach ($users as $user) {
    echo "ID: " . $user->id . "\n";
    echo "Name: " . $user->name . "\n";
    echo "Email: " . $user->email . "\n";
    echo "Created: " . $user->created_at . "\n";
    echo "------------------------\n";
}

echo "Total users: " . $users->count() . "\n";
