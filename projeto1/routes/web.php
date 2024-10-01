<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/smb', function () {
    return view('smb');
})

;Route::get('/smb2', function () {
    return view('smb2');
})

;Route::get('/smb3', function () {
    return view('smb3');
})

;Route::get('/smb4', function () {
    return view('smb4');
});

Route::get('/teste', function () {
    return view('teste');
});

Route::get('/', function () {
    return view('home');
});