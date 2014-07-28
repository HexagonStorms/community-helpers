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
                    <p>We prides ourselves in customer service excellence. Our customer service representatives are available Monday–Friday from 7 a.m.–7 p.m. CST at <strong>800-GET-HELP</strong> or via direct support at <strong>support@community-help.com</strong></p>

                </div>




            </div><!-- /row -->

        </div>

        <div class="col-md-3 col-xs-12 pull-right">

            <h2>Our Headquarters</h2>
            10th Floor, Suite 101
            112 W Pecan St<br />
            San Antonio, TX 78205<br />
            <br />
            <br />
            US: +210-430-1309<br />
            UK: +44-430-1309<br />
            <br />
            <a href="mailto:info@community-help.com">info@community-help.com</a><br />
            <a href="mailto:info@community-help.com">support@community-help.com</a><br />			
            <br /><br />
            <h2>Business Hours</h2>
            <strong>Weekday:</strong> 8am to 6pm<br />
            <strong>Sunday:</strong> closed<br />
        </div>
    </div>
</div>

@stop