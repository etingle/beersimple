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
            ->paginate(10);
            //$beers->setBaseUrl('beer?query='.$query.'&');
            //->get();
            //$beers=Beer::paginate(1);
            //->get();
            # Note on what `use` means above:
            # Closures may inherit variables from the parent scope.
            # Any such variables must be passed to the `use` language construct.
        } else {
			$beers=Beer::take(5)
			->orderBy('rating_avg','desc')
			->get();
   		}
        return $beers;
    }

public static function search_id($id) {
        # If there is a query, search the library with that query

        if($id) {
        	$beers=DB::table('beers')
        		->where('beers.id','=',$id)
        		->select('beers.id','beers.beer_name','beers.style','beers.brewery','beers.abv','beers.rating_avg','beers.number_of_ratings')
        		->get();

        	$ratings=DB::table('ratings')
        		->where('ratings.beer_id','=',$id)
        		->join('users','users.id','=','ratings.user_id')
        		->select('ratings.rating','ratings.review','ratings.user_id','users.username')
        		->get();
        	
        	//$beer=Beer::with('rating',array('user'=>function($query)
        	//{
        	//	$query->where('beer_id','=',$id);
        	//})
        	//	->where('id','=',"$id")
         	//	->get();
			//if(Auth::check()){
				

            	//$beer = Beer::with(array('rating'=>function($query)
            	//{
            	//	$query->where('user_id','=',Auth::id());
            	//}))
            	//->where('id','=',"$id")
				//->get();
//print_r($beer);
        		$return_array=array($beers,$ratings);
        		echo "TEST";
        		print_r($return_array);
        		        		echo "TEST";

		       	return $return_array;
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

				$beer=Beer::where('id','=',"$id")
				->first();
				$beer->rating_avg=$rating_avg;
				$beer->number_of_ratings=$count;
				$beer->save();

//					->update(array('review'=>$review,'rating'=>$rating));

            	

				$beers=DB::table('beers')
        			->where('beers.id','=',$id)
        			->select('beers.id','beers.beer_name','beers.style','beers.brewery','beers.abv','beers.rating_avg','beers.number_of_ratings')
        			->get();

        		$ratings=DB::table('ratings')
        			->where('ratings.beer_id','=',$id)
        			->join('users','users.id','=','ratings.user_id')
        			->select('ratings.rating','ratings.review','ratings.user_id','users.username')
        			->get();

            	
			}
         	else { 
         		$beers=DB::table('beers')
         		->where('id','=',"$id")
         		->get();
         	}
         	$return_array=array($beers,$ratings);
       	return $return_array;
    	}

	}

}

