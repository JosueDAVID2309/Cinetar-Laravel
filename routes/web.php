<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CineController;
use App\Http\Controllers\PeliculaController;

Route::get('/', function () {
    return view('index');
});

Route::get('/cines', [CineController::class, 'cines']);
Route::get('/cine/{id}', [CineController::class,'cine']);

Route::get('/peliculas/{idEstado}', [PeliculaController::class,'peliculas']);
Route::get('/pelicula/{id}', [PeliculaController::class, 'pelicula']);