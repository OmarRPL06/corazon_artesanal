<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/login/productos/api', [ApiController::class, 'loginApi']);

Route::middleware('auth:api')->group( function (){
    Route::get('/consultar/productos/api', [ApiController::class, 'listApi']);
});
