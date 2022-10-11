<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\SesionController;
use App\Http\Controllers\UbicacionController;

// =================== Rutas omar ============
Route::get('/', [ProductosController::class, 'index']);

// Route::group(['middleware' => ['admin','cliente']], function () {

Route::get('/consultar/producto/db/orpl', [ProductosController::class, 'miProducto'])->middleware(['auth']);

Route::get('/registrar/producto/orpl', [ProductosController::class, 'create'])->middleware(['auth']);

Route::post('/registrar/producto/post/orpl', [ProductosController::class, 'store'])->name('registro.producto')->middleware(['auth']);

Route::get('/eliminar/producto/orpl/{id}', [ProductosController::class, 'destroy'])->middleware(['auth']);

Route::get('/carrito/producto', function () {
    return view('Productos.Carrito');
})->middleware(['auth']);

Route::get('/pagar/producto', function () {
    return view('Productos.Pagar');
})->middleware(['auth']);

// });



Route::get('/form/ubicacion', function () {
    return view('Ubicacion.index');
});

Route::post('/ver/ubicacion', [UbicacionController::class, 'store'])->name('buscar.ubicacion');



// =============== Rutas de Jeronimo ====================
Route::get('/user/jgc', [UsuarioController::class, 'create']);
Route::post('/user/jgc', [UsuarioController::class, 'store'])->name('usuario.registrar');
Route::resource('/usuarios',UsuarioController::class);

Route::get('/login',[SesionController::class, 'create'])->name('usuario.login');
Route::post('/login',[SesionController::class, 'store'])->name('usuario.store');
//Route::post('/user/jgc2', [RegistrarusuarioController::class, 'edit'])->name('usuario.editUser');
Route::get('/logout/session', [SesionController::class, 'logout']); //Cerrar sesión




// ================ Rutas de Jaime =====================


// ======================== Rutas de Javier =========================
// Route::get('/registro/j', function () {
//     return view('User.Registros');
// });




