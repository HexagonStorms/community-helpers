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
                                    <li>
                                        <a class="active" href="#">View Profile</a>
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
                        <div class="col-centered">
                            <div class="col-sm-4">
                                <button type="button" class="btn btn-warning btn-lg">Create Job</button>
                            </div>

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
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">

                    <div class="row">

                        <div class="col-sm-3 col-xs-6" style="border-right: 1px solid #DADADA; text-align: center;">
                            <h3 style="text-align: center;">Total Jobs Created</h3>
                            <p>4</p>
                        </div>

                        <div class="col-sm-3 col-xs-6" style="border-right: 1px solid #DADADA; text-align: center;">
                            <h3 style="text-align: center;">Reviews published</h3>
                            <p>3</p>
                        </div>

                        <div class="col-sm-3 col-xs-6" style="border-right: 1px solid #DADADA; text-align: center;">
                            <h3 style="text-align: center;">Views this month</h3>
                            <p>272</p>
                        </div>

                        <div class="col-sm-3 col-xs-6" style="text-align: center;">
                            <h3 style="text-align: center;">Views all time</h3>
                            <p>1880</p>
                        </div>

                    </div>
                    <br />


                    <br /><br />
                    <div class="row">

                        <div class="col-sm-12" >
                            <h3 style="text-align: center;">53 views in the last 24 hours</h3>
                        </div>

                    </div>


                    <div class="row">
                        <div class="col-sm-12">
                            <div id="visualization"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop