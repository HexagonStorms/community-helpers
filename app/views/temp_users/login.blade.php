@extends('layouts.master')

@section('content')

<h1>SignIn</h1>

{{ Form::open(array('action' => array('HomeController@doLogin'), 'role'=> 'form')) 	}}
		{{ Form::email('email', null, array('placeholder' => 'Email', "class" => "form-control")) }}
		{{ Form::password('password', array('placeholder' => 'Password', "class" => "form-control")) }}
		{{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}
@stop
