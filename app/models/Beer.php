<?php

class Beer extends Eloquent {

	public function rating(){

		return $this->hasMany('Rating');
	}

public static function search_index(){
        echo "TEST2";
        echo "Test3";
   //$beers = Beer::where('beer_id','=','6');

    # If the "Pre" package is not installed, you should output using print_r instead
    //print_r($beers);
        echo "TEST1";
		$beers=Beer::take(5)
			->orderBy('rating_avg','desc')
			->get();

		if(Auth::check()){
				//$my_beer=Beer::with(array('rating'=>function($query)
        		//{
        	//		$query->where('user_id','=',Auth::id())
        	//				->orderBy('ratings.rating','desc');
        	//	}))
        	//	->take(5)
        		//->orderBy('rating','desc')
         	
			$my_beer=Beer::with('rating')
		        		->where('ratings.user_id','=',Auth::id())
						->join('ratings','beers.id','=','ratings.beer_id')
						->orderBy('ratings.rating','DESC')
						->take(5)
		         		->get();
        // 		$my_beer = $my_beer->sortBy('ratings.rating');
         	
		         //print_r($my_beer);
         		$beer=array($beers,$my_beer);
         		return $beer;
         	} else {

         	return $beers;
         	}
         }


public static function search($query) {
        # If there is a query, search the library with that query
        if($query) {
            $beers = Beer::where('beer_name','LIKE',"%$query%")
            ->orWhere('style', 'LIKE', "%$query%")
            ->orWhere('brewery', 'LIKE', "%$query%")
            ->paginate(10);
        
        } else {
			$beers=Beer::take(5)
			->orderBy('rating_avg','desc')
			->get();
			
		
   		}


        return $beers;
    }

public static function search_id($id) {
        # If there is a query, search the library with that query
echo "TEST";
        if($id) {
        	$beers=DB::table('beers')
        		->where('beers.id','=',$id)
        		->select('beers.id','beers.beer_name','beers.style','beers.brewery','beers.abv','beers.rating_avg','beers.number_of_ratings')
        		->get();

        	$ratings=DB::table('ratings')
        		->where('ratings.beer_id','=',$id)
        		->join('users','users.id','=','ratings.user_id')
        		->select('ratings.rating','ratings.review','ratings.user_id','ratings.updated_at','users.username')
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
        		
		       	return $return_array;
    	}

	}

	public static function update_beer_count($id){

$collection=Rating::where('beer_id','=',$id)
				->get();

				$count=$collection->count();
				if ($count==0){
					$rating_avg=0;
				} else {
					$rating_avg=($collection->sum('rating'))/$count;			
				}
				$beer=Beer::where('id','=',"$id")
				->first();
				$beer->rating_avg=$rating_avg;
				$beer->number_of_ratings=$count;
				$beer->save();

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

				Beer::update_beer_count($id);
				
     

				$beers=DB::table('beers')
        			->where('beers.id','=',$id)
        			->select('beers.id','beers.beer_name','beers.style','beers.brewery','beers.abv','beers.rating_avg','beers.number_of_ratings')
        			->get();

        		$ratings=DB::table('ratings')
        			->where('ratings.beer_id','=',$id)
        			->join('users','users.id','=','ratings.user_id')
        			->select('ratings.rating','ratings.review','ratings.user_id','ratings.updated_at','users.username')
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

