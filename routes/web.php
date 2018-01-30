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

Auth::routes();

//After login page/////////////////////////////////////
Route::get('/', 'HomeController@index')->name('main');


//profile update page/////////////////////////////////
Route::get('profile','UserController@profile');
Route::post('profile','UserController@update');

//books update page/////////////////////////////////
Route::get('booksEdit','BookController@edit');
Route::post('booksEdit','BookController@upload');

//books edit page/////////////////////////////////
Route::get('/delete/{id}','BookController@delete');
Route::get('/edit&{id}','BookController@update');
Route::post('booksEdit&{id}','BookController@update2');
