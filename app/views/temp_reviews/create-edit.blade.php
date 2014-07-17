<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create-Edit</title>
    <style>
        /* located in demo.css and creates a little calendar icon
         * instead of a text link for "Choose date"
         */
        a.dp-choose-date {
            float: left;
            width: 16px;
            height: 16px;
            padding: 0;
            margin: 5px 3px 0;
            display: block;
            text-indent: -2000px;
            overflow: hidden;
            background: url(calendar.png) no-repeat;
        }
        a.dp-choose-date.dp-disabled {
            background-position: 0 -20px;
            cursor: default;
        }
        /* makes the input field shorter once the date picker code
         * has run (to allow space for the calendar icon
         */
        input.dp-applied {
            width: 140px;
            float: left;
        }
    </style>
<!--     <link href="/datepickers/css/datepicker.css" rel="stylesheet">
    <link href="/datepicker/js/bootstrap-datepicker.js" rel="stylesheet">
    <link href="/datepicker/less/datepicker.less" rel="stylesheet"> -->

</head>
<body>
        <!-- flash messages -->
        @if (Session::has('successMessage'))
            <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
        @endif
        @if (Session::has('errorMessage'))
            <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
        @endif
        @if (Session::has('infoMessage'))
            <div class="alert alert-info">{{{ Session::get('infoMessage') }}}</div>
        @endif

        @if (isset($errors))
            {{ var_dump($errors) }}
        @endif
        @if (isset($job))
            <h1>Edit Job</h1>
            {{ Form::model($job, array('action' => array('JobsController@update', $job->id), 'method' => 'PUT')) }}
        @else
            <h1>New Job</h1>
            {{ Form::open(array('action' => 'JobsController@store', 'files' => true)) }}
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
        {{ Form::datetime('required_date', array('value' => '<a href="#" class="dp-choose-date" title="Choose date">Choose date</a>')) }}
        <br>
        {{ Form::label('required_time', 'Required Time:') }}
        {{ Form::text('required_time') }}
        <br>
        <button type="submit" class="btn btn-sm btn-primary">Create Job</button>

</div>
    {{ Form::close() }}
<script>
    $(function()
    {
        $('.date-pick').datePicker();
    });
     //$('.datepicker').datepicker();
</script>


</body>
</html>

