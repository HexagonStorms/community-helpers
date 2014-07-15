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
            

            <div class="container" id="listings-page">
    <div class="row">
        <div class="col-sm-12 listing-wrapper listings-top listings-bottom">
            <br />
            <br />

            
            <div class="row">

                <div class="col-sm-7">	

                    <ol class="breadcrumb">
                        <li><a href="listings.html" class="link-info"><i class="fa fa-chevron-left"></i> Back to listings</a></li>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Vehicles</a></li>
                        <li class="active">Cars</li>
                    </ol>

                </div>

            </div>

            <div class="row">

                <div class="col-sm-7">	
                    <h1>Porsche Boxster S, 2.9 2dr reg Apr 2007 </h1>
                    <p>Location: London, UK</p>
                </div>


                <div class="col-sm-5">

                    <p class="price">£4,500.00</p>

                </div>

            </div>			<div class="row">

            <div class="col-sm-7">	
                <div class="row">
                    <div class="col-xs-3" style="width: 100px;">	
                        <!-- Place this tag where you want the share button to render. -->
                        <div class="g-plus" data-action="share" data-annotation="bubble"></div>

                        <!-- Place this tag after the last share tag. -->
                        <script type="text/javascript">
                            (function() {
                                var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
                                po.src = 'https://apis.google.com/js/platform.js';
                                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
                            })();
                        </script>
                    </div>


                    <div class="col-xs-3" style="width: 100px;">	
                        <a href="https://twitter.com/share" class="twitter-share-button">Tweet</a>
                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                    </div>

                    <div class="col-xs-3" style="width: 100px;">	
                        <div class="fb-share-button" data-href="http://developers.facebook.com/docs/plugins/" data-type="button_count"></div>
                    </div>
                </div>



            </div>
            </div>
            <hr />


            <div class="row">

                <div class="col-sm-7">
                    <h3>Ad details</h3>



                    <div class="row">




                        <div class="col-xs-6">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th>Make</th>
                                        <td>Porsche</td>
                                    </tr>
                                    <tr>
                                        <th>Model</th>
                                        <td>Boxster</td>
                                    </tr>					          
                                    <tr>
                                        <th>Mileage</th>
                                        <td>80,000 Kms</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="col-xs-6">
                            <table class="table">

                                <tbody>
                                    <tr>
                                        <th>Year</th>
                                        <td>2007</td>
                                    </tr>
                                    <tr>
                                        <th>Type of car:</th>
                                        <td>4-door</td>
                                    </tr>
                                    <tr>
                                        <th>Body type</th>
                                        <td>Estate</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <p>
                        <strong>We are a team of developers creating amazing applications and we are looking for a truly talented developer to join our team. You will be working on a variety of projects with a wide range of our clients.</strong>
                        <br>
                        <br>We build applications and provide services to small and medium sized business in Retail and eCommerce - both mobile and web technologies are used extensively. Please take a look at our website to read about some of the applications that we have built.
                        <br>
                        <br>Intelli BI has been building applications for since 2010 and have built up a loyal and strong customer base, our new developments are seeing us move into new areas and we need someone to help us build out our strengths. 
                        <br>
                        <br>We are looking for a Web Developer who can amaze us with their skills, the list below is not everything but you should be able to demonstrate a good understanding in all areas:
                        <br>
                        <br>PHP
                        <br>HTML
                        <br>CSS
                        <br>JS/JQuery
                        <br>SQL
                        <br>
                        <br>Whilst not a requirement the following areas would be a great advantage to any applicant:
                        <br>
                        <br>Magento
                        <br>Titanium Appcelerator
                        <br>
                        <br>Please send an application detailing why you think you will be a good addition to our team, please include a copy of your CV.
                        <br>
                        <br>We are looking for candidates that stand out from the crowd, we value real experience and attitude over formal qualifications every time! If you think you are the next big thing then get in touch!
                        <br>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pharetra sem vel eros molestie, sit amet ultricies leo suscipit. Vestibulum nulla massa, elementum eu facilisis sed, posuere in elit. Integer condimentum enim dolor, quis rutrum mi posuere eu. In vestibulum, metus ut ultricies lacinia, massa magna venenatis elit, et dapibus leo est vitae felis. Integer eget quam tortor. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>

                    <p>
                        <br><strong>We don't use agencies to hire, so please don't contact us if you are an agency.... </strong>
                    </p>

                    <p>Ad ref: 12345678 | Posted 3 days ago</p>

                    <p>
                        <span class="classified_links ">
                            <a class="link-info" href="#"><i class="fa fa-share"></i> Share</a>&nbsp;
                            <a class="link-info " href="#"><i class="fa fa-star"></i> Add to favorites</a>
                            &nbsp;<a class="link-info " href="#"><i class="fa fa-envelope-o"></i> Contact</a>
                            &nbsp;<a class="link-info fancybox-media" href="http://maps.google.com/?ll=48.85796,2.295231&spn=0.003833,0.010568&t=h&z=17"><i class="fa fa-map-marker"></i> Map</a></span>
                    </p>

                </div>

                <div class="col-sm-5 center zoom-gallery">
                    <div class="row center">

                        <div class="col-sm-12">	
                            <a class="fancybox" rel="group" href="css/images/single/1.jpg">
                                <img id="img_01" alt="" class="raised" src="css/images/single/1.jpg" style="width: 100%" />
                            </a>
                            <br />
                            <br />
                            <div class="row" id="gallery" >

                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/2.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="css/images/single/thumbs/2.jpg" style="width: 100%" />
                                    </a>
                                </div>
                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/3.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="css/images/single/thumbs/3.jpg" style="width: 100%" />
                                    </a>
                                </div>
                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/4.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="css/images/single/thumbs/4.jpg" style="width: 100%" />
                                    </a>
                                </div>
                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/5.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="css/images/single/thumbs/5.jpg" style="width: 100%" />
                                    </a>
                                </div>
                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/6.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="css/images/single/thumbs/6.jpg" style="width: 100%" />
                                    </a>
                                </div>
                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/7.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="css/images/single/thumbs/7.jpg" style="width: 100%" />
                                    </a>
                                </div>
                                                                <div class="col-xs-4" style="margin-bottom: 10px;">	
                                    <a href="css/images/single/8.jpg" class="fancybox thumbnail" rel="group" >
                                        <img alt="" src="css/images/single/thumbs/8.jpg" style="width: 100%" />
                                    </a>
                                </div>
                                
                            </div>

                        </div>
                    </div>
                    <br />	
                    <br />	
                    <div class="col-sm-12" style="text-align: center; margin: 0 auto">	
                        <button data-toggle="modal" data-target="#myModal" class="btn btn-warning" style="text-align: center;width: 180px; " type="button">Reply to ad</button>
                        <br />
                        <p>or call Alan on 9824614705</p>
                    </div>



                    <br />




                </div>				

            </div>			

            <div class="col-sm-12 listings">
                                <br />
                <div class="row">

                    <div class="panel panel-default recent-listings hidden-xs">
                        <div class="panel-heading">Recent Cars, Vans & Motorbikes ads in London</div>


                        <div class="panel-body">

                                                                                    <div class="row premium  listing-row">

                                <div class="col-sm-2">
                                    <a href="details.html" class="thumbnail " ><img alt="" src="css/images/listings/0.jpg"></a>
                                </div>	 

                                <div class="col-sm-10">
                                    <div class="row">

                                        <div class="col-sm-9">
                                            <h3><a class=""  href="details.html">7 bedroom house for sale</a></h3>
                                        </div>                    

                                        <div class="col-sm-3">
                                            <h3 class="price-text"><strong>&pound;3,350,000</strong></h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="muted">Located in <strong>Richmond, London</strong></p>
                                            <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p><br />
                                            <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p><br />


                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5">
                                            <p class="ad-description">
                                                <strong>2006</strong> | 

                                                <strong>98,000 miles</strong> | 

                                                <strong>2,696 cc</strong> | 

                                                <strong>Diesel</strong>                
                                            </p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p>
                                                <span class="classified_links pull-right">
                                                    <a class="link-info underline" href="#">Share</a>&nbsp;
                                                    <a class="link-info underline" href="#">Add to favorites</a>
                                                    &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br />
                                                                                    <div class="row   listing-row">

                                <div class="col-sm-2">
                                    <a href="details.html" class="thumbnail " ><img alt="" src="css/images/listings/1.jpg"></a>
                                </div>	 

                                <div class="col-sm-10">
                                    <div class="row">

                                        <div class="col-sm-9">
                                            <h3><a class=""  href="details.html">1 bedroom flat for sale</a></h3>
                                        </div>                    

                                        <div class="col-sm-3">
                                            <h3 class="price-text"><strong>&pound;229,950</strong></h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="muted">Located in <strong>Richmond, London</strong></p>
                                            <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p><br />
                                            <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p><br />


                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5">
                                            <p class="ad-description">
                                                <strong>2006</strong> | 

                                                <strong>98,000 miles</strong> | 

                                                <strong>2,696 cc</strong> | 

                                                <strong>Diesel</strong>                
                                            </p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p>
                                                <span class="classified_links pull-right">
                                                    <a class="link-info underline" href="#">Share</a>&nbsp;
                                                    <a class="link-info underline" href="#">Add to favorites</a>
                                                    &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br />
                                                                                    <div class="row   listing-row">

                                <div class="col-sm-2">
                                    <a href="details.html" class="thumbnail property_sold"  style="position:relative;"><img alt="" src="css/images/listings/2.jpg"></a>
                                </div>	 

                                <div class="col-sm-10">
                                    <div class="row">

                                        <div class="col-sm-9">
                                            <h3><a class=""  href="details.html">2 bedroom apartment for sale</a></h3>
                                        </div>                    

                                        <div class="col-sm-3">
                                            <h3 class="price-text"><strong>&pound;520,000</strong></h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="muted">Located in <strong>Richmond, London</strong></p>
                                            <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p><br />
                                            <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p><br />


                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5">
                                            <p class="ad-description">
                                                <strong>2006</strong> | 

                                                <strong>98,000 miles</strong> | 

                                                <strong>2,696 cc</strong> | 

                                                <strong>Diesel</strong>                
                                            </p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p>
                                                <span class="classified_links pull-right">
                                                    <a class="link-info underline" href="#">Share</a>&nbsp;
                                                    <a class="link-info underline" href="#">Add to favorites</a>
                                                    &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br />
                                                                                    <div class="row  last listing-row">

                                <div class="col-sm-2">
                                    <a href="details.html" class="thumbnail " ><img alt="" src="css/images/listings/3.jpg"></a>
                                </div>	 

                                <div class="col-sm-10">
                                    <div class="row">

                                        <div class="col-sm-9">
                                            <h3><a class=""  href="details.html">2 bedroom house for sale</a></h3>
                                        </div>                    

                                        <div class="col-sm-3">
                                            <h3 class="price-text"><strong>&pound;550,000</strong></h3>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-12">
                                            <p class="muted">Located in <strong>Richmond, London</strong></p>
                                            <p class="muted">Posted Feb 05, 2014 to <a href="#" class="underline">Cars, Vans & Motorbikes</a></p><br />
                                            <p>Excellent Condition. Displacement: 2,900 cc Power Output: 250 bhp Drivetrain: 2-WD  Second hand car for sale – 7377790212 Available car – beat – blue color, Honda city –white /black Indica ecs – white Alto – white Nano – red /white...</p><br />


                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-2"></div>
                                        <div class="col-sm-5">
                                            <p class="ad-description">
                                                <strong>2006</strong> | 

                                                <strong>98,000 miles</strong> | 

                                                <strong>2,696 cc</strong> | 

                                                <strong>Diesel</strong>                
                                            </p>
                                        </div>
                                        <div class="col-sm-5">
                                            <p>
                                                <span class="classified_links pull-right">
                                                    <a class="link-info underline" href="#">Share</a>&nbsp;
                                                    <a class="link-info underline" href="#">Add to favorites</a>
                                                    &nbsp;<a class="link-info underline" href="#">Contact</a></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <br />
                                                                                </div>









                    </div>
                </div>


            </div>
        </div>



    </div>	



</div>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Reply to Alan</h4>
                <p class="hidden-xs">about "Porsche Boxster S, 2.9 2dr reg Apr 2007"</p>
            </div>
            <div class="modal-body">
                <form class="form-vertical">
                    <fieldset>

                        <div class="row">  
                            <div class="col-sm-12" >

                                <div class="form-group">
                                    <label>Message</label>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <textarea class="form-control" rows="4"></textarea>
                                        </div>
                                    </div>

                                </div>


                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control " placeholder="Enter your name">
                                </div>
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input type="email" class="form-control " placeholder="Enter email">
                                </div>
                                <div class="form-group hidden-xs">
                                    <label>Phone Number (Optional):</label>
                                    <input type="text" class="form-control" placeholder="">
                                </div>						  


                                <div class="alert alert-info hidden-xs">
                                    <p>
                                        Follow these simple steps for a safe and successful buying experience:<br />
                                        1. Meet face to face to see the item and exchange money.<br /> 2. Make sure you are completely happy with the item before handing over any money. <br />3. Although we do not recommend paying for an item you haven't seen, if you are planning to do this, please use a secure payment method.<br />

                                    </p>
                                </div>

                            </div>




                        </div>
                    </fieldset>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Send</button>
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

                <form method="POST" action="account_dashboard.html" accept-charset="UTF-8" id="user-login-form" class="form ajax" data-replace=".error-message p">

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
                <div class="error-message"><p style="color: #000; font-weight: normal;">Don't have an account? <a class="link-info" href="register.html">Register now</a></p></div>
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
                        <a href="my_account.html" class="btn btn-primary pull-right">Continue</a>
                        </div>
                    </div>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

@stop