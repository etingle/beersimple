@extends('_master')

@section('header')
	Welcome to BeerSimple
@stop

@section('content')
<h2>Top 5 Rated Beers</h2>
	@foreach($beers as $beer)
			<section class='beer'>

				<h2><a href="/beer/{{$beer['id']}}">{{ $beer['beer_name'] }}</a></h2>

				<p>
					{{ $beer['brewery'] }}
				</p>
				<p>
				Rating: {{ $beer['rating_avg'] }} No. of Ratings: {{ $beer['number_of_ratings'] }}
				</p>
			</section>
		@endforeach



@stop


