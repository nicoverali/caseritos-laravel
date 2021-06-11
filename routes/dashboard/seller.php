<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/sales', function () {
    return view('sales');
})->name('sales');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('edit/products/{product}', [ProductController::class, 'edit'])
    ->name('edit-product');

Route::post('edit/products/{product}', [ProductController::class, 'update'])
    ->name('edit-product-save');

Route::post('delete/products/{product}', [ProductController::class, 'destroy'])
    ->name('edit-product-delete');

Route::get('/client/{id}', function () {
    return view('client');
})->name('client');
