jQuery(document).ready(function ($) {
    'use strict';
    //   wow
    new WOW().init();
    // end wow
    // Jquery Carousel
    function supermartket_init_owl_carousel() {

        $('.supermartket-owl-carousel').each(function () {

            var $this = $(this),
                $loop = $this.attr('data-loop') == 'yes',
                $numberItem = parseInt($this.attr('data-number')),
                $Nav = $this.attr('data-navcontrol') == 'yes',
                $Dots = $this.attr('data-dots') == 'yes',
                $autoplay = $this.attr('data-autoplay') == 'yes',
                $autoplayTimeout = parseInt($this.attr('data-autoplaytimeout')),
                $marginItem = parseInt($this.attr('data-margin')),
                $rtl = $this.attr('data-rtl') == 'yes',
                $autoHeight = $this.attr('data-autoheight') == 'yes',
                $resNumber = {
                    0: {
                        items: 1
                    }
                }; // Responsive Settings

            $numberItem = (isNaN($numberItem)) ? 1 : $numberItem;
            $autoplayTimeout = (isNaN($autoplayTimeout)) ? 6000 : $autoplayTimeout;
            $marginItem = (isNaN($marginItem)) ? 0 : $marginItem;

            if (!$this.is('.owl-carousel')) {
                $this.addClass('owl-carousel');
            }

            //console.log($Nav);

            switch ($numberItem) {

                case 1 :
                    $resNumber = {
                        0: {
                            items: 1
                        }
                    }
                    break;

                case 2 :
                    $resNumber = {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 1
                        },
                        768: {
                            items: 2
                        },
                        992: {
                            items: $numberItem
                        }
                    }
                    break;

                case 3 :
                    $resNumber = {
                        0: {
                            items: 1
                        },
                        400: {
                            items: 2
                        },
                        480: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: $numberItem
                        }
                    }
                    break;
                case 4 :
                    $resNumber = {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: $numberItem
                        }
                    }
                    break;
                case 5 :
                    $resNumber = {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 3
                        },
                        1200: {
                            items: $numberItem
                        }
                    }
                    break;
                default : // $numberItem > 4
                    $resNumber = {
                        0: {
                            items: 1
                        },
                        480: {
                            items: 2
                        },
                        768: {
                            items: 3
                        },
                        992: {
                            items: 3
                        },
                        1024: {
                            items: 5
                        },
                        1280: {
                            items: 6
                        },
                        1800: {
                            items: $numberItem
                        }
                    }
                    break;
            } // Endswitch


            $(this).owlCarousel({
                items: $numberItem,
                loop: $loop,
                nav: $Nav,
                navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
                navContainer: false,
                dots: $Dots,
                autoplay: $autoplay,
                autoplayTimeout: $autoplayTimeout,
                autoHeight: $autoHeight,
                margin: $marginItem,
                //responsiveClass:true,
                rtl: $rtl,
                responsive: $resNumber,
                autoplayHoverPause: true,

                //center: true,
                onRefreshed: function () {
                    var total_active = $this.find('.owl-item.active').length;
                    var i = 0;

                    $this.find('.owl-item').removeClass('active-first active-last');
                    $this.find('.owl-item.active').each(function () {
                        i++;
                        if (i == 1) {
                            $(this).addClass('active-first');
                        }
                        if (i == total_active) {
                            $(this).addClass('active-last');
                        }
                    });
                },
                onTranslated: function () {
                    var total_active = $this.find('.owl-item.active').length;
                    var i = 0;

                    $this.find('.owl-item').removeClass('active-first active-last');
                    $this.find('.owl-item.active').each(function () {
                        i++;
                        if (i == 1) {
                            $(this).addClass('active-first');
                        }
                        if (i == total_active) {
                            $(this).addClass('active-last');
                        }
                    });
                },
                onResized: function () {
                    //essence_set_equal_columns();
                }
            });

        });
    }

    if ($('.product-thumbs').length) {
        supermartket_init_owl_carousel();
    }
    /* ---------------------------------------------
     Owl carousel
     --------------------------------------------- */
    function kt_carousel(){
        $('.owl-carousel').each(function(){
            var config = $(this).data();
            config.navText = ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'];
            var animateOut = $(this).data('animateout');
            var animateIn = $(this).data('animatein');
            var smartSpeed = $(this).data('smartspeed');

            if(typeof animateOut != 'undefined' ){
                config.animateOut = animateOut;
            }
            if(typeof animateIn != 'undefined' ){
                config.animateIn = animateIn;
            }

            if( typeof smartSpeed != 'undefined'){
                config.smartSpeed = smartSpeed;
            }else{
                config.smartSpeed = 500;
            }
            var owl = $(this);
            owl.owlCarousel(config);
        });
    }
    /* ---------------------------------------------
     content slide-home1
     --------------------------------------------- */
    function right_asblute_home1() {
        var width_window = $(window).width();
        var width_container = $('header .container').width();
        var width_cart = $('#categories-menu').width();
        var width_cart2 = $('.category-drop-list').width();
        var right_asblute = width_window - width_container;
        $('.banner-asblute-right').css('right', right_asblute / 2);
        $('.banner-asblute-left').css('left', right_asblute / 2);
        $('.mega-menu').css('width', width_container - width_cart);
        $('.header-style4 .mega-menu').css('width', width_container - width_cart2);
        $('.banner-home1 .owl-nav .owl-prev').css('left', right_asblute / 2 + 210);
        $('.banner-home1 .owl-nav .owl-next').css('right', right_asblute / 2 + 230);

    };
    //MENU DROPDOW
    
    if ($(window).width() > 1024) {
        //MENU DROPDOW
        $(".menu li.has-childrent,.has-mega").append("<span class='show-submenu'><i class='fa fa-angle-down' aria-hidden='true'></i></span>");
    }
    // click grid categories
    $('.click-grid').on('click', function(e) {
        $('.products-categories').addClass('categories-grid');
        $('.products-categories').removeClass('categories-list');
        $('.click-grid').addClass('color-active');
        $('.click-list').removeClass('color-active');
        e.stopPropagation();
    });
    $('.click-list').on('click', function(e) {
        $('.products-categories').addClass('categories-list');
        $('.products-categories').removeClass('categories-grid');
        $('.click-list').addClass('color-active');
        $('.click-grid').removeClass('color-active');
        e.stopPropagation();
    });
    $('.close-side-top').on('click', function(e) {
        $('.shop-sidebar').toggleClass('hiden-drop');
        $('.shop-sidebar-content').slideToggle( 'slow', 'linear');
        e.stopPropagation();
    });

    //hover icon cart menu
    $('.icon-cart').on( 'hover', function(e) {
        if ($('.icon-cart li').hasClass('mini_cart_item')) {
            $('.no-item').hide();
            $('.header-element-content').show();
        }
        else {
            $('.no-item').show();
            $('.header-element-content').hide();
        }
        e.stopPropagation();
    });

    // Slide home 1
    if ($('.slide-bx .slide-container').length > 0) {
        $('.slide-bx .slide-container').bxSlider({
            pagerCustom: '.slide-bx .thumbs',
            controls: false,
            auto: false
        });
    };
    //menu sticky
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        var header_h = $('header').outerHeight();
        var nav_h = $('.menu-primary').outerHeight();
        if ($(window).width() > 1024) {

            if (scroll > (header_h - nav_h)){
                $('.menu-primary').addClass('menu-fixed');
                $('.sub-menu').removeClass('sub-menu-open');
                $('#categories-menu').removeClass('sub-menu-show');
                if($('.header').hasClass('header-style1') || $('.header').hasClass('header-style2')|| $('.header').hasClass('header-style3')|| $('.header').hasClass('header-style4')|| $('.header').hasClass('header-style6')) {
                    if(!$('.category-drop-list-show').length){
                        $('.category-drop-list').slideUp(800);
                    }
                };

            } else {
                $('.menu-primary').removeClass('menu-fixed');
                $('#categories-menu').addClass('sub-menu-show');
                if($('.header').hasClass('header-style1') || $('.header').hasClass('header-style3')||  $('.header').hasClass('header-style6')) {
                    if(!$('.category-drop-list-show').length){
                        $('.category-drop-list').slideDown(800);
                    }
                };
                if($('.header').hasClass('header-style2')||$('.header').hasClass('header-style4')) {
                    if(!$('.category-drop-list-show').length){
                        $('.category-drop-list').slideUp(800);
                    }
                };
            }
            if (scroll > 400){

            }else {

            }
        }
    });

    $("#primary-navigation").mmenu({
        extensions: ['effect-slide-menu', 'pageshadow'],
        navbar: {
            title: 'Menu'
        },
        offCanvas: {
            "position": "right"
        },
        navbars: [
            {
                position: 'top',
                content: [
                    'prev',
                    'title',
                    'close'
                ]
            }
        ]
    }, {
        // configuration
        clone: true
    });
    $("#categories-menu").mmenu({
        extensions: ['effect-slide-menu', 'pageshadow'],
        navbar: {
            title: 'Menu'
        },
        navbars: [
            {
                position: 'top',
                content: [
                    'prev',
                    'title',
                    'close'
                ]
            }
        ]
    }, {
        // configuration
        clone: true
    });
    // EQUAL ELEM
    function super_equal_elems() {
        $('.equal-container').each(function () {
            var $this = $(this);
            if ($this.find('.equal-elem').length) {
                $this.find('.equal-elem').css({
                    'height': 'auto'
                });
                var elem_height = 0;
                $this.find('.equal-elem').each(function () {
                    var this_elem_h = $(this).height();
                    if (elem_height < this_elem_h) {
                        elem_height = this_elem_h;
                    }
                });
                $this.find('.equal-elem').height(elem_height);
            }
        });
    }
    // EQUAL ELEM
    function super_equal_elems_loaded() {
        $('.equal-container_loaded').each(function () {
            var $this = $(this);
            if ($this.find('.equal-elem').length) {
                $this.find('.equal-elem').css({
                    'height': 'auto'
                });
                var elem_height = 0;
                $this.find('.equal-elem').each(function () {
                    var this_elem_h = $(this).height();
                    if (elem_height < this_elem_h) {
                        elem_height = this_elem_h;
                    }
                });
                $this.find('.equal-elem').height(elem_height);
            }
        });
    }
    if($(window).width()> 767) {
        super_equal_elems();
        // END EQUAL ELEM
        $(window).resize(function () {
            super_equal_elems();
            HeightSlideThumb();
            super_equal_elems_loaded();
        });
    };
    //Woocommerce plus and minius
    $(document).on('click', '.quantity .plus, .quantity .minus', function (e) {

        // Get values
        var $qty = $(this).closest('.quantity').find('.qty'),
            currentVal = parseFloat($qty.val()),
            max = parseFloat($qty.attr('max')),
            min = parseFloat($qty.attr('min')),
            step = $qty.attr('step');

        // Format values
        if (!currentVal || currentVal === '' || currentVal === 'NaN') currentVal = 0;
        if (max === '' || max === 'NaN') max = '';
        if (min === '' || min === 'NaN') min = 0;
        if (step === 'any' || step === '' || step === undefined || parseFloat(step) === 'NaN') step = 1;

        // Change the value
        if ($(this).is('.plus')) {

            if (max && ( max == currentVal || currentVal > max )) {
                $qty.val(max);
            } else {
                $qty.val(currentVal + parseFloat(step));
            }

        } else {

            if (min && ( min == currentVal || currentVal < min )) {
                $qty.val(min);
            } else if (currentVal > 0) {
                $qty.val(currentVal - parseFloat(step));
            }

        }

        // Trigger change event
        $qty.trigger('change');

        e.preventDefault();

    });



    //room image product
    $('.img-room').on('click', function (e) {
        $('body').addClass('room-big');
    })
    $('.product-box-text').on('click', function (e) {
        $('body').removeClass('room-big');
    })

    //FUNFACT
    $('.ts-funfact').appear(function () {
        var count_element = $('.funfact-number', this).html();
        $(".funfact-number", this).countTo({
            from: 0,
            to: count_element,
            speed: 2500,
            refreshInterval: 50,
        });
    });

    /* -- Price Filter */
    $('.slider-range').each(function(e) {
        $(this).slider({
            range: true,
            min: 3,
            max: 6789,
            values: [3, 6789],
            slide: function (event, ui) {
                $(this).find('.amount').html('$' + ui.values[0])
                $(this).find('.amount2').html('$' + ui.values[1]);
            }
        });
        $(this).find('.amount').html('$' + $(this).slider('values', 0));
        $(this).find('.amount2').html(' $' + $(this).slider('values', 1));
    });

    //check out shipping
    $('.checkout-box').each(function () {
        var $this = $(this);
        $this.find('.check-out-click').on('click', function (e) {
            $this.find('.checkout-toggle').fadeToggle( '3000', 'linear', '10000');
        })
    });
    /*  [COUNT DOWN Style 2]
     - - - - - - - - - - - - - - - - - - - - */
    $('.host-deals-slide-style-1').owlCarousel({
        items:1,
        margin:10,
        autoplay: true,
        nav:true,
        navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
        stagePadding:0,
        smartSpeed:1000,
        loop:true,
        autoplayTimeout:5000,
        autoplayHoverPause:true,
        dots:true,
        animateOut: 'slideOutUp',
        animateIn: 'slideInUp',
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:1
            }
        }
    });
    $('.host-deals-slide-style-2').owlCarousel({
        items:1,
        margin:10,
        autoplay: true,
        nav:false,
        navText: ['<span class="fa fa-angle-left"></span>', '<span class="fa fa-angle-right"></span>'],
        stagePadding:0,
        smartSpeed:1000,
        loop:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        dots:false,
        animateOut: 'slideOutUp',
        animateIn: 'slideInUp',
        responsive:{
            0:{
                items:1
            },
            480:{
                items:1
            },
            768:{
                items:1
            },
            992:{
                items:1
            }
        }
    });
    /*  [COUNT DOWN ]
     - - - - - - - - - - - - - - - - - - - - */
    $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            var fomat ='<div class="box-count box-days"><div class="number">%D</div><div class="text">Days</div></div><div class="box-count box-hours"><div class="number">%H</div><div class="text">Hrs</div></div><div class="box-count box-min"><div class="number">%M</div><div class="text">Mins</div></div><div class="box-count box-secs"><div class="number">%S</div><div class="text">Secs</div></div>';
            $this.html(event.strftime(fomat));
        });
    });
    // click categorires menu
    $('.click-categories').on('click', function(e) {
        $('.category-drop-list').slideToggle(800).toggleClass('category-drop-list-show');
        $('#categories-menu').toggleClass('sub-menu-show');
        $(this).toggleClass('show-before');
        e.stopPropagation();
    });
    $('.categories-filter .show-submenu').on('click',function(e){
        var $this = $(this);
        var thisLi = $this.closest('li');
        var thisUl = thisLi.closest('ul');

        if ( thisLi.is('.sub-menu-open') ) {
            thisLi.find('> .sub-menu').stop().slideUp('fast');
            thisLi.removeClass('sub-menu-open').find('> a').removeClass('active');
        }
        else{
            thisUl.find('> li.sub-menu-open > .sub-menu').stop().slideUp('fast');
            thisUl.find('> li.sub-menu-open').removeClass('sub-menu-open');
            thisUl.find('> li > a.active').removeClass('active');
            thisLi.find('> .sub-menu').stop().slideDown('fast');
            thisLi.addClass('sub-menu-open').find('> a').addClass('active');
        };
        e.preventDefault();
        e.stopPropagation();
    });
    /*  [ more Categorie ]
     - - - - - - - - - - - - - - - - - - - - */
    $(document).on('click','.open-cate',function(){
        $(this).addClass('colse-cate').removeClass('open-cate').html('Close');
        $('.category-drop-list').addClass('category-show-more');
    })
    /* Close Categorie */
    $(document).on('click','.colse-cate',function(){
        $(this).addClass('open-cate').removeClass('colse-cate').html('More Categories');
        $('.category-drop-list').removeClass('category-show-more');
        return false;
    })

    $('.main-content,.banner').on('click', function (e) {
        $('.category-drop-list').removeClass('sub-menu-open');
    });
    $(window).load(function () {
        supermartket_init_owl_carousel();
        super_equal_elems_loaded();
        right_asblute_home1();
        if($(window).width()> 767) {
            HeightSlideThumb();
        }
        if($('.tab-content').length){
            super_equal_elems();
        }
    });
    /* ---------------------------------------------
     Scripts resize
     --------------------------------------------- */
    $(window).on("resize", function () {
        right_asblute_home1();
    });
    /* ---------------------------------------------
     Scripts ready
     --------------------------------------------- */
    right_asblute_home1();
    kt_carousel()
    //Count Tab logo brand
    $('.tab-logo-brand').each(function () {
        var count_item = $('.tab-logo-brand .nav-pills li').length;
        $(this).addClass("has-" + count_item + "tabs")
    });
    //Height element .slide-product-with-thumb
    function HeightSlideThumb(){
        var height_element = $('.slide-product-with-thumb .thumbs').outerHeight() + 1;
        var height_element2 = height_element - 2;
        $('.slide-product-with-thumb').css('height', height_element);
        $('.slide-product-with-thumb .bx-viewport').css('height', height_element2 );
        var height_element2 = $('.slide-thumbs .thumbs').outerHeight() + 4;
        $('.slide-thumbs').css('height', height_element2);
    }
    //BACK TO TOP
    $('.backtotop').on('click', function (e) {
        $('html,body').animate({scrollTop : 0},800);
        return false;
    })
    $(window).scroll(function() {
        ts_update_back_to_top();
    });
    ts_update_back_to_top();
    function ts_update_back_to_top() {
        if($(window).scrollTop() > 180) {
            $('.backtotop').addClass('ts-block')
        } else {
            $('.backtotop').removeClass('ts-block')
        }
    }

});