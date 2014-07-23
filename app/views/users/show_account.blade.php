@extends('layouts.master')

@section('content')

<hr class="topbar"/>

<div class="container">
	<div class="row">
		<div class="col-sm-3">
			<div class="sidebar-account">
				<div class="row ">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading">
								My account
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-offset-2 col-md-6">
										@if(Auth::user()->user_pic_path)
											<img src="{{ Auth::user()->user_pic_path }}" class="">
										@else
											<img src="/img/user.jpg">
										@endif
									</div>
								</div>
								<ul class="nav">
									<li>
										<a class="active" href="/../account_settings">Account Settings</a>
									</li>
									 @if(Auth::user()->is_helper == TRUE)
                                    <li>
                                        <a class="active" href="{{ action('UsersController@dashboard_helper', Auth::id()) }}">Dashboard</a>
                                    </li>
                                    @elseif(Auth::user()->is_helper == FALSE)
                                    <li>
                                        <a class="active" href="{{ action('UsersController@dashboard_creator', Auth::id()) }}">Dashboard</a>
                                    </li>
                                    @endif
									<li>
										<a class="active" href="{{ action('UsersController@edit', Auth::id()) }}">Edit Profile</a>
									</li>
									<li>
										<a class="active" href="{{ action('UsersController@show', Auth::id()) }}">View Profile</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- HELPER DASH
		============================================================= -->
		@if (Auth::user()->is_helper == TRUE)
		<div class="col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">Welcome, {{{ Auth::user()->first_name }}} {{{ Auth::user()->last_name }}}!</div>
				<div class="panel-body">
					<!-- <div class="row">
						<div class="col-sm-6">
							@if(Auth::user()->user_pic_path)
								<img src="{{ Auth::user()->user_pic_path }}" class="">
							@else
								<img src="/img/user.jpg">
							@endif
						</div>
					</div> -->

					<div class="row">
							<div class="col-sm-6 text-center side-hr">
								<h3 class="text-center">Total Jobs Completed</h3>
								<p>4</p>
							</div>
							<div class="col-sm-6 text-center">
								<h3 class="text-center">Money Earned</h3>
								<p>$30</p>
							</div>
					</div>
					<hr />
					<div class="row">
							<div class="col-sm-6 text-center side-hr">
								<h3 class="text-center">Community Service Hours Earned</h3>
								<p>6</p>
							</div>
							<div class="col-sm-6 text-center">
								<h3 class="text-center">Review Rating</h3>
								<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
							</div>
					</div>

				</div>
			</div>
		</div>
		<!-- Active Jobs -->
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">Active Jobs</div>
				<div class="panel-body">
					<table class="table">
						<tr>
							<th>Category</th>
							<th>Description</th>
							<th>Price</th>
							<th>By</th>
							<th>Due Date</th>
							<th>Address</th>
							<th>City</th>
							<th>State</th>
							<th>Zip</th>
							<th>Action</th>
						</tr>
						<tr class="text-center">
							@foreach ($activeJobs as $job)
								<tr class="text-center">
									<td>{{ $job->category }}</td>
									<td>{{ $job->description }}</td>
									<td>${{ $job->price }}</td>
									<td>{{ $job->creator->first_name }} {{ $job->creator->last_name }}</td>
									<td>{{ $job->required_date }}</td>
									<td>{{ $job->creator->street }}</td>
									<td>{{ $job->creator->city }}</td>
									<td>{{ $job->creator->state }}</td>
									<td>{{ $job->creator->zip }}</td>
									<td><a href="{{ action('JobsController@show', $job->id) }}" class="btn btn-primary btn-md">Review</a></td>
								</tr>
							@endforeach
						</tr>

					</table>
				</div>
			</div>
		</div>
		<!-- Jobs Applied -->
		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">Jobs Applied</div>
				<div class="panel-body">

					<!-- Headings -->
					<table class="table">
						<tr>
							<th class="text-center">Category</th>
							<th class="text-center">Description</th>
							<th class="text-center">Price</th>
							<th class="text-center">Address</th>
							<th class="text-center">Due Date</th>
							<th class="text-center">Action</th>
						</tr>

						@foreach ($appliedJobs as $job)
							<tr class="text-center">
								<td>{{ $job->category }}</td>
								<td>{{ $job->description }}</td>
								<td>{{ $job->price }}</td>
								<td>{{ $job->creator->street }}</td>
								<td>{{ $job->required_date }}</td>
								<td><a href="{{ action('JobsController@show', $job->id) }}" class="btn btn-primary btn-md">Review</a></td>
							</tr>
						@endforeach
					</table>
				</div>
			</div>
		</div>
		
		@else
		<!-- CREATOR DASH
		============================================================= -->
		<div class="col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">Welcome, {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}!</div>
				<div class="panel-body">


					<div class="row">
							<div class="col-sm-6 text-center side-hr">
								<h3 class="text-center">Total Jobs Created</h3>
								@if(Auth::user()->createdJobs()->count() > 0)
								<p>{{ Auth::user()->createdJobs()->count() }}</p>
								@else
								<p>0</p>
								@endif
							</div>
							<div class="col-sm-6 text-center">
								<h3 class="text-center">Reviews Published</h3>
								<p>3</p>
							</div>
					</div>
					<hr />
					<div class="row">
							<div class="col-sm-6 text-center side-hr">
								<h3 class="text-center">Views this month</h3>
								<p>6</p>
							</div>
							<div class="col-sm-6 text-center">
								<h3 class="text-center">Views all time</h3>
								<p><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></p>
							</div>
					</div>
					<br><br>
					<div class="row">
						<div class="col-centered">
							<div class="col-sm-4">
								<a href="{{ action('JobsController@create') }}" class="btn btn-warning btn-lg">Create Job</a>
<!-- 								<button type="button" class="btn btn-warning btn-lg">Create Job</button>
 -->							</div>

							<div class="col-sm-4">
								<button type="button" class="btn btn-info btn-lg">Manage Jobs</button>
							</div>

							<div class="col-sm-4">
								<button type="button" class="btn btn-danger btn-lg">Rate Helpers</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">Active Jobs</div>
				<div class="panel-body">

					<!-- Active Jobs -->
					<table class="table">
						<tr>
							<th>Category</th>
							<th>Description</th>
							<th>Price</th>
							<th>Due Date</th>
							<th>Helper's Name</th>
							<th>View Helper</th>

						</tr>
						@foreach ($activeJobs as $job)
							<tr class="text-center">
								<td>{{ $job->category }}</td>
								<td>{{ $job->description }}</td>
								<td>${{ $job->price }}</td>
								<td>{{ $job->required_date }}</td>
								@foreach ($job->helpers as $helper)
									<td> {{ $helper->first_name }} {{ $helper->last_name }} </td>
									<td><a href="{{ action('UsersController@show', $helper->id) }}" class="btn btn-primary btn-md">View</a></td>
								@endforeach
							</tr>
						@endforeach
					</table>

					<div class="text-center">{{ $jobs->links() }}</div>
				</div>
			</div>
		</div>

		<div class="col-sm-12">
			<div class="panel panel-default">
				<div class="panel-heading">Jobs Created</div>
				<div class="panel-body">

					<!-- Created Jobs -->
					<table class="table">
						@if (!empty($jobs))
							@foreach ($jobs as $job)
								<tr>
									<th>Category</th>
									<th>Description</th>
									<th>Price</th>
									<th>Due Date</th>
									<th>Actions</th>

								</tr>
								<tr class="text-center">
									<td>{{ $job->category }}</td>
									<td>{{ $job->description }}</td>
									<td>${{ $job->price }}</td>
									<td>{{ $job->required_date }}</td>
									<td><a href="{{ action('JobsController@edit', $job->id) }}" class="btn btn-warning btn-md">Edit</a></td>
								</tr>
								@if ($job->helpers->count() > 0)
								<tr>
									<th>Helper's Name</th>
									<th>Birthdate</th>
									<th>View Helper</th>
									<th>Select Helper</th>
								</tr>
								@foreach ($job->helpers as $helper)
								<tr>
									<td> {{ $helper->first_name }} {{ $helper->last_name }} </td>
									<td> {{ $helper->birth_date }}  </td>
									<td><a href="{{ action('UsersController@show', $helper->id) }}" class="btn btn-primary btn-md">View</a></td>
									<td>
										{{ Form::open(array('action' => array('JobsController@selectHelper', $job->id), 'method' => 'POST')) }}
	        								{{ Form::hidden('helper_id', $helper->id) }}
	            							<button type="submit" class="btn btn-sm btn-danger">Select Helper</button>
	        							{{ Form::close() }}
									</td>

								</tr>
								@endforeach
								@endif
							@endforeach
						@endif
					</table>
					@if (!empty($jobs))
						<div class="text-center">{{ $jobs->links() }}</div>
					@endif
				</div>
			</div>
		</div>


		@endif

		<!-- Modal -->
		<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
		      </div>
		      <div class="modal-body">
		        ...
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
		        <button type="button" class="btn btn-primary">Save changes</button>
		      </div>
		    </div>
		  </div>
		</div>

	</div>
</div>

@stop