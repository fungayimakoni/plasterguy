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

        const progressCircle = document.querySelector(".autoplay-progress svg");
        const progressContent = document.querySelector(".autoplay-progress span");
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            effect: "fade",
            autoplay: {
                delay: 2500,
                disableOnInteraction: false
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            on: {
                autoplayTimeLeft(s, time, progress) {
                    progressCircle.style.setProperty("--progress", 1 - progress);
                    progressContent.textContent = `${Math.ceil(time / 1000)}s`;
                }
            }
        });

        var lbswiper = new Swiper(".lg-blocks", {
            slidesPerView: 1,
            direction: 'horizontal',
            loop: false,
            grabCursor: true,
            spaceBetween: 40,
            freeMode: true,
            // autoplay: {
            //     delay: 5000,
            //     disableOnInteraction: false
            // },
            scrollbar: {
                el: ".swiper-scrollbar",
                // hide: true,
                draggable: true,
                // dragSize: 50
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            breakpoints: {
                640: {
                    slidesPerView: 1.3,
                },
                768: {
                    slidesPerView: 2,
                }
            }
        });

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

