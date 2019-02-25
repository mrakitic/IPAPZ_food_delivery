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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/menu', 'PagesController@menu');

//Route za kategoriju
Route::get('/category', 'CategoryController@index');
Route::post('/category', 'CategoryController@store');
Route::get('/category/create', 'CategoryController@createCategory');
Route::get('/category/{category}', 'CategoryController@show');
Route::patch('/category/{category}', 'CategoryController@update');
Route::delete('/category/{category}', 'CategoryController@destroy');
Route::get('/category/{category}/edit', 'CategoryController@edit');

//Route za jelo

Route::post('/meal', 'MealController@store');
Route::get('/meal/create', 'MealController@createMeal');
Route::get('/meal/{meal}', 'MealController@show');
Route::patch('/meal/{meal}', 'MealController@update');
Route::delete('/meal/{meal}', 'MealController@destroy');
Route::get('/meal/{meal}/edit', 'MealController@edit');

Route::post('/store', 'UserController@store')->name('store');
Route::get('/user/{user}', 'UserController@show');
Route::patch('/user/{user}', 'UserController@update');
Route::delete('/user/{user}', 'UserController@destroy');
Route::get('/user/{user}/edit', 'UserController@edit');

Route::get('/add-to-order/{id}', ['uses' => 'OrderController@addToCart', 'as' => 'addToCart']);
Route::get('/ordercart', ['uses' => 'OrderController@getCart', 'as' => 'orderCart']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
