<?php

class Rating extends Eloquent {

protected $fillable = ['beer_id', 'user_id'];

	public function beer(){

		return $this->belongsTo('Beer');
	}

	public function user(){

		return $this->belongsTo('User');
	}
}