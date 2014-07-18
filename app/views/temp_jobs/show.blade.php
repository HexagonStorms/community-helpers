<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Job</title>
</head>
<body>
	<h1>Job Number: {{ $job->id}} </h1>
	<h2>Category: {{ $job->category}} </h2>
    <h5>Description: {{ $job->description }} </h5>
    <h5>Cash: {{ $job->price }} </h5>
    <h5>Needed By: {{{ $job->required_date }}} </h5>
    @foreach($job->users as $user)
            <h5>Created By: {{ $user->first_name }} {{ $user->last_name }}</h5>
    @endforeach
    {{ Form::open(array('action' => array('JobsController@destroy', $job->id), 'method' => 'DELETE')) }}
        <!--{{ Form::submit('Delete') }}-->
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    {{ Form::close() }}
</body>
</html>