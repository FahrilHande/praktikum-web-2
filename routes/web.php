<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

// Halaman awal
Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, "register"])->name('auth.register');
Route::get('/login', [AuthController::class, "login"])->name('auth.login');
Route::post('/register', [AuthController::class, "store"])->name('auth.store');
Route::post('/login', [AuthController::class, "authenticate"])->name('auth.authenticate');
Route::delete('/logout', [AuthController::class, "logout"])->name('auth.logout');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
    Route::get('/profile', [ProfileController::class, "index"])->name('profile.index');

    // Route untuk students
    Route::get('/students', [StudentController::class, 'index'])->name('students.index');
    Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');
    Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show');
    Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit');
    Route::post('/students', [StudentController::class, 'store'])->name('students.store');
    Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
    Route::put('/students/{id}', [StudentController::class, 'update'])->name('students.update');

    // Route untuk majors
    Route::get('/major', [MajorController::class, 'index'])->name('major.index');
    Route::get('/major/create', [MajorController::class, 'create'])->name('major.create'); 
    Route::get('/major/{id}/detail', [MajorController::class, 'show'])->name('major.show');
    Route::put('/major/{major}', [MajorController::class, 'update'])->name('major.update');
    Route::post('/major', [MajorController::class, 'store'])->name('major.store'); 
    Route::get('/majors/{id}/edit', [MajorController::class, 'edit'])->name('major.edit');
    Route::delete('/majors/{id}', [MajorController::class, 'destroy'])->name('major.destroy');
    Route::resource('majors', MajorController::class);

});