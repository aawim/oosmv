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
Route::get('/test', 'HomeController@test');
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
        Route::get('/home', 'HomeController@dash')->name('index')->middleware('activeUser');
        Route::resource('/category', 'CategoryController')->middleware('activeUser');
        Route::resource('/subcat', 'SubcatController')->middleware('activeUser');
        Route::resource('/brand', 'BrandController')->middleware('activeUser');
        Route::resource('/product', 'ProductController')->middleware('activeUser');
        Route::resource('/store', 'StoreController')->middleware('activeUser');
        Route::resource('/review', 'ReviewController')->middleware('activeUser');
        Route::resource('/photo', 'ProductPhotoController')->middleware('activeUser');
        Route::resource('/carousel', 'CarouselController')->middleware('activeUser');

        // PRODUCT PHPTO CONTROLLER
        Route::get('/photo/{id}', 'ProductPhotoController@addPhoto')->middleware('activeUser');
        Route::get('/view/{id}', 'ProductPhotoController@viewPhoto')->middleware('activeUser');

        // STORE CONTROLLER
        Route::post(' /store/storecreate', 'StoreController@adminstorecreate')->middleware('activeUser');
    
});
});





Route::group(['middleware' => 'App\Http\Middleware\ClientMiddleware'], function()
{
    Route::prefix('client')->group(function(){
    Route::get('/orderds/{id}','OrderController@index')->middleware('activeUser'); 
    Route::get('/orderdetail/{id}','OrderController@orderdetail')->middleware('activeUser');

    
    Route::get('/myaccountchange/{id}', 'MyAccountController@editAccountInformation')->middleware('activeUser');
    Route::resource('/profile', 'ProfileController')->middleware('activeUser');
    //Route::resource('/category', 'CategoryController')->middleware('activeUser');
    Route::resource('/cart', 'CartController')->middleware('activeUser');
    Route::resource('/myaccount', 'ClientController')->middleware('activeUser');
    Route::resource('/contact', 'ContactController')->middleware('activeUser');
    Route::resource('/order', 'OrderController')->middleware('activeUser');
    Route::resource('/mail', 'MailController')->middleware('activeUser');
    Route::resource('/reply', 'ReplyController')->middleware('activeUser');
    Route::resource('/address', 'AddressBookController')->middleware('activeUser');
    });
});







 