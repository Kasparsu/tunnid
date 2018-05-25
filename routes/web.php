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
//
//Route::get('/', 'ApiController@index');
//Route::delete('/', 'ApiController@index');
//Route::patch('/', 'ApiController@index');
//Route::post('/', 'ApiController@index');
//Route::get('/list', 'ApiController@getList');
//Route::get('/add', 'ApiController@addToList');
//Route::get('/delete/{id}', 'ApiController@removeFromList');
//Route::post('/delete/{id}', 'ApiController@removeFromList');
Route::get('/', 'ChatController@index');
Route::get('/messages/{username}', 'ChatController@getUserMessages');
Route::get('/messages', 'ChatController@getAllMessages');
Route::post('/message/add', 'ChatController@addMessage');
