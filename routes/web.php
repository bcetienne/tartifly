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

Route::get('about', function() {
    return view('about');
});

Route::get('messages', 'MessagesController@index')->name('allMessages');
Route::get('message/{id?}', 'MessagesController@showMessage')->name('oneMessage');

Route::get('travels', 'TravelController@index')->name('allTravels');
Route::get('travel/{id?}', 'TravelController@showTravel')->name('oneTravel');
Route::post('travel/create', 'TravelController@create')->name('createTravel');

Route::get('administration', 'AdminController@index')->name('homeAdmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
