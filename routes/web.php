<?php

use App\Http\Controllers\Dashboard\PostController;
use App\Http\Controllers\PrimerControlador;
use App\Http\Controllers\SegundoControlador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('test',[PrimerControlador::class, 'index']);
//Route::get('test2',[SegundoControlador::class, 'index']);

//Route::get('test',[PrimerControlador::class, 'index']);
//Route::get('otro/{post}/{otro?}',[PrimerControlador::class, 'otro']);

Route::resource('post', PostController::class);