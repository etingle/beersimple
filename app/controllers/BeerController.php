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


	public function postDelete() {
		try {
			$id=Input::get('id');
	        $review_to_delete = Rating::where('user_id','=',Auth::id())
	        ->where('beer_id','=',$id)
	        ->firstOrFail();
		    }
	    catch(exception $e) {
	        return Redirect::to('/beer/'.$id)->with('flash_message', 'Could not delete review - review not found.');
	    }
  	    Rating::destroy($review_to_delete->id);
	    Beer::update_beer_count($id);
	    return Redirect::to('/beer/'.$id)->with('flash_message', 'Review deleted.');
	}


	public function getIndex() {
		# Format and Query are passed as Query Strings
			$query  = Input::get('query',false);
			if($query){
				$beers = Beer::search($query);
				return View::make('beer_result')
					->with('beers', $beers)
					->with('query', $query);
			} else {
				$beers = Beer::search_index();
				if (is_array($beers)){
					return View::make('index')
					->with('beers', $beers[0])
					->with('my_beers',$beers[1]);
				} else {
				return View::make('index')
					->with('beers', $beers);
				}
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
					
					if (isset($individual_rating->user_id) && ($individual_rating->user_id==Auth::id())){
						$rating=$individual_rating->rating;
						$review=$individual_rating->review;
						
						//$individual_rating->updated_at=$individual_rating->updated_at;
						unset($ratings[$key]);

						} else {
							$date = strtotime($individual_rating->updated_at);
						$individual_rating->updated_at=date('M d, Y',$date);
						
						}
				}
				
		}

//print_r($beer);
		return View::make('beer_index')
				->with('beer', $beer)
				->with('rating',$rating)
				->with('review',$review)
				->with('ratings',$ratings);
		}

public function postBeerInfo($id) {
		
		$rating  = Input::get('rating',false);
		$review  = Input::get('review',false);

		try {
				$return_array = Beer::rate_beer($id,$rating,$review);
		    }
	    catch(exception $e) {
	        return Redirect::to('/beer/'.$id)->with('flash_message', 'Could not rate beer - not found.');
	    }
		//$return_array = Beer::search_id($id);
		$beer=$return_array[0];
		$ratings=$return_array[1];
		
		
		if (Auth::check()){
				foreach($ratings as $key=>$individual_rating){
//					print_r($beer);
					if (isset($individual_rating->user_id) && ($individual_rating->user_id==Auth::id())){
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

		