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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',function(){
	return view('home');
});
// 事業所一覧
Route::get('office',function(){
	return view('office');
});
Route::get('office1',function(){
	return view('office1');
});
// お問い合わせ
Route::get('contact','ContactsController@index');
Route::post('contact/confirm','ContactsController@confirm');
Route::post('contact/complete','ContactsController@complete');

// 新規登録
Route::get('member','MembersController@member');
Route::post('member/confirm','MembersController@confirm');
// Route::get('member/confirm','MembersController@confirm');
// Route::get('member/complete','MembersController@complete');
Route::post('member/complete','MembersController@complete');

// 事業者エントリー
Route::get('entry', 'EntriesController@form');
Route::post('entry/store', 'EntriesController@store');
// Route::post('entry/complete', 'EntriesController@complete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
