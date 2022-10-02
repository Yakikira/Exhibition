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
use Illuminate\Http\Request;

//未ログイン時にアクセスできるページ
Route::get('/', 'UnloginController@top');
Route::get('/exhibitions/{exhibition}', 'UnloginController@exhibition');
Route::get('/exhibitions/booths/{booth}', 'UnloginController@booth');
Route::get('/query', 'UnloginController@query');

//Route::get('/home', 'HomeController@index')->name('home');

//一般ユーザーとしてログイン
Route::namespace('User')->prefix('user')->name('user.')->group(function(){
    //ログイン認証関連
    Auth::routes([
        'register'=>true,
        'reset'=>false,
        'verify'=>false,
        ]);
    //ログイン認証後
    Route::middleware(['auth:user','verified'])->group(function(){
        //topページ
        Route::resource('home','HomeController',['only'=>'index']);

    });
});

//一般ユーザーログイン時にアクセスできるページ
Route::prefix('user')->name('user.')->group(function(){
    Route::middleware(['auth:user','verified'])->group(function(){
            Route::get('/', 'UserController@top');
            Route::get('/exhibitions/{exhibition}', 'UserController@exhibition');
            Route::get('/exhibitions/booths/{booth}', 'UserController@booth');
            Route::get('/query', 'UserController@query');
            Route::get('/user', 'UserController@user_info');
            //ダウンロード処理
            Route::get('/download/{item}','DownloadController@index');
        });
});

//企業ユーザーとしてログイン
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

//企業ユーザーログイン時にアクセスできるページ
Route::middleware('auth:company_user')->group(function(){
    Route::get('/company_user/', 'CompanyUserController@top');
    Route::get('/company_user/exhibitions/{exhibition}', 'CompanyUserController@exhibition');
    Route::get('/company_user/exhibitions/booths/{booth}', 'CompanyUserController@booth');
    Route::get('/company_user/query', 'CompanyUserController@query');
    //製品一覧表示
    Route::get('/company_user/items','ItemController@show');
    //製品作成画面表示
    Route::get('/company_user/items/create', 'ItemController@createItem');
    //製品保存
    Route::post('/company_user/items','ItemController@save');
    Route::get('/company_user/items/{item}/edit','ItemController@edit');
    Route::put('/company_user/items/{item}','ItemController@update');
    
    Route::get('/company_user/{company_user}', 'CompanyUserController@company_user');
    Route::get('/company_user/{company_user}/member', 'CompanyUserController@member');
    //メンバー追加関連
    Route::get('/invite', 'CompanyUserController@invite');
    Route::post('/invite', 'ExhibitController@send');

    Route::get('/invite/{company_id}', function (Request $request) {
            if (! $request->hasValidSignature()) {
                abort(401);
                }
            return view("company_user.auth.register");
        })->name('invite');
    
});




//    Route::get('/company_user/{company_user}/create', 'ExhibitController@createItem');
//    Route::get('/company_user/{{company_user}}/items','ItemController@show');