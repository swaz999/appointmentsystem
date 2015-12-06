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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login','LoginController@index');
// Route::post('/login','LoginController@store');
Route::get('/facultyhome',function(){
	return view('auth.faculty_home');
});
// Route::post('/faculty_home','Auth\AuthController@showLogin');
Route::post('/faculty_home','AppointmentsController@index');
Route::get('/availability','ScheduleController@index');
Route::get('/appointments','AppointmentsController@index');
Route::get('/addschedule',function(){
	return view('auth.addschedule');
});
Route::post('/addschedule','AddScheduleController@create');



Route::get('/register','RegisterController@create');



?>


