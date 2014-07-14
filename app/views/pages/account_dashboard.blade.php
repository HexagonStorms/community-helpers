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
							<a class="active" href="account_dashboard.html">Dashboard</a>
						</li>						
						<li>	
							<a class="active" href="account_profile.html">My profile</a>
						</li>
                        <li>
							<a class="active" href="account_account.html">My account</a>
						</li>
						<li>
							<a class="active" href="account_ads.html">Manage ads</a>
						</li>
						<li>
							<a class="active" href="account_ad_create.html">Create new ad</a>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</div>

	<div class="row hidden-xs">
<div class="col-lg-12">
		<div class="well">
			<div class="row ">
<div class="col-lg-3">
												<img src="css/images/icons/Crest.png" width="45"/>
											</div>
			<div class="col-lg-9">

<h4 style="margin-top: 0">Increase visibility</h4>
			<p>Don't forget to 'bump' your listing to gain more visibility</p>

			</div>
			</div>

		</div>
		</div>
		</div>

</div>        </div>

        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">

                    <div class="row">

                        <div class="col-sm-3 col-xs-6" style="border-right: 1px solid #DADADA; text-align: center;">
                            <h3 style="text-align: center;">Total credits</h3>
                            <p>50</p>
                        </div>

                        <div class="col-sm-3 col-xs-6" style="border-right: 1px solid #DADADA; text-align: center;">
                            <h3 style="text-align: center;">Listings published</h3>
                            <p>5</p>
                        </div>

                        <div class="col-sm-3 col-xs-6" style="border-right: 1px solid #DADADA; text-align: center;">
                            <h3 style="text-align: center;">Views this month</h3>
                            <p>86</p>
                        </div>

                        <div class="col-sm-3 col-xs-6" style="text-align: center;">
                            <h3 style="text-align: center;">Total Ad views</h3>
                            <p>257</p>
                        </div>

                    </div>
                    <br />


                    <br /><br />
                    <div class="row">

                        <div class="col-sm-12" >
                            <h3 style="text-align: center;">29 listing views in the last 24 hours</h3>
                        </div>

                    </div>


                    <div class="row">

                        <div class="col-sm-12">
                            <div id="visualization"></div>
                        </div>

                    </div>


                    <br />
                    <br />			
                    <br />
                    <br />

                    <div class="row">

                        <div class="col-sm-4">
                            <h3>Create a new ad</h3>
                            <p>Click on the button below to start creating a new ad. You can upload up to 20 images per property.</p>
                            <a href="account_ad_create.html" class="btn btn-default">Create new ad</a>
                            <br />
                            <br />
                        </div>


                        <div class="col-sm-4">
                            <h3>Promote your ads</h3>
                            <p>If your ad has fallen to the 3rd or 4th page, it's a good time to 'bump' it back to the 1st page</p>
                            <a href="account_ads.html" class="btn btn-default">Bump listings</a>
                            <br />
                            <br />
                        </div>

                        <div class="col-sm-4">
                            <h3>Unlimited listings</h3>
                            <p>Upgrade your account be able to publish unlimited properties per month.</p>
                            <a href="#" class="btn btn-default">Upgrade account</a>
                            <br />
                            <br />
                        </div>

                    </div>

                    <br />
                    <br />

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

                <form method="POST" action="account_dashboard.html" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

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
                <div class="error-message"><p style="color: #000; font-weight: normal;">Don't have an account? <a class="link-info" href="register.html">Register now</a></p></div>
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
                        <a href="my_account.html" class="btn btn-primary pull-right">Continue</a>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop