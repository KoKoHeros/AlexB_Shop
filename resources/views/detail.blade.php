@include('includes.header')
<!-- shop-details -->

<section class="shop-details sec-pad">
    <div class="auto-container" style="text-align: justify">
        @foreach($product_detail as $item)
            <div class="product-details-content">
                <div class="row align-items-center clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="slider-inner">
                            <div class="bxslider">
                                <div class="slider-content">
                                    <div class="slider-pager">
                                        <ul class="thumb-box">


                                            <li>
                                                <a class="active" data-slide-index="0" href="#"><figure><img style="width:134px;height: 136px;"  src="{{$item -> sub_image1}}" alt=""></figure></a>
                                            </li>
                                            {{--<li>--}}
                                                {{--<a data-slide-index="0"  class="active">--}}
                                                    {{--<figure style=""><img  id="sub_image1" src="{{$item -> sub_image1}}" alt="" onclick="changeborder(this)"></figure>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                            <li>
                                                <a data-slide-index="1">
                                                    <figure><img  id="sub_image2" style="width:134px;height: 136px;"  src="{{$item -> sub_image2}}" alt="" onclick="changeborder(this)"></figure>
                                                </a>
                                            </li>
                                            <li>
                                                <a data-slide-index="2"><figure><img  style="width:134px;height: 136px;" id="sub_image3" src="{{$item -> sub_image3}}" alt="" onclick="changeborder(this)"></figure></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="product-image">
                                        <figure class="image">
                                            <a>
                                                <img class="main_image" style="width:382px;height: 476px;" src="{{$item -> main_image}}" alt="No Image">
                                            </a>
                                        </figure>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="product-details">
                            <h2>{{$item -> name}}</h2>
                            {{--<div class="customer-review clearfix">--}}
                                {{--<ul class="rating-box clearfix">--}}
                                    {{--<li><i class="fas fa-star"></i></li>--}}
                                    {{--<li><i class="fas fa-star"></i></li>--}}
                                    {{--<li><i class="fas fa-star"></i></li>--}}
                                    {{--<li><i class="fas fa-star"></i></li>--}}
                                    {{--<li><i class="fas fa-star"></i></li>--}}
                                {{--</ul>--}}
                                {{--<div class="reviews"><a>(2 customer review)</a></div>--}}
                            {{--</div>--}}
                            <div class="item-price"><h3>{{$item -> price}}$</h3></div>
                            <div class="text">
                                <button style="display: none" type="button"  id="alert_button" data-positionX="right" data-positionY="top"  data-duration="2500" data-effect="fadeInUp" class="btn pmd-ripple-effect btn-success pmd-z-depth pmd-alert-toggle">Alert Success</button>
                                <p>{{$item -> description}}</p>
                            </div>
                            <div class="other-links">
                                <ul class="category list clearfix">
                                    <li>Category:</li>
                                    <li><a>{{$item -> category}}</a></li>
                                </ul>
                                {{--<ul class="tags list clearfix">--}}
                                    {{--<li>Tags:</li>--}}
                                    {{--<li><a>{{$item->tags}}</a></li>--}}
                                    {{--<li><a href="single-shop-1.html">Sausage</a>,</li>--}}
                                    {{--<li><a href="single-shop-1.html">Lamb</a></li>--}}
                                {{--</ul>--}}
                            </div>
                            <div class="othre-options clearfix">
                                <div class="item-quantity">
                                    <input class="quantity-spinner" id="product_quantity" style="background-color: #fae8e8;"  type="text" value="1" name="quantity" onchange="change_quantity(this.value)">
                                </div>
                                <div class="btn-box" style="text-align: center;padding:0px;margin: auto"><button class="add_cart theme-btn" name="1" id="{{$item->id}}">Add to cart</button></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            {{--<div class="product-discription">--}}
                {{--<div class="tabs-box">--}}
                    {{--<div class="tab-btn-box">--}}
                        {{--<ul class="tab-btns tab-buttons clearfix">--}}
                            {{--<li class="tab-btn active-btn" data-tab="#tab-1">Description</li>--}}
                            {{--<li class="tab-btn" data-tab="#tab-2">Reviews (2)</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                    {{--<div class="tabs-content">--}}
                        {{--<div class="tab active-tab" id="tab-1">--}}
                            {{--<div class="text">--}}
                                {{--<h3>{{$item -> name}}</h3>--}}
                                {{--<p>{{$item -> description}}</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="tab" id="tab-2">--}}
                            {{--<div class="text">--}}
                                {{--<h3>{{$item -> name}}</h3>--}}
                                {{--<p>{{$item -> review}}</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        @endforeach

        {{--<div class="related-product">--}}
                {{--<div class="sec-title style-two centred">--}}
                    {{--<span>See all products</span>--}}
                    {{--<h2>Related Products</h2>--}}
                {{--</div>--}}
                {{--<div class="row clearfix container">--}}
                    {{--@foreach($related_products as $related_product)--}}
                    {{--<div class="col-lg-3 col-md-6 col-sm-12 shop-block">--}}
                        {{--<form action="{{url('more_details')}}" method="post">--}}
                            {{--@csrf--}}
                        {{--<div class="shop-block-one">--}}
                            {{--<div class="inner-box">--}}
                                {{--<figure class="image-box">--}}
                                    {{--<img src="storage/{{$related_product->main_image}}" alt="">--}}
                                    {{--<ul class="list clearfix">--}}
                                        {{--<li><a class="add_cart flaticon-cart" id="{{$related_product->id}}"></a></li>--}}
                                        {{--<li><button type="submit">More details</button></li>--}}

                                    {{--</ul>--}}
                                {{--</figure>--}}
                                {{--<div class="lower-content">--}}
                                    {{--<textarea name="product_id" id="product_id" style="display: none">{{$related_product->id}}</textarea>--}}

                                    {{--<h6><a href="detail.blade.php">{{$related_product->name}}</a></h6>--}}
                                    {{--<ul class="rating clearfix">--}}
                                        {{--<li><i class="fas fa-star"></i></li>--}}
                                        {{--<li><i class="fas fa-star"></i></li>--}}
                                        {{--<li><i class="fas fa-star"></i></li>--}}
                                        {{--<li><i class="fas fa-star"></i></li>--}}
                                        {{--<li><i class="fas fa-star"></i></li>--}}
                                    {{--</ul>--}}
                                    {{--<span class="price">$ {{$related_product->price}}</span>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--</form>--}}

                    {{--</div>--}}
                    {{--@endforeach--}}

                {{--</div>--}}
            {{--</div>--}}

    </div>

</section>
<!-- shop-details end -->

@include('includes.footer')