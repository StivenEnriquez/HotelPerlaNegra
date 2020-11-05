<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view ('principal');
});

// Ruta  Hotel/Historia
Route::get('historia', function () {
    return view ('hotel.historia');
});


//Ruta hotel/mision-vision
Route::get('hotel/mision-vision', function () {
    return view ('hotel.mision-vision');
});

// Ruta hotel/ubicación
Route::get('hotel/ubicación', function () {
    return view ('hotel.ubicacion');
});

//Ruta servicios/habitaciones
Route::get('servicios/habitaciones', function () {
    return view ('servicios.habitacion');
});

// Ruta servicios/eventos/{$id}
Route::get('servicios/eventos/{$id}', function ($id) {
    return view ('servicios.evento' , array('id'=> $id));
});

// Ruta reservas
Route::get('reserva', function () {
    return view ('reservas.reserva');
});

//Ruta contáctos
Route::get('contacto', function () {
    return view ('contacto');
});



