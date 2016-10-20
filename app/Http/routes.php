<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::get('/login','UserController@userLoginView');
Route::post('/login','UserController@userLogin');

Route::group(['middleware' => 'admin'],function(){
	Route::resource('customer-register','CustomerController',['only' => ['index']]);
	Route::post('find-user-data','ComplainController@findUserData');
	Route::get('complains','ComplainController@complains');
	Route::get('receive-complain','ComplainController@receiveComplain');
	Route::post('receive-complain','ComplainController@postReceiveComplain');
	Route::resource('compose-complain','ComplainController');
	Route::post('/register','UserController@userRegistration');
	Route::get('/register','UserController@userView');
	Route::get('/logout','UserController@logout');
});


Route::get('customer-login','CustomerController@customerLoginView');
Route::post('customer-login','CustomerController@customerLogin');

Route::group(['middleware' => 'customer'],function(){
	Route::get('customer-home','CustomerController@dashboard');
	Route::get('customer-logout','CustomerController@customerLogout');
});







