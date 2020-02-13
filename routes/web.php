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

Route::get('/accueil', "HomeController@index")->name('home');
Route::get('/',"HomeController@index")->name('home');
Route::get('/shop', "HomeController@shop")->name('shop');
Route::get('/user/about/{id}', "HomeController@about")->name('about');
Route::get('/blog', "HomeController@blog")->name('blog');
Route::get('/affichcato/{id}', "HomeController@affichcato")->name('affichcato');
Route::get('/contact', "HomeController@contact")->name('contact');
Route::post('/contact', "ContactsController@store")->name('ajout_contact');

Route::post('/checkout', "HomeController@store")->name('ajout_commande');

Route::get('/contact', "ContactsController@contact")->name('contact');
Route::post('/panier/ajouter', "CartsController@store")->name('cart_store');
Route::get('/videpanier', function(){
    Cart::destroy();
});
Route::get('/merci', "HomeController@store")->name('checkout.thankYou');
Route::delete('/panier/{rowId}','CartsController@destroy')->name('cart.destroy');







Route::get('/checkout', "HomeController@checkout")->name('checkout')->middleware('auth');
Route::get('/cart', "CartsController@cart")->name('cart');
Route::get('/blog_single', "HomeController@blog_single")->name('blog_single');
Route::get('/product_single', "HomeController@product_single")->name('product_single');
Route::get('/wishlist', "wishlistController@wishlist")->name('wishlist');
Route::get("/products", "ProductsController@index");
Route::get('/catagory/form' ,"CategoriesController@create" )->name('categories.create');
Route::post("/catagory/traitement", "CategoriesController@store");
Route::resource('catagory', "CategoriesController");
Route::resource('product', 'ProductsController');
Route::patch("/product/update/{id}", "ProductsController@update")->name('product.update');
Route::get("/product/edit/{id}", "ProductsController@edit")->name('editer_produit');
Route::get("/indexcato", "CategoriesController@indexcato")->name('indexcato');
Route::get('/admin/products/contact_list', "ContactsController@contact_list")->name('contact_list');


Route::group(['middleware'=>['auth','admin']], function(){
Route::get('/admin/products/create' ,"AdminController@create" )->name('product.create');
Route::post("/admin/products/traitement", "AdminController@store");
Route::get('/admin/product', "AdminController@product_list")->name('product-list');
Route::get('/admin/product_edit/{id}' , "AdminController@product_edit")->name('product.edit');
Route::delete('/admin/product/delete/{id}' , "AdminController@product_delete")->name('product.delete');
Route::delete('/admin/indexcato/delete/{id}' , "CategoriesController@indexcato_delete")->name('indexcato.delete');
Route::get('/admin/products/order' , "AdminController@order")->name('order');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
