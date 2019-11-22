(function($) {
    'use strict';


    $(document).ready(function() {

        //Sticky Plugin
        
        var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
            var stickyHeight = sticky.outerHeight();
            var stickyTop = stickyWrapper.offset().top;
            if (scrollElement.scrollTop() >= stickyTop) {
                stickyWrapper.height(stickyHeight);
                sticky.addClass('is-sticky');
                $('.search-icon').hide();
            } else {
                sticky.removeClass('is-sticky');
                stickyWrapper.height('auto');
                $('.search-icon').show();
            }
        };

        //Find all data-toggle="sticky-onscroll" elements
        $('[data-toggle="sticky-onscroll"]').each(function() {
            var sticky = $(this);
            var stickyWrapper = $('<div>').addClass('sticky-wrapper');
            sticky.before(stickyWrapper);
            sticky.addClass('sticky');

            // Scroll & resize events
            $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
                stickyToggle(sticky, stickyWrapper, $(this));
            });

            // On page load
            stickyToggle(sticky, stickyWrapper, $(window));
        });

        
        //Select nice plugin
        $('select').niceSelect();
        

        //Video popup
        $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
            type: 'iframe',
            mainClass: 'mfp-fade',
            preloader: true
        });

        //Search Icon Page Search
        $('.icon').click(function(){
            $('.search').toggleClass('active');
        });

        //Bottom to top  Plugin

        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 0) {
                $('#scroll').fadeIn();
            } else {
                $('#scroll').fadeOut();
            }
        });

        $('#scroll').on('click', function() {
            $('html, body').animate(
                {
                    scrollTop: 0
                },
                800
            );
            return false;
        });



        //Home-01 Banner-slider
        $('.banner-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
             navText: [
                "<i class='fa fa-arrow-left'></i>",
                "<i class='fa fa-arrow-right'></i>"
            ],
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        //Home-02 Banner-slider
        $('.h2-banner-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            autoplay: true,
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

        //Home-01 Testimonial-slider
        $('.testimonial-img-slider').owlCarousel({
            loop: true,
            margin: 10,
            autoplay: false,
            navText: [
                "<i class='fa fa-chevron-left'></i>",
                "<i class='fa fa-chevron-right'></i>"
            ],
            nav: true,
            autoplaySpeed: 1000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
        
        //Home 02 Testimonial-slider
        $('.home2-testimonial').owlCarousel({
            loop: true,
            autoplay: false,
            nav: false,
            autoplaySpeed: 2000,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });
         
       //Counter Plugin
        $('.counter').counterUp({
            delay: 10,
            time: 2000
        });
        $('.counter').addClass('animated fadeInDown');

       //Wow.js Plugin
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated', 
            offset: 0, 
            mobile: true, 
            live: true, 
            callback: function(box) {
                
            },
            scrollContainer: null 
        });
        wow.init();
    });


})(jQuery);
