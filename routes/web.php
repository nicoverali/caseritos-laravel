<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/orders', function () {
    return view('orders');
})->middleware(['auth'])->name('orders');

Route::get('/products', function () {
    return view('products');
})->middleware(['auth'])->name('products');

Route::get('/product', function () {
    return view('product');
})->middleware(['auth'])->name('product');

Route::get('/edit-product', function () {
    return view('edit-product');
})->middleware(['auth'])->name('edit-product');

Route::get('/become-a-seller', function () {
    return view('register-seller');
})->middleware(['auth'])->name('become-a-seller');

require __DIR__.'/auth.php';
