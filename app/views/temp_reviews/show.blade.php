<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Show Review</title>
</head>
<body>
	<!-- <h1>Job Number: {{ $review->job->id}} </h1>
	<h2>Category: {{ $review->job->category}} </h2>
    <h5>Description: {{ $review->job->description }} </h5>
    <h5>Cash: {{ $review->job->price }} </h5>
    <h5>Date Needed: {{{ $review->job->required_date }}} </h5>
    <h5>Created By: {{{ $review->job->creator->first_name }}} {{{ $review->job->creator->last_name }}} </h5> -->
    <h5>Rating: {{{ $review->rating }}}</h5>
    <h5>Comments: {{{ $review->comment }}}</h5>


    {{ Form::open(array('action' => array('JobsController@destroy', $job->id), 'method' => 'DELETE')) }}
        <!--{{ Form::submit('Delete') }}-->
            <button type="submit" class="btn btn-sm btn-danger">Delete</button>
    {{ Form::close() }}
</body>
</html>