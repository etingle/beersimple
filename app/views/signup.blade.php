@extends('_master')


<h1>Sign up</h1>

{{ Form::open(array('url' => '/signup')) }}

    Username<br>
    @if ($errors->first('username'))
     {{ $errors->first('username', '<span class="error">:message</span>') }}
     <br>
     @endif
    {{ Form::text('username') }}<br><br>

    Email<br>
    @if ($errors->first('email'))
    {{ $errors->first('email', '<span class="error">:message</span>') }}
    <br>
    @endif
    {{ Form::text('email') }}<br><br>

    Password:<br>
    @if ($errors->first('password'))
    {{ $errors->first('password', '<span class="error">:message</span>') }}
    <br>
    @endif
    {{ Form::password('password') }}<br><br>

    Confirm Password:<br>
    {{ Form::password('password_confirmation')}} <br><br>

    {{ Form::submit('Submit') }}

{{ Form::close() }}