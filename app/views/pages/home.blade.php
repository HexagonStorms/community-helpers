@extends('layouts.master')

@section('content')

<div class="jumbotron home-search" style="">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <br />
                <p class="main_description">Search thousands of stores, brands, products and user classifieds all in one place</p>

                <br /><br />
                <div class="row">

                    <div class="col-sm-8 col-sm-offset-2" style="text-align: center">
                        <div class="row">

                            <div class="col-sm-10 col-sm-offset-1">
                                <div class="input-group">
                                    <span class="input-group-addon input-group-addon-text">Find me a</span>

                                    <input type="text" class="form-control col-sm-3" placeholder="e.g. BMW, 2 bed flat, sofa ">
                                    <div class=" input-group-addon hidden-xs">
                                        <div class="btn-group" >
                                            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
                                                All categories <span class="caret"></span>
                                            </button>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Cars, Vans & Motorbikes</a></li>
                                                <li><a href="#">Community</a></li>
                                                <li><a href="#">Flats & Houses</a></li>
                                                <li><a href="#">For Sale</a></li>
                                                <li><a href="#">Jobs</a></li>
                                                <li><a href="#">Pets</a></li>
                                                <li><a href="#">Services</a></li>
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
                        <a href="listings" class="btn btn-primary search-btn">Search</a>
                    </div>
                </div>                
                <br />
                <br />
                <div class="row">
                    <div class="col-sm-12" style="text-align: center">

                        <div id="quotes">
                            <div class="text-item" style="display: none;">Boom! <strong>Vince</strong> just sold a <strong>Washing Machine</strong> in <strong>Sheffield</strong></div>
                            <div class="text-item" style="display: none;"><strong>Julia</strong> is availiable for <strong>home cleaning</strong> in <strong>Manchester</strong></div>
                            <div class="text-item" style="display: none;">Success! <strong>Paul</strong> has just sold a <strong>Mercedes-Benz E-class</strong> in <strong>Liverpool</strong></div>
                            <div class="text-item" style="display: none;">Hey, <strong>Uber</strong> has a <strong>job opening</strong> in <strong>London</strong></div>
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
                    <h2><span>Directory listings</span></h2>
                </div>
            </div>

            <div class="row directory">


                <div class="col-xs-12">
                                        <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Houses and flats</h4>
                                <p><a href="listings" >Cars</a>, <a href="listings" >Car Parts</a>, <a href="listings" >Campervans</a>, <a href="listings">Motobikes</a>, <a href="listings" >Scooters</a>, <a href="listings" >Vans</a>, <a href="listings" >Trucks</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Car and vehicles</h4>
                                <p><a href="listings" >Cars</a>, <a href="listings" >Car Parts</a>, <a href="listings" >Campervans</a>, <a href="listings">Motobikes</a>, <a href="listings" >Scooters</a>, <a href="listings" >Vans</a>, <a href="listings" >Trucks</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Shopping</h4>
                                <p><a href="listings" >Cars</a>, <a href="listings" >Car Parts</a>, <a href="listings" >Campervans</a>, <a href="listings">Motobikes</a>, <a href="listings" >Scooters</a>, <a href="listings" >Vans</a>, <a href="listings" >Trucks</a></p>
                            </div>
                        </div>
                    </div>
                                        <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Houses and flats</h4>
                                <p><a href="listings" >Cars</a>, <a href="listings" >Car Parts</a>, <a href="listings" >Campervans</a>, <a href="listings">Motobikes</a>, <a href="listings" >Scooters</a>, <a href="listings" >Vans</a>, <a href="listings" >Trucks</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Car and vehicles</h4>
                                <p><a href="listings" >Cars</a>, <a href="listings" >Car Parts</a>, <a href="listings" >Campervans</a>, <a href="listings">Motobikes</a>, <a href="listings" >Scooters</a>, <a href="listings" >Vans</a>, <a href="listings" >Trucks</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Shopping</h4>
                                <p><a href="listings" >Cars</a>, <a href="listings" >Car Parts</a>, <a href="listings" >Campervans</a>, <a href="listings">Motobikes</a>, <a href="listings" >Scooters</a>, <a href="listings" >Vans</a>, <a href="listings" >Trucks</a></p>
                            </div>
                        </div>
                    </div>
                                        <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Houses and flats</h4>
                                <p><a href="listings" >Cars</a>, <a href="listings" >Car Parts</a>, <a href="listings" >Campervans</a>, <a href="listings">Motobikes</a>, <a href="listings" >Scooters</a>, <a href="listings" >Vans</a>, <a href="listings" >Trucks</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-truck"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Car and vehicles</h4>
                                <p><a href="listings" >Cars</a>, <a href="listings" >Car Parts</a>, <a href="listings" >Campervans</a>, <a href="listings">Motobikes</a>, <a href="listings" >Scooters</a>, <a href="listings" >Vans</a>, <a href="listings" >Trucks</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="directory-block col-sm-4 col-xs-6">
                        <div class="row">
                            <div class="col-sm-3">
                                <i class="fa fa-shopping-cart"></i>
                            </div>
                            <div class="col-sm-9">
                                <h4>Shopping</h4>
                                <p><a href="listings" >Cars</a>, <a href="listings" >Car Parts</a>, <a href="listings" >Campervans</a>, <a href="listings">Motobikes</a>, <a href="listings" >Scooters</a>, <a href="listings" >Vans</a>, <a href="listings" >Trucks</a></p>
                            </div>
                        </div>
                    </div>
                                    </div>



            </div>

            


            <div class="row directory-counties hidden-xs">
                <div class="col-sm-12">
                    <ul class="nav nav-tabs" id="myTab">
                        <li class=""><a data-toggle="tab"  href="#popular">Popular cities</a></li>
                                                <li class=""><a data-toggle="tab"  href="#EN">England</a></li>
                                                <li class=""><a data-toggle="tab"  href="#WA">Wales</a></li>
                                                <li class=""><a data-toggle="tab"  href="#SC">Scotland</a></li>
                                                <li class="hidden-md"><a data-toggle="tab"  href="#NI">Northern Ireland</a></li>
                                                <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" id="myTabDrop1" href="#">Other countries <b class="caret"></b></a>
                            <ul aria-labelledby="myTabDrop1" role="menu" class="dropdown-menu">
                                <li><a href="listings">USA</a></li>
                                <li><a href="listings">France</a></li>
                                <li><a href="listings">Germany</a></li>
                                <li><a href="listings">Spain and Portugal</a></li>
                                <li><a href="listings">Switzerland</a></li>
                                <li><a href="listings">Other Europe</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="tab-content " id="myTabContent">
                                                <div id="popular" class="tab-pane fade counties-pane active">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings">London</a><br />
                                                                                <a href="listings">Edinburgh</a><br />
                                                                                <a href="listings">Manchester</a><br />
                                                                                <a href="listings">Birmingham</a><br />
                                                                                <a href="listings">Glasgow</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings">Liverpool</a><br />
                                                                                <a href="listings">Bristol</a><br />
                                                                                <a href="listings">Oxford</a><br />
                                                                                <a href="listings">Cambridge</a><br />
                                                                                <a href="listings">Cardiff</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings">Brighton</a><br />
                                                                                <a href="listings">Newcastle-upon-Tyne</a><br />
                                                                                <a href="listings">Leeds</a><br />
                                                                                <a href="listings">York</a><br />
                                                                                <a href="listings">Inverness</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings">Bath</a><br />
                                                                                <a href="listings">Nottingham</a><br />
                                                                                <a href="listings">Reading</a><br />
                                                                                <a href="listings">Aberdeen</a><br />
                                                                                <a href="listings">Chester</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                    </div>


                                                                        <div id="EN" class="tab-pane counties-pane">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Avon</a><br />
                                                                                <a href="listings" >Bedfordshire</a><br />
                                                                                <a href="listings" >Berkshire</a><br />
                                                                                <a href="listings" >Buckinghamshire</a><br />
                                                                                <a href="listings" >Cambridgeshire</a><br />
                                                                                <a href="listings" >Cheshire</a><br />
                                                                                <a href="listings" >Cleveland</a><br />
                                                                                <a href="listings" >Cornwall</a><br />
                                                                                <a href="listings" >Cumbria</a><br />
                                                                                <a href="listings" >Derbyshire</a><br />
                                                                                <a href="listings" >Devon</a><br />
                                                                                <a href="listings" >Dorset</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Durham</a><br />
                                                                                <a href="listings" >East Sussex</a><br />
                                                                                <a href="listings" >Essex</a><br />
                                                                                <a href="listings" >Gloucestershire</a><br />
                                                                                <a href="listings" >Hampshire</a><br />
                                                                                <a href="listings" >Herefordshire</a><br />
                                                                                <a href="listings" >Hertfordshire</a><br />
                                                                                <a href="listings" >Isle of Wight</a><br />
                                                                                <a href="listings" >Kent</a><br />
                                                                                <a href="listings" >Lancashire</a><br />
                                                                                <a href="listings" >Leicestershire</a><br />
                                                                                <a href="listings" >Lincolnshire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >London</a><br />
                                                                                <a href="listings" >Merseyside</a><br />
                                                                                <a href="listings" >Middlesex</a><br />
                                                                                <a href="listings" >Norfolk</a><br />
                                                                                <a href="listings" >Northamptonshire</a><br />
                                                                                <a href="listings" >Northumberland</a><br />
                                                                                <a href="listings" >North Humberside</a><br />
                                                                                <a href="listings" >North Yorkshire</a><br />
                                                                                <a href="listings" >Nottinghamshire</a><br />
                                                                                <a href="listings" >Oxfordshire</a><br />
                                                                                <a href="listings" >Rutland</a><br />
                                                                                <a href="listings" >Shropshire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Somerset</a><br />
                                                                                <a href="listings" >South Humberside</a><br />
                                                                                <a href="listings" >South Yorkshire</a><br />
                                                                                <a href="listings" >Staffordshire</a><br />
                                                                                <a href="listings" >Suffolk</a><br />
                                                                                <a href="listings" >Surrey</a><br />
                                                                                <a href="listings" >Tyne and Wear</a><br />
                                                                                <a href="listings" >Warwickshire</a><br />
                                                                                <a href="listings" >West Midlands</a><br />
                                                                                <a href="listings" >West Sussex</a><br />
                                                                                <a href="listings" >West Yorkshire</a><br />
                                                                                <a href="listings" >Worcestershire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                    </div>
                                                                        <div id="WA" class="tab-pane counties-pane">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Clwyd</a><br />
                                                                                <a href="listings" >Dyfed</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Gwent</a><br />
                                                                                <a href="listings" >Gwynedd</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Mid Glamorgan</a><br />
                                                                                <a href="listings" >Powys</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >South Glamorgan</a><br />
                                                                                <a href="listings" >West Glamorgan</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                    </div>
                                                                        <div id="SC" class="tab-pane counties-pane">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Aberdeenshire</a><br />
                                                                                <a href="listings" >Angus</a><br />
                                                                                <a href="listings" >Argyll</a><br />
                                                                                <a href="listings" >Ayrshire</a><br />
                                                                                <a href="listings" >Banffshire</a><br />
                                                                                <a href="listings" >Berwickshire</a><br />
                                                                                <a href="listings" >Bute</a><br />
                                                                                <a href="listings" >Caithness</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Clackmannanshire</a><br />
                                                                                <a href="listings" >Dumfriesshire</a><br />
                                                                                <a href="listings" >Dunbartonshire</a><br />
                                                                                <a href="listings" >East Lothian</a><br />
                                                                                <a href="listings" >Fife</a><br />
                                                                                <a href="listings" >Inverness-shire</a><br />
                                                                                <a href="listings" >Kincardineshire</a><br />
                                                                                <a href="listings" >Kinross-shire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Kirkcudbrightshire</a><br />
                                                                                <a href="listings" >Lanarkshire</a><br />
                                                                                <a href="listings" >Midlothian</a><br />
                                                                                <a href="listings" >Moray</a><br />
                                                                                <a href="listings" >Nairnshire</a><br />
                                                                                <a href="listings" >Orkney</a><br />
                                                                                <a href="listings" >Peeblesshire</a><br />
                                                                                <a href="listings" >Perthshire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Renfrewshire</a><br />
                                                                                <a href="listings" >Ross-shire</a><br />
                                                                                <a href="listings" >Roxburghshire</a><br />
                                                                                <a href="listings" >Selkirkshire</a><br />
                                                                                <a href="listings" >Shetland</a><br />
                                                                                <a href="listings" >Stirlingshire</a><br />
                                                                                <a href="listings" >Sutherland</a><br />
                                                                                <a href="listings" >West Lothian</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Wigtownshire</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                    </div>
                                                                        <div id="NI" class="tab-pane counties-pane">
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Antrim</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Armagh</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Down</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Fermanagh</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Londonderry</a><br />
                                                                            </div>
                                </div>

                            </div>
                                                        <div class="col-sm-3">

                                <div class="row directory-block">
                                    <div class="col-sm-12">
                                                                                <a href="listings" >Tyrone</a><br />
                                                                            </div>
                                </div>

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
                        <div class="panel-heading">Quick guide</div>

                        <ul class="list-group">
                            <li class="list-group-item"><a href="typography">Our tips to stay safe</a></li>
                            <li class="list-group-item"><a href="typography">How to buy guide</a></li>
                            <li class="list-group-item"><a href="typography">How to sell guide</a></li>
                            <li class="list-group-item"><a href="typography">Help and contact us</a></li>
                            <li class="list-group-item"><a href="typography">Frequently asked questions</a></li>
                        </ul>



                    </div>
                </div>

                <div class="col-xs-12 col-sm-5 col-md-12  col-lg-11 pull-right" >


                    <div class="panel panel-default">


                        <div class="panel-body" style="height: 102px; display: block;">

                            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="265" data-layout="standard" data-action="like" data-show-faces="false" data-share="false" style="display: block; height: 30px;"></div>
                            <br />
                            <!-- Place this tag where you want the +1 button to render. -->
                            <div class="g-plusone" data-annotation="inline" data-width="300" style="display: block; height: 30px;"></div>

                            <!-- Place this tag after the last +1 button tag. -->
                            <script type="text/javascript">
                                (function() {
                                    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                    po.src = 'https://apis.google.com/js/platform.js';
                                    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                                })();
                            </script>
                        </div>
                        <div class="panel-footer">
                            <a href="https://twitter.com/twitterapi" class="twitter-follow-button" data-dnt="true">Follow @twitterapi</a>
                            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                        </div>
                    </div>

                    <p class="main_slogan" style="margin: 28px 0">Currently listing 355,785 classified ads in the United Kingdom.</p>

                </div>



                <div class="col-xs-12 col-sm-4 col-md-12  col-lg-11 pull-right" >


                    <div class="panel panel-default">
                        <div class="panel-heading">Premium listings</div>
                        <div class="panel-body">
                            <div class="featured-gallery">

                                <div class="row">


                                    <div class="col-sm-6 col-xs-4 featured-thumbnail"  data-toggle="tooltip" data-placement="top" title="Programmer job availiable at Uber in London">
                                        <a href="details" class="">
                                            <img alt="" src="css/images/logos/uberlogo_large_verge_medium_landscape.png" style="width: 100%" >
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-4 featured-thumbnail"  data-toggle="tooltip" data-placement="top"  title="Porsche Boxster S, 2.9 2dr reg Apr 2007 ">
                                        <a href="details" class="">
                                            <img alt="" src="css/images/logos/car-78738_150.jpg"  />
                                        </a>
                                    </div>



                                    <div class="col-sm-6 col-xs-4 featured-thumbnail" data-toggle="tooltip" data-placement="top"  title="Please find my lost cat">
                                        <a href="details" class="" >
                                            <img alt="" src="css/images/logos/cats-q-c-120-80-4.jpg"  />
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-4 featured-thumbnail" data-toggle="tooltip" data-placement="top"  title="Mini copper looking for a quick sell !! - London - £2,485">
                                        <a href="details" class="" >
                                            <img alt="" src="css/images/logos/transport-q-c-120-80-8.jpg"  />
                                        </a>
                                    </div>



                                    <div class="col-sm-6 col-xs-4 featured-thumbnail" data-toggle="tooltip" data-placement="top"  title="Old MP3 player for sale">
                                        <a href="details" class="" >
                                            <img alt="" src="css/images/logos/technics-q-c-120-80-10.jpg"  />
                                        </a>
                                    </div>
                                    <div class="col-sm-6 col-xs-4 featured-thumbnail" data-toggle="tooltip" data-placement="top" title="Designer job availiable at Uber in London">
                                        <a href="details" class="" >
                                            <img alt="" src="css/images/logos/uberlogo_large_verge_medium_landscape.png"  />
                                        </a>
                                    </div>




                                </div>



                            </div>



                        </div>
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