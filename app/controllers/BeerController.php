<?php
class BeerController extends \BaseController {
	/**
	*
	*/
	public function __construct() {
		# Make sure BaseController construct gets called
		parent::__construct();
		$this->beforeFilter('auth', array('except' => array('getIndex','getBeerInfo')));
	}

	public function getIndex() {
		# Format and Query are passed as Query Strings
			$query  = Input::get('query',false);
			$beers = Beer::search($query);
			if($query){
				return View::make('beer_result')
					->with('beers', $beers)
					->with('query', $query);
			} else {
				return View::make('index')
					->with('beers', $beers);
			}
		
		}
	public function getBeerInfo($id) {
		$return_array = Beer::search_id($id);
		$beer=$return_array[0];
		$ratings=$return_array[1];
//print_r($beer->rating[0]);
//echo "<br/><br/>";
		$rating=false;
		$review=false;
		//echo $beer->rating()->rating;
		if (Auth::check()){


				foreach($ratings as $key=>$individual_rating){
//					print_r($beer);
					if (isset($individual_rating->user_id) && ($individual_rating->user_id===Auth::id())){
						$rating=$individual_rating->rating;
						$review=$individual_rating->review;
						unset($ratings[$key]);

						}
				}
				
		}
echo "<br/><br/>";

//unset($beer->rating[1]);
print_r($beer);
echo "<br/><br/>";
print_r($ratings);

//echo "TEST ".$beers[0]->beer_name;
		return View::make('beer_index')
				->with('beer', $beer)
				->with('rating',$rating)
				->with('review',$review)
				->with('ratings',$ratings);
		}

public function postBeerInfo($id) {
		
		$rating  = Input::get('rating',false);
		$review  = Input::get('review',false);
		echo $rating;
		echo $review;
		$return_array = Beer::rate_beer($id,$rating,$review);
		//$return_array = Beer::search_id($id);
		$beer=$return_array[0];
		$ratings=$return_array[1];
		
		
		if (Auth::check()){
				foreach($ratings as $key=>$individual_rating){
//					print_r($beer);
					if (isset($individual_rating->user_id) && ($individual_rating->user_id===Auth::id())){
						$rating=$individual_rating->rating;
						$review=$individual_rating->review;
						unset($ratings[$key]);

						}
				}
				
		}
		
		return View::make('beer_index')
				->with('beer', $beer)
				->with('rating',$rating)
				->with('review',$review)
				->with('ratings',$ratings);

		}

		
	}

		