<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassroomController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('students', StudentController::class);
Route::resource('classrooms', ClassroomController::class);
Route::delete('/classrooms/{classroom}/students/{student}', 
    [ClassroomController::class, 'removeStudent'])
    ->name('classrooms.removeStudent');