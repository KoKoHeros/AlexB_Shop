@include('includes.header')
<!-- shop-page-section -->
<section class="shop-page-section sec-pad">
    <div class="auto-container">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-12 col-sm-12 sidebar-side">
                <div class="sidebar shop-sidebar">
                    <div class="sidebar-widget category-widget">
                        <div class="widget-title">
                            <h3>Categories</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                <li><i class="flaticon-right"></i><a href="{{url('shop')}}"  style="font-weight: bold;color: black!important;">All</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('sortByBeef')}}"  style="font-weight: bold;color: black!important;">Beef</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('sortByPork')}}"  style="font-weight: bold;color: black!important;">Pork</a></li>
                                <li><i class="flaticon-right" style="text-decoration: "></i><a href="{{url('sortByLamb')}}"  style="font-weight: bold;color: black!important;">Lamb</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget filter-widget">
                        <div class="widget-title">
                            <h3>Filter</h3>
                            <button style="display: none" type="button"  id="alert_button" data-positionX="right" data-positionY="top"  data-duration="2500" data-effect="fadeInUp" class="btn pmd-ripple-effect btn-success pmd-z-depth pmd-alert-toggle">Alert Success</button>

                        </div>
                        <div class="clearfix">
                            <!--Range slider with lower tootlip at bottom -->
                            <div id="pmd-slider-range-tooltip-bottom"  class="pmd-range-slider pmd-range-tooltip pmd-range-tooltip-bottom"></div>

                        </div>
                    </div>



                    {{--<div class="sidebar-widget sidebar-tags">--}}
                        {{--<div class="widget-title">--}}
                            {{--<h3>Product tags</h3>--}}
                        {{--</div>--}}
                        {{--<div class="widget-content">--}}
                            {{--<ul class="tags-list clearfix">--}}
                                {{--<li><a>Beef</a></li>--}}
                                {{--<li><a>Pork</a></li>--}}
                                {{--<li><a>Chicken</a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 content-side">
                <div class="our-shop">
                    <div class="row clearfix">
                        @foreach($product as $item)

                            <div class="col-lg-4 col-md-6 col-sm-12 shop-block">
                                <form action="{{url('more_details')}}" method="post">
                                    @csrf
                                    <div class="shop-block-one">
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
                                                <h6><a href="detail.blade.php">{{$item -> name}}</a></h6>
                                                <ul class="rating clearfix">
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                    <li><i class="fas fa-star"></i></li>
                                                </ul>
                                                <span class="price">$ {{$item -> price}}</span>
                                            </div>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        @endforeach

                        <div class="d-flex container">
                            <div class="mx-auto">
                                {!! $product->links("pagination::bootstrap-4") !!}
                            </div>
                        </div>

                        {{--<div>{{ $product->links() }}</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- shop-page-section end -->

@include('includes.footer')