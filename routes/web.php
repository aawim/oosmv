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
Route::get('/', 'HomeController@index');
// Route::get('/', function () {
//      //return view('wellhome');
//      //return "asasas";
// });


 






Route::get('wellhome','SearchController@liveSearch');   
Route::get('scat','ProductController@getscat'); 

//  Route::get('/', 'HomeController@index');
Route::resource('/item', 'ProductDetailController');
Auth::routes();
Route::prefix('manage')->group(function(){
    Route::get('/home', 'HomeController@dash')->name('index');
    Route::resource('/category', 'CategoryController');
    Route::resource('/subcat', 'SubcatController');
    Route::resource('/brand', 'BrandController');
    Route::resource('/product', 'ProductController');
    Route::resource('/store', 'StoreController');
    
    Route::get('/product/create/{cat_id?}', 'ProductController@create');

    
   
});



Route::prefix('client')->group(function(){
    Route::resource('/category', 'CategoryController');
    Route::resource('/cart', 'CartController');
});





/*
// Route::group(array('before' => 'auth'), function(){
//     Route::get('/home', 'HomeController@dash')->name('index');
//     Route::resource('/category', 'CategoryController');
//     Route::resource('/subcat', 'SubcatController');
//     Route::resource('/brand', 'BrandController');
    
// });
*/