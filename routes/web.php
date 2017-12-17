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
    return view('welcome');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('/home', 'HomeController@index');
    Route::get('news/add', ['as' => 'news.add', 'uses' => 'NewsController@addNews']);
    Route::any('news/save', ['as' => 'news.save', 'uses' => 'NewsController@saveNews']);
});

Route::get('news/', ['as' => 'news.archive', 'uses' => 'NewsController@archive']);

Route::get('news/{id}/{slug?}', ['as' => 'news.single', 'uses' => 'NewsController@single']);

Route::get('feed/{type?}', ['as' => 'feed.rss', 'uses' => 'Feed\FeedsController@getFeed']);


Auth::routes();




