<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Middleware\AdminMiddleware;
//=================User Route=================================================================
//==============================================================================================
route::get('/',[UserController::class,'userDashboard'])->name('userDashboard');

Route::resource('user', UserController::class);
//=============================================================================================
//=================Login & Register Route ==============================================
Route:: get('/user',[RegisterController::class,'ShowRegister']);
Route::post('/',[RegisterController::class,'store'])->name('register');

Route:: get('/user',[LoginController::class,'ShowLogin'])->name('ShowLogin');
Route::post('/user',[LoginController::class,'Login'])->name('Login');
//=============================================================================================
//================ADMIN_ROUTE==============================================================
 Route::middleware([AdminMiddleware::class])->group(function(){


    Route:: get('/admin',[AdminController::class,'adminDashboard'])->name('adminDashboard');


 });



