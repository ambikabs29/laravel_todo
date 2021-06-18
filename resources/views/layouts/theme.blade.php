<?php

use Illuminate\Support\Facades\Request;

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | Todo &mdash; 100% Free Fully Responsive HTML5 Template by FREEHTML5.co</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
    <meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
    <meta name="author" content="FREEHTML5.CO" />

    <!--
      //////////////////////////////////////////////////////

      FREE HTML5 TEMPLATE
      DESIGNED & DEVELOPED by FREEHTML5.CO

      Website: 		http://freehtml5.co/
      Email: 			info@freehtml5.co
      Twitter: 		http://twitter.com/fh5co
      Facebook: 		https://www.facebook.com/fh5co

      //////////////////////////////////////////////////////
       -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700,900' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <!-- Superfish -->
    <link rel="stylesheet" href="css/superfish.css">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="css/flexslider.css">

    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="{{asset('assets/style.css')}}">

    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>

<header id="fh5co-header" role="banner">
    <div class="container text-center">
        <div id="fh5co-logo">
            <a href="{{route('home')}}"><img src="{{asset('images/logo1.png')}}" alt="Todo Free HTML5 Bootstrap Template" height="180" width="280"></a>
        </div>
        <nav>
            <ul>
                @if (Route::has('login'))
                    <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/logout') }}" class="text-sm text-gray-700 underline  "{{Request::path() == 'logout' ? 'active font-weight-bolder' : ''}}>Logout</a>
                        @else

                            <a href="{{ url('/') }}" class="text-sm text-gray-700 underline {{Request::path() == '/' ? 'active font-weight-bolder' : ''}}">Home</a>

                             <a href="{{ route('login') }}" class="ml-4 text-sm text-gray-700 underline {{Request::path() == 'login' ? 'active font-weight-bolder' : ''}} ">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline {{Request::path() == 'register' ? 'active font-weight-bolder' : ''}}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif

{{--                <li><a href="{{route('login')}}" {{ Request::path() == 'login'}} ? class="active" : class="">Login</a></li>--}}
{{--                <li><a href="{{route('register')}}">Register</a></li>--}}
{{--                <li><a href="{{route('logout')}}">Logout</a></li>--}}
{{--                <li><a href="#">Instagram</a></li>--}}
            </ul>
        </nav>
    </div>

</header>
<!-- END #fh5co-header -->

@yield('content')

<!--<div class="container-fluid pt70 pb70">
    <div id="fh5co-projects-feed" class="fh5co-projects-feed clearfix masonry">
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_20.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_19.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_3.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_4.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_5.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_6.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_7.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_8.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_9.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_10.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_11.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_12.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_13.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_14.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_15.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_16.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_17.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_18.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_19.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
        <div class="fh5co-project masonry-brick">
            <a href="single.html">
                <img src="images/img_20.jpg" alt="Free HTML5 by FreeHTML5.co">
                <h2>Your Project Title Here</h2>
            </a>
        </div>
    </div>-->
    <!--END .fh5co-projects-feed-->
</div>
<!-- END .container-fluid -->

<footer id="fh5co-footer" role="contentinfo">
    <div class="container-fluid">
        <div class="footer-content">
            <div class="copyright"><small>&copy; 2021 Todo. All Rights Reserved. <br>Designed by <a href="http://freehtml5.co/">FreeHTML5.co</a> Images: <a href="http://graphicburger.com/">GraphicBurger</a></small></div>
            <div class="social">
                <a href="#"><i class="icon-facebook3"></i></a>
                <a href="#"><i class="icon-instagram2"></i></a>
                <a href="#"><i class="icon-linkedin2"></i></a>
            </div>
        </div>
    </div>
</footer>
<!-- END #fh5co-footer -->

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- masonry -->
<script src="js/jquery.masonry.min.js"></script>
<!-- MAIN JS -->
<script src="js/main.js"></script>

</body>
</html>

