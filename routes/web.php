<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;

/*
|--------------------------------------------------------------------------
| Home
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index']);

/*
|--------------------------------------------------------------------------
| Products (Route Prefix)
|--------------------------------------------------------------------------
*/
Route::prefix('category')->group(function () {
    Route::get('/food-beverage', [ProductsController::class, 'foodBeverage']);
    Route::get('/beauty-health', [ProductsController::class, 'beautyHealth']);
    Route::get('/home-care', [ProductsController::class, 'homeCare']);
    Route::get('/baby-kid', [ProductsController::class, 'babyKid']);
});

/*
|--------------------------------------------------------------------------
| User (Route Parameter)
|--------------------------------------------------------------------------
*/
Route::get('/user/{id}/name/{name}', [UserController::class, 'profile']);

/*
|--------------------------------------------------------------------------
| Penjualan
|--------------------------------------------------------------------------
*/
Route::get('/penjualan', [PenjualanController::class, 'index']);