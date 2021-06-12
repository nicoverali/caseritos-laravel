<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Profiles\SellerController;
use Illuminate\Support\Facades\Route;

Route::get('/register-client', function () {
    return view('register-client');
})->name('register-client');

Route::get('/become-a-seller', [SellerController::class, 'create'])
    ->name('become-a-seller');

Route::post('/become-a-seller', [SellerController::class, 'store'])
    ->name('become-a-seller-save');

Route::get('/request-admin', function () {
    return view('request-admin');
})->name('request-admin');

Route::post('/logout', [LoginController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');
