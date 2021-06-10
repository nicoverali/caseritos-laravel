<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/orders', function () {
    return view('orders');
})->name('orders');

Route::get('/product', function () {
    return view('product');
})->name('product');
