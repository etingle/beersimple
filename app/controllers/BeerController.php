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
			$query  = Input::get('query');
			if ($query){

			$beers = Beer::search($query);
		
			return View::make('beer_result')
				->with('beers', $beers)
				->with('query', $query);

		}
	}
	public function getBeerInfo($id) {

		$beer = Beer::search_id($id);
			
	
		return View::make('beer_index')
				->with('beer', $beer->first());
		}

		
	}