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
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/js/fancybox/jquery.fancybox.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="/js/fancybox/helpers/jquery.fancybox-buttons.css?v=2.1.5" media="screen" />
    <link rel="stylesheet" type="text/css" href="/css/chcustom.css"/>

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
                    <span class="logo"><strong>Community-</strong><span class="handwriting">Helpers.com</span><br />
                    <small>Putting the youth to help out in your community</small></span>
                </a>

            </div>


            <!-- Navigation Bar (Right) -->
            <div class="collapse navbar-collapse">

                <ul class="nav navbar-nav navbar-right visible-xs">
                    @if(Auth::check())
                    <li><a href="{{ action('UsersController@dashboard', Auth::id()) }}">Welcome {{ auth::user()->first_name}}</a></li>
                    <li><a href="{{ action('UsersController@show', Auth::id()) }}">My account</a></li>
                    <li><a href="/logout">Logout</a></li>
                    @else
                    <li><a href="/login">Login</a></li>
                    <li><a href="/users/create">Register</a></li>
                    @endif
                    <li><a href="/account_ad_create">Listings</a></li>
                </ul>
                <div class="nav navbar-nav navbar-right hidden-xs">
                    <div class="row">
                        <div class="pull-right">

                            @if(Auth::check())
                            <a href="{{ action('UsersController@dashboard', Auth::id()) }}">Welcome {{ auth::user()->first_name}}</a> |
                            <a href="{{ action('UsersController@show', Auth::id()) }}">My account</a> |
                            <a href="/logout">Logout</a>
                            @else
                            <a href="/login">Login</a> |
                            <a href="/users/create">Register</a> |
                            @endif
                            <a href="/listings">Listings</a>
                        </div>
                    </div>
                </div>

            </div>
            </div>





    </nav>

    <!-- Alert Messages -->
    @if (Session::has('successMessage'))
        <div class="alert alert-success fade_message">{{{ Session::get('successMessage') }}}</div>
    @endif
    @if (Session::has('errorMessage'))
        <div class="alert alert-danger fade_message">{{{ Session::get('errorMessage') }}}</div>
        @endif

    <!-- Page Content -->
    @yield('content')

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

    <!-- Footer -->
    <div class="footer">
        <div class="container">

            <div class="row">

                <div class="col-sm-4 col-xs-12">
                    <p><strong>&copy; Community-Helpers.com {{ date('Y') }}</strong></p>
                    <p>All rights reserved</p>
                </div>

                <div class="col-sm-8 col-xs-12">
                    <p class="footer-links">
                        <a href="/" class="active">Home</a>
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
    <script>
        $('.fade_message').delay(2000).fadeOut(1000);
    </script>

</body>
</html>

