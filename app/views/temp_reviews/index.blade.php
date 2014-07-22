@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-12">



            <h1>All Reviews</h1>
            <hr />
            <!-- display all reviews -->
            @foreach ($reviews as $review)
                <h5>Rating:
                @if ($review->rating == 5)
                    {{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}
                @elseif ($review->rating == 4)
                    {{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}
                @elseif ($review->rating == 3)
                    {{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}
                @elseif ($review->rating == 2)
                    {{ '<i class="fa fa-star fa-lg"></i>'}}{{ '<i class="fa fa-star fa-lg"></i>'}}
                @else 
                    {{ '<i class="fa fa-star fa-lg"></i>'}}
                @endif
                <h5>
                <h5>Comment:</h5> 
                <p>{{ $review->comment }}</p>
                <p>By {{ $review->job->creator->first_name }} {{ $review->job->creator->last_name }}</p>
                <hr>
                
            @endforeach


        </div>
    </div>
</div>

@stop
