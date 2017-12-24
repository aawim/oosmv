<?php

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


Route::get('/info/aboutus', 'PagesController@aboutus');
Route::get('/info/faq', 'PagesController@faq');
Route::get('/info/termsconditions', 'PagesController@termsconditions');
Route::get('/info/privacypolicy', 'PagesController@privacypolicy');
Route::get('/info/delivery', 'PagesController@delivery');
Route::get('/info/customerservice', 'PagesController@customerservice');
Route::get('/info/payment', 'PagesController@payment');
Route::get('/info/shipping', 'PagesController@shipping');

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::get('/client/myaccountchange/{id}', 'MyAccountController@editAccountInformation');
Route::get('/manage/photo/{id}', 'ProductPhotoController@addPhoto');
Route::get('/manage/view/{id}', 'ProductPhotoController@viewPhoto');
Route::get('wellhome','SearchController@liveSearch'); 
Route::get('find','SearchController@search'); 
Route::get('stores','SearchController@viewStores');
Route::get('store/{id}','SearchController@oneStore'); 
Route::get('find/{id}','SearchController@catesearch'); 
Route::get('scat','ProductController@getscat'); 
Route::get('findSubCat', 'ProductController@findSubCatgeoryName');
Route::resource('/item', 'ProductDetailController');
Auth::routes();
Route::prefix('manage')->group(function(){
    Route::get('/home', 'HomeController@dash')->name('index');
    Route::resource('/category', 'CategoryController');
    Route::resource('/subcat', 'SubcatController');
    Route::resource('/brand', 'BrandController');
    Route::resource('/product', 'ProductController');
    Route::resource('/store', 'StoreController');
    Route::resource('/review', 'ReviewController');
    Route::resource('/photo', 'ProductPhotoController');
    Route::resource('/carousel', 'CarouselController');
    
});
    Route::prefix('client')->group(function(){
    Route::resource('/category', 'CategoryController');
    Route::resource('/cart', 'CartController');
    Route::resource('/myaccount', 'ClientController');
    Route::resource('/contact', 'ContactController');
});


/*
//      Route::group(array('before' => 'auth'), function(){
//     Route::get('/home', 'HomeController@dash')->name('index');
//     Route::resource('/category', 'CategoryController');
//     Route::resource('/subcat', 'SubcatController');
//     Route::resource('/brand', 'BrandController');
    
// });
*/