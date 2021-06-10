<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/register-client', function () {
    return view('register-client');
})->name('register-client');

Route::get('/become-a-seller', function () {
    return view('register-seller');
})->name('become-a-seller');

Route::get('/request-admin', function () {
    return view('request-admin');
})->name('request-admin');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
