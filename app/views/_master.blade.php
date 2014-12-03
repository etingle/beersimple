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
	<div id="main">
		<div class="header">
		<h1>@yield('header')</h1>
		@if(Auth::check())
    	<a href='/logout'>Log out {{ Auth::user()->email; }}</a>
		@else 
	    <a href='/signup'>Sign up</a> or <a href='/login'>Log in</a>
		@endif
	</div>
</div>
<div class="content">
    @yield('content')
</div>
</body>
</html>