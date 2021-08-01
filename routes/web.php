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


// !============= Frontend =============!

Route::get('/', [App\Http\Controllers\Front\ProjectController::class, 'index'])->name('/');

// Product
Route::get('/product-details', [App\Http\Controllers\Front\ProjectController::class, 'productDetails'])->name('product-details');
Route::get('/products', [App\Http\Controllers\Front\ProjectController::class, 'products'])->name('products');





