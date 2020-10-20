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

Route::get('/getLogin', 'UserController@getLogin')->name('getLogin');
Route::get('/postLogin', 'UserController@postLogin')->name('postLogin');
Route::get('/', 'UserController@index')->name('index');
Route::get('/create', 'UserController@create')->name('create');
Route::post('/store', 'UserController@store')->name('store');
Route::get('/show/{id}', 'UserController@show')->name('show');
Route::get('/edit/{id}', 'UserController@edit')->name('edit');
Route::put('/update/{id}', 'UserController@update')->name('update');
Route::delete('/delete/{id}', 'UserController@delete')->name('delete');
Route::post('/export', 'UserController@export')->name('export');
