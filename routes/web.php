<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\RegistrarusuarioController;
Route::get('/', function () {
    return view('welcome');
});


// Rutas de Omar
Route::get('/registrar/producto/orpl', [ProductosController::class, 'create']);


// Rutas de Jaime



// Rutas de Javier

Route::get('/login/j', function () {
    return view('Login.Login');
});

// Rutas de Jeronimo
Route::get('/usuario/user/jgc',[RegistrarusuarioController::class, 'create']);