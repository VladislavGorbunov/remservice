<?php

use App\Http\Controllers\Panel\PanelController;
use App\Http\Controllers\Panel\MasterController;

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
    Route::get('/panel/add-technic', [PanelController::class, 'addTechnic'])->name('add-technic');
    Route::post('/panel/add-technic', [PanelController::class, 'addTechnic'])->name('add-technic');
});