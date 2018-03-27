$(function() {
    var windowWidth = window.innerWidth,
        $body = $('body'),
        $header = $('#header'),
        $menu = $('#menu'),
        $keyfigures = $('#keyfigures'),
        $slider = $('#slider'),
        counted = false;

    // headroom.js
    // handle .header show/hide animation
    $header.headroom({
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

    // works and news
    $('#trigger-rows').on('click', function(e) {
        e.preventDefault();

        var $this = $(this);
        var showIndex = parseInt($(this).attr('data-show'));
        var maxIndex = parseInt($(this).attr('data-maxindex'));

        if (showIndex <= maxIndex) {
            // show items whose [data-index] value = showIndex
            var $targetRows = $('[data-index="' + showIndex + '"]', '#listed-content');
            $targetRows.slideDown();

            // update [data-show] value to trigger next items
            $this.attr('data-show', showIndex + 1);

            // hide button if we've reached the last line
            if (showIndex == maxIndex) {
                $this.fadeOut();
            }
        }
    });

    // slider
    if ($slider.length) {
        var slideCurrent = 1,
            slideMax = $slider.attr('data-slide-max');

        $('[data-slide-action]', $slider).on('click', function() {
            var $this = $(this),
                action = $this.attr('data-slide-action'),
                $current = $('[data-slide-index="' + slideCurrent + '"]');

            console.log('action: ' + action);
            console.log('$current: ' + $current);
            //console.log('$current: ' + $current);

            // hide current quote
            $current.slideUp();

            // show next quote
            slideCurrent = ('next' == action) ? slideCurrent + 1 : slideCurrent - 1;
            $('[data-slide-index="' + slideCurrent + '"]').delay(300).slideDown();

            // update buttons status
            $('[data-slide-action]', $slider).removeAttr('disabled');
            if(slideCurrent == slideMax || slideCurrent == 1) {
                $this.attr('disabled', 'disabled')
            }
        });
    }

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

    // magnific popup
    $(document).ready(function() {
        if ($('.media-thumbs').length) {
            // images
            $('.media-thumbs').each(function() {
                $(this).magnificPopup({
                    delegate: 'a',
                    type: 'image',
                    gallery:{
                        enabled:true
                    }
                });
            });
        }

        if ($('[data-trigger="mp-video"]').length) {
            // video
            $('[data-trigger="mp-video"]').magnificPopup({
                type: 'iframe',
                iframe: {
                    markup: '<div class="mfp-iframe-scaler">' +
                    '<div class="mfp-close"></div>' +
                    '<iframe class="mfp-iframe" frameborder="0" allowfullscreen></iframe>' +
                    '</div>',
                    patterns: {
                        youtube: {
                            index: 'youtube.com/',
                            id: 'v=',
                            src: '//www.youtube.com/embed/%id%?autoplay=1'
                        }
                    },
                    srcAction: 'iframe_src'
                }
            });
        }
    });

});
