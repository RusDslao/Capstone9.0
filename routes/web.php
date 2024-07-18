<?php

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

// Enrollments
Route::get('/enrollment/choose', [EnrollmentController::class, 'chooseEnrollmentType'])->name('enrollment.choose');
Route::get('/enrollment/new', [EnrollmentController::class, 'newEnrollment'])->name('enrollment.new');
Route::get('/enrollment/existing', [EnrollmentController::class, 'existingEnrollment'])->name('enrollment.existing');
Route::post('/enrollment/new', [EnrollmentController::class, 'store'])->name('enrollment.store');

