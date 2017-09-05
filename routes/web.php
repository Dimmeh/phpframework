<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'welcome'
]);

//Route::get('dashbo')

Auth::routes();

//Redirect to pages
Route::get('/home', 'HomeController@index');
Route::get('/reparatie','ReparationController@index');
Route::get('dashboard', 'DashboardController@index');
Route::get('/account', 'AccountController@index');

//Post values to database from forms
Route::post('/reparation',[
    'as' => 'reparation.store',
    'uses' => 'ReparationController@store'
]);

//Get data with an unique id from the database
Route::get('/dashboard/{id}', 'DashboardController@show');
Route::get('/account/{id}', 'AccountController@show');

//Editing data with an unique id from the database
Route::get('/dashboard/edit/{id}', 'DashboardController@edit');
Route::post('/dashboard-edit/{id}', 'DashboardController@update');
Route::get('/account/edit/{id}', 'AccountController@edit');
Route::post('/account-edit/{id}', 'AccountController@update');

//Delete data with an unique id from the database

Route::get('/dashboard/delete/{id}', 'DashboardController@delete');
Route::get('/account/delete/{id}', 'AccountController@delete');