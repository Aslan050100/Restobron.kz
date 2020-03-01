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
    Route::get('dish_typeCreate',['as'=>'dish_type.create','uses'=>'DishTypeAdminController@create']);
    Route::match(['get','post'],'dish_typeDestroy/{id}',['as'=>'dish_type.destroy','uses'=>'DishTypeAdminController@destroy']);
    Route::get('dish_typeEdit/{id}',['as'=>'dish_type.edit','uses'=>'DishTypeAdminController@edit']);
    Route::post('dish_typeStore',['as'=>'dish_type.store','uses'=>'DishTypeAdminController@store']);
    Route::match(['post','get'],'dish_typeUpdate/{id}',['as'=>'dish_type.update','uses'=>'DishTypeAdminController@update']);
    //Hall_descriptions
    Route::get('hall_description',['as'=>'hall_description','uses'=>'HallDescriptionAdminController@index']);
    Route::get('hall_descriptionCreate',['as'=>'hall_description.create','uses'=>'HallDescriptionAdminController@create']);
    Route::match(['get','post'],'hall_descriptionDestroy/{id}',['as'=>'hall_description.destroy','uses'=>'HallDescriptionAdminController@destroy']);
    Route::get('hall_descriptionEdit/{id}',['as'=>'hall_description.edit','uses'=>'HallDescriptionAdminController@edit']);
    Route::post('hall_descriptionStore',['as'=>'hall_description.store','uses'=>'HallDescriptionAdminController@store']);
    Route::match(['post','get'],'hall_descriptionUpdate/{id}',['as'=>'hall_description.update','uses'=>'HallDescriptionAdminController@update']);
    //Pay
    Route::get('pay',['as'=>'pay','uses'=>'PayAdminController@index']);
    Route::get('payCreate',['as'=>'pay.create','uses'=>'PayAdminController@create']);
    Route::match(['get','post'],'payDestroy/{id}',['as'=>'pay.destroy','uses'=>'PayAdminController@destroy']);
    Route::get('payEdit/{id}',['as'=>'pay.edit','uses'=>'PayAdminController@edit']);
    Route::post('payStore',['as'=>'pay.store','uses'=>'PayAdminController@store']);
    Route::match(['post','get'],'payUpdate/{id}',['as'=>'pay.update','uses'=>'PayAdminController@update']);
    //Parking
    Route::get('parking',['as'=>'parking','uses'=>'ParkingAdminController@index']);
    Route::get('parkingCreate',['as'=>'parking.create','uses'=>'ParkingAdminController@create']);
    Route::match(['get','post'],'parkingDestroy/{id}',['as'=>'parking.destroy','uses'=>'ParkingAdminController@destroy']);
    Route::get('parkingEdit/{id}',['as'=>'parking.edit','uses'=>'ParkingAdminController@edit']);
    Route::post('parkingStore',['as'=>'parking.store','uses'=>'ParkingAdminController@store']);
    Route::match(['post','get'],'parkingUpdate/{id}',['as'=>'parking.update','uses'=>'ParkingAdminController@update']);
    //Kitchen
    Route::get('kitchen',['as'=>'kitchen','uses'=>'KitchenAdminController@index']);
    Route::get('kitchenCreate',['as'=>'kitchen.create','uses'=>'KitchenAdminController@create']);
    Route::match(['get','post'],'kitchenDestroy/{id}',['as'=>'kitchen.destroy','uses'=>'KitchenAdminController@destroy']);
    Route::get('kitchenEdit/{id}',['as'=>'kitchen.edit','uses'=>'KitchenAdminController@edit']);
    Route::post('kitchenStore',['as'=>'kitchen.store','uses'=>'KitchenAdminController@store']);
    Route::match(['post','get'],'kitchenUpdate/{id}',['as'=>'kitchen.update','uses'=>'KitchenAdminController@update']);
    //Hashtag
    Route::get('hashtag',['as'=>'hashtag','uses'=>'HashtagAdminController@index']);
    Route::get('hashtagCreate',['as'=>'hashtag.create','uses'=>'HashtagAdminController@create']);
    Route::match(['get','post'],'hashtagDestroy/{id}',['as'=>'hashtag.destroy','uses'=>'HashtagAdminController@destroy']);
    Route::get('hashtagEdit/{id}',['as'=>'hashtag.edit','uses'=>'HashtagAdminController@edit']);
    Route::post('hashtagStore',['as'=>'hashtag.store','uses'=>'HashtagAdminController@store']);
    Route::match(['post','get'],'hashtagUpdate/{id}',['as'=>'hashtag.update','uses'=>'HashtagAdminController@update']);
});

