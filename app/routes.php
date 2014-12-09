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


Route::get('/beer', 'BeerController@getIndex');

Route::get('/beer/{id}','BeerController@getBeerInfo');

Route::get('/beer/edit/{id}','BeerController@getBeerEdit');
Route::post('/beer/edit/{id}','BeerController@postBeerEdit');


Route::post('/signup', 
    array(
        'before' => 'csrf', 
        function() {

        	$data=Input::all();

            $user = new User;
            $user->username = Input::get('username');
            $user->email    = Input::get('email');
            $user->password = Hash::make(Input::get('password'));
            $rules=array(
            	'username'=>array('required','alpha_num','min:3','unique:users,username'),
            	'email'=>array('required','email','unique:users,email'),
            	'password'=>'required','min:5','confirmed');
            $validator = Validator::make($data,$rules);
            if ($validator->passes()) {
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

            	return Redirect::to('/')->with('flash_message', 'Welcome to BeerSimple!');
            } else {
            	return Redirect::to('/signup')
            	->withInput()
            	->withErrors($validator);
            }
        }
    )
);


Route::get('/', 'BeerController@getIndex');

//Route::get('/',function(){

//if (Auth::check())
//{
//echo Auth::id();
//}
// $beer=Beer::with('rating')
//	->orderBy('updated_at','desc')
//	->get();
//echo $beer->rating->rating;
//return View::make('index');

//});


Route::get('/load-table',function(){

$beer=new Beer;
$beer->beer_name="Cactus Queen IPA";
$beer->style="American IPA";
$beer->brewery="Yellow Rose Brewing Company";
$beer->abv="N/A";
$beer->save();

$beer=new Beer;
$beer->beer_name="Wildcatter's Crude Stout";
$beer->style="American Stout";
$beer->brewery="Yellow Rose Brewing Company";
$beer->abv="N/A";
$beer->save();

$beer=new Beer;
$beer->beer_name="Amber	Vienna"; 
$beer->style="Lager";
$beer->brewery="Abita Brewing Co.";
$beer->abv="4.50";
$beer->save();

$beer=new Beer;
$beer->beer_name="Turbodog";
$beer->style="English Brown Ale";
$beer->brewery="Abita Brewing Co.";
$beer->abv="5.60";
$beer->save();

$beer=new Beer;
$beer->beer_name="Purple Haze";
$beer->style="Fruit / Vegetable Beer";
$beer->brewery="Abita Brewing Co.";
$beer->abv="4.20";
$beer->save();

$beer=new Beer;
$beer->beer_name="Wheat";
$beer->style="American Adjunct Lager";
$beer->brewery="Abita Brewing Co.";
$beer->abv="4.20";
$beer->save();

$beer=new Beer;
$beer->beer_name="Golden";
$beer->brewery="Abita Brewing Co.";
$beer->style="American Pale Lager";
$beer->abv="4.20";
$beer->save();

	//return View::make('form');

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

            $credentials = Input::only('username', 'password');
            $rules=array(
            	'username'=>array('exists:users,username'));
            $validator=Validator::make($credentials,$rules);
            if ($validator->passes()){
            	if (Auth::attempt($credentials, $remember = true)) {
                	return Redirect::intended('/')
                	->withInput()
                	->with('flash_message', 'Welcome Back!');
            	}
            	else {
                	return Redirect::to('/login')
                	->withInput()
                	->with('flash_message', 'Password failed; please try again.');
            	}
            }
            else {
               	return Redirect::to('/login')->with('flash_message', 'Username does not exist.');
            }
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



