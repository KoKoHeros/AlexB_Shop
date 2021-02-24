@include('includes.header')

        <!-- main-slider -->
        <section class="main-slider">
            <div class="main-slider-carousel owl-theme owl-carousel owl-dots-none">
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{asset('assets/images/banner/banner-1.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h1>Fresh, Safe Quality Meats</h1>
                            <p>Food that matters - to you, to farmers and to the planet we all share.</p>
                            <div class="btn-box">
                                <a href="{{url('home')}}" class="theme-btn">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{asset('assets/images/banner/banner-2.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box centred">
                            <h1>Fresh, Safe Quality Meats</h1>
                            <p>Food that matters - to you, to farmers and to the planet we all share.</p>
                            <div class="btn-box">
                                <a href="{{url('home')}}" class="theme-btn">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slide-item">
                    <div class="image-layer" style="background-image:url({{asset('assets/images/banner/banner-3.jpg')}})"></div>
                    <div class="auto-container">
                        <div class="content-box">
                            <h1>Fresh, Safe Quality Meats</h1>
                            <p>Food that matters - to you, to farmers and to the planet we all share.</p>
                            <div class="btn-box">
                                <a href="{{url('home')}}" class="theme-btn">Learn More<i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- main-slider end -->
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
                                <h3><a href="{{url('home')}}">Veal Entrecote</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                                <div class="btn-box">
                                    <a href="{{url('home')}}" class="theme-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-hang"></i></div>
                                <h3><a href="{{url('home')}}">Pork Tenderloin</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                                <div class="btn-box">
                                    <a href="{{url('home')}}" class="theme-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 service-block">
                        <div class="service-block-one wow fadeInUp animated animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="flaticon-meat-5"></i></div>
                                <h3><a href="{{url('home')}}">Beaf ribs</a></h3>
                                <p>Lorem ipsum dolor sit amet, consec tetur adipis</p>
                                <div class="btn-box">
                                    <a href="{{url('home')}}" class="theme-btn">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- service-section end -->

        <!-- shop-section -->
        <section class="shop-section">
            <div class="auto-container">
                <div class="sec-title style-two text-center">
                    <span>See all products</span>
                    <h2>Featured Prodcuts</h2>
                </div>
                <div class="row clearfix">
                    @foreach($product as $item)


                    <div class="col-lg-3 col-md-6 col-sm-12 shop-block">

                        <div class="shop-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <form action="{{url('more_detail')}}" method="post">
                                @csrf
                            <div class="inner-box">
                                <figure class="image-box">
                                    <img src="{{$item->main_image}}" alt="">
                                    <ul class="list clearfix">
                                        <li><a class="add_cart flaticon-cart" id="{{$item->id}}"></a></li>
                                        <li><button type="submit">More details</button></li>

                                    </ul>
                                </figure>
                                <div class="lower-content">
                                    <textarea name="product_id" id="product_id" style="display: none">{{$item->id}}</textarea>
                                    <h6><a href="detail.blade.php">{{$item->name}}</a></h6>
                                    <ul class="rating clearfix">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                    <span class="price">${{$item->price}}</span>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                   @endforeach
                </div>
                <div class="more-btn centred">
                    <a href="{{url('shop')}}" class="theme-btn">Shop Now</a>
                </div>
            </div>
        </section>
        <!-- shop-section end -->
@include('includes.footer')