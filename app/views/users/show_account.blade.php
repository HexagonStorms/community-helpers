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
                <div class="panel-heading">
                    Edit Profile
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <p>{{{ $user->first_name }}}</p>
                        </div>
                        <div class="col-sm-6">
                            <p>{{{ $user->last_name }}}</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- 
<p>{{{ $user->first_name }}}</p><br>
<p>{{{ $user->last_name }}}</p><br>
<p>{{{ $user->email }}}</p><br>
<p>{{{ $user->birth_date }}}</p><br>
<p>{{{ $user->is_helper }}}</p><br>
<p>{{{ $user->is_admin }}}</p><br>
<p>{{{ $user->street }}}</p><br>
<p>{{{ $user->city }}}</p><br>
<p>{{{ $user->state }}}</p><br>
<p>{{{ $user->zip }}}</p><br> -->

                    


@stop