<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['guest'])->group(function () {
    Route::get('/', [AuthController::class, 'login_view'])->name('login_view');
    Route::get('/register', [AuthController::class, 'register_view'])->name('register_view');
    Route::post('/', [AuthController::class, 'login_post'])->name('login_post');
    Route::post('/register', [AuthController::class, 'register_post'])->name('register_post');
});
