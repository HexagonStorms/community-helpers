@extends('layouts.master')

@section('content')

<hr style="border: 3px solid #D2160A"/>

<div class="container">
    <div class="row">
        <div class="col-lg-3">
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
							<a class="active" href="account_account">My account</a>
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

        <div class="col-lg-9">
            <div class="panel panel-default">
                <div class="panel-heading">Extra options</div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="alert alert-info">
                                <h3>Note:</h3>
                                <p>You will still be able to edit your listing after publishing.</p>
                            </div>

                        </div>
                    </div>
                    <h3>Losting options</h3><br />
                    <table class="table table-bordered">

                        <tbody>

                            <tr>
                                <td>Plan Free Ad Plan</td>
                                <td>Free</td>
                            </tr>        	

                            <tr>
                                <td>Featured</td>
                                <td><input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2"> €2.99 </td>
                            </tr>    

                            <tr>
                                <td>Highlighted</td>
                                <td><input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2"> €0.60 </td>
                            </tr>        	

                            <tr>
                                <td>Priority</td>
                                <td>
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> None <br />  
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Gold - €2.00  <br />  
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2"> Silver - €1.00  <br />  
                                </td>
                            </tr>

                            <tr>
                                <td>Video Classifieds</td>
                                <td><input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2"> $1.99</td>
                            </tr>        	

                            <tr>
                                <td>Enter discount code</td>
                                <td><input type="email" class="form-control " id="exampleInputEmail1" placeholder=""></td>
                            </tr>


                        </tbody>
                    </table>


                    <div class="row"> 
                        <div class="col-lg-12"> 
                            <a href="#" class="btn btn-primary pull-right">Publish now</a>
                        </div>


                    </div>



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