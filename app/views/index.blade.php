@extends('_master')

@section('header')
	Welcome to BeerSimple
@stop

@section('content')

	@foreach($beers as $beer)
			<section class='beer'>

				<h2><a href="/beer/{{$beer['id']}}">{{ $beer['beer_name'] }}</a></h2>

				<p>
					{{ $beer['style'] }}
				</p>

				<p>
					{{ $beer['brewery'] }}
				</p>
			</section>
		@endforeach



@stop


