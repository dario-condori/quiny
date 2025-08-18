<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/antes', function () {
    return view('base-antes');
})->name('antes');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/what-is', function () {
    return view('what-is');
})->name('whatIs');

Route::get('/what-is', function () {
    return view('what-is');
})->name('whatIs');

Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/certifications', function () {
    return view('certifications');
})->name('certifications');

Route::get('/about-us', function () {
    return view('about-us');
})->name('aboutUs');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contactUs');

Route::post('/guardarMensaje', [ContactoController::class, 'guardarMensaje'])->name('guardarMensaje');
Route::get('/mensajes', [ContactoController::class, 'mensajes'])->name('mensajes');