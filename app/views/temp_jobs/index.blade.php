<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Jobs</title>
</head>
<body>
    <h1>All Jobs's</h1>
    <!-- display all posts -->
    @foreach ($jobs as $job)
        <h2>Category: {{ $job->category}} </h2>
        <h5>Description: {{ $job->description }} </h5>
        <h5>Cash: {{ $job->price }} </h5>
        <h5> Needed By: {{{ $job->required_date }}} </h5>
        <h5>Created By: {{{ $job->user->first_name }}} {{{ $job->user->last_name }}} </h5>
        <hr>
    @endforeach
    {{ $jobs->links() }}

</body>
</html>
