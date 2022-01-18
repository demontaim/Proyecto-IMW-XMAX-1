<?php

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\EventoController;

Route::get('/', function () {

    return view('welcome');
});

//Rutas para Habitaciones
Route::resource('habitaciones', App\Http\Controllers\HabitacioneController::class)->middleware('auth');

//Rutas para Categorias
Route::resource('categorias', App\Http\Controllers\CategoriaController::class)->middleware('auth');

//Rutas para Clientes
Route::resource('clientes', App\Http\Controllers\ClienteController::class)->middleware('auth');

//Rutas para Opiniones
Route::resource('opiniones', App\Http\Controllers\OpinioneController::class)->middleware('auth');

//Ruta para la información de la página
// Route::resource('info', App\Http\Controllers\InfoController::class)->only('index');

//Ruta para la ubicación de la página
Route::resource('ubicacion', App\Http\Controllers\UbicacionController::class)->only('index');

//Ruta para la agenda de eventos
Route::resource('evento', App\Http\Controllers\EventoController::class)->only('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Ruta para la página de contacto y el envío de Emails
Route::get('contactanos', [InfoController::class, 'index'])->name('info.index');
Route::post('contactanos', [InfoController::class, 'store'])->name('info.store');


//Rutas para generar PDF's de Categorias
Route::get('categorias/pdf', [CategoriaController::class, 'pdf'])->name('categoria.pdf');
