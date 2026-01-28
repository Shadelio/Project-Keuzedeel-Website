<?php

/**
 * Update existing user emails to TCR domains
 * 
 * Gebruik: php update_emails.php
 */

require_once 'vendor/autoload.php';

// Bootstrap Laravel
$app = require_once 'bootstrap/app.php';
$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);
$kernel->bootstrap();

echo "=== UPDATE EMAILS TO TCR DOMAINS ===\n\n";

// Get all users
$users = App\Models\User::all();

echo "Found {$users->count()} users:\n";
echo "----------------------------------------\n";

foreach ($users as $user) {
    echo "ID: {$user->id}\n";
    echo "Name: {$user->name}\n";
    echo "Current Email: {$user->email}\n";
    echo "Role: {$user->role}\n";
    echo "Active: " . ($user->is_active ? 'Yes' : 'No') . "\n";
    
    // Extract name parts for email generation
    $nameParts = explode(' ', strtolower($user->name));
    $firstName = $nameParts[0] ?? 'user';
    $lastName = $nameParts[1] ?? 'user';
    
    // Generate new TCR email based on role
    if ($user->role === 'admin') {
        $newEmail = $firstName . '.' . $lastName . '@techniekcollege.nl';
    } elseif ($user->role === 'slb') {
        $newEmail = $firstName . '.' . $lastName . '@techniekcollege.nl';
    } else {
        $newEmail = $firstName . '.' . $lastName . '@student.techniekcollege.nl';
    }
    
    // Make email unique
    $originalEmail = $newEmail;
    $counter = 1;
    while (App\Models\User::where('email', $newEmail)->where('id', '!=', $user->id)->exists()) {
        $newEmail = $firstName . '.' . $lastName . $counter . '@techniekcollege.nl';
        $counter++;
    }
    
    echo "New Email: {$newEmail}\n";
    
    // Update the email
    $user->email = $newEmail;
    $user->save();
    
    echo "✅ Updated successfully!\n";
    echo "----------------------------------------\n";
}

echo "\n=== SUMMARY ===\n";
echo "Total users updated: {$users->count()}\n";
echo "All emails now use TCR domains\n";
echo "\nYou can now login with the new email addresses and your old passwords.\n";
