/*global $,owl,smoothScroll,alert,Placeholdem,WOW,google*/
$(document).ready(function () {
    "use strict";

    $('[data-toggle="tooltip"]').tooltip({
        trigger: 'hover',
        placement: 'top',
        animate: true,
        delay: 50,
        container: 'body'
    });

    $('select').select2();

    $(".main-slider").owlCarousel({
        transitionStyle: "fadeUp",
        navigation: true,
        slideSpeed: 500,
        paginationSpeed: 400,
        singleItem: true,
        responsive: true,
        autoPlay: 5000,
        pagination: true,
        navigationText: ["<i class='zmdi zmdi-chevron-left slider-left'></i>", "<i class='zmdi zmdi-chevron-right slider-right'></i>"],
        stopOnHover: true
    });

    $(".client-slider").owlCarousel({
        transitionStyle: "fadeUp",
        navigation: false,
        slideSpeed: 500,
        paginationSpeed: 400,
        singleItem: true,
        responsive: true,
        autoPlay: 5000,
        pagination: true,
        stopOnHover: true
    });

    $(".team-slider").owlCarousel({
        navigation: true,
        slideSpeed: 200,
        responsive: true,
        autoPlay: 5000,
        pagination: false,
        items: 3,
        stopOnHover: true,
        mouseDrag: true,
        navigationText: ["<span class='testi-left'><i class='zmdi zmdi-chevron-left'></i></span>", "<span class='testi-right'><i class='zmdi zmdi-chevron-right'></i></span>"],
        itemsCustom: [
			[0, 1],
			[450, 1],
			[600, 1],
			[700, 2],
			[1000, 2],
			[1200, 3],
			[1400, 3],
			[1600, 3]
        ]
    });

    /* ---------------------------------------------
     Scrool To Top Button Function
    --------------------------------------------- */
    $(window).scroll(function () {
        if ($(this).scrollTop() > 500) {
            $(".toTop").css("right", "20px");
        } else {
            $(".toTop").css("right", "-60px");
        }
    });

    $(".toTop").on("click", function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500);
        return false;
    });


    /* ---------------------------------------------
     Add Sticky Header
    --------------------------------------------- */
    //    $(window).scroll(function () {
    //        if ($(this).scrollTop() > 40) {
    //            $('.header-content').addClass('sticky');
    //            $('.inner-header').removeClass('sticky');
    //        } else {
    //            $('.header-content').removeClass('sticky');
    //        }
    //    });


    $('input[type="radio"]').click(function () {
        if ($(this).attr('id') === 'doc') {
            $('.doc-role').css("display", "block");
        } else {
            $('.doc-role').css("display", "none");
        }
    });

    /* ---------------------------------------------
     Loader Screen
    --------------------------------------------- */
    $(window).load(function () {
        $("body").css('overflow-y', 'auto');
        $('.page-loader').fadeOut(1000);
    });


    //for smoth scroll
    smoothScroll.init({
        speed: 800,
        updateURL: false,
        offset: 50
    });

    var wow = new WOW({
        boxClass: 'wow', // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        mobile: true, // trigger animations on mobile devices (default is true)
        live: true,
        offset: 100,
        scrollContainer: null // optional scroll container selector, otherwise use window
    });
    wow.init();



    $('.open-search').click(function () {
        $('.search-flood').css({
            top: "0"
        });
    });

    $('.close-flood').click(function () {
        $('.search-flood').css({
            top: "-100%"
        });
    });

    $('.toggle-menu-button').click(function () {
        $(this).toggleClass('is-open');
        $('.main-nav').slideToggle();
    });

    $('.gallery-container').mixItUp();
    $('.gallery-filters li').click(function () {
        $(this).addClass('active').siblings().removeClass('active');
    });

    $('#lightgallery').lightGallery();

    //for Login area
    $('.show-login').on("click", function () {
        $('.login-area').stop();
        $('.login-area').slideToggle(400);
        $(this).toggleClass('active');
    });

    //for Login area
    $('.close-login').on("click", function () {
        $('.login-area').slideUp(400);
        $('.show-login').removeClass('active');
    });


    $('.map')
        .gmap3({
            center: [31.042308, 31.351923],
            zoom: 17
        })
        .marker([
            {
                position: [31.042308, 31.351923]
            }
        ])
        .on('click', function (marker) {
            marker.setIcon('http://maps.google.com/mapfiles/marker_green.png');
        });

});