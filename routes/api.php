<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CinestarController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/cines', [CinestarController::class, 'cines']);
Route::get('/cine/{id}', [CinestarController::class, 'cine']);
Route::get('/peliculas/{idEstado}',[CinestarController::class,'peliculas']);
Route::get('/pelicula/{id}', [CinestarController::class,'pelicula']);