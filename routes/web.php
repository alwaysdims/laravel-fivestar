<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('lending-page.index');
});

Route::get('/login',function(){
    return view('auth.login');
});

// route login
Route::post('/login',[AuthController::class, 'index'])->name('auth.index');
Route::post('/login',[AuthController::class, 'login'])->name('auth.login');
    