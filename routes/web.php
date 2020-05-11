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
    //Feedback
    Route::get('feedback',['as'=>'feedback','uses'=>'FeedbackAdminController@index']);
    Route::match(['get','post'],'feedbackDestroy/{id}',['as'=>'feedback.destroy','uses'=>'FeedbackAdminController@destroy']);
    Route::get('feedbackEdit/{id}',['as'=>'feedback.edit','uses'=>'FeedbackAdminController@edit']);
     Route::match(['post','get'],'feedbackUpdate/{id}',['as'=>'feedback.update','uses'=>'FeedbackAdminController@update']);
    //Product_image
    Route::get('product_image',['as'=>'product_image','uses'=>'ProductImageAdminController@index']);
    Route::get('product_imageCreate',['as'=>'product_image.create','uses'=>'ProductImageAdminController@create']);
    Route::match(['get','post'],'product_imageDestroy/{id}',['as'=>'product_image.destroy','uses'=>'ProductImageAdminController@destroy']);
    Route::get('product_imageEdit/{id}',['as'=>'product_image.edit','uses'=>'ProductImageAdminController@edit']);
    Route::post('product_imageStore',['as'=>'product_image.store','uses'=>'ProductImageAdminController@store']);
    Route::match(['post','get'],'product_imageUpdate/{id}',['as'=>'product_image.update','uses'=>'ProductImageAdminController@update']);
    //Hour
    Route::get('hour',['as'=>'hour','uses'=>'HourAdminController@index']);
    Route::get('hourCreate',['as'=>'hour.create','uses'=>'HourAdminController@create']);
    Route::match(['get','post'],'hourDestroy/{id}',['as'=>'hour.destroy','uses'=>'HourAdminController@destroy']);
    Route::get('hourEdit/{id}',['as'=>'hour.edit','uses'=>'HourAdminController@edit']);
    Route::post('hourStore',['as'=>'hour.store','uses'=>'HourAdminController@store']);
    Route::match(['post','get'],'hourUpdate/{id}',['as'=>'hour.update','uses'=>'HourAdminController@update']);
    //Reservation
    Route::get('reservation',['as'=>'reservation','uses'=>'ReservationAdminController@index']);
    Route::match(['get','post'],'reservationDestroy/{id}',['as'=>'reservation.destroy','uses'=>'ReservationAdminController@destroy']);

    //Menu
    Route::get('menu',['as'=>'menu','uses'=>'MenuAdminController@index']);
    Route::get('menuCreate',['as'=>'menu.create','uses'=>'MenuAdminController@create']);
    Route::match(['get','post'],'menuDestroy/{id}',['as'=>'menu.destroy','uses'=>'MenuAdminController@destroy']);
    Route::get('menuEdit/{id}',['as'=>'menu.edit','uses'=>'MenuAdminController@edit']);
    Route::post('menuStore',['as'=>'menu.store','uses'=>'MenuAdminController@store']);
    Route::match(['post','get'],'menuUpdate/{id}',['as'=>'menu.update','uses'=>'MenuAdminController@update']);
    //Menu_order
    Route::get('menu_order',['as'=>'menu_order','uses'=>'MenuOrderAdminController@index']);
    Route::match(['get','post'],'menu_orderDestroy/{id}',['as'=>'menu_order.destroy','uses'=>'MenuOrderAdminController@destroy']);
    //Chart
    Route::get('charts','SaleChartController@index');
    //Product and comfort
    Route::get('pro_com',['as'=>'pro_com','uses'=>'ProductComfortController@index']);
    Route::get('pro_comCreate',['as'=>'pro_com.create','uses'=>'ProductComfortController@create']);
    Route::post('pro_comStore',['as'=>'pro_com.store','uses'=>'ProductComfortController@store']);
    Route::match(['get','post'],'pro_comDestroy/{pro_id}/{comfort_id}',['as'=>'pro_com.destroy','uses'=>'ProductComfortController@destroy']);
    //
    //Product and average check
    Route::get('pro_ave',['as'=>'pro_ave','uses'=>'ProductAverageCheckController@index']);
    Route::get('pro_aveCreate',['as'=>'pro_ave.create','uses'=>'ProductAverageCheckController@create']);
    Route::post('pro_aveStore',['as'=>'pro_ave.store','uses'=>'ProductAverageCheckController@store']);
    Route::match(['get','post'],'pro_aveDestroy/{pro_id}/{average_id}',['as'=>'pro_ave.destroy','uses'=>'ProductAverageCheckController@destroy']);
    //
    //Product and hashtag
    Route::get('pro_hash',['as'=>'pro_hash','uses'=>'ProductHashtagController@index']);
    Route::get('pro_hashCreate',['as'=>'pro_hash.create','uses'=>'ProductHashtagController@create']);
    Route::post('pro_hashStore',['as'=>'pro_hash.store','uses'=>'ProductHashtagController@store']);
    Route::match(['get','post'],'pro_hashDestroy/{pro_id}/{hashtag_id}',['as'=>'pro_hash.destroy','uses'=>'ProductHashtagController@destroy']);
    //
    //Product and kitchen
    Route::get('pro_kit',['as'=>'pro_kit','uses'=>'ProductKitchenController@index']);
    Route::get('pro_kitCreate',['as'=>'pro_kit.create','uses'=>'ProductKitchenController@create']);
    Route::post('pro_kitStore',['as'=>'pro_kit.store','uses'=>'ProductKitchenController@store']);
    Route::match(['get','post'],'pro_kitDestroy/{pro_id}/{kitchen_id}',['as'=>'pro_kit.destroy','uses'=>'ProductKitchenController@destroy']);
    //
    //Product and parking
    Route::get('pro_parking',['as'=>'pro_parking','uses'=>'ProductParkingController@index']);
    Route::get('pro_parkingCreate',['as'=>'pro_parking.create','uses'=>'ProductParkingController@create']);
    Route::post('pro_parkingStore',['as'=>'pro_parking.store','uses'=>'ProductParkingController@store']);
    Route::match(['get','post'],'pro_parkingDestroy/{pro_id}/{parking_id}',['as'=>'pro_parking.destroy','uses'=>'ProductParkingController@destroy']);
    //
    //Product and pay
    Route::get('pro_pay',['as'=>'pro_pay','uses'=>'ProductPayController@index']);
    Route::get('pro_payCreate',['as'=>'pro_pay.create','uses'=>'ProductPayController@create']);
    Route::post('pro_payStore',['as'=>'pro_pay.store','uses'=>'ProductPayController@store']);
    Route::match(['get','post'],'pro_payDestroy/{pro_id}/{pay_id}',['as'=>'pro_pay.destroy','uses'=>'ProductPayController@destroy']);
    //
});

Route::match(['get','post'],'/',[
    'uses' => 'SimpleController@index',
    'as' => 'simple.index'
]);

Route::match(['get','post'],'/filter_page',[
    'uses' => 'SimpleController@filter_page',
    'as' => 'simple.filter_page'
]);

Route::match(['get','post'],'/detail/{id}',[
    'uses' => 'SimpleController@detail',
    'as' => 'simple.detail'
]);

Route::match(['get','post'],'/addfeedback/{pro_id}/{user_id}',[
    'uses' => 'SimpleController@feedback',
    'as' => 'simple.feedback'
]);


Route::match(['get','post'],'/partner',[
    'uses' => 'PartnerController@index',
    'as' => 'partner.index'
]);

Route::match(['get','post'],'/partnership',[
    'uses' => 'PartnerController@partnership',
    'as' => 'partner.partnership'
]);


Route::match(['get','post'],'/signUp',[
    'uses' => 'SignController@signUp',
    'as' => 'simple.signUp'
]);
Route::match(['post'],'/store',[
    'uses' => 'SignController@store',
    'as' => 'simple.store'
]);
Route::match(['get','post'],'/signIn',[
    'uses' => 'SignController@signIn',
    'as' => 'simple.signIn'
]);
Route::match(['post'],'/login',[
    'uses' => 'SignController@login',
    'as' => 'simple.login'
]);
Route::match(['get','post'],'/logout',[
    'uses' => 'SignController@destroy',
    'as' => 'simple.logout'
]);
Route::match(['get','post'],'/add_product',[
    'uses' => 'PartnerController@add_product',
    'as' => 'partner.add_product'
]);

Route::match(['get','post'],'/reservation/{pro_id}',[
    'uses' => 'SimpleController@reservation',
    'as' => 'simple.reservation'
]);

Route::match(['get','post'],'/reserv/{pro_id}',[
    'uses' => 'SimpleController@reserv',
    'as' => 'simple.reserv'
]);


