<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeAdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RoleController;
use App\Http\Middleware\AdminMiddleware;

Route::get('/',function(){
    return view('landing');
});

//=================User Route=================================================================
//==============================================================================================
Route::get('/userDashboard',[UserController::class,'userDashboard'])->name('userDashboard');

Route::resource('user', UserController::class);
//=============================================================================================
//=================Login & Register Route ==============================================
Route::get('/user',[RegisterController::class,'ShowRegister']);
Route::post('/store',[RegisterController::class,'store'])->name('register');

Route::get('/showlogin',[LoginController::class,'ShowLogin'])->name('ShowLogin');
Route::post('/login',[LoginController::class,'Login'])->name('Login');
Route::post('/user',[LoginController::class,'logout'])->name('logout');
//=============================================================================================
//================ADMIN_ROUTE==============================================================
Route::middleware([AdminMiddleware::class])->group(function(){


    Route::get('/admin',[AdminController::class,'adminDashboard'])->name('adminDashboard');
//===============ADMIN_ROUTE{Role}start=====================================================================
    Route::get('/roles',[RoleController::class,'index'])->name('show_role_page');
    Route::get('/roles_create',[RoleController::class,'show_create'])->name('show_create_role_page');
    Route::post('/roles_store',[RoleController::class,'store_role'])->name('store_role');
    Route::delete('/roles_delete/{id}', [RoleController::class, 'destroy'])->name('role_delete');
    Route::get('/roles_edit/{id}', [RoleController::class, 'show_edit'])->name('show_role_edit');
    Route::post('/roles_update/{id}', [RoleController::class, 'update_role'])->name('update_role');
  //===============ADMIN_ROUTE{Role}END=====================================================================
  //=========================================================================================================

    //===============ADMIN_ROUTE{Employee}Start=====================================================================
     Route::get('/Employee',[EmployeeAdminController::class,'index'])->name('show_employee');
     Route::get('/Employee/add', [EmployeeAdminController::class, 'view_add'])->name('add_employee');
     Route::post('/Employee/store', [EmployeeAdminController::class, 'store'])->name('Employee_store');
     Route::get('/Employee/edit/{id}',[ EmployeeAdminController::class, 'edit'])->name('admin_edit');
     Route::put('/Employee/{id}/update', [EmployeeAdminController::class, 'update'])->name('Employee_update');





    //===============ADMIN_ROUTE{Employee}=====end================================================================
  //=========================================================================================================










});
