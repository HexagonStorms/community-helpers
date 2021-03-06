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
									 @if($user->is_helper == True)
                                    <li>
                                        <a class="active" href="{{ action('UsersController@dashboard_helper', $user->id) }}">Dashboard</a>
                                    </li>
                                    @elseif($user->is_helper == False)
                                    <li>
                                        <a class="active" href="{{ action('UsersController@dashboard_creator', $user->id) }}">Dashboard</a>
                                    </li>
                                    @endif
									<li>
										<a class="active" href="{{ action('UsersController@edit', Auth::user()->id) }}">Edit Profile</a>
									</li>
									<li>
										<a class="active" href="{{ action('UsersController@show', Auth::user()->id) }}">View Profile</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		 <div class="col-sm-9">
			<div class="panel panel-default">
				<div class="panel-heading">
					Account Information
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-sm-6">
							@if(Auth::user()->user_pic_path)
								<img src="{{ $user->user_pic_path }}" class="img-responsive img-circle">
							@else
								<img src="/img/user.jpg">
							@endif
						</div>
						<div class="row">
							<div class="col-sm-3">
								<h4>First name</h4>
								<p>{{{ $user->first_name }}}</p>
							</div>
							<div class="col-sm-3">
								<h4>Last name</h4>
								<p>{{{ $user->last_name }}}</p>
							</div>
						</div>
					</div>
					<div>

					<div class="row">
						<div class="col-md-6 side-hr">
							<h4>Email</h4>
							<p>{{{ $user->email }}}</p>
						</div>

						<div class="col-sm-6">
							<? if (auth::user()->is_helper == 0) : ?>
								<h4>Age</h4>
								{{{ $user->birth_date->age }}}
							<? else : ?>
								<h4>Age</h4>
								{{{ $user->birth_date->age }}}
							<? endif; ?>

						</div>
					</div>
					</div>
					<div class="row">
						<div class="col-sm-6 side-hr">
							<h4>Account Type</h4>
							<? if ($user->is_helper == 0) : ?>
							{{{ 'Giver' }}}
							<? else : ?>
							{{{ 'Helper' }}}
							<? endif; ?>
						</div>
						<div class="col-sm-6">
							<h4>User Type</h4>
							<? if ($user->is_admin == 0) : ?>
							{{{ 'Standard' }}}
							<? else : ?>
							{{{ 'Admin' }}}
							<? endif; ?>
						</div>
					</div>

					@if(Auth::user()->is_helper == TRUE)

						<div class="row">
							<div class="col-sm-6 side-hr">
								<h4>Street</h4>
								<p>{{{ $user->street }}}</p>
							</div>
							<div class="col-sm-6">
								<h4>City</h4>
								<p>{{{ $user->city }}}</p>
							</div>
						</div>

						<div class="row">
							<div class="col-sm-6 side-hr">
								<h4>State</h4>
								<p>{{{ $user->state }}}</p>
							</div>
							<div class="col-sm-6">
								<h4>Zip</h4>
								<p>{{{ $user->zip }}}</p>
							</div>
						</div>

					@endif

					</div>
				</div>
			</div>
		</div>


		@if(Auth::user()->is_helper == FALSE && Auth::user()->id != $user->id)


		<!-- Reviews -->
			<div class="panel panel-default">
				<div class="panel-heading">Reviews</div>
				<div class="panel-body">


					<table class="table">
						<tr>
							<th>Category</th>
							<th>Description</th>
							<th>Rating</th>
							<th>Comments</th>
						</tr>

						@foreach ($reviews as $review)
						<tr>
							<td class="text-center">
                                @if ( $review->job->category == 'Indoor')
                                    <i class="fa fa-home fa-3x"></i>
                                @elseif ( $review->job->category == 'Landscaping')
                                    <i class="fa fa-tree fa-3x"></i>
                                @elseif ( $review->job->category == 'Moving')
                                    <i class="fa fa-truck fa-3x"></i>
                                @elseif ( $review->job->category == 'Outdoor')
                                    <i class="fa fa-road fa-3x"></i>
                                @elseif ( $review->job->category == 'Pets')
                                    <i class="fa fa-paw fa-3x"></i>
                                @elseif ( $review->job->category == 'Other')
                                    <i class="fa fa-star fa-3x"></i>
                                @endif
                            </td>
							<td>{{ $review->job->description }}</td>
							<td class="text-center">
								<class="col-sm-2">
								@if ($review->rating == 5)
                    				{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}
               					@elseif ($review->rating == 4)
                    				{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}
                				@elseif ($review->rating == 3)
                    				{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}
                				@elseif ($review->rating == 2)
                    				{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}
                				@else 
                    				{{ '<i class="fa fa-star"></i>'}}
                				@endif
                				</div>
                			</td>
							<td>{{ $review->comment }}</td>
						</tr>
           				@endforeach

					</table>
				</div>
			</div>

		@elseif (Auth::user()->is_helper == TRUE && Auth::user()->id == $user->id)
		<!-- Reviews -->
			<div class="panel panel-default">
				<div class="panel-heading">Reviews</div>
				<div class="panel-body">


					<table class="table">
						<tr>
							<th>Category</th>
							<th>Description</th>
							<th>Rating</th>
							<th>Comments</th>
						</tr>

						@foreach ($reviews as $review)
						<tr>
							<td class="text-center">
                                @if ( $review->job->category == 'Indoor')
                                    <i class="fa fa-home fa-3x"></i>
                                @elseif ( $review->job->category == 'Landscaping')
                                    <i class="fa fa-tree fa-3x"></i>
                                @elseif ( $review->job->category == 'Moving')
                                    <i class="fa fa-truck fa-3x"></i>
                                @elseif ( $review->job->category == 'Outdoor')
                                    <i class="fa fa-road fa-3x"></i>
                                @elseif ( $review->job->category == 'Pets')
                                    <i class="fa fa-paw fa-3x"></i>
                                @elseif ( $review->job->category == 'Other')
                                    <i class="fa fa-star fa-3x"></i>
                                @endif
                            </td>
							<td>{{ $review->job->description }}</td>
							<td class="text-center">
								<class="col-sm-2">
								@if ($review->rating == 5)
                    				{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}
               					@elseif ($review->rating == 4)
                    				{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}
                				@elseif ($review->rating == 3)
                    				{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}
                				@elseif ($review->rating == 2)
                    				{{ '<i class="fa fa-star"></i>'}}{{ '<i class="fa fa-star"></i>'}}
                				@else 
                    				{{ '<i class="fa fa-star"></i>'}}
                				@endif
                				</div>
                			</td>
							<td>{{ $review->comment }}</td>
						</tr>
           				@endforeach

					</table>
				</div>
			</div>
		@endif
    	</div>
    </div>
</div>

@stop