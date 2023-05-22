<?php

use App\Http\Controllers\ShoppingCartController;
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

Route::get('/', [\App\Http\Controllers\ProductController::class,'index'])->name('home');

Route::view('products/create', 'product.create')->name('product.create');
Route::post('products', [\App\Http\Controllers\ProductController::class, 'store'])->name('product.store');

Route::view('shopping-cart', 'cart.shopping-cart')->name('shopping.cart');
Route::get('product/{id}', [ShoppingCartController::class, 'addToCart'])->name('add.to.cart');
Route::post('product/{id}/add', [ShoppingCartController::class, 'deleteFromCart'])->name('delete.from.cart');
