<?php

use App\Http\Controllers\AdminController;
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

Route::get('/', [AdminController::class, 'index'])->name('index');

Route::get('/data-spop', [AdminController::class, 'dataSpop'])->name('data.spop');
Route::get('/data-spop/{id}', [AdminController::class, 'detailSpop'])->name('detail.spop');
Route::get('/tambah-spop', [AdminController::class, 'tambahSpop'])->name('tambah.spop');

Route::get('/data-lspop', [AdminController::class, 'dataLspop'])->name('data.lspop');
Route::get('/tambah-lspop', [AdminController::class, 'tambahLspop'])->name('tambah.lspop');
