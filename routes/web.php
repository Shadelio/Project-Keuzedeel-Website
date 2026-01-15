<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', function () {
    // Registratie logica komt hier
    return redirect('/login')->with('success', 'Registratie succesvol!');
})->name('register.submit');

Route::get('/keuzedelen', function () {
    return view('keuzedelen');
})->name('keuzedelen');

Route::get('/mijn-keuzedelen', function () {
    return view('mijn-keuzedelen');
})->name('mijn-keuzedelen');

Route::get('/over-de-school', function () {
    return view('over-de-school');
})->name('over-de-school');

Route::get('/over-ons', function () {
    return view('over-ons');
})->name('over-ons');

Route::get('/nieuwsberichten', function () {
    return view('nieuwsberichten');
})->name('nieuwsberichten');

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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
