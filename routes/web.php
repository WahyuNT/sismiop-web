<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\SketController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */



 Route::get('/', fn () => view('pages.home'))->name('home');
Route::get('/login', [UserController::class, 'login'])->name('login');

Route::post('/loginStore', [UserController::class, 'loginStore'])->name('login.proses');

Route::prefix('/')->middleware(['auth'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('index');
    Route::get('/data-spop', [AdminController::class, 'dataSpop'])->name('data.spop');
    Route::get('/data-spop/{id}/detail', [AdminController::class, 'detailSpop'])->name('detail.spop');
    Route::get('/tambah-spop', [AdminController::class, 'tambahSpop'])->name('tambah.spop');

    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/tambah', [BeritaController::class, 'tambah'])->name('berita.tambah');
    Route::get('/berita/{id}/edit', [BeritaController::class, 'edit'])->name('berita.edit');
    Route::post('/berita/update', [BeritaController::class, 'updateStore'])->name('berita.updateStore');

    Route::get('/data-lspop', [AdminController::class, 'dataLspop'])->name('data.lspop');
    Route::get('/data-lspop/{id}/detail', [AdminController::class, 'detailLspop'])->name('detail.lspop');
    Route::get('/tambah-lspop', [AdminController::class, 'tambahLspop'])->name('tambah.lspop');

    Route::get('/data-terhapus', [AdminController::class, 'dataTerhapus'])->name('data.terhapus');
    Route::get('/data-terhapus/{id}/detail', [AdminController::class, 'detailTerhapus'])->name('detail.terhapus');

    Route::get('/profile', fn () => view('pages.profile'))->name('profile');
    Route::get('/buat-akun', fn () => view('pages.buat-akun'))->name('buat-akun');
    Route::get('/ubah-password', fn () => view('pages.ubah-password'))->name('ubah-password');
    Route::get('/data-akun', fn () => view('pages.data-akun'))->name('data-akun');
    Route::get('/data-akun/{id}/update', fn ($id) => view('pages.ubah-data-akun', ['id' => $id]))->name('ubah-data-akun');


    Route::get('/sket/{id}/edit', [SketController::class, 'show'])->name('edit.sket');
    Route::post('/sket/store', [SketController::class, 'store'])->name('store.sket');


    // Route::get('/register', [UserController::class, 'register'])->name('register');
    Route::post('/registerProses', [UserController::class, 'registerProses'])->name('register.proses');
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');
});
