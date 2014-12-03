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


			//	$beers = Beer::where('id','=',"$id")->get();
            $beers = Beer::with('rating')
			->get();

            
            //->where('id','=',"$id")
            //->andWhere('rating',function($q) use($id) {
            //	$q->where('user_id','=',"$id");
            
            print_r($beers);
            //echo $beers->rating->rating;
         	}
   
       		return $beers;
    	}

	}

}

