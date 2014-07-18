<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create-Edit</title>
</head>
<body>

    @if (isset($job))
        <h1>Edit Job</h1>
        {{ Form::model($job, array('action' => array('JobsController@update', $job->id), 'method' => 'PUT')) }}
    @else
        <h1>New Job</h1>
        {{ Form::open(array('action' => 'JobsController@store')) }}
    @endif
    <!-- errors on page -->
    {{ $errors->first('category', '<span class="help-block">:message</span>') }}
    {{ $errors->first('description', '<span class="help-block">:message</span>') }}
    {{ $errors->first('price', '<span class="help-block">:message</span>') }}
    {{ $errors->first('is_complete', '<span class="help-block">:message</span>') }}
    {{ $errors->first('required_date', '<span class="help-block">:message</span>') }}
    {{ $errors->first('required_time', '<span class="help-block">:message</span>') }}

    <!-- new form  -->
    {{ Form::label('category', 'Category') }}
    {{ Form::text('category') }}
    <br>
    {{ Form::label('description', 'Description') }}
    {{ Form::text('description') }}
    <br>
    {{ Form::label('price', 'Price') }}
    <!--{{ Form::input('price', 'null', 'Price') }} -->
    {{ Form::text('price') }}
    <br>
    {{ Form::label('is_complete', 'Is the Job Complete?') }}
    {{ Form::checkbox('is_complete', '1') }}
    <br>
    {{ Form::label('required_date', 'Required Date:') }}
    {{ Form::text('required_date') }}
    <br>
    {{ Form::label('required_time', 'Required Time:') }}
    {{ Form::text('required_time') }}
    <br>
    <button type="submit" class="btn btn-sm btn-primary">Save Job</button>
    {{ Form::close() }}
</body>
</html>