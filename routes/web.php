<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Student Routes
Route::middleware(['auth', 'user-role:student'])->group(function () {
    Route::get('/student/dashboard', [HomeController::class, 'student'])->name('student.dashboard');
});

// Admin Routes
Route::middleware(['auth', 'user-role:admin'])->group(function () {
    Route::get('/admin/dashboard', [HomeController::class, 'admin'])->name('admin.dashboard');
});

// Superadmin Routes
Route::middleware(['auth', 'user-role:superadmin'])->group(function () {
    Route::get('/superadmin/dashboard', [HomeController::class, 'superadmin'])->name('superadmin.dashboard');
});

// Cashier Routes
Route::middleware(['auth', 'user-role:cashier'])->group(function () {
    Route::get('/cashier/dashboard', [HomeController::class, 'cashier'])->name('cashier.dashboard');
});
Route::middleware(['auth', 'user-role:teacher'])->group(function () {
    Route::get('/teacher/dashboard', [HomeController::class, 'teacher'])->name('teacher.dashboard');
});