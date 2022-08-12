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

Route::get('/', 'ExhibitController@top');
Route::get('/exhibition', 'ExhibitController@exhibition');
Route::get('/user', 'ExhibitController@user');
Route::get('/user_company', 'ExhibitController@user_company');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('profile',function(){})->middleware('auth:guard-name');
