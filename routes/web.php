<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

Route::get('/', function () {
    return view('
      welcome');
});




Route::get('/register', [TestController::class, 'register'])->name('register');


Route::post('/register', [TestController::class, 'ragisterStore'])
    ->name('register.store');


Route::get('/login', [TestController::class, 'login'])
    ->name('login');

Route::post('/login', [TestController::class, 'loginStore'])
    ->name('login.store');


// teacher 
Route::get('/teacher', [TestController::class, 'Teacher'])->name('teacher');
Route::get('/student', [TestController::class, 'Student'])->name('student');
