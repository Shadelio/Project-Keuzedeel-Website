<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/opleidingen', function () {
    return view('opleidingen');
})->name('opleidingen');

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
