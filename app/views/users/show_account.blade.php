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
    </div>
</div>
<!-- 
<p>{{{ $user->state }}}</p><br>
<p>{{{ $user->zip }}}</p><br> -->

                    


@stop