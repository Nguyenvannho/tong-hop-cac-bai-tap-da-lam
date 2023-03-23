<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\ShopController;
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


Route::get('/',[\App\Http\Controllers\ShopController::class,'index'])->name('shop.index');
Route::get('/carts',[\App\Http\Controllers\ShopController::class,'getCart'])->name('shop.getCart');
Route::get('add-to-cart/{id}', [\App\Http\Controllers\ShopController::class,'addToCart'])->name('add-to-cart');
// Route::delete('/remove-from-cart/{id}', [CartController::class, 'removeCart'])->name('remove.from.cart');