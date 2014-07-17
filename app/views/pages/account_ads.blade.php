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
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-sm-9">
            <div class="panel panel-default">
                <div class="panel-heading">Manage adverts</div>
                <div class="panel-body">
                    <form class="form-vertical">
                        <fieldset>

                            <div class="row">  
                                <div class="col-sm-12" >

                                    <table class="table edit-listings">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th></th>
                                                <th>Date&nbsp;posted</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td><img src="css/images/listings/1.jpg" style="width:75px" /></td>
                                                <td class="main-td">


                                                    <a href="account_ad_create">BMW 525D SE TOURING SILVER</a><a href="#" class="no-views">(11 views)</a><br />

                                                    <a class="edit-ad" href="account_ad_create">Edit ad</a>
                                                    <a class="extend-ad" href="#" data-toggle="tooltip" title="Extend ad by 30 days">Extend for 30 days</a>
                                                    <a class="remove-ad" href="#">Remove this ad</a>

                                                    <p >Alarm, Anti-Lock Brakes (ABS), Driver Airbag, Electronic Stability Program (ESP), Immobiliser, Passenger Airbag, Rear seat belts, Side Airbags Alloy Wheels, Catalytic...</p>

                                                </td>
                                                <td>1 day ago</td>
                                            </tr>


                                            <tr>
                                                <td><img src="css/images/listings/2.jpg" style="width:75px" /></td>
                                                <td><a href="account_ad_create">SEAT Leon 1.6 TDI CR S 5dr (2010)</a><a href="#" class="no-views">(22 views)</a><br />

                                                    <a class="edit-ad" href="#">Edit ad</a>
                                                    <a class="extend-ad" href="#" data-toggle="tooltip" title="Extend ad by 30 days">Extend for 30 days</a>
                                                    <a class="remove-ad" href="#">Remove this ad</a>
                                                    <p >Alarm, Anti-Lock Brakes (ABS), Driver Airbag, Electronic Stability Program (ESP), Immobiliser, Passenger Airbag, Rear seat belts, Side Airbags Alloy Wheels, Catalytic...</p>

                                                </td>
                                                <td>3 days ago</td>
                                            </tr>


                                            <tr>
                                                <td><img src="css/images/listings/3.jpg" style="width:75px" /></td>
                                                <td><a href="account_ad_create">03 PLATE MINI COOPER. *12 MONTHS MOT* STUNNING</a><a href="#" class="no-views">(57 views)</a><br />

                                                    <a class="edit-ad" href="#">Edit ad</a>
                                                    <a class="extend-ad" href="#" data-toggle="tooltip" title="Extend ad by 30 days">Extend for 30 days</a>
                                                    <a class="remove-ad" href="#">Remove this ad</a>
                                                    <p >Alarm, Anti-Lock Brakes (ABS), Driver Airbag, Electronic Stability Program (ESP), Immobiliser, Passenger Airbag, Rear seat belts, Side Airbags Alloy Wheels, Catalytic...</p>
                                                </td>
                                                <td>4 days ago</td>
                                            </tr>


                                            <tr>
                                                <td><img src="css/images/listings/4.jpg" style="width:75px" /></td>
                                                <td><a href="account_ad_create">Green renault clio grande</a><a href="#" class="no-views">(98 views)</a><br />

                                                    <a class="edit-ad" href="#">Edit ad</a>
                                                    <a class="extend-ad" href="#" data-toggle="tooltip" title="Extend ad by 30 days">Extend for 30 days</a>
                                                    <a class="remove-ad" href="#">Remove this ad</a>
                                                    <p >Alarm, Anti-Lock Brakes (ABS), Driver Airbag, Electronic Stability Program (ESP), Immobiliser, Passenger Airbag, Rear seat belts, Side Airbags Alloy Wheels, Catalytic...</p>
                                                </td>
                                                <td>8 days ago<br />(<a href="#"><i class="fa fa-arrow-up"></i> bump</a>)</td>
                                            </tr>


                                            <tr>
                                                <td><img src="css/images/listings/5.jpg" style="width:75px" /></td>
                                                <td><a href="account_ad_create">2008 Scuderia Spider 16M</a><a href="#" class="no-views">(62 views)</a><br />

                                                    <a class="edit-ad" href="#">Edit ad</a>
                                                    <a class="extend-ad" href="#" data-toggle="tooltip" title="Extend ad by 30 days">Extend for 30 days</a>
                                                    <a class="remove-ad" href="#">Remove this ad</a>
                                                    <p >Alarm, Anti-Lock Brakes (ABS), Driver Airbag, Electronic Stability Program (ESP), Immobiliser, Passenger Airbag, Rear seat belts, Side Airbags Alloy Wheels, Catalytic...</p>
                                                </td>
                                                <td>9 days ago<br />(<a href="#"><i class="fa fa-arrow-up"></i> bump</a>)</td>
                                            </tr>


                                        </tbody>
                                    </table>
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

@stop