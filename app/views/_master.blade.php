<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{ HTML::style('http://yui.yahooapis.com/pure/0.5.0/pure-min.css'); }}
	{{ HTML::style('http://purecss.io/css/layouts/side-menu.css'); }}
    {{ HTML::style('styles/p4.css'); }}
</head>
<body>

	@if(Session::get('flash_message'))
		<div class='flash-message'>{{ Session::get('flash_message') }}</div>
	@endif
	<div id="main">
		<div class="header">
		<h1>@yield('header')</h1>
		{{ Form::open(array('url' => '/beer', 'method' => 'GET')) }}

		{{ Form::text('query'); }}

		{{ Form::submit('Search'); }}

	{{ Form::close() }}
		@if(Auth::check())
	  		<a href='/logout'>Log out {{ Auth::user()->username; }}</a>
	  	@else
			@if(Request::path()=="login")
				<a href='/signup'>Sign up</a><br>
				<a href='/'>BeerSimple</a>

			@elseif(Request::path()=="signup")
				<a href='/login'>Log in</a><br>
				<a href='/'>BeerSimple</a>
			@else
			    <a href='/signup'>Sign up</a><br>
			    <a href='/login'>Log in</a>
			@endif
		@endif
	</div>
</div>
<div class="content">



    @yield('content')
</div>
</body>
</html>