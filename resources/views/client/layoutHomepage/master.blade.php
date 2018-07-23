<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <meta content="{{csrf_token()}}" name="csrf-token">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"> </script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Merriweather|Oswald|Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap4-executive-suite.min.css">
    <style>/* Footer */
        section {
            padding: 60px 0;
        }

        section .section-title {
            text-align: center;
            color: #007b5e;
            margin-bottom: 50px;
            text-transform: uppercase;
        }
        #footer {
            background: #007b5e !important;
        }
        #footer h5{
            padding-left: 10px;
            border-left: 3px solid #eeeeee;
            padding-bottom: 6px;
            margin-bottom: 20px;
            color:#ffffff;
        }
        #footer a {
            color: #ffffff;
            text-decoration: none !important;
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }
        #footer ul.social li{
            padding: 3px 0;
        }
        #footer ul.social li a i {
            margin-right: 5px;
            font-size:25px;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
        #footer ul.social li:hover a i {
            font-size:30px;
            margin-top:-10px;
        }
        #footer ul.social li a,
        #footer ul.quick-links li a{
            color:#ffffff;
        }
        #footer ul.social li a:hover{
            color:#eeeeee;
        }
        #footer ul.quick-links li{
            padding: 3px 0;
            -webkit-transition: .5s all ease;
            -moz-transition: .5s all ease;
            transition: .5s all ease;
        }
        #footer ul.quick-links li:hover{
            padding: 3px 0;
            margin-left:5px;
            font-weight:700;
        }
        #footer ul.quick-links li a i{
            margin-right: 5px;
        }
        #footer ul.quick-links li:hover a i {
            font-weight: 700;
        }

        @media (max-width:767px){
            #footer h5 {
                padding-left: 0;
                border-left: transparent;
                padding-bottom: 0px;
                margin-bottom: 10px;
            }
        }
        .card-banner {
            display: flex;
            position: relative;
            overflow: hidden;
            background-color: #fff;
            background-size: cover;
            border-radius: 5px;
        }
        .card-banner .card-body {
            background-size: cover;
            position: relative;
            z-index: 10;
        }


        /* overlay effects */
        .overlay-cover {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            position: absolute;
            width: 100%;
        }
        .overlay {
            background-color: rgba(0,0,0,0.65);
            z-index: 10;
            padding: 1.25rem;
            color: #fff;
        }
        .overlay-grad {
            position: relative;
        }

        .overlay-grad::before {
            position: absolute;
            content: "";
            display: block;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: #e83e8c;
            background: -webkit-gradient(linear, left top, right bottom, from(#007bff), to(#e83e8c));
            background: linear-gradient(to bottom right, #007bff, #e83e8c);
            opacity: .6;
            transition: .5s;
        }
        .overlay-grad:hover:before{
            opacity: .9;
        }
        -->
        .footer1 a {
            color: #DDD;
        }

        .footer1 a:hover,
        .footer1 a:focus,
        .footer1 a:active {
            color: #FFF;
        }

        .footer1 .footer {
            background-color: #2E3436;
            padding: 35px 0;
            margin-top: 5em;
        }

        .footer1 .footer .footer-desc p {
            color: #DDD;
            margin: 15px 0 8px;
        }

        .footer1 .footer .social {
            margin: 0 auto;
            display: table;
        }

        .footer1 .footer .social li {
            float: left;
        }

        .footer1 .footer .social li a {
            display: block;
            font-size: 1em;
            color: #DDD;
            width: 30px;
            height: 30px;
            line-height: 32px;
            text-align: center;
            background-color: #222728;
            border-radius: 2px;
            margin: 15px 4px
        }

        .footer1 .footer .social li a:hover {
            background-color: #3A4144;
        }

        .footer1 .footer .input-group {
            margin: 15px 0;
        }

        .footer1 .footer .form-control {
            border-radius: 2px 0 0 2px;
            background-color: #585C5D;
            border-color: #585C5D;
            color: #DDD;
            font-size: 15px;
        }

        .footer1 .footer .form-control:hover,
        .footer1 .footer .form-control:focus {
            border: 1px solid #222728;
            background-color: #222728;
        }

        .footer1 .footer .input-group-addon {
            border-radius: 0 2px 2px 0;
            background-color: #F7931D;
            color: #FFF;
            border-color: #F7931D;
            font-size: 15px;
        }

        .footer1 .footer-bottom {
            background-color: #222728;
            padding: 15px 0;
            color: #DDD;
            font-size: 13px;
        }

        .footer1 .footer-bottom ul li {
            display: inline-block;
        }

        .footer1 .footer-bottom ul li a {
            display: block;
            padding-left: 8px;
        }

        .footer1 .footer-bottom ul li a:after {
            content: "-";
            padding-left: 8px;
        }

        .footer1 .footer-bottom ul li:last-child a:after {
            content: "";
        }

        @media (max-width: 550px) {
            .footer1 .footer-bottom .pull-left,
            .footer1 .footer-bottom .pull-right {
                float: none !important;
                width: 100%;
                padding: 10px;
                text-align: center;
            }
        }
        /*FOOTER 2*/
        .footer2 a {
            color: #DDD;
        }

        .footer2 a:hover,
        .footer2 a:focus,
        .footer2 a:active {
            color: #FFF;
        }

        .footer2 .footer {
            background-color: #2E3436;
            padding: 35px 0;
            margin-top: 5em;
        }

        .footer2 .footer nav h3 {
            font-size: 18px;
            color: #FFF;
            font-weight: bold;
            text-transform: uppercase;
            margin: 0 0 1em 0;
        }

        .footer2 .footer nav h3 span {
            font-weight: 300;
            text-transform: capitalize;
        }

        .footer2 .footer nav ul li a {
            text-decoration: none;
            display: block;
            padding: 4px 0;
            font-size: 13px;
        }

        .footer2 .footer .input-group {
            margin: 15px auto;
            max-width: 400px;
        }

        .footer2 .footer .form-control {
            border-radius: 2px 0 0 2px;
            background-color: #585C5D;
            border-color: #585C5D;
            color: #DDD;
        }

        .footer2 .footer .form-control:hover,
        .footer2 .footer .form-control:focus {
            border: 1px solid #222728;
            background-color: #222728;
        }

        .footer2 .footer .input-group-addon {
            border-radius: 0 2px 2px 0;
            background-color: #F7931D;
            color: #FFF;
            border-color: #F7931D;
        }

        .footer2 .footer .social {
            margin: 0 auto;
            display: table;
        }

        .footer2 .footer .social li {
            float: left;
        }

        .footer2 .footer .social li a {
            display: block;
            font-size: 1em;
            color: #DDD;
            width: 30px;
            height: 30px;
            line-height: 32px;
            padding: 0;
            text-align: center;
            background-color: #222728;
            border-radius: 2px;
            margin: 5px 4px
        }

        .footer2 .footer .social li a:hover {
            background-color: #3A4144;
        }

        .footer2 .footer-bottom {
            background-color: #222728;
            padding: 15px 0;
            color: #DDD;
            font-size: 13px;
        }

        .footer2 .footer-bottom ul li {
            display: inline-block;
        }

        .footer2 .footer-bottom ul li a {
            display: block;
            padding-left: 8px;
        }

        .footer2 .footer-bottom ul li a:after {
            content: "-";
            padding-left: 8px;
        }

        .footer2 .footer-bottom ul li:last-child a:after {
            content: "";
        }

        @media (max-width: 550px) {
            .footer2 .footer-bottom .pull-left,
            .footer2 .footer-bottom .pull-right {
                float: none !important;
                width: 100%;
                padding: 10px;
                text-align: center;
            }
        }
        @media (max-width: 767px) {
            .footer2 .footer {
                text-align: center;
            }
        }
        @media (max-width: 991px) {
            .footer2 .footer ul {
                margin-bottom: 30px;
            }
        }

    </style>
</head>
{{--<div class="jumbotron py-0 bg-light text-dark mb-0 radius-0">--}}
    {{--<div class="topnav">--}}
        {{--<div class="row">--}}
            {{--<div class="col-xl-6  jumbo-vertical-center">--}}
                {{--<div>--}}
                    {{--<a href="/" title="">--}}
                    {{--<img alt="" src="http://runecom03.runtime.vn/Uploads/shop90/images/banner(1).png"  class="img-responsive"/>--}}
                    {{--</a>--}}
                {{--</div>--}}

            {{--</div>--}}
            {{--<div class="col-xl-6  jumbo-vertical-center">--}}
                {{--<input class="m-lg-4" type="text" placeholder="Search..">--}}

            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div>--}}
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark mb-4">
    <img alt="" src="http://runecom03.runtime.vn/Uploads/shop90/images/banner(1).png"  class="img-responsive"/>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Trang chủ  <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/intro">Thông tin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="/contact">Liên hệ </a>
            </li>
        </ul>
        <ul class="navbar-nav mr-5">
            <li class="nav-item">
                <a class="nav-link" href="/login"><i  class="fa fa-sign-in"> </i> Đăng nhập </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/register/create"> <i class="fa fa-key"></i> Đăng kí</a>
            </li>
            <li class="nav-link"><i class="fas fa-shopping-cart"></i>Giỏ hàng @yield('shopingCart')</li>
        </ul>
        <form class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
{{--<article class="bg-secondary mb-1">--}}
    {{--<div class="card-body text-center">--}}

    {{--</div>--}}
    {{--<br><br>--}}
{{--</article>--}}
<div class="card-banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <img class="d-block img-fluid" src="https://hoanghamobile.com/Uploads/Originals/2018/07/09/201807090915452051_t7-zenfone-max-pro-m1-online-bnn.png;width=1920;height=471;mode=crop;format=jpg" style="margin-bottom: auto" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://hoanghamobile.com/Uploads/Originals/2018/07/13/201807131412283137_T7-Banner-Nokia-X6-Desktop.png;width=1920;height=471;mode=crop;format=jpg"  alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block img-fluid" src="https://hoanghamobile.com/Uploads/Originals/2018/07/13/201807131410296018_T7-Banner-XCPO-Desktop.png;width=1920;height=471;mode=crop;format=jpg"  alt="Third slide">
            </div>

        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="container">
    <br><p class="text-center"> <a href=""> </a></p>
    <hr>
    <div class="row">
        <aside class="col-sm-3">

            <a href="/smartphone"><div class="card-banner  overlay-grad" style="height:250px; background-image: url('https://i.kinja-img.com/gawker-media/image/upload/t_original/evtwgjgb3xbmtirbyawn.jpg');">
                <div class="card-body text-white">
                    <h5 class="card-title">SMARTPHONE</h5>
                </div>
            </div>
            </a>
            <!-- card.// -->

        </aside>
        <aside class="col-sm-3">

            <a href="/laptop"> <div class="card-banner  overlay-grad" style="height:250px; background-image: url('https://img.purch.com/1524196804874-jpg/w/755/aHR0cDovL21lZGlhLmJlc3RvZm1pY3JvLmNvbS8yL1EvNzY2MDM0L29yaWdpbmFsLzE1MjQxOTY4MDQ4NzQuanBn');">
                <div class="card-body text-white">
                    <h5 class="card-title">LAPTOP</h5>
                </div>
            </div>
            </a>
            <!-- card.// -->

        </aside>
        <aside class="col-sm-3">

            <a href="/pc"> <div class="card-banner  overlay-grad" href="#" style="height:250px; background-image: url('https://genknews.genkcdn.vn/2016/photo-0-1475228344066.jpg');">
                <div class="card-body text-white">
                    <h5 class="card-title">PC</h5>
                </div>
            </div>
            </a><!-- card.// -->

        </aside>
        <aside class="col-sm-3">

            <a href="/console"> <div class="card-banner  overlay-grad" style="height:250px; background-image: url('https://www.console-deals.com/advice/wp-content/uploads/2017/10/Xbox-One-X-Console-White-1.png');">
                <div class="card-body text-white">
                    <h5 class="card-title">CONSOLE</h5>
                </div>
            </div>
            </a>

               <!-- card.// -->

        </aside>
    </div>
</div>
<div class="card-body">
<hr>
</div>





@yield('content')

<footer class="footer1">
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="footer-desc text-center">
                        <img src="http://superdevresources.com/images/super-dev-resources-logo.png" width="82" height="48" alt="">
                        <p>
                            <a href="/" rel="home" title="Super Dev Resources">Super Dev Resources</a> is a popular blog for finding<br>awesome free app and web development resources. <a href="/about/">Learn More</a>
                        </p>
                    </div>
                </div>
                <div class="col-xs-12">
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>

                <nav class="col-lg-4 col-lg-offset-4 col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                    <div class="input-group input-group-md">
                        <input type="text" class="form-control" placeholder="Email Address">
                        <span class="input-group-addon">Subscribe</span>
                    </div>
                </nav>
            </div> <!--/.row-->
        </div> <!--/.container-->
    </div> <!--/.footer-->

    <div class="footer-bottom">
        <div class="container">
            <div class="pull-left"> Copyright © <a href="">Rizwan Akram</a>.  All right reserved.</div>
            <div class="pull-right">

            </div>
        </div>
    </div> <!--/.footer-bottom-->
</footer>


</body>
</html>