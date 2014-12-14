@extends('_master')

@section('title')
	Beers
@stop

@section('content')

	<h1>Beers</h1>


	@if($query)
		<h2>You searched for {{{ $query }}}</h2>
	@endif

	@if(sizeof($beers) == 0)
		No results
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


