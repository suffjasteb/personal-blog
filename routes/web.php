<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index'])->name('posts.index');

Route::get('/create', [PostController::class, 'create'])
    ->middleware('auth') // Proteksi halaman create agar hanya bisa diakses oleh user yang login
    ->name('posts.create');

Route::post('/store', [PostController::class, 'store'])->name('posts.store');

// Route untuk login
Route::get('/admin', [AuthController::class, 'showLoginForm'])->name('login'); 
Route::post('/admin', [AuthController::class, 'login']);

// Route untuk logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');


// /posts/{id} → {id} adalah parameter untuk menangkap ID postingan yang diklik.
// PostController@show → Nanti fungsi show() di PostController akan menangani permintaan ini.

Route::get('/about', function() {
    return view('about');
});