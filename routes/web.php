<?php

use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;





// Register routes
Route::get('/register', [AuthController::class, 'showRegister'])
    ->middleware('guest')
    ->name('register');
Route::post('/register', [AuthController::class, 'register'])
    ->middleware('guest')
    ->name('register');

// Login routes
Route::get('/login', [AuthController::class, 'showLogin'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [AuthController::class, 'login'])
    ->middleware('guest')
    ->name('login');

// Logout route
Route::get('/logout', [AuthController::class, 'logout'])
    ->middleware('auth');

Route::resource('todos', TodoController::class)->middleware('auth');
