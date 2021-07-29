<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/', App\Http\Livewire\Home::class)->name('home');
Route::get('/products', App\Http\Livewire\ProductIndex::class)->name('products');
Route::get('/products/judul/{judulId}', App\Http\Livewire\ProductJudul::class)->name('products.judul');
Route::get('/products/{id}', App\Http\Livewire\ProductDetail::class)->name('products.detail');
Route::get('/keranjang', App\Http\Livewire\Keranjang::class)->name('keranjang');
Route::get('/checkout', App\Http\Livewire\Checkout::class)->name('checkout');
Route::get('/history', App\Http\Livewire\History::class)->name('history');
Route::get('/admin/index', [App\Http\Livewire\AdminController::class, 'render'])->name('produk.index');
Route::get('/admin/show', [App\Http\Livewire\AdminController::class, 'show'])->name('produk.show');
Route::get('/admin/edit/{id}', [App\Http\Livewire\AdminController::class, 'edit'])->name('produk.edit');
Route::get('/admin/destroy/{id}', [App\Http\Livewire\AdminController::class, 'destroy'])->name('produk.destroy');
Route::get('/admin/create', [App\Http\Livewire\AdminController::class, 'create'])->name('produk.create');
Route::post('/admin/create', [App\Http\Livewire\AdminController::class, 'store'])->name('produk.store');
Route::post('/admin/create/{id}', [App\Http\Livewire\AdminController::class, 'update'])->name('produk.update');
Route::get('/pembayaran', App\Http\Livewire\Pembayaran::class)->name('pembayaran');

