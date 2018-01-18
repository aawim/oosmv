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
 
Route::get('/home', 'HomeController@index');
Route::get('/', 'HomeController@index');
 




// PAGE CONTROLLER
Route::get('/info/aboutus', 'PagesController@aboutus');
Route::get('/info/faq', 'PagesController@faq');
Route::get('/info/termsconditions', 'PagesController@termsconditions');
Route::get('/info/privacypolicy', 'PagesController@privacypolicy');
Route::get('/info/delivery', 'PagesController@delivery');
Route::get('/info/customerservice', 'PagesController@customerservice');
Route::get('/info/payment', 'PagesController@payment');
Route::get('/info/shipping', 'PagesController@shipping');

  


// SEARCH CONTROLLER
Route::get('wellhome','SearchController@liveSearch'); 
Route::get('find','SearchController@search'); 
Route::get('stores','SearchController@viewStores');
Route::get('store/{id}','SearchController@oneStore'); 
Route::get('find/{id}','SearchController@catesearch'); 
Route::get('shop/{id}','SearchController@shopProductSearch'); 
//Route::post('client/contact','SearchController@userSearch'); 
// PRODUCT CONTROLLER
Route::get('scat','ProductController@getscat'); 
Route::get('findSubCat', 'ProductController@findSubCatgeoryName');
// PRODUCT DEATAIL CONTROLLER
Route::resource('/item', 'ProductDetailController');



Auth::routes();
Route::group(['middleware' => 'App\Http\Middleware\AdminMiddleware'], function()
{
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

        // PRODUCT PHPTO CONTROLLER
Route::get('/photo/{id}', 'ProductPhotoController@addPhoto');
Route::get('/view/{id}', 'ProductPhotoController@viewPhoto');

// STORE CONTROLLER
Route::post(' /store/storecreate', 'StoreController@adminstorecreate');
    
});
});





Route::group(['middleware' => 'App\Http\Middleware\ClientMiddleware'], function()
{
    Route::prefix('client')->group(function(){
    Route::get('/orderds/{id}','OrderController@index'); 
    Route::get('/orderdetail/{id}','OrderController@orderdetail');
    Route::get('/myaccountchange/{id}', 'MyAccountController@editAccountInformation');
    Route::resource('/profile', 'ProfileController');
    //Route::resource('/category', 'CategoryController');
    Route::resource('/cart', 'CartController');
    Route::resource('/myaccount', 'ClientController');
    Route::resource('/contact', 'ContactController');
    Route::resource('/order', 'OrderController');
    Route::resource('/mail', 'MailController');
    Route::resource('/reply', 'ReplyController');
    Route::resource('/address', 'AddressBookController');
    });
});







 