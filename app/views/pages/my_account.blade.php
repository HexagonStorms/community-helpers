@extends('layouts.master')

@section('content')

<hr class="topbar"/>
            <div class="container">
    <div class="row">


        <div class="col-sm-12">			
            <br />
            <br />			
            <br />
            <br />
            <div class="row">

                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-md-11 col-sm-12">
                            <div class="well">
                                <h2>Sign in</h2>
                                <p>If you have an account with us, please log in.</p>


                                <form role="form">
                                    <div class="form-group">
                                        <label>Email address</label>
                                        <input type="email" class="form-control " placeholder="Enter email">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control"placeholder="Password">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> Remember me
                                        </label>
                                    </div><br />                            
                                    <a href="account_dashboard" class="btn btn-primary">Sign in</a>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-sm-12 col-md-11 pull-right">
                            <div class="well">
                                <h2>Register</h2>
                                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p><br />
                                <a href="register" class="btn btn-primary">Create an account</a>
                            </div>	 		
                        </div>	 		
                    </div>	 		
                </div>	 		

            </div>
            <br />
            <br />			
            <br />
            <br />

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