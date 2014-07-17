@extends('layouts.master')

@section('content')
	{{ Form::open(array('action' => 'UsersController@store', 'role' => 'form', 'files' => true) )}}
		<div><h3>Contact Info</h3></div>
		<div class="form-group">
			{{ Form::label('first_name', 'First Name') }}
			{{ Form::text('first_name') }}<br>
			{{ $errors->first('first_name', '<span class="help-block">:message</span>')}}<br>

			{{ Form::label('last_name', 'Last Name') }}
			{{ Form::text('last_name') }}<br>
			{{ $errors->first('last_name', '<span class="help-block">:message</span>')}}<br>

			{{ Form::label('email', 'Email') }}
			{{ Form::email('email') }}<br>
			{{ $errors->first('email', '<span class="help-block">:message</span>')}}<br>

			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}<br>
			{{ $errors->first('password', '<span class="help-block">:message</span>')}}<br>

			{{ Form::label('birth_date', 'Date of Birth') }}
			{{ Form::text('birth_date') }}<br>
			{{ $errors->first('birth_date', '<span class="help-block">:message</span>')}}<br>
		</div>
		<div><h3>Admin Info</h3></div>
		<div>
			{{ Form::label('is_helper', 'Are you a Helper?') }}
			{{ Form::checkbox('is_helper', '1') }}
			{{ $errors->first('is_helper', '<span class="help-block">:message</span>')}}<br>

			{{ Form::label('is_admin', 'Are you an Admin?') }}
			{{ Form::checkbox('is_admin', '1') }}<br>
			{{ $errors->first('is_admin', '<span class="help-block">:message</span>')}}<br>
		</div>
		<div><h3>Address</h3></div>
			{{ Form::label('street', 'Street') }}
			{{ Form::text('street') }}<br>
			{{ $errors->first('street', '<span class="help-block">:message</span>')}}<br>

			{{ Form::label('city', 'city') }}
			{{ Form::text('city') }}<br>
			{{ $errors->first('city', '<span class="help-block">:message</span>')}}<br>

			{{ Form::label('state', 'State') }}
			{{ Form::text('state') }}<br>
			{{ $errors->first('state', '<span class="help-block">:message</span>')}}<br>

			{{ Form::label('zip', 'Zipcode') }}
			{{ Form::text('zip') }}<br>
			{{ $errors->first('zip', '<span class="help-block">:message</span>')}}<br>

		</div>
		{{Form::submit('Save', ['class' => 'btn btn-success'])}}
	{{ Form::close() }}
@stop