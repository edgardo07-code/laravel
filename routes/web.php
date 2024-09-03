<?php

use App\Http\Controllers\DocentesController;
use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/docentes', [DocentesController::class, 'mensaje']);

Route::resource('/estudiantes', EstudiantesController::class);
