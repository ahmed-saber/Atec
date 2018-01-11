(function (window, $) {
    // wait for the document ready
    $(document).ready(function () {

        // fixed nav-bar on scroll
        var nav = $(".navbar-fixed-top");
        $(window).scroll(function () {
            if (nav.offset().top > 300) {
                nav.addClass("top-nav-expand");
            } else {
                nav.removeClass("top-nav-expand");
            }
        });

        /**
         * This part causes smooth scrolling using scrollto.js
         * We target all a tags inside the nav, and apply the scrollto.js to it.
         */
        $("nav a").click(function (evn) {
            evn.preventDefault();
            $('html,body').scrollTo(this.hash, this.hash);
        });

        /**
         * This part handles the highlighting functionality.
         * We use the scroll functionality again, some array creation and
         * manipulation, class adding and class removing, and conditional testing
         */
        var aChildren = $("nav li").children(); // find the a children of the list items
        var aArray = []; // create the empty aArray
        for (var i = 0; i < aChildren.length; i++) {
            var aChild = aChildren[i];
            var ahref = $(aChild).attr('href');
            aArray.push(ahref);
        } // this for loop fills the aArray with attribute href values

        $(window).scroll(function () {
            var windowPos = $(window).scrollTop(); // get the offset of the window from the top of page
            var windowHeight = $(window).height(); // get the height of the window
            var docHeight = $(document).height();

            for (var i = 0; i < aArray.length; i++) {
                var theID = aArray[i];
                var target = $(theID);
                if (target.length) {
                    var divPos = $(theID).offset().top; // get the offset of the div from the top of page
                    var divHeight = $(theID).height(); // get the height of the div in question
                    if (windowPos >= divPos && windowPos < (divPos + divHeight)) {
                        $("a[href='" + theID + "']").parent().addClass("current-menu-item");
                    } else {
                        $("a[href='" + theID + "']").parent().removeClass("current-menu-item");
                    }
                }
            }

            if (windowPos + windowHeight == docHeight) {
                if (!$("nav li:last-child a").parent().hasClass("current-menu-item")) {
                    var navActiveCurrent = $(".current-menu-item a").attr("href");
                    $("a[href='" + navActiveCurrent + "']").parent().removeClass("current-menu-item");
                    $("nav li:last-child a").parent().addClass("current-menu-item");
                }
            }
        });

        //carousel slider
        //======================================================
        var $status = $('.pagingInfo');
        var $slickElement = $('.carousel');
        var $slickText = $('.carousel_item_info');

        $slickElement.removeClass('hidden');

        $slickElement.slick({
            lazyLoad: 'ondemand',
            autoplay: true,
            fade: true,
            speed: 900,
            autoplaySpeed: 6000,
            pauseOnHover: false,
            pauseOnFocus: false,
            arrows: true,
            zIndex: 99,
            swipe: false,
            appendArrows: $('.carousel_arrows'),
            customPaging: function (slider, i) {
                var thumb = $(slider.$slides[i]).data();
                return '<a>' + i + '</a>';
            },
            responsive: [{
                breakpoint: 768,
                settings: {
                    fade: false,
                    swipe: true,
                    speed: 300
                }
            }]
        });

        $slickElement.on('beforeChange', function (event, slick, currentSlide) {
            // animate text
            $slickText[currentSlide].classList.add('hidden', 'animate');
        });
        $slickElement.on('afterChange', function (event, slick, currentSlide) {
            //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
            var i = (currentSlide ? currentSlide : 0) + 1;
            $status.html("<strong>" + '0' + i + "</strong>" + '/ 0' + slick.slideCount);
            $slickText[currentSlide].classList.remove('hidden', 'animate');
        });


        // HOME PAGE ANIMATION
        var controller = new ScrollMagic.Controller(),
            iconsList = $('.icons_list'),
            menuLinks = $('.menu-item'),
            anim1 = $('.anim1'),
            firstSec = $('.first_sec'),
            header = $('header'),
            carouselInfo = $('.carousel_item_info'),
            carouselArrows = $('.carousel_arrows'),
            stagger1 = $('.stagger_1'),
            stagger2 = $('.stagger_2 button'),
            stagger3 = $('.stagger_3 .project_unit'),
            stagger4 = $('.stagger_4 a'),
            stagger5 = $('.stagger_5'),
            horzLogo1 = $('header .horiz_logo'),
            horzLogo2 = $('.fifth_sec .horiz_logo'),
            footerLiks = $('.links_list li'),
            contact = $('.contact_form'),
            language = $('.lang1');
        // Apply on desktop only not mobile (no heavy animation on mobile)
        if (!/Android|webOS|iPhone|iPod|iPad|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) && $(window).width() >= 768) {
            //First sec Animation=============================
            var Sec1 = new TimelineMax();
            Sec1
                .set(header, {
                    className: '-=hidden'
                })
                .set(language, {
                    className: '-=hidden'
                })
                .set(anim1, {
                    className: '-=hidden'
                })
                .from(anim1, 1, {
                    left: '-=200',
                    ease: Power3.easeInOut
                })
                .staggerFrom(menuLinks, 1, {
                    top: '-=100',
                    ease: Power3.easeInOut
                }, .05)
                .from(language, 1, {
                    top: '-=100',
                    ease: Power3.easeInOut
                }, 1.3)
                .set(carouselInfo[0], {
                    className: '-=hidden'
                })
                .from(carouselArrows, 1, {
                    opacity: 0,
                    left: '-=250',
                    ease: Power3.easeInOut
                });
            // build scene 1
            var scene1 = new ScrollMagic.Scene({
                    triggerElement: ".first_sec"
                })
                .setTween(Sec1)
                .addTo(controller);
            //Second sec Animation=============================
            var sce2 = new TimelineMax();
            sce2
                .staggerFrom(stagger1, 1, {
                    opacity: 0,
                    bottom: '-=50',
                    ease: Power3.easeInOut
                }, .2)
                .to(horzLogo1, .1, {
                    left: 0,
                    ease: Power3.easeInOut
                }, 0)
                .set(iconsList, {
                    className: '+=animate'
                });
            // build scene 1
            var scene2 = new ScrollMagic.Scene({
                    triggerElement: ".second_sec"
                })
                .setTween(sce2)
                .addTo(controller);
            //third sec Animation=============================
            var sce3 = new TimelineMax();
            sce3
                .staggerFrom(stagger2, 1, {
                    top: '-=50',
                    ease: Power3.easeInOut
                }, .05)
                .from(stagger3, 1, {
                    opacity: 0,
                    ease: Power3.easeInOut
                }, .2);
            // build scene 1
            var scene3 = new ScrollMagic.Scene({
                    triggerElement: ".third_sec"
                })
                .setTween(sce3)
                .addTo(controller);
            //fourth sec Animation=============================
            var sce4 = new TimelineMax();
            sce4
                .staggerFrom(stagger4, 1, {
                    bottom: '-=70',
                    ease: Power3.easeInOut
                }, .1);
            // build scene 1
            var scene4 = new ScrollMagic.Scene({
                    triggerElement: ".fourth_sec"
                })
                .setTween(sce4)
                .addTo(controller);
            //fifth sec Animation=============================
            var sce5 = new TimelineMax();
            sce5
                .to(horzLogo1, .5, {
                    left: '-=170',
                    ease: Power3.easeInOut
                }, 0)
                .from(horzLogo2, 1, {
                    opacity: 0,
                    left: '-=200',
                    ease: Power3.easeInOut
                }, 0)
                .staggerFrom(footerLiks, .7, {
                    opacity: 0,
                    left: '-=20',
                    ease: Power3.easeInOut
                }, .1, 0)
                .from(contact, .7, {
                    opacity: 0,
                    right: '-=50',
                    ease: Power3.easeInOut
                }, 0);
            // build scene 1
            var scene5 = new ScrollMagic.Scene({
                    triggerElement: ".trigger_5"
                })
                .setTween(sce5)
                .addTo(controller);
        } else {
            iconsList.addClass('animate');
            header.removeClass('hidden');
            carouselInfo[0].classList.remove('hidden');
        }
    });

})(window, jQuery);