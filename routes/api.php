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


	Route::post('login','api\AuthController@login');
	Route::post('register','api\AuthController@register');

	Route::get('products-list','api\MainController@products_list');
	Route::post('single-product','api\MainController@single_product');
	
	Route::get('government-list','api\MainController@government_list');
	Route::get('city-list','api\MainController@city_list');
	Route::get('category-list','api\MainController@category_list');

	Route::group(['middleware'=>'auth:api'],function(){

	Route::post('update','api\AuthController@update');
	




	Route::post('index-order','api\OrdersController@index_order');
	Route::post('single-order','api\OrdersController@single_order');
	Route::post('create-order','api\OrdersController@create_order');
	Route::post('update-order','api\OrdersController@update_order');
	Route::post('delete-order','api\OrdersController@delete_order');





	Route::post('single-offer','api\OffersController@single_offer');
	Route::post('index-offer','api\OffersController@index_offer');
	Route::post('create-offer','api\OffersController@create_offer');
	Route::post('update-offer','api\OffersController@update_offer');
	Route::post('delete-offer','api\OffersController@delete_offer');








	Route::get('order','MainController@order');
	Route::post('favourite','MainController@favourite');
	Route::post('favourites','MainController@favourites');
	Route::get('posts','MainController@posts');
	Route::post('client/{id}','ClientController@update');
	Route::post('sendnotification','MainController@sendnotification');
	Route::post('notificationSettings','ClientController@notificationSettings');







	//Route::post('notificationSettings','MainController@notificationSettings');

	


});






