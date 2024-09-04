<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ModulePermissionController;
use App\Http\Controllers\UserController;

// Users Routes

// In web.php
Route::get('/all_users', [UserController::class, 'index'])->name('users.index');
Route::get('user_details/{user}', [UserController::class, 'show'])->name('users.show');
Route::get('/users_details/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
// Handle form submission for assigning roles
Route::post('/assign_role', [ModulePermissionController::class, 'assignRoles'])->name('assign.roles');
Route::get('/assign_role', [ModulePermissionController::class, 'showAssignRolesForm'])->name('assign.roles.form');


// Public Routes
Route::get('/', function () {return view('pages.home');});
Route::get('/home', function () {return view('pages.home');});

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// Protected Routes (requires authentication)
// Route::middleware('auth')->group(function () {
    Route::resource('students', StudentController::class);
    Route::get('/student_details/{student_id}', [StudentController::class, 'show'])->name('students.show');
    Route::put('/student_details/{student_id}', [StudentController::class, 'update'])->name('students.update');
    Route::post('/admission_form_student', [StudentController::class, 'store'])->name('students.store');
// });