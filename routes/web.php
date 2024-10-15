<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;

// Route untuk halaman beranda
Route::get('/', [MenuController::class, 'home'])->name('home');

// Route untuk halaman About
Route::get('/about', [MenuController::class, 'about'])->name('about');

// Route untuk halaman Contact
Route::get('/contact', [MenuController::class, 'contact'])->name('contact');

// Route untuk halaman Profil
Route::get('/profil', [MenuController::class, 'profil'])->name('profil');


// Route::get('/', function () {
//     return view('welcome');
// });
