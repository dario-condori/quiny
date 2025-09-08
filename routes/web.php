<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');


Route::post('/guardarMensaje', [ContactoController::class, 'guardarMensaje'])->name('guardarMensaje');
Route::get('/mensajes', [ContactoController::class, 'mensajes'])->name('mensajes');