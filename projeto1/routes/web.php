<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/faleconosco', function () {
    return view('faleconosco');
});

Route::get('/', function () {
    return view('home');
});