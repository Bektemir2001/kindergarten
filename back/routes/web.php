<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/{user?}',App\Http\Controllers\IndexController::class)->name('index');

Route::get('/user/register', [App\Http\Controllers\RegisterController::class, 'form'])->name('user.register.form');

Route::post('/user/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('user.register');

Route::get('/user/login', [App\Http\Controllers\AuthController::class, 'form'])->name('user.auth.form');

Route::post('/user/login', [App\Http\Controllers\AuthController::class, 'userAuth'])->name('user.auth');

Route::get('/user/logout', App\Http\Controllers\LogoutController::class)->name('user.logout');

Route::get('/verification/form/{user}', [App\Http\Controllers\VerificateController::class, 'form'])->name('verification.form');

Route::get('/user/resetPassword', [App\Http\Controllers\ResetPasswordController::class, 'form'])->name('reset.password.form');
Route::post('/user/resetPassword', [App\Http\Controllers\ResetPasswordController::class, 'sendLink'])->name('reset.password.link');

Route::get('/user/resetPassword/{email}', [App\Http\Controllers\ResetPasswordController::class, 'changePassword'])->name('change.password.form');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix'=>'admin', 'middleware'=>'admin'], function (){
    Route::get('/index', \App\Http\Controllers\Admin\IndexController::class)->name('admin');

    Route::group(['prefix'=>'user'],function (){
        Route::get('/',[App\Http\Controllers\Admin\UserController::class,'index'])->name('admin.user.index');
        Route::delete('/{user}', [App\Http\Controllers\Admin\UserController::class,'delete'])->name('admin.user.delete');
        Route::get('/edit/{user}', [App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin.user.edit');
        Route::patch('/update/{user}', [App\Http\Controllers\Admin\UserController::class,'update'])->name('admin.user.update');
        Route::get('/show/{user}', [App\Http\Controllers\Admin\UserController::class,'show'])->name('admin.user.show');
    });

    Route::group(['prefix'=>'group'], function (){
        Route::get('/',[App\Http\Controllers\Admin\GroupController::class,'index'])->name('admin.group.index');
        Route::get('/show/{group}',[App\Http\Controllers\Admin\GroupController::class, 'show'])->name('admin.group.show');
        Route::get('/edit/{group}', [App\Http\Controllers\Admin\GroupController::class, 'edit'])->name('admin.group.edit');
        Route::patch('/update/{group}', [App\Http\Controllers\Admin\GroupController::class, 'update'])->name('admin.group.update');
        Route::delete('/{group}',[App\Http\Controllers\Admin\GroupController::class, 'delete'])->name('admin.group.delete');

        Route::get('/add/{group}', [App\Http\Controllers\Admin\GroupController::class, 'addGallery'])->name('admin.group.addGAllery');
    });
});

