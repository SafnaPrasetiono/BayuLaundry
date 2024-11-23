<?php

use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\auth\adminAuthController;
use App\Http\Controllers\auth\userAuthController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

// ROUTING USERS
Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/home', [indexController::class, 'index'])->name('index');

Route::get('/login', [userAuthController::class, 'login'])->name('login');
Route::get('/signup', [userAuthController::class, 'signup'])->name('signup');


// ROUTING ADMIN
Route::get('/admin/login', [adminAuthController::class, 'login'])->name('admin.login');
Route::prefix('admin')->group(function () {
    Route::get('dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');
});
