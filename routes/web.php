<?php

use App\Http\Controllers\CartaController;
use App\Http\Controllers\HorarioController;
use App\Http\Controllers\NormasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name("inicio");


Route::get('/carta', [CartaController::class, 'index'])->name('carta');

Route::get('/carta/{codigo}', [CartaController::class, 'view'])->name('vista_producto');


Route::get('/horario', [HorarioController::class, 'index'])->name('horario');

Route::get('/horario/{codigo}', [HorarioController::class, 'view'])->name('vista_horario');

Route::get('/normas', [NormasController::class, 'index'])->name('normas');
