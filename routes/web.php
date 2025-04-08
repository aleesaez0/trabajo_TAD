<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\BibliotecarioController;
use App\Http\Controllers\BibliotecaController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('personas', PersonaController::class);
Route::resource('bibliotecarios', BibliotecarioController::class);
Route::resource('bibliotecas', BibliotecaController::class);
Route::resource('libros', LibroController::class);
Route::resource('usuarios', UsuarioController::class);

Route::get('/libros/{libro}/prestar', [LibroController::class, 'showPrestarForm'])->name('libros.prestar');
Route::post('/libros/{libro}/prestar', [LibroController::class, 'prestar'])->name('libros.prestar.store');
Route::post('/libros/{libro}/devolver', [LibroController::class, 'devolver'])->name('libros.devolver');

Route::post('/usuarios/{usuario}/tomar-prestado', [UsuarioController::class, 'tomarPrestado'])->name('usuarios.tomar-prestado');
Route::post('/usuarios/{usuario}/devolver-libro', [UsuarioController::class, 'devolverLibro'])->name('usuarios.devolver-libro');