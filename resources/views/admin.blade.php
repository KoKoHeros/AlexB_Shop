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
    <link href="assets/css/range-slider.css" rel="stylesheet">

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
                                    <li> Zanzibar, Tanzania</li>
                                    <li><a href="tel:+8801682648101">+234 554 657 345</a></li>
                                    <li><a href="mailto:info@pantheonsupplies.com">info@pantheonsupplies.com</a></li>
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
                                    <li class="dropdown"> <a href="{{url('admin')}}">Admin</a></li>                                    <li><a href="{{url('home')}}">HOME</a></li>
                                    <li><a href="{{url('about')}}">ABOUT US</a></li>
                                    <li><a href="{{url('shop')}}">SHOP</a></li>
                                    <li><a href="{{url('pricing')}}">PRICING PLAN</a></li>
                                    <li><a href="{{url('faq')}}">FAQ</a></li>
                                </ul>
                            </div>
                        </nav>
                        <ul class="menu-right-content pull-left clearfix" style="margin-top: 2%">

                            <li class="user-box"><a href=""><i class="flaticon-user-symbol-of-thin-outline"></i></a></li>
                            <li class="search-box-outer">
                                <div class="dropdown">
                                    <button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="flaticon-search"></span></button>
                                    <ul class="dropdown-menu pull-right search-panel" aria-labelledby="dropdownMenu3">
                                        <li class="panel-outer">
                                            <div class="form-container">
                                                <form method="post" action="blog.html">
                                                <div class="form-group">
                                                    <input type="search" name="field-name" value="" placeholder="Search...." required="">
                                                    <button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
                                                </div>
                                                </form>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="cart-box"><a href="{{url('carts')}}"><i class="flaticon-shopping-cart-1"></i><span>{{count(collect(Session::get('cart')))}}</span></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="outer-box clearfix">
                    <figure class="logo-box pull-left"><a><img src="assets/images/small-logo.png" alt=""></a></figure>
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
            <div class="nav-logo"><a><img src="assets/images/logo-2.png" alt="" title=""></a></div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            <div class="contact-info">
                <h4>Contact Info</h4>
                <ul>
                    <li>Zanzibar, Tanzania</li>
                    <li><a href="tel:+234 554 657 345">+234 554 657 345</a></li>
                    <li><a href="mailto:info@pantheonsupplies.com">info@pantheonsupplies.com</a></li>
                </ul>
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

    <!-- shop-page-section -->
<section class="row">
    <div class="auto-container col-md-6 col-sm-6 col-xl-6 col-lg-6">
        <div class="row" style="">
            <form action="{{url('saveproduct')}}" method="post" enctype="multipart/form-data">
                @csrf

                <div><h1 style="text-align: center;font-weight: bold;margin: 10%">Products</h1></div>
                <div><label style="width: 50%">Product Name:</label><input style="border:solid 1px;width: 50%" type="text" name="name"></div>
                <div><label style="width: 50%">price:</label><input  style="border:solid 1px;width: 50%" type="text" name="price"></div>
                <div><label style="width: 50%">Description:</label><input style="border:solid 1px;width: 50%" type="text" name="description"></div>
                {{--<div><label>Tags:</label><input  type="text" name="tags"></div>--}}
                <div><label style="width: 49%">category:</label>
                    <select  type="text" name="category" style="width:50%;border:solid 1px;">
                        <option name="Fruit&Vegetables" style="border:solid 1px;">Fruit & Vegetables</option>
                        <option name="MeatPoultry" style="border:solid 1px;">Meat & Poultry</option>
                        <option name="Fish&Seafood" style="border:solid 1px;">Fish & Seafood</option>
                        <option name="Delicatessen" style="border:solid 1px;">Delicatessen</option>
                        <option name="Diary&Eggs" style="border:solid 1px;">Diary & Eggs</option>
                        <option name="EverydayEssentials" style="border:solid 1px;">Everyday Essentials</option>
                        <option name="Bakery" style="border:solid 1px;">Bakery</option>
                        <option name="Impulse&Snaking" style="border:solid 1px;">Impulse & Snaking</option>
                        <option name="Drinks" style="border:solid 1px;">Drinks</option>
                        <option name="CateringSupplies" style="border:solid 1px;">Catering Supplies</option>
                    </select>
                </div>
                <div><label style="width: 50%">Main Image:</label><input style="width: 50%" type="file" name="main_image"></div>
                <div><label style="width: 50%">Sub Image1:</label><input style="width: 50%" type="file" name="sub_image1"></div>
                <div><label style="width: 50%">Sub Image2:</label><input style="width: 50%" type="file" name="sub_image2"></div>
                <div><label style="width: 50%">SubImage3:</label><input style="width: 50%" type="file" name="sub_image3"></div>
                <div style="margin-top: 5%" class="text-center"><button type="submit" class="btn btn-primary" >Save</button></div>
            </form>
        </div>
    </div>
    <div class="auto-container col-md-6 col-sm-6 col-xl-6 col-lg-6">
        <div class="row">
            <form action="{{url('savefeaturedproduct')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div><h1 style="text-align: center;font-weight: bold;margin: 10%">Featured Products</h1></div>

                <div><label style="width: 50%">Product Name:</label><input style="border:solid 1px;width: 50%" type="text" name="name"></div>
                <div><label style="width: 50%">price:</label><input  style="border:solid 1px;width: 50%" type="text" name="price"></div>
                <div><label style="width: 50%">Description:</label><input style="border:solid 1px;width: 50%" type="text" name="description"></div>
                {{--<div><label>Tags:</label><input  type="text" name="tags"></div>--}}
                <div><label style="width: 49%">category:</label>
                    <select  type="text" name="category" style="width:50%;border:solid 1px;">
                        <option name="Fruit&Vegetables" style="border:solid 1px;">Fruit & Vegetables</option>
                        <option name="MeatPoultry" style="border:solid 1px;">Meat & Poultry</option>
                        <option name="Fish&Seafood" style="border:solid 1px;">Fish & Seafood</option>
                        <option name="Delicatessen" style="border:solid 1px;">Delicatessen</option>
                        <option name="Diary&Eggs" style="border:solid 1px;">Diary & Eggs</option>
                        <option name="EverydayEssentials" style="border:solid 1px;">Everyday Essentials</option>
                        <option name="Bakery" style="border:solid 1px;">Bakery</option>
                        <option name="Impulse&Snaking" style="border:solid 1px;">Impulse & Snaking</option>
                        <option name="Drinks" style="border:solid 1px;">Drinks</option>
                        <option name="CateringSupplies" style="border:solid 1px;">Catering Supplies</option>
                    </select>
                </div>
                <div><label style="width: 50%">Main Image:</label><input style="width: 50%" type="file" name="main_image"></div>
                <div><label style="width: 50%">Sub Image1:</label><input style="width: 50%" type="file" name="sub_image1"></div>
                <div><label style="width: 50%">Sub Image2:</label><input style="width: 50%" type="file" name="sub_image2"></div>
                <div><label style="width: 50%">SubImage3:</label><input style="width: 50%" type="file" name="sub_image3"></div>
                <div class="text-center" style="margin-top: 5%"><button type="submit" class="btn btn-primary">Save</button></div>
            </form>
        </div>
    </div>
</section>
<!-- shop-page-section end -->

@include('includes.footer')