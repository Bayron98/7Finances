<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::redirect('/', '/dashboard');

//authentification routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/authenticate', [AuthController::class, 'authenticate'])->name('authenticate');

//home routes
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

//admin routes
Route::prefix('admin')->group(function(){
    Route::resource('users', UserController::class);

    Route::get('/profile', [AdminController::class, 'profile'])->name('admin.profile');
    Route::get('/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/', [AdminController::class, 'update'])->name('admin.update');
});
