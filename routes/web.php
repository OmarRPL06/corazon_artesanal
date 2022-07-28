<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrarusuarioController;

Route::get('/', function () {
    return view('welcome');
});


// Rutas de Omar



// Rutas de Jaime



// Rutas de Javier



// Rutas de Jeronimo
Route::get('/user/jgc', [RegistrarusuarioController::class, 'create']);
Route::post('/user/jgc', [RegistrarusuarioController::class, 'store'])->name('usuario.RegistrarUser');
Route::resource('/usuarios',RegistrarusuarioController::class);
Route::post('/user/jgc2', [RegistrarusuarioController::class, 'edit'])->name('usuario.editUser');
