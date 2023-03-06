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

Route::get('/',App\Http\Controllers\IndexController::class)->name('index');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/register', [App\Http\Controllers\RegisterController::class, 'form'])->name('user.register.form');

Route::post('/register', [App\Http\Controllers\RegisterController::class, 'register'])->name('user.register');

Route::get('/login', [App\Http\Controllers\AuthController::class, 'form'])->name('user.auth.form');

Route::post('/login', [App\Http\Controllers\AuthController::class, 'userAuth'])->name('user.auth');

Route::get('/logout', App\Http\Controllers\LogoutController::class)->name('user.logout');
