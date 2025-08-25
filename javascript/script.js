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

        // below listed default settings
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init',
            animatedClassName: 'aos-animate',
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false,
            debounceDelay: 50,
            throttleDelay: 99,


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120,
            delay: 0,
            duration: 400,
            easing: 'ease',
            once: false,
            mirror: false,
            anchorPlacement: 'top-bottom',

        });

        // We select the element we want to target
        var target = document.querySelector("footer");

        var scrollToTopBtn = document.querySelector(".scrollToTopBtn");
        var rootElement = document.documentElement;

        // Next we want to create a function that will be called when that element is intersected
        function callback(entries, observer) {
            // The callback will return an array of entries, even if you are only observing a single item
            entries.forEach((entry) => {
                if (entry.isIntersecting) {
                    // Show button
                    scrollToTopBtn.classList.add("showBtn");
                } else {
                    // Hide button
                    scrollToTopBtn.classList.remove("showBtn");
                }
            });
        }

        function scrollToTop() {
            rootElement.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }
        scrollToTopBtn.addEventListener("click", scrollToTop);

        // Next we instantiate the observer with the function we created above. This takes an optional configuration
        // object that we will use in the other examples.
        let observer = new IntersectionObserver(callback);
        // Finally start observing the target element
        observer.observe(target);

    });

})(jQuery);

