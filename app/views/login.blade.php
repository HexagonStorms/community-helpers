@extends('layouts.master')

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			 <img class="img-responsive  centered" src="/img/user.jpg"
                    alt="">
			<h2><i class="fa fa-user"></i> Sign In</h2>
			<div class="form-group">
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
	</div>
@stop