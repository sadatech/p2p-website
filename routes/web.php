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

Route::get('/', 'HomeController@index');
Route::get('ckeditor', 'HomeController@ckeditor');
Route::post('ckeditor/addContent', 'HomeController@addContent');

Route::get('/{slug}/{id}', ['uses' => 'HomeController@index'])
	->where('id', '[\w\d\-\_]+');
Route::get('/{slug}', ['uses' => 'HomeController@index'])
	->where('slug', '[\w\d\-\_]+');
