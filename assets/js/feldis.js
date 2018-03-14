$(function() {
    var windowWidth = window.innerWidth,
        $body = $('body'),
        $header = $('#header'),
        $menu = $('#menu'),
        $keyfigures = $('#keyfigures'),
        counted = false;

    // headroom.js
    // handle .header show/hide animation
    $("#header").headroom({
        "offset": 50,
        "tolerance": 5,
        "classes": {
            initial:    'header',              // when element is initialised
            pinned:     'header-pinned',       // when scrolling up
            unpinned:   'header-unpinned',     // when scrolling down
            top:        'header-top',          // when above offset
            notTop:     'header-not-top',      // when below offset
            bottom:     'header-bottom',       // when at bottom of scoll area
            notBottom:  'header-not-bottom'    // when not at bottom of scroll area
        }
    });

    // open/close menu
    $('#open-menu').on('click', function (){
        $menu.addClass('rHeader-nav-open');
        $body.css('overflow', 'hidden');
        $header.css('opacity', 1);
    });

    $('#close-menu').on('click', function (){
        $menu.removeClass('rHeader-nav-open');
        $body.removeAttr('style');
        $header.removeAttr('style');
    });

    //
    //// material key figures counters
    //$(window).on('scroll', function(){
    //    if ($keyfigures.length && $keyfigures.offset().top <= $(window).scrollTop() + $(window).height() * .95 && !counted) {
    //        counted = true;
    //        $('.keyfigures-counter', $keyfigures).each(function () {
    //            $(this).prop('Counter', 0).animate({
    //                Counter: $(this).text()
    //            }, {
    //                duration: 3000,
    //                easing: 'swing',
    //                step: function (now) {
    //                    $(this).text(Math.ceil(now));
    //                }
    //            });
    //        });
    //    }
    //});

    // modals
    function toggleModal($modal) {
        // open/close modal
        // + allow/disallow body scroll
        if ($modal.is('[aria-hidden]')) {
            $body.css('overflow', 'hidden');
            $modal.removeAttr('aria-hidden');
        } else {
            $modal.attr('aria-hidden', true);
            $body.removeAttr('style');
        }
    }
    $body.on('click', '[data-modal]', function(e) {
        var target = $(this).attr('data-modal'),
            $target = $(target);

        if($target.length) {
            e.preventDefault();
            toggleModal($target);
        }

    });
});
