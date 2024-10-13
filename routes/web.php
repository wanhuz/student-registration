<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseAddController;
use App\Http\Controllers\CourseRemoveController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/course', [CourseController::class, 'index'])->middleware(['auth', 'verified'])->name('course');

Route::get('/course/add', [CourseAddController::class, 'index'])->middleware(['auth', 'verified'])->name('course_add');
Route::get('/course/search', [CourseAddController::class, 'search'])->middleware(['auth', 'verified'])->name('course_search');
Route::post('/course/add', [CourseAddController::class, 'add'])->middleware(['auth', 'verified'])->name('user_add_course');

Route::get('/course/remove', [CourseRemoveController::class, 'index'])->middleware(['auth', 'verified'])->name('course_add');
Route::post('/course/remove', [CourseRemoveController::class, 'delete'])->middleware(['auth', 'verified'])->name('user_remove_course');

Route::get('/report', [ReportController::class, 'index'])->middleware(['auth', 'verified'])->name('report');

Route::get('/user/profile', function () {
    return view('profile');
})->middleware(['auth', 'verified'])->name('profile');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
