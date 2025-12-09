<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\StudentsController;

Route::get('/', [StudentsController::class, 'index'])->name('students.index');
Route::get('/student', [StudentsController::class, 'create'])->name('student.create');
Route::post('/student', [StudentsController::class, 'store'])->name('students.store');
Route::get('/student/delete/{id}', [StudentsController::class, 'destroy'])->name('student.delete');
Route::get('/student/{id}', [StudentsController::class, 'view'])->name('student.view');
Route::post('/student/update', [StudentsController::class, 'update'])->name('student.update');
