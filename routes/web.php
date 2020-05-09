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

//----------------------------- Products & Categories ------------------------------------
Route::get('/index', 'ProductController@index');

Route::get('/shop-grid', 'ProductController@allProducts');
Route::get('/single-product/{id}', 'ProductController@singleProduct');
Route::get('/category/{id}', 'CategoryController@selectedCategory');

//----------------------------------- Tags ----------------------------------------------
Route::get('/tag/{id}', ['uses'=> 'categoryController@productTags']);

//---------------------------------- Search box -----------------------------------------
Route::get('/search', 'ProductController@searchProducts');

//---------------------------------- Contact Us -----------------------------------------
Route::get('/contact', ['uses'=> 'contactController@contact']);
Route::post('/checkCommentsData', ['uses'=> 'contactController@validation']);

//---------------------------------- Comments -----------------------------------------
Route::post('/insertComment', ['uses'=> 'CommentController@insertComment']);

//--------------------------------- Pages ------------------------------------------------
Route::get('/about', function () {return view('about');});
Route::get('/contact', function () {return view('contact');});
Route::get('/blog', function () {return view('blog');});
Route::get('/myaccount', function () {return view('my-account');})->name('myaccount');
Route::get('/wishlist', function () {return view('wishlist');})->name('wishlist');
// Route::get('/shop-grid', function () {return view('shop-grid');})->name('shop-grid');

Route::get('/blog-details', function () {return view('blog-details');})->name('blog-details');



//----------------------------------- Cart -----------------------------------------------
Route::post('/add-to-cart', 'ProductController@addToCart')->name('add-to-cart');
Route::post('/remove-from-cart', 'ProductController@remove');
Route::get('/cart', 'ProductController@cart')->name('cart');
