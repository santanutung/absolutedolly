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

Route::get('/c', function () {
    return view('welcome');
});



Route::group([
    'as' => 'customer.', 'prefix' => 'customer', 'namespace' => 'Customer'
     ,'middleware'=>['auth', 'CustomerMiddleware']
], function () {
    Route::get('/dashboard', [App\Http\Controllers\Customer\DashboardController::class, 'index'])->name('dashboard');
});



