@include('includes.header')
<!-- shop-details -->
<section class="shop-details sec-pad">
    <div class="auto-container" style="text-align: justify">
        @foreach($product_detail as $item)
            <section class="shop-details sec-pad">
                <div class="auto-container">
                    <div class="product-details-content">
                        <div class="row align-items-center clearfix">
                            <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                                <div class="slider-inner">
                                    <div class="bxslider">
                                        <div class="slider-content">
                                            <div class="slider-pager">
                                                <ul class="thumb-box">
                                                    <li>
                                                        <a class="active" data-slide-index="0" href="#"><figure><img src="{{$item -> sub_image1}}" style="width: 134px;height: 136px;" alt=""></figure></a>
                                                    </li>
                                                    <li>
                                                        <a data-slide-index="1" href="#"><figure><img src="{{$item -> sub_image2}}"  style="width: 134px;height: 136px;" alt=""></figure></a>
                                                    </li>
                                                    <li>
                                                        <a data-slide-index="2" href="#"><figure><img src="{{$item -> sub_image3}}" style="width: 134px;height: 136px;"  alt=""></figure></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-image">
                                                <figure class="image"><a href="{{$item -> sub_image1}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$item -> sub_image1}}" style="width: 382px;height: 476px;" alt=""></a></figure>
                                            </div>
                                        </div>
                                        <div class="slider-content">
                                            <div class="slider-pager">
                                                <ul class="thumb-box">
                                                    <li>
                                                        <a class="active" data-slide-index="0" href="#"><figure><img src="{{$item -> sub_image1}}" style="width: 134px;height: 136px;"  alt=""></figure></a>
                                                    </li>
                                                    <li>
                                                        <a data-slide-index="1" href="#"><figure><img src="{{$item -> sub_image2}}" style="width: 134px;height: 136px;"  alt=""></figure></a>
                                                    </li>
                                                    <li>
                                                        <a data-slide-index="2" href="#"><figure><img src="{{$item -> sub_image3}}"  style="width: 134px;height: 136px;" alt=""></figure></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-image">
                                                <figure class="image"><a href="{{$item -> sub_image2}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$item -> sub_image2}}" style="width: 382px;height: 476px;" alt=""></a></figure>
                                            </div>
                                        </div>
                                        <div class="slider-content">
                                            <div class="slider-pager">
                                                <ul class="thumb-box">
                                                    <li>
                                                        <a class="active" data-slide-index="0" href="#"><figure><img src="{{$item -> sub_image1}}" style="width: 134px;height: 136px;"  alt=""></figure></a>
                                                    </li>
                                                    <li>
                                                        <a data-slide-index="1" href="#"><figure><img src="{{$item -> sub_image2}}" style="width: 134px;height: 136px;"  alt=""></figure></a>
                                                    </li>
                                                    <li>
                                                        <a data-slide-index="2" href="#"><figure><img src="{{$item -> sub_image3}}" style="width: 134px;height: 136px;"  alt=""></figure></a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="product-image">
                                                <figure class="image"><a href="{{$item -> sub_image3}}" class="lightbox-image" data-fancybox="gallery"><img src="{{$item->sub_image3}}" style="width: 376px;height: 482px;" alt=""></a></figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                                <div class="product-details">
                                    <h2>{{$item -> name}}</h2>

                                    <div class="item-price"><h3>{{$item -> price}}$</h3></div>
                                    <div class="text">
                                        <p>{{$item ->description}}</p>
                                    </div>
                                    <div class="other-links">
                                        <ul class="category list clearfix">
                                            <li>Category:</li>
                                            <li><a>{{$item -> category}}</a></li>
                                        </ul>
                                        <ul class="category list clearfix">
                                            <li>Inventory:</li>
                                            <li><a></a></li>
                                        </ul>
                                        <ul class="tags list clearfix">
                                            <li>Tags:</li>
                                            <li><a href="">Food</a>,</li>
                                            <li><a href="">Sausage</a>,</li>
                                            <li><a href="">Lamb</a></li>
                                        </ul>
                                    </div>
                                    <div class="othre-options clearfix">
                                        <div class="item-quantity">
                                            <input class="quantity-spinner" id="product_quantity" style="background-color: #fae8e8;text-align:center;width: 50px;height:50px;margin-right:15px;outline:red" type="text" value="1" name="quantity" onchange="change_quantity(this.value)">
                                        </div>
                                        <textarea name="product_id" id="product_id" style="display: none">{{$item->product_id}}</textarea>
                                        <button style="display: none" type="button"  id="alert_button" data-positionX="right" data-positionY="top"  data-duration="2500" data-effect="fadeInUp" class="btn pmd-ripple-effect btn-success pmd-z-depth pmd-alert-toggle">Alert Success</button>

                                        <div class="btn-box" style="text-align: center;padding:0px;margin: auto"><button class="add_cart theme-btn" name="1" id="{{$item->id}}">Add to cart</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        @endforeach
                </div>
            </section>


    </div>

</section>
<!-- shop-details end -->

@include('includes.footer')