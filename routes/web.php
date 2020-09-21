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

// Route::get('welcome', function () {
//     return view('welcome');
// });

Route::get('/',function(){
	return view('home');
});

// お問い合わせ
Route::get('contact','ContactsController@index');
Route::post('contact/confirm','ContactsController@confirm');
Route::post('contact/complete','ContactsController@complete');

// 新規登録
Route::get('member','MembersController@member');
Route::post('member/confirm','MembersController@confirm');
Route::post('member/complete','MembersController@complete');

// 事業者エントリー
Route::get('entry', 'EntriesController@form');
Route::post('entry', 'EntriesController@form');
Route::post('entry/store', 'EntriesController@store');
Route::post('entry/complete', 'EntriesController@complete');
Auth::routes();

// 事業所一覧
Route::get('products/{product}/favorite', 'ProductController@favorite')->name('products.favorite');
Route::resource('products', 'ProductController');
  Auth::routes(['verify' => true]);

// 会社概要
Route::get('index',function(){
	return view('company/index');
});

// ユーザーからホスト先へのコンタクト
Route::get('offer/', 'OffersController@index');
Route::post('offer/confirm', 'OffersController@confirm');
Route::post('offer/complete', 'OffersController@complete');

// マイページ
Route::get('users/mypage', 'UserController@mypage')->name('mypage');
Route::get('users/mypage/edit', 'UserController@edit')->name('mypage.edit');
Route::get('users/mypage/address/edit', 'UserController@edit_address')->name('mypage.edit_address');
Route::put('users/mypage', 'UserController@update')->name('mypage.update');
Route::get('users/mypage/password/edit', 'UserController@edit_password')->name('mypage.edit_password');
Route::put('users/mypage/password', 'UserController@update_password')->name('mypage.update_password');

//お気に入り
Route::get('users/mypage/favorite', 'UserController@favorite')->name('mypage.favorite');

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
