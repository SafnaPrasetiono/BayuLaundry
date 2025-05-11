<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\orderController;
use App\Http\Controllers\admin\productController;
use App\Http\Controllers\admin\profileController;
use App\Http\Controllers\admin\transactionController;
use App\Http\Controllers\auth\adminAuthController;
use App\Http\Controllers\auth\userAuthController;
use App\Http\Controllers\indexController;
use App\Http\Middleware\adminAuthenticate;
use Illuminate\Support\Facades\Route;

// ROUTING USERS
Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/home', [indexController::class, 'index'])->name('index');
Route::get('/about', [indexController::class, 'about'])->name('about');

Route::get('/login', [userAuthController::class, 'login'])->name('login');
Route::get('/signup', [userAuthController::class, 'signup'])->name('signup');


// ROUTING ADMIN
Route::get('/admin/login', [adminAuthController::class, 'login'])->name('admin.login');

Route::prefix('admin')->middleware([adminAuthenticate::class])->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/profile', [profileController::class, 'index'])->name('admin.profile');
    
    // ACCOUNT ROUTING
    Route::get('/account', [adminController::class, 'index'])->name('admin.account');
    Route::get('/account/create', [adminController::class, 'create'])->name('admin.account.create');
    Route::post('/account/create/post', [adminController::class, 'createPost'])->name('admin.account.create.post');
    Route::get('/account/update/{id}', [adminController::class, 'update'])->name('admin.account.update');
    Route::put('/account/update/{id}/post', [adminController::class, 'updatePost'])->name('admin.account.update.post');
    
    // PRODUCT ROUTING
    Route::get('/product', [productController::class, 'data'])->name('admin.product');
    Route::get('/product/create', [productController::class, 'create'])->name('admin.product.create');
    Route::post('/product/create/post', [productController::class, 'createPost'])->name('admin.product.create.post');
    Route::get('/product/update/{id}', [productController::class, 'update'])->name('admin.product.update');
    Route::put('/product/update/post/{id}', [productController::class, 'updatePost'])->name('admin.product.update.post');
    
    // TRANSACTION ROUTING
    Route::get('transaction', [transactionController::class, 'index'])->name('admin.transaction');
    
    
    Route::get('/order', [orderController::class, 'index'])->name('admin.orders');
    Route::post('/order/upload', [orderController::class, 'uploadFile'])->name('admin.orders.upload');


    Route::get('/logout', [adminController::class, 'logout'])->name('admin.logout');
});
