(function($) {

    "use strict";
    $(function() {
        var header = $(".start-style");
        var drop = $(".dropdown-menu");


        $(window).scroll(function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 10) {

                header.removeClass('start-style').addClass("scroll-on");
                drop.addClass("droScrol");
            } else {

                header.removeClass("scroll-on").addClass('start-style');
                drop.removeClass("droScrol");


            }
        });
    });

    // PRE LOADER
    $(window).load(function() {
        $('.preloader').delay(100).slideUp('slow'); // set duration in brackets    
    });

    // NAVBAR
    $(".navbar").headroom();

    $('.navbar-collapse a').click(function() {
        $(".navbar-collapse").collapse('hide');
    });

    $('.slick-slideshow').slick({
        autoplay: true,
        infinite: true,
        arrows: false,
        fade: true,
        dots: true,
    });

    $('.slick-testimonial').slick({
        arrows: false,
        dots: true,
    });

})(window.jQuery);