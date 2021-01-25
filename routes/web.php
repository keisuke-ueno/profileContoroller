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
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function() {
     Route::get('news/create','Admin\NewsController@add');
     Route::post('news/create','Admin\NewsController@create');# 追記
     Route::get('profile/create','Admin\ProfileController@add');
     Route::get('profile/edit','Admin\ProfileController@edit');
     Route::post('profile/create','Admin\ProfileController@create');
     Route::post('profile/edit','Admin\NewsController@index')->middleware('auth');
     Route::get('news/edit','Admin\NewsController@edit')->middleware('auth');
     Route::post('news/edit','Admin\NewsController@update')->middleware('auth');
     route::get('news/delete','Admin\NewsController@delete')->middleware('auth');
});


