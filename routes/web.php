<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\StudentController;


Route::get('/',[StudentController::class,'view']);
Route::get('/insert',[StudentController::class,'insert']);
Route::post('/insert',[StudentController::class,'store'])->name('student.store');
