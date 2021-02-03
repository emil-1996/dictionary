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

Route::get('/dictionary/{id}', 'App\Http\Controllers\DictionaryController@show');
Route::get('/dictionary-config/{id}', 'App\Http\Controllers\DictionaryConfigController@show');
Route::get('/dictionary-item/{id}', 'App\Http\Controllers\DictionaryItemController@show');
