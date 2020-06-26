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

Route::post('/register','RegisterController@store');
Route::post('/login','LoginController@authenticate');
Route::get('/shops','ShopsController@index');
Route::post('/shops/create','ShopsController@store');
Route::post('/owners','OwnersController@index');
Route::get('/shops/search/{term}','ShopsController@search');
Route::get('/my-shops/{id}','ShopsController@getMyShops');




