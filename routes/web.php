<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/create_task', function () {
//     return view('home');
// });
