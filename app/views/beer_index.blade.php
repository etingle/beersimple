@extends('_master')

@section('header')
	<a href="/">BeerSimple</a>
@stop

@section('content')

	

	
	@if(sizeof($beer) == 0)
<h1 class="beer_title">That beer doesn't exist!</h1>
	@else
			<section class="beer">

@foreach($beer as $beer)
				<h2 class="beer_title">{{ $beer->beer_name }}</h2>

				<p>
					Style: <span class="beer_value">{{ $beer->style }}</span>
				</p>
				<p>
					ABV: <span class="beer_value">{{ $beer->abv }}</span> @if ($beer->abv!="N/A") <span class="beer_value">{{ "%" }}</span> @endif
				</p>
				<p>
					Brewer: <span class="beer_value">{{ $beer->brewery }}</span>
				</p>
				<p>
				Rating: <span class="beer_value">{{ $beer->rating_avg }}</span>
				</p>
				<p>
				No. of Ratings: <span class="beer_value">{{ $beer->number_of_ratings }}</span>
				</p>
				
@endforeach

@if (Auth::check())


<form class="pure-form" method="post" action="/beer/{{$beer->id}}">
	{{ Form::token() }}
<div class="review">
<fieldset class="rating">
    <legend>Please rate:</legend>
    <input type="radio" id="star5" name="rating" value="5" @if ($rating==5) {{ "checked" }} @endif/><label for="star5" title="Rocks!"></label>
    <input type="radio" id="star4" name="rating" value="4" @if ($rating==4) {{ "checked" }} @endif /><label for="star4" title="Pretty good"></label>
    <input type="radio" id="star3" name="rating" value="3" @if ($rating==3) {{ "checked" }} @endif /><label for="star3" title="Meh"></label>
    <input type="radio" id="star2" name="rating" value="2" @if ($rating==2) {{ "checked" }} @endif /><label for="star2" title="Kinda bad"></label>
    <input type="radio" id="star1" name="rating" value="1" @if ($rating==1) {{ "checked" }} @endif /><label for="star1" title="Sucks big time"></label>
</fieldset>
</div>

<div class="review">
<textarea cols="30" rows="5" id="review" name="review">{{$review}}</textarea>
<input type="submit" value="Save Review"</input>
</div>
</form>

{{ Form::open(array('url' => '/beer/delete/')) }}
			{{ Form::hidden('id',$beer->id); }}
			{{ Form::submit('Delete')}}
		{{ Form::close() }}

@if(!empty($ratings))
<p>Other Ratings</p>
@endif
@foreach($ratings as $individual_rating)
<div class="other_reviews">
<p><span id="other_rating">{{{ $individual_rating->rating }}} </span><span id="other_review">{{{ $individual_rating->review }}}</span></p>
<p id="other_rating_info">{{{ $individual_rating->username}}} - {{ $individual_rating->updated_at }}</span></p>
</div>

@endforeach
@endif

			</section>






	@endif

@stop




