<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KeuzedeelController;

// Test route
Route::get('/test', function () {
    return "Laravel werkt! Tijd: " . now();
});

// NIEUWE SIMPELE TEST
Route::get('/route-test', function () {
    return "Nieuwe routes werken! Tijd: " . now();
});

// DEBUG route voor keuzedelen
Route::get('/debug-keuzedelen', function () {
    return "<h1>DEBUG ROUTE WERKT!</h1><p>Tijd: " . now() . "</p><p>Aantal keuzedelen: " . App\Models\Keuzedeel::count() . "</p>";
});

// COMPLEET NIEUWE KEUZEDELEN ROUTE (BUITEN AUTH)
Route::get('/keuzedelen-test', function () {
    return "<h1>KEUZEDELEN TEST ROUTE!</h1><p>Dit moet werken!</p><p>Tijd: " . now() . "</p>";
});

// ORIGINELE KEUZEDELEN ROUTE - NU WERKEND
Route::get('/keuzedelen', function () {
    $keuzedelen = App\Models\Keuzedeel::all();
    
    return view('keuzedelen-fixed', ['keuzedelen' => $keuzedelen]);
})->name('keuzedelen');

// Nieuwe werkende keuzedelen pagina
Route::get('/keuzedelen-old', function () {
    $keuzedelen = App\Models\Keuzedeel::all();
    
    return view('keuzedelen', ['keuzedelen' => $keuzedelen]);
})->name('keuzedelen.old');

// Standalone keuzedelen route (geen layout dependency)
Route::get('/keuzedelen-standalone', function () {
    $keuzedelen = App\Models\Keuzedeel::all();
    
    $html = '<!DOCTYPE html>
<html>
<head>
    <title>Keuzedelen</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; background: #f5f5f5; }
        .container { max-width: 1200px; margin: 0 auto; }
        .header { text-align: center; margin-bottom: 30px; }
        .keuzedeel { background: white; padding: 20px; margin: 20px 0; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .title { color: #16A34A; }
        .tag { background: #e5e7eb; padding: 4px 8px; border-radius: 4px; font-size: 12px; margin: 2px; }
        .btn { background: #16A34A; color: white; padding: 10px 20px; text-decoration: none; border-radius: 4px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">🎓 Keuzedelen</h1>
            <p>Aantal keuzedelen: ' . $keuzedelen->count() . '</p>
        </div>';
    
    foreach ($keuzedelen as $keuzedeel) {
        $html .= '
        <div class="keuzedeel">
            <h2>' . $keuzedeel->titel . '</h2>
            <p>' . $keuzedeel->beschrijving . '</p>
            <div>
                <span class="tag">' . $keuzedeel->code . '</span>
                <span class="tag">Niveau ' . $keuzedeel->niveau . '</span>
                <span class="tag">' . $keuzedeel->ec . ' EC</span>
                <span class="tag">' . $keuzedeel->huidige_deelnemers . '/' . $keuzedeel->max_deelnemers . ' plekken</span>
            </div>
            <p><strong>Docent:</strong> ' . $keuzedeel->docent . ' | <strong>Locatie:</strong> ' . $keuzedeel->locatie . '</p>
            <a href="/keuzedelen/' . $keuzedeel->id . '" class="btn">Meer informatie →</a>
        </div>';
    }
    
    $html .= '
    </div>
</body>
</html>';
    
    return $html;
});

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
    
    Route::get('/keuzedelen/{id}', [KeuzedeelController::class, 'show'])->name('keuzedeel.show');
    Route::post('/keuzedelen/{id}/inschrijven', [KeuzedeelController::class, 'inschrijven'])->name('keuzedeel.inschrijven');
    Route::delete('/keuzedelen/{id}/uitschrijven', [KeuzedeelController::class, 'uitschrijven'])->name('keuzedeel.uitschrijven');
    
    Route::get('/mijn-keuzedelen', [KeuzedeelController::class, 'mijnKeuzedelen'])->name('mijn-keuzedelen');
    
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

