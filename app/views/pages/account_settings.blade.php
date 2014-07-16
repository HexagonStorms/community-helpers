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
                                        <a class="active" href="account_dashboard">View Profile</a>
                                    </li>                       
                                    <li>    
                                        <a class="active" href="account_profile">Edit Profile</a>
                                    </li>
                                    <li>
                                        <a class="active" href="account_settings">Account Settings</a>
                                    </li>
                                    <li>
                                        <a class="active" href="account_ads">Manage Listings</a>
                                    </li>
                                    <li>
                                        <a class="active" href="account_ad_create">Create Job</a>
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
                <div class="panel-heading">Account Settings</div>
                <div class="panel-body">
                    <br />
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="alert alert-info">
                                <h3>Note:</h3>
                                <p>Leave the password fields blank if you don't want to change your password.</p>
                            </div>
                        </div>
                    </div>
                    <br />
                    <form class="form-vertical">
                    <fieldset>
                        <div class="row">  
                            <div class="col-sm-12">

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Confirm password</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm your password">
                                </div>							  
                                <button type="submit" class="btn btn-primary">Save</button>
                            </div>
                        </div>
                    </fieldset>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-sm-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Account Settings</div>
                <div class="panel-body">
                    <form class="form-vertical">
                        <fieldset>
                            <div class="row">  
                                <div class="col-sm-12">
                                    <h3>Parent Information</h3>
                                    <br />
                                    <div class="form-group">
                                        <label for="parent_first_name">Parent First Name</label>
                                        <input type="parent_first_name" class="form-control" id="parent_first_name" placeholder="Parent first name">
                                    </div>

                                    <div class="form-group">
                                        <label for="parent_last_name">Parent Last Name</label>
                                        <input type="parent_last_name" class="form-control" id="parent_last_name" placeholder="Parent last name">
                                    </div>

                                    <div class="form-group">
                                        <label for="parent_email">Parent Email</label>
                                        <input type="email" class="form-control" id="parent_email" placeholder="Parent email">
                                    </div> 

                                    <div class="form-group">
                                        <label for="parent_phone">Parent Phone</label>
                                        <input type="parent_phone" class="form-control" id="parent_phone" placeholder="###-###-####">
                                    </div>
                                    
                                    <br />
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br />
</div>



</div><!-- Modal -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="modalLogin" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Sign in to your account</h4>
            </div>
            <div class="modal-body">
                <p>If you have an account with us, please enter your details below.</p>

                <form method="POST" action="account_dashboard" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

                    <div class="form-group">
                        <input placeholder="Your username/email" class="form-control" name="email" type="text">                </div>

                    <div class="form-group">
                        <input placeholder="Your password" class="form-control" name="password" type="password" value="">                </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary pull-right">Login</button>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <a data-toggle="modal" href="#modalForgot">Forgot your password?</a>
                        </div>
                    </div>

                </form>
            </div>

            <div class="modal-footer" style="text-align: center">
                <div class="error-message"><p style="color: #000; font-weight: normal;">Don't have an account? <a class="link-info" href="register">Register now</a></p></div>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div class="modal fade" id="modalForgot" tabindex="-1" role="dialog" aria-labelledby="modalForgot" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Forgot your password?</h4>
            </div>
            <div class="modal-body">
                <p>Enter your email to continue</p>

                <form role="form">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Your email address">
                    </div>

                    <div class="row">
                        <div class="col-md-6">

                        </div><div class="col-md-6">
                        <a href="my_account" class="btn btn-primary pull-right">Continue</a>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop