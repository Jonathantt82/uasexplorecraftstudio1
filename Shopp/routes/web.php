<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/sign-up', [LoginController::class, 'signUp'])->name('sign-up');
Route::get('/course-page', [HomeController::class, 'coursepage'])->name('course-page');
Route::get('/payment-page', [HomeController::class, 'paymentpage'])->name('payment-page');
Route::get('/shop-page', [HomeController::class, 'shopPage'])->name('shop-page');
Route::get('/shop-cart', [HomeController::class, 'shopCart'])->name('shop-cart');
Route::post('/login-p', [LoginController::class, 'login'])->name('login-post');
Route::post('/add-cart-p', [HomeController::class, 'addCartM'])->name('add-post');
Route::post('/sign-up-p', [LoginController::class, 'register'])->name('sign-up-post');
Route::get('/user', [LoginController::class, 'getUser'])->name('user');

Route::get('/', [HomeController::class, 'index'])->name('landing');
Route::get('/profile', [HomeController::class, 'profile'])->name('profile');
Route::get('/course-cat', [HomeController::class, 'courseCat'])->name('course-category');
Route::get('/add-cart/{id}', [HomeController::class, 'addCart'])->name('add-cart-post');
Route::get('/delete-cart/{id}', [HomeController::class, 'deleteCart'])->name('delete-cart');
Route::get('/test', [HomeController::class, 'test'])->name('test');
