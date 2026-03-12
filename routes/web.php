<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PenjualanController;
// Jobsheet 3
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;

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

// Jobsheet 3
Route::get('/level', [LevelController::class, 'index']);
Route::get('/kategori', [KategoriController::class, 'index']);
Route::get('/user', [UserController::class, 'index']);

// Jobsheet 4
Route::get('/user/tambah', [UserController::class, 'tambah']);
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);