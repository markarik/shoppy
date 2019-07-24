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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', 'WelcomeController@landingpage')->name('user.dashboard');


Route::prefix('user')->group(function () {

    Auth::routes();
    Route::get('details', 'WelcomeController@detailspage')->name('user.product.details');
    Route::get('cart', 'WelcomeController@showCart')->name('user.cart');
    Route::get('checkout', 'WelcomeController@showCheckOut')->name('user.checkout');

});

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'seller_guest'], function () {
    Route::get('new/seller/login', 'SellerAuth\LoginController@showLoginForm');
    Route::post('new/seller/login', 'SellerAuth\LoginController@login');
    Route::get('seller/register', 'SellerAuth\RegisterController@index')->name('seller.register');
    Route::post('seller/register', 'SellerAuth\RegisterController@store')->name('seller.store');

    Route::post('password/email', 'SellerAuth\SellerForgotPasswordController@sendResetLinkEmail')->name('seller.password.email');
    Route::get('password/reset', 'SellerAuth\SellerForgotPasswordController@showLinkRequestForm')->name('seller.password.request');


    Route::post('password/reset', 'SellerAuth\SellerResetPasswordController@reset');
    Route::get('password/reset{token}', 'SellerAuth\SellerResetPasswordController@showResetForm')->name('seller.password.reset');


});

Route::group(['middleware' => 'seller_auth'], function () {
    Route::post('new/seller/logout', 'SellerAuth\LoginController@logout')->name('logout');
    Route::get('seller/home', 'SellerGuest\SellerController@index')->name('seller.dashboard');
    Route::prefix('seller')->group(function () {
//        Route::get('/home', 'Seller\Pages\SellerController@index')->name('seller.dashboard');
        Route::get('products', 'SellerGuest\ProductController@index')->name('seller.product.view');
        Route::get('products/create', 'SellerGuest\ProductController@create')->name('seller.product.create');
        Route::post('products', 'SellerGuest\ProductController@store')->name('seller.product.store');
        Route::get('brands', 'SellerGuest\BrandController@index')->name('seller.brand.view');
        Route::get('brand/{id}/edit', 'SellerGuest\BrandController@edit')->name('seller.brand.edit');
        Route::post('brands/{id}', 'SellerGuest\BrandController@update')->name('seller.brand.update');
        Route::post('brands', 'SellerGuest\BrandController@store')->name('seller.brand.store');
        Route::get('orders', 'SellerGuest\OrderProductController@index')->name('seller.order.view');
        Route::get('reports', 'SellerGuest\ReportController@index')->name('seller.report.view');
        Route::post('product/delete/{id}', 'SellerGuest\ProductController@destroy')->name('seller.delete.product');
        Route::get('brand/{id}', 'SellerGuest\BrandController@destroy');

    });
});

Route::group(['middleware'=>'admin_guest'],function (){
    Route::prefix('admin')->group(function (){
        Route::get('/login', 'AdminAuth\AdminLoggingController@showLoginform')->name('admin.login');
        Route::post('/login', 'AdminAuth\AdminLoggingController@login')->name('admin.login.submit');
        Route::get('register', 'AdminAuth\AdminRegisterController@index')->name('admin.register');
        Route::post('register', 'AdminAuth\AdminRegisterController@store')->name('admin.store');


        //admin reset password
        Route::post('password/email', 'AdminAuth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
        Route::get('password/reset', 'AdminAuth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');


        Route::post('password/reset', 'AdminAuth\AdminResetPasswordController@reset');
        Route::get('password/reset{token}', 'AdminAuth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');


    });
});

Route::group(['middleware'=>'admin_auth'],function (){

    Route::prefix('admin')->group(function (){
        Route::get('/home', 'AdminGuest\AdminController@index')->name('admin.dashboard');
        Route::get('category','AdminGuest\CategoryController@index')->name('view.category');
        Route::get('category/add','AdminGuest\CategoryController@create')->name('add.category');
        Route::post('category','AdminGuest\CategoryController@store')->name('store.category');

    });

});

//Route::group(['middleware' => 'seller_guest'], function () {
    Route::prefix('seller')->group(function () {
        Route::get('/login', 'SellerAuth\SellerLoggingController@showLoginForm')->name('seller.login');
        Route::post('/login', 'SellerAuth\SellerLoggingController@login')->name('seller.login.submit');
//        Route::get('register', 'Seller\RegisterController@index')->name('seller.register');
//        Route::post('register', 'Seller\RegisterController@store')->name('seller.store');
        //seller reset password

    });
//});


//Route::prefix('seller')->group(function () {
//    Route::get('/login', 'SellerAuth\SellerLoggingController@loginform')->name('seller.login');
//    Route::post('/login', 'SellerAuth\SellerLoggingController@login')->name('seller.login.submit');
//    Route::get('/', 'Seller\Pages\SellerController@index')->name('seller.dashboard');
//    Route::get('register', 'Seller\RegisterController@index')->name('seller.register');
//    Route::post('register', 'Seller\RegisterController@store')->name('seller.store');
//
//    /*Dashboard*/
//    Route::get('products', 'Seller\Pages\ProductController@index')->name('seller.product.view');
//    Route::get('products/create', 'Seller\Pages\ProductController@create')->name('seller.product.create');
//    Route::post('products', 'Seller\Pages\ProductController@store')->name('seller.product.store');
//    Route::get('brands', 'Seller\Pages\BrandController@index')->name('seller.brand.view');
//    Route::get('brand/{id}/edit', 'Seller\Pages\BrandController@edit')->name('seller.brand.edit');
//    Route::post('brands/{id}', 'Seller\Pages\BrandController@update')->name('seller.brand.update');
//    Route::post('brands', 'Seller\Pages\BrandController@store')->name('seller.brand.store');
//    Route::get('orders', 'Seller\Pages\OrderProductController@index')->name('seller.order.view');
//    Route::get('reports', 'Seller\Pages\ReportController@index')->name('seller.report.view');
//    Route::post('product/delete/{id}', 'Seller\Pages\ProductController@destroy')->name('seller.delete.product');
//    Route::get('brand/{id}', 'Seller\Pages\BrandController@destroy');
//
//
//    //seller reset password
//    Route::post('password/email', 'Seller\SellerForgotPasswordController@sendResetLinkEmail')->name('seller.password.email');
//    Route::get('password/reset', 'Seller\SellerForgotPasswordController@showLinkRequestForm')->name('seller.password.request');
//
//
//    Route::post('password/reset', 'Seller\SellerResetPasswordController@reset');
//    Route::get('password/reset{token}', 'Seller\SellerResetPasswordController@showResetForm')->name('seller.password.reset');
//
//
//});


Route::prefix('admin')->group(function () {






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


Route::get('/restore', function () {
    \App\Product::withTrashed()->where('status', 1)->restore();
});