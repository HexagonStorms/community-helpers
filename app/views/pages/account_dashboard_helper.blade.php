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

                    <!-- Active Job #1 -->
                    <div class="col-sm-12 no-padding"><h2>Job #1</h2></div>
                    <div class="col-sm-12 no-padding show-border">

                        <div class="col-sm-2 side-hr">
                            <div class="col-sm-12 no-padding">
                                <div class="col-sm-3 no-padding">
                                    <i class="fa fa-home fa-lg"></i>
                                </div>
                                <div class="col-sm-9 no-padding">
                                    <p>Indoor</p>
                                </div>
                            </div>
                            <div class="col-sm-12 no-padding">
                                <p>Wash the dishes</p>
                            </div>
                        </div>

                        <div class="col-sm-1 no-padding side-hr">
                            <div class="col-sm-12">
                                <p>Price</p>
                            </div>
                            <div class="col-sm-12">
                                <p>$25</p>
                            </div>
                        </div>

                        <div class="col-sm-3 no-padding side-hr">
                            <div class="col-sm-12 no-padding">
                                    <p>By: Mary McWalters</p>
                            </div>
                            <div class="col-sm-12 no-padding">
                                <p>Due on Wednesday, 5:12pm.</p>
                            </div>
                        </div>

                        <div class="col-sm-4 no-padding side-hr">
                            <div class="col-sm-12 no-padding">
                                    <p><em>Description</em>:</p>
                            </div>
                            <div class="col-sm-12 no-padding">
                                <p></p>
                            </div>
                        </div>

                        <div class="col-sm-2 no padding">
                            <div class="col-sm-12 no-padding">
                                <p>6082 Juniper Pass</p>
                            </div>
                            <div class="col-sm-12 no-padding">
                                <p>4.1 miles away</p>
                            </div>
                        </div>
                    </div>


                    

                </div>
            </div>
        </div>
    </div>

</div>

@stop