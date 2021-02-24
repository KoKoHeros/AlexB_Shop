(function($) {

    "use strict";

    //Update Header Style and Scroll to Top
    function headerStyle() {
        if($('.main-header').length){
            var windowpos = $(window).scrollTop();
            var siteHeader = $('.main-header');
            var scrollLink = $('.scroll-top');
            if (windowpos >= 110) {
                siteHeader.addClass('fixed-header');
                scrollLink.addClass('open');
            } else {
                siteHeader.removeClass('fixed-header');
                scrollLink.removeClass('open');
            }
        }
    }

    headerStyle();

    //Submenu Dropdown Toggle
    if($('.main-header li.dropdown ul').length){
        $('.main-header .navigation li.dropdown').append('<div class="dropdown-btn"><span class="fas fa-angle-down"></span></div>');

    }

    //Mobile Nav Hide Show
    if($('.mobile-menu').length){

        $('.mobile-menu .menu-box').mCustomScrollbar();

        var mobileMenuContent = $('.main-header .menu-area .main-menu').html();
        $('.mobile-menu .menu-box .menu-outer').append(mobileMenuContent);
        $('.sticky-header .main-menu').append(mobileMenuContent);

        //Dropdown Button
        $('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
            $(this).toggleClass('open');
            $(this).prev('ul').slideToggle(500);
        });
        //Dropdown Button
        $('.mobile-menu li.dropdown .dropdown-btn').on('click', function() {
            $(this).prev('.megamenu').slideToggle(900);
        });
        //Menu Toggle Btn
        $('.mobile-nav-toggler').on('click', function() {
            $('body').addClass('mobile-menu-visible');
        });

        //Menu Toggle Btn
        $('.mobile-menu .menu-backdrop,.mobile-menu .close-btn').on('click', function() {
            $('body').removeClass('mobile-menu-visible');
        });
    }

    // Scroll to a Specific Div
    if($('.scroll-to-target').length){
        $(".scroll-to-target").on('click', function() {
            var target = $(this).attr('data-target');
            // animate
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 1000);

        });
    }

    // Elements Animation
    if($('.wow').length){
        var wow = new WOW({
            mobile:       false
        });
        wow.init();
    }

    //Contact Form Validation
    if($('#contact-form').length){
        $('#contact-form').validate({
            rules: {
                username: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                phone: {
                    required: true
                },
                subject: {
                    required: true
                },
                message: {
                    required: true
                }
            }
        });
    }

    //Fact Counter + Text Count
    if($('.count-box').length){
        $('.count-box').appear(function(){

            var $t = $(this),
                n = $t.find(".count-text").attr("data-stop"),
                r = parseInt($t.find(".count-text").attr("data-speed"), 10);

            if (!$t.hasClass("counted")) {
                $t.addClass("counted");
                $({
                    countNum: $t.find(".count-text").text()
                }).animate({
                    countNum: n
                }, {
                    duration: r,
                    easing: "linear",
                    step: function() {
                        $t.find(".count-text").text(Math.floor(this.countNum));
                    },
                    complete: function() {
                        $t.find(".count-text").text(this.countNum);
                    }
                });
            }

        },{accY: 0});
    }


    //LightBox / Fancybox
    // if($('.lightbox-image').length) {
    // 	$('.lightbox-image').fancybox({
    // 		openEffect  : 'fade',
    // 		closeEffect : 'fade',
    // 		helpers : {
    // 			media : {}
    // 		}
    // 	});
    // }


    //Tabs Box
    if($('.tabs-box').length){
        $('.tabs-box .tab-buttons .tab-btn').on('click', function(e) {
            e.preventDefault();
            var target = $($(this).attr('data-tab'));

            if ($(target).is(':visible')){
                return false;
            }else{
                target.parents('.tabs-box').find('.tab-buttons').find('.tab-btn').removeClass('active-btn');
                $(this).addClass('active-btn');
                target.parents('.tabs-box').find('.tabs-content').find('.tab').fadeOut(0);
                target.parents('.tabs-box').find('.tabs-content').find('.tab').removeClass('active-tab');
                $(target).fadeIn(300);
                $(target).addClass('active-tab');
            }
        });
    }



    //Accordion Box
    if($('.accordion-box').length){
        $(".accordion-box").on('click', '.acc-btn', function() {

            var outerBox = $(this).parents('.accordion-box');
            var target = $(this).parents('.accordion');

            if($(this).hasClass('active')!==true){
                $(outerBox).find('.accordion .acc-btn').removeClass('active');
            }

            if ($(this).next('.acc-content').is(':visible')){
                return false;
            }else{
                $(this).addClass('active');
                $(outerBox).children('.accordion').removeClass('active-block');
                $(outerBox).find('.accordion').children('.acc-content').slideUp(300);
                target.addClass('active-block');
                $(this).next('.acc-content').slideDown(300);
            }
        });
    }


    //Main Slider Carousel
    if ($('.main-slider-carousel').length) {
        $('.main-slider-carousel').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            active: true,
            smartSpeed: 1000,
            autoplay: 6000,
            navText: [ '<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1200:{
                    items:1
                }
            }
        });
    }


    // clients-carousel
    if ($('.clients-carousel').length) {
        $('.clients-carousel').owlCarousel({
            loop:true,
            margin:70,
            nav:false,
            smartSpeed: 2000,
            autoplay: true,
            navText: [ '<span class="flaticon-left"></span>', '<span class="flaticon-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:2
                },
                600:{
                    items:3
                },
                800:{
                    items:4
                },
                1200:{
                    items:5
                }

            }
        });
    }


    // single-item-carousel
    if ($('.single-item-carousel').length) {
        $('.single-item-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:false,
            smartSpeed: 500,
            autoplay: true,
            navText: [ '<span class="flaticon-left"></span>', '<span class="flaticon-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:1
                },
                1200:{
                    items:1
                }

            }
        });
    }


    //two-column-carousel
    if ($('.two-column-carousel').length) {
        $('.two-column-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            smartSpeed: 500,
            autoplay: 1000,
            navText: [ '<span class="flaticon-left-1"></span>', '<span class="flaticon-right-1"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                600:{
                    items:1
                },
                800:{
                    items:2
                },
                1024:{
                    items:2
                }
            }
        });
    }


    //three-item-carousel
    if ($('.three-item-carousel').length) {
        $('.three-item-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            smartSpeed: 1000,
            autoplay: 500,
            navText: [ '<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                480:{
                    items:1
                },
                600:{
                    items:2
                },
                800:{
                    items:2
                },
                1024:{
                    items:3
                }
            }
        });
    }


    // Four Item Carousel
    if ($('.four-item-carousel').length) {
        $('.four-item-carousel').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            smartSpeed: 500,
            autoplay: 5000,
            navText: [ '<span class="fas fa-angle-left"></span>', '<span class="fas fa-angle-right"></span>' ],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:2
                },
                800:{
                    items:3
                },
                1024:{
                    items:3
                },
                1200:{
                    items:4
                }
            }
        });
    }


    //Add One Page nav
    if($('.scroll-nav').length) {
        $('.scroll-nav').onePageNav();
    }


    //Search Popup
    if($('#search-popup').length){

        //Show Popup
        $('.search-toggler').on('click', function() {
            $('#search-popup').addClass('popup-visible');
        });
        $(document).keydown(function(e){
            if(e.keyCode === 27) {
                $('#search-popup').removeClass('popup-visible');
            }
        });
        //Hide Popup
        $('.close-search,.search-popup .overlay-layer').on('click', function() {
            $('#search-popup').removeClass('popup-visible');
        });
    }



    //Hide Loading Box (Preloader)
    function handlePreloader() {
        if($('.preloader').length){
            $('.preloader').delay(200).fadeOut(500);
        }
    }


    // page direction
    function directionswitch() {
        if ($('.page_direction').length) {

            $('.direction_switch button').on('click', function() {
                $('body').toggleClass(function(){
                    return $(this).is('.rtl, .ltr') ? 'rtl ltr' : 'rtl';
                })
            });
        };
    }

	/*	=========================================================================
	 When document is Scrollig, do
	 ========================================================================== */

    jQuery(document).on('ready', function () {
        (function ($) {
            // add your functions
            directionswitch();
        })(jQuery);
    });

	/* ==========================================================================
	 When document is Scrollig, do
	 ========================================================================== */

    $(window).on('scroll', function() {
        headerStyle();
    });

    /* ==========================================================================
	 When document is loaded, do
	 ========================================================================== */

    $(window).on('load', function() {
        handlePreloader();
    });

})(window.jQuery);

$(document).ready(function() {
    $("#sub_image1").click(function() {
        image_src = $('#sub_image1').prop('src');
        $('.main_image').attr("src", image_src);
    });
});


$(document).ready(function() {
    $("#sub_image2").click(function() {
        image_src = $('#sub_image2').prop('src');
        $('.main_image').attr("src", image_src);
    });
});

$(document).ready(function() {
    $("#sub_image3").click(function() {
        image_src = $('#sub_image3').prop('src');
        $('.main_image').attr("src", image_src);
        $("sub_image3").toggleClass('active');
    });
});

$(document).ready(function() {
    $(".add_cart").click(function(event) {
        // alert(event.target.id)
        product_id = event.target.id;
        $.ajax({
            url: "/add_cart",
            type:'get',
            // url: '/add_cart',
            // cache: false,
            data:{
                product_id:product_id
            },
            success: function(result){
                if(result){
                    $('#alert_button').attr("data-message", result);
                    if(result=='This product is already exist in cart.'){
                        $('#alert_button').attr("data-type", "error");
                        document.getElementById("alert_button").click();


                    }
                    else {
                        $('#alert_button').attr("data-type", "success");
                        document.getElementById("alert_button").click();

                    }

                    // document.getElementById('alert_button').data-message=result;

                    // alert(result)
                }}
        });
    });
});

$("#purchase").click(function (){

    $.ajax({
        url: "/purchase",
        type:'get',
        success: function(result){
            if(result=='Not Registered'){
                document.getElementById('my-signin2').style.display = "block";
                // document.getElementById('purchase').style.display = "none";
                document.getElementById('purchase').style.display = "none";
                alert('Please Sign in with Google.')
            }
            else {
                // document.getElementById('purchase_area').style.display = "none";
                document.getElementById('purchase').style.display = "none";
                document.getElementById('pay_area').style.display = "block";
                document.getElementById('amount').value = result;

            }}

    });
});


$('#amount').click(function () {
    $(this).click='disable';
})
// $("#paypal").click(function (event){
//      $amount = event.target.name;
//     $.ajax({
//         url: "/payment",
//         type:'get',
//         data:{
//             amount:$amount
//         },
//         success: function(result){
//             if(result){
//                 document.getElementById('purchase_area').style.display = "block";
//                 document.getElementById('pay_area').style.display = "block";
//
//                 alert('Successfully payed!')
//             }
//         }
//
//     });
// });



$(document).ready(function() {
    $(".quantity-spinner").click(function(event) {
        product_id = event.target.id;
        if(event.target.value<1){event.target.value=1;}
        amount = event.target.value * event.target.alt;
        event.target.name= amount;
        $.ajax({
            url: "/change_quantity",
            type:'get',
            // cache: false,
            data:{
                product_id:product_id,
                quantity:event.target.value,
                price:event.target.alt
            },
            success: function(result) {
            }
        });
    });
});


$(document).ready(function() {
    $(".quantity-spinner").click(function(event) {
        product_id = event.target.id;
        if(event.target.value<1){event.target.value=1;}
        amount = event.target.value * event.target.alt;
        event.target.name= amount;
        $.ajax({
            url: "/change_quantity",
            type:'get',
            // cache: false,
            data:{
                product_id:product_id,
                quantity:event.target.value,
                price:event.target.alt
            },
            success: function(result) {
            }
        });
    });
});

// $(document).ready(function() {
//     $("#product_quantity").click(function(event) {
//         product_id = event.target.id;
//         if(event.target.value<1){event.target.value=1;}
//         amount = event.target.value * event.target.alt;
//         event.target.name= amount;
//         $.ajax({
//             url: "/change_quantity",
//             type:'get',
//             // cache: false,
//             data:{
//                 product_id:product_id,
//                 quantity:event.target.value,
//                 price:event.target.alt
//             },
//             success: function(result) {
//             }
//         });
//     });
// });

