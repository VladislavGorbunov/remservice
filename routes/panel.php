<?php

use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\MasterController;
use App\Http\Controllers\Panel\CategoryController;
use App\Http\Controllers\Panel\PriceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['auth', 'master'])->group(function () {
    Route::get('/panel', [PanelController::class, 'index'])->name('panel-index');
    Route::get('/panel/about-me', [MasterController::class, 'profileInfo'])->name('master-info');
    Route::post('/panel/about-me', [MasterController::class, 'profileInfo'])->name('master-info');
    Route::get('/panel/category', [CategoryController::class, 'addCategory'])->name('category');
    Route::post('/panel/category', [CategoryController::class, 'addCategory'])->name('category');
    Route::get('/panel/price', [PriceController::class, 'price'])->name('price');
    Route::post('/panel/price', [PriceController::class, 'price'])->name('price');
});