<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\barangController;
// use App\Http\Controllers\MilkController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WadController;
use App\Http\Controllers\OrderController;

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
Route::get('/home', [WadController::class, 'home']);
Route::get('/home/product', [WadController::class, 'product']);
Route::get('/home/order', [WadController::class, 'order']);
Route::get('/home/history', [WadController::class, 'history']);

// product CRUD
Route::get('/home/product/insert', [ProductController::class, 'input'])->name('yuk');
Route::post('/home/product/output', [ProductController::class, 'store'])->name('jembatan');
Route::get('/home/product/data', [ProductController::class, 'index'])->name('terserah');
Route::delete('/home/product/{product}', [ProductController::class, 'destroy']);
Route::get('/home/product/{id}', [ProductController::class, 'edit'])->name('edit');
Route::post('/home/product/{product}', [ProductController::class, 'update'])->name('apa');

// order CRUD
Route::resource('order', OrderController::class);
// wad modul5 end


// MILKY WAY start
// Route::get('home', [MilkController::class, 'home']);
// Route::get('home/about', [MilkController::class, 'about']);
// Route::get('home/product', [ProductController::class, 'index']);

// MILKY WAY end


// tugas kelas
// Route::get('barang', [barangController::class, 'index']);
// Route::get('barang/tambah', [barangController::class, 'tambah']);
// Route::get('barang/tambahBarang', [barangController::class, 'tambahBarang']);
// Route::get('barang/delete/{id}', [barangController::class, 'delete']);
// Route::get('barang/edit/{delId}', [barangController::class, 'edit']);
// Route::get('barang/update/{id}', [barangController::class, 'update']);
// tugas kelas end


