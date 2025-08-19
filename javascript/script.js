/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

(function ($) {
    // 'use strict';
    $(document).ready(function () {
        $(window).scroll(function () {
            var masthead = $("header#masthead");
            var customLogoLink = $(".custom-logo-link img");
            var scroll_distance = $(window).scrollTop();
            if (scroll_distance >= 100) {
                masthead.addClass("bg-white");
                customLogoLink.addClass("max-w-[200px]");
            } else {
                masthead.removeClass("bg-white");
                customLogoLink.removeClass("max-w-[200px]");
            }
        });


        $('.autoplay').slick({
            slidesToShow: 3.2,
            slidesToScroll: 1,
            infinite: false,
            appendArrows: '.slick-nav-wrapper',
            prevArrow: '<button type="button" class="slick-prev p-2 rounded-full border border-gray-400 w-[46px] text-gray-400 cursor-pointer" aria-label="Previous slide">&larr;</button>',
            nextArrow: '<button type="button" class="slick-next p-2 rounded-full border border-gray-400 w-[46px] text-gray-400 cursor-pointer" aria-label="Next slide">&rarr;</button>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2.2,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1.3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1.2,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        $('.testimonials-wrapper .testimonials-slider').slick({
            slidesToShow: 3,
            infinite: false,
            appendArrows: '.testimonials-nav-wrapper',
            prevArrow: '<button type="button" class="slick-prev p-2 rounded-full border border-gray-400 w-[46px] text-gray-400 cursor-pointer" aria-label="Previous slide">&larr;</button>',
            nextArrow: '<button type="button" class="slick-next p-2 rounded-full border border-gray-400 w-[46px] text-gray-400 cursor-pointer" aria-label="Next slide">&rarr;</button>',
            responsive: [
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 3,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });

        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: false, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });
    });

})(jQuery);

