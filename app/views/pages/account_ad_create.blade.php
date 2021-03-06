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
            <form class="form-vertical" action="">

                <div class="panel panel-default">
                    <div class="panel-heading">Choose category</div>
                    <div class="panel-body">


                        <div class="row">  
                            <div class="col-sm-12 "  >

                                <div class="form-group">

                                    <div class="row">
                                        <div class="col-sm-2" style="margin-top: 10px;">
                                            <label>Category</label>

                                        </div>
                                        <div class="col-sm-6">

                                            <select id="category" class="form-control " name="category">
                                                <option value="">Choose a category</option>
                                                <optgroup label="Vehicles">
                                                    <option value="8">&nbsp;&nbsp;&nbsp;Cars</option>

                                                    <option value="9">&nbsp;&nbsp;&nbsp;Motorcycles</option>

                                                    <option value="10">&nbsp;&nbsp;&nbsp;Boats</option>

                                                    <option value="11">&nbsp;&nbsp;&nbsp;RVs</option>

                                                    <option value="12">&nbsp;&nbsp;&nbsp;Commercial Trucks</option>

                                                    <option value="13">&nbsp;&nbsp;&nbsp;Aircrafts</option>

                                                    <option value="14">&nbsp;&nbsp;&nbsp;Parts &amp; Accessories</option>

                                                    <option value="15">&nbsp;&nbsp;&nbsp;Everything Else</option>
                                                </optgroup>

                                                <optgroup label="Real Estate">
                                                    <option value="16">&nbsp;&nbsp;&nbsp;Homes For Sale</option>

                                                    <option value="17">&nbsp;&nbsp;&nbsp;Homes for Rent</option>

                                                    <option value="18">&nbsp;&nbsp;&nbsp;Vacation Rentals</option>

                                                    <option value="19">&nbsp;&nbsp;&nbsp;Office &amp; Commercial</option>

                                                    <option value="20">&nbsp;&nbsp;&nbsp;Housing Exchange</option>

                                                    <option value="21">&nbsp;&nbsp;&nbsp;Housing Wanted</option>

                                                    <option value="22">&nbsp;&nbsp;&nbsp;Rooms &amp; Roommates</option>

                                                    <option value="23">&nbsp;&nbsp;&nbsp;Land</option>

                                                    <option value="24">&nbsp;&nbsp;&nbsp;Agents &amp; Services</option>
                                                </optgroup>

                                                <optgroup label="Pets">
                                                    <option value="25">&nbsp;&nbsp;&nbsp;Dogs</option>

                                                    <option value="26">&nbsp;&nbsp;&nbsp;Cats</option>

                                                    <option value="27">&nbsp;&nbsp;&nbsp;Horses</option>

                                                    <option value="28">&nbsp;&nbsp;&nbsp;Birds</option>

                                                    <option value="29">&nbsp;&nbsp;&nbsp;Fish</option>

                                                    <option value="30">&nbsp;&nbsp;&nbsp;Snakes</option>

                                                    <option value="31">&nbsp;&nbsp;&nbsp;Reptiles</option>

                                                    <option value="32">&nbsp;&nbsp;&nbsp;Spiders &amp; Insects</option>

                                                    <option value="33">&nbsp;&nbsp;&nbsp;Other Pets</option>

                                                    <option value="34">&nbsp;&nbsp;&nbsp;Pet Supplies</option>
                                                </optgroup>

                                                <optgroup label="Services">
                                                    <option value="78">&nbsp;&nbsp;&nbsp;Auto</option>

                                                    <option value="79">&nbsp;&nbsp;&nbsp;Child &amp; Elder Care</option>

                                                    <option value="80">&nbsp;&nbsp;&nbsp;Cleaning Services</option>

                                                    <option value="81">&nbsp;&nbsp;&nbsp;Computer Services</option>

                                                    <option value="82">&nbsp;&nbsp;&nbsp;Creative</option>

                                                    <option value="83">&nbsp;&nbsp;&nbsp;Everything Else</option>

                                                    <option value="84">&nbsp;&nbsp;&nbsp;Financial</option>

                                                    <option value="85">&nbsp;&nbsp;&nbsp;Food &amp; Restaurants</option>

                                                    <option value="86">&nbsp;&nbsp;&nbsp;Health &amp; Beauty</option>

                                                    <option value="87">&nbsp;&nbsp;&nbsp;Household</option>

                                                    <option value="88">&nbsp;&nbsp;&nbsp;Landscaping</option>

                                                    <option value="89">&nbsp;&nbsp;&nbsp;Lessons</option>

                                                    <option value="90">&nbsp;&nbsp;&nbsp;Moving/Removals</option>

                                                    <option value="91">&nbsp;&nbsp;&nbsp;Translation</option>
                                                </optgroup>

                                                <optgroup label="Merchandise">
                                                    <option value="63">&nbsp;&nbsp;&nbsp;Antiques</option>

                                                    <option value="64">&nbsp;&nbsp;&nbsp;Art</option>

                                                    <option value="65">&nbsp;&nbsp;&nbsp;Books &amp; Magazines</option>

                                                    <option value="66">&nbsp;&nbsp;&nbsp;Cell Phones</option>

                                                    <option value="67">&nbsp;&nbsp;&nbsp;Clothing &amp; Accessories</option>

                                                    <option value="68">&nbsp;&nbsp;&nbsp;Computers</option>

                                                    <option value="69">&nbsp;&nbsp;&nbsp;DVD &amp; Movies</option>

                                                    <option value="70">&nbsp;&nbsp;&nbsp;Electronics</option>

                                                    <option value="71">&nbsp;&nbsp;&nbsp;Everything Else</option>

                                                    <option value="72">&nbsp;&nbsp;&nbsp;Furniture</option>

                                                    <option value="73">&nbsp;&nbsp;&nbsp;Health &amp; Beauty</option>

                                                    <option value="74">&nbsp;&nbsp;&nbsp;Home &amp; Garden</option>

                                                    <option value="75">&nbsp;&nbsp;&nbsp;Musical Instruments</option>

                                                    <option value="76">&nbsp;&nbsp;&nbsp;Photographic</option>

                                                    <option value="77">&nbsp;&nbsp;&nbsp;Sports Equipment</option>
                                                </optgroup>

                                                <optgroup label="Jobs">
                                                    <option value="35">&nbsp;&nbsp;&nbsp;Accounting &amp; Finance</option>

                                                    <option value="36">&nbsp;&nbsp;&nbsp;Advertising</option>

                                                    <option value="37">&nbsp;&nbsp;&nbsp;Art &amp; Design &amp; Media</option>

                                                    <option value="38">&nbsp;&nbsp;&nbsp;Business &amp; Management</option>

                                                    <option value="39">&nbsp;&nbsp;&nbsp;Cleaning</option>

                                                    <option value="40">&nbsp;&nbsp;&nbsp;Construction</option>

                                                    <option value="41">&nbsp;&nbsp;&nbsp;Customer Service</option>

                                                    <option value="42">&nbsp;&nbsp;&nbsp;Education</option>

                                                    <option value="43">&nbsp;&nbsp;&nbsp;Everything Else</option>

                                                    <option value="44">&nbsp;&nbsp;&nbsp;Fashion</option>

                                                    <option value="45">&nbsp;&nbsp;&nbsp;Healthcare</option>

                                                    <option value="46">&nbsp;&nbsp;&nbsp;Internet Engineering</option>

                                                    <option value="47">&nbsp;&nbsp;&nbsp;Legal</option>

                                                    <option value="48">&nbsp;&nbsp;&nbsp;Manual Labor</option>

                                                    <option value="49">&nbsp;&nbsp;&nbsp;Marketing</option>

                                                    <option value="50">&nbsp;&nbsp;&nbsp;Real Estate</option>

                                                    <option value="51">&nbsp;&nbsp;&nbsp;Retail</option>

                                                    <option value="52">&nbsp;&nbsp;&nbsp;Sales</option>

                                                    <option value="53">&nbsp;&nbsp;&nbsp;Technology</option>

                                                    <option value="54">&nbsp;&nbsp;&nbsp;Telecommunications</option>

                                                    <option value="55">&nbsp;&nbsp;&nbsp;Transportation &amp; Travel</option>

                                                    <option value="56">&nbsp;&nbsp;&nbsp;Work at Home</option>
                                                </optgroup>

                                                <optgroup label="Personals">
                                                    <option value="57">&nbsp;&nbsp;&nbsp;Just Friends</option>

                                                    <option value="58">&nbsp;&nbsp;&nbsp;Men Seeking Men</option>

                                                    <option value="59">&nbsp;&nbsp;&nbsp;Men Seeking Women</option>

                                                    <option value="60">&nbsp;&nbsp;&nbsp;Women Seeking Men</option>

                                                    <option value="61">&nbsp;&nbsp;&nbsp;Women Seeking Women</option>

                                                    <option value="62">&nbsp;&nbsp;&nbsp;Casual Encounters</option>
                                                </optgroup>

                                            </select>
                                        </div>

                                    </div>
                                </div>			
                            </div>			
                        </div>			
                    </div>			
                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">Ad details</div>
                    <div class="panel-body">




                        <div class="form-group">
                            <div class="row">

                                <div class="col-sm-12">
                                    <label>Title </label>
                                    <input type="text" class="form-control " >
                                </div>
                                <div class="col-sm-12"><br />
                                    <label>Description </label>
                                    <textarea class="form-control col-sm-8 expand" rows="6" style="width: 99%"></textarea>
                                </div>

                                <div class="col-sm-12"><br />
                                    <label>Keywords</label>
                                    <input type="text" class="form-control " >
                                </div>		

                            </div>

                        </div>




                    </div>			
                </div>			

                <div class="panel panel-default">
                    <div class="panel-heading">Ad information</div>
                    <div class="panel-body">

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label>Region</label>
                                    <input type="text" class="form-control "  >
                                </div>									     	
                                <div class="col-sm-6">
                                    <label>City</label>
                                    <input type="text" class="form-control "  >
                                </div>
                                <div class="col-sm-6"><br />
                                    <label>Country</label>
                                    <input type="text" class="form-control "  >
                                </div>
                                <div class="col-sm-6"><br />
                                    <label>Post Code</label>
                                    <input type="text" class="form-control "  >
                                </div>


                            </div>
                            <br />
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="optionsRadios" id="optionsRadios2" value="option2">
                                            Don't show my address details publicly
                                        </label>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>


                <div class="panel panel-default">
                    <div class="panel-heading">Add photos</div>
                    <div class="panel-body">
                        <div id="my-dropzone" action="upload.php" class="dropzone"></div>
                        <br /><p><small>* please note that the displayed images are cropped/resized only for display purposes</small></p>
                    </div>
                </div>

                <div class="panel panel-default">
                    <div class="panel-heading">Your price</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control "  placeholder="How much do you want it to be listed for?">
                                </div>
                                <div class="col-sm-6">
                                    <p>You can adjust your price anytime you like, even after your listing is published.</p>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>	

                <div class="panel panel-default">
                    <div class="panel-heading">Complete ad</div>
                    <div class="panel-body">

                        <div class="checkbox">
                            <label>
                                <input type="checkbox"> I agree to the terms and conditions and regulations.
                            </label>
                        </div>

                        <br />
                        <button type="submit" class="btn btn-default hidden-xs">Save draft</button>
                        <button type="submit" class="btn btn-default hidden-xs">Preview ad</button>
                        <a href="account_credits" class="btn btn-primary pull-right"><i class="icon-ok"></i>  Publish ad</a>
                        <br /><p class=" hidden-xs" style="text-align: right"><small>* payment options will be<br /> shown on the next screen</small></p>
                    </div>




                </div>

            </div>




        </div>
    </div>
</div>
</form>
<br />

@stop