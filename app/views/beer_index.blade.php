@extends('_master')

@section('header')
	Beers
@stop

@section('content')

	<h1>Beers</h1>

	
	@if(sizeof($beer) == 0)
		No results
	@else
			<section class='beer'>


				<h2>{{ $beer['beer_name'] }}</h2>

				<p>
					{{ $beer['style'] }}
				</p>

				<p>
					{{ $beer['brewery'] }}
				</p>
				<p>
					{{ $beer['number_of_ratings'] }}
				</p>
				<p>
					{{ $beer['rating_avg'] }}
				</p>

@if (Auth::check())


<form class="pure-form" method="post" action="/beer/{{$beer['id']}}">
	{{ Form::token() }}

<fieldset class="rating">
    <legend>Please rate:</legend>
    <input type="radio" id="star5" name="rating" value="5" @if ($rating==5) {{ "checked" }} @endif/><label for="star5" title="Rocks!">5 stars</label>
    <input type="radio" id="star4" name="rating" value="4" @if ($rating==4) {{ "checked" }} @endif /><label for="star4" title="Pretty good">4 stars</label>
    <input type="radio" id="star3" name="rating" value="3" @if ($rating==3) {{ "checked" }} @endif /><label for="star3" title="Meh">3 stars</label>
    <input type="radio" id="star2" name="rating" value="2" @if ($rating==2) {{ "checked" }} @endif /><label for="star2" title="Kinda bad">2 stars</label>
    <input type="radio" id="star1" name="rating" value="1" @if ($rating==1) {{ "checked" }} @endif /><label for="star1" title="Sucks big time">1 star</label>
</fieldset>


<textarea cols="50" rows="5" id="review" name="review">{{$review}}</textarea>
<input type="submit" value="Save Review"</input>
</form>

@endif

			</section>






	@endif

@stop




