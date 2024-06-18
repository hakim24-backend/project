$(document).ready(function () {

    let Body = $('body');

   // Body.addClass('preloader-site');

    /**
     * Viewport height snip for Home page Krono slider
     */

        // First we get the viewport height and we multiple it by 1% to get a value for a vh unit
    let vh = window.innerHeight * 0.01;
    // Then we set the value in the --vh custom property to the root of the document
    document.documentElement.style.setProperty('--vh', vh + 'px');

    window.addEventListener('resize', function () {
        let vh = window.innerHeight * 0.01;
        // document.documentElement.style.setProperty('--vh', vh + 'px');
    });

    /* Show International tab */
    $(document).on('click', '.international, .cr-close', function () {
        if (($(window).width() + 17) > 1281) {
            $('.internationalization-tab').toggleClass('hover');
        }
    });

    $('.internationalization-section .language').click(function () {
        if (($(window).width() + 17) > 1281) {
            $('.internationalization-tab').toggleClass('hover');
        }
    });

    $('.add-prod-btn').magnificPopup({
		type: 'image'
    });


    setTimeout(
        function () {
            $('.collapse').collapse();
        }, 125);

    /*Slider main page*/
    $('.carousel').carousel({
        interval: false
    });

    $('#home-slider-prev').click(function () {
        $('.carousel').carousel('prev');
    });

    $('#home-slider-next').click(function () {
        $('.carousel').carousel('next');
    });

    /* Show Searchbar */
    /*
    $('header .switchers .search-icon-class, header.sticky .switchers .search-icon-class').click(function () {
        $('.search-bar-widget').toggleClass('active');
        setTimeout(
            function () {
                $('.internationalization-section .account-header').css('left', '-4rem');
            }, 125);
        setTimeout(function() { $('input[name="q"]').focus() }, 500);
    })
    */
    
    $('.search-bar-widget .search-icon-input').click(function () {
        $('.search-bar-widget').toggleClass('active');
       // $('.internationalization-section .account-header').css('left', '0');
    });

    /* Close search input */

    $('.search-bar-widget .search-close-btn').click(function () {
        $('.search-bar-widget').toggleClass('active');
       // $('.internationalization-section .account-header').css('left', '0');
    });

    /* Megamenu */
    /* Show the whole menu */
    $(".megamenu > div > div").mouseenter(function () {
        $('.mega-submenu').addClass('hover');
    });
    $(".mega-submenu").mouseleave(function () {
        $('.mega-submenu').removeClass('hover');
        $('.mega-submenu').css('height', '0');
        $('.mega-submenu > div').removeClass('hover');
    });

    var company = $('.company-sub-menu div').height() + 155;
    var products = $('.products-sub-menu div').height() + 155;
    var decor = $('.decors-sub-menu div').height() + 155;
    var service = $('.services-sub-menu div').height() + 155;
    var highlights = $('.highlights-sub-menu div').height() + 155;
    var studies = 0 //$('.studies-sub-menu div').height() + 155;
    var mykrono = 0 //$('.my-krono-sub-menu div').height() + 155;

    $(".mega-submenu-button").mouseenter(function () {
        products = $('.company-sub-menu div').height() + 155;
        products = $('.products-sub-menu div').height() + 155;
        decor = $('.decors-sub-menu div').height() + 155;
        service = $('.services-sub-menu div').height() + 155;
        highlights = $('.highlights-sub-menu div').height() + 155;
        studies = 0 //$('.studies-sub-menu div').height() + 155;
        mykrono = 0 //$('.my-krono-sub-menu div').height() + 155;
    });

    /* Show Product menu */
    $(".products-wrapper, #product-menu").hover(function () {
        $('.company-sub-menu').removeClass('hover');
        $('.products-sub-menu').addClass('hover');
        $('.my-krono-sub-menu').removeClass('hover');
        $('.studies-sub-menu').removeClass('hover');
        $('.highlights-sub-menu').removeClass('hover');
        $('.services-sub-menu').removeClass('hover');
        $('.decors-sub-menu').removeClass('hover');
        $('.mega-submenu').css('height', products);
    });
    
     $(".company-wrapper, #company-menu").hover(function () {
        $('.company-sub-menu').addClass('hover');
        $('.products-sub-menu').removeClass('hover');
        $('.my-krono-sub-menu').removeClass('hover');
        $('.studies-sub-menu').removeClass('hover');
        $('.highlights-sub-menu').removeClass('hover');
        $('.services-sub-menu').removeClass('hover');
        $('.decors-sub-menu').removeClass('hover');
        $('.mega-submenu').css('height', products);
    });
    
    /* Show Decor menu */
    $(".decors-wrapper, #decor-menu").hover(function () {
        $('.company-sub-menu').removeClass('hover');
        $('.products-sub-menu').removeClass('hover');
        $('.my-krono-sub-menu').removeClass('hover');
        $('.studies-sub-menu').removeClass('hover');
        $('.highlights-sub-menu').removeClass('hover');
        $('.services-sub-menu').removeClass('hover');
        $('.decors-sub-menu').addClass('hover');
        $('.mega-submenu').css('height', decor);
    });
    /* Show Express Service menu */
    $(".services-wrapper, #service-menu").hover(function () {
        $('.company-sub-menu').removeClass('hover');
        $('.products-sub-menu').removeClass('hover');
        $('.my-krono-sub-menu').removeClass('hover');
        $('.studies-sub-menu').removeClass('hover');
        $('.highlights-sub-menu').removeClass('hover');
        $('.services-sub-menu').addClass('hover');
        $('.decors-sub-menu').removeClass('hover');
        $('.mega-submenu').css('height', service);
    });
    /* Show Highlights menu */
    $(".highlights-wrapper, #highlight-menu").hover(function () {
        $('.company-sub-menu').removeClass('hover');
        $('.products-sub-menu').removeClass('hover');
        $('.my-krono-sub-menu').removeClass('hover');
        $('.studies-sub-menu').removeClass('hover');
        $('.highlights-sub-menu').addClass('hover');
        $('.services-sub-menu').removeClass('hover');
        $('.decors-sub-menu').removeClass('hover');
        $('.mega-submenu').css('height', highlights);
    });
    /* Show Case Studies menu */
    $(".studies-wrapper, #studie-menu").hover(function () {
        $('.company-sub-menu').removeClass('hover');
        $('.products-sub-menu').removeClass('hover');
        $('.my-krono-sub-menu').removeClass('hover');
        //$('.studies-sub-menu').addClass('hover');
        $('.highlights-sub-menu').removeClass('hover');
        $('.services-sub-menu').removeClass('hover');
        $('.decors-sub-menu').removeClass('hover');
        $('.mega-submenu').css('height', studies);
    });
    /* Show My Krono menu */
    $(".my-krono-wrapper, #mykrono-menu").hover(function () {
        $('.products-sub-menu').removeClass('hover');
        //$('.my-krono-sub-menu').addClass('hover');
        $('.studies-sub-menu').removeClass('hover');
        $('.highlights-sub-menu').removeClass('hover');
        $('.services-sub-menu').removeClass('hover');
        $('.decors-sub-menu').removeClass('hover');
        $('.mega-submenu').css('height', mykrono);
    });

    /* Mega menu arrow pointing down */

    var allSubMenus = [
        "products",
        "decors",
        "services",
        "highlights",
        "studies",
        "my-krono"
    ];

    $('body').mousemove(function () {
        allSubMenus.forEach(function (element) {
            if (element == 'studies' || element == 'my-krono') {
                return;
            } else {


                switch ($("." + element + "-sub-menu").hasClass("hover")) {
                    case true:
                        $("." + element + "-wrapper").addClass("show-arrow");
                        break;
                    case false:
                        $("." + element + "-wrapper").removeClass("show-arrow");
                        break;
                    default:
                    // do nothing
                }
            }
        });
    });

    /* Move to next section */
    $('.scroll-arrow').click(function () {
        let element;
        if($('.featured-products.section').length) {
            element = $('.featured-products.section');
        } else if ($('.highlights.section').length) {
            element = $('.highlights.section');
        } else {
            element = $('.case-studies.section');
        }

        $([document.documentElement, document.body]).animate({
            scrollTop: (element.offset().top - 20)
        }, 500);
    });

    /* Sidebar */

    $('.closesidebar').on('click', function () {
        closeSidebar();
    });

    $('.close-sidebar-section').on('click', function () {
        closeSidebar();
    });

    function closeSidebar() {
        $('#sidebar').addClass('sidebar-closing');
        setTimeout(function () {
            $('body').removeClass('sidebar-opened');
            $('#sidebar').removeClass('sidebar-closing');
            $('#sidebar').removeClass('active');
        }, 300);
        setTimeout(function () {
            $('#sidebar .sidebar-wrapper-content').find('>div').each(function () {
                if (!$(this).hasClass('sidebar-mobile-header')) {
                    $(this).addClass('d-none');
                }
            });
            $('#sidebar').removeClass('full-width-sidebar');
        }, 500);
    };

    $(document).on('click', '.opensidebar', function () {
        $('body').addClass('sidebar-opened');
        let sidebar = $(this).attr('data-sidebar');
        let additional = $(this).attr('data-sidebar-additional');
        $('#sidebar .sidebar-wrapper-content').removeClass('active');
        $('#sidebar .sidebar-wrapper-content').find('>div').each(function () {
            if (!$(this).hasClass('sidebar-mobile-header')) {
                $(this).addClass('d-none');
            }
        });

        if (additional != 'false') {
            $('#sidebar-additional-content').removeClass('d-none');
        }
        if (sidebar == 'projects') {
            openProjFilters();
        }
        if (sidebar == 'express') {
            openExpressFilters();
        }
        if (sidebar == 'decors') {
            openDecorFilters();
        }
        if (sidebar == 'project-gallery') {
            openProjGallery();
        }
        if (sidebar == 'main') {
            openMainSidebar();
        }
    });

    function openProjFilters() {
        $('#sidebar').addClass('active');
        $('#sidebar').addClass('full-width-sidebar');
        $('#mobile-project-filters').removeClass('d-none');
        $(".mCustomScrollbar-filters").mCustomScrollbar({
            theme: "dark"
        });

    }

    function openExpressFilters() {
        $('#sidebar').addClass('active');
        $('#sidebar').addClass('full-width-sidebar');
        $('#mobile-express-filters').removeClass('d-none');
        $(".mCustomScrollbar-filters").mCustomScrollbar({
            theme: "dark"
        });

    }

    function openDecorFilters() {
        $('#sidebar').addClass('active');
        $('#sidebar').addClass('full-width-sidebar');
        $('#mobile-decor-filters').removeClass('d-none');
        $(".mCustomScrollbar-filters").mCustomScrollbar({
            theme: "dark"
        });
    }

    function openProjGallery() {
        $('#sidebar').addClass('active');
        $('#sidebar').addClass('full-width-sidebar full-width');
        $('#mobile-project-gallery').removeClass('d-none');
    }

    function openMainSidebar() {
        $('#sidebar').addClass('active');
        $('#main-sidebar').removeClass('d-none');
    }

    $('.social-right-side-text').click(function () {
        let offSet = 112
        let textHeight = $('.text-wrap-subs').outerHeight(true);
        offSet += textHeight;
        if ($('.extra-newsletter-form').hasClass('is-hidden')) {
            $('.extra-newsletter-form').removeClass('is-hidden');
            $('.extra-newsletter-form').height(offSet);
        } else {
            $('.extra-newsletter-form').addClass('is-hidden');
            $('.extra-newsletter-form').height(0)
        }

        $('html, body').animate({scrollTop: '+=330px'}, 'slow');
    });

    $(document).scroll(function () {
        var ht = 0;
        if ($(window).width() <= 480) {
            hT = $('#mobile-footer').offset().top
        } else {
            hT = $('#homepage-footer').offset().top
        }

        let wH = $(window).height(),
            wS = $(this).scrollTop(),
            lS = wS + wH;

        if (lS > hT) {
            let zero = lS - hT;
            if (zero > 0) {
                $('#back-to-top').css('bottom', zero + 25);
            }
        } else {
            $('#back-to-top').css('bottom', 45);
        }

        if ($(document).scrollTop() > 500) {
            $('#back-to-top').css('display', 'block');
        } else {
            $('#back-to-top').css('display', 'none');
        }
    });

    /* Back to top */

    $('#back-to-top').css('display', 'none');

    $('#back-to-top').click(function () {
        $('html,body').animate({
            scrollTop: 0
        }, 700);

    });

    $(function () {
        $('[data-toggle="tooltip"]').tooltip({
            container: 'body'
        });
    })

    var countryId = '4';

    $('.country-column li.' + countryId).addClass('shown');

    $('.country-list a').on('click', function () {
        $('.country-list a').removeClass('active');
        $(this).addClass('active');
        countryId = $(this).attr('country-id');
        $('.country-column li').removeClass('shown');
        $('.country-column li.' + countryId).addClass('shown');

    })

    //Filter open on click
    var lenI = $('#main_filter .filter-cat-name-wrap').length;
    $('#main_filter .filter-cat-name-wrap').click(function () {
        var curI = $(this).attr("index");

        for (i = 1; i <= lenI; i++) {
            if (i == curI) {
                $('#main_filter .filter-content[index="' + curI + '"]').toggleClass('active-filter');
            } else {
                $('#main_filter .filter-content[index="' + i + '"]').removeClass('active-filter');
            }
        }


    });

    // Downloads page collapse

    $(document).on("click", ".dl-filter-w-dropdown h2", function () {
        var thisParent = $(this).parent().parent().parent();

        $(".dl-filter-w-dropdown h2").not(this).removeClass('filter-opened');
        $(".dl-filter-w-dropdown").not(thisParent).removeClass('filter-is-active');
        $(this).toggleClass('filter-opened');
        thisParent.toggleClass('filter-is-active');
    });

    /* Play video on Project */

    $('.main-video').click(function () {
        $('.main-video').addClass('play-video');
        $('iframe').addClass('play-video');
        let toAppend = $('iframe').attr('src');
        toAppend = toAppend + '?modestbranding=1&autohide=1&showinfo=0&controls=1&autoplay=1&mute=0';
        $('iframe').attr('src', toAppend);
    });

    /* Show whole project description */

    let infoHeightI = $(".project-desc-container").height();

    if (infoHeightI < 98) {
        $('.project-read-more').hide();
        $('.project-desc-text').addClass('hide-gradient-desc');
    } else {
        $(".project-desc-container").height(98);
    }

    $(".project-read-more").click(function () {
        if ($(".project-desc-text").hasClass("reading-more")) {
            $(".project-desc-container").animate({height: 98}, 200);
            $(".project-desc-text").removeClass("reading-more");
        } else {
            $(".project-desc-container").animate({height:infoHeightI + 10}, 200);
            $(".project-desc-text").addClass("reading-more");
        }
    });

    $('.products-slider').slick({
     infinite: false,
     slidesToShow: 4,
     slidesToScroll: 4,
     responsive: [
        {
           breakpoint: 1281,
           settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: false
           }
        },
        {
           breakpoint: 701,
           settings: {
              slidesToShow: 3,
              slidesToScroll: 3,
              infinite: false
           }
        },
        {
           breakpoint: 481,
           settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              centerMode: true,
              arrows: false
           }
        }
     ]
  });

    /* Project init slick slider */
    $('.project-slider-init').slick({
            responsive: [
                {
                    breakpoint: 901,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 701,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 481,
                    settings: {
                        centerMode: true,
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        arrows: false,
                        infinite: false
                    }
                }
            ]
        }
    );

    let options = {
        infinite: true,
        speed: 500,
        fade: true,
        autoplay: false,
        slidesToShow: 1,
        slidesToScroll: 1,
    };

    let decoSimilarSlider = {
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 601,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    arrows: false
                }
            }
        ]
    };

    let textDecos = {
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
    };

    let decoCombSlider = {
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    arrows: true
                }
            }
        ]
    };

    let downloadsSlider = {
        slidesToShow: 5,
        slidesToScroll: 1,
        infinite: false,
        responsive: [
            {
                breakpoint: 1281,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 801,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 601,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    arrows: false
                }
            }
        ]
    };

    let decoExamplesSlider = {
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        responsive: [
            {
                breakpoint: 800,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    dots: false,
                }
            }
        ]
    };

    let homePageSliders = {
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        arrows: false,
        variableWidth: true
    };


    $('.decor-images-slider').slick(decoExamplesSlider);

    $('.tex-decors-carousel').slick(textDecos);

    setTimeout(function () {

        $('.project-slider-init-mega-gallery').slick(options);

        $('.projects-slider').slick(decoSimilarSlider);

        $('.decor-comb-slider').slick(decoCombSlider);

    }, 1000);

    $('.mobile-product-landing').slick({
        infinite: false,
        speed: 500,
        centerMode: true,
        cssEase: 'linear',
        slidesToShow: 1,
        centerPadding: '5px',
        arrows: false,
        variableWidth: true
    });

    $('.decor-similar-slider').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 601,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    arrows: false
                }
            }
        ]
    });

    //init slick slider again after we click on expand button
    //that's necessary, because slick can't calculate width of initiated element, when he has property display: none;
    if ($('.product-components')) {
        $('.product-components .nav-item').each(function (index) {
            $(this).click(function () {
                if ($(this).find('.nav-link').hasClass('decos-similar-tab-btn')) {
                    $('.product-components').find('.decos-sim').removeClass('slick-slider-helper');
                } else {
                    $('.product-components').find('.decos-sim').addClass('slick-slider-helper');
                }
            })
            $('.decor-similar-slider').slick('setPosition');
        });
    }

    $(document).on('click', '.decos-comb-tab-btn', function () {
        $('.decor-comb-slider').slick('unslick');
        $('.decor-comb-slider').slick(decoCombSlider);
        $('.decor-comb-slider').slick('slickGoTo', '0');
    });

    $(document).on('click', '.related-products-tab', function () {
        $('.decor-similar-slider').slick('unslick');
        $('.decor-similar-slider').slick(decoSimilarSlider);
        $('.decor-similar-slider').slick('slickGoTo', '0');
    });

    $(document).on('init', '.products-slider', function (event, slick, direction) {
        if ($(this).parent().parent().parent().attr('data-cat-num') > 1) {
            $(this).parent().removeClass('show');
        }
        // left
    });

    /* Mega Gallery toggle */

    $(".toggle-mega-gallery").click(function () {
        $(".mega-gallery-container").toggleClass("is-open");
        $("body").toggleClass("mega-gallery-open");


        $('.project-slider-init-mega-gallery').slick('unslick');
        $('.project-slider-init-mega-gallery').slick(options);
        let index = $(this).attr('data-mega-slide');

        $('.project-pagination span').html(parseInt(index) + 1);

        $('.project-slider-init-mega-gallery').slick('slickGoTo', index);
    });

    /* Mega Gallery Sidebar toggle */

    $(".mega-gallery-thumb").click(function () {
        let elements = $('.slick-track').find('.mega-gallery-wrapper');
        if (elements.length) {
            elements.each(function (index, value) {
                $(value).find('.mega-gallery-sidebar').toggleClass("mega-open");
            });
        }
    });

    /* Search category toggle */

    $(".dropdown-top-section").click(function () {
        $(this).parent().toggleClass("open-search-section");
    });

    $('.project-slider-init-mega-gallery').on('afterChange', function (event, slick, currentSlide) {
        $('.project-pagination span').html(parseInt(currentSlide) + 1);
    });

    $('.project-slider-init-mega-gallery .slick-current').on('change', function () {
        console.log($(this).attr('data-slick-index'));
    });

    var checkExist = setInterval(function () {
        if ($('.download-whole-section').length) {
            $(".mCustomScrollbar-dl").mCustomScrollbar({
                theme: "dark"
            });
            clearInterval(checkExist);
        }
    }, 100);

    $(".small-footer-tablet").click(function () {
        if ($(this).hasClass('small-footer-hover')) {
            $(this).removeClass('small-footer-hover');
        } else {
            $(this).addClass('small-footer-hover');
            $("html, body").animate({scrollTop: $(document).height()}, 'slow');
        }
    });

    $('.popup_opener').click(function () {
        if (!$(this).hasClass('active-popup-btn')) {
            $(this).addClass('active-popup-btn');
            $(this).append('<span class="hover-effect-popup"></span>');
        }
    });

    $(document).on('click', '#popup_wrapper .close', function () {
        $('.selectors').find('.popup_opener').removeClass('active-popup-btn');
        $('.selectors').find('.popup_opener span.hover-effect-popup').remove();
    });


    var checkExist = setInterval(function () {
        if ($('.attributes_list').length) {
            if ($('.attributes_list').find('.pictograms_inner_container').length) {
                //do nothing
            } else {
                $('.attributes_list').remove();
            }
            clearInterval(checkExist);
        }
    }, 100); // check every 100ms

    if ($('.decor-collections-page').length) {
        $('.filter_menu_bar').addClass('deco-category-filter');
    }

    $('.deco-filter-variant .project-single-filter.has-extra-column .deco-type-filter-left-col .has-sub-filters').on('click', function () {
        $(this).parent().parent().toggleClass('expanded-column');
    })

    let myKronoSBFooter = $('.krn-prtl-cnt .sub-menu-cnt #sidebar-sub-menu > ul').height();
    let myKronoSBH = $('.krn-prtl-cnt .sub-menu-cnt #sidebar-sub-menu').height();
    let screenWidth = 152;

    $(window).resize(function () {
        if ($(window).width() > 960) {
            screenWidth = 152;
        } else if ($(window).width() < 960 && $(window).width() > 480) {
            screenWidth = 134;
        }
        //make height same as width
        $('.single-block-wrapper').height($('.single-block-wrapper').width());
    });

    let screenBottom = $(window).scrollTop() + $(window).height();
    let compensatedSB = screenBottom - 134;
    if (compensatedSB > (myKronoSBH + 50)) {
        $('.krn-prtl-cnt .sub-menu-cnt #sidebar-sub-menu > ul').css('top', myKronoSBH);
    } else {
        $('.krn-prtl-cnt .sub-menu-cnt #sidebar-sub-menu > ul').css('top', screenBottom - myKronoSBFooter - 50);
    }

    $(document).scroll(function () {
        screenBottom = $(window).scrollTop() + $(window).height();
        compensatedSB = screenBottom - 134;
        if (compensatedSB > (myKronoSBH + 50)) {
            $('.krn-prtl-cnt .sub-menu-cnt #sidebar-sub-menu > ul').css('top', myKronoSBH);
        } else {
            $('.krn-prtl-cnt .sub-menu-cnt #sidebar-sub-menu > ul').css('top', screenBottom - myKronoSBFooter - 50);
        }
    });

    /**
     * Scroll to opened tab content at single product page OR single decor page
     * for tablet view
     */
    function scrollToTabsTablet() {

        if ($(".decor-page").length) {
            if ($(window).width() < 800) {
                $(".product-components.desktop-view-tabs .nav-tabs .nav-item .nav-link").click(function () {

                    let contentPos = $(".desktop-view-tabs .tab-content").offset().top;

                    $('html, body').animate({
                        scrollTop: contentPos - 350
                    }, 1000);
                });
            }
        }

        if ($(".desktop-product-tabs").length) {
            if ($(window).width() < 741) {
                $(".product-components.desktop-product-tabs .nav-item .nav-link").click(function () {

                    let contentPos = $(".desktop-product-tabs .tab-content").offset().top;

                    $('html, body').animate({
                        scrollTop: contentPos - 350
                    }, 1000);
                });
            }
        }
    }

    scrollToTabsTablet();

    /**
     * scrollToTabsTablet() end
     */

    /**
     * Place border at products availability table between different available formats
     */
    function tableFormatsBorders() {
        let availabilityTable = $(".express_program.kronobuild");
        let elCount = 0;

        availabilityTable.find(".kronobuild_formats").each(function (i, obj) {
            let colspan = parseInt(obj['attributes']['colspan'].value);
            elCount = elCount + colspan;
            $(".vt.sizes td").eq(elCount - 1).css('border-right', '1px solid #aaa');
            $(".product-availability").eq(elCount - 1).css('border-right', '1px solid #aaa');
        });
    }

    tableFormatsBorders();
    /**
     * tableFormatsBorders() end
     */


    /**
     * Auto expand of all collapsable items on init
     */
    if ($(".product-collections-page").length) {
        setTimeout(function () {
            $("#collapse0").collapse('show');
        }, 2000);
    }
    /**
     * end auto expand
     */

    /**
     * Chrome edit profile select options font workaround
     */
    if ($(".prof-edit").length) {
        var isChromium = !!window.chrome;

        if (isChromium) {
            $(".user-company-info select option").css("font-family", "Helen Pro_Cond");
            $(".user-personal-info select option").css("font-family", "Helen Pro_Cond");
        }
    }
    /**
     * end of font workaround
     */

    /**
     * Collection filters show dropdowns on click for tablet view
     */
    if ($('html, body').innerWidth() > 480 && $('html, body').innerWidth() < 1366) {
        if ($('.decor-collections-page').length) {
            $('.filter-cat-name-wrap').click(function () {
                $(this).toggleClass('active');
            });
        }
    }
    /**
     * end of show filters dropdown on click for tablet view
     */

    /**
     * Show tooltip on click - mobile & tablet view
     */
    if ($('html, body').innerWidth() < 1366) {
        $('.pictograms_inner_container').click(function () {
            $(this).find('.pictograms_icon').tooltip('toggle');
        });
    }
    /**
     * End tooltip on click for mobile and tablet views
     */

     // Init Radio and Checkbox method
    if( $('.checkboxes').length ) {
       $("input[type=radio], input[type='checkbox']").radioCheck();
    }
});


//checkbox & radiobutton method ----------------------------------------------------------------------
$.fn.radioCheck = function() { // create custom method
	return $(this).next('label').on('click', function(){ 
		var input = $(this).prev('input');
		if (input.is(':radio')) {
			input.prop( "checked", true).siblings('input').prop( "checked", false);
			$(this).addClass('checked').siblings('label').removeClass('checked');
		} else {
			input.prop('checked', input.prop('checked'));
			input.change( function() {
				if ($(this).prop('checked')) {
					$(this).next().addClass('checked');
				} else {
					$(this).next().removeClass('checked');
				}
			});
		}

		input.trigger('change');
	});
}

$(window).on("load", function () {

    $(".mCustomScrollbar-cr").mCustomScrollbar({
        theme: "dark"
    });

    //$('.preloader-wrapper').fadeOut('slow');
    //$('body').removeClass('preloader-site');


    // Add element to favorites
    $('.add-to-fav').click(function () {

        let fav_el = '<div class="favorite-icon"><a href="#"><span>1</span></a></div>';
        $('.internationalization-section').prepend(fav_el);

        console.log('add to fav');
    });

    $(document).on('click', '.custom-download', function (e) {
        e.preventDefault();
        if ($(this).data('image') && $(this).data('name')) {
            let $url_elements = window.location.pathname.split('/');
            let $lang = $url_elements[1];
            let $params = $(this).data('image').split('/');
            if (!$params.length) return;
            let $url = '/' + $lang + '/ajax/express_services/download?';
            $.each($params, function (index, value) {
                $url += `args[${index}]=${value}&`;
            });
            $url += 'name=' + $(this).data('name');
            window.open($url);
        }
    });

    // $(document).on('click', '.modal-map-wrapp', function (e) {
    //     e.preventDefault();
    //     let coords = {lat: parseFloat($(this).data('lat')), lng: parseFloat($(this).data('lng'))};
    //     let mapId = $(this).data('context');
    //     initMap(coords, mapId);
    // });

    // function initMap(coords, mapId) {
    //     var map = new google.maps.Map(document.getElementById('map-content-' + mapId), {zoom: 8, center: coords});
    //     var marker = new google.maps.Marker({position: coords, map: map});
    // };

    //style select inputs by design
    $(document).on('change', '.input-custom-type-select', function () {
        let val = $(this).val();
        if (val && val != '' && typeof val != 'undefined') {
            $(this).addClass('input-custom-type');
        } else {
            $(this).removeClass('input-custom-type');
        }
    });

    let browserWidth = $(window).width();

    if (browserWidth > 480 && browserWidth <= 959) {
        function clearAllTabletInformationElements() {
            $('.main-images-zoom').removeClass('show-info');
        }

        //if you click outside remove all clicked/showed elements
        $(document).click(function (e) {
            if (!$(e.target).hasClass('information')) {
                clearAllTabletInformationElements();
            }
        });

        //information tablets
        $(document).on('click', '.main-images-zoom > .information', function () {
            let $parent_el = $(this).parent();
            clearAllTabletInformationElements();

            if (!$parent_el.hasClass('show-info')) {
                $('.main-images-zoom').removeClass('show-info');
                $parent_el.addClass('show-info');

            } else {
                $parent_el.removeClass('show-info');
            }
        });

        //information height calculator
        $('.information.middle').each(function (i, obj) {
            let full_height = $(obj).parent().find('.main-images-container').height();
            $(obj).css('height', full_height);
        });
    }

    //JS helpers
    if (browserWidth <= 960) {
        $(".mega-submenu").remove();
    }

});


/* Light YouTube Embeds by @labnol */
/* Web: http://labnol.org/?p=27941 */

document.addEventListener("DOMContentLoaded",
    function() {
        var div, n,
            v = document.getElementsByClassName("youtube-player");
        for (n = 0; n < v.length; n++) {
            div = document.createElement("div");
            div.setAttribute("data-id", v[n].dataset.id);
            div.innerHTML = labnolThumb(v[n].dataset.id);
            div.onclick = labnolIframe;
            v[n].appendChild(div);
        }
    });

function labnolThumb(id) {
    var thumb = '<img src="https://i.ytimg.com/vi/ID/maxresdefault.jpg">',
        play = '<div class="play"></div>';
    return thumb.replace("ID", id) + play;
}

function labnolIframe() {
    var iframe = document.createElement("iframe");
    var embed = "https://www.youtube.com/embed/ID?autoplay=1&VQ=HD1080";
    iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
    iframe.setAttribute("frameborder", "0");
    iframe.setAttribute("allowfullscreen", "1");
    this.parentNode.replaceChild(iframe, this);
}


    async function getBlobVideo(src) {
        var video = document.getElementById('vid');
        let blob = await fetch(src).then(r => r.blob());
        url = window.URL.createObjectURL(blob);
        video.src = url;
        video.load();
        video.play()
            .then(() => {
                //console.log("is ok, is playing")
            })
            .catch(error => {
                console.log(error);
                console.log(error.code)
            });
    }