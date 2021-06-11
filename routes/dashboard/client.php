<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/home', [ProductController::class, 'index'])
    ->name('home');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/products/{product}', [ProductController::class, 'show'])
    ->name('product');
