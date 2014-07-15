@extends('layouts.master')

@section('content')

<div class="jumbotron home-tron-search well ">
                <div class="container">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="home-tron-search-inner">

                                <div class="row">

                                    <div class="col-sm-8 col-xs-9" style="text-align: center">
                                        <div class="row">

                                            <div class="col-sm-12 col-sm-offset-1">
                                                <div class="input-group">
                                                    <span class="input-group-addon input-group-addon-text hidden-xs">Find me a</span>

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


                                    <div class="col-sm-4 col-xs-3" style="text-align: center">
                                        <div class="row">
                                            <div class="col-sm-11 pull-right">
                                                <button class="btn btn-primary search-btn"><i class="icon-search"></i>&nbsp;&nbsp;&nbsp;&nbsp;Search</button>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

            <div class="container">

    <br />
    <div class="row">
        <div class="col-sm-12">
            <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li><a href="#">Vehicles</a></li>
                <li class="active">Cars</li>
                <li class="active">4,699 results for <strong>"Cars"</strong> in London</li>
            </ol>
        </div>
    </div>



    <div class="row">
        <div class="col-sm-4  hidden-xs">
            <div class="sidebar ">		
    <div class="row ">

        <div class="col-sm-11 hidden-xs">	
            <a class="btn btn-primary pull-right" id="regionsBtn" style="width: 100%">Greater London  <span class="caret"></span></a>
        </div>   
        
        <div data-backdrop="" id="regionsModal" class="bs-countries-modal-sm  hidden-xs" tabindex="-1" role="dialog" aria-labelledby="regionsModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="directory-counties">
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs" id="myTab">
                                                                <li class=""><a data-toggle="tab"  href="#EN">England</a></li>
                                                                <li class=""><a data-toggle="tab"  href="#WA">Wales</a></li>
                                                                <li class=""><a data-toggle="tab"  href="#SC">Scotland</a></li>
                                                                <li class=""><a data-toggle="tab"  href="#NI">Northern Ireland</a></li>
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
            </div>
        </div>

    </div>        
    <br />

    <div class="row ">


        <div class="col-sm-11">

            <div class="panel panel-default">
                <div class="panel-heading">Filters</div>
                <div class="panel-body">
                    <form class="form-inline mini" style="margin-bottom: 0px;">
                        <fieldset>				

                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Make</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class=" form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Mileage</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class="col-sm-10 form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Seller type</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class="col-sm-10 form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Body type</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class="col-sm-10 form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Fuel type</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class="col-sm-10 form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-6">
                                    <label>Age</label>
                                </div>
                                <div class="col-sm-6">
                                    <select class="col-sm-10 form-control ">
                                        <option>Any</option>
                                        <option>Alfa romeo</option>
                                        <option>Houses</option>
                                        <option>Flats/ Apartments</option>
                                        <option>Bungalows</option>
                                        <option>Land</option>
                                        <option>Commercial property</option>
                                        <option>Other</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row filter-row">
                                <div class="col-sm-12">
                                    <label>Price range</label>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="email" class="form-control price-input" placeholder="min" />
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="input-group">
                                        <span class="input-group-addon">$</span>
                                        <input type="email" class="form-control price-input" placeholder="max" />
                                    </div>
                                </div>
                            </div>
                            <div class="row filter-row">
                                <div class="col-sm-12">
                                    <label>Search only:</label>
                                </div>
                                <div class="col-sm-12">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option1" checked>
                                            Urgent ads
                                        </label>
                                    </div><br />

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option2">
                                            Featured ads
                                        </label>
                                    </div><br />

                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" value="option2">
                                            Only ads with pictures
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row filter-row">	

                                <div class="col-sm-2 pull-right" style="margin-top: 10px;">
                                    <button class="btn btn-primary pull-right" type="submit">Update results</button>

                                </div>
                            </div>						


                        </fieldset>
                    </form>
                </div>
            </div>


        </div>
    </div>


    <div class="row ">
        <div class="col-sm-11">
            <div class="panel panel-default">
                <div class="panel-heading">Refine category</div>
                <div class="panel-body">
                    <ul class="nav nav-category">
                        <li>
                            <a class="active" href="category">All categories</a>
                            <ul>
                                <li><a href="listings">Cars, Vans & Motorbikes</a>
                                <ul>
                                    <li><a class="active" href="listings">Cars</a>
                                        <ul>
                                            <li><a class="active" href="listings"><strong>Porsche</strong></a> (66)<a href="#" class="remove-category"><i class="fa fa-times"></i></a></li>
                                        </ul>
                                    </li>

                                </ul>
                                    </li>
                            </ul>
                        </li>
                    </ul>				

                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-sm-11">
            <div class="panel panel-default">
                <div class="panel-heading">Refine category</div>
                <div class="panel-body">

                    <div class="property">
                        <a href="#AC+Cobra">AC Cobra</a>
                    </div>
                    <div class="property">
                        <a href="#Acura">Acura</a>
                    </div>
                    <div class="property">
                        <a href="#Alfa+Romeo">Alfa Romeo</a>
                    </div>
                    <div class="property">
                        <a href="#American+Motors">American Motors</a>
                    </div>
                    <div class="property">
                        <a href="#Aston+Martin">Aston Martin</a>
                    </div>
                    <div class="more" id="more_make_link"><a href="#" class="more link-info" id="more_make">More ...</a></div>
                    <div id="more_make_list" style="display: none;">
                        <div class="property">
                            <a href="#Audi">Audi</a>
                        </div>
                        <div class="property">
                            <a href="#Austin+Healey">Austin Healey</a>
                        </div>
                        <div class="property">
                            <a href="#Avanti">Avanti</a>
                        </div>
                        <div class="property">
                            <a href="#Bentley">Bentley</a>
                        </div>
                        <div class="property">
                            <a href="#Bitter">Bitter</a>
                        </div>
                        <div class="property">
                            <a href="#BMW">BMW</a>
                        </div>
                        <div class="property">
                            <a href="#Bricklin">Bricklin</a>
                        </div>
                        <div class="property">
                            <a href="#British+Leyland">British Leyland</a>
                        </div>
                        <div class="property">
                            <a href="#Bugatti">Bugatti</a>
                        </div>
                        <div class="property">
                            <a href="#Buick">Buick</a>
                        </div>
                        <div class="property">
                            <a href="#Cadillac">Cadillac</a>
                        </div>
                        <div class="property">
                            <a href="#Caterham">Caterham</a>
                        </div>
                        <div class="property">
                            <a href="#Chevrolet">Chevrolet</a>
                        </div>
                        <div class="property">
                            <a href="#Chrysler">Chrysler</a>
                        </div>
                        <div class="property">
                            <a href="#Citroen">Citroen</a>
                        </div>
                        <div class="property">
                            <a href="#Daewoo">Daewoo</a>
                        </div>
                        <div class="property">
                            <a href="#Daihatsu">Daihatsu</a>
                        </div>
                        <div class="property">
                            <a href="#Dodge">Dodge</a>
                        </div>
                        <div class="property">
                            <a href="#Eagle">Eagle</a>
                        </div>
                        <div class="property">
                            <a href="#Ferrari">Ferrari</a>
                        </div>
                        <div class="property">
                            <a href="#Fiat">Fiat</a>
                        </div>
                        <div class="property">
                            <a href="#Ford">Ford</a>
                        </div>
                        <div class="property">
                            <a href="#FUJI+HEAVY+IND">FUJI HEAVY IND</a>
                        </div>
                        <div class="property">
                            <a href="#General+Motors">General Motors</a>
                        </div>
                        <div class="property">
                            <a href="#Geo">Geo</a>
                        </div>
                        <div class="property">
                            <a href="#Ginetta">Ginetta</a>
                        </div>
                        <div class="property">
                            <a href="#GMC">GMC</a>
                        </div>
                        <div class="property">
                            <a href="#Holden">Holden</a>
                        </div>
                        <div class="property">
                            <a href="#Honda">Honda</a>
                        </div>
                        <div class="property">
                            <a href="#Hummer">Hummer</a>
                        </div>
                        <div class="property">
                            <a href="#Hyundai">Hyundai</a>
                        </div>
                        <div class="property">
                            <a href="#Infiniti">Infiniti</a>
                        </div>
                        <div class="property">
                            <a href="#Isuzu">Isuzu</a>
                        </div>
                        <div class="property">
                            <a href="#Jaguar">Jaguar</a>
                        </div>
                        <div class="property">
                            <a href="#Jeep">Jeep</a>
                        </div>
                        <div class="property">
                            <a href="#Jensen">Jensen</a>
                        </div>
                        <div class="property">
                            <a href="#Kaiser">Kaiser</a>
                        </div>
                        <div class="property">
                            <a href="#Kia">Kia</a>
                        </div>
                        <div class="property">
                            <a href="#Lada">Lada</a>
                        </div>
                        <div class="property">
                            <a href="#Laforza">Laforza</a>
                        </div>
                        <div class="property">
                            <a href="#Lamborghini">Lamborghini</a>
                        </div>
                        <div class="property">
                            <a href="#Lancia">Lancia</a>
                        </div>
                        <div class="property">
                            <a href="#Land+Rover">Land Rover</a>
                        </div>
                        <div class="property">
                            <a href="#Lexus">Lexus</a>
                        </div>
                        <div class="property">
                            <a href="#Lincoln">Lincoln</a>
                        </div>
                        <div class="property">
                            <a href="#Lotus">Lotus</a>
                        </div>
                        <div class="property">
                            <a href="#Maserati">Maserati</a>
                        </div>
                        <div class="property">
                            <a href="#Matra">Matra</a>
                        </div>
                        <div class="property">
                            <a href="#Maybach">Maybach</a>
                        </div>
                        <div class="property">
                            <a href="#Mazda">Mazda</a>
                        </div>
                        <div class="property">
                            <a href="#Mercedes-Benz">Mercedes-Benz</a>
                        </div>
                        <div class="property">
                            <a href="#Mercury">Mercury</a>
                        </div>
                        <div class="property">
                            <a href="#Merkur">Merkur</a>
                        </div>
                        <div class="property">
                            <a href="#MG">MG</a>
                        </div>
                        <div class="property">
                            <a href="#Mini">Mini</a>
                        </div>
                        <div class="property">
                            <a href="#Mitsubishi">Mitsubishi</a>
                        </div>
                        <div class="property">
                            <a href="#Morgan">Morgan</a>
                        </div>
                        <div class="property">
                            <a href="#Nissan">Nissan</a>
                        </div>
                        <div class="property">
                            <a href="#Oldsmobile">Oldsmobile</a>
                        </div>
                        <div class="property">
                            <a href="#Opel">Opel</a>
                        </div>
                        <div class="property">
                            <a href="#Peugeot">Peugeot</a>
                        </div>
                        <div class="property">
                            <a href="#Plymouth">Plymouth</a>
                        </div>
                        <div class="property">
                            <a href="#Pontiac">Pontiac</a>
                        </div>
                        <div class="property">
                            <a href="#Porsche">Porsche</a>
                        </div>
                        <div class="property">
                            <a href="#Renault">Renault</a>
                        </div>
                        <div class="property">
                            <a href="#Rolls-Royce">Rolls-Royce</a>
                        </div>
                        <div class="property">
                            <a href="#Rover">Rover</a>
                        </div>
                        <div class="property">
                            <a href="#Saab">Saab</a>
                        </div>
                        <div class="property">
                            <a href="#Saturn">Saturn</a>
                        </div>
                        <div class="property">
                            <a href="#Scion">Scion</a>
                        </div>
                        <div class="property">
                            <a href="#Skoda">Skoda</a>
                        </div>
                        <div class="property">
                            <a href="#Smart">Smart</a>
                        </div>
                        <div class="property">
                            <a href="#Studebaker">Studebaker</a>
                        </div>
                        <div class="property">
                            <a href="#Subaru">Subaru</a>
                        </div>
                        <div class="property">
                            <a href="#Suzuki">Suzuki</a>
                        </div>
                        <div class="property">
                            <a href="#Tatra">Tatra</a>
                        </div>
                        <div class="property">
                            <a href="#Toyota">Toyota</a>
                        </div>
                        <div class="property">
                            <a href="#Trabant">Trabant</a>
                        </div>
                        <div class="property">
                            <a href="#TVR">TVR</a>
                        </div>
                        <div class="property">
                            <a href="#Vauxhall">Vauxhall</a>
                        </div>
                        <div class="property">
                            <a href="#Volkswagen">Volkswagen</a>
                        </div>
                        <div class="property">
                            <a href="#Volvo">Volvo</a>
                        </div>
                        <div class="property">
                            <a href="#Yugo">Yugo</a>
                        </div>
                        <div class="more"><a id="less_make" href="#" class="more link-info">Less ...</a></div>
                    </div>			

                </div>
            </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-sm-11">
            <div class="panel panel-default">
                <div class="panel-heading">Location</div>
                <div class="panel-body">
                    <ul class="nav">
                        <li>
                            <a class="active" href="category">Greater London (12)</a>
                            <ul>
                                <li><a href="listings"> - Central London (11)</a></li>
                                <li><a class="active" href="listings"> - East London (1)</a></li>
                                <li><a class="active" href="listings"> - North London (1)</a></li>
                                <li><a class="active" href="listings"> - North London (1)</a></li>
                                <li><a class="active" href="listings"> - North West London  (1)</a></li>
                                <li><a class="active" href="listings"> - South East London  (1)</a></li>
                                <li><a class="active" href="listings"> - South West London  (1)</a></li>
                                <li><a class="active" href="listings"> - West London  (1)</a></li>
                            </ul>
                        </li>
                        <li><a href="category">Brighton (5)</a></li>
                        <li><a href="category">Cambridge (2)</a></li>
                        <li><a href="category">Essex (2)</a></li>
                        <li><a href="category">Guildford (2)</a></li>
                        <li><a href="category">Kent (2)</a></li>
                        <li><a href="category">Luton (2)</a></li>
                        <li><a href="category">Milton Keynes (2)</a></li>
                        <li><a href="category">Oxford (2)</a></li>
                        <li><a href="category">Reading (2)</a></li>
                    </ul>					

                </div>
            </div>
        </div>
    </div>	





</div>        </div>

        <div class="col-sm-8 pull-right listings">




            <div class="row listing-row" style="margin-top: -10px;">
                <div class="pull-left">
                    <strong>Today, Saturday 14th September</strong>
                </div>
                <div class="pull-right">
                    <span style="">Sort by:&nbsp;&nbsp;&nbsp;</span>   
                    <a href="#"  data-toggle="tooltip" data-placement="top" title="Sort from newest to oldest"> Date <i class="fa fa-chevron-up"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Sort from lowest price to highest price"> Price <i class="fa fa-chevron-down"></i></a>
                </div>
            </div>
                        <div class="row premium listing-row">
                										   										
                <div class="ribbon-wrapper-red"><div class="ribbon-red">&nbsp;<span>Featured</span></div></div>
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail " ><img alt="176 * 120" src="css/images/listings/0.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">Renault Megane Convertible, 2002, 1.6 Petrol - <strong>&pound;14,350</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
                        <div class="row premium listing-row">
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail " ><img alt="176 * 120" src="css/images/listings/1.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">Ford Fusion 2 2003 1.4 - <strong>&pound;9,950</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
                        <div class="row premium listing-row">
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail property_sold"  style="position:relative;"><img alt="176 * 120" src="css/images/listings/2.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">Volkswangen golf as 2002 1.6 Automatic 5 Door - <strong>&pound;22,250</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
                        <div class="row  listing-row">
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail " ><img alt="176 * 120" src="css/images/listings/3.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">Renault Clio Dynamique 16v 1.2 51 plate - <strong>&pound;5,000</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
                        <div class="row  listing-row">
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail " ><img alt="176 * 120" src="css/images/listings/4.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">Mercedes-Benz C Class C220 CDI Avantgarde SE - <strong>&pound;15,000</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
                        <div class="row  listing-row">
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail property_sold"  style="position:relative;"><img alt="176 * 120" src="css/images/listings/5.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">Range rover sport hse 2.7 tdv6 2005 - <strong>&pound;10,000</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
                        <div class="row  listing-row">
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail " ><img alt="176 * 120" src="css/images/listings/6.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">Honda CR-V 2.0 i-VTEC Executive PETROL AUTOMATIC 2006 - <strong>&pound;12,950</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
                        <div class="row  listing-row">
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail " ><img alt="176 * 120" src="css/images/listings/7.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">HONDA ACCORD 2.0 I-VTEC ES 4dr Auto Saloon - <strong>&pound;19,950</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
                        <div class="row  listing-row">
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail " ><img alt="176 * 120" src="css/images/listings/8.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">AUDI A6 2.0 TDI S Line TOP SPEC 2008 08 4dr AUTO DSG - <strong>&pound;50,000</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
                        <div class="row  listing-row">
                                <div class="col-sm-2">
                    <a href="details" class="thumbnail " ><img alt="176 * 120" src="css/images/listings/9.jpg"></a>
                </div>

                <div class="col-sm-10">
                    <h3><a class=""  href="details">Ford Mondeo Zetec 2.0 Automatic - <strong>&pound;35,000</strong></a></h3>
                    <p class="muted">Located in <strong>Richmond, London</strong></p>
                    <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p>
                    <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p>
                    <p class="ad-description">
                        <strong>2006</strong> | 

                        <strong>98,000 miles</strong> | 

                        <strong>2,696 cc</strong> | 

                        <strong>Diesel</strong>                
                    </p>
                    <p>
                        <span class="classified_links pull-right">
                            <a class="link-info underline" href="#">Share</a>&nbsp;
                            <a class="link-info underline" href="#">Add to favorites</a>
                            &nbsp;<a class="link-info underline" href="details">Details</a>&nbsp;
                            &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                    </p>
                </div>
            </div>
            
            <div >
                <ul class="pagination pull-right">
                    <li><a href="#">Prev</a></li>
                    <li class="active">
                        <a href="#">1</a>
                    </li>
                    <li ><a href="#">2</a></li>
                    <li ><a href="#">3</a></li>
                    <li ><a href="#">4</a></li>
                    <li ><a href="#">5</a></li>
                    <li class="hidden-xs"><a href="#">6</a></li>
                    <li class="hidden-xs"><a href="#">7</a></li>
                    <li class="hidden-sm hidden-xs"><a href="#">8</a></li>
                    <li class="hidden-sm hidden-xs"><a href="#">9</a></li>
                    <li class="hidden-sm hidden-xs"><a href="#">10</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
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