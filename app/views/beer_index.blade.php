@extends('_master')

@section('title')
	Beers
@stop

@section('content')

	<h1>Beers</h1>


	
	@if(sizeof($beers) == 0)
		No results
	@else
			@foreach($beers as $beer)
{{ $beer['review'] }}
			<section class='beer'>

				<h2>{{ $beer['beer_name'] }}</h2>

				<p>
					{{ $beer['style'] }}
				</p>

				<p>
					{{ $beer['brewery'] }}
				</p>

			</section>
		@endforeach

	@endif

@stop