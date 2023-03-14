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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::group(['prefix'=>'admin', 'middleware'=>'admin'], function (){
    Route::get('/', \App\Http\Controllers\Admin\IndexController::class)->name('admin');

    Route::group(['prefix'=>'user'],function (){
        Route::get('/',[App\Http\Controllers\Admin\UserController::class,'index'])->name('admin.user.index');
        Route::delete('/{user}', [App\Http\Controllers\Admin\UserController::class,'delete'])->name('admin.user.delete');
        Route::get('/edit/{user}', [App\Http\Controllers\Admin\UserController::class,'edit'])->name('admin.user.edit');
        Route::patch('/{user}', [App\Http\Controllers\Admin\UserController::class,'update'])->name('admin.user.update');
        Route::get('/show/{user}', [App\Http\Controllers\Admin\UserController::class,'show'])->name('admin.user.show');
    });
});

