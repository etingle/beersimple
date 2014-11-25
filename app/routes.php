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

    # Use the DB component to select all the databases
    $results = DB::select('SHOW DATABASES;');

    # If the "Pre" package is not installed, you should output using print_r instead
    print_r($results);

});

Route::get('/signup',
    array(
        'before' => 'guest',
        function() {
            return View::make('signup');
        }
    )
);

Route::get('/logout', function() {

    # Log out
    Auth::logout();

    # Send them to the homepage
    return Redirect::to('/');

});


Route::post('/signup', 
    array(
        'before' => 'csrf', 
        function() {

            $user = new User;
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));

            # Try to add the user 
            try {
                $user->save();
            }
            # Fail
            catch (Exception $e) {
                return Redirect::to('/signup')->with('flash_message', 'Sign up failed; please try again.')->withInput();
            }

            # Log the user in
            Auth::login($user);

            return Redirect::to('/')->with('flash_message', 'Welcome to P4!');

        }
    )
);

Route::get('/',function(){

	return View::make('form');

});



Route::get('/login',
    array(
        'before' => 'guest',
        function() {
            return View::make('login');
        }
    )
);

Route::post('/login', 
    array(
        'before' => 'csrf', 
        function() {

            $credentials = Input::only('email', 'password');

            if (Auth::attempt($credentials, $remember = true)) {
                return Redirect::intended('/')->with('flash_message', 'Welcome Back!');
            }
            else {
                return Redirect::to('/login')->with('flash_message', 'Log in failed; please try again.');
            }

            return Redirect::to('login');
        }
    )
);



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

Route::get('/get-environment',function() {

    echo "Environment: ".App::environment();

});



