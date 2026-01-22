<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Root route - handles both guest and authenticated users
Route::get('/', function () {
    if (auth()->check()) {
        return redirect('/home');
    }
    return view('login');
})->name('home');

// Guest routes (niet ingelogd)
Route::middleware('guest')->group(function () {
    Route::get('/login', function () {
        return view('login');
    })->name('login');
    
    Route::post('/login', [AuthController::class, 'login'])->name('login.submit');
    
    Route::get('/register', function () {
        return view('register');
    })->name('register');
    
    Route::post('/register', [AuthController::class, 'register'])->name('register.submit');
});

// Authenticated routes (ingelogd)
Route::middleware('auth')->group(function () {
    Route::get('/home', function () {
        return view('home');
    })->name('home.real');
    
    Route::get('/keuzedelen', function () {
        return view('keuzedelen');
    })->name('keuzedelen');
    
    Route::get('/mijn-keuzedelen', function () {
        return view('mijn-keuzedelen');
    })->name('mijn-keuzedelen');
    
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

// Public routes (zowel ingelogd als niet ingelogd)
Route::get('/veelgestelde-vragen', function () {
    return view('veelgestelde-vragen');
})->name('veelgestelde-vragen');

Route::get('/privacy', function () {
    return view('privacy');
})->name('privacy');

Route::get('/voorwaarden', function () {
    return view('voorwaarden');
})->name('voorwaarden');

Route::get('/cookiebeleid', function () {
    return view('cookiebeleid');
})->name('cookiebeleid');

Route::get('/toegankelijkheid', function () {
    return view('toegankelijkheid');
})->name('toegankelijkheid');

