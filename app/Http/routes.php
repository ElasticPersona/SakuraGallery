<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Polaroidコントローラをルートで登録
Route::get('/polaroid/{accountId}', 'PolaroidController@show');

// パラメータでTwitterIDを受け取り壁紙ギャラリー表示
Route::get('/board/{accountId}', 'GalleryBoardController@show');
