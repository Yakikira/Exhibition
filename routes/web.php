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
use App\Http\Controllers;

Route::get('/', 'ExhibitController@top');
Route::get('/exhibitions/{exhibition}', 'ExhibitController@exhibition');
Route::get('/exhibitions/{exhibition}/booths/{booth}', 'ExhibitController@booth');


Route::get('/user', 'ExhibitController@user');
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
Route::get('/company_user/{company_user}/create', 'ExhibitController@createItem');
Route::post('/company_user/{company_user}/create','ExhibitController@save');
Route::get('/company_user/{company_user}', 'ExhibitController@company_user');
Route::get('/company_user/items/create', 'ExhibitController@createItem');
Route::post('/company_user/items','ExhibitController@save');