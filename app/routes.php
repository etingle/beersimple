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
   	Input::file('picture')->move(storage_path().'/storage/',$name);
   	#check if file is too large/if file is an image

#   	 return Redirect::to('calculate');

#});


#Route::get('calculate', function()
#{



$response = Unirest::post("https://camfind.p.mashape.com/image_requests",
  array(
    "X-Mashape-Key" => "Sf3AqcujUtmshQQ0Tdef0VxORqfSp1eBsupjsnyAjx4z8afEta"
  ),
  array(
    "image_request[image]" => Unirest::file(storage_path()."/storage/".$name),
    "image_request[language]" => "en",
    "image_request[locale]" => "en_US",
  )
);

sleep(25);

echo "raw\n";
print_r($response->raw_body);
echo "header\n";
print_r($response->headers); // Headers

echo "code\n";
echo $response->code; 
echo "body\n";
print_r($response->body);

$token=$response->body->token;

$response = Unirest::get("https://camfind.p.mashape.com/image_responses/".$token,
  array(
    "X-Mashape-Key" => "Sf3AqcujUtmshQQ0Tdef0VxORqfSp1eBsupjsnyAjx4z8afEta"
  )
);

print_r($response->body);

print_r($response->status);
print_r($response->reason);


	//return View::make('hello');
});
