<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DashboardHomeController;

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

Route::get('/', [DashboardHomeController::class, 'landingpage'])->name('landingpage');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/register', [LoginController::class, 'register'])->name('register');
Route::post('/signup', [UserController::class, 'store'])->name('signup');
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::prefix('dashboard')->group(function () {
        Route::get('/', [DashboardHomeController::class, 'index'])->name('dashboard.home');
        Route::get('/user', [UserController::class, 'index'])->name('dashboard.user');
        Route::post('/user/{user}/verif', [UserController::class, 'verif'])->name('user.verif');
        Route::resource('product', ProductController::class);
        Route::post('/product/reset{product}', [ProductController::class, 'reset'])->name('product.reset');
    });
});
