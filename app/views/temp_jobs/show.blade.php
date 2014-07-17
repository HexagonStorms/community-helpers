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
        <h5> Needed By: {{{ $job->required_date }}} </h5>
        <h5>Created By: {{{ $job->user->first_name }}} {{{ $job->user->last_name }}} </h5>
</body>
</html>