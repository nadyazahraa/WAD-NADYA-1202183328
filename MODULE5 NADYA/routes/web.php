<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WadController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// wad modul5 start
Route::get('home', [WadController::class, 'home']);
Route::get('home/product', [WadController::class, 'product']);
Route::get('home/order', [OrderController::class, 'order']);
Route::get('home/history', [WadController::class, 'history']);

// product CRUD
Route::get('home/product/insert', [ProductController::class, 'input'])->name('yuk');
Route::post('home/product/output', [ProductController::class, 'store'])->name('jembatan');
Route::get('home/product/data', [ProductController::class, 'index'])->name('terserah');
Route::delete('home/product/{product}', [ProductController::class, 'destroy']);
Route::get('home/product/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('home/product/{product}', [ProductController::class, 'update'])->name('apa');

// order CRUD
Route::get('home/order/create', [OrderController::class, 'create'])->name('buat');
// // wad modul5 end


// tugas kelas start
// Route::get('/utama', [StoryController::class, 'index']);
// Route::get('/utama/create', [StoryController::class, 'tambah']);
// Route::post('/utama/create', [StoryController::class, 'store'])->name('buat');
// Route::get('/utama/{story}', [StoryController::class, 'show'])->name('tampil');
// Route::delete('/utama/{story}', [StoryController::class, 'destroy'])->name('hapus');
// Route::get('/utama/{story}/edit', [StoryController::class, 'edit'])->name('edit');
// Route::post('/utama/{story}', [StoryController::class, 'update'])->name('update');
// tugas kelas end