@extends('layouts.master')

@section('content')

<hr class="topbar"/>
            <div class="container">
    <div class="row">


        <div class="col-md-12">
            <h1>Contact us</h1>
            <hr />
        </div>
    </div>

    <div class="row">
        <div class="col-md-8">
            <div class="row about-text">


                <div class="col-md-12">




                    <div class="form-group">

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">First name</label>
                                            <input class="form-control" name="first_name" type="text" value="">							</div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Last name</label>
                                            <input class="form-control" name="last_name" type="text" value="">							</div>
                                    </div>
                                </div>					

                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input class="form-control" name="email_address" type="text" value="">							</div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Phone number</label>
                                            <input class="form-control" name="phone_number" type="text" value="">							</div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Category</label>
                                            <select class="form-control" name="report_type"><option value="general">-</option><option value="report">Report an error you have seen</option><option value="feedback">Send us feedback or suggestions</option><option value="advertising">Advertising on our site</option><option value="anything">Anything else</option></select>							</div>
                                    </div>
                                </div>					

                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Your comments</label>
                                            <textarea class="form-control" name="comment" cols="50" rows="10"></textarea>							</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>



                    <h2 class="listings-top">Something urgent?</h2>
                    <p>We prides ourselves in customer service excellence. Our customer service representatives are available Monday–Friday from 7 a.m.–7 p.m. CST at <strong>0800-555-5555</strong> or via direct support at <strong>example@example.com</strong></p>

                </div>




            </div><!-- /row -->

        </div>

        <div class="col-md-3 col-xs-12 pull-right">

            <h2>Our Headquarters</h2>
            928 Wolf Pen Road<br />
            Concord, CA 94520<br />
            London - United Kingdom<br />
            Zip Code CA 94520<br />
            <br />
            <br />
            US: +650-430-1309<br />
            UK: +44-430-1309<br />
            <br />
            <a href="mailto:info@example.com">info@example.com</a><br />
            <a href="mailto:info@example.com">support@example.co.uk</a><br />			
            <br /><br />
            <h2>Business Hours</h2>
            <strong>Weekday:</strong> 8am to 6pm<br />
            <strong>Sunday:</strong> closed<br />
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