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
    $produto = "cebola";
    $valor = 1.50;
    // return view('teste', ['item'=>$produto, 'preco'=>$valor]);
    // return view('teste',compact('produto','valor'));

    $clientes = array("João", "Pedro", "Lucas");
    return view('teste' , compact('clientes'));

});

Route::get('/tabuadatematica', function () {
    $valor = 3;
    return view('tabuadatematica', compact('valor'));

});

Route::get('/', function () {
    return view('home');
});