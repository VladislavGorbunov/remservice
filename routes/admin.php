<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
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

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index']);
    Route::get('/admin/categories', [CategoryController::class, 'allCategory']);
    Route::get('/admin/categories/create', [CategoryController::class, 'createCategory']);
    Route::post('/admin/categories/create', [CategoryController::class, 'createCategory']);
    Route::get('/admin/categories/edit/{id}', [CategoryController::class, 'editCategory']);
    Route::post('/admin/categories/edit/{id}', [CategoryController::class, 'editCategory']);
    Route::get('/admin/categories/delete/{id}', [CategoryController::class, 'deleteCategory']);
    
});