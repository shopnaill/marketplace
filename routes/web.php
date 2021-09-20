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

// Home Route | Show Products List
Route::get('/', function () {
    return view('home');
});
// Show Product Info
Route::get('/product/{id}', function () {
    return view('product.product_view');
})->name('product');
// Show Checkout Shopping Cart
Route::get('/checkout', function () {
    return view('product.checkout');
})->name('checkout');

// Auth Routes
Auth::routes(); 