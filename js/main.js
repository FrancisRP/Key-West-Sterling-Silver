(function ($) {
    $(document).ready(function () {

        var wWidth = $(window).width();

        $('.slideout-navicon').click(
            function () {
                $('.slideout-nav').show().animate({
                    width: "300px"
                }, 200);
                $('body').css("overflow", "hidden");
            }
        );

        $('.navicon-close').click(
            function () {
                $('.slideout-nav').hide().animate({
                    width: "0px"
                }, 200);
                $('body').css("overflow-x", "hidden");
                $('body').css("overflow-y", "visible");
            }
        );

       // Show mobile sub menu on first click if the top-level menu items have child pages
       $('.mobile-navigation .menu-item-has-children > a').one('click', false);
       $('.mobile-navigation .menu-item-has-children > a').click(function () {
           $(this).next('.sub-menu').toggle();
       });
 
       

        //Hero Slider
        $('.hero-slider').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1
        });

        $(window).on('resize orientationchange', function () {
            $('.hero-slider').slick('resize');
        });


    });
})(jQuery);
