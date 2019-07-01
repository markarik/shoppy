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

Route::get('/','WelcomeController@landingpage');



Route::prefix('user')->group(function (){

    Auth::routes();

});

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('seller')->group(function(){
    Route::get('/login','SellerAuth\SellerLoggingController@loginform')->name('seller.login');
    Route::post('/login','SellerAuth\SellerLoggingController@login')->name('seller.login.submit');
    Route::get('/','SellerController@index')->name('seller.dashboard');
});


Route::prefix('admin')->group(function (){

    Route::get('/login','AdminAuth\AdminLoggingController@loginform')->name('admin.login');
    Route::post('/login','AdminAuth\AdminLoggingController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');

});

///////////////////////////////////////////////////////////////
///
///   TEst routes
///
///
/// //////////////////////////////////////////////////////////

//Route::get('/seller','SellerController@index');
//
//
//Route::resource('/product','ProductController');
//Route::resource('/category','CategoryController');