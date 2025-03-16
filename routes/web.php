<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\RouteMiddleware;
use App\Http\Middleware\GlobalMiddleware;



Route::get('/', function () {
    return view('welcome');
});

// CREATE ROUTES 

Route::post('/logout',[AuthController::class, 'logout'])->name('logout');

Route::middleware(['Global'])->controller(AuthController::class)->group(function(){

    Route::get('/login','login')->name('login');
    Route::post('/login','loginPost')->name('login.Post');
    
    Route::get('/register', 'register')->name('register');
    Route::post('/register','registerPost')->name('register.Post');
    
}) ;


Route::get('/dashboard',[AuthController::class, 'dashboard'])->name('dashboard')
->middleware(['RouteOnly']);




