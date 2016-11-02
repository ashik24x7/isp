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




Route::get('/',function(){
	return view('login');
});

Route::get('/login','UserController@userLoginView');
Route::post('/login','UserController@userLogin');

Route::post('/register','UserController@userRegistration');
Route::get('/register','UserController@userView');

Route::group(['middleware' => 'admin'],function(){
	Route::resource('customer-register','CustomerController',['only' => ['index','store']]);
	Route::post('/find-user-data','ComplainController@findUserData');
	Route::get('/complains/{data}','ComplainController@complains');
	Route::get('/receive-complain','ComplainController@receiveComplain');
	Route::post('/receive-complain','ComplainController@postReceiveComplain');
	Route::resource('/compose-complain','ComplainController');
	Route::get('/logout','UserController@logout');
	Route::get('/solved/{id}','ComplainController@solved');
	
	Route::get('/home',function(){
		return view('home');
	});

	Route::get('/edit-complain/{id}','ComplainController@viewEditComplain');
	Route::post('/edit-complain/{id}','ComplainController@editComplain');

	Route::get('/customers','CustomerController@customers');
	Route::get('/add-customer-into-exord-id','CustomerController@addCustomersIntoExord');
	Route::post('/add-customer-into-exord-id','CustomerController@saveCustomersIntoExord');
});


Route::get('customer-login','CustomerController@customerLoginView');
Route::post('customer-login','CustomerController@customerLogin');

Route::group(['middleware' => 'customer'],function(){
	Route::get('customer-home','CustomerController@dashboard');
	Route::get('customer-logout','CustomerController@customerLogout');
});







