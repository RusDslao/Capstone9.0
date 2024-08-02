<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EnrollmentController;



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
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/enrollment', [AdminController::class, 'enrollment'])->name('admin.enrollment');
    Route::get('/admin/masterlist', [AdminController::class, 'masterlist'])->name('admin.masterlist');
    Route::get('/admin/schedule', [AdminController::class, 'schedule'])->name('admin.schedule');
    Route::get('/admin/sections', [AdminController::class, 'sections'])->name('admin.sections');
    Route::get('/admin/accounts', [AdminController::class, 'accounts'])->name('admin.accounts');
    Route::get('/admin/announcements', [AdminController::class, 'announcements'])->name('admin.announcements');
    Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
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

// Enrollments

Route::get('/form', [EnrollmentController::class, 'showForm'])->name('enrollment.form');
Route::post('/submit', [EnrollmentController::class, 'store'])->name('submit');

