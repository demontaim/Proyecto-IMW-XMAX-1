<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

//Rutas para Habitaciones
Route::resource('habitaciones', App\Http\Controllers\HabitacioneController::class)->middleware('auth');

//Rutas para Categorias
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');

Route::resource('info', App\Http\Controllers\InfoController::class)->only('index');

Route::resource('ubicacion', App\Http\Controllers\UbicacionController::class)->only('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
