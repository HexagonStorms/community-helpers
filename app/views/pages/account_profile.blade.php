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
							<a class="active" href="account_dashboard">Dashboard</a>
						</li>						
						<li>	
							<a class="active" href="account_profile">My profile</a>
						</li>
                        <li>
							<a class="active" href="account">My account</a>
						</li>
						<li>
							<a class="active" href="account_ads">Manage ads</a>
						</li>
						<li>
							<a class="active" href="account_ad_create">Create new ad</a>
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
                <div class="panel-heading">Manage adverts</div>
                <div class="panel-body">

                    <form class="form-horizontal">
                        <fieldset>
                            <div class="form-group">

                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="inputEmail1" class="col-sm-12 control-label">Your logo</label>
                                        <div class="col-sm-11">
                                            <img id="file-select" src="css/images/180x100.png" width="100%" /><br />

                                            <span class="btn btn-default btn-file">
                                                Click to upload <input type="file">
                                            </span>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-8">
                                    <br />
                                    <div class="form-group">
                                        <label for="inputEmail1" class="col-sm-4 control-label">Display name</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="inputEmail1" placeholder="The name you want other people to see">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="inputEmail1" class="col-sm-4 control-label">Company name</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="inputEmail1" placeholder="Your company name">
                                        </div>
                                    </div>


                                    <div class="form-group">
                                        <label for="inputEmail1" class="col-sm-4 control-label">Website</label>
                                        <div class="col-sm-8">
                                            <input type="email" class="form-control" id="inputEmail1" placeholder="http://">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="inputEmail1" style="width: 100%" class="control-label">About you</label><br /><br />
                                    <textarea class="form-control col-sm-8" rows="6" style="width: 99%"></textarea>
                                </div>						  
                            </div>	

                            <hr />

                            <div class="form-group">
                                <label for="inputEmail1" class="col-sm-2 control-label">Address</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail1" placeholder="Your address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-sm-2 control-label">Email address</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail1" placeholder="Must be valid, we'll send you a validation message">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-sm-2 control-label">Mobile</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail1" placeholder="Your mobile number">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="inputEmail1" class="col-sm-2 control-label">Home phone</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail1" placeholder="Don't forget to include the area code">
                                </div>
                            </div>	

                            <div class="form-group">
                                <label for="inputEmail1" class="col-sm-2 control-label">Fax</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="inputEmail1" placeholder="If you still use a fax machine">
                                </div>
                            </div>

                            <br />
                            <button type="submit" class="btn btn-primary">Save profile</button>


                        </div>




                    </div>

                </div>

            </fieldset>
        </form>
    </div>




</div>

</div>

</fieldset>
</form>


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