<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

// tijdelijke route om SLB account aan te maken
Route::get('/create-slb', function () {
    try {
        $user = User::updateOrCreate(
            ['email' => 'slb@keuzedeel.nl'],
            [
                'name' => 'SLB Begeleider',
                'password' => Hash::make('slb123'),
                'role' => 'slb',
                'is_active' => true,
            ]
        );

        return response()->json([
            'success' => true,
            'message' => 'SLB account aangemaakt!',
            'email' => 'slb@keuzedeel.nl',
            'password' => 'slb123',
            'role' => 'slb',
            'user_id' => $user->id
        ]);
        
    } catch (Exception $e) {
        return response()->json([
            'success' => false,
            'error' => $e->getMessage()
        ]);
    }
});

// tijdelijke route om alle gebruikers te checken
Route::get('/check-users', function () {
    $users = User::all(['id', 'name', 'email', 'role', 'is_active']);
    return response()->json($users);
});
?>
