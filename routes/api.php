<?php

use Illuminate\Http\Request;
// use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::resource('users', App\Http\Controllers\Api\UsersController::class);

Route::post('auth/login', [App\Http\Controllers\Api\AuthController::class, 'login'])->name('auth.login');

