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

use Illuminate\Support\Facades\Route;

Route::get('/','WelcomeController@landingpage');



Route::prefix('user')->group(function (){

    Auth::routes();

});

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('seller')->group(function(){
    Route::get('/login','SellerAuth\SellerLoggingController@loginform')->name('seller.login');
    Route::post('/login','SellerAuth\SellerLoggingController@login')->name('seller.login.submit');
    Route::get('/','Seller\Pages\SellerController@index')->name('seller.dashboard');
    Route::get('register','Seller\RegisterController@index')->name('seller.register');
    Route::post('register','Seller\RegisterController@store')->name('seller.store');

    /*Dashboard*/
    Route::get('products','ProductController@index')->name('seller.product.view');
    Route::get('brands','Seller\Pages\BrandController@index')->name('seller.brand.view');


    //seller reset password
    Route::post('password/email','Seller\SellerForgotPasswordController@sendResetLinkEmail')->name('seller.password.email');
    Route::get('password/reset','Seller\SellerForgotPasswordController@showLinkRequestForm')->name('seller.password.request');


    Route::post('password/reset','Seller\SellerResetPasswordController@reset');
    Route::get('password/reset{token}','Seller\SellerResetPasswordController@showResetForm')->name('seller.password.reset');





});


Route::prefix('admin')->group(function (){

    Route::get('/login','AdminAuth\AdminLoggingController@loginform')->name('admin.login');
    Route::post('/login','AdminAuth\AdminLoggingController@login')->name('admin.login.submit');
    Route::get('/','AdminController@index')->name('admin.dashboard');

    Route::get('register','Admin\RegisterController@index')->name('admin.register');
    Route::post('register','Admin\RegisterController@store')->name('admin.store');


//admin reset password
    Route::post('password/email','Admin\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
    Route::get('password/reset','Admin\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');


    Route::post('password/reset','Admin\AdminResetPasswordController@reset');
    Route::get('password/reset{token}','Admin\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


});

/*Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');

.*/






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