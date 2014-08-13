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
							{{ Form::label('category', 'Category') }}
							<select type="date" class="form-control" name="category">
								<option value="NULL">Choose Category</option>
								<option value="Indoor">Indoor</option>
								<option value="Landscaping">Landscaping</option>
								<option value="Moving">Moving</option>
								<option value="Outdoor">Outdoor</option>
								<option value="Pets">Pets</option>
								<option value="Other">Other</option>
							</select>

							{{ $errors->first('category', '<span class="help-block">:message</span>')}}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-12">
							{{ Form::label('description', 'Description') }}
							{{ Form::textarea('description', null, ['class' => 'form-control', 'placeholder' => 'E.g. Mow the lawn, Washes the dishes {...} ']) }}
							{{ $errors->first('description', '<span class="help-block">:message</span>')}}
						</div>
					</div>
				</div>

				<br>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-4">
							{{ Form::label('price', 'Price') }}
							${{ Form::text('price', null, ['class' => 'form-control', 'placeholder' => 'Price']) }}
							{{ $errors->first('price', '<span class="help-block">:message</span>')}}
						</div>
						<div class="col-sm-4">
							{{ Form::label('required_date', 'Due Date:') }}
							<input type="date" class="form-control" name="required_date" value="">
							{{ $errors->first('required_date', '<span class="help-block">:message</span>')}}
						</div>
						<div class="col-sm-4">
							{{ Form::label('required_time', 'Time:') }}
							<input type="time" class="form-control" name="required_time" value="">
							{{ $errors->first('required_time', '<span class="help-block">:message</span>')}}
						</div>
					</div>
				</div>
				<div class="row">
					<button type="submit" class="btn btn-sm btn-primary">Save Job</button>
					{{ Form::close() }}
					<!-- Delete job if user is an giver-->
					@if(Auth::user()->is_helper == FALSE)
	                    <!-- For giver to delete job -->
	                    {{ Form::open(array('action' => array('JobsController@destroy', $job->id), 'method' => 'DELETE')) }}
	                        <button type="submit" class="btn btn-sm btn-danger pull-right muted">Delete</button>
	                    {{ Form::close() }}
	                @endif
				</div>

			</div>
		</div>
	</div>
</div>

@stop

@section('bottomscript')

@if (isset($job))
<script>

   var category = '{{ $job->category }}';

   $("select option[value='" + category + "']").attr("selected","selected");

   var date ='{{ $job->required_date }}';

   $("input[name='required_date']").attr("value",date);

   var time ='{{ $job->required_time }}';

   $("input[name='required_time']").attr("value",time);

</script>

@endif

@stop