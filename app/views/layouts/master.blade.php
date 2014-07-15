<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Community Helpers">
    <meta name="author" content="Frank Pigeon, Jon B. Robinson, Josue Plaza">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>@yield('title')</title>

    <!-- Bootstrap core CSS -->
    <link id="switch_style" href="/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/theme.css" rel="stylesheet">
    <link href="/css/dropzone.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="/js/fancybox/helpers/jquery.fancybox-buttons.css?v=2.1.5" media="screen" />
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="../../assets/js/html5shiv.js"></script>
    <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!-- Facebook Root -->
    <div id="fb-root"></div>
    <script>
        (function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/all.js#xfbml=1";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
    
    <!-- Navigation Bar (Left) -->
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a href="/" class="navbar-brand ">
                    <span class="logo"><strong>classified</strong><span class="handwriting">ads</span><br />
                        <small >Putting the youth to help out in your community</small></span>
                </a>

            </div>


            <!-- Navigation Bar (Right) -->
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right visible-xs">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/my_account">Login</a></li>
                    <li><a href="/register">Register</a></li>
                    <li><a href="/listings">Listings</a></li>
                    <li><a href="/account_dashboard">My account</a></li>
                    <li><a href="/account_ad_create">Post an ad</a></li>
                </ul> 
                <div class="nav navbar-nav navbar-right hidden-xs">
                    <div class="row">

                        <div class="pull-right">


                            <a data-toggle="modal" data-target="#modalLogin"  href="#">Login</a> | 
                            <a href="/register">Register</a> | 
                            <a href="/listings">Listings</a> | 
                            <a href="/account_dashboard">My account</a>
                            <a href="/account_ad_create" class="btn btn-warning post-ad-btn">Post an ad</a>

                        </div>  
                    </div>




                </div>

            </div>
            </div>





    </nav>

    <!-- Page Content -->
    @yield('content')

    <!-- Footer -->
    <div class="footer">
        <div class="container">

            <div class="row">

                <div class="col-sm-4 col-xs-12">
                    <p><strong>&copy; Bootstrap Classifieds 2014</strong></p>
                    <p>All rights reserved</p>
                </div>          

                <div class="col-sm-8 col-xs-12">
                    <p class="footer-links">
                        <a href="/" class="active">Home</a>
                        <a href="#">Typography</a>
                        <a href="/terms">Terms and Conditions</a>
                        <a href="/contact">Contact Us</a>
                    </p>
                </div>
            </div>
        </div>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/js/jquery-1.10.2.min.js"></script>
    <script src="/js/bootstrap.js"></script>
    <script src="/js/jquery.flot.js"></script>
    <script src="/js/dropzone.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="/js/fancybox/jquery.fancybox.js?v=2.1.5"></script>
    <script type="text/javascript" src="/js/fancybox/helpers/jquery.fancybox-buttons.js?v=2.1.5"></script>
    <script type="text/javascript" src="/js/fancybox/helpers/jquery.fancybox-media.js?v=2.1.5"></script>
    <script src="/js/global.js"></script>

</body>
</html>

