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

//------------------------------- Authentication -----------------------------------------
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-------------------------------- Pages -------------------------------------------------
Route::get('/index', function () {return view('index');});
Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/myaccount', function () {return view('my-account');})->name('myaccount');
Route::get('/cart', function () {return view('cart');})->name('cart');
Route::get('/wishlist', function () {return view('wishlist');})->name('wishlist');
Route::get('/shop-grid', function () {return view('shop-grid');})->name('shop-grid');
Route::get('/single-product', function () {return view('single-product');})->name('single-product');


