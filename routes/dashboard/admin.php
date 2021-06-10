<?php

use Illuminate\Support\Facades\Route;

Route::get('/users', function () {
    return view('users');
})->name('users');

Route::get('/edit-user/{id}', function () {
    return view('edit-user');
})->name('edit-user');
