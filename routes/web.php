<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\LandingPageController;
use App\Http\Middleware\RedirectIfAuthenticated;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\Admin\ProdukUMKMController;
use App\Http\Controllers\Admin\BeritaController as AdminBeritaController;

// Rute admin dengan middleware AdminMiddleware
use App\Http\Controllers\Admin\ProgramController as AdminProgramController;
use App\Http\Controllers\Admin\KegiatanController as AdminKegiatanController;

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
        Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');


        // User Routes
        Route::get('/user', [UserController::class, 'index'])->name('user.index');
        Route::get('/user/create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user', [UserController::class, 'store'])->name('user.store');
        Route::get('/user/{user}', [UserController::class, 'show'])->name('user.show');
        Route::get('/user/{user}/edit', [UserController::class, 'edit'])->name('user.edit');
        Route::put('/user/{user}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user/{user}', [UserController::class, 'destroy'])->name('user.destroy');

        // Kegiatan Routes
        Route::get('/kegiatan', [AdminKegiatanController::class, 'index'])->name('kegiatan.index');
        Route::get('/kegiatan/create', [AdminKegiatanController::class, 'create'])->name('kegiatan.create');
        Route::post('/kegiatan', [AdminKegiatanController::class, 'store'])->name('kegiatan.store');
        Route::get('/kegiatan/{id}', [AdminKegiatanController::class, 'show'])->name('kegiatan.show');
        Route::get('/kegiatan/{id}/edit', [AdminKegiatanController::class, 'edit'])->name('kegiatan.edit');
        Route::put('/kegiatan/{id}', [AdminKegiatanController::class, 'update'])->name('kegiatan.update');
        Route::delete('/kegiatan/{id}', [AdminKegiatanController::class, 'destroy'])->name('kegiatan.destroy');

        // Produk UMKM Routes
        Route::get('/produk_umkm', [ProdukUMKMController::class, 'index'])->name('produk_umkm.index');
        Route::get('/produk_umkm/create', [ProdukUMKMController::class, 'create'])->name('produk_umkm.create');
        Route::post('/produk_umkm', [ProdukUMKMController::class, 'store'])->name('produk_umkm.store');
        Route::get('/produk_umkm/{id}/edit', [ProdukUMKMController::class, 'edit'])->name('produk_umkm.edit');
        Route::put('/produk_umkm/{id}', [ProdukUMKMController::class, 'update'])->name('produk_umkm.update');
        Route::delete('/produk_umkm/{id}', [ProdukUMKMController::class, 'destroy'])->name('produk_umkm.destroy');
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

Route::get('/', [LandingPageController::class, 'index'])->name('landing.page');

Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
Route::get('/ukcit', [ProgramController::class, 'viewprogram'])->name('ukcit.viewprogram');
Route::get('/program/{slug}', [ProgramController::class, 'show'])->name('program.show');

Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
Route::get('/berita/{slug}', [BeritaController::class, 'show'])->name('berita.show');
// Route for showing individual Kegiatan
Route::get('/kegiatan/{slug}', [KegiatanController::class, 'show'])->name('acara.show');


Route::get('/jawir', [AdminProgramController::class, 'indexjawir'])->name('program.jawir');

Route::get('/Jangwis', [ProgramController::class, 'Jangwis'])->name('Program.jangwis');
Route::get('/Adbud', [ProgramController::class, 'adbud'])->name('Program.adbud');
