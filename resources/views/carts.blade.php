@include('includes.header')
<!-- shop-page-section -->

{{--<section class="shop-page-section sec-pad">--}}
{{--<div class="auto-container">--}}
{{--<div class="col-lg-12 col-md-12 col-sm-12 content-side">--}}
{{--<div class="our-shop">--}}
{{--<div class="row clearfix">--}}
{{--@if(request()->is('carts'))--}}
{{--@php($num =1)--}}
{{--@foreach($carts as $item)--}}
{{--<div class="col-lg-3 col-md-6 col-sm-12 shop-block">--}}
{{--<form action="{{url('more_details')}}" method="post">--}}
{{--<form action="{{url('remove')}}" method="post">--}}
{{--@csrf--}}
{{--<div class="shop-block-one">--}}
{{--<div class="inner-box">--}}
{{--<figure class="image-box">--}}
{{--<img src="{{$item->main_image}}" alt="">--}}
{{--<ul class="list clearfix">--}}
{{--<li>--}}
{{--<div class="item-quantity">--}}
{{--<input class="quantity-spinner" type="number" alt="{{$item->price}}" id="{{$item->product_id}}" value="{{$item -> quantity}}">--}}
{{--</div>--}}
{{--</li>--}}
{{--<li><button type="submit">More details</button></li>--}}

{{--</ul>--}}
{{--</figure>--}}
{{--<div class="lower-content">--}}
{{--<textarea name="product_id" id="product_id" style="display: none">{{$item->product_id}}</textarea>--}}
{{--<textarea name="session_id" id="session_id" style="display: none">{{$num++}}</textarea>--}}
{{--<h6><a href="detail.blade.php">{{$item -> name}}</a></h6>--}}
{{--<ul class="rating clearfix">--}}
{{--<li><i class="fas fa-star"></i></li>--}}
{{--<li><i class="fas fa-star"></i></li>--}}
{{--<li><i class="fas fa-star"></i></li>--}}
{{--<li><i class="fas fa-star"></i></li>--}}
{{--<li><i class="fas fa-star"></i></li>--}}
{{--</ul>--}}
{{--<span class="price">$ {{$item -> price}}</span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--@endforeach--}}
{{--@endif--}}
{{--<div class="d-flex container">--}}
{{--<div class="mx-auto">--}}
{{--{!! $carts->links("pagination::bootstrap-4") !!}--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="d-flex container"  style="margin-top: 50px;display: block" id="purchase_area">--}}
{{--<div class="mx-auto">--}}
{{--<button type="submit" class="btn btn-primary btn-lg" id="purchase">purchase</button>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div class="d-flex container" id="google_signin" style="margin-top: 50px;display: none">--}}
{{--<div class="mx-auto">--}}
{{--<div id="my-signin2" style="display: none"></div>--}}
{{--<div class="g-signin2" id="my-signin2" data-onsuccess="onSignIn" style="display: none"></div>--}}

{{--<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>--}}
{{--</div>--}}
{{--</div>--}}

{{--<div  class="center" style="padding: 1px; margin: auto;text-align: center">--}}

{{--@if ($message = Session::get('success'))--}}
{{--<div class="w3-panel w3-green w3-display-container">--}}
{{--<span onclick="this.parentElement.style.display='none'"  class="w3-button w3-green w3-large w3-display-topright">&times;</span>--}}
{{--<p>{!! $message !!}</p>--}}
{{--</div>--}}
{{--<?php Session::forget('success');?>--}}
{{--@endif--}}

{{--@if ($message = Session::get('error'))--}}
{{--<div>--}}
{{--<span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">&times;</span>--}}
{{--<p>{!! $message !!}</p>--}}
{{--</div>--}}
{{--<?php Session::forget('error');?>--}}
{{--@endif--}}

{{--<div class="center container-fluid"  id="pay_area" style="display: none;padding:1px; text-align: center; margin:auto;!important;">--}}
{{--<form  method="POST" id="payment-form" action="{{ route('make.payment') }}">--}}
{{--{{ csrf_field() }}--}}
{{--<div class="container">--}}
{{--<label class="w3-text-blue" style="padding-bottom: 2%;padding-top:-3%"><b>Your Amount  :  $</b></label>--}}
{{--<input readonly="readonly" style="text-align: center" id="amount" type="text" name="amount">--}}
{{--</div>--}}
{{--<div class="col-xs-1 center-block"><button class="btn btn-primary">Pay with PayPal</button></div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</section>--}}

<section class="shop-page-section sec-pad">
    <div class="auto-container">
        <div class="col-lg-12 col-md-12 col-sm-12 content-side">
            <div class="our-shop">
                <div class="clearfix" style="margin-top: -50px;">
                    @php($num = 0)
                    @if($page==0)@php($page=1)@endif
                    <div class="row">
                        <div class="table-responsive card pmd-card">
                            <button style="display: none" type="button"  id="alert_button" data-positionX="right" data-positionY="top"  data-duration="5000" data-effect="fadeInUp" class="btn pmd-ripple-effect btn-success pmd-z-depth pmd-alert-toggle">Alert Success</button>
                            @php($num = ($page -1)* 10 + 1)
                            <table class="table pmd-table">
                                <thead>
                                <tr>
                                    <th  style="text-align: center;font-size:large;font-weight: bold">No</th>
                                    <th  style="text-align: center;font-size:large;font-weight: bold">Image</th>
                                    <th  style="text-align: center;font-size:large;font-weight: bold">Price</th>
                                    <th  style="text-align: center;font-size:large;font-weight: bold">Quantity/Change</th>
                                    <th  style="text-align: center;font-size:large;font-weight: bold">Amount</th>
                                    <th  style="text-align: center;font-size:large;font-weight: bold">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($carts as $item)
                                    <tr>
                                        <td data-title="No" style="text-align: center;font-size:large;">{{$num}}</td>
                                        <td data-title="Ticket No" style="text-align: center;font-size:large;"><img class="carts_image" src="{{$item -> sub_image1}}" style="border:1px silver solid;width: 100px;height: auto"></td>
                                        <td data-title="Browser Name"  style="text-align: center">{{$item -> price}}</td>
                                        <td data-title="Month"  style="text-align: center;width: 150px">
                                            <input class="quantity-spinner"  style="width: 50px;height: 50px;" type="number" alt="{{$item->price}}" id="{{$item->product_id}}" value="{{$item -> quantity}}">
                                        </td>
                                        <td data-title="Amount"  style="text-align: center">{{$item -> price * $item ->quantity}}</td>
                                        <td data-title="action"  style="text-align: center">
                                            <i class="fa fa-trash md-dark pmd-sm remove_button"   title="{{$item -> product_id}}" ></i>
                                        </td>
                                    </tr>
                                    @php($num = $num + 1)
                                @endforeach
                                <tr>
                                    <td style="text-align: center;font-size:large;"></td>
                                    <td style="text-align: center;font-size:large;"></td>
                                    <td style="text-align: center;font-size:large;font-weight: bold">Total amount:</td>
                                    <td style="text-align: center;font-size:large;font-weight: bold">${{$total_amount}}</td>
                                    <td style="text-align: center;font-size:large;"></td>
                                </tr>
                                </tbody>
                            </table>
                            <div class="d-flex container" style="border-top: solid 1px lightgray; padding: 2%">
                                <div class="mx-auto">
                                    {!! $carts->links("pagination::bootstrap-4") !!}
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="d-flex container"  style="margin-top: 50px;display: block" id="purchase_area">
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-primary btn-lg" id="purchase">purchase</button>
                        </div>
                    </div>

                    <div class="d-flex container" id="google_signin" style="margin-top: 50px;display: none">
                        <div class="mx-auto">
                            <div id="my-signin2" style="display: block"></div>
                            <div class="g-signin2" id="my-signin2" data-onsuccess="onSignIn" style="display: block"></div>

                            <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
                        </div>
                    </div>

                    <div  class="center" style="padding: 1px; margin: auto;text-align: center">

                        @if ($message = Session::get('success'))
                            <div class="w3-panel w3-green w3-display-container">
                                <span onclick="this.parentElement.style.display='none'"  class="w3-button w3-green w3-large w3-display-topright">&times;</span>
                                <p>{!! $message !!}</p>
                            </div>
                            <?php Session::forget('success');?>
                        @endif

                        @if ($message = Session::get('error'))
                            <div>
                                <span onclick="this.parentElement.style.display='none'" class="w3-button w3-red w3-large w3-display-topright">&times;</span>
                                <p>{!! $message !!}</p>
                            </div>
                            <?php Session::forget('error');?>
                        @endif

                        <div class="center container-fluid"  id="pay_area" style="display: none;padding:1px; text-align: center; margin:auto;!important;">
                            <form  method="POST" id="payment-form" action="{{ route('make.payment') }}">
                                {{ csrf_field() }}
                                <div class="container">
                                    <label class="w3-text-blue" style="padding-bottom: 2%;padding-top:-3%"><b>Total Amount  :  $</b></label>
                                    <input readonly="readonly" style="text-align: center" id="amount" type="text" name="amount">
                                </div>
                                <div class="col-xs-1 center-block"><button class="btn btn-primary">Pay with PayPal</button></div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- shop-page-section end -->
@include('includes.footer')