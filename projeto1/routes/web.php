<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TesteController;
use App\Http\Controllers\Cliente;
use App\Http\Controllers\Lista01Controller;

Route::get('/smb', [TesteController::class, 'smb']);

Route::get('/smb2', [TesteController::class, 'smb2']);

Route::get('/smb3', [TesteController::class, 'smb3']);

Route::get('/smb4', [TesteController::class, 'smb4']);

Route::get('/teste', [TesteController::class, 'testar']);

Route::get('/tabuadatematica', [TesteController::class, 'tabuadatematica']);

Route::get('/', [TesteController::class, 'home']);


Route::get('/cadastrarCliente', [Cliente::class, 'create']);
Route::post('/cadastrarCliente', [Cliente::class, 'store']);



Route::get('/ex01', [Lista01Controller::class, 'ex01']);
Route::get('/ex02', [Lista01Controller::class, 'ex02']);
Route::get('/ex03', [Lista01Controller::class, 'ex03']);
Route::get('/ex04', [Lista01Controller::class, 'ex04']);
Route::get('/ex05', [Lista01Controller::class, 'ex05']);
Route::get('/ex06', [Lista01Controller::class, 'ex06']);
Route::get('/ex07', [Lista01Controller::class, 'ex07']);
Route::get('/ex08', [Lista01Controller::class, 'ex08']);
Route::get('/ex09', [Lista01Controller::class, 'ex09']);
Route::get('/ex10', [Lista01Controller::class, 'ex10']);
Route::get('/ex11', [Lista01Controller::class, 'ex11']);