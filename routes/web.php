<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CollectionController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\AjaxController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AjaxFrontendController;
use App\Http\Controllers\TypicalController;
use App\Http\Controllers\DigitalController;
use App\Http\Controllers\CareertwoController;

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
Route::get('/allProduct', [FrontendController::class, 'allProduct'])->name('frontend.allProduct');
Route::post('/filterProduct', [FrontendController::class, 'filterProduct'])->name('frontend.filterProduct');
Route::get('/product/{id}/en', [FrontendController::class, 'productEn'])->name('frontend.productEn');
Route::get('/visualizer', [FrontendController::class, 'visualizer'])->name('frontend.visualizer');
Route::get('/contacts', [FrontendController::class, 'contact'])->name('frontend.contact');
Route::get('/contacts/en', [FrontendController::class, 'contactEn'])->name('frontend.contactEn');
Route::post('/contacts-store/{id}', [FrontendController::class, 'contactStore'])->name('frontend.contactStore');
Route::post('/search', [FrontendController::class, 'search'])->name('frontend.search');
Route::post('/search/en', [FrontendController::class, 'searchEn'])->name('frontend.searchEn');
Route::post('/filter/{id}', [FrontendController::class, 'filter'])->name('frontend.filter');
Route::post('/filter/{id}/en', [FrontendController::class, 'filterEn'])->name('frontend.filterEn');
Route::get('/careers', [FrontendController::class, 'career'])->name('frontend.career');
Route::get('/careersv2', [FrontendController::class, 'careerv2'])->name('frontend.careerv2');
Route::get('/careersDetailv2/{id}', [FrontendController::class, 'careerDetailv2'])->name('frontend.careerDetailv2');
Route::get('/careers/en', [FrontendController::class, 'careerEn'])->name('frontend.careerEn');
Route::get('/careerDetail/{id}', [FrontendController::class, 'careerDetail'])->name('frontend.careerDetail');
Route::get('/careerDetail/{id}/en', [FrontendController::class, 'careerDetailEn'])->name('frontend.careerDetailEn');
Route::get('/digital-library', [FrontendController::class, 'library'])->name('frontend.library');

//ajax frontend
Route::get('/ajax-frontend-series', [AjaxFrontendController::class, 'selectSeries'])->name('ajax-frontend-series');
Route::get('/ajax-frontend-texture', [AjaxFrontendController::class, 'selectTexture'])->name('ajax-frontend-texture');
Route::get('/ajax-frontend-category', [AjaxFrontendController::class, 'selectCategory'])->name('ajax-frontend-category');
Route::get('/ajax-frontend-collection', [AjaxFrontendController::class, 'selectCollection'])->name('ajax-frontend-collection');
Route::get('/ajax-frontend-name', [AjaxFrontendController::class, 'selectName'])->name('ajax-frontend-name');

//ajax form frontend
Route::post('/ajax-resume', [AjaxFrontendController::class, 'storeResume'])->name('ajax-resume');

Auth::routes();

Route::middleware('auth')->group(function(){
    Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('admin');

    //resource master
    Route::resource('slider', SliderController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('collection', CollectionController::class);
    Route::resource('product', ProductController::class);
    Route::resource('contact', ContactController::class);
    Route::resource('careerier', CareerController::class);
    Route::resource('typical', TypicalController::class);
    Route::resource('digitals', DigitalController::class);
    Route::resource('careertwo', CareertwoController::class);

    //ajax select2
    Route::get('/ajax-category', [AjaxController::class, 'selectCategory'])->name('ajax-category');
    Route::get('/ajax-collection', [AjaxController::class, 'selectCollection'])->name('ajax-collection');

    //product
    Route::put('/product/add-detail/{id}', [ProductController::class, 'storeDetail'])->name('product.storeDetail');
    Route::put('/product/update-description/{id}', [ProductController::class, 'storeDescription'])->name('product.storeDescription');
    Route::put('/product/deleteImageView/{id}', [ProductController::class, 'deleteImageView'])->name('product.deleteImageView');
    Route::put('/product/addFile/{id}', [ProductController::class, 'storeFile'])->name('product.storeFile');
    Route::put('/product/deleteFile/{id}', [ProductController::class, 'deleteFile'])->name('product.deleteFile');
    Route::put('/product/deleteDetailIamge/{id}', [ProductController::class, 'deleteDetailImage'])->name('product.deleteDetailImage');
    Route::post('/product/storeWithCategory', [ProductController::class, 'storeWithCategory'])->name('product.storeWithCategory');

    //career
    Route::get('/careerier/add-detail/{id}', [CareerController::class, 'addDetail'])->name('career.addDetail');
    Route::post('/careerier/store-detail/{id}', [CareerController::class, 'storeDetail'])->name('career.storeDetail');
    Route::get('/careerier/edit-detail/{id}', [CareerController::class, 'editDetail'])->name('career.editDetail');
    Route::put('/careerier/update-detail/{id}', [CareerController::class, 'updateDetail'])->name('career.updateDetail');
    Route::get('/careerier/resume/{id}', [CareerController::class, 'resumeCareer'])->name('career.resume');
    Route::delete('/careerier/deleteResume/{id}/{id_career}', [CareerController::class, 'deleteResume'])->name('career.deleteResume');

    //category
    Route::get('/typical/add/{id}', [CategoryController::class, 'addTypical'])->name('typical.addTypical');
    Route::post('/typical/storeTypical/{id}', [CategoryController::class, 'storeTypical'])->name('typical.storeTypical');
    Route::delete('/typical/deleteTypical/{id}/{id_category}', [CategoryController::class, 'deleteTypical'])->name('typical.deleteTypical');
    Route::get('/typical/edit/{id}', [CategoryController::class, 'editTypical'])->name('typical.editTypical');
    Route::put('/typical/updateTypical/{id}', [CategoryController::class, 'updateTypical'])->name('typical.updateTypical');

    //collection
    Route::get('/typical-collection/add/{id}', [CollectionController::class, 'addTypical'])->name('typicalCollection.addTypical');
    Route::post('/typical-collection/storeTypical/{id}', [CollectionController::class, 'storeTypical'])->name('typicalCollection.storeTypical');
    Route::delete('/typical-collection/deleteTypical/{id}/{id_collection}', [CollectionController::class, 'deleteTypical'])->name('typicalCollection.deleteTypical');
    Route::get('/typical-collection/edit/{id}', [CollectionController::class, 'editTypical'])->name('typicalCollection.editTypical');
    Route::put('/typical-collection/updateTypical/{id}', [CollectionController::class, 'updateTypical'])->name('typicalCollection.updateTypical');

    //career model 2
    Route::get('/jobs/{id}', [CareertwoController::class, 'indexJob'])->name('job.index');
    Route::post('/job/storeJob/{id}', [CareertwoController::class, 'storeJob'])->name('job.storeJob');
    Route::delete('/job/deleteJob/{id}/{id_careertwo}', [CareertwoController::class, 'deleteJob'])->name('job.deleteJob');
    Route::put('/job/updateJob/{id}', [CareertwoController::class, 'updateJob'])->name('job.updateJob');
});
