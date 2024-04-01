<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AjaxController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

    //resource master
    Route::resource('category', CategoryController::class);
    Route::resource('collection', CollectionController::class);
    Route::resource('product', ProductController::class);

    //ajax select2
    Route::get('/ajax-category', [AjaxController::class, 'selectCategory'])->name('ajax-category');
    Route::get('/ajax-collection', [AjaxController::class, 'selectCollection'])->name('ajax-collection');
});
