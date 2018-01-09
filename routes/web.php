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
    return view('welcome');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::get('/home/single', 'Pages\SingleController@index');

/*Home*/
Route::get('/home', 'Pages\HomeController@index');

/*Contact*/
Route::get('/home/contact', 'Pages\ContactController@index');

/*Checkout*/
Route::get('/home/checkout', 'Pages\CheckoutController@index');
Route::post('/home/checkout', 'Records\CartController@kurang');

/*Single Product*/
Route::get('/home/single/{id}', 'Pages\SingleController@show')->name('single');

/*payment*/
Route::get('/home/payment', 'Pages\PaymentController@index');

/*Login n Register*/
Route::get('/home/login', 'Pages\LoginController@index')->name('login');
Route::get('/home/register', 'Pages\RegisterController@index');

/*Products*/
Route::get('/home/products', 'Pages\ProductsController@index');
Route::get('/home/products/{room}/{category}', 'Pages\ProductsController@show');

/*Cart*/
Route::get('/home/cart/add/{id}', 'Records\CartController@show');
Route::get('/home/cart/clear', 'Records\CartController@clear');


Route::post('/send', 'Pages\ContactController@add');
Route::post('/pay', 'Pages\PaymentController@pay');
