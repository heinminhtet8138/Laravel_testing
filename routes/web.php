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


Route::resource('/form_validation','FormValidation');

Route::resource('/testing','TestingController');
Route::resource('/hello','TestingController');
Route::resource('/Ha','TestingController');
Route::resource('/Wtf','TestingController');
Route::resource('/lee','TestingController');
Route::resource('/pae','TestingController');
Route::resource('/Los','TestingController');

Route::get('/ttt', 'TTTController');

Route::get('NgarLoeMaThar','NgarLoeMaThar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
