<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

Route::get('/', [LoginController::class, 'showLoginForm'])->name('login');

Route::post('/login', [LoginController::class, 'login'])->name('login.post');

Route::get('/dashboard', function () {
    return view('stats.dashboard');
})->name('dashboard');

Route::get('/cursos/crear', [CourseController::class, 'create'])->name('courses.create');

Route::get('/cursos/crear', [CourseController::class, 'create'])->name('courses.create');

Route::post('/cursos/guardar', [CourseController::class, 'store'])->name('courses.store');