@extends('_master')

@section('header')
	Welcome to BeerSimple
@stop

@section('content')
<div id="top5">
<h2>Top 5 Rated Beers</h2>
	@foreach($beers as $beer)
			<section class='beer'>

				<h3><a href="/beer/{{$beer['id']}}">{{ $beer['beer_name'] }}</a></h3>

				<p>
					{{ $beer['brewery'] }}
				</p>
				<p>
				Rating: {{ $beer['rating_avg'] }} No. of Ratings: {{ $beer['number_of_ratings'] }}
				</p>
			</section>
		@endforeach

</div>

@if(isset($my_beers))
<div id="my5">
<h2>My Top 5 Rated Beers</h2>
	@foreach($my_beers as $beer)
			<section class='beer'>

				<h3><a href="/beer/{{$beer['beer_id']}}">{{ $beer['beer_name'] }}</a></h3>

				<p>
					{{ $beer['brewery'] }}
				</p>
				<p>
				Rating: {{ $beer['rating']}}
				</p>
			</section>
		@endforeach

</div>
@endif

@stop


