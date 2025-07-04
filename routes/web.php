<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\controlador_ejemplo;
use App\Http\Controllers\controlador_cliente;

Route::get('/', function () {
    return view('welcome');
});

Route::get('fh', [controlador_ejemplo::class, 'hola'])->name('fh');


Route::get('form_suma', [controlador_ejemplo::class, 'formulario'])->name('form_suma');

Route::post('sumar', [controlador_ejemplo::class, 'fun_suma'])->name('sumar');

Route::get('multiplicar', [controlador_ejemplo::class, 'fun_mult'])->name('multiplicar');
Route::post('dividir', [controlador_ejemplo::class, 'fun_div'])->name('dividir');

Route::get('url_cliente', [controlador_cliente::class, 'mostrar_clientes'])->name('url_cliente');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
