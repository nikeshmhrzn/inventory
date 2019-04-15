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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('products', 'ProductsController@index')->name('product');

Route::get('products/create','ProductsController@create');
Route::post('products','ProductsController@store');
Route::get('products/{product}/edit','ProductsController@edit');
Route::patch('products/{product}','ProductsController@update');
Route::delete('products/{product}', 'ProductsController@destroy');

// for categories

Route::get('categories','CategoriesController@index')->name('categories');
Route::get('categories/create','CategoriesController@create');
Route::post('categories','CategoriesController@store');
Route::get('categories/{category}/edit','CategoriesController@edit');
Route::patch('categories/{category}','CategoriesController@update');
Route::delete('categories/{category}', 'CategoriesController@destroy');

Route::get('products/index','ProductsController@index');
Route::get('categories/index','CategoriesController@index');
