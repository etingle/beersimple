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
Route::get('mysql-test', function() {

    # Print environment
    echo 'Environment: '.App::environment().'<br>';
	$beers=Beer::take(5)
			->orderBy('rating_avg','desc')
			->get();
    # Use the DB component to select all the databases
        //$beers = DB::select('select * from beers order by rating_avg limit 5');

    # If the "Pre" package is not installed, you should output using print_r instead
    print_r($beers);

});

Route::get('/signup','UserController@getSignup');
Route::post('/signup','UserController@postSignup');


Route::get('/logout','UserController@getLogout');


Route::any('/beer', 'BeerController@getIndex');
Route::any('/beer/delete/', 'BeerController@postDelete');

Route::get('/beer/{id}','BeerController@getBeerInfo');
Route::post('/beer/{id}','BeerController@postBeerInfo');
 
//Route::any('/', function(){
//	echo "TEST";
//	return "THIS IS A TEST";
//});


Route::any('/', 'BeerController@getIndex');

Route::get('/login','UserController@getLogin');
Route::post('/login','UserController@postLogin');






