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
                            <div class="col-sm-3">
                                <h3>Total Jobs Created</h3>
                                <p>4</p>
                            </div>
                            <div class="col-sm-3">
                                <h3>Reviews Published</h3>
                                <p>3</p>
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