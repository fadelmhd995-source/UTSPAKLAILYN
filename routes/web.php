<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ContactController;


Route::get('/', [HomeServiceController::class, 'index'])->name('index');
Route::get('/home', [HomeServiceController::class, 'home'])->name('home');

// HomeService resource routes (index, create, store, show, edit, update, destroy)
Route::resource('homeservice', HomeServiceController::class);

// HomeService authentication routes
Route::get('/login', [HomeServiceController::class, 'showLoginForm'])->name('login.form');
Route::post('/login', [HomeServiceController::class, 'login'])->name('login');
Route::get('/register', [HomeServiceController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [HomeServiceController::class, 'register'])->name('register');

Route::get('/homecleaning', [HomeServiceController::class, 'Homecleaning'])->name('Homecleaning');
Route::get('/deepcleaning', [HomeServiceController::class, 'Deepcleaning'])->name('Deepcleaning');
Route::get('/officecleaning', [HomeServiceController::class, 'Officecleaning'])->name('Officecleaning');
Route::get('/accleaning', [HomeServiceController::class, 'ACcleaning'])->name('ACcleaning');
Route::get('/tentangkami', [HomeServiceController::class, 'tentangkami'])->name('tentangkami');
Route::get('/shop', [HomeServiceController::class, 'shop'])->name('shop');
Route::post('/shop/recommend', [ShopController::class, 'recommend'])->name('shop.recommend');
Route::post('/order', [OrderController::class, 'store'])->name('order.store');
Route::get('/testimoni', [HomeServiceController::class, 'testimoni'])->name('testimoni');
Route::post('/testimoni.store', [HomeServiceController::class, 'testimoniStore'])->name('testimoni.store');