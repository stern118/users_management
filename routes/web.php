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

// ユーザ一覧
Route::get('/', 'UsersController@displayUsers');

// 新規ユーザ登録
// 入力画面表示
Route::view('/create_user', 'create_user');
// 登録処理
Route::post('/create_user', 'UsersController@createUser');

// ユーザ削除
Route::get('/delete_user', 'UsersController@deleteUser');
