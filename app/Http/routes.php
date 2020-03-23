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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/about', function() {
    return view('about-us');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/user', 'UserController@index');
Route::resource('/vehicle','VehicleController');
