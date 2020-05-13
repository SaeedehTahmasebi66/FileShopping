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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'ProductController@index');

//------------------------------- Authentication -----------------------------------------
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'ProductController@index')->name('home');
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/additional-info/{{id}}', 'ProfileController@update');
// Route::get('/removeComment/{id}', 'ProfileController@removeComment');

//----------------------------- Products & Categories ------------------------------------
Route::get('/index', 'ProductController@index');
Route::get('/shop-grid', 'ProductController@allProducts');
Route::get('/single-product/{id}', 'ProductController@singleProduct');
Route::get('/category/{id}', 'CategoryController@selectedCategory');

//----------------------------------- Tags ----------------------------------------------
Route::get('/tag/{id}', 'categoryController@productTags');

//---------------------------------- Search box -----------------------------------------
Route::get('/search', 'ProductController@searchProducts');

//---------------------------------- Contact Us -----------------------------------------
Route::get('/contact', 'contactController@index');
Route::post('/checkCommentsData', 'contactController@validation');

//----------------------------------- Comments -------------------------------------------
Route::post('/insertComment', 'CommentController@insertComment');

//------------------------------------ Blogs ---------------------------------------------
Route::get('/blog', 'BlogController@index');
Route::get('/blog-details/{id}',  'BlogController@singleBlog');


//----------------------------------- Cart -----------------------------------------------
Route::post('/add-to-cart', 'ProductController@addToCart')->name('add-to-cart');
Route::post('/remove-from-cart', 'ProductController@remove');
Route::get('/cart', 'ProductController@cart')->name('cart');

//--------------------------------- Wishlist ------------------------------------------------
Route::get('/wishlist', 'wishlistController@index')->name('wishlist');
Route::get('/add-to-wishlist/{id}', 'wishlistController@addToWhishlist');
Route::get('/removeFromWihlist/{id}', 'wishlistController@removeFromWhishlist');

//------------------------------- Some Other Pages ------------------------------------------------
Route::get('/about', function () {return view('about');});
Route::get('/myaccount', function () {return view('my-account');})->name('myaccount');
