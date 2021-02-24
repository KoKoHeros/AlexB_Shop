@include('includes.header')
<!-- about-section -->
<section class="about-section sec-pad">
    <div class="auto-container">
        <div class="inner-container mr-0 clearfix">
            <div class="row clearfix">
                <div class="col-lg-6 col-md-6 col-sm-12 video-column">
                    <div id="video_block_1">
                        <div class="video-inner" style="background-image: url({{asset('assets/images/resource/about-1.jpg')}});">
                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="fas fa-play"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 content-column">
                    <div id="content_block_1">
                        <div class="content-box">
                            <div class="sec-title">
                                <span>About Us</span>
                                <h2>We Provide Best Meat</h2>
                            </div>
                            <div class="text">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt</p>
                            </div>
                            <ul class="list clearfix">
                                <li>100% Organic Meat</li>
                                <li>Payment Securation</li>
                            </ul>
                            <div class="btn-box">
                                <a href="{{url('about')}}" class="theme-btn">View More<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-section end -->

<!-- service-section -->
<section class="service-section bg-color-1">
    <div class="icon-layer" style="background-image: url({{asset('assets/images/icons/bg-icon-1.png')}});"></div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <span>What we do</span>
            <h2>Services for You</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-meat-4"></i></div>
                        <h3><a>Veal Entrecote</a></h3>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-hang"></i></div>
                        <h3><a>Pork Tenderloin</a></h3>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <div class="icon-box"><i class="flaticon-meat-5"></i></div>
                        <h3><a>Beaf ribs</a></h3>
                        <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- service-section end -->


<!-- about-style-two -->
<section class="about-style-two">
    <div class="auto-container">
        <div class="row align-items-center clearfix">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div id="content_block_2">
                    <div class="content-box">
                        <div class="sec-title style-two">
                            <span>About Us</span>
                            <h2>About Our Firm’s</h2>
                        </div>
                        <div class="text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris</p>
                        </div>
                        <ul class="list clearfix">
                            <li>
                                <i class="flaticon-call-center-agent"></i>
                                Expert Customer
                            </li>
                            <li>
                                <i class="flaticon-free-delivery"></i>
                                Free Shipping
                            </li>
                            <li>
                                <i class="flaticon-return-of-investment"></i>
                                Free Return
                            </li>
                            <li>
                                <i class="flaticon-winner"></i>
                                Amazing Deals
                            </li>
                        </ul>
                        <div class="link-box"><a href="{{url('about')}}">Learn more about our benefit<i class="flaticon-right"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                <div id="image_block_1">
                    <div class="image-box">
                        <figure class="image image-1"><img src="{{asset('assets/images/resource/about-2.jpg')}}" alt=""></figure>
                        <figure class="image image-2"><img src="{{asset('assets/images/resource/about-3.jpg')}}" alt=""></figure>
                        <figure class="image image-3"><img src="{{asset('assets/images/resource/about-1.png')}}" alt=""></figure>
                        <figure class="image image-4"><img src="{{asset('assets/images/resource/about-2.png')}}" alt=""></figure>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about-style-two end -->
@include('includes.footer')