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

Route::get('/', "HomeController@index")->name('home');
Route::get('/shop', "HomeController@shop")->name('shop');
Route::get('/about', "HomeController@about")->name('about');
Route::get('/blog', "HomeController@blog")->name('blog');
Route::get('/contact', "HomeController@contact")->name('contact');
Route::get('/checkout', "HomeController@checkout")->name('checkout');
Route::get('/cart', "HomeController@cart")->name('cart');
Route::get('/blog_single', "HomeController@blog_single")->name('blog_single');
Route::get('/product_single', "HomeController@product_single")->name('product_single');
Route::get('/wishlist', "wishlistController@wishlist")->name('wishlist');
Route::get("/products", "ProductsController@index");
Route::get('/category/form' ,"CategoriesController@create" );
Route::post("/category/traitement", "CategoriesController@store");
Route::resource('category', "CategoriesController");
Route::resource('product', 'ProductsController');
Route::patch("/product/update/{id}", "ProductsController@update")->name('product.update');
Route::get("/product/edit/{id}", "ProductsController@edit")->name('editer_produit');



Route::group(['middleware'=>['auth','admin']], function(){
Route::get('/admin/products/create' ,"AdminController@create" )->name('product.create');
Route::post("/admin/products/traitement", "AdminController@store");
Route::get('/admin/product', "AdminController@product_list")->name('product.list');
Route::get('/admin/product_edit/{id}' , "AdminController@product_edit")->name('product.edit');
Route::delete('/admin/product/delete/{id}' , "AdminController@product_delete")->name('product.delete');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
