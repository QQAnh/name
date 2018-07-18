<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title')</title>
    <meta content="{{csrf_token()}}" name="csrf-token">
    @yield('style')
    {{--@foreach($category as $key =>$item)--}}
        {{--<li > <a>{{$item->title}}</a></li>--}}

    {{--@endforeach--}}


    {{--<link href="http://static.runtime.vn/App_Themes/RUN003C5/style.css" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="http://static.runtime.vn/App_Themes/RUN003/responsive.css" rel="stylesheet" type="text/css"/>--}}

    <link href="{{asset('vendor-admin/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    {{--<link href="{{asset('vendor-admin/metisMenu/metisMenu.min.css')}}" rel="stylesheet">--}}

    {{--<link href="{{asset('dist-admin/css/sb-admin-2.css')}}" rel="stylesheet">--}}

    {{--<link href="{{asset('vendor-admin/morrisjs/morris.css')}}" rel="stylesheet">--}}

    <link href="{{asset('vendor-admin/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css')}}">



    {{--<script src="{{asset('https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js')}}"></script>--}}
    {{--<script src="{{asset('https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js')}}"></script>--}}
</head>

<body>


{{--<header>--}}
    {{--<section class="top-link clearfix">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<ul class="nav navbar-nav topmenu-contact pull-left">--}}
                        {{--<li><i class="fa fa-phone"></i> <span>Hotline:0908 77 00 95</span></li>--}}
                    {{--</ul>--}}
                    {{--<ul class="nav navbar-nav navbar-right topmenu  hidden-xs hidden-sm">--}}
                        {{--<li class="order-check"><a href=""><i class="fa fa-pencil-square-o"></i>--}}
                                {{--Kiểm tra đơn hàng</a></li>--}}
                        {{--<li class="order-cart"><a href=""><i class="fa fa-shopping-cart"></i> Giỏ hàng</a>--}}
                        {{--</li>--}}
                        {{--<li class="account-login"><a href=""><i class="fa fa-sign-in"></i> Đăng nhập </a>--}}
                        {{--</li>--}}
                        {{--<li class="account-register"><a href=""><i class="fa fa-key"></i> Đăng ký </a></li>--}}
                    {{--</ul>--}}
                    {{--<div class="show-mobile hidden-lg hidden-md">--}}
                        {{--<div class="quick-user">--}}
                            {{--<div class="quickaccess-toggle">--}}
                                {{--<i class="fa fa-user"></i>--}}
                            {{--</div>--}}
                            {{--<div class="inner-toggle">--}}
                                {{--<ul class="login links">--}}
                                    {{--<li>--}}
                                        {{--<a href=""><i class="fa fa-sign-in"></i> Đăng ký</a>--}}
                                    {{--</li>--}}
                                    {{--<li>--}}
                                        {{--<a href=""><i class="fa fa-key"></i> Đăng nhập</a>--}}
                                    {{--</li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="quick-access">--}}
                            {{--<div class="quickaccess-toggle">--}}
                                {{--<i class="fa fa-list"></i>--}}
                            {{--</div>--}}
                            {{--<div class="inner-toggle">--}}
                                {{--<ul class="links">--}}
                                    {{--<li><a id="mobile-wishlist-total" href="" class="wishlist"><i--}}
                                                    {{--class="fa fa-pencil-square-o"></i> Kiểm tra đơn hàng</a></li>--}}
                                    {{--<li><a href="/gio-hang.html" class="shoppingcart"><i--}}
                                                    {{--class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<section class="header-content clearfix">--}}
        {{--<div class="container">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3 col-xs-12 col-sm-12 header-left text-center">--}}
                    {{--<div class="logo">--}}
                        {{--<a href="/" title="">--}}
                            {{--<img alt="C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME"--}}
                                 {{--src="http://runecom03.runtime.vn/Uploads/shop90/images/banner(1).png"--}}
                                 {{--class="img-responsive"/>--}}
                        {{--</a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-9 col-xs-12 col-sm-12 header-right">--}}
                    {{--<div class="sale-policy clearfix hidden-sm hidden-xs">--}}
                        {{--<ul class="clearfix">--}}
                            {{--<li class="shipping">--}}
                                {{--<i class="fa fa-truck"></i><span>--}}
                                        {{--Giao hàng miễn phí--}}
                                    {{--</span>--}}
                            {{--</li>--}}
                            {{--<li class="payment">--}}
                                {{--<i class="fa fa-money"></i><span>--}}
                                        {{--Thanh toán linh hoạt--}}
                                    {{--</span>--}}
                            {{--</li>--}}
                            {{--<li class="return">--}}
                                {{--<i class="fa fa-refresh"></i><span>--}}
                                        {{--Trả hàng trong 30 ngày--}}
                                    {{--</span>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="cart">--}}
                        {{--<div class="heading">--}}
                            {{--<a href="/gio-hang.html">--}}
                                {{--<span class="icon">icon</span><span id="cart-total">--}}
                                        {{--0--}}
                                        {{--sp - 0đ--}}
                                    {{--</span><i class="fa fa-arrow-right"></i>--}}
                            {{--</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="search hidden-sm hidden-xs">--}}
                        {{--<div class="input-cat form-search clearfix">--}}
                            {{--<div class="form-search-controls">--}}
                                {{--<input type="text" name="search" id="txtsearch"--}}
                                       {{--onblur="if(this.value=='')this.value='Tìm kiếm...'"--}}
                                       {{--onfocus="if(this.value=='Tìm kiếm...')this.value=''" value="T&#236;m kiếm..."/>--}}
                                {{--<div class="select-categories">--}}
                                    {{--<select name="lbgroup" id="lbgroup">--}}
                                        {{--<option value="0" selected="selected">Tất cả</option>--}}
                                        {{--@foreach($category as $key =>$item)--}}
                                         {{--<option class="option-1">{{$item->title}}</option>--}}

                                        {{--@endforeach--}}
                                        {{--<option class="option-1" value="1130">M&#225;y ảnh &amp; M&#225;y quay phim--}}
                                        {{--</option>--}}
                                        {{--<option class="option-1" value="1131">M&#225;y để b&#224;n &amp; Laptop</option>--}}
                                        {{--<option class="option-1" value="1132">Điện thoại</option>--}}
                                        {{--<option class="option-1" value="1133">M&#225;y t&#237;nh bảng</option>--}}
                                        {{--<option class="option-1" value="1134">Thời trang</option>--}}
                                        {{--<option class="option-1" value="1135">H&#224;ng gia dụng</option>--}}
                                    {{--</select>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<button class="btn btn-search" title="Search" type="button" id="btnsearch" value="Search">--}}
                                {{--<i class="fa fa-search"></i>--}}
                            {{--</button>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="social-group">--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}
    {{--<script type="text/javascript">--}}
        {{--$("#btnsearch").click(function () {--}}
            {{--SearchProduct();--}}
        {{--});--}}
        {{--$("#txtsearch").keydown(function (event) {--}}
            {{--if (event.keyCode == 13) {--}}
                {{--SearchProduct();--}}
            {{--}--}}
        {{--});--}}

        {{--function SearchProduct() {--}}
            {{--var key = $('#txtsearch').val();--}}
            {{--if (key == '' || key == 'Tìm kiếm...') {--}}
                {{--$('#txtsearch').focus();--}}
                {{--return;--}}
            {{--}--}}
            {{--var group = $('#lbgroup').val();--}}
            {{--window.location = '/tim-kiem.html?group=' + group + '&key=' + key;--}}
        {{--}--}}
    {{--</script>--}}
    {{--<section class="navigation-menu clearfix">--}}
        {{--<div class="container">--}}
            {{--<div class="menu-top">--}}
                {{--<div class="row">--}}
                    {{--<div class="col-md-12 ">--}}
                        {{--<nav class="navbar nav-menu">--}}
                            {{--<div class="navbar-header">--}}
                                {{--<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false">--}}
                                    {{--<span class="icon-bar"></span>--}}
                                    {{--<span class="icon-bar"></span>--}}
                                    {{--<span class="icon-bar"></span>--}}
                                {{--</button>--}}
                            {{--</div>--}}
                            {{--<nav id="mobile-menu" class="mobile-menu collapse navbar-collapse">--}}
                                {{--<ul class='menu nav navbar-nav'><li class="level0"><a class='' href=''><span>Trang chủ</span></a></li>--}}
                                    {{--<li class="level0"><a class='' href='/intro'><span>Giới thiệu</span></a></li>--}}
                                    {{--<li class="level0"><a class='' href=''><span>SmartPhone </span></a></li>--}}
                                    {{--<li class="level0"><a class='' href=''><span>Laptop </span></a></li>--}}
                                    {{--<li class="level0"><a class='' href=''><span>PC</span></a></li>--}}
                                    {{--<li class="level0"><a class='' href=''><span>Game Consoles & Accessories </span></a></li>--}}
                                    {{--<li class="level0"><a class='' href='/contact'><span>Liên hệ</span></a></li>--}}
                                {{--</ul >--}}
                            {{--</nav>--}}
                        {{--</nav>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</section>--}}




{{--</header>--}}
{{--<div>--}}
    {{--@yield('content')--}}

{{--</div>--}}
{{--<footer>--}}
    {{--<div class="footer">--}}

        {{--<div class="footer-content clearfix">--}}
            {{--<div class="container">--}}
                {{--<div class="row">--}}
                    {{--<div class="footer-box col-md-3 col-sm-12 col-xs-12">--}}
                        {{--<div class="item">--}}
                            {{--<h3>--}}
                                {{--<span>Về ch&#250;ng t&#244;i</span>--}}
                            {{--</h3>--}}
                        {{--</div>--}}
                        {{--<ul>--}}
                            {{--<li>--}}
                                {{--<a href="/intro">--}}
                                    {{--Giới thiệu--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="">--}}
                                    {{--Giao h&#224;ng - Đổi trả--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="">--}}
                                    {{--Ch&#237;nh s&#225;ch bảo mật--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="/contact">--}}
                                    {{--Li&#234;n hệ--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="footer-box col-md-3 col-sm-12 col-xs-12">--}}
                        {{--<div class="item">--}}
                            {{--<h3>--}}
                                {{--<span>Trợ gi&#250;p</span>--}}
                            {{--</h3>--}}
                        {{--</div>--}}
                        {{--<ul>--}}
                            {{--<li>--}}
                                {{--<a href="/content/huong-dan-mua-hang.html">--}}
                                    {{--Hướng dẫn mua h&#224;ng--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="/content/huong-dan-thanh-toan.html">--}}
                                    {{--Hướng dẫn thanh to&#225;n--}}
                                {{--</a>--}}
                            {{--</li>--}}
                            {{--<li>--}}
                                {{--<a href="/content/tai-khoan-giao-dich.html">--}}
                                    {{--T&#224;i khoản giao dịch--}}
                                {{--</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="footer-box box-address col-md-3 col-sm-12 col-xs-12">--}}
                        {{--<div class="item">--}}
                            {{--<h3>--}}
                                {{--<span>Thông tin công ty</span>--}}
                            {{--</h3>--}}
                            {{--<div class="box-address-content">--}}
                                {{--<b>C&#212;NG TY TNHH PH&#193;T TRIỂN C&#212;NG NGHỆ RUNTIME</b>--}}
                                {{--<p><i class="fa fa-map-marker"></i> 5/12A Quang Trung, P.14, Q.G&#242; Vấp, Tp.HCM</p>--}}
                                {{--<p>--}}
                                    {{--<i class="fa fa-envelope"></i>--}}
                                    {{--<a href="mailto:info@runtime.vn">info@runtime.vn</a>--}}
                                {{--</p>--}}
                                {{--<p>--}}
                                    {{--<i class="fa fa-phone"></i>--}}
                                    {{--Phone: (08) 66 85 85 38--}}
                                {{--</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<div class="footer-box box-social col-md-3 col-sm-12 col-xs-12">--}}
                        {{--<div class="item">--}}
                            {{--<h3>--}}
                                {{--<span>Facebook</span>--}}
                            {{--</h3>--}}
                            {{--<div class="fb-like-box" data-href="https://www.facebook.com/runtime.vn" data-width="289"--}}
                                 {{--data-height="190" data-colorscheme="dark" data-show-faces="true" data-header="false"--}}
                                 {{--data-stream="false" data-show-border="false">--}}
                            {{--</div>--}}
                            {{--<div class="social-icon">--}}
                                {{--<ul>--}}
                                    {{--<li><a target="_blank"><i class="fa fa-google-plus"></i></a></li>--}}
                                    {{--<li><a href="https://www.facebook.com/runtime.vn" target="_blank"><i--}}
                                                    {{--class="fa fa-facebook"></i></a></li>--}}
                                    {{--<li><a target="_blank"><i class="fa fa-youtube"></i></a></li>--}}
                                    {{--<li><a target="_blank"><i class="fa fa-twitter "></i></a></li>--}}
                                {{--</ul>--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    {{--</div>--}}
                    {{--<div class="footer-box box-letter col-md-3 col-sm-12 col-xs-12 hide">--}}
                        {{--<div class="item">--}}
                            {{--<h3>--}}
                                {{--Đăng ký nhận tin--}}
                            {{--</h3>--}}
                            {{--<div class="letter-title">--}}
                                {{--<span>Hộp thư</span><i class="icon-title"></i>--}}
                            {{--</div>--}}
                            {{--<div class="letter-content">--}}
                                {{--<div class="new-paper">--}}
                                    {{--<div class="input-box">--}}
                                        {{--<input type="text" name="email" id="txtNewsletter"--}}
                                               {{--class="input-text form-control" value=""--}}
                                               {{--placeholder="Your Emain Address"/>--}}
                                    {{--</div>--}}
                                    {{--<div class="button text-center">--}}
                                        {{--<a class="btn btn-primary">Nhận tin</a>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</footer>--}}


<script src="{{asset('vendor-admin/jquery/jquery.min.js')}}"></script>

<script src="{{asset('vendor-admin/bootstrap/js/bootstrap.min.js')}}"></script>

<script src="{{asset('vendor-admin/metisMenu/metisMenu.min.js')}}"></script>

<script src="{{asset('vendor-admin/raphael/raphael.min.js')}}"></script>

<script src="{{asset('vendor-admin/morrisjs/morris.js')}}"></script>

<script src="{{asset('data-admin/morris-data.js')}}"></script>

<script src="{{asset('dist-admin/js/sb-admin-2.js')}}"></script>

@yield('js')


</body>
</html>
{{--/products/create--}}