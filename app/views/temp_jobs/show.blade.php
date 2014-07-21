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
    <h5>Date Needed: {{{ $job->required_date }}} </h5>
    <h5>Created By: {{ $job->creator->first_name }} {{ $job->creator->last_name }}</h5>

    <!-- For giver to delete job -->
    {{ Form::open(array('action' => array('JobsController@destroy', $job->id), 'method' => 'DELETE')) }}
        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    {{ Form::close() }}

    <!-- For helper to apply for job -->
    {{ Form::open(array('action' => array('JobsController@apply', $job->id), 'method' => 'POST')) }}
        <button type="submit" class="btn btn-sm btn-succces">Apply</button>
    {{ Form::close() }}
</body>
</html>