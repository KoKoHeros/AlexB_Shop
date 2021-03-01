<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title>Carneshop - HTML 5 Template Preview</title>

    <!-- Fav Icon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@100;300;400;500;700;800;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <!-- Stylesheets -->

    <link href="assets/css/font-awesome-all.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/owl.css" rel="stylesheet">
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/color.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/propeller.min.css">
    <link href="assets/css/nouislider.css">
    {{--<link href="assets/css/freshstyle.css" rel="stylesheet">--}}
    <link href="assets/css/range-slider.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    @toastr_css

    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="363405147790-ufaj9iena6poqmoinr6dms75ajl6hc79.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script></head>


<!-- page wrapper -->
<body>

<div class="boxed_wrapper ltr">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->


    <!-- sidebar cart item -->
    <div class="xs-sidebar-group info-group info-sidebar">
        <div class="xs-overlay xs-bg-black"></div>
        <div class="xs-sidebar-widget">
            <div class="sidebar-widget-container">
                <div class="widget-heading">
                    <a href="#" class="close-side-widget">X</a>
                </div>
                <div class="sidebar-textwidget">
                    <div class="sidebar-info-contents">
                        <div class="content-inner">
                            <div class="logo">
                                <a href="{{url('home')}}l"><img src="assets/images/logo-2.png" alt="" /></a>
                            </div>
                            <div class="content-box">
                                <h4>About Us</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</p>
                                <a href="{{url('about')}}" class="theme-btn">About Us<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                            <div class="contact-info">
                                <h4>Contact Info</h4>
                                <ul>
                                    <li>Zanzibar, Tanzania</li>
                                    <li><a href="tel:+234 554 657 345">+234 554 657 345</a></li>
                                    <li><a href="info@pantheonsupplies.com">info@pantheonsupplies.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END sidebar widget item -->


    <!-- main header -->
    <header class="main-header">
        <div class="header-top">
            <div class="auto-container">
                <div class="top-info">
                    <ul class="info-list clearfix">
                        <li>
                            <i class="flaticon-location-pin"></i>
                            Zanzibar, Tanzania
                        </li>
                        <li>
                            <i class="flaticon-envelope"></i>
                            <a href="mailto:info@pantheonsupplies.com">info@pantheonsupplies.com</a>
                        </li>
                        <li class="phone">
                            <i class="flaticon-dial"></i>
                            <a href="tel:234554657345">+234 554 657 345</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-upper">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <div class="logo-box">
                        <figure class="logo"><a href="{{url('home')}}"><img src="assets/images/logo.png" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{url('home')}}">HOME</a></li>
                                    <li><a href="{{url('about')}}">ABOUT US</a></li>
                                    <li><a href="{{url('shop')}}">SHOP</a></li>
                                    <li><a href="{{url('pricing')}}">PRICING PLAN</a></li>
                                    <li><a href="{{url('faq')}}">FAQ</a></li>
                                </ul>
                            </div>
                        </nav>
                        <ul class="menu-right-content pull-left clearfix" style="padding-top: 2.8%">

                            <li class="user-box"><a href=""><i class="flaticon-user-symbol-of-thin-outline"></i></a></li>
                            <li class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                {{--<form method="post" action="blog.html">--}}
                                                    <div class="form-group">
                                                        <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                                        <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                    </div>
                                                {{--</form>--}}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
{{--                            <li class="cart-box"><a href="{{url('carts')}}"><i class="flaticon-shopping-cart-1"></i><span>{{count(collect(Session::get('cart')))}}</span></a></li>--}}
                            <li class="cart-box"><a href="{{url('carts')}}"><i class="flaticon-shopping-cart-1"></i><span>{{sizeof(\App\Cart::all())}}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <figure class="logo-box pull-left"><a href=""><img src="assets/images/small-logo.png" alt=""></a></figure>
                    <div class="menu-area pull-right">
                        <nav class="main-menu clearfix">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href=""><img src="assets/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Chicago 12, Melborne City, USA</li>
                    <li><a href="tel:+8801682648101">+88 01682648101</a></li>
                    <li><a href="mailto:info@pantheonsupplies.com">info@pantheonsupplies.com</a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

