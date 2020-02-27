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
    Route::get('avg',['as'=>'average_check','uses'=>'AverageСheckAdminController@index']);
    Route::get('avgCreate',['as'=>'average_check.create','uses'=>'AverageСheckAdminController@create']);
    Route::match(['get','post'],'average_checkDestroy/{id}',['as'=>'avg.destroy','uses'=>'AverageСheckAdminController@destroy']);
    Route::get('avgEdit/{id}',['as'=>'average_check.edit','uses'=>'AverageСheckAdminController@edit']);
    Route::post('avgStore',['as'=>'average_check.store','uses'=>'AverageСheckAdminController@store']);
    Route::match(['post','get'],'average_checkUpdate/{id}',['as'=>'average_check.update','uses'=>'AverageСheckAdminController@update']);
    //City
    Route::get('city',['as'=>'city','uses'=>'CityAdminController@index']);
    Route::get('cityCreate',['as'=>'city.create','uses'=>'CityAdminController@create']);
    Route::match(['get','post'],'cityDestroy/{id}',['as'=>'city.destroy','uses'=>'CityAdminController@destroy']);
    Route::get('cityEdit/{id}',['as'=>'city.edit','uses'=>'CityAdminController@edit']);
    Route::post('cityStore',['as'=>'city.store','uses'=>'CityAdminController@store']);
    Route::match(['post','get'],'cityUpdate/{id}',['as'=>'city.update','uses'=>'CityAdminController@update']);
    //Comforts
    Route::get('comfort',['as'=>'comfort','uses'=>'ComfortAdminController@index']);
    Route::get('comfortCreate',['as'=>'comfort.create','uses'=>'ComfortAdminController@create']);
    Route::match(['get','post'],'comfortDestroy/{id}',['as'=>'comfort.destroy','uses'=>'ComfortAdminController@destroy']);
    Route::get('comfortEdit/{id}',['as'=>'comfort.edit','uses'=>'ComfortAdminController@edit']);
    Route::post('comfortStore',['as'=>'comfort.store','uses'=>'ComfortAdminController@store']);
    Route::match(['post','get'],'comfortUpdate/{id}',['as'=>'comfort.update','uses'=>'ComfortAdminController@update']);
    //Dish_types
    Route::get('dish_type',['as'=>'dish_type','uses'=>'DishTypeAdminController@index']);
    Route::get('cdish_typeCreate',['as'=>'dish_type.create','uses'=>'DishTypeAdminController@create']);
    Route::match(['get','post'],'cdish_typeDestroy/{id}',['as'=>'dish_type.destroy','uses'=>'DishTypeAdminController@destroy']);
    Route::get('cdish_typeEdit/{id}',['as'=>'dish_type.edit','uses'=>'DishTypeAdminController@edit']);
    Route::post('dish_typeStore',['as'=>'dish_type.store','uses'=>'DishTypeAdminController@store']);
    Route::match(['post','get'],'dish_typeUpdate/{id}',['as'=>'dish_type.update','uses'=>'DishTypeAdminController@update']);
});

