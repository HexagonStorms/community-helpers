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
                    <table class="table">
                        <th>Category</th>
                        <th>Job</th>
                        <th>Price</th>
                        <th>
                    
                </div>
            </div>
        </div>
    </div>

</div>

@stop