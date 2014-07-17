<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Reviews</title>
</head>
<body>
    <h1>All Reviews</h1>
    <!-- display all reviews -->
    @foreach ($reviews as $review)
        <h5>Stars: {{ $review->rating }} </h5>
        <h5>Comment: {{ $review->comment }} </h5>
        <h5>Comments by {{ $review->job->creator->first_name }} {{ $review->job->creator->last_name }}
        <hr>
    @endforeach

</body>
</html>
