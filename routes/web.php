<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;

// 1. Halaman Utama (Arahkan ke login kalau belum login)
Route::get('/', function () {
    return view('welcome');
});

// 2. Route yang butuh Login (Auth)
Route::middleware(['auth', 'verified'])->group(function () {
    
    // Halaman Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route Profile (Bawaan Breeze)
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route Product
    Route::resource('product', ProductController::class);

    // 3. Route Khusus Admin (UCP 1)
    Route::middleware(['can:manage-category'])->group(function () {
        Route::get('/category', [CategoryController::class, 'index'])->name('category.index');
        Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
        Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    });

    // Route About
    Route::get('/about', function () {
        return view('about');
    })->name('about');
});

// 4. WAJIB ADA: Memanggil rute login/register bawaan Breeze
require __DIR__.'/auth.php';