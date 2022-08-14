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
//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::namespace('User')->prefix('user')->name('user.')->group(function(){
    //ログイン認証関連
    Auth::routes([
        'register'=>true,
        'reset'=>false,
        'verify'=>false,
        ]);
    //ログイン認証後
    Route::middleware('auth:user')->group(function(){
        //topページ
        Route::resource('home','HomeController',['only'=>'index']);
    });
});

Route::namespace('Company_user')->prefix('company_user')->name('company_user.')->group(function(){
    //ログイン認証関連
    Auth::routes([
        'register'=>true,
        'reset'=>false,
        'verify'=>false,
    ]);
    //ログイン認証後
    Route::middleware('auth:company_user')->group(function(){
        //topページ
        Route::resource('home','HomeController',['only'=>'index']);
    });
});

//Route::get('profile',function(){})->middleware('auth:guard-name');