<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
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
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//home routes
Route::get('/dashboard', [HomeController::class, 'dashboard'])->name('dashboard')->middleware('auth');

Route::middleware('auth')->group(function () {
    Route::resourceParameters(
        ['clients' => 'id'],
        ['projects' => 'id'],
        ['invoices' => 'id'],
        ['quotes' => 'id'],
        ['payments' => 'id'],
        ['vendors' => 'id'],
        ['expenses' => 'id'],
    );
    //clients routes
    Route::resource('clients', ClientController::class);
    //projects routes
    Route::resource('projects', ProjectController::class);
    //invoices routes
    Route::resource('invoices', InvoiceController::class);
    //quotes routes
    Route::resource('quotes', QuoteController::class);
    //payments routes
    Route::resource('payments', PaymentController::class);

    //vendors routes
    Route::resource('vendors', VendorController::class);
    //expenses routes
    Route::resource('expenses', ExpenseController::class);
});


//admin routes
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::resource('users', UserController::class);

    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/edit', [AdminController::class, 'edit'])->name('admin.edit');
    Route::put('/', [AdminController::class, 'update'])->name('admin.update');
});

// user profile (read only)
Route::prefix('user')->group(function(){
    Route::get('/profile', function(){return view('user.show');})->name('user.profile');
});