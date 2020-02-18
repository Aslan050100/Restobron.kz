<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/getProducts','ProductController@getProducts');
Route::get('/getAds','AdController@getAds');
Route::get('/getPrices','ProductController@getPrice');
Route::get('/getKitchens','ProductController@getKitchens');
Route::get('/getComforts','ProductController@getComforts');
Route::get('/getProductById/{id}','ProductController@getProductById');