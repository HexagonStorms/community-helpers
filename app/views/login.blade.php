@extends('layouts.master')

@section('content')
<div class="row col-md-4 col-md-offset-4">
	<div class="form-group">
	<h2>Sign In</h2>
	{{ Form::open(array('action' => array('HomeController@doLogin'), 'role'=> 'form')) 	}}
		{{ Form::email('email', null, array('placeholder' => 'Email', "class" => "form-control")) }}
		{{ Form::password('password', array('placeholder' => 'Password', "class" => "form-control")) }}
		<div class="checkbox">
		   <label>
		     <input type="checkbox"> Remember Me
		   </label>
		 </div>
		{{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
	{{ Form::close() }}
	</div>
</div>
@stop