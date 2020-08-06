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



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
// CLientes
Route::resource('client','Client\ClientController');
// Ordenes
Route::get('/client/{client}/order/create', 'Client\OrderController@create')->name('client.order.create');
Route::post('/client/{client}/order', 'Client\OrderController@store')->name('client.order.store');
Route::get('/client/{client}/order/{order}', 'Client\OrderController@show')->name('client.order.show');
// Productso
Route::resource('product','Product\ProductController');
Route::get('/product/{product}/gallery', 'Product\ProductController@galleryShow')->name('product.gallery.show');
Route::get('/product/{product}/document', 'Product\ProductController@documentShow')->name('product.document.show');

