<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// CREATE ROUTES 
Route::get('/login',[AuthController::class, 'login'])->name('login');
Route::post('/login',[AuthController::class, 'loginPost'])->name('login.Post');

Route::post('/logout',[AuthController::class, 'logout'])->name('logout');


Route::get('/register',[AuthController::class, 'register'])->name('register');
Route::post('/register',[AuthController::class, 'registerPost'])->name('register.Post');

Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard');


