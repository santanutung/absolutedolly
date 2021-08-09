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
Route::get('/art', [App\Http\Controllers\Front\ProductController::class, 'singleArt'])->name('art');
Route::get('/cart', [App\Http\Controllers\Front\ProductController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\Front\ProductController::class, 'checkout'])->name('checkout');
Route::post('/orderplace', [App\Http\Controllers\Front\ProductController::class, 'orderplace'])->name('orderplace');

Route::post('/cart', [App\Http\Controllers\CartController::class, 'store'])->name('cart.add');
Route::get('/show_physical', [App\Http\Controllers\CartController::class, 'show_physical']);
Route::get('/show_digital', [App\Http\Controllers\CartController::class, 'show_digital']);
Route::post('/order', [App\Http\Controllers\OrderController::class, 'store'])->name('order.place')->middleware('auth') ;
Route::post('/rozerpay_done', [App\Http\Controllers\OrderController::class, 'rozerpay_done'])->name('rozerpay_done')->middleware('auth');

Route::get('/test', [App\Http\Controllers\OrderController::class, 'test'])->name('test');












