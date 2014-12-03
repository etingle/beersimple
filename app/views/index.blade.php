@extends('_master')

@section('title')
	Welcome to BeerSimple
@stop

@section('header')
BeerSimple
@stop

@section('content')

	{{ Form::open(array('url' => '/beer', 'method' => 'GET')) }}

		{{ Form::label('query','Search') }}

		{{ Form::text('query'); }}

		{{ Form::submit('Search'); }}

	{{ Form::close() }}

@stop