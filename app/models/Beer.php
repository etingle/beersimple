<?php

class Beer extends Eloquent {

	public function rating(){

		return $this->hasMany('Rating');
	}

public static function search($query) {
        # If there is a query, search the library with that query
        if($query) {
            $beers = Beer::where('beer_name','LIKE',"%$query%")
            ->orWhere('style', 'LIKE', "%$query%")
            ->orWhere('brewery', 'LIKE', "%$query%")
            ->get();
            # Note on what `use` means above:
            # Closures may inherit variables from the parent scope.
            # Any such variables must be passed to the `use` language construct.
        } else {
			$beers=Beer::take(5)
			->orderBy('updated_at','desc')
			->get();
   		}
        return $beers;
    }

public static function search_id($id) {
        # If there is a query, search the library with that query
        if($id) {
			if(Auth::check()){

            	$beer = Beer::with('rating')
            	->where('id','=',"$id")
				->get();

			}
         	else { 
         		$beer=Beer::where('id','=',"$id")
         		->get();
         	}
       
       	return $beer->first();
    	}

	}

	public static function rate_beer($id) {
        # If there is a query, search the library with that query
        $review=Input::get('review');
        $rating=Input::get('rating');

     
        if($id) {
			if(Auth::check()){
				$query=array('beer_id'=>$id,
							'user_id'=>Auth::id()
							);
				$critic=Rating::firstOrNew($query);
				$critic->review=$review;
				$critic->rating=$rating;
				$critic->save();

				$collection=Rating::where('beer_id','=',$id)
				->get();

				$count=$collection->count();
				$rating_avg=($collection->sum('rating'))/$count;
				echo "test";
				echo $rating_avg;	
				echo $count;
				echo "test";			

				$beer=Beer::where('id','=',"$id")
				->first();
				$beer->rating_avg=$rating_avg;
				$beer->number_of_ratings=$count;
				$beer->save();

//					->update(array('review'=>$review,'rating'=>$rating));

            	
            	$beer = Beer::with('rating')
            		->where('id','=',"$id")
					->get();

			}
         	else { 
         		$beer=Beer::where('id','=',"$id")
         		->get();
         	}
       	return $beer->first();
    	}

	}

}

