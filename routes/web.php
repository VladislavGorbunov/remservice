<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\MastersController;
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
require __DIR__.'/admin.php';
require __DIR__.'/panel.php';

Route::get('/', [PagesController::class, 'index']);

Route::get('/about', [AboutController::class, 'index']);



Route::get('login', [AuthController::class, 'loginPage'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('registration', [RegistrationController::class, 'registration'])->name('registration');
Route::get('for-the-masters', [MastersController::class, 'index'])->name('for-the-masters');
Route::get('for-the-masters/registration', [RegistrationController::class, 'registrationMaster'])->name('registration-master');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/{region}', [PagesController::class, 'regionsPage']);


