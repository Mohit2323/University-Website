 jQuery(document).ready(function () {
    'use strict';
    /*** =====================================
    * Mixitup
    * =====================================***/
    $('#mixitup-grid').mixItUp();
    $('.filter-options li:first-child a').addClass("active");

    /*** =====================================
    * 	Mobile Menu
    * =====================================***/
	$('.mobile-background-nav .has-submenu').on('click',function(e) {
	  	e.preventDefault();
	    var $this = $(this);
	    if ($this.next().hasClass('menu-show')) {
	        $this.next().removeClass('menu-show');
	        $this.next().slideUp(350);
	    } else {
	        $this.parent().parent().find('li .dropdown').removeClass('menu-show');
	        $this.parent().parent().find('li .dropdown').slideUp(350);
	        $this.next().toggleClass('menu-show');
	        $this.next().slideToggle(350);
	    }
	});
	$('.mobile-menu-close i').on('click',function(){
	     $('.mobile-background-nav').removeClass('in');
	});

	$('#humbarger-icon').on('click',function(e){
        e.preventDefault();
	     $('.mobile-background-nav').toggleClass('in');
	});
    /*** =====================================
    * Easy Menu
    * =====================================***/
	(function($) {
	    $.fn.menumaker = function(options) {
	        var cssmenu = $(this),
	            settings = $.extend({
	                format: "dropdown",
	                sticky: false
	            }, options);
	        return this.each(function() {
	            $(this).find(".button").on('click', function() {
	                $(this).toggleClass('menu-opened');
	                var mainmenu = $(this).next('ul');
	                if (mainmenu.hasClass('open')) {
	                    mainmenu.slideToggle().removeClass('open');
	                } else {
	                    mainmenu.slideToggle().addClass('open');
	                    if (settings.format === "dropdown") {
	                        mainmenu.find('ul').show();
	                    }
	                }
	            });
	            cssmenu.find('li ul').parent().addClass('has-sub');
	            var multiTg;
	            multiTg = function() {
	                cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
	                cssmenu.find('.submenu-button').on('click', function() {
	                    $(this).toggleClass('submenu-opened');
	                    if ($(this).siblings('ul').hasClass('open')) {
	                        $(this).siblings('ul').removeClass('open').slideToggle();
	                    } else {
	                        $(this).siblings('ul').addClass('open').slideToggle();
	                    }
	                });
	            };
	            if (settings.format === 'multitoggle') multiTg();
	            else cssmenu.addClass('dropdown');
	            if (settings.sticky === true) cssmenu.css('position', 'fixed');
	            var resizeFix;
	            resizeFix = function() {
	                var mediasize = 1000;
	                if ($(window).width() > mediasize) {
	                    cssmenu.find('ul').show();
	                }
	                if ($(window).width() <= mediasize) {
	                    cssmenu.find('ul').hide().removeClass('open');
	                }
	            };
	            resizeFix();
	            return $(window).on('resize', resizeFix);
	        });
	    };
	})(jQuery);
	 $("#easy-menu").menumaker({
        format: "multitoggle"
    });
    /*** =====================================
    * Upcomming Event
    * ==================================== ***/
    $(".upcommig-event-carousel").slick({
        dots: false,
        vertical: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: '<div class="slick-arrow-prev base-color"><i class="fa fa-angle-up"></i></div>',
        nextArrow: '<div class="slick-arrow-next base-color"><i class="fa fa-angle-down"></i></div>',
        responsive: [{
         breakpoint: 768,
         settings: {
           slidesToShow: 1,
           slidesToScroll: 1,
           autoplay: true,
           autoplaySpeed: 1500,
           arrows : false,
         }
       }]
      });
    /*** =====================================
    * Testimonial
    * ==================================== ***/
    $(".fund-testimonial-carousel").slick({
        dots: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows : false,
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: false
            }
        }]
    });
    /*** =====================================
    * Client Carousel
    * ==================================== ***/
    $(".client-carusel").slick({
        dots: false,
        slidesToShow: 6,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows : false,
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                centerMode: false
            }
        }]
    });
    /*** =====================================
    * About us carousel
    * ==================================== ***/
    $(".about-us-carousel").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows : false,
    });
    /** =====================================
    *   Select 2
    * =====================================**/
    $('.hide-search--dropdown').select2({
        minimumResultsForSearch: -1
    });
    $('.selectpicker').select2({

    });
    $(".pament-select").select2({
      tags: true,
      createTag: function (params) {
        return {
          id: params.term,
          text: params.term,
          newOption: true
        }
      },
      templateResult: function (data) {
        var $result = $("<span></span>");
        $result.text(data.text);
        if (data.newOption) {
          $result.append(" <em>(new)</em>");
        }
        return $result;
      }
    })
    /** =====================================
    *  Gallery  Popup
    * =====================================**/
    $(".gallery-item").colorbox({
        rel:'group4',
        slideshow:false,
        transition:"fade",
        onOpen:function(){
            $('body').addClass('popup-open');
        },
        onClosed:function(){
            $('body').removeClass('popup-open');
        }
    });
    /** =====================================
    * Counter
    * =====================================***/
    if( $('.counter-item__count').length){
        $('.counter-item__count').counterUp({
            delay: 10,
            time: 3000
        });
    }
    /** =====================================
    * Event Countdown
    * =====================================***/
    function musicaEvents() {
        var musicaEvent = $('.musica-counter-active');
        var len = musicaEvent.length;
        for (var i = 0; i < len; i++) {
            var musicaEventId = '#' + musicaEvent[i].id,
            dataValueYear = $(musicaEventId).attr('data-value-year'),
			dataValueMonth = $(musicaEventId).attr('data-value-month'),
			dataValueDay = $(musicaEventId).attr('data-value-day'),
			dataValueZone = $(musicaEventId).attr('data-value-zone');
            $(musicaEventId).countdown({
				labels: ['Years', 'Months', 'Weeks', 'Days', 'Hours', 'Mins', 'Secs'],
		        until: $.countdown.UTCDate(dataValueZone, dataValueYear, dataValueMonth, dataValueDay),
		        format: 'dHMS',
		        padZeroes: true
		    });
        }
    }
    if ($('.musica-counter-active').length) {
        musicaEvents();
    }
    /*** =====================================
    * Upcomming Event Carusel
    * ==================================== ***/
    $("#upcomming-event-carousel").slick({
        dots: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1500,
        arrows : false,
    });
    /** =====================================
    *   Search Box
    * =====================================**/
   	$('.search-box a').on('click', function(e) {
        e.preventDefault();
        $('.top-search-input-wrap').addClass('show');
   	});
   	$(".top-search-input-wrap .top-search-overlay, .top-search-input-wrap .close-icon").on('click', function(){
        $('.top-search-input-wrap').removeClass('show');
   	});
    /*** =====================================
    * Preloder
    * ==================================== ***/
	$(window).on('load', function(){
        /** ===== Preloder ========**/
	    $('.preloader').fadeOut();
	});
    /*** =====================================
    * Progress
    * ==================================== ***/
    jQuery(window).on('scroll', function() {
      var windowHeight = $(window).height();
      function kalProgress() {
         var progress = $('.progress-rate');
         var len = progress.length;
         for (var i = 0; i < len; i++) {
             var progressId = '#' + progress[i].id;
             var dataValue = $(progressId).attr('data-value');
             $(progressId).css({'width':dataValue+'%'});
         }
      }
      var progressRateClass = $('.progress-item');
       if ((progressRateClass).length) {
           var progressOffset = $(".progress-item").offset().top - windowHeight;
           if ($(window).scrollTop() > progressOffset) {
               kalProgress();
           }
       }
    });
    /** =====================================
    *  Color Swicher
    * ===================================== **/
	$('.swhicher-button button').on('click', function(){
		var buttonAttr = $(this).attr('data-att');
		$('link[data-style="color-style"]').attr('href','css/'+buttonAttr+'.css');
        $('.logo a img, .footer-logo a img').attr('src','images/'+buttonAttr+'-logo.png');
	});
	$('.setting-button-wrapper .setting-button').on('click', function(){
		$('.color-shicher-wraper').toggleClass('show-color');
	});
    /*** =====================================
    *   Fixed Menu
    * =====================================*/
    $(document).on('click','.tobar-fixed-check label',function(){
        $('.main-menu-area').toggleClass('main-menu-fixed');
        if($('.main-menu-fixed').length){
            var win = $(document);
            var menuTerget = $('.main-menu-fixed');
            var menuOffset = menuTerget.offset().top;
            win.on('scroll', function() {
             if (menuOffset < win.scrollTop()) {
                 menuTerget.addClass('main-menu-fix-active');
             } else {
                 menuTerget.removeClass('main-menu-fix-active');
             }
            });
        }
        if(!$('.main-menu-fixed').length){
            $('.main-menu-area').removeClass('main-menu-fix-active');
        }
    });
    $('.backtop-top-check label').on('click',function(){
        $('#toTop').toggleClass('toTop-hide');
    });
    $('.removetopbar label').on('click',function(){
        $('.top-bar').toggleClass('hide-topbar');
        $('.slider-area').toggleClass('fullscreen-container100')
    });


    /** =====================================
    *  Back to top
    * ===================================== **/
    $(window).scroll(function(){
        if ($(this).scrollTop()>10) {
            $('#toTop').addClass('backtop-top-show');
        } else {
            $('#toTop').removeClass('backtop-top-show');
        }
    })
    $("#toTop").on('click',function (e) {
        e.preventDefault();
       $("html, body").animate({scrollTop: 0}, 1000);
    });
    /** =====================================
    *  Wow JS
    * ===================================== **/
    if($('.wow').length){
        var wow=new WOW( {
            boxClass: 'wow', // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset: 0, // distance to the element when triggering the animation (default is 0)
            mobile: false, // trigger animations on mobile devices (default is true)
            live: true, // act on asynchronously loaded content (default is true)
            callback: function(box) {}
            , scrollContainer: true // optional scroll container selector, otherwise use window
        }
        );
    //    wow.init();
    }
    /** =====================================
    *  Lazy load
    * ===================================== **/
    if($('.lazy').length){
        $('.lazy').lazy({
           effect: 'fadeIn',
          // delay:5000,
           beforeLoad: function(element) {
              console.log("start loading ");
               console.log(element);
               element.siblings('.loader').addClass("loder-hide");
               //alert(element);
               //$("#ab").text(element);
            //  debugger;
              //var target = $(this).parent
          },
           onLoad: function(element){
             //  console.log("Imon");
             //  element.siblings('.loader').addClass("loder-show2");
           }
        });
    }
    /**
    * =====================================
    * Contact Form submission
    * =====================================
    */
    $(function () {
        $('form#contact').on('submit', function (e) {
        	e.preventDefault();

        	$.post('post-contact-form.php', $(this).serialize() )
        	.done(function(data){
        	  $('.contact-form').fadeOut('slow', function(){
        		  $('.contact-form').fadeIn('slow').html(data);
        		});
        	})
        	.fail(function(){
        		alert('Failed to submit. Please Try again.');
        	});
        });
    });










});
