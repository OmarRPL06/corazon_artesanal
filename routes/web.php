<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});


// Rutas de Omar
Route::get('/registrar/producto/orpl', [ProductosController::class, 'create']);


// Rutas de Jaime



// Rutas de Javier

Route::get('/registro/j', function () {
    return view('User.Registros');
});
Route::get('/login/j', function () {
    return view('User.Login');
});
// Rutas de Jeronimo
