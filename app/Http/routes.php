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

use App\Http\Controllers\VehicleController;
use App\Vehicle;

Route::get('/', 'HomeController@index');

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/about', function() {
    return view('about-us');
});

Route::get('/contact', function() {
    return view('contact');
});

Route::auth();

Route::get('/profile', 'HomeController@profile');
Route::get('/user', 'UserController@index');
Route::get('/vehicle/all','VehicleController@all');
Route::resource('/vehicle','VehicleController');
Route::resource('/booking','BookingController');
Route::resource('/feedback','FeedbackController');
