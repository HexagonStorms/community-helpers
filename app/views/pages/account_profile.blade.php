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
                                    <li>    
                                        <a class="active" href="#">View Profile</a>
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
</div>

@stop