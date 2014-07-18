@extends('layouts.master')

@section('content')
<div class="container well">
	<div class="">
		{{ Form::open(array('action' => 'UsersController@store', 'role' => 'form', 'files' => 'true') )}}
			<div>
				<h3>Contact Info</h3>
			</div>
			<div class="form-group">
				<div class='col-md-6'>
					{{ Form::label('first_name', 'First Name') }}<br>
					{{ Form::text('first_name', null, ['class' => 'form-control']) }}
					{{ $errors->first('first_name', '<span class="help-block">:message</span>')}}
				</div>
				<div class='col-md-6'>
					{{ Form::label('last_name', 'Last Name') }}<br>
					{{ Form::text('last_name', null, ['class' => 'form-control']) }}
					{{ $errors->first('last_name', '<span class="help-block">:message</span>')}}
				</div>
			</div>
			<div class="form-group">
				<div class='col-md-6'>
					{{ Form::label('email', 'Email') }}<br>
					{{ Form::email('email', null, ['class' => 'form-control']) }}
					{{ $errors->first('email', '<span class="help-block">:message</span>')}}
				</div>
				<div class='col-md-6'>
					{{ Form::label('password', 'Password') }}<br>
					{{ Form::password('password', ['class' => 'form-control']) }}
					{{ $errors->first('password', '<span class="help-block">:message</span>')}}
				</div>
			</div>
			<div class="form-group">
				<div class='col-md-6'>
					{{ Form::label('birth_date', 'Date of Birth') }}<br>
					{{ Form::text('birth_date', null, ['class' => 'form-control']) }}
					{{ $errors->first('birth_date', '<span class="help-block">:message</span>')}}<br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12 row">
					<h3>Address</h3>
				</div>
			</div>
			<div class="form-group">
				<div class='col-md-3'>
					{{ Form::label('street', 'Street') }}<br>
					{{ Form::text('street', null, ['class' => 'form-control']) }}
					{{ $errors->first('street', '<span class="help-block">:message</span>')}}<br>
				</div>
				<div class='col-md-3'>
					{{ Form::label('city', 'city') }}<br>
					{{ Form::text('city', null, ['class' => 'form-control']) }}
					{{ $errors->first('city', '<span class="help-block">:message</span>')}}<br>
				</div>
				<div class="col-md-3">
					{{ Form::label('state', 'State') }}<br>
					{{ Form::text('state', null, ['class' => 'form-control']) }}
					{{ $errors->first('state', '<span class="help-block">:message</span>')}}<br>
				</div>
				<div class="col-md-3">
					{{ Form::label('zip', 'Zipcode') }}<br>
					{{ Form::text('zip', null, ['class' => 'form-control']) }}
					{{ $errors->first('zip', '<span class="help-block">:message</span>')}}<br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-12 row">
					<h3>Admin Info</h3>
				</div>
			</div>
			<div class="form-group">
				<div class='col-md-12'>
					{{ Form::label('is_helper', 'Are you a Helper?') }}
					{{ Form::checkbox('is_helper', '1') }}
					{{ $errors->first('is_helper', '<span class="help-block">:message</span>')}}<br>
				</div>
			</div>
			<div class="form-group">
				<div class="col-md-6">
					{{Form::submit('Save', ['class' => 'btn btn-success'])}}
				</div>
			</div>
		{{ Form::close() }}
	</div>
</div>
@stop