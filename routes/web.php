<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GraphicController;
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

Route::get('/', [ HomeController::class, 'index' ])->name('app.index');
Route::get('/teste', [ HomeController::class, 'teste' ])->name('app.teste');
Route::post('/login', [ HomeController::class, 'login' ])->name('app.login');

Route::middleware('autenticate')->group(function() {
    Route::get('/home', [ HomeController::class, 'home' ])->name('app.home');
    Route::get('/logout', [ HomeController::class, 'logout' ])->name('app.logout');
    Route::get('/user', [ UserController::class, 'index' ])->name('app.user');
    Route::post('/user', [ UserController::class, 'store' ])->name('app.user.store');
    Route::get('/usershow/{id}', [ UserController::class, 'show' ])->name('app.user.show');
    Route::get('/user/{id}', [ UserController::class, 'destroy' ])->name('app.user.destroy');

    Route::get('/graphics', [ GraphicController::class, 'index' ])->name('app.graphics');
});
