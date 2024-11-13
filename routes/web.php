<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;

/*Route::get('/', function () {
    return view('homepage');
});*/

Route::get('/', [UserController::class, 'homepage']);

Route::get('/homepage/{id}/profile', [UserController::class, 'userProfile']);
Route::get('/homepage/{id}/profile', [UserController::class, 'showProfile']);
Route::get('/homepage/{id}/courses', [UserController::class, 'showCourses']);
Route::get('/courses/{id}/users', [CourseController::class, 'showUsers']);