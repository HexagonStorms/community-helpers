@extends('layouts.master')

@section('content')

<hr class="topbar"/>
<div class="container">
    <br />
    <div class="row">

        <div class="col-sm-12">
            <h1>Create an account</h1>

            <hr />
            <div class="row">
                <div class="col-sm-12 col-md-6">



                    <form class="form-vertical">
                        <fieldset>

                            <div class="row">  
                                <div class="col-sm-12" >

                                    <div class="well">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Full name</label>
                                            <div class="row">
                                                <div class="col-sm-3">
                                                    <select class="form-control">
                                                        <option value="1">Mr</option>
                                                        <option value="2">Mrs</option>
                                                        <option value="3">Miss</option>
                                                        <option value="4">Ms</option>
                                                        <option value="5">Dr</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="email" class="form-control " id="exampleInputEmail1" placeholder="First name">
                                                </div>
                                                <div class="col-sm-5">
                                                    <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Last name">
                                                </div>
                                            </div>

                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Enter email">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Make sure your password is longer than 6 characters">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Confirm password</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirm your password">
                                        </div>							  

                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox"> We can contact you with relevant properties, offers and news
                                            </label>
                                        </div>
                                        <br />
                                        <a href="account_dashboard" class="btn btn-primary">Create account</a>


                                    </div>
                                </div>




                            </div>

                        </div>

                        <div class="col-md-6 col-sm-12 account-sidebar hidden-sm">

                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="css/images/icons/Crest.png" width="50"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Why us?</h3>
                                    <p>We're one of the most recognisable brands, attracting thousands of buyers every month.<p>
                                    </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="css/images/icons/Pie-Chart.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Magnet for buyers</h3>
                                    <p>We make sure your listings receive maximum exposure and is presented in an engaging way</p>
                                </div>
                            </div>
                            <br />

                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="css/images/icons/Search.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Focused searches</h3>
                                    <p>Our technology and algorithm matches potential buyers directly to your listings</p>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-3" style="text-align: center;">
                                    <img src="css/images/icons/Telephone.png" width="40"/>
                                </div>
                                <div class="col-sm-8">
                                    <h3>Mobile web</h3>
                                    <p>Your listings will always be accessible to everyone, even when they are on the move, via our responsive mobile website</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <br />






                </fieldset>
            </form>

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