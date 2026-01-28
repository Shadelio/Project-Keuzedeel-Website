<?php

/**
 * Cleanup script - Verwijder oude PHP files uit root directory
 * 
 * Gebruik: php cleanup.php
 */

echo "=== CLEANUP OUD PHP FILES ===\n\n";

$filesToRemove = [
    'check_aantal.php',
    'create_slb_route.php', 
    'debug_keuzedelen.php',
    'setup_admin.php',
    'setup_slb.php',
    'test_controller.php'
];

$removed = 0;
$failed = 0;

foreach ($filesToRemove as $file) {
    if (file_exists($file)) {
        if (unlink($file)) {
            echo "✅ Verwijderd: {$file}\n";
            $removed++;
        } else {
            echo "❌ Kon niet verwijderen: {$file}\n";
            $failed++;
        }
    } else {
        echo "ℹ️  Bestand niet gevonden: {$file}\n";
    }
}

echo "\n=== RESULTAAT ===\n";
echo "Verwijderd: {$removed} files\n";
echo "Mislukt: {$failed} files\n";

if ($removed > 0) {
    echo "\n🎉 Root directory is nu schoon!\n";
    echo "📁 Nieuwe locatie: database/scripts/\n";
}

echo "\n📝 Gebruik de nieuwe scripts:\n";
echo "   php database/scripts/check_aantal.php\n";
echo "   php database/scripts/setup_admin.php\n";
echo "   php database/scripts/setup_slb.php\n";
