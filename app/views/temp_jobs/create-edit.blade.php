@extends('layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="well">

                <!-- Heading -->
                <div class="row">
                    <div class="col-sm-12">
                        @if (isset($job))
                            <h2>Edit Job</h2>
                            <hr />
                            {{ Form::model($job, array('action' => array('JobsController@update', $job->id), 'method' => 'PUT')) }}
                        @else
                            <h2>New Job</h2>
                            <hr />
                            {{ Form::open(array('action' => 'JobsController@store')) }}
                        @endif
                    </div>
                </div>

                <!-- New Form  -->
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            {{ Form::text('category', null, ['class' => 'form-control', 'placeholder' => 'Category']) }}
                            {{ $errors->first('category', '<span class="help-block">:message</span>')}}
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            {{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'E.g. Mow the lawn, Washes the dishes {...} ']) }}
                            {{ $errors->first('description', '<span class="help-block">:message</span>')}}
                        </div>
                    </div>
                </div>
                
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            {{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) }}
                            {{ $errors->first('price', '<span class="help-block">:message</span>')}}
                        </div>
                    </div>
                </div>
                
                <br>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            {{ Form::label('required_date', 'Due Date:') }}
                            {{ Form::text('required_date', null, ['class' => 'form-control', 'placeholder' => 'YYYY-MM-DD']) }}
                            {{ $errors->first('required_date', '<span class="help-block">:message</span>')}}
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-6">
                            {{ Form::label('required_time', 'Time:') }}
                            {{ Form::text('required_time', null, ['class' => 'form-control', 'placeholder' => 'HH:MM']) }}
                            {{ $errors->first('required_time', '<span class="help-block">:message</span>')}}
                        </div>
                    </div>
                </div>
                <br>
                {{ Form::label('required_time', 'Required Time:') }}
                {{ Form::text('required_time') }}

                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-12">
                            {{ Form::label('is_complete', 'Has the job been complete?') }}
                            {{ Form::checkbox('is_complete', FALSE, ['class' => 'form-control']) }}
                            {{ $errors->first('first_name', '<span class="help-block">:message</span>')}}
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-sm btn-primary">Save Job</button>
                {{ Form::close() }}
            </div>
        </div>
    </div>
</div>

@stop