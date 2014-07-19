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
                                        <a class="active" href="{{ action('UsersController@dashboard', $user->id) }}">Dashboard</a>
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
                <div class="panel-heading">Welcome, {{{ $user->first_name }}} {{{ $user->last_name }}}!</div>
                <div class="panel-body">

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

        <!-- <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Account Information
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
        </div> -->

        <div class="col-sm-12">
            <div class="panel panel-default">
                <div class="panel-heading">Active Jobs</div>
                <div class="panel-body">

                    <!-- Active Jobs -->
                    <!-- Job #1 -->
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
                        </tr>
                        <tr class="text-center">
                            <td><i class="fa fa-car"></i></td>
                            <td>Do dishes Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et {...} </td>
                            <td>$15</td>
                            <td>Henry B.</td>
                            <td>Wednesday, 4:00pm</td>
                            
                            <td>112 East Pecan</td>
                            <td>San Antonio</td>
                            <td>TX</td>
                            <td>17854</td>
                        </tr>
                        
                        <!-- Job #2 -->
                        <tr class="text-center">
                            <td><i class="fa fa-road"></i></td>
                            <td>mow the lawn in voluptate velit esse
                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.{...} </td>
                            <td>$30</td>
                            <td>Brandon V.</td>
                            <td>Friday, 8:00pm</td>
                            <td>112 East Pecan</td>
                            <td>San Antonio</td>
                            <td>TX</td>
                            <td>17854</td>
                        </tr>
                    </table>
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
                            <th class="text-center">Category</th>
                            <th class="text-center">Description</th>
                            <th class="text-center">Price</th>
                            
                            <th class="text-center">Address</th>
                            <th class="text-center">Due Date</th>
                            <th class="text-center">Apply</th>
                        </tr>

                        @foreach ($jobs as $job)
                            <tr class="text-center">
                                <td>{{ $job->category }}</td>
                                <td>{{ $job->description }}</td>
                                <td>{{ $job->price }}</td>
                                
                                <td>{{ $job->creator->street }}</td>
                                
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

@stop