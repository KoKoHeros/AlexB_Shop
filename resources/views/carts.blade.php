@include('includes.header')
<!-- shop-page-section -->

<section class="shop-page-section sec-pad">
    <div class="auto-container">
        <div class="col-lg-12 col-md-12 col-sm-12 content-side">
            <div class="our-shop">
                <div class="row clearfix">
                    @if(request()->is('carts'))
                        @php($num =1)
                        @foreach($carts as $item)
                            <div class="col-lg-3 col-md-6 col-sm-12 shop-block">
                                <form action="{{url('more_details')}}" method="post">
                                    <form action="{{url('remove')}}" method="post">
                                        @csrf
                                        <div class="shop-block-one">
                                            <div class="inner-box">
                                                <figure class="image-box">
                                                    <img src="{{$item->main_image}}" alt="">
                                                    <ul class="list clearfix">
                                                        <li>
                                                            <div class="item-quantity">
                                                                <input class="quantity-spinner" type="number" alt="{{$item->price}}" id="{{$item->product_id}}" value="{{$item -> quantity}}">
                                                            </div>
                                                        </li>
                                                        <li><button type="submit">More details</button></li>

                                                    </ul>
                                                </figure>
                                                <div class="lower-content">
                                                    <textarea name="product_id" id="product_id" style="display: none">{{$item->product_id}}</textarea>
                                                    <textarea name="session_id" id="session_id" style="display: none">{{$num++}}</textarea>
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
                    @endif
                    <div class="d-flex container">
                        <div class="mx-auto">
                            {!! $carts->links("pagination::bootstrap-4") !!}
                        </div>
                    </div>
                    <div class="d-flex container"  style="margin-top: 50px;display: block" id="purchase_area">
                        <div class="mx-auto">
                            <button type="submit" class="btn btn-primary btn-lg" id="purchase">purchase</button>
                        </div>
                    </div>

                    <div class="d-flex container" id="google_signin" style="margin-top: 50px;display: none">
                        <div class="mx-auto">
                            <div id="my-signin2" style="display: none"></div>
                            <div class="g-signin2" id="my-signin2" data-onsuccess="onSignIn" style="display: none"></div>

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
                                    <label class="w3-text-blue" style="padding-bottom: 2%;padding-top:-3%"><b>Your Amount  :  $</b></label>
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

{{--<section class="shop-page-section sec-pad">--}}
{{--<div class="auto-container">--}}
{{--<div class="col-lg-12 col-md-12 col-sm-12 content-side">--}}
{{--<div class="our-shop">--}}
{{--<div class="clearfix" style="margin-top: -50px;">--}}

{{--<div class="row">--}}
{{--div class="table-responsive card pmd-card">--}}
{{--<table class="table pmd-table">--}}
{{--<thead>--}}
{{--<tr>--}}
{{--<th>Ticket No.</th>--}}
{{--<th>Browser Name</th>--}}
{{--<th>Month</th>--}}
{{--<th>Total</th>--}}
{{--<th>Status</th>--}}
{{--<th>Last Updated On</th>--}}
{{--<th>Actions</th>--}}
{{--</tr>--}}
{{--</thead>--}}
{{--<tbody>--}}
{{--<tr>--}}
{{--<td data-title="Ticket No">PMD484150</td>--}}
{{--<td data-title="Browser Name">Firefox</td>--}}
{{--<td data-title="Month">September</td>--}}
{{--<td data-title="Total">25%</td>--}}
{{--<td data-title="Status"><span class="status-btn blue-bg">Average</span></td>--}}
{{--<td data-title="date">2016-09-20 15:50:00</td>--}}
{{--<td data-title="action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">--}}
{{--<i class="material-icons md-dark pmd-sm">edit</i>--}}
{{--</a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">--}}
{{--<i class="material-icons md-dark pmd-sm">delete</i>--}}
{{--</a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td data-title="Ticket No">PMD484149</td>--}}
{{--<td data-title="Browser Name">Google Chrome</td>--}}
{{--<td data-title="Month">September</td>--}}
{{--<td data-title="Total">32%</td>--}}
{{--<td data-title="Status"><span class="status-btn blue-bg">High</span></td>--}}
{{--<td data-title="date">2016-09-21 15:50:00</td>--}}
{{--<td data-title="action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">--}}
{{--<i class="material-icons md-dark pmd-sm">edit</i>--}}
{{--</a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">--}}
{{--<i class="material-icons md-dark pmd-sm">delete</i>--}}
{{--</a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td data-title="Ticket No">PMD484148</td>--}}
{{--<td data-title="Browser Name">Safari</td>--}}
{{--<td data-title="Month">September</td>--}}
{{--<td data-title="Total">13%</td>--}}
{{--<td data-title="Status"><span class="status-btn blue-bg">Low</span></td>--}}
{{--<td data-title="date">2016-09-20 14:00:00</td>--}}
{{--<td data-title="action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">--}}
{{--<i class="material-icons md-dark pmd-sm">edit</i>--}}
{{--</a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">--}}
{{--<i class="material-icons md-dark pmd-sm">delete</i>--}}
{{--</a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td data-title="Ticket No">PMD484147</td>--}}
{{--<td data-title="Browser Name">Opera</td>--}}
{{--<td data-title="Month">September</td>--}}
{{--<td data-title="Total">7%</td>--}}
{{--<td data-title="Status"><span class="status-btn blue-bg">Low</span></td>--}}
{{--<td data-title="date">2016-09-20 11:30:00</td>--}}
{{--<td data-title="action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">--}}
{{--<i class="material-icons md-dark pmd-sm">edit</i>--}}
{{--</a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm">--}}
{{--<i class="material-icons md-dark pmd-sm">delete</i>--}}
{{--</a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm child-table-expand"><i class="material-icons md-dark pmd-sm">add_circle_outline</i></a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr class="child-table">--}}
{{--<td colspan="12">--}}
{{--<div class="direct-child-table" style="display:none">--}}
{{--<table class="table pmd-table table-striped table-sm">--}}
{{--<thead>--}}
{{--<tr>--}}
{{--<th>Title</th>--}}
{{--<th>Amount (%)</th>--}}
{{--<th>Status</th>--}}
{{--<th>Created</th>--}}
{{--<th></th>--}}
{{--</tr>--}}
{{--</thead>--}}
{{--<tbody>--}}
{{--<tr>--}}
{{--<td>Service Tax </td>--}}
{{--<td>14.5</td>--}}
{{--<td><span class="status-btn red-bg">InActive</span></td>--}}
{{--<td>2014-03-03</td>--}}
{{--<td class="pmd-table-row-action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>CWT1 </td>--}}
{{--<td>2</td>--}}
{{--<td><span class="status-btn green-bg">Active</span></td>--}}
{{--<td>2014-03-03</td>--}}
{{--<td class="pmd-table-row-action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>Service charge shaival test </td>--}}
{{--<td>20</td>--}}
{{--<td><span class="status-btn green-bg">Active</span></td>--}}
{{--<td>2014-03-03</td>--}}
{{--<td class="pmd-table-row-action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>Fixed Tax </td>--}}
{{--<td>2.5</td>--}}
{{--<td><span class="status-btn red-bg">InActive</span></td>--}}
{{--<td>2014-03-03</td>--}}
{{--<td class="pmd-table-row-action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td>cess vat</td>--}}
{{--<td>5.8</td>--}}
{{--<td><span class="status-btn red-bg">InActive</span></td>--}}
{{--<td>2014-03-03</td>--}}
{{--<td class="pmd-table-row-action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">edit</i></a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-xs"><i class="material-icons md-dark pmd-xs">delete</i></a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--</tbody>--}}
{{--</table>--}}
{{--</div>--}}
{{--</td>--}}
{{--</tr>--}}
{{--<tr>--}}
{{--<td data-title="Ticket No">PMD484146</td>--}}
{{--<td data-title="Browser Name">Mobile & Tablet</td>--}}
{{--<td data-title="Month">September</td>--}}
{{--<td data-title="Total">4%</td>--}}
{{--<td data-title="Status"><span class="status-btn blue-bg">Very Low</span></td>--}}
{{--<td data-title="date">2016-07-21 17:40:00</td>--}}
{{--<td class="pmd-table-row-action">--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm"><i class="material-icons md-dark pmd-sm">edit</i></a>--}}
{{--<a href="javascript:void(0);" class="btn pmd-btn-fab pmd-btn-flat pmd-ripple-effect btn-default btn-sm"><i class="material-icons md-dark pmd-sm">delete</i>--}}
{{--</a>--}}
{{--</td>--}}
{{--</tr>--}}
{{--</tbody>--}}
{{--</table>--}}
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
<!-- shop-page-section end -->
@include('includes.footer')