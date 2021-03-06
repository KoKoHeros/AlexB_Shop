<!-- main-footer -->
<footer class="main-footer">
    <div class="auto-container">
        <div class="footer-top">
            <div class="widget-section">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget logo-widget">
                            <figure class="footer-logo"><a href=""><img src="assets/images/footer-logo.png" alt=""></a></figure>
                            <div class="text">
                                <p>The probability of someone needing your services or wantinLorem ipsum dolor sit amet, consectetur adipisicing </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget contact-widget">
                            <ul class="info clearfix">
                                <li>
                                    <i class="flaticon-phone"></i>
                                    <p>Call Us</p>
                                    <h5><a href="tel:+234 554 657 345">+234 554 657 345</a></h5>
                                </li>
                                <li>
                                    <i class="flaticon-maps-and-flags"></i>
                                    <p>Address</p>
                                    <h5>Zanzibar, Tanzania</h5>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                        <div class="footer-widget newsletter-widget">
                            <div class="widget-title">
                                <h6>Newsletter</h6>
                            </div>
                            <div class="widget-content">
                                <p>Stay Updated on all that’s new add noteworthy</p>
                                <form action="{{url('sendEmail')}}" method="post" class="newsletter-form">
                                    @csrf
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email" required="">
                                        <button type="submit"><i class="flaticon-paper-plane-1"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom clearfix">
            <div class="copyright pull-left"><h5>&copy;2020 CopyRight <a href="">Example</a>. All rights reserved.</h5></div>
            <ul class="footer-nav pull-right clearfix">
                <li><a href="{{url('home')}}">Home</a></li>
                <li><a href="{{url('about')}}">AboutUs</a></li>
                <li><a href="{{url('shop')}}">Shop</a></li>
                <li><a href="{{url('pricing')}}">Pricing Plan</a></li>
                <li><a href="{{url('faq')}}">Faq</a></li>
            </ul>
        </div>
    </div>
</footer>
<!-- main-footer end -->
<!--Scroll to top-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="fa fa-arrow-up"></span>
</button>
</div>

<!-- jequery plugins -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/owl.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/validation.js"></script>
<script src="assets/js/jquery.fancybox.js"></script>
<script src="assets/js/appear.js"></script>
<script src="assets/js/scrollbar.js"></script>
<script src="assets/js/nav-tool.js"></script>
<script src="assets/js/script.js"></script>

<script type="text/javascript" src="assets/js/propeller.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wnumb/1.1.0/wNumb.min.js"></script>
<script src="assets/js/bootstrap-input-spinner.js"></script>
{{--<script src="assets/js/freshslider.1.0.0.js"></script>--}}
<script>
    $("input[type='number']").inputSpinner();
</script>
{{--<script src="assets/js/nouislider.js"></script>--}}
@jquery
@toastr_js
@toastr_render
</body><!-- End of .page_wrapper -->
</html>
