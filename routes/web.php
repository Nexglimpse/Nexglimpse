<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\dashboardController;
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

// Route::get('/', function () {
//     return view('auth/login');
// })->name('home');
Route::get('/', [PageController::class, 'index'])->name('landing');

// Authentication routes
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Prefix all dashboard-related routes
Route::prefix('dashboard')->middleware('auth')->group(function () {

    Route::get('/', [dashboardController::class, 'view'])->name('dashboard');

    // User Module Routes
    Route::prefix('user')->group(function () {
        // Route::get('/create', [UserController::class, 'createUser'])->name('users.create');
        // Route::post('/create/save', [UserController::class, 'saveUser'])->name('users.create.save');
        // Route::get('/edit/{id}', [UserController::class, 'edit'])->name('users.edit');
        // Route::post('/edit/{id}/save', [UserController::class, 'update'])->name('users.edit.save');
        // Route::post('/delete/{id}', [UserController::class, 'delete'])->name('users.delete');
    });

});
