<?php

use Illuminate\Support\Facades\Route;
// Landing Page
Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\Admin\ProgramController as AdminProgramController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;

// Admin routes for Program
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/program', [AdminProgramController::class, 'index'])->name('program.index');
    Route::get('/program/create', [AdminProgramController::class, 'create'])->name('program.create');
    Route::post('/program', [AdminProgramController::class, 'store'])->name('program.store');
    Route::get('/program/{id}/edit', [AdminProgramController::class, 'edit'])->name('program.edit');
    Route::put('/program/{id}', [AdminProgramController::class, 'update'])->name('program.update');
    Route::delete('/program/{id}', [AdminProgramController::class, 'destroy'])->name('program.destroy');

    // Admin routes for Berita
    Route::get('/berita', [AdminBeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/create', [AdminBeritaController::class, 'create'])->name('berita.create');
    Route::post('/berita', [AdminBeritaController::class, 'store'])->name('berita.store');
    Route::get('/berita/{id}/edit', [AdminBeritaController::class, 'edit'])->name('berita.edit');
    Route::put('/berita/{id}', [AdminBeritaController::class, 'update'])->name('berita.update');
    Route::delete('/berita/{id}', [AdminBeritaController::class, 'destroy'])->name('berita.destroy');
});
