@extends('layouts.master')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 well">
			<div class="row">
				<div class="col-sm-12">
			 		<img class="margin-auto img-responsive" src="/img/user.jpg"
                    alt="Blank user image">
            	</div>
            </div>
            <div class="row">
            	<div class="col-sm-12">
					<h2><i class="fa fa-user"></i> Sign In</h2>
				</div>
			</div>
			<div class="form-group">
				{{ Form::open(array('action' => array('HomeController@doLogin'), 'role'=> 'form')) 	}}
					{{ Form::email('email', null, array('placeholder' => 'Email', "class" => "form-control")) }}
					{{ Form::password('password', array('placeholder' => 'Password', "class" => "form-control")) }}
					<div class="checkbox">
					   <label><input type="checkbox"> Remember Me</label>
					</div>
					{{ Form::submit('Sign In', ['class' => 'btn btn-primary']) }}
				{{ Form::close() }}
			</div>
			<div class="row">
				<div class="col-sm-6 col-sm-offset-3">
					<a href="/users/create"><p>Create an account</p></a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop