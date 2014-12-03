<?php
class BeerController extends \BaseController {
	/**
	*
	*/
	public function __construct() {
		# Make sure BaseController construct gets called
		parent::__construct();
		$this->beforeFilter('auth', array('except' => 'getIndex'));
	}

	public function getIndex() {
		# Format and Query are passed as Query Strings
		if ($query){
			$query  = Input::get('query');
			$beers = Beer::search($query);
		
			return View::make('beer_result')
				->with('beers', $beers)
				->with('query', $query);

		}
	}
	public function getBeerInfo($id) {

		$beers = Beer::search_id($id);
		
		return View::make('beer_index')
				->with('beers', $beers);

		}

		
	}