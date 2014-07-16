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
                <div class="panel-heading">Edit Profile</div>
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

                                <!-- FORM: First, Last, Birth-Date Entry -->
                                <div class="col-sm-8">
                                    <br />
                                    <div class="form-group">
                                        <label for="first_name" class="col-sm-4 control-label">First Name</label>
                                        <div class="col-sm-8">
                                            <input type="first_name" class="form-control" id="first_name" placeholder="First name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="last_name" class="col-sm-4 control-label">Last Name</label>
                                        <div class="col-sm-8">
                                            <input type="last_name" class="form-control" id="last_name" placeholder="First name">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="birth_date" class="col-sm-4 control-label">Birth Date</label>
                                        <div class="col-sm-8">
                                            <input type="date" class="form-control" id="birth_date">
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <label for="bio" class="control-label adjustable-width">Bio</label><br /><br />
                                    <textarea class="form-control col-sm-8 adjustable-width" rows="6"></textarea>
                                </div>						  
                            </div>	

                            <hr />

                            <div class="form-group">
                                <label for="street" class="col-sm-2 control-label">Street</label>
                                <div class="col-sm-10">
                                    <input type="street" class="form-control" id="street" placeholder="Street address">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="apt_num" class="col-sm-2 control-label">Apt. #</label>
                                <div class="col-sm-10">
                                    <input type="apt_num" class="form-control" id="apt_num" placeholder="Blank if not needed">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="city" class="col-sm-2 control-label">City</label>
                                <div class="col-sm-10">
                                    <input type="city" class="form-control" id="city" placeholder="City">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="state" class="col-sm-2 control-label">State</label>
                                <div class="col-sm-10">
                                    <input type="state" class="form-control" id="state" placeholder="State">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="zip" class="col-sm-2 control-label">Zipcode</label>
                                <div class="col-sm-10">
                                    <input type="zip" class="form-control" id="zip" placeholder="Zipcode">
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