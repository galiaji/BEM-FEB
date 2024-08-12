<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;
use App\Http\Controllers\Admin\ProgramController as AdminProgramController;

// Rute admin dengan middleware AdminMiddleware
Route::prefix('admin')
    ->name('admin.')
    ->middleware(AdminMiddleware::class)
    ->group(function () {
        // Program Routes
        Route::get('/program', [AdminProgramController::class, 'index'])->name('program.index');
        Route::get('/program/create', [AdminProgramController::class, 'create'])->name('program.create');
        Route::post('/program', [AdminProgramController::class, 'store'])->name('program.store');
        Route::get('/program/{id}/edit', [AdminProgramController::class, 'edit'])->name('program.edit');
        Route::put('/program/{id}', [AdminProgramController::class, 'update'])->name('program.update');
        Route::delete('/program/{id}', [AdminProgramController::class, 'destroy'])->name('program.destroy');

        // Berita Routes
        Route::get('/berita', [AdminBeritaController::class, 'index'])->name('berita.index');
        Route::get('/berita/create', [AdminBeritaController::class, 'create'])->name('berita.create');
        Route::post('/berita', [AdminBeritaController::class, 'store'])->name('berita.store');
        Route::get('/berita/{id}/edit', [AdminBeritaController::class, 'edit'])->name('berita.edit');
        Route::put('/berita/{id}', [AdminBeritaController::class, 'update'])->name('berita.update');
        Route::delete('/berita/{id}', [AdminBeritaController::class, 'destroy'])->name('berita.destroy');

        // Berita User
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show'); // Add this line
        Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');
    });


// Rute Login dengan middleware RedirectIfAuthenticated
Route::middleware(RedirectIfAuthenticated::class)->group(function () {
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);

    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

// Rute Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
