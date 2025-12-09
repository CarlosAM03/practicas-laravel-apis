<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\StudentController;

// GET todos los estudiantes
Route::get('/students', [StudentController::class, 'index']);

// GET un estudiante
Route::get('/students/{id}', [StudentController::class, 'show']);

// POST crear estudiante
Route::post('/students', [StudentController::class, 'store']);

// PUT actualizar completo
Route::put('/students/{id}', [StudentController::class, 'update']);

// PATCH actualización parcial
Route::patch('/students/{id}', [StudentController::class, 'updatePartial']);

// DELETE borrar estudiante
Route::delete('/students/{id}', [StudentController::class, 'destroy']);
