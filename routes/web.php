<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::resource('students', StudentController::class);
Route::resource('classrooms', ClassroomController::class);

