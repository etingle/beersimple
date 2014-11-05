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
	return View::make('form');

});

Route::post('output', function()
{

	$name = Input::file('picture')->getClientOriginalName();
   	Input::file('picture')->move(storage_path()."/images",$name);
   	#check if file is too large/if file is an image

	$response = Unirest::post("https://camfind.p.mashape.com/image_requests",
  		array(
    		"X-Mashape-Key" => "Sf3AqcujUtmshQQ0Tdef0VxORqfSp1eBsupjsnyAjx4z8afEta"
  			),
  		array(
    		"image_request[image]" => Unirest::file(storage_path()."/images/".$name),
    		"image_request[language]" => "en",
    		"image_request[locale]" => "en_US",
  			)
	);

	$token=$response->body->token;
	return Redirect::to('loading/'.$token);

});


Route::get('/loading/{token}', function($token)
{
	$token='YSuNpC2fSmx4nGUflYgFIw';
	if (!$token){
		echo "token doesn't exist";
		} else {

		$response = Unirest::get("https://camfind.p.mashape.com/image_responses/".$token,
		  	array(
    			"X-Mashape-Key" => "Sf3AqcujUtmshQQ0Tdef0VxORqfSp1eBsupjsnyAjx4z8afEta"
  				)
		);

	//$status=$response->body->status;
	$status="test";
	if ($status != "completed"){
		return View::make('loading')->with('token',$token);
		} else {
		echo $response->body->name;
		}
	}
});

