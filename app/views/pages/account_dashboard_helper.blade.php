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
                            <th>Due Date</th>
                            <th>Address</th>
                            <th>City</th>
                            <th>State</th>
                            <th>Zip</th>
                            <th>Apply</th>
                        </tr>
                        <tr class="text-center">
                            <td><i class="fa fa-car"></i></td>
                            <td>Walk the dogs, blah blah blah blah etc</td>
                            <td>$10</td>
                            <td>Maggie Cosign</td>
                            <td>April 15th, 8pm</td>
                            <td>112 East Pecan</td>
                            <td>San Antonio</td>
                            <td>TX</td>
                            <td>17854</td>
                            <td><button class="btn btn-warning">Apply</button>
                        </tr>
                        
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@stop