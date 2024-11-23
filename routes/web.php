<?php

use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\indexController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/home', [indexController::class, 'index'])->name('index');

Route::prefix('admin')->group(function () {
    Route::get('dashboard', [dashboardController::class, 'index'])->name('dashboard');
});
