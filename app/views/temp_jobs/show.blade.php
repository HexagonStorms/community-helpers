@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">

                <div class="row">
                    <div class="col-sm-12">
                        @if(Auth::user()->is_helper == TRUE)
                            <h2>Available Job</h2>
                        @else 
                            <h2>Posted Job #{{ $job->id}} </h2>
                        @endif
                        <hr />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <h6>Category</h6> 
                        <p id="jobCategory">{{ $job->category}}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h6>Description</h6> 
                        <p>{{ $job->description }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <h6>Price</h6> 
                        <p>${{ $job->price }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h6>Due Date</h6> 
                        <p>{{ date("d F Y",strtotime($job->required_date)) }}</p>
                    </div>

                    <div class="col-sm-6">
                        <h6>Time</h6> 
                        <p>{{ date("g:ha",strtotime($job->required_time)) }}</p>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <h6>Created At</h6> 
                        <p>{{ $job->created_at->format('d F Y') }}</p>
                    </div>

                    <div class="col-sm-6">
                        <h6>By</h6> 
                        <p>{{ $job->creator->first_name }} {{ $job->creator->last_name }}</p>
                    </div>
                </div>

                <hr />
                @if(Auth::user()->is_helper == FALSE)
                    <!-- For giver to delete job -->
                    {{ Form::open(array('action' => array('JobsController@destroy', $job->id), 'method' => 'DELETE')) }}
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    {{ Form::close() }}
                @else
                    <!-- For helper to apply for job -->
                    {{ Form::open(array('action' => array('JobsController@apply', $job->id), 'method' => 'POST')) }}
                        <button type="submit" class="btn btn-sm btn-warning">Apply</button>
                    {{ Form::close() }}
                @endif

            </div>
        </div>
    </div>
</div>

@stop
