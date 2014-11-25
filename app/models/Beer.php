<?php

class Beer extends Eloquent {

	public function rating(){

		return $this->hasMany('Rating');
	}
}