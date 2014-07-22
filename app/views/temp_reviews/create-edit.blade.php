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
							<h2>Edit Review</h2>
							<hr />
							{{ Form::model($job, array('action' => array('ReviewsController@update', $job->id), 'method' => 'PUT')) }}
						@else
							<h2>New Review</h2>
							<hr />
							{{ Form::open(array('action' => 'ReviewsController@store')) }}
						@endif
					</div>
				</div>

				<!-- Job # + Rating  -->
				<div class="form-group">
					<div class="row">
						<div class="col-sm-6">
							{{ Form::label('job_id', 'Job id') }}
							{{ Form::text('job_id', null, ['class' => 'form-control', 'placeholder' => 'job_id']) }}
							{{ $errors->first('job_id', '<span class="help-block">:message</span>')}}
						</div>
						<div class="col-sm-6">
							{{ Form::label('rating', 'Rating') }}
							{{ Form::text('rating', null, ['class' => 'form-control', 'placeholder' => 'Rating (1-5)']) }}
							{{ $errors->first('rating', '<span class="help-block">:message</span>')}}
						</div>
					</div>
				</div>
				<div class="form-group">
					<div class="row">
						<div class="col-sm-12">
							{{ Form::label('comment', 'Comments') }}
							${{ Form::textarea('comment', null, ['class' => 'form-control', 'placeholder' => 'Write your review here']) }}
							{{ $errors->first('comment', '<span class="help-block">:message</span>')}}
						</div>
					</div>
				</div>

				<button type="submit" class="btn btn-sm btn-danger">Save Review</button>
				{{ Form::close() }}

			</div>
		</div>
	</div>
</div>

@stop