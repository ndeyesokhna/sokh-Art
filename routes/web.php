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

Route::get('/', "HomeController@index");
Route::get('/shop', "HomeController@shop");
Route::get('/about', "HomeController@about");
Route::get('/blog', "HomeController@blog");
Route::get('/contact', "HomeController@contact");
Route::get('/checkout', "HomeController@checkout");
Route::get('/cart', "HomeController@cart");
Route::get('/blog_single', "HomeController@blog_single");
Route::get('/product_single', "HomeController@product_single");
Route::get('/wishlist', "wishlistController@wishlist");


