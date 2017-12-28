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


// Route::get('client/getRequest', function(){
//     if(Request::ajax()){
//         return 'getRequest had loaded complete';
//     }
// });

// Route::post('client/finduser', function(){
//     if(Request::ajax()){
//         return Response::json(Request::all());
//     }
// });




// PAGE CONTROLLER
Route::get('/info/aboutus', 'PagesController@aboutus');
Route::get('/info/faq', 'PagesController@faq');
Route::get('/info/termsconditions', 'PagesController@termsconditions');
Route::get('/info/privacypolicy', 'PagesController@privacypolicy');
Route::get('/info/delivery', 'PagesController@delivery');
Route::get('/info/customerservice', 'PagesController@customerservice');
Route::get('/info/payment', 'PagesController@payment');
Route::get('/info/shipping', 'PagesController@shipping');


// HOME CONTROLLER
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

// MY ACCOUNT CONTROLLER
Route::get('/client/myaccountchange/{id}', 'MyAccountController@editAccountInformation');

// PRODUCT PHPTO CONTROLLER
Route::get('/manage/photo/{id}', 'ProductPhotoController@addPhoto');
Route::get('/manage/view/{id}', 'ProductPhotoController@viewPhoto');

// SEARCH CONTROLLER
Route::get('wellhome','SearchController@liveSearch'); 
Route::get('find','SearchController@search'); 
Route::get('stores','SearchController@viewStores');
Route::get('store/{id}','SearchController@oneStore'); 
Route::get('find/{id}','SearchController@catesearch'); 
Route::get('shop/{id}','SearchController@shopProductSearch'); 
//Route::post('client/contact','SearchController@userSearch'); 










// ORDER CONTROLLER
Route::get('client/orderds/{id}','OrderController@index'); 
Route::get('client/orderdetail/{id}','OrderController@orderdetail');

// STORE CONTROLLER
Route::post('manage/store/storecreate', 'StoreController@adminstorecreate');

// PRODUCT CONTROLLER
Route::get('scat','ProductController@getscat'); 
Route::get('findSubCat', 'ProductController@findSubCatgeoryName');

// PRODUCT DEATAIL CONTROLLER
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
    Route::resource('/order', 'OrderController');
    Route::resource('/mail', 'MailController');
    Route::resource('/reply', 'ReplyController');
    Route::resource('/address', 'AddressBookController');
});


/*
//    Route::group(array('before' => 'auth'), function(){
//     Route::get('/home', 'HomeController@dash')->name('index');
//     Route::resource('/category', 'CategoryController');
//     Route::resource('/subcat', 'SubcatController');
//     Route::resource('/brand', 'BrandController');
    
// });
*/