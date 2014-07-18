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
                                <ul class="nav">              
                                    <li>
                                        <a class="active" href="/../account_settings">Account Settings</a>
                                    </li>
                                    <li>
                                        <a class="active" href="/../account_dashboard">Dashboard</a>
                                    </li>                       
                                    <li>    
                                        <a class="active" href="/../account_profile">Edit Profile</a>
                                    </li>
                                    <li>    
                                        <a class="active" href="{{ action('UsersController@show', $user->id) }}">View Profile</a>
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
                    Edit Profile
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6 side-hr">
                            <h4>First name</h4>
                            <p>{{{ $user->first_name }}}</p>
                        </div>
                        <div class="col-sm-6">
                            <h4>Last name</h4>
                            <p>{{{ $user->last_name }}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 side-hr">
                            <h4>Email</h4>
                            <p>{{{ $user->email }}}</p>
                        </div>

                        <div class="col-sm-6">
                            <h4>Birth Date</h4>
                           <p>{{{ $user->birth_date }}}</p>
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
                            <? if ($user->is_helper == 0) : ?>
                            {{{ 'Standard' }}}
                            <? else : ?>
                            {{{ 'Admin' }}}
                            <? endif; ?>
                        </div>
                    </div>

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
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Jobs Listings</div>
                <div class="panel-body">

                    <!-- Active Jobs -->
                    <!-- Job #1 -->
                    <table class="table">
                        <tr>
                            <th>Category</th>
                            <th>Description</th>
                            <th>Price</th>
                            <th>By</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Due Date</th>
                            <th>Apply</th>
                        </tr>
                        @foreach ($jobs as $job)
                        <tr class="text-center">
                            <td>{{ $job->category }}</td>
                            <td>{{ $job->description }}</td>
                            <td>{{ $job->price }}</td>

                            @foreach ($job->users as $user)
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td>{{ $user->street }}</td>
                                <td>{{ $user->city }}</td>
                                <td>{{ $user->state }}</td>
                                <td>{{ $user->zip }} </td>
                            @endforeach
                            <td>{{ $job->required_date }}</td>
                            <td><button class="btn btn-warning">Apply</button>
                        </tr>
                        @endforeach
                        

                        
                    </table>

                    <div class="col-sm-12 text-center">{{ $jobs->links() }}</div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- 
<p>{{{ $user->state }}}</p><br>
<p>{{{ $user->zip }}}</p><br> -->

                    


@stop