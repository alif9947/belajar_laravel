<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;



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

// Route untuk menampilkan daftar semua pengguna
Route::get('/users', [AuthController::class, 'showUsers'])->name('users');

// Route untuk menampilkan detail pengguna berdasarkan ID
Route::get('/user/{id}', [AuthController::class, 'showUser'])->name('showUser');

// Route untuk menampilkan halaman edit user
Route::get('/user/edit/{id}', [AuthController::class, 'editUser'])->name('editUser');
Route::post('/user/update/{id}', [AuthController::class, 'updateUser'])->name('updateUser');

// Route untuk menampilka delete user
Route::delete('/user/delete/{id}', [AuthController::class, 'deleteUser'])->name('deleteUser');

// Route untuk mencari pengguna
Route::get('/users/search', [AuthController::class, 'searchUsers'])->name('searchUsers');


// Route untuk menampilkan daftar semua kategori
Route::resource('categories', CategoryController::class);
Route::get('/categories', [CategoryController::class, 'index'])->name('categories');

// Route untuk menampilkan daftar semua post
Route::resource('posts', PostController::class);
Route::get('/posts', [PostController::class, 'index'])->name('posts');


Route::get('logout', function () {
    Auth::logout();
    return redirect()->to('/')->with('success', 'Berhasil logout');
})->name('logout')->middleware('auth');


// Route::get('/', function () {
//     return view('welcome');
// });
