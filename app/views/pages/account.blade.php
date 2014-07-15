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

</div>
        </div>

        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">

                    <br /><div class="row">
                    <div class="col-sm-12">
                        <div class="alert alert-info">
                            <h3>Note:</h3>
                            <p>Leave the password fields blank if you don't want to change your password.</p>
                        </div>

                    </div>
                    </div><br />
                    <form class="form-vertical">
                        <fieldset>

                            <div class="row">  
                                <div class="col-sm-12 "  >

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Name</label>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <select class="form-control">
                                                    <option value="1">Mr</option>
                                                    <option value="2">Mrs</option>
                                                    <option value="3">Miss</option>
                                                    <option value="4">Ms</option>
                                                    <option value="5">Dr</option>
                                                    <option value="6">Professor</option>
                                                    <option value="7">The Rt Revd Dr</option>
                                                    <option value="8">The Most Revd</option>
                                                    <option value="9">The Rt Revd</option>
                                                    <option value="10">The Revd Canon</option>
                                                    <option value="11">The Revd</option>
                                                    <option value="12">The Rt Revd Professor</option>
                                                    <option value="13">The Ven</option>
                                                    <option value="14">The Most Revd Dr</option>
                                                    <option value="16">Rabbi</option>
                                                    <option value="17">Canon</option>
                                                    <option value="18">Dame</option>
                                                    <option value="19">Chief</option>
                                                    <option value="20">Sister</option>
                                                    <option value="21">Reverend</option>
                                                    <option value="22">Major</option>
                                                    <option value="23">Other</option>
                                                    <option value="24">Cllr</option>
                                                    <option value="25">Sir</option>
                                                    <option value="26">Rt Hon Lord</option>
                                                    <option value="27">Rt Hon</option>
                                                    <option value="28">The Lord </option>
                                                    <option value="29">Viscount</option>
                                                    <option value="30">Viscountess</option>
                                                    <option value="31">Baroness</option>
                                                    <option value="32">Captain</option>
                                                    <option value="33">Master</option>
                                                    <option value="34">Very Revd</option>
                                                    <option value="35">Lady</option>
                                                    <option value="38">MP</option>
                                                    <option value="39">King of Kings and Lord of Lords</option>
                                                    <option value="40">Conquering Lion of the Tribe of Judah</option>
                                                    <option value="41">Elect of God and Light of this World</option>
                                                    <option value="42">His Own Divine Majesty</option>
                                                    <option value="43">First Ancient King of Creation</option>
                                                    <option value="44">King Alpha</option>
                                                    <option value="45">Queen Omega</option>
                                                    <option value="46">Beginning with Our End and First with Our Last</option>
                                                    <option value="47">Protector of All Human Faith</option>
                                                    <option value="48">Ruler of the Universe</option>
                                                    <option value="49">Dude</option>
                                                    <option value="50">Mx (gender-netural)</option>
                                                </select>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Your first name">
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="email" class="form-control " id="exampleInputEmail1" placeholder="Your second name">
                                            </div>
                                        </div>

                                    </div>


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

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> We can contact you with relevant properties, offers and news
                                        </label>
                                    </div>
                                    <br />
                                    <button type="submit" class="btn btn-primary">Save details</button>


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