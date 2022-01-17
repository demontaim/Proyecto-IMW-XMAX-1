<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventoController;


use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Mail;

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
Route::resource('info', App\Http\Controllers\InfoController::class)->only('index');

//Ruta para la ubicación de la página
Route::resource('ubicacion', App\Http\Controllers\UbicacionController::class)->only('index');

//Ruta para la agenda de eventos
Route::resource('evento', App\Http\Controllers\EventoController::class)->only('index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//Envío de emails con Laravel
Route::get('contactanos', function(){
    $correo = new ContactanosMailable;
    Mail::to('cliente@example.com')->send($correo);

    return '<h1 align="center">Mensaje enviado :)</h1>';
});
