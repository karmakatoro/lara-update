<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EmailSettingsController;
use App\Http\Controllers\InvoiceSettingsController;
use App\Http\Controllers\LeaveTypeController;
use App\Http\Controllers\LocalizationController;
use App\Http\Controllers\NotificationsSettingsController;
use App\Http\Controllers\RolesPermissionController;
use App\Http\Controllers\SalarySettingsController;
use App\Http\Controllers\ThemeController;
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

// Settings routes;
Route::resource('/company-settings', CompanyController::class);
Route::resource('/localization-settings', LocalizationController::class);
Route::resource('/theme-settings', ThemeController::class);
Route::resource('/roles-permissions-settings', RolesPermissionController::class);
Route::resource('/email-settings', EmailSettingsController::class);
Route::resource('/invoice-settings', InvoiceSettingsController::class);
Route::resource('/salary-settings', SalarySettingsController::class);
Route::resource('/notifications-settings', NotificationsSettingsController::class);
Route::resource('/leave-type-settings', LeaveTypeController::class);
Route::get('/change-password-settings', [AuthController::class, 'show_change_password'])->name('change-password-settings');
Route::post('/change-password', [AuthController::class, 'change_password'])->name('change-password');





