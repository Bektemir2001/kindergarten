<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/verification/email', [App\Http\Controllers\VerificateController::class, 'verification'])->name('verification');

Route::post('/admin/user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.user.create');
Route::post('/user/updatePassword', [App\Http\Controllers\ResetPasswordController::class, 'updatePassword'])->name('update.password');
Route::post('/admin/group/create',[App\Http\Controllers\Admin\GroupController::class, 'create'])->name('admin.group.create');


Route::post('/admin/user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('admin.user.create');

Route::post('/user/updatePassword', [App\Http\Controllers\ResetPasswordController::class, 'updatePassword'])->name('update.password');

