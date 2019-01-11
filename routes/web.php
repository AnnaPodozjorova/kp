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

// Route::get('/', function() {
//     return view('welcome');
// });
Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/admin', 'AdminController@admin')    
    ->middleware('is_admin')    
    ->name('admin');

Route::get('login', 'HomeController@login');
Route::get('contact', 'HomeController@contact');
Route::get('Error404', 'HomeController@Error404');
Route::get('product','HomeController@product');
Route::get('register', 'HomeController@register');
Route::get('wishlist', 'HomeController@wishlist');
Route::get('home', 'HomeController@home');
Route::get('verify', 'HomeController@verify');
Route::get('single/{id}', 'HomeController@getProduct');

//subcategory
Route::get('/Categories/subcat/{id}', 'MenuController@subcatByID');
//search subject
Route::get('/search', 'HomeController@search')->name('search');


Route::get('/cart', 'CartController@index')->name('cart.index');