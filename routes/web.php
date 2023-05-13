<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
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

// Welcome route

Route::get('/', function () {
    return view('pages.auth.login');
});

// Auth routes
Route::get('/login', [AuthController::class, 'index'])->name('auth.login');
Route::post('/login', [AuthController::class, 'connect'])->name('auth.connect');
Route::get('/forgot', [AuthController::class, 'forget'])->name('auth.forget');
Route::get('/logout', [AuthController::class, 'logout'])->name('auth.logout');

// Dashboard routes
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');



