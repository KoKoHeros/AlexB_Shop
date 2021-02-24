<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home','ShopController@home')->name('home');
Route::get('/','ShopController@home')->name('home');


Route::get('/about', function () {
    return view('about');
});


Route::get('/pricing', function () {
    return view('pricing');
});


Route::get('/faq', function () {
    return view('faq');
});

Route::get('shop','ShopController@shop')->name('shop');
Route::get('sortByBeef','ShopController@sortByBeef')->name('sortByBeef');
Route::get('sortByPork','ShopController@sortByPork')->name('sortByPork');
Route::get('sortByLamb','ShopController@sortByLamb')->name('sortByLamb');
Route::get('add_cart','ShopController@add_cart')->name('add_cart');
Route::get('carts','ShopController@carts')->name('carts');
Route::get('purchase','ShopController@purchase')->name('purchase');
Route::get('change_quantity','ShopController@change_quantity')->name('change_quantity');

Route::post('more_details','ShopController@more_details')->name('more_details');
Route::post('more_detail','ShopController@more_detail')->name('more_detail');

Route::get('/addproduct', function () {
    return view('addproduct');
});
Route::get('/add_featuredproduct', function () {
    return view('addfeaturedproduct');
});

Route::get('/test', function () {
    return view('test');
});


Route::post('saveproduct','ShopController@saveproduct')->name('saveproduct');
Route::post('savefeaturedproduct','ShopController@savefeaturedproduct')->name('savefeaturedproduct');
Route::post('remove','ShopController@remove')->name('remove');
//Auth::routes();


Route::get('go-payment', 'PaymentsController@index')->name('go.payment');
Route::post('handle-payment', 'PaymentsController@handlePayment')->name('make.payment');
Route::get('cancel-payment', 'PaymentsController@paymentCancel')->name('cancel.payment');
Route::get('payment-success', 'PaymentsController@paymentSuccess')->name('success.payment');


