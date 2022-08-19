<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrarusuarioController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\UbicacionController;


// Rutas omar
Route::get('/', [ProductosController::class, 'index']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('/consultar/producto/db/orpl', [ProductosController::class, 'miProducto']);
    Route::get('/registrar/producto/orpl', [ProductosController::class, 'create']);
    Route::post('/registrar/producto/post/orpl', [ProductosController::class, 'store'])->name('registro.producto');
});

Route::get('/form/ubicacion', function () {
    return view('Ubicacion.index');
});

Route::post('/ver/ubicacion', [UbicacionController::class, 'store'])->name('buscar.ubicacion');

// Rutas de Jaime


// Rutas de Javier
Route::get('/registro/j', function () {
    return view('User.Registros');
});

// Rutas de Jeronimo
Route::get('/user/jgc', [RegistrarusuarioController::class, 'create']);
Route::post('/user/jgc', [RegistrarusuarioController::class, 'store'])->name('usuario.RegistrarUser');
Route::resource('/usuarios',RegistrarusuarioController::class);
Route::get('/login',[SesionController::class, 'create'])->name('usuario.login');
Route::post('/login',[SesionController::class, 'store'])->name('usuario.store');

Route::get('/logout/session', [SesionController::class, 'logout']); //Cerrar sesión

//Route::post('/user/jgc2', [RegistrarusuarioController::class, 'edit'])->name('usuario.editUser');
