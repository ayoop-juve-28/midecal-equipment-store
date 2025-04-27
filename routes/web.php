<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AdminMiddleware;

route::get('/',[UserController::class,'index']);

Route::resource('user', UserController::class);

Route:: get('/user',[RegisterController::class,'index']);
Route:: get('/user',[LoginController::class,'index']);


Route::post('/',[RegisterController::class,'store'])->name('register');

Route::post('/user',[LoginController::class,'login'])->name('login');


 Route::middleware([AdminMiddleware::class])->group(function(){


    Route:: get('/admin',[AdminController::class,'index']);


 });



