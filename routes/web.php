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

Route::get('/', 'PagesController@getHome');
Route::get('/about', 'PagesController@getAbout');
Route::get('/contact', 'PagesController@getContact');

Route::get('/messages', 'MessagesController@getMessages');
Route::post('/contact/submit', 'MessagesController@submit');

Route::get('/todo', 'TodosController@index');
Route::resource('todo', 'TodosController');

Route::post('/albumstore', 'AlbumsController@store');

Route::get('/bookmarks', 'BookmarksController@index');
Route::post('store', ['as'=> 'bookmarks.store', 'uses' => 'BookmarksController@store']);
Route::delete('/bookmarks/{id}', 'BookmarksController@destroy');


Route::get('/albums', 'AlbumsController@index');
Route::get('/albumscreate', 'AlbumsController@create');
Route::get('/albums/{id}', 'AlbumsController@show');

Route::get('/photos/create/{id}', 'PhotoController@create');
Route::post('/photos/store', 'PhotoController@store');

Route::get('/photos/{id}', 'PhotoController@show');
Route::delete('/photos/create/{id}', 'PhotoController@destroy');
