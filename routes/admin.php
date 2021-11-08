<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesoreController;
use Illuminate\Support\Facades\Route;

Route::get('', [HomeController::class, 'index']);

Route::resource('/alumnos', AlumnoController::class);

Route::resource('/profesores', ProfesoreController::class);
