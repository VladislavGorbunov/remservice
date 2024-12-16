<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\AuthController;
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


Route::get('/', [PagesController::class, 'index']);
Route::get('/login/employer', [AuthController::class, 'loginEmployer'])->name('loginEmployer');
Route::post('/login', [AuthController::class, 'auth']);

Route::get('/login/applicant', [AuthController::class, 'loginApplicant'])->name('loginApplicant');

Route::get('/registration', [RegistrationController::class, 'registration'])->name('registration');
Route::get('/vacancy', [SearchController::class, 'vacancy']);
Route::get('/resume', [SearchController::class, 'resume']);


Route::get('/api/get', function() {
    sleep(1);
    return json_encode([
        'name' => 'Vladislav2',
        'lastname' => 'Gorbunov2',
        'age' => 34
    ]);
});

Route::get('/api/gets', function() {
    sleep(5);
    return json_encode([
        'name' => 'Vladislav1',
        'lastname' => 'Gorbunov1',
        'age' => 34
    ]);
});