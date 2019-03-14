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
Route::Resource('task','TaskController');
Route::get('/','TaskController@index');
Route::get('/done/{id}','TaskController@done');
Route::get('/destroy/{id}','TaskController@destroy');

Route::get('/home', 'HomeController@index')->name('home');
