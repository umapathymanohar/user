<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');


Route::post('user/authenticate', 'UserController@authenticate');
Route::get('user/logout', 'UserController@logout');
Route::get('user/forgotPassword', 'UserController@forgotPassword');
Route::get('user/resetSuccess', 'UserController@resetSuccess');
Route::get('user/register', 'UserController@register');
Route::post('user/registerAccount', 'UserController@registerAccount');


Route::get('timesheet', 'TimesheetController@index');
Route::post('timesheet/checkin', 'TimesheetController@checkin');
Route::post('timesheet/checkout', 'TimesheetController@checkout');


Route::post('password/remind', 'UserController@remind');
Route::get('password/remind', 'UserController@passwordSuccess');
Route::get('password/reset/{token}', 'UserController@reset');
Route::post('password/reset/{token}', 'UserController@resetSave');
 
 

Route::get('dashboard', 'DashboardController@index');
