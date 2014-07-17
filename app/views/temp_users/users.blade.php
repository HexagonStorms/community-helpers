@extends('layouts.master')

@section('content')
	{{ Form::open(array('action' => 'UsersController@store', 'role' => 'form', 'files' => true) )}}
		<div><h3>Contact Info</h3></div>
		<div class="form-group">
			{{ Form::label('first_name', 'First Name') }}
			{{ Form::text('first_name') }}<br>

			{{ Form::label('last_name', 'Last Name') }}
			{{ Form::text('last_name') }}<br>

			{{ Form::label('email', 'Email') }}
			{{ Form::email('email') }}<br>

			{{ Form::label('password', 'Password') }}
			{{ Form::password('password') }}<br>

			{{ Form::label('birth_date', 'Date of Birth') }}
			{{ Form::text('birth_date') }}<br>
		</div>
		<div><h3>Admin Info</h3></div>
		<div>
			{{ Form::label('is_helper', 'Are you a Helper?') }}
			{{ Form::checkbox('is_helper', '1') }}

			{{ Form::label('is_admin', 'Are you an Admin?') }}
			{{ Form::checkbox('is_admin', '1') }}<br>
		</div>
		<div><h3>Address</h3></div>
			{{ Form::label('street', 'Street') }}
			{{ Form::text('street') }}<br>

			{{ Form::label('city', 'city') }}
			{{ Form::text('city') }}<br>

			{{ Form::label('state', 'State') }}
			{{ Form::text('state') }}<br>

			{{ Form::label('zip', 'Zipcode') }}
			{{ Form::text('zip') }}<br>

		</div>
		{{Form::submit('Save', ['class' => 'btn btn-success'])}}
	{{ Form::close() }}
@stop