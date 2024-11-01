<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;


// Route untuk halaman beranda
Route::get('/', [MenuController::class, 'home'])->name('home');

// Route untuk halaman About
Route::get('/about', [MenuController::class, 'about'])->name('about');

// Route untuk halaman Contact
Route::get('/contact', [MenuController::class, 'contact'])->name('contact');

// Route untuk halaman Profil
Route::get('/profil', [MenuController::class, 'profil'])->name('profil');

// Route untuk halaman signup
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/strore-signup', [AuthController::class, 'storeSignup'])->name('storeSignup');

// Route untuk halaman signin
Route::get('/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/strore-signin', [AuthController::class, 'storeSignin'])->name('storeSignin');

Route::get('logout', function () {
    Auth::logout();
    return redirect()->to('/')->with('success', 'Berhasil logout');
})->name('logout')->middleware('auth');


// Route::get('/', function () {
//     return view('welcome');
// });
