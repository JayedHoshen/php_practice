$(document).ready(function() {
    $(window).scroll(function() {
        var scrolling = $(this).scrollTop();

        if (scrolling > 100) {
            $('.menu_bg').addClass('fixed');
        } else {
            $('.menu_bg').removeClass('fixed');
        }
        if (scrolling > 200) {
            $('.back_to_top').fadeIn();
        } else {
            $('.back_to_top').fadeOut();
        }
    });
    // menu fixed ends

    // (waypoints.js) start
    var s = $('.full_wrapper');
    var nav = $('.menu_bg .menu_wrap .menu ul li a');
    s.waypoint({
        handler: function(direction) {
            var active = $(this);
            if (direction == 'up')
                active = active.prev();
            var active_link = $('ul li a[href="#' + active.attr('id') + '"]');

            nav.removeClass('active');
            active_link.addClass('active');
        },
        offset: '35%'
    });

    // (waypoints.js) ends

    $('.menu_bg .menu_wrap .menu ul li a').on('click', function() {
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 50
                }, 1000);
                return false;
            }
        }
    });

    // SMOTH SCROLLING END

    // slick start

    $('.testi_wrap').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 2,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
    });

    // slick ends
});