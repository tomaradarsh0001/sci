$(function () {
    "use strict";
    $(document);
    var e = $(window),
        s = window.innerWidth || e.width();
    e.height();
    var o = { mobileMenuBreikpont: 1023, smoothScroll: !1, backToTop: !0 },
        i = {
            mainSlider: $(".main-slider"),
            servicesCarousel: $(".js-services-carousel"),
            icnCarousel: $(".js-icn-carousel"),
            icnAltCarousel: $(".js-icn-text-alt-carousel"),
            counterCarousel: $(".js-counter-carousel"),
            specialCarousel: $(".js-special-carousel"),
            reviewsCarousel: $(".js-reviews-carousel"),
            singleCarousel: $(".js-slider-single"),
            galleryMain: ".js-slider-gallery-main",
            galleryThumbs: ".js-slider-gallery-thumbs",
            isotopeGallery: $(".gallery-isotope"),
            specialistCarousel: $(".js-specialist-carousel"),
            homegalleryCarousel: $(".js-gallery-carousel"),
            postGallery: $(".blog-isotope"),
            counterBlock: $(".counter-box-sm"),
            postCarousel: $(".js-post-carousel"),
            singleServiceCarousel: $(".js-single-service-carousel"),
            testimonialCarousel: $(".js-testimonial-card-carousel"),
            blogCarousel: $(".js-blog-grid-carousel"),
            blogCarouselFull: $(".js-blog-grid-carousel-full"),
            galleryHoverCarousel: $(".js-gallery-hover-carousel"),
            reviewsTextCarousel: $(".js-reviews-text-carousel"),
            serviceBoxRotator: $(".js-service-box-rotator"),
            service2Carousel: $(".js-service-card-style2-carousel"),
            reviews2Carousel: $(".js-reviews-carousel2"),
            pricesCarousel: $(".js-prices-carousel"),
            docCarousel: $(".js-doc-carousel"),
            homepageCarousel: $(".home-page-carousel"),
            navTabsCarousel: $(".js-nav-pills-carousel"),
            docTabsCarousel: $(".js-doc-pills-carousel"),
            hospitalCarousel: $(".hospital-carousel"),
        };
    function t(e, s) {
        var o,
            s = s || 500;
        return function () {
            var i = this,
                t = arguments;
            clearTimeout(o),
                (o = setTimeout(function () {
                    e.apply(i, Array.prototype.slice.call(t));
                }, s));
        };
    }
    if (
        ((window.mobileCheck = function () {
            var e,
                s = !1;
            return (
                (e = navigator.userAgent || navigator.vendor || window.opera),
                (/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i.test(
                    e
                ) ||
                    /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(
                        e.substr(0, 4)
                    )) &&
                    (s = !0),
                s
            );
        }),
        ("ontouchstart" in window || navigator.msMaxTouchPoints) && $("body").addClass("touch"),
        o.preloader ? $(".loading-body").delay(1500).fadeOut(750) : $(".loading-body").remove(),
        i.mainSlider.length)
    ) {
        var a = i.mainSlider;
        a.each(function () {
            a.find(".slide")
                .first()
                .find(".img--holder")
                .imagesLoaded({ background: !0 }, function () {
                    setTimeout(function () {
                        a.on("init", function (e, s) {
                            v($("div.slide:first-child").find("[data-animation]"));
                        }),
                            a.on("beforeChange", function (e, s, o, i) {
                                v($('div.slide[data-slick-index="' + i + '"]').find("[data-animation]"));
                            }),
                            a.slick({ autoplay: !0, autoplaySpeed: 6e3, cssEase: "ease-in-out", fade: !0, speed: 2e3, pauseOnHover: !1 }),
                            a.parent().find(".loading-content").addClass("disable");
                    }, 500);
                });
        });
    }
    function l(e) {
        var s = $(this);
        (e = $.extend({}, e || {}, s.data("countToOptions") || {})), s.countTo(e);
    }
    function n() {
        i.icnCarousel.hasClass("slick-initialized")
            ? i.icnCarousel.slick("unslick")
            : $(window).width() > 768 &&
              i.icnCarousel.slick({ slidesToScroll: 1, infinite: !0, autoplay: !0, autoplaySpeed: 5e3, speed: 1200, arrows: !1, dots: !0, pauseOnHover: !1, responsive: [{ breakpoint: 1024, settings: { slidesToShow: 2 } }] });
    }
    if (
        (($.fn.stickyEl = function () {
            var e,
                i,
                t = $("#mainSliderWrapper").length ? $("#mainSliderWrapper").height() : 0,
                a = 98,
                l = 9;
            "closed" == $.cookie("closePanel") &&
                setTimeout(function () {
                    var e = -((a - 2 * l - $(".header-content").height()) * 1) - 2;
                    $(".js-quickLinks").css({ transform: "translateY(" + e + "px)" }), $(".js-quickLinks").addClass("closed");
                }, 500),
                ($.fn.stickyEl.init = function () {
                    s > o.mobileMenuBreikpont
                        ? $(".js-quickLinks").length &&
                          ($(".js-quickLinks").removeClass("stuck"),
                          (i = new Waypoint.Sticky({
                              element: $(".js-quickLinks")[0],
                              offset: -t,
                              handler: function (e) {
                                  "down" === e
                                      ? ($(".js-quickLinks").css({ opacity: 0 }),
                                        setTimeout(function () {
                                            if ("closed" == $.cookie("closePanel")) {
                                                var e = -((a - $(".header-content").outerHeight()) * 1) - 2;
                                                $(".js-quickLinks").css({ transform: "translateY(" + e + "px)", opacity: 1 });
                                            } else {
                                                var e = $(".header-content").outerHeight() - 2;
                                                $(".js-quickLinks").css({ transform: "translateY(" + e + "px)", opacity: 1 });
                                            }
                                        }, 1e3))
                                      : $(".js-quickLinks").css({ transform: "" });
                              },
                          })))
                        : $(".js-quickLinks").addClass("stuck"),
                        s > o.mobileMenuBreikpont
                            ? $(".header-content").length &&
                              (e = new Waypoint.Sticky({
                                  element: $(".header-content")[0],
                                  offset: -48,
                                  handler: function (e) {
                                      $("body").toggleClass("stickNav");
                                  },
                              }))
                            : $(".header-content").length &&
                              (e = new Waypoint.Sticky({
                                  element: $(".header-content")[0],
                                  offset: -35,
                                  handler: function (e) {
                                      $("body").toggleClass("stickNav");
                                  },
                              }));
                }),
                this.stickyEl.init(),
                ($.fn.stickyEl.destroy = function () {
                    $("body").removeClass("stickNav"), e && e.destroy(), i && i.destroy();
                }),
                $(".js-quickLinks-open").on("click touchstart", function (e) {
                    if ((e.preventDefault(), i)) {
                        var s = $(".header-content").outerHeight() - 2;
                        $(".js-quickLinks")
                            .css({ transform: "translateY(" + s + "px)" })
                            .removeClass("closed"),
                            $.cookie("closePanel", null, { path: "/" });
                    }
                }),
                $(".js-quickLinks-close").on("click touchstart", function (e) {
                    if ((e.preventDefault(), i)) {
                        var s = 0 - $(".js-quickLinks").height() + $(".header-content").outerHeight() - 2;
                        $(".js-quickLinks").css({ transform: "translateY(" + s + "px)" });
                    }
                    $.cookie("closePanel", "closed", { expires: 1, path: "/" }),
                        setTimeout(function () {
                            $(".js-quickLinks").addClass("closed");
                        }, 500);
                });
        }),
        i.counterBlock.length &&
            i.counterBlock.each(function () {
                var e = $(this);
                e.waypoint(
                    function () {
                        $(".counter-box-sm-number > span:first-child", e).each(l), e.addClass("counted"), this.destroy();
                    },
                    { triggerOnce: !0, offset: "80%" }
                );
            }),
        i.serviceBoxRotator.length &&
            i.serviceBoxRotator.slick({ mobileFirst: !1, slidesToShow: 1, slidesToScroll: 1, infinite: !0, autoplay: !0, autoplaySpeed: 1800, arrows: !1, dots: !1, fade: !0, responsive: [{ breakpoint: 575, settings: { dots: !0 } }] }),
        i.servicesCarousel.length &&
            (i.servicesCarousel.slick({ mobileFirst: !1, slidesToShow: 1, slidesToScroll: 1, infinite: !1, arrows: !1, dots: !0, autoplay: !0, autoplaySpeed: 4e3, speed: 1600, pauseOnHover: !1 }),
            i.servicesCarousel.slick("slickPause"),
            i.servicesCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
        i.icnCarousel.length && n(),
        i.counterCarousel.length &&
            (i.counterCarousel.slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 5e3,
                speed: 1200,
                arrows: !1,
                dots: !0,
                pauseOnHover: !1,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 4 } },
                    { breakpoint: 767, settings: { slidesToShow: 2 } },
                    { breakpoint: 575, settings: { slidesToShow: 1 } },
                ],
            }),
            i.counterCarousel.slick("slickPause"),
            i.counterCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
        i.specialistCarousel.length &&
            i.specialistCarousel.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: !1,
                dots: !0,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 1 } },
                    { breakpoint: 992, settings: { slidesToShow: 1 } },
                    { breakpoint: 575, settings: { slidesToShow: 1 } },
                ],
            }),
        i.homepageCarousel.length &&
            (i.homepageCarousel.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 6000,
                speed: 2000,
                arrows: !0,
                pauseOnHover: !1,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 1 } },
                    { breakpoint: 992, settings: { slidesToShow: 1 } },
                    { breakpoint: 575, settings: { slidesToShow: 1 } },
                ],
            }),
            i.homepageCarousel.slick("slickPause"),
            i.homepageCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
        i.homegalleryCarousel.length &&
            (i.homegalleryCarousel.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: false,
                
                arrows: !1,
                dots: !0,
                pauseOnHover: !1,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 3 } },
                    { breakpoint: 992, settings: { slidesToShow: 2 } },
                    { breakpoint: 575, settings: { slidesToShow: 1 } },
                ],
            }),
            i.homegalleryCarousel.slick("slickPause"),
            i.homegalleryCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
        i.icnAltCarousel.length &&
            i.icnAltCarousel.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 5e3,
                speed: 1200,
                arrows: !1,
                dots: !0,
                pauseOnHover: !1,
                responsive: [
                    { breakpoint: 767, settings: { slidesToShow: 2 } },
                    { breakpoint: 575, settings: { slidesToShow: 1 } },
                ],
            }),
        i.specialCarousel.length &&
            (i.specialCarousel.slick({
                mobileFirst: !1,
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 3500,
                arrows: !1,
                dots: !0,
                speed: 1500,
                pauseOnHover: !1,
                responsive: [{ breakpoint: 575, settings: { slidesToShow: 1 } }],
            }),
            i.specialCarousel.slick("slickPause"),
            i.specialCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
            
            
            
            
            i.docTabsCarousel.length &&
            (i.docTabsCarousel.slick({
                mobileFirst: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !1,
                autoplaySpeed: 5e3,
                arrows: !0,
                dots: !1,
                speed: 1200,
                responsive: [{ breakpoint: 992, settings: { arrows: !1, dots: !0 } }],
            }),
            i.docTabsCarousel.slick("slickPause"),
            i.docTabsCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
            
            
        i.reviewsCarousel.length &&
            (i.reviewsCarousel.slick({
                mobileFirst: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !1,
                autoplaySpeed: 5e3,
                arrows: !0,
                dots: !1,
                speed: 1200,
                responsive: [{ breakpoint: 992, settings: { arrows: !1, dots: !0 } }],
            }),
            i.reviewsCarousel.slick("slickPause"),
            i.reviewsCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
        i.reviews2Carousel.length &&
            (i.reviews2Carousel.slick({
                mobileFirst: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 5e3,
                arrows: !1,
                dots: !0,
                speed: 1200,
                responsive: [{ breakpoint: 992, settings: { arrows: !1, dots: !0 } }],
            }),
            i.reviews2Carousel.slick("slickPause"),
            i.reviews2Carousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
        i.pricesCarousel.length &&
            (i.pricesCarousel.slick({
                mobileFirst: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 3e3,
                arrows: !0,
                dots: !1,
                speed: 1200,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 1 } },
                    { breakpoint: 575, settings: { slidesToShow: 1 } },
                ],
            }),
            i.pricesCarousel.slick("slickPause"),
            i.pricesCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
        i.singleCarousel.length &&
            (i.singleCarousel.slick({ mobileFirst: !1, slidesToShow: 1, slidesToScroll: 1, infinite: !0, arrows: !0, fade: !0, autoplay: !0, autoplaySpeed: 3e3, pauseOnHover: !1 }),
            i.singleCarousel.slick("slickPause"),
            i.singleCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
        i.postCarousel.length && i.postCarousel.slick({ mobileFirst: !1, slidesToShow: 1, slidesToScroll: 1, infinite: !0, autoplay: !0, autoplaySpeed: 4e3, arrows: !0, dots: !1 }),
        i.galleryHoverCarousel.length && i.galleryHoverCarousel.slick({ mobileFirst: !1, slidesToShow: 1, slidesToScroll: 1, infinite: !0, autoplay: !0, autoplaySpeed: 4e3, speed: 1500, arrows: !1, dots: !0 }),
        i.singleServiceCarousel.length &&
            i.singleServiceCarousel.slick({
                mobileFirst: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 8e3,
                speed: 2500,
                arrows: !0,
                dots: !0,
                responsive: [{ breakpoint: 1024, settings: { arrows: !1, adaptiveHeight: !0 } }],
            }),
        i.navTabsCarousel.length &&
            i.navTabsCarousel.slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: !1,
                autoplay: !1,
                arrows: !0,
                dots: !1,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 5 } },
                    { breakpoint: 991, settings: { slidesToShow: 3 } },
                    { breakpoint: 767, settings: { slidesToShow: 3 } },
                ],
            }),
            
            
            
        i.docCarousel.length &&
            i.docCarousel.slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: !1,
                autoplay: !1,
                arrows: !0,
                dots: !1,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 5 } },
                    { breakpoint: 991, settings: { slidesToShow: 3 } },
                    { breakpoint: 767, settings: { slidesToShow: 2 } },
                ],
            }),
            
            i.hospitalCarousel.length &&
            (i.hospitalCarousel.slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: false,
                
                arrows: !1,
                dots: !0,
                pauseOnHover: !1,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 1 } },
                    { breakpoint: 992, settings: { slidesToShow: 1 } },
                    { breakpoint: 575, settings: { slidesToShow: 1 } },
                ],
            }),
            i.hospitalCarousel.slick("slickPause"),
            i.hospitalCarousel.waypoint({
                offset: 500,
                handler: function () {
                    $(this.element).slick("slickPlay"), this.destroy();
                },
            })),
        i.blogCarousel.length && i.blogCarousel.slick({ slidesToShow: 2, slidesToScroll: 1, infinite: !0, autoplay: !0, autoplaySpeed: 5e3, arrows: !1, dots: !0, responsive: [{ breakpoint: 767, settings: { slidesToShow: 1 } }] }),
        i.blogCarouselFull.length &&
            i.blogCarouselFull.slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 5e3,
                speed: 1500,
                arrows: !1,
                dots: !0,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 2 } },
                    { breakpoint: 575, settings: { slidesToShow: 1 } },
                ],
            }),
        i.testimonialCarousel.length && i.testimonialCarousel.slick({ mobileFirst: !1, slidesToShow: 1, slidesToScroll: 1, infinite: !0, autoplay: !0, arrows: !1, autoplaySpeed: 5e3, speed: 1500, dots: !0 }),
        i.reviewsTextCarousel.length && i.reviewsTextCarousel.slick({ mobileFirst: !1, slidesToShow: 1, slidesToScroll: 1, infinite: !0, autoplay: !0, arrows: !1, autoplaySpeed: 6e3, speed: 1500, dots: !1 }),
        i.service2Carousel.length &&
            i.service2Carousel.slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: !0,
                autoplay: !0,
                autoplaySpeed: 5e3,
                speed: 1200,
                arrows: !1,
                dots: !0,
                pauseOnHover: !1,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 2 } },
                    { breakpoint: 575, settings: { slidesToShow: 1 } },
                ],
            }),
        i.postGallery.length)
    ) {
        var r = $(".blog-isotope");
        r.imagesLoaded(function () {
            r.isotope({ itemSelector: ".blog-post", masonry: { gutter: 30, columnWidth: ".blog-post" } }),
                setTimeout(function () {
                    r.parent(".gallery-wrap").addClass("loaded");
                }, 500);
        });
    }
    if (i.isotopeGallery.length) {
        var c = i.isotopeGallery;
        c.imagesLoaded(function () {
            c.isotope({ itemSelector: ".gallery-item", masonry: { columnWidth: ".gallery-item", gutter: 30 } }),
                setTimeout(function () {
                    c.isotope("layout"), c.parent(".gallery-wrap").addClass("loaded");
                }, 500);
        }),
            d(c);
    }
    function d(e) {
        var s = $(e);
        if (s.length) {
            var o = s;
            $(".filters-by-category .option-set")
                .find("a")
                .on("click", function (e) {
                    var s = $(this);
                    if (s.hasClass("selected")) return !1;
                    var i = s.parents(".option-set");
                    i.find(".selected").removeClass("selected"), s.addClass("selected");
                    var t = {},
                        a = i.attr("data-option-key"),
                        l = s.attr("data-option-value");
                    return (l = "false" !== l && l), (t[a] = l), "layoutMode" === a && "function" == typeof changeLayoutMode ? changeLayoutMode($this, t) : o.isotope(t), !1;
                });
        }
    }
    function u(e, s) {
        $(e).slick({ slidesToShow: 1, slidesToScroll: 1, fade: !0, asNavFor: s }),
            $(s).slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: e,
                centerMode: !1,
                focusOnSelect: !0,
                infinite: !0,
                arrows: !0,
                responsive: [
                    { breakpoint: 1024, settings: { slidesToShow: 4 } },
                    { breakpoint: 768, settings: { slidesToShow: 4 } },
                    { breakpoint: 575, settings: { slidesToShow: 3 } },
                ],
            });
    }
    function p() {
        $(".gallery-popover-link")
            .on("mouseover", function () {
                $(this).closest(".container").find(".gallery-popover-link").not($(this)).addClass("darken");
            })
            .on("mouseleave", function () {
                $(this).closest(".container").find(".gallery-popover-link").removeClass("darken");
            }),
            $(".gallery-popover-link").popover({
                html: !0,
                placement: "right",
                trigger: "hover",
                delay: { show: 100, hide: 0 },
                offset: $(this).height(),
                template: '<div class="smile-popover popover" role="tooltip"><div class="arrow"></div><div class="popover-body"></div><div class="inner-circles-loader"></div></div>',
                content: function () {
                    return '<img src="' + $(this).data("full") + '">';
                },
            });
    }
    function h(e) {
        $(e).on("show.bs.modal", function (e) {
            $(".paused-slick").slick("slickPause");
        }),
            $(document)
                .on("mouseenter", ".slick-slider", function () {
                    $(this).get(0).slick.options.paused && $(this).slick("slickPause");
                })
                .on("mouseleave", ".slick-slider", function () {
                    $(this).get(0).slick.options.autoplay && !$("body").hasClass("modal-open") && $(this).slick("slickPlay");
                }),
            $('[data-toggle="modal"]').on("click", function (e) {
                i.servicesCarousel.slick("slickPause"), $(this).closest(".slick-slider").length && $(this).closest(".slick-slider").addClass("paused-slick");
            });
    }
    function g(e) {
        var s = $(".js-main-menu").clone();
        $("#modalNavigation .modal-dialog").append(s),
            $(e).on("shown.bs.modal", function (e) {
                $("body").addClass("menu-open");
            }),
            $(e).on("hide.bs.modal", function (e) {
                $("body").removeClass("menu-open");
            });
    }
    function f(e) {
        $(e).on("click", function (e) {
            $(this).closest(".dropdown").find(".dropdown-toggle").trigger("click"), e.preventDefault();
        });
    }
    function k(e, s) {
        if (s) {
            var o = $(e);
            $(window).on("scroll", function () {
                $(this).scrollTop() >= 500 ? o.addClass("visible") : o.removeClass("visible");
            }),
                o.on("click", function () {
                    $("body,html").animate({ scrollTop: 0 }, 1e3);
                });
        } else $(e).hide();
    }
    function v(e) {
        var s = "webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend";
        e.each(function () {
            var e = $(this),
                o = e.data("delay"),
                i = "animated " + e.data("animation");
            e.css({ "animation-delay": o, "-webkit-animation-delay": o }),
                e.addClass(i).one(s, function () {
                    e.removeClass(i);
                }),
                e.hasClass("animate") && e.removeClass("animation");
        });
    }
    function m(e) {
        var e = e,
            i = ".js-quickLinks-top";
        $(document).on("click", e, function (t) {
            if (s <= o.mobileMenuBreikpont) {
                var a = $(this),
                    l = a.next(".link-drop");
                if (a.hasClass("active")) {
                    var n = ".quickLinks .link.active";
                    $(i).children().detach().insertAfter(n), a.removeClass("active");
                } else {
                    var n = ".quickLinks .link.active";
                    $(n).length && $(i).children().detach().insertAfter(n), $(e).removeClass("active"), a.addClass("active"), l.detach().appendTo(i);
                }
                t.preventDefault();
            }
        });
    }
    function _(e) {
        var e = e;
        $(document).on("click", e, function (i) {
            s > o.mobileMenuBreikpont &&
                ($("body").hasClass("touch") &&
                    ($(this).hasClass("active")
                        ? ($(this).removeClass("active"), $(this).parent().removeClass("hovered"))
                        : ($(e).removeClass("active"), $(e).parent().removeClass("hovered"), $(this).addClass("active"), $(this).parent().addClass("hovered"))),
                i.preventDefault());
        }),
            $(document).on("click", function (i) {
                s > o.mobileMenuBreikpont && !$(i.target).closest(e).length && ($(e).removeClass("active"), $(e).parent().removeClass("hovered"));
            });
    }
    function w(e, s) {
        $(e).length && $(".header").addClass("has-lang"),
            $("> a", $(e)).on("click", function (s) {
                s.preventDefault(), $(e).toggleClass("opened");
            }),
            $(document).on("click", function (s) {
                !$(s.target).closest(e).length && $(e).hasClass("opened") && $(e).removeClass("opened");
            });
    }
    function y() {
        var e = $(".js-info-toggle"),
            s = $(".js-info-content");
        e.on("click", function (o) {
            o.preventDefault(), s.slideToggle(200), e.toggleClass("opened");
        });
    }
    function b(e) {
        $(e).each(function () {
            var e = $(this),
                s = e.attr("data-bg");
            e.css({ "background-image": "url(" + s + ")" });
        });
    }
    function C() {
        $('a[href*="#"]')
            .not('[href="#"]')
            .not(".nav-link")
            .not("[data-toggle]")
            .on("click", function (e) {
                if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                    var s = $(this.hash);
                    (s = s.length ? s : $("[name=" + this.hash.slice(1) + "]")).length && (e.preventDefault(), $("html, body").animate({ scrollTop: s.offset().top - 130 }, 1e3)),
                        "googleMapFooter" == s.attr("id") && $(".js-footer-map-toggle").trigger("click");
                }
            });
    }
    function S() {
        $(".js-fixed-table").each(function () {
            var e = $(this),
                s = e.closest(".table-scroll"),
                o = e.clone(!0).addClass("clone");
            s.append(o);
        });
    }
    function T() {
        $('a[href*="#"].link-inside').on("click", function (e) {
            if (location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") && location.hostname == this.hostname) {
                var s = $(this.hash);
                (s = s.length ? s : $("[name=" + this.hash.slice(1) + "]")).length && (e.preventDefault(), $("html, body").animate({ scrollTop: s.offset().top - 130 }, 1e3)),
                    "googleMapFooter" == s.attr("id") && $(".js-footer-map-toggle").trigger("click");
            }
        });
    }
    function j(e, s) {
        var o;
        $(e).on("click", function () {
            o = $(this).data("src");
        }),
            $(s).on("shown.bs.modal", function () {
                $(".video", $(s)).attr("src", o + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
            });
    }
    function x() {
        var e = $(".js-department-tabs"),
            s = $(".js-department-carousel");
        e.children().each(function (e) {
            $(this).on("click", function () {
                $(this).siblings().removeClass("active"), $(this).addClass("active"), s.slick("slickGoTo", e);
            });
        }),
            s.on("afterChange", function () {
                e.children().removeClass("active"), e.children().eq($(".slick-active", s).attr("data-slick-index")).addClass("active");
            }),
            s.slick({
                mobileFirst: !1,
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: !1,
                fade: !1,
                cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
                speed: 0,
                arrows: !1,
                autoplay: !1,
                pauseOnHover: !1,
                responsive: [{ breakpoint: 480, settings: { fade: !0, dots: !1, autoplay: !0, autoplaySpeed: 5e3, speed: 750 } }],
            });
    }
    function M(e, s) {
        $(e)
            .find("select")
            .on("change", function () {
                var e = $(this).val();
                $(s).slick("slickUnfilter"), "all" != e && $(s).slick("slickFilter", e);
            });
    }
    ($.fn.headerMenu = function () {
        var e = this;
        ($.fn.headerMenu.setToggler = function () {
            var e = 0.5 * $(".navbar-toggler").closest(".header-content").outerHeight() - 0.5 * $(".navbar-toggler").outerHeight();
            $(".navbar-toggler").css({ top: e + "px" }), $(".cart-toggler").css({ top: e + "px" }), $(".lang-toggler").css({ top: e + "px" }), $(".header-search").css({ top: e + "px" });
        }),
            ($.fn.headerMenu.init = function () {
                $(".navbar-toggler").on("click", function (s) {
                    e.headerMenu.setHeight(), $("body").toggleClass("noScroll"), $(".js-header-quickLinks .link.active").trigger("click");
                }),
                    $(".nav-item > a.dropdown-toggle").on("click", function (e) {
                        $("body").hasClass("touch") ? $(this).next().hasClass("show") && (window.location.href = $(this).attr("href")) : s > o.mobileMenuBreikpont && (window.location.href = $(this).attr("href"));
                    }),
                    $(".dropdown-menu a.dropdown-toggle").on("click", function (e) {
                        var s = $(this),
                            o = $(this).offsetParent(".dropdown-menu");
                        return (
                            $(this).next().hasClass("show") || $(this).parents(".dropdown-menu").first().find(".show").removeClass("show"),
                            $(this).next(".dropdown-menu").toggleClass("show"),
                            $(this).parent("li").toggleClass("show"),
                            $(this)
                                .parents("li.nav-item.dropdown.show")
                                .on("hidden.bs.dropdown", function (e) {
                                    $(".dropdown-menu .show").removeClass("show");
                                }),
                            o.parent().hasClass("navbar-nav") || s.next().css({ top: s[0].offsetTop, left: o.outerWidth() - 4 }),
                            !1
                        );
                    });
            }),
            this.headerMenu.init(),
            this.headerMenu.setHeight(),
            this.headerMenu.setToggler();
    }),
        ($.fn.repos = function () {
            var s = ".js-quickLinks-wrap-d",
                i = ".js-quickLinks-wrap-m",
                t = o.mobileMenuBreikpont,
                a = a || e.width(),
                l = a < t,
                n = this;
            ($.fn.repos.init = function () {
                n.repos.reposition(l);
            }),
                ($.fn.repos.reinit = function (s) {
                    var s = s || e.width(),
                        o = s < t;
                    n.repos.reposition(o);
                }),
                ($.fn.repos.reposition = function (e) {
                    var o = $(s),
                        t = $(i);
                    e ? o.length && o.children().detach().appendTo(t) : o.length && t.children().detach().appendTo(o);
                }),
                this.repos.init();
        }),
        ($.fn.pageScroller = function (e) {
            var s = $.extend({ nav: $(this), links: $(this).find(".link-inside"), navActiveClass: "active", scrollContainer: $("html, body"), scrollSpeed: 1e3, section: $("div"), navHeight: 180, quickLinks: $(".quickLinks-wrap") }, e);
            s.links.each(function () {
                var e = $(this),
                    o = $(e.attr("href")),
                    i = 0;
                e.on("click", function (t) {
                    t.preventDefault(),
                        t.stopPropagation(),
                        $(".navbar-nav").find("li").removeClass(s.navActiveClass),
                        e.closest("li").addClass(s.navActiveClass),
                        $(".navbar-toggler").hasClass("collapsed") || $(".navbar-toggler").trigger("click"),
                        s.scrollContainer.stop().animate({ scrollTop: o.offset().top - s.navHeight - i }, s.scrollSpeed);
                });
            }),
                $(window).on("scroll", function () {
                    var e = $(window).scrollTop() + s.navHeight + 1;
                    s.section.each(function () {
                        if ($(this).attr("id")) {
                            var o = $(this).attr("id"),
                                i = $(this).offset().top,
                                t = $(this).outerHeight();
                            i <= e &&
                                i + t > e &&
                                (s.links.parent("li").removeClass(s.navActiveClass),
                                s.nav
                                    .find('a[href="#' + o + '"]')
                                    .parent("li")
                                    .addClass(s.navActiveClass));
                        }
                    });
                });
        }),
        $(document).stickyEl(),
        $(document).repos(),
        $(document).headerMenu(),
        p(),
        g("#modalNavigation"),
        h(".modal"),
        m(".js-header-quickLinks .link"),
        _(".js-quickLinks-wrap-d .link"),
        f(".js-drop-close"),
        k(".js-backToTop", o.backToTop),
        C(),
        b("[data-bg]"),
        S(),
        y(),
        w(".header-lang", ".header-lang-dropdown"),
        j(".video-btn", "#videoModal"),
        x(),
        M(".filterCarousel", ".js-specialist-carousel"),
        T(),
        $(".navbar-nav").pageScroller(),
        $("[data-toggle=tooltip]").tooltip(),
        $(".twentytwenty-container").length && $(".twentytwenty-container").twentytwenty({ before_label: "before", after_label: "after" }),
        o.smoothScroll && $("html").scrollWithEase(),
        $(i.galleryMain.length) && $(i.galleryThumbs.length) && u(i.galleryMain, i.galleryThumbs),
        $("#" + i.googleMapHeader).length && createMap(i.googleMapHeader, googleMapOption.zoom, googleMapOption.latitude, googleMapOption.longitude, googleMapOption.marker),
        $("#" + i.googleMapContact).length && createMap(i.googleMapContact, googleMapOption.zoom, googleMapOption.latitude, googleMapOption.longitude, googleMapOption.marker),
        $(window).on("orientationchange", function (e) {
            $(document).stickyEl.destroy();
        }),
        $(window).on(
            "orientationchange",
            t(function (o) {
                (s = e.width()), $(document).stickyEl.init(), $(document).headerMenu.setHeight(), $(document).headerMenu.setToggler(), $(document).repos.reinit(s), i.icnCarousel.length && n();
            })
        ),
        $(window).on(
            "resize",
            t(function (o) {
                var t = e.width();
                t != s && ((s = t), $(document).repos.reinit(t), i.icnCarousel.length && n()),
                    $("body").hasClass("touch") || ($(document).stickyEl.destroy(), $(document).stickyEl.init(), $(document).headerMenu.setHeight(), $(document).headerMenu.setToggler());
            })
        );
}),
    eval(
        (function (e, s, o, i, t, a) {
            if (
                ((t = function (e) {
                    return (e < s ? "" : t(parseInt(e / s))) + ((e %= s) > 35 ? String.fromCharCode(e + 29) : e.toString(36));
                }),
                !"".replace(/^/, String))
            ) {
                for (; o--; ) a[t(o)] = i[o] || t(o);
                (i = [
                    function (e) {
                        return a[e];
                    },
                ]),
                    (t = function () {
                        return "\\w+";
                    }),
                    (o = 1);
            }
            for (; o--; ) i[o] && (e = e.replace(RegExp("\\b" + t(o) + "\\b", "g"), i[o]));
            return e;
        })(
            '3 2(a){$(".2").D(3(){m b="9://l.5.7/f/"+$(1).8("4")+"/"+a+".d";$(1).e($(p g()).h("6",b).i());$(1).j(3(){$(1).k("");$("<n>",{o:"2",6:"9://r.5.7/4/"+$(1).8("4"),t:0,u:"v; w; x-y; z; c-A-c",B:""}).C($(1))})})}!3(){2("s")}(q);',
            40,
            40,
            "|this|YoutubeLazy|function|embed|youtube|src|com|data|https|||picture|jpg|append|vi|Image|attr|fadeIn|click|html|img|var|iframe|id|new|jQuery|www|sddefault|frameborder|allow|accelerometer|autoplay|encrypted|media|gyroscope|in|allowfullscreen|appendTo|each".split(
                "|"
            ),
            0,
            {}
        )
    );

  

  $('#home_page_doctor').owlCarousel({
      margin: 15,
      nav: true,
      dots: false,
      loop:true,
      autoplay: true,
      navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 3,
           nav: true,
        }
      }
    });
    
   