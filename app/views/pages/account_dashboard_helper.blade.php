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
                            <div class="panel-heading">My account</div>
                            <div class="panel-body">
                                <ul class="nav">              
                                    <li>
                                        <a class="active" href="account_settings">Account Settings</a>
                                    </li>
                                    <li>
                                        <a class="active" href="account_dashboard">Dashboard</a>
                                    </li>                       
                                    <li>    
                                        <a class="active" href="account_profile">Edit Profile</a>
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
                <div class="panel-heading">Welcome, FIRSTNAME LASTNAME!</div>
                <div class="panel-body">

                    <div class="row">
                            <div class="col-sm-6 text-center side-hr">
                                <h3 class="text-center">Total Jobs Created</h3>
                                <p>4</p>
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
                                <p>121</p>
                            </div>
                            <div class="col-sm-6 text-center">
                                <h3 class="text-center">Views all time</h3>
                                <p>345</p>
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
                </div>
            </div>
        </div>
    </div>
</div>

@stop