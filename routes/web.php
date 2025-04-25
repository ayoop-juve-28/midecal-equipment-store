<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

route::get('/',[UserController::class,'index']);

Route::resource('user', UserController::class);

Route:: get('/user',[LoginRegisterController::class,'index']);
Route:: get('/admin',[AdminController::class,'index']);


Route::post('/',[LoginRegisterController::class,'store'])->name('register');
