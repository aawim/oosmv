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

Route::get('/', function () {
    return view('wellhome');
});

Auth::routes();


Route::prefix('manage')->group(function(){
    Route::get('/home', 'HomeController@dash')->name('index');
    Route::resource('/category', 'CategoryController');
    Route::resource('/subcat', 'SubcatController');
    Route::resource('/brand', 'BrandController');
    Route::resource('/product', 'ProductController');
});

/*
// Route::group(array('before' => 'auth'), function(){
//     Route::get('/home', 'HomeController@dash')->name('index');
//     Route::resource('/category', 'CategoryController');
//     Route::resource('/subcat', 'SubcatController');
//     Route::resource('/brand', 'BrandController');
    
// });
*/