<?php

use App\Http\Controllers\StatistikController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TentangController;
use App\Http\Controllers\UserBlogController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PesananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\PaketwisataController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// ======= Auth ======== //
// * Login & Logout * //
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('logout', [LoginController::class, 'logout'])->name('logout');
// * Register
Route::get('register', [RegisterController::class, 'create'])->name('register');
Route::post('register-proses', [RegisterController::class, 'store'])->name('register-store');

// ======= User ========
// BERANDA //
Route::get('/', [HomeController::class,'index'])->name('user.index');

// PAKET WISATA //
Route::get('wisata', [WisataController::class,'index'])->name('wisata.index');
Route::get('wisata/{id}', [WisataController::class,'show'])->name('wisata.detail');

// RESERVASI //
Route::post('pesan/{id}', [PesananController::class, 'store'])->name('pesanan.store');

// BLOG //
Route::get('userblog', [UserBlogController::class,'index'])->name('user.blog');
Route::get('userblog/show/{id}', [UserBlogController::class,'show'])->name('blog.detail');

// TENTANG //
Route::get('tentang', [TentangController::class,'index'])->name('tentang.index');


// ======= Admin ========
// Route::group(['prefix' => 'admin','middleware' => ['auth']], function(){

    Route::middleware(['admin'])->group(function () {
    // * Route Dashboard*
    Route::get('profil', [ProfilController::class, 'index'])->name('profil.index');

    // * Route Dashboard*
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

    // * Route Paket Wisata*
    Route::get('paketwisata', [PaketwisataController::class, 'index'])->name('paketwisata.index');
    Route::get('paketwisata/create', [PaketwisataController::class, 'create'])->name('paketwisata.create');
    Route::post('paketwisata', [PaketwisataController::class, 'store'])->name('paketwisata.store');
    Route::get('paketwisata/edit/{id}', [PaketisataController::class, 'edit'])->name('paketwisata.edit');
    Route::put('paketwisata/update/{id}', [PaketwisataController::class, 'update'])->name('paketwisata.update');
    Route::delete('paketwisata/{id}', [PaketwisataController::class,'destroy'])->name('paketwisata.delete');

    // * Route Pesanan*
    Route::get('daftarpesanan', [PesananController::class, 'index'])->name('daftarpesanan.index');

    // * Blog
    Route::get('blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('blog/tambah', [BlogController::class, 'create'])->name('blog.create');
    Route::post('blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('blog/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('blog/update/{id}', [BlogController::class, 'destroy'])->name('blog.delete');

    // Pengguna
    Route::get('admin', [AdminController::class, 'index'])->name('admin.index');

    Route::get('pengguna', [UserController::class, 'index'])->name('pengguna.index');
    Route::get('pengguna/tambah', [UserController::class, 'create'])->name('pengguna.create');
    Route::post('pengguna', [UserController::class, 'store'])->name('pengguna.store');
    Route::delete('pengguna/{id}', [UserController::class, 'destroy'])->name('pengguna.delete');

    // Statistik
    Route::get('statistik', [StatistikController::class, 'index'])->name('statistik.index');
});

