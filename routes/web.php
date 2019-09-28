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
Route::get('/','front\FrontController@index');

Route::get('test','front\FrontController@index');
Route::get('test/products/{id}','front\FrontController@show');
Route::get('test/products','front\FrontController@products');
Route::get('test/contact-us','front\FrontController@contact_us');




Route::get('test/who-we-are','front\FrontController@who_we_are');
Auth::routes();


Route::get('test/login','front\AuthController@login');
Route::post('test','front\AuthController@check');

//Auth::check();
Route::get('test/signup','front\AuthController@create');

Route::post('/test/login','front\AuthController@store');


Route::group(['middleware'=>'client:web'],function(){
Route::get('test/profile','front\FrontController@profile');

Route::resource('/test/offers','front\OffersController');

Route::resource('/test/orders','front\OrdersController');

});


Route::group(['middleware'=>'auth:web'],function(){



Route::resource('dashboard/clients','admin\ClientsController')->middleware('isAdmin');
Route::resource('dashboard/categories','admin\CategoriesController')->middleware('isAdmin');
Route::resource('dashboard/orders','admin\OrdersController')->middleware('isAdmin');
Route::resource('dashboard/governments','admin\GovernmentsController')->middleware('isAdmin');
Route::resource('dashboard/products','admin\ProductsController')->middleware('isAdmin');
Route::resource('dashboard/offers','admin\OffersController')->middleware('isAdmin');


Route::resource('dashboard/governments.citis','admin\CitisController')->middleware('isAdmin');
Route::resource('dashboard/contacts','admin\ContactsController')->middleware('isAdmin');


Route::resource('dashboard/permissions','admin\PermissionController')->middleware('isAdmin');
Route::resource('dashboard/users','admin\UserController')->middleware('isAdmin');
Route::resource('dashboard/roles','admin\RoleController')->middleware('isAdmin');


//Route::get('governments/show/id', 'GovernmentsController@show');


//Route::get('governments/edit/id', 'GovernmentsController@edit');
Route::get('dashboard', 'admin\HomeController@index');
Route::get('dashboard/index', 'admin\HomeController@index');
});

