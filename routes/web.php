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
    Route::get('cart', 'CartController@index')->name('user.cart.view');
    Route::get('wishlist','WishListController@index')->name('user.wishlist.view');
    Route::post('wishlist','WishListController@store')->name('user.wishlist.store');
    Route::post('cart','CartController@store')->name('user.add.cart');
    Route::get('checkout', 'Buyer\CheckoutController@index')->name('user.checkout');
    Route::post('checkout/store', 'Buyer\CheckoutController@store')->name('user.checkout.store');
    Route::post('cart/change/{id}','CartController@update')->name('product.change.cart');
    Route::post('cart/item/delete/{id}','CartController@destroy')->name('product.delete.cart');


});

//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'seller_guest'], function () {
    Route::get('new/seller/login', 'SellerAuth\LoginController@showLoginForm')->name('seller.login');
    Route::post('new/seller/login', 'SellerAuth\LoginController@login');
    Route::get('seller/register', 'SellerAuth\RegisterController@index')->name('seller.register');
    Route::post('seller/register', 'SellerAuth\RegisterController@store')->name('seller.store');

    Route::post('password/email', 'SellerAuth\SellerForgotPasswordController@sendResetLinkEmail')->name('seller.password.email');
    Route::get('password/reset', 'SellerAuth\SellerForgotPasswordController@showLinkRequestForm')->name('seller.password.request');


    Route::post('password/reset', 'SellerAuth\SellerResetPasswordController@reset');
    Route::get('password/reset{token}', 'SellerAuth\SellerResetPasswordController@showResetForm')->name('seller.password.reset');


});

Route::group(['middleware' => 'seller_auth'], function () {
    Route::post('new/seller/logout', 'SellerAuth\LoginController@logout')->name('seller.logout');
    Route::get('seller/home', 'SellerGuest\SellerController@index')->name('seller.dashboard');
    Route::prefix('seller')->group(function () {
//        Route::get('/home', 'Seller\Pages\SellerController@index')->name('seller.dashboard');
        Route::get('products', 'SellerGuest\ProductController@index')->name('seller.product.view');
        Route::get('products/create', 'SellerGuest\ProductController@create')->name('seller.product.create');
        Route::post('products', 'SellerGuest\ProductController@store')->name('seller.product.store');
        Route::get('brands', 'SellerGuest\BrandController@index')->name('seller.brand.view');
//        Route::get('brand/{id}/edit', 'SellerGuest\BrandController@edit')->name('seller.brand.edit');
        Route::post('brands/{id}', 'SellerGuest\BrandController@update')->name('seller.brand.update');
        Route::post('brands', 'SellerGuest\BrandController@store')->name('seller.brand.store');
        Route::get('orders', 'SellerGuest\OrderProductController@index')->name('seller.order.view');
        Route::get('reports', 'SellerGuest\ReportController@index')->name('seller.report.view');
        Route::get('variants_options', 'SellerGuest\VariantsOptionsController@index')->name('seller.variant_option.view');
        Route::post('variants_options/store', 'SellerGuest\VariantsOptionsController@store')->name('seller.variant_option.store');
        Route::post('product/delete/{id}', 'SellerGuest\ProductController@destroy')->name('seller.delete.product');
        Route::get('brand/{id}', 'SellerGuest\BrandController@destroy');
        Route::post('variantoption/{id}', 'SellerGuest\VariantsOptionsController@update')->name('seller.variants_option.update');
        Route::get('region', 'SellerGuest\RegionController@index')->name('seller.region.view');
        Route::post('region', 'SellerGuest\RegionController@store')->name('seller.region.store');
//        Route::get('region/{id}/edit', 'SellerGuest\RegionController@edit')->name('seller.region.edit');
        Route::post('region/{id}', 'SellerGuest\RegionController@update')->name('seller.region.update');


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
        Route::post('/logout', 'AdminAuth\AdminLoggingController@logout')->name('admin.logout');
        Route::get('/home', 'AdminGuest\AdminController@index')->name('admin.dashboard');
        Route::get('/availableStores', 'AdminGuest\AdminController@viewSeller')->name('admin.viewSeller');
        Route::get('/products', 'AdminGuest\AdminController@create')->name('admin.products');
        Route::get('/featured/products', 'AdminGuest\AdminController@showFeaturedProducts')->name('admin.featured.products');
        Route::get('category','AdminGuest\CategoryController@index')->name('view.category');
        Route::get('category/add','AdminGuest\CategoryController@create')->name('add.category');
        Route::post('category','AdminGuest\CategoryController@store')->name('store.category');
        Route::get('category/{id}/edit','AdminGuest\CategoryController@edit')->name('category.edit');
        Route::post('category/{id}','AdminGuest\CategoryController@update')->name('category.update');
        Route::get('change/status/{product_id}','AdminGuest\AdminController@change_status')->name('product.change.status');
        Route::get('couresels','AdminGuest\CoureselController@index')->name('view.couresels');
        Route::post('couresels/store','AdminGuest\CoureselController@store')->name('store.couresels');
        Route::get('brands', 'AdminGuest\AdminController@viewBrands')->name('admin.brand.view');
        Route::get('variants', 'AdminGuest\VariantsController@index')->name('admin.variants.view');
        Route::post('variants/store', 'AdminGuest\VariantsController@store')->name('admin.variants.store');
//        Route::get('variants/{id}/edit', 'AdminGuest\VariantsController@edit')->name('admin.variants.edit');
        Route::post('variants/{id}', 'AdminGuest\VariantsController@update')->name('admin.variants.update');
        Route::get('constants','AdminGuest\SettingsController@index')->name('admin.add.constants');
        Route::post('constants/store','AdminGuest\SettingsController@store')->name('admin.store.constants');
        Route::post('constants/delete/{id}','AdminGuest\SettingsController@destroy')->name('admin.delete.constants');
        Route::post('constants/{id}/edit','AdminGuest\SettingsController@update')->name('admin.edit.constants');


    });

});


Route::get('/restore', function () {
    \App\Product::withTrashed()->where('status', 1)->restore();
});