<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('inicio');
})->name('inicio');
Route::post('/guardarMensaje', [ContactoController::class, 'guardarMensaje'])->name('guardarMensaje');
Route::get('/mensajes', [ContactoController::class, 'mensajes'])->middleware(['auth', 'verified'])->name('mensajes');
Route::get('/language/{lang}', function($lang){
    if(in_array($lang, ['en', 'es', 'it'])){
        App::setlocale($lang);
        session()->put('locale', $lang);
    }
    return redirect()->back();
})->name('language');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
