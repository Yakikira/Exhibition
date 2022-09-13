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
Route::get('/exhibitions/booths/{booth}', 'ExhibitController@booth');
Route::get('/query', 'ExhibitController@query');

Route::get('/user', 'UserController@user');
Route::get('/user/top', 'UserController@top');



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


    Route::middleware('auth:user')->group(function(){
        Route::get('/download/{item}','DownloadController@index');
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
    Route::middleware('auth:company_user')->group(function(){
        //topページ
        Route::get('/company_user/top', 'CompanyUserController@top');

        Route::get('/company_user/items/create', 'ItemController@createItem');
        Route::get('/company_user/items','ItemController@show');
        Route::post('/company_user/items','ItemController@save');
        Route::get('/company_user/items/{item}/edit','ItemController@edit');
        Route::put('/company_user/items/{item}','ItemController@update');
        Route::post('/company_user/{{company_user}}/create','ItemController@save');
        Route::post('/company_user/histories','ItemController@history');
        Route::get('/company_user/{company_user}', 'CompanyUserController@company_user');
        Route::get('/company_user/{company_user}/member', 'CompanyUserController@member');
        Route::get('/exhibitions/{exhibition}', 'ExhibitController@exhibition');
        Route::get('/invite', 'CompanyUserController@invite');
        Route::post('/invite', 'ExhibitController@send');
        Route::get('/invite/{company_id}', function (Request $request) {
            if (! $request->hasValidSignature()) {
                abort(401);
                }
            })->name('invite');
    });



    Route::get('/company_user/{company_user}/create', 'ExhibitController@createItem');



    Route::get('/company_user/{{company_user}}/items','ItemController@show');