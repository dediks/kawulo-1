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

/*Pages*/
Route::get('/home', 'Pages\HomeController@index');
Route::get('/home/checkout', 'Pages\CheckoutController@index');
Route::get('/home/contact', 'Pages\ContactController@index');
Route::get('/home/login', 'Pages\LoginController@index');
Route::get('/home/products', 'Pages\ProductsController@index');
Route::get('/home/register', 'Pages\RegisterController@index');
Route::get('/home/single', 'Pages\SingleController@index');
Route::get('/home/payment', 'Pages\PaymentController@index');
/*Pages*/
