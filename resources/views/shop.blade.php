@include('includes.header')
<!-- shop-page-section -->
<section class="shop-page-section sec-pad">
    <div style="padding-left: 10%;padding-right:10%;margin: auto">
        <div class="row clearfix">
            <div class="col-lg-3 col-md-3 col-sm-3 sidebar-side">
                <div class="sidebar shop-sidebar">
                    <div class="sidebar-widget category-widget">
                        <div class="widget-title">
                            <h3>Shop Categories</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="category-list clearfix">
                                <li><i class="flaticon-right"></i><a href="{{url('All')}}"  style="font-weight: bold;color: black!important;">All</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('Fruit&Vegetables')}}"  style="font-weight: bold;color: black!important;">Fruit & Vegetables</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('MeatPoultry')}}"  style="font-weight: bold;color: black!important;">Meat & Poultry</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('Fish&Seafood')}}"  style="font-weight: bold;color: black!important;">Fish & Seafood</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('Delicatessen')}}"  style="font-weight: bold;color: black!important;">Delicatessen</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('Diary&Eggs')}}"  style="font-weight: bold;color: black!important;">Diary & Eggs</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('EverydayEssentials')}}"  style="font-weight: bold;color: black!important;">Everyday Essentials</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('Bakery')}}"  style="font-weight: bold;color: black!important;">Bakery</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('Impulse&Snaking')}}"  style="font-weight: bold;color: black!important;">Impulse & Snaking</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('Drinks')}}"  style="font-weight: bold;color: black!important;">Drinks</a></li>
                                <li><i class="flaticon-right"></i><a href="{{url('CateringSupplies')}}"  style="font-weight: bold;color: black!important;">Catering Supplies</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="sidebar-widget filter-widget">
                        <div class="widget-title">
                            <h3>Filter</h3>
                        </div>
                        <div class="range-slider clearfix" style="width: 100%;">
                            <div class="price-range-slider  container-fluid"></div>
                            <div class="clearfix">
                                <div class="title" ></div>
                                <div class="input"><input onclick="change_amount()" type="text" id="property-amount" class="property-amount" name="field-name" readonly></div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar-widget sidebar-tags">
                        <div class="widget-title">
                            <h3>Product tags</h3>
                        </div>
                        <div class="widget-content">
                            <ul class="tags-list clearfix">
                                <li><a>Beef</a></li>
                                <li><a>Pork</a></li>
                                <li><a>Chicken</a></li>
                                <li><a>Sausage</a></li>
                                <li><a>Lamb</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 content-side">
                <div class="our-shop">
                    <div class="row clearfix">
                        @foreach($product as $item)
                            <button style="display: none" type="button"  id="alert_button" data-positionX="right" data-positionY="top"  data-duration="2500" data-effect="fadeInUp" class="btn pmd-ripple-effect btn-success pmd-z-depth pmd-alert-toggle">Alert Success</button>

                            <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                                <form action="{{url('more_details')}}" method="post">
                                    @csrf
                                    <div class="shop-block-one">
                                        <div class="inner-box">
                                            <figure class="image-box">
                                                <img src="{{$item->sub_image1}}" alt="" >
                                                <ul class="list clearfix">
                                                    <li><a class="add_cart flaticon-cart" name="1" id="{{$item->id}}"></a></li>

                                                    <li>
                                                        <input class="quantity-spinner" id="product_quantity" style="background-color: #fae8e8;text-align:center;width: 50px;height:50px;margin-right:15px;outline:red" type="text" value="1" name="quantity" onchange="change_quantity(this.value)">
                                                    </li>
                                                    <li><button type="submit" style="width: 100px">More</button></li>
                                                </ul>
                                            </figure>
                                            <div class="lower-content" style="text-align: justify;">
                                                <textarea name="product_id" id="product_id" style="display: none">{{$item->id}}</textarea>
                                                <h6><button type="submit" style="font-weight:bold;background-color: white">{{$item -> name}}</button></h6>
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