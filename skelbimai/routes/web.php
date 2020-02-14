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

Route::get('/', 'HomeController@home');
Route::get('/ads', 'HomeController@ads');
Route::get('/ad', 'HomeController@ad');
Route::get('/info', 'HomeController@info');
Route::get('/contact', 'HomeController@contact');
Route::get('/login', 'HomeController@login');
Route::get('/register', 'HomeController@register');
Route::get('/category', 'CategoryController@category');
Route::get('/addAd', 'AddAdController@addAd');
Route::post('/storeCategory', 'CategoryController@storeCategory');
Route::get('/categories', 'CategoryController@categories');
Route::get('/delete/category/{category}', 'CategoryController@deleteCategory');
Route::post('/storeAd', 'AddAdController@storeAd');
Route::get('/adsList', 'AddAdController@adsList');
Route::get('/delete/ad/{ad}', 'AddAdController@deleteAd');
Route::get('/editAd/ad/{ad}', 'AddAdController@editAd');
Route::get('/edit_ad/{ad}', 'AddAdController@edit_ad');
Route::get('update_ad/{ad}', 'AddAdController@update_ad');
Route::get('search', 'AddAdController@search');
Route::post('/comment', 'CommentController@comment');
Route::get('/storeComment', 'CommentController@storeComment');

Auth::routes();

Route::get('/adsList', 'HomeController@index')->name('home');