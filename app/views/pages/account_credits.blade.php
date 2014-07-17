@extends('layouts.master')

@section('content')

<hr class="topbar" />

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
                                </ul>

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


@stop