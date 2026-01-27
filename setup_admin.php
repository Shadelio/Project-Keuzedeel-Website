<?php

/**
 * Admin Setup Script
 * Run this script to set up the admin system
 */

echo "=== Admin Setup Script ===\n\n";

// Check if we're in the right directory
if (!file_exists('artisan')) {
    echo "Error: Please run this script from the Laravel project root directory\n";
    exit(1);
}

echo "1. Running migrations...\n";
passthru('php artisan migrate --force');

echo "\n2. Seeding admin account...\n";
passthru('php artisan db:seed --class=AdminSeeder --force');

echo "\n3. Clearing caches...\n";
passthru('php artisan cache:clear');
passthru('php artisan config:clear');
passthru('php artisan route:clear');
passthru('php artisan view:clear');

echo "\n=== Setup Complete! ===\n";
echo "Admin login credentials:\n";
echo "Email: admin@keuzedeel.nl\n";
echo "Password: admin123\n";
echo "\nTest student credentials:\n";
echo "Email: student@test.nl\n";
echo "Password: student123\n";
echo "\nAdmin panel: http://127.0.0.1:8000/admin\n";
echo "\nStart the server with: php artisan serve\n";
