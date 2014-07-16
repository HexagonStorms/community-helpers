@extends('layouts.master')

@section('content')

<div class="jumbotron home-search" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br />
                <p class="main_description">Search for jobs in your community</p>

                <br /><br />
                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2" style="text-align: center">
                        <div class="row">

                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon input-group-addon-text">Find </span>

                                    <input type="text" class="form-control col-sm-3" placeholder="e.g. mowing lawns, vacuuming ">
                                    <div class=" input-group-addon hidden-xs">
                                        <div class="btn-group" >
                                            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
                                                All categories <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Garage</a></li>
                                                <li><a href="#">Indoor</a></li>
                                                <li><a href="#">Landscaping</a></li>
                                                <li><a href="#">Moving</a></li>
                                                <li><a href="#">Outdoor</a></li>
                                                <li><a href="#">Pets</a></li>
                                               
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>


                        </div>
                    </div>
                </div>
                <br />
                <br />
                <div class="row">
                    <div class="col-sm-12" style="text-align: center">
                        <a href="listings" class="btn btn-primary search-btn">Search jobs</a>
                    </div>
                </div>                
                <br />
                <br />
                <div class="row">
                    <div class="col-sm-12" style="text-align: center">

                    	<!-- Revolving Text -->
                        <div id="quotes">
                            <div class="text-item" style="display: none;">Boom! <strong>Vince</strong> just mowed <strong>Mary T.</strong>'s lawn in <strong>Schertz</strong></div>
                            <div class="text-item" style="display: none;"><strong>Samuel</strong> is available for <strong>home cleaning</strong> in <strong>Boerne</strong></div>
                            <div class="text-item" style="display: none;">Success! <strong>Paul</strong> just washed <strong>Michael M.</strong>'s car in <strong>La Vernia</strong></div>
                            <div class="text-item" style="display: none;">Hey, <strong>Georgia W.</strong> is looking for somebody to walk her dogs in <strong>San Antonio</strong></div>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">



    <div class="row">

        <div class="col-sm-12 col-md-8">

            <div class="row directory">
                <div class="col-sm-12 ">
                    <h2><span>Categories</span></h2>
                </div>
            </div>

            <div class="row directory">


                <div class="col-xs-12">
                                        <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-tree"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Landscaping</h4></a>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-car"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Garage</h4><a/>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Indoor Cleaning</h4><a/>
                            </div>
                        </div>
                    </div>
                                        <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-paw"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Pets</h4><a/>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Moving</h4><a/>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-road"></i>
                            </div>
                            <div class="col-sm-9">
                                <a href="#"><h4>Outdoor</h4><a/>
                            </div>
                        </div>
                    </div>
                </div>                    
            </div>
        </div>

        <div class="col-xs-12 col-md-4 " >
            <div class="row">
                <div class="col-xs-12 col-sm-3 col-md-12  col-lg-11 pull-right" >
                    <br class="hidden-sm hidden-xs"/>
                    <br class="hidden-sm hidden-xs"/>
                    <br class="hidden-sm hidden-xs"/>

                    <div class="panel panel-default">
                        <div class="panel-heading">Help guide</div>

                        <ul class="list-group">
                            <li class="list-group-item"><a href="typography">Staying Safe</a></li>
                            <li class="list-group-item"><a href="typography">Applying for jobs guide</a></li>
                            <li class="list-group-item"><a href="typography">Posting jobs guide</a></li>
                            <li class="list-group-item"><a href="typography">Help &amp; contact us</a></li>
                            <li class="list-group-item"><a href="typography">FAQ: Frequently asked questions</a></li>
                        </ul>



                    </div>
                </div>
            </div>

        </div>
    </div>				

</div><!-- /.container --><!-- Modal -->
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