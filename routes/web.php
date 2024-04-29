<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\FrontendController;

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
    return view('index');
});

// Route::get('/en', function () {
//     return view('index_en');
// })->name('frontend.en');

//frontend
Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');
Route::get('/en', [FrontendController::class, 'indexEn'])->name('frontend.en');
Route::get('/category/{name}', [FrontendController::class, 'category'])->name('frontend.category');
Route::get('/category/{name}/en', [FrontendController::class, 'categoryEn'])->name('frontend.categoryEn');
Route::get('/collection/{id}', [FrontendController::class, 'collection'])->name('frontend.collection');
Route::get('/collection/{id}/en', [FrontendController::class, 'collectionEn'])->name('frontend.collectionEn');
Route::get('/product/{id}', [FrontendController::class, 'product'])->name('frontend.product');
Route::get('/product/{id}/en', [FrontendController::class, 'productEn'])->name('frontend.productEn');
Route::get('/visualizer', [FrontendController::class, 'visualizer'])->name('frontend.visualizer');
Route::post('/search', [FrontendController::class, 'search'])->name('frontend.search');
Route::post('/search/en', [FrontendController::class, 'searchEn'])->name('frontend.searchEn');
Route::post('/filter/{id}', [FrontendController::class, 'filter'])->name('frontend.filter');
Route::post('/filter/{id}/en', [FrontendController::class, 'filterEn'])->name('frontend.filterEn');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

    //resource master
    Route::resource('slider', SliderController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('collection', CollectionController::class);
    Route::resource('product', ProductController::class);

    //ajax select2
    Route::get('/ajax-category', [AjaxController::class, 'selectCategory'])->name('ajax-category');
    Route::get('/ajax-collection', [AjaxController::class, 'selectCollection'])->name('ajax-collection');

    //product
    Route::put('/product/add-detail/{id}', [ProductController::class, 'storeDetail'])->name('product.storeDetail');
    Route::put('/product/update-description/{id}', [ProductController::class, 'storeDescription'])->name('product.storeDescription');
    Route::put('/product/deleteImageView/{id}', [ProductController::class, 'deleteImageView'])->name('product.deleteImageView');
});
