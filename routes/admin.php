<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Admin\RegionController;
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
    
    Route::get('/admin/subcategories', [SubCategoryController::class, 'allSubCategory']);
    Route::get('/admin/subcategories/create', [SubCategoryController::class, 'createSubCategory']);
    Route::post('/admin/subcategories/create', [SubCategoryController::class, 'createSubCategory']);
    Route::get('/admin/subcategories/edit/{id}', [SubCategoryController::class, 'editSubCategory']);
    Route::post('/admin/subcategories/edit/{id}', [SubCategoryController::class, 'editSubCategory']);
    Route::get('/admin/subcategories/delete/{id}', [SubCategoryController::class, 'deleteSubCategory']);

    Route::get('/admin/regions', [RegionController::class, 'allRegions']);
    Route::get('/admin/regions/create', [RegionController::class, 'createRegion']);
    Route::post('/admin/regions/create', [RegionController::class, 'createRegion']);
    Route::get('/admin/regions/edit/{id}', [RegionController::class, 'editRegion']);
    Route::post('/admin/regions/edit/{id}', [RegionController::class, 'editRegion']);
});