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
		$beer = Beer::search_id($id);
		$rating=false;
		$review=false;
		print_r($beer);
		//echo $beer->rating()->rating;
		if (Auth::check()){
			if ($beer->rating()->first()){
				if ($beer->rating()->first()->rating){
					$rating=$beer->rating()->first()->rating;
				}
				else {
					$rating=false;
				}
				if ($beer->rating()->first()->review){
					$review=$beer->rating()->first()->review;
				}
				else {
					$review=false;
				}
			}
		}

		return View::make('beer_index')
				->with('beer', $beer)
				->with('rating',$rating)
				->with('review',$review);
		}

public function postBeerInfo($id) {
		$test=Input::all();
		
		$rating  = Input::get('rating',false);
		$review  = Input::get('review',false);
		//echo $rating;
		//echo $review;
//		$beer = Beer::rate_beer($id,$rating,$review);

		$beer = Beer::rate_beer($id);

		if (Auth::check()){
			if ($beer->rating()->first()){
				if ($beer->rating()->first()->rating){
					$rating=$beer->rating()->first()->rating;
				}
				else {
					$rating=false;
				}
				if ($beer->rating()->first()->review){
					$review=$beer->rating()->first()->review;
				}
				else {
					$review=false;
				}
			}
		}
		echo $rating;
		echo $review;
		return View::make('beer_index')
				->with('beer', $beer)
				->with('rating',$rating)
				->with('review',$review);
		}

		
	}

		