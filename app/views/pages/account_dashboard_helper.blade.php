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