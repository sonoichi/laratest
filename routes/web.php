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
    return view('index');
});

// ログイン画面へ移動
Route::get('/charge/login','LoginController@charge');
Route::get('/employee/login','LoginController@employee');

//管理画面遷移
Auth::routes();
Route::get('/employee/confirm','LoginController@getlogin');
Route::post('/employee/confirm','LoginController@postlogin');
Route::get('/index', 'LoginController@getLogout');

//仮：DB接続確認用ルート


/********************************
*********************************/
//認証確認用: 以下デバッグ用確認項目
// 認証ユーザの確認
    if(!Auth::check()){      
            print ('<p>現在認証されていません</p>');
    }
/********************************
********************************/


//Route::get('/home', 'HomeController@index');
