<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/dictionary', 'App\Http\Controllers\DictionaryController@index');
Route::get('/dictionary-config', 'App\Http\Controllers\DictionaryConfigController@index');
Route::get('/dictionary-item', 'App\Http\Controllers\DictionaryItemController@index');

Route::get('/dictionary/show/{id}', 'App\Http\Controllers\DictionaryController@show');
Route::get('/dictionary-config/show/{id}', 'App\Http\Controllers\DictionaryConfigController@show');
Route::get('/dictionary-item/show/{id}', 'App\Http\Controllers\DictionaryItemController@show');

Route::post('/dictionary-config/add/', 'App\Http\Controllers\DictionaryConfigController@add');
Route::post('/dictionary-item/add/', 'App\Http\Controllers\DictionaryItemController@add');

Route::delete('/dictionary-config/delete/{id}', 'App\Http\Controllers\DictionaryConfigController@delete');
Route::delete('/dictionary-item/delete/{id}', 'App\Http\Controllers\DictionaryItemController@delete');

Route::post('/dictionary-config/change-status/{id}', 'App\Http\Controllers\DictionaryConfigController@changeStatus');
Route::post('/dictionary-item/change-status/{id}', 'App\Http\Controllers\DictionaryItemController@changeStatus');

Route::post('/dictionary-config/edit/', 'App\Http\Controllers\DictionaryConfigController@edit');
Route::post('/dictionary-item/edit/', 'App\Http\Controllers\DictionaryItemController@edit');
