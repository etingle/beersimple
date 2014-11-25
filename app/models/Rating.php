<?php

class Rating extends Eloquent {

	public function beer(){

		return $this->belongsTo('Beer');
	}

	public function user(){

		return $this->belongsTo('User');
	}
}