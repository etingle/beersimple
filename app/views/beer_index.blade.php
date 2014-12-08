@extends('_master')

@section('title')
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
@if (Auth::check())
	@if ($beer->rating()->first())
{{$beer->rating()->first()->rating}}
{{$beer->rating()->first()->review}}
	@endif
@endif

			</section>

	@endif

@stop