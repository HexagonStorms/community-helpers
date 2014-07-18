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
        <h2>Category: {{ $job->category}}</h2>
        <h5>Description: {{ $job->description }}</h5>
        <h5>Cash: {{ $job->price }} </h5>
        <h5> Needed By: {{{ $job->required_date }}}</h5>

        @foreach($job->users as $user)
            <h5>Associated With: {{ $user->first_name }} {{ $user->last_name }} </h5>
        @endforeach

        <hr>
    @endforeach
    {{ $jobs->links() }}

</body>
</html>
