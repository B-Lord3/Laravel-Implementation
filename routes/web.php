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



//Route::get('/', 'PagesController@showHome');
Route::get('/login', 'PagesController@showLogin');
Route::get('/signup', 'PagesController@showSignup');
Route::get('/cart', 'PagesController@showCart');
Route::get('/about', 'PagesController@showAbout');
Route::get('/contact', 'PagesController@showContact');
Route::get('/thanks', 'PagesController@showThanks');

Route::resource('/', 'ProductsController');
Route::resource('/products', 'ProductsController');

Route::get('/add-to-cart/{id}', [
	'uses' => 'ProductsController@addToCart',
	'as' => 'products.addToCart'
]);
Route::get('/cart', [
	'uses' => 'ProductsController@accessCart',
	'as' => 'products.shoppingCart'
]);
Route::get('/checkout', [
	'uses' => 'ProductsController@getCheckout',
	'as' => 'checkout'
]);
Route::post('/checkout', [
	'uses' => 'OrdersController@store',
	'as' => 'checkout'
]);

Auth::routes();

Route::get('/user', 'HomeController@index')->name('user.profile');


Route::prefix('admin')->group(function() {
	Route::get('/login', 'Auth\AdminLoginController@showAdminLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin');
});

