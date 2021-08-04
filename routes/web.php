<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/cl', function () {
    return view('c');
});



Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Front 

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('/');

// product route
Route::get('/single-product', [App\Http\Controllers\Front\ProductController::class, 'singleProduct'])->name('single-product');
Route::get('/cart', [App\Http\Controllers\Front\ProductController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\Front\ProductController::class, 'checkout'])->name('checkout');


