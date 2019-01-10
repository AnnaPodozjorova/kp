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

Route::get('/', 'HomeController@index');
Auth::routes();
Route::get('login', 'HomeController@login');
Route::get('Checkout', 'HomeController@checkout');
Route::get('contact', 'HomeController@contact');
Route::get('Error404', 'HomeController@Error404');
Route::get('product','HomeController@product');
Route::get('register', 'HomeController@register');
Route::get('wishlist', 'HomeController@wishlist');
Route::get('home', 'HomeController@home');
Route::get('verify', 'HomeController@verify');
Route::get('single', 'HomeController@single');


//subcategory
Route::get('/Categories/subcat/{id}', 'MenuController@subcatByID');