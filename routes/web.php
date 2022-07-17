<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrarusuarioController;
use App\Http\Controllers\ProductosController;

Route::get('/', function () {
    return view('welcome');
});


// Rutas de Omar
Route::get('/consultar/producto/orpl', function () {
    return view('Productos.ConsultarProducto');
});

Route::get('/consultar/producto/db/orpl', [ProductosController::class, 'index']);
Route::get('/registrar/producto/orpl', [ProductosController::class, 'create']);
Route::post('/registrar/producto/post/orpl', [ProductosController::class, 'store'])->name('registro.producto');

// Rutas de Jaime



// Rutas de Javier
Route::get('/registro/j', function () {
    return view('User.Registros');
});
Route::get('/login/j', function () {
    return view('User.Login');
});

// Rutas de Jeronimo
Route::get('/user/jgc', [RegistrarusuarioController::class, 'create']);
Route::post('/user/jgc', [RegistrarusuarioController::class, 'store'])->name('usuario.RegistrarUser');
Route::resource('/usuarios',RegistrarusuarioController::class);
