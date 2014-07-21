@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">
                @if(Auth::user()->is_helper == TRUE)
                    <h2>Available Job</h2>
                @else 
                    <h2>Posted Job #{{ $job->id}} </h2>
                @endif
                    <hr />
            	
            	<h2>Category: {{ $job->category}} </h2>
                <h5>Description: {{ $job->description }} </h5>
                <h5>Cash: {{ $job->price }} </h5>
                <h5>Date Needed: {{{ $job->required_date }}} </h5>
                <h5>Time: {{{ $job->required_time }}} </h5>
                <h5>Created At: {{{ $job->created_at }}} </h5>
                <h5>Created By: {{ $job->creator->first_name }} {{ $job->creator->last_name }}</h5>

                @if(Auth::user()->is_helper == FALSE)
                    <!-- For giver to delete job -->
                    {{ Form::open(array('action' => array('JobsController@destroy', $job->id), 'method' => 'DELETE')) }}
                    <hr />
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    {{ Form::close() }}
                @else
                    <!-- For helper to apply for job -->
                    {{ Form::open(array('action' => array('JobsController@apply', $job->id), 'method' => 'POST')) }}
                        <button type="submit" class="btn btn-sm btn-succces">Apply</button>
                    {{ Form::close() }}
                @endif

            </div>
        </div>
    </div>
</div>

@stop
