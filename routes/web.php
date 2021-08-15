<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cl', function () {
    return view('c');
});


Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/works', [App\Http\Controllers\Front\HomeController::class, 'works'])->name('works');
Route::get('/contact', [App\Http\Controllers\Front\HomeController::class, 'contact'])->name('contact');





// Front

Route::get('/', [App\Http\Controllers\Front\HomeController::class, 'index'])->name('/');

// product route
Route::get('/art', [App\Http\Controllers\Front\ProductController::class, 'singleArt'])->name('art');
Route::get('/cart', [App\Http\Controllers\Front\ProductController::class, 'cart'])->name('cart');
Route::get('/checkout', [App\Http\Controllers\Front\ProductController::class, 'checkout'])->name('checkout')->middleware('auth');
Route::post('/orderplace', [App\Http\Controllers\Front\ProductController::class, 'orderplace'])->name('orderplace');

Route::post('/cart', [App\Http\Controllers\CartController::class, 'store'])->name('cart.add');
Route::post('/update', [App\Http\Controllers\CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [App\Http\Controllers\CartController::class, 'remove'])->name('cart.remove');



Route::get('/show_physical', [App\Http\Controllers\CartController::class, 'show_physical']);
Route::get('/show_digital', [App\Http\Controllers\CartController::class, 'show_digital']);
Route::post('/order', [App\Http\Controllers\OrderController::class, 'store'])->name('order.place')->middleware('auth') ;
Route::post('/rozerpay_done', [App\Http\Controllers\OrderController::class, 'rozerpay_done'])->name('rozerpay_done')->middleware('auth');

// Route::get('/test', [App\Http\Controllers\OrderController::class, 'test'])->name('test');
Route::get('/test', function(){
    return view('auth.loginone');
});

// Route::resource('profile', ProfileController::class)->middleware('auth');
Route::get('profile',[App\Http\Controllers\ProfileController::class, 'index'])->name('profile.index')->middleware('auth');

Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('profile.update')->middleware('auth');

Route::post('/guest_comment', [App\Http\Controllers\CommentController::class, 'create'])->name('guest.comment');

Route::post('/rate_now', [App\Http\Controllers\CommentController::class, 'store'])->name('rate_now');




















