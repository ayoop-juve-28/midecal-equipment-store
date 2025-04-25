<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

route::get('/',[UserController::class,'index']);

Route::resource('user', UserController::class);

Route:: get('/user',[RegisterController::class,'index']);

Route::post('/',[RegisterController::class,'store'])->name('register');

Route:: get('/admin',[AdminController::class,'index']);

