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

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::post('/register/register-user',array('before' => 'csrf','uses'=>'RegisterController@adduser'));

Route::post('/login/login-user',array('before' => 'csrf','uses'=>'LoginController@authenticate'));

Route::get('/logout',array('uses'=>'LoginController@logout'));

Route::get('/truck-dashboard',array('uses'=>'TruckController@show'));

Route::get('/add-trucks',array('uses'=>'TruckController@add_truck'));

Route::post('/add-trucks',array('uses'=>'TruckController@createtruck'));


Route::get('/load-dashboard',array('uses'=>'LoadController@show'));

Route::get('/add-loads',array('uses'=>'LoadController@add_load'));

Route::post('/add-loads',array('uses'=>'LoadController@createload'));

Route::get('/view-trucks',array('uses'=>'LoadController@showtrucks'));

Route::get('/view-loads',array('uses'=>'TruckController@showloads'));

Route::get('/truck-bookings/{id}',array('uses'=>'LoadController@truckbooking'));

Route::post('/truck-bookings/{id}',array('uses'=>'LoadController@truckbookingrequest'));


