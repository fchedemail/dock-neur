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

Route::get('/', function()
{
	return View::make('home2');
});

Route::get('/login', function(){
	return View::make('index');
});

Route::post('/login', 'LoginController@login');

Route::get("/back", 'LoginController@back');


Route::get('/ships/create', 'ShipController@create');
Route::post('/ships/store', 'ShipController@store');
Route::get('/ships/list', 'ShipController@listing');
Route::get('/ships/{id}', 'ShipController@show');

Route::get('/about', function(){
	return View::make('about');
});

