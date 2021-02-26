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
Route::get('All','ShopController@shop')->name('shop');
Route::get('Fruit&Vegetables','ShopController@Fruit_Vegetables')->name('Fruit_Vegetables');
Route::get('MeatPoultry','ShopController@MeatPoultry')->name('MeatPoultry');
Route::get('Fish&Seafood','ShopController@Fish_Seafood')->name('Fish_Seafood');
Route::get('Delicatessen','ShopController@Delicatessen')->name('Delicatessen');
Route::get('Diary&Eggs','ShopController@Diary_Eggs')->name('Diary_Eggs');
Route::get('EverydayEssentials','ShopController@EverydayEssentials')->name('EverydayEssentials');
Route::get('Bakery','ShopController@Bakery')->name('Bakery');
Route::get('Impulse&Snaking','ShopController@Impulse_Snaking')->name('Impulse_Snaking');
Route::get('Drinks','ShopController@Drinks')->name('Drinks');
Route::get('CateringSupplies','ShopController@CateringSupplies')->name('CateringSupplies');


Route::get('add_cart','ShopController@add_cart')->name('add_cart');
Route::get('carts','ShopController@carts')->name('carts');
Route::get('purchase','ShopController@purchase')->name('purchase');
Route::get('change_quantity','ShopController@change_quantity')->name('change_quantity');


Route::post('more_details','ShopController@more_details')->name('more_details');
Route::get('admin','AdminController@admin')->name('admin');

Route::get('/test', function () {
    return view('test');
});


Route::post('saveproduct','AdminController@saveproduct')->name('saveproduct');
Route::post('savefeaturedproduct','AdminController@savefeaturedproduct')->name('savefeaturedproduct');
Route::post('remove','AdminController@remove')->name('remove');
//Auth::routes();


Route::get('go-payment', 'PaymentsController@index')->name('go.payment');
Route::post('handle-payment', 'PaymentsController@handlePayment')->name('make.payment');
Route::get('cancel-payment', 'PaymentsController@paymentCancel')->name('cancel.payment');
Route::get('payment-success', 'PaymentsController@paymentSuccess')->name('success.payment');


