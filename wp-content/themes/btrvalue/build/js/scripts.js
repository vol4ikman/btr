jQuery(document).ready(function(){

    init_home_slider();

    jQuery(document).foundation();

    new WOW().init();

});

jQuery(window).load(function() {
    if (jQuery(window).width() > 757) {
        jQuery('#status').fadeIn();
        jQuery('#preloader').delay(2000).fadeOut('slow');
    }
    jQuery('.off-canvas-list > .menu-item-has-children').addClass('vertical menu');
    loadingHome();
});

function init_home_slider(){
    if( jQuery('.home-slider').length ){
        jQuery('.home-slider').slick({
            rtl            : true,
            autoplay       : true,
            autoplaySpeed  : 4500,
            arrows         : false,
            dots           : false,
            cssEase        : 'linear',
            fade           : true,
            pauseOnFocus   : false,
            pauseOnHover   : false,
            waitForAnimate : true
        });

        if (jQuery(window).width() > 757) {
            jQuery('.home-slider').slick('slickPause');
            setTimeout(function() {
                jQuery('.home-slider').slick('slickPlay');
                if (jQuery(window).width() > 1024) {
                    jQuery('.slide-1 .tagline').textillate('in');
                    jQuery('.slide-1 .tagline').css('opacity', '1');
                } else {
                    jQuery('.slide-1 .tagline').animate({
                        opacity: 1
                    }, 1000);
                }
            }, 3000);
        }

        jQuery('.home-slider').on('beforeChange', function() {
            if (jQuery(window).width() > 757) {
                jQuery('.tagline').css('opacity', '0');
            }
        });

        jQuery('.home-slider').on('afterChange', function() {
            if (jQuery(window).width() > 757) {
                if (jQuery(window).width() > 1024) {
                    jQuery('.tagline').textillate('in');
                    jQuery('.tagline').css('opacity', '1');
                } else {
                    jQuery('.tagline').animate({
                        opacity: 1
                    }, 1000);
                }
            }
        });

        jQuery(window).resize(function() {
            jQuery('.slide-bg').width(jQuery(window).width());
            jQuery('.slide-bg').height(jQuery(window).height());
        });

    }
}

function loadingHome() {
    if ( jQuery(window).width() > 757) {
        jQuery('.slide-bg').width(jQuery(window).width());
        jQuery('.slide-bg').height(jQuery(window).height());
        jQuery('.home .header, .home-banner').addClass('animated');
        jQuery('.home .home-banner').addClass('fadeIn');

        jQuery('.home .home-banner').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
            jQuery('.home .header').addClass('fadeInDown');
            jQuery('.home .header').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
                jQuery('.header .logo a.trans span').addClass('animated pulse');
            });
        });

        // jQuery('.header .logo a.trans span').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        //     jQuery('.home .overlap').addClass('fadeInUp');
        //     if (jQuery(window).width() > 1024) {
        //         jQuery('.home .main, .home .who-we-are-section, .home .team-section').each(function() {
        //             var cur = jQuery(this);
        //             if (cur.isOnScreen()) {
        //                 if (!cur.hasClass("animated")) {
        //                     if (cur.hasClass("staircase")) {
        //                         var delayTime = cur.attr('delay');
        //                         setTimeout(function() {
        //                             cur.addClass("animated fadeInUp");
        //                         }, delayTime);
        //                     } else {
        //                         cur.addClass("animated fadeInUp");
        //                     }
        //                 }
        //                 ;
        //             }
        //             ;jQuery(window).scroll(function() {
        //                 if (cur.isOnScreen()) {
        //                     if (!cur.hasClass("animated")) {
        //                         if (cur.hasClass("staircase")) {
        //                             var delayTime = cur.attr('delay');
        //                             setTimeout(function() {
        //                                 cur.addClass("animated fadeInUp");
        //                             }, delayTime);
        //                         } else {
        //                             cur.addClass("animated fadeInUp");
        //                         }
        //                     }
        //                     ;
        //                 }
        //                 ;
        //             });
        //         });
        //     }
        // });
    } else {
        jQuery('.carousel').slick('slickPlay');
    }
}

jQuery(function(){
    var shrinkHeader = 200;
    jQuery(window).scroll(function() {
        var scroll = getCurrentScroll();
        if ( scroll >= shrinkHeader ) {
                jQuery('.header').addClass('scrolled');
        } else {
            jQuery('.header').removeClass('scrolled');
        }
    });
    function getCurrentScroll() {
        return window.pageYOffset || document.documentElement.scrollTop;
    }
});

// // Handle contact form 7 "On sent OK" event
// document.addEventListener( 'wpcf7mailsent', function( event ) {
//     if ( "4" == event.detail.contactFormId ) {
//         alert( "The contact form ID is 4" );
//         // do something productive
//     }
// }, false );
// // Handle contact form 7 "Submit" event
// document.addEventListener( 'wpcf7submit', function( event ) {
//     if ( '123' == event.detail.contactFormId ) {
//         alert( "The contact form ID is 123." );
//         // do something productive
//     }
// }, false );
