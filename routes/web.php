<?php

use App\Http\Controllers\admin\adminController;
use App\Http\Controllers\admin\dashboardController;
use App\Http\Controllers\admin\orderAdminController;
use App\Http\Controllers\admin\productAdminController;
use App\Http\Controllers\admin\profileAdminController;
use App\Http\Controllers\admin\transactionAdminController;
use App\Http\Controllers\auth\adminAuthController;
use App\Http\Controllers\auth\userAuthController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\pages\orderController;
use App\Http\Controllers\pages\user\userController;
use App\Http\Middleware\adminAuthenticate;
use App\Http\Middleware\userAuthenticate;
use Illuminate\Support\Facades\Route;

// ROUTING USERS
Route::get('/', [indexController::class, 'index'])->name('index');
Route::get('/home', [indexController::class, 'index'])->name('index');
Route::get('/about', [indexController::class, 'about'])->name('about');
Route::get('/privasi', [indexController::class, 'privacy'])->name('privacy');
Route::get('/cara_pemesanan', [indexController::class, 'howpayment'])->name('howpayment');
Route::get('/term&condition', [indexController::class, 'termcondition'])->name('termcondition');


//ROUTING ORDER
Route::get('/pemesanan-produk', [orderController::class, 'cart'])->name('order');
Route::post('/order/product', [orderController::class, 'ordercart'])->name('order.product');
Route::get('/order/product/checkout', [orderController::class, 'checkout'])->name('order.checkout');


// AUTHEUSER
Route::get('/login', [userAuthController::class, 'login'])->name('login');
Route::get('/signup', [userAuthController::class, 'signup'])->name('signup');
Route::post('/signup/post', [userAuthController::class, 'signupPost'])->name('signup.post');
Route::get('/signup/actived/email={mail}/vkey={vkey}', [userAuthController::class, 'signupActivasi'])->name('signup.activasi');
// AUTHADMIN
Route::get('/admin/login', [adminAuthController::class, 'login'])->name('admin.login');



Route::prefix('admin')->middleware(adminAuthenticate::class)->group(function () {
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('admin.dashboard');

    Route::get('/profile', [profileAdminController::class, 'index'])->name('admin.profile');
    
    // ACCOUNT ROUTING
    Route::get('/account', [adminController::class, 'index'])->name('admin.account');
    Route::get('/account/create', [adminController::class, 'create'])->name('admin.account.create');
    Route::post('/account/create/post', [adminController::class, 'createPost'])->name('admin.account.create.post');
    Route::get('/account/update/{id}', [adminController::class, 'update'])->name('admin.account.update');
    Route::put('/account/update/{id}/post', [adminController::class, 'updatePost'])->name('admin.account.update.post');
    
    // PRODUCT ROUTING
    Route::get('/product', [productAdminController::class, 'data'])->name('admin.product');
    Route::get('/product/create', [productAdminController::class, 'create'])->name('admin.product.create');
    Route::post('/product/create/post', [productAdminController::class, 'createPost'])->name('admin.product.create.post');
    Route::get('/product/update/{id}', [productAdminController::class, 'update'])->name('admin.product.update');
    Route::put('/product/update/post/{id}', [productAdminController::class, 'updatePost'])->name('admin.product.update.post');
    Route::get('/product/detail/{id}/{slug}', [productAdminController::class, 'detail'])->name('admin.product.detail');
    
    // TRANSACTION ROUTING
    Route::get('transaction', [transactionAdminController::class, 'index'])->name('admin.transaction');
    
    
    Route::get('/order', [orderAdminController::class, 'index'])->name('admin.orders');
    Route::get('/order/create', [orderAdminController::class, 'create'])->name('admin.orders.create');
    Route::post('/order/upload', [orderAdminController::class, 'uploadFile'])->name('admin.orders.upload');


    Route::get('/logout', [adminController::class, 'logout'])->name('admin.logout');
});



Route::prefix('user')->middleware([userAuthenticate::class])->group(function () {
    Route::get('/account/profile', [userController::class, 'profile'])->name('user.profile');
    Route::get('/account/address', [userController::class, 'address'])->name('user.address');

    Route::get('/logout', [userController::class, 'logout'])->name('user.logout');
});

