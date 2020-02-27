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
//Route::get('/testORM','TestController@test');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    //Product
    Route::get('product',['as'=>'product','uses'=>'ProductAdminController@index']);
    Route::get('productCreate',['as'=>'product.create','uses'=>'ProductAdminController@create']);
    Route::match(['get','post'],'productDestroy/{id}',['as'=>'product.destroy','uses'=>'ProductAdminController@destroy']);
    Route::get('productEdit/{id}',['as'=>'product.edit','uses'=>'ProductAdminController@edit']);
    Route::post('productStore',['as'=>'product.store','uses'=>'ProductAdminController@store']);
    Route::match(['post','get'],'productUpdate/{id}',['as'=>'product.update','uses'=>'ProductAdminController@update']);
    //Ad
    Route::get('ad',['as'=>'ad','uses'=>'AdAdminController@index']);
    Route::get('adCreate',['as'=>'ad.create','uses'=>'AdAdminController@create']);
    Route::match(['get','post'],'adDestroy/{id}',['as'=>'ad.destroy','uses'=>'AdAdminController@destroy']);
    Route::get('adEdit/{id}',['as'=>'ad.edit','uses'=>'AdAdminController@edit']);
    Route::post('adStore',['as'=>'ad.store','uses'=>'AdAdminController@store']);
    Route::match(['post','get'],'adUpdate/{id}',['as'=>'ad.update','uses'=>'AdAdminController@update']);
    //Average_checks
    Route::get('avg',['as'=>'average_checks','uses'=>'Average_checksAdminController@index']);
    Route::get('avgCreate',['as'=>'average_checks.create','uses'=>'Average_checksAdminController@create']);
    Route::match(['get','post'],'average_checksDestroy/{id}',['as'=>'avg.destroy','uses'=>'Average_checksAdminController@destroy']);
    Route::get('avgEdit/{id}',['as'=>'average_checks.edit','uses'=>'Average_checksAdminController@edit']);
    Route::post('avgStore',['as'=>'average_checks.store','uses'=>'Average_checksAdminController@store']);
    Route::match(['post','get'],'average_checksUpdate/{id}',['as'=>'average_checks.update','uses'=>'Average_checksAdminController@update']);
    //City
    Route::get('city',['as'=>'cities','uses'=>'CitiesAdminController@index']);
    Route::get('cityCreate',['as'=>'cities.create','uses'=>'CitiesAdminController@create']);
    Route::match(['get','post'],'citiesDestroy/{id}',['as'=>'city.destroy','uses'=>'CitiesAdminController@destroy']);
    Route::get('cityEdit/{id}',['as'=>'cities.edit','uses'=>'CitiesAdminController@edit']);
    Route::post('cityStore',['as'=>'cities.store','uses'=>'CitiesAdminController@store']);
    Route::match(['post','get'],'citiesUpdate/{id}',['as'=>'cities.update','uses'=>'CitiesAdminController@update']);
});

