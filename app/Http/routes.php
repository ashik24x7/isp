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


Route::post('/register','UserController@userRegistration');
Route::get('/register','UserController@userView');

Route::get('/login','UserController@userLoginView');
Route::post('/login','UserController@userLogin');
Route::get('/logout','UserController@logout');

// Route::get('/home',['middleware' => 'auth','as'=>'home','uses'=>'controllerIndex@viewIndex']);


Route::resource('customer-register','CustomerController');
Route::get('customer-home','CustomerController@dashboard');

Route::get('customer-login','CustomerController@customerLoginView');
Route::post('customer-login','CustomerController@customerLogin');

Route::resource('compose-complain','ComplainController');
Route::get('receive-complain','ComplainController@receiveComplain');
Route::post('receive-complain','ComplainController@postReceiveComplain');
Route::get('complains','ComplainController@complains');

Route::post('find-user-data','ComplainController@findUserData');





Route::auth();

Route::get('/home', 'HomeController@index');
