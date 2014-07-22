<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Create-Edit Reviews</title>
</head>
<body>

	@if (isset($job))
		<h1>Edit Review</h1>
		{{ Form::model($job, array('action' => array('ReviewsController@update', $job->id), 'method' => 'PUT')) }}
	@else
		<h1>New Review</h1>
		{{ Form::open(array('action' => 'ReviewsController@store')) }}
	@endif
	<!-- errors on page -->
	{{ $errors->first('job_id', '<span class="help-block">:message</span>') }}
	{{ $errors->first('rating', '<span class="help-block">:message</span>') }}
	{{ $errors->first('comment', '<span class="help-block">:message</span>') }}

	<!-- new form  -->
	{{ Form::label('job_id', 'Job ID') }}
	{{ Form::text('job_id') }}

	{{ Form::label('rating', 'Rating') }}
	{{ Form::text('rating') }}
	<br>
	{{ Form::label('comment', 'Comment') }}
	<br>
	{{ Form::textarea('comment', null, array('cols' => '45', 'rows' => '10', 'placeholder' => 'Feedback on Helper')) }}
	<br>
	<button type="submit" class="btn btn-sm btn-primary">Save Review</button>
	{{ Form::close() }}
</body>
</html>