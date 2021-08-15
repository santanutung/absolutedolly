<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Admin\SiteFontendSettingCommentsController as frontend;


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

Route::get('/a', function () {
    return view('welcome');
});



Route::group(
    ['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'AdminMiddleware']],
    function () {
        Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');


        Route::get('/footer', [frontend::class, 'footer_show'])->name('footer.footer_show');
        Route::put('/footer', [frontend::class, 'footer_update'])->name('footer.footer_update');

        Route::get('/contactpage', [frontend::class, 'contactpage_show'])->name('contactpage.setting');
        Route::put('/contactpage', [frontend::class, 'contactpage_update'])->name('contactpage.setting');






        Route::resource('categories', CategoryController::class);
        Route::resource('arts', ArtController::class);
        Route::resource('sliders', SliderController::class);
        Route::resource('news', NewsController::class);
        Route::resource('comments', CommentController::class);
        Route::resource('orders', CustomerOrderOrdeController::class);
        Route::resource('newcomments', CustomerCommentsController::class);



    }
);


