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
     Route::get('news','Admin\NewsController@index');
    // Route::post('profile/edit','Admin\ProfileController@update');
     Route::get('news/edit','Admin\NewsController@edit');
     Route::post('news/edit','Admin\NewsController@update');
     route::get('news/delete','Admin\NewsController@delete');
     Route::post('profile/edit','Admin\ProfileController@update');
   
});
Route::get('/','NewsController@index');
route::get('/','ProfileController@index');


