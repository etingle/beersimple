@extends('_master')

@section('header')
	<a href="/">BeerSimple</a>
@stop

@section('content')

	@if($query)
		<h1 class="beer_title">You searched for {{{ $query }}}</h1>
	@endif

	@if(sizeof($beers) == 0)
		<h2 class="beer_title">No results</h2>
	@else

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
	{{ $beers->appends(array('query'=>$query))->links() }}
	@endif

@stop


