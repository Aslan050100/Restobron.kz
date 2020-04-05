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


Route::get('/getProducts','ProductController@getProducts')->middleware('cors');
Route::get('/getAds','AdController@getAds')->middleware('cors');
Route::get('/getFeedbacks','FeedbackController@getFeedbacks')->middleware('cors');
Route::get('/getPrices','ProductController@getPrice')->middleware('cors');
Route::get('/getKitchens','ProductController@getKitchens')->middleware('cors');
Route::get('/getComforts','ProductController@getComforts')->middleware('cors');
Route::get('/getProductById/{id}','ProductController@getProductById')->middleware('cors');
Route::get('/getHashtags','HashtagController@getHashtags')->middleware('cors');
Route::get('/getMenus','MenuController@getMenus')->middleware('cors');
Route::match(['get','post'],'/register','RegistratorController@store')->middleware('cors');
Route::match(['get','post'],'/login','MainUserController@store')->middleware('cors');
Route::match(['get','post'],'/logout','MainUserController@destroy')->middleware('cors');
Route::match(['get','post'],'/reservation','ReservationController@reserv')->middleware('cors');

