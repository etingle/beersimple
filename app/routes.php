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


Route::get('/signup','UserController@getSignup');
Route::post('/signup','UserController@postSignup');


Route::get('/logout','UserController@getLogout');


Route::any('/beer', 'BeerController@getIndex');
Route::any('/beer/delete/', 'BeerController@postDelete');

Route::get('/beer/{id}','BeerController@getBeerInfo');
Route::post('/beer/{id}','BeerController@postBeerInfo');
 


Route::any('/', 'BeerController@getIndex');

Route::get('/login','UserController@getLogin');
Route::post('/login','UserController@postLogin');






