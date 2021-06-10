<?php

use Illuminate\Support\Facades\Route;

Route::get('/sales', function () {
    return view('sales');
})->name('sales');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/edit-product', function () {
    return view('edit-product');
})->name('edit-product');

Route::get('/client/{id}', function () {
    return view('client');
})->name('client');
