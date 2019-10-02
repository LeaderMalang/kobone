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
    return view('index');
});
Route::get('/importCategory', 'CategoryController@import')->name('importCategory');
Route::get('/importStore', 'StoreController@import')->name('importStore');
Route::get('/importCoupon', 'CouponController@import')->name('importCoupon');
Route::get('/importPost', 'PostController@import')->name('importPost');
Route::get('/stores', 'StoreController@index')->name('stores');
Route::get('/searchStores', 'StoreController@search')->name('searchStores');
Route::get('/searchStores', 'StoreController@search')->name('searchStores');
Route::get('/stores/{slug}', 'StoreController@storeCoupons')->name('storeCoupons');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
