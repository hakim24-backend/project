<!DOCTYPE html>
<html lang="en">

<head>
    <title>Экспресс услуги</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport"
        content="initial-scale=1.0,minimum-scale=1,maximum-scale=5,width=device-width, viewport-fit=cover">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="{{asset('digital/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('digital/css/temp-main.css?v17')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('digital/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('digital/css/jquery.mCustomScrollbar.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('digital/css/preloader.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('digital/css/slick.css?v2')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('digital/css/search.css')}}">
    <link rel="stylesheet" href="{{asset('digital/css/iziModal.css')}}">

    {{-- css header and footer --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">

    <script src="{{asset('digital/js/jquery-1.9.1.min.js')}}"></script>
    <script src="{{asset('digital/js/util.js')}}"></script>
    <script src="{{asset('digital/js/carousel.js')}}"></script>
    <script src="{{asset('digital/js/carousel.js')}}" defer=""></script>
    <script src="{{asset('digital/js/tab.js')}}" defer=""></script>
    <script src="{{asset('digital/js/bootstrap.bundle.min.js')}}" defer=""></script>
    <script src="{{asset('digital/js/jquery.mCustomScrollbar.concat.min.js')}}" async=""></script>
    <script src="{{asset('digital/js/imagesloaded.pkgd.min.js')}}" async=""></script>
    <script src="{{asset('digital/js/slick.min.js')}}" defer=""></script>
    <script src="{{asset('digital/js/creatizmo.js')}}"></script>
    <script src="{{asset('digital/js/cookie_consent.js')}}" async=""></script>
    <script src="{{asset('digital/js/search.js')}}" async=""></script>
    <script src="{{asset('digital/js/iziModal.min.js')}}"></script>
    <script src="{{asset('digital/js/selectbox.js')}}"></script>
    <script src="{{asset('digital/js/js.cookie.js')}}"></script>
    <script src="{{asset('digital/js/jquery.magnific-popup.js')}}"></script>
</head>

<body>
    <div id="wrapper">

        {{-- Header --}}
        @include('components-frontend.header');

        <br><br>
        <!--[/indy_noindex]-->
        <div id="content" class="container container_wide">
            <div id="selector" class="selector">
                <h1 class="express_service">Электронная библиотека </h1> <br>
                <div class="download_tabs"> <a name="obshtie-svedenija"> </a>
                    <div class="tab_title tab_selected" id="tab_3" title="Сертификаты соответствия">
                        <h2 class="underlined_heading">Сертификаты соответствия</h2>
                    </div> <a name="obshtie-svedenija"> </a>
                    <div class="tab_title" id="tab_4" title="Общие условия продаж">
                        <h2 class="underlined_heading">Общие условия продаж</h2>
                    </div> <a name="obshtie-svedenija"> </a>
                    <div class="tab_title" id="tab_2" title="Информация по общественной безопасности">
                        <h2 class="underlined_heading">Информация по общественной безопасности</h2>
                    </div> <a name="obshtie-svedenija"> </a>
                    <div class="tab_title" id="tab_1" title="Общие сведения">
                        <h2 class="underlined_heading">Общие сведения</h2>
                    </div>
                </div>
                <div class="list list_downloads list_downloads--in-tabs fixed download_section" id="tab_tab_3">
                    <ul>
                        @foreach ($resume1 as $item1)
                            <li>
                                <figure>
                                    <a target="_blank"
                                        href="{{asset('upload/digital_library/document/'.$item1->filename)}}"
                                        title="{{$item1->name}}"> 
                                        <img
                                            alt="Пожарный сертификат ОSB-3 Ультрадекор Егорьевск" height="600"
                                            src="{{asset('upload/digital_library/img/'.$item1->filename_img)}}" width="600"
                                            loading="lazy"> 
                                    </a>
                                </figure>
                                <div class="list_text"> 
                                    <a target="_blank"
                                        href="{{asset('upload/digital_library/document/'.$item1->filename)}}"
                                        title="{{$item1->name}}"> 
                                    </a>
                                    <h3>
                                        <a target="_blank"
                                            href="{{asset('upload/digital_library/document/'.$item1->filename)}}"
                                            title="{{$item1->name}}">
                                        </a>
                                        <a
                                            href="{{asset('upload/digital_library/document/'.$item1->filename)}}"
                                            title="{{$item1->name}}">{{$item1->name}}
                                        </a>
                                    </h3>
                                    <div class="description"> 
                                        <a
                                            href="{{asset('upload/digital_library/document/'.$item1->filename)}}"
                                            title="{{$item1->name}}">
                                            <p>{{$item1->name}}</p>
                                        </a> 
                                    </div>
                                    <div class="medium_description">
                                        <p></p>
                                    </div> 
                                    <a class="product_btn download"
                                        href="{{asset('upload/digital_library/document/'.$item1->filename)}}"
                                        target="_blank" title="Загрузить" download="">Загрузить
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="list list_downloads list_downloads--in-tabs fixed download_section" id="tab_tab_4"
                    style="display: none;">
                    <ul>
                        @foreach ($resume2 as $item2)
                            <li>
                                <figure>
                                    <a target="_blank"
                                        href="{{asset('upload/digital_library/document/'.$item2->filename)}}"
                                        title="{{$item2->name}}"> 
                                        <img
                                            alt="Пожарный сертификат ОSB-3 Ультрадекор Егорьевск" height="600"
                                            src="{{asset('upload/digital_library/img/'.$item2->filename_img)}}" width="600"
                                            loading="lazy"> 
                                    </a>
                                </figure>
                                <div class="list_text"> 
                                    <a target="_blank"
                                        href="{{asset('upload/digital_library/document/'.$item2->filename)}}"
                                        title="{{$item2->name}}"> 
                                    </a>
                                    <h3>
                                        <a target="_blank"
                                            href="{{asset('upload/digital_library/document/'.$item2->filename)}}"
                                            title="{{$item2->name}}">
                                        </a>
                                        <a
                                            href="{{asset('upload/digital_library/document/'.$item2->filename)}}"
                                            title="{{$item2->name}}">{{$item2->name}}
                                        </a>
                                    </h3>
                                    <div class="description"> 
                                        <a
                                            href="{{asset('upload/digital_library/document/'.$item2->filename)}}"
                                            title="{{$item2->name}}">
                                            <p>{{$item2->name}}</p>
                                        </a> 
                                    </div>
                                    <div class="medium_description">
                                        <p></p>
                                    </div> 
                                    <a class="product_btn download"
                                        href="{{asset('upload/digital_library/document/'.$item2->filename)}}"
                                        target="_blank" title="Загрузить" download="">Загрузить
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="list list_downloads list_downloads--in-tabs fixed download_section" id="tab_tab_2"
                    style="display: none;">
                    <ul>
                        @foreach ($resume3 as $item3)
                            <li>
                                <figure>
                                    <a target="_blank"
                                        href="{{asset('upload/digital_library/document/'.$item3->filename)}}"
                                        title="{{$item3->name}}"> 
                                        <img
                                            alt="Пожарный сертификат ОSB-3 Ультрадекор Егорьевск" height="600"
                                            src="{{asset('upload/digital_library/img/'.$item3->filename_img)}}" width="600"
                                            loading="lazy"> 
                                    </a>
                                </figure>
                                <div class="list_text"> 
                                    <a target="_blank"
                                        href="{{asset('upload/digital_library/document/'.$item3->filename)}}"
                                        title="{{$item3->name}}"> 
                                    </a>
                                    <h3>
                                        <a target="_blank"
                                            href="{{asset('upload/digital_library/document/'.$item3->filename)}}"
                                            title="{{$item3->name}}">
                                        </a>
                                        <a
                                            href="{{asset('upload/digital_library/document/'.$item3->filename)}}"
                                            title="{{$item3->name}}">{{$item3->name}}
                                        </a>
                                    </h3>
                                    <div class="description"> 
                                        <a
                                            href="{{asset('upload/digital_library/document/'.$item3->filename)}}"
                                            title="{{$item3->name}}">
                                            <p>{{$item3->name}}</p>
                                        </a> 
                                    </div>
                                    <div class="medium_description">
                                        <p></p>
                                    </div> 
                                    <a class="product_btn download"
                                        href="{{asset('upload/digital_library/document/'.$item3->filename)}}"
                                        target="_blank" title="Загрузить" download="">Загрузить
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="list list_downloads list_downloads--in-tabs fixed download_section" id="tab_tab_1"
                    style="display: none;">
                    <ul>
                        @foreach ($resume4 as $item4)
                            <li>
                                <figure>
                                    <a target="_blank"
                                        href="{{asset('upload/digital_library/document/'.$item4->filename)}}"
                                        title="{{$item4->name}}"> 
                                        <img
                                            alt="Пожарный сертификат ОSB-3 Ультрадекор Егорьевск" height="600"
                                            src="{{asset('upload/digital_library/img/'.$item4->filename_img)}}" width="600"
                                            loading="lazy"> 
                                    </a>
                                </figure>
                                <div class="list_text"> 
                                    <a target="_blank"
                                        href="{{asset('upload/digital_library/document/'.$item4->filename)}}"
                                        title="{{$item4->name}}"> 
                                    </a>
                                    <h3>
                                        <a target="_blank"
                                            href="{{asset('upload/digital_library/document/'.$item4->filename)}}"
                                            title="{{$item4->name}}">
                                        </a>
                                        <a
                                            href="{{asset('upload/digital_library/document/'.$item4->filename)}}"
                                            title="{{$item4->name}}">{{$item4->name}}
                                        </a>
                                    </h3>
                                    <div class="description"> 
                                        <a
                                            href="{{asset('upload/digital_library/document/'.$item4->filename)}}"
                                            title="{{$item4->name}}">
                                            <p>{{$item4->name}}</p>
                                        </a> 
                                    </div>
                                    <div class="medium_description">
                                        <p></p>
                                    </div> 
                                    <a class="product_btn download"
                                        href="{{asset('upload/digital_library/document/'.$item4->filename)}}"
                                        target="_blank" title="Загрузить" download="">Загрузить
                                    </a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <script type="text/javascript">
                    /* TAB CONTROL */
                    $(".list_downloads--in-tabs:not(:first)").hide();
                    $(".download_tabs .tab_title:first").addClass('tab_selected');
                    $(".download_tabs .tab_title").click(function (event) {
                        var id = $(this).attr('id');
                        if ($('#tab_' + id).is(":hidden")) {
                            $('.list_downloads--in-tabs').hide();
                            $('#tab_' + id).show();
                            $(".download_tabs .tab_title").removeClass('tab_selected');
                            $(this).addClass('tab_selected');
                        }
                        console.log('12345')
                    });
                    /* TAB CONTROL END */
                    $(".download_section > li > h3 > a").html(function (_, html) {
                        return html.replace(/(®)/g, '<sup></sup>');
                    });

                </script>
            </div>
            <div id="overlay" style="display: none;">
                <div class="loader"></div>
            </div>
            <script type="text/javascript">
                var filter_downloads = $('.filter_menu_bar_downloads');

                function filter_check() {
                    var legend_downloads = $(filter_downloads).find('legend').on('click', showOptions),
                        clearX = $(filter_downloads).find('.clear').on('click', clearSelection),
                        filter_list = $(filter_downloads).find('.filter_dropdown');
                    var _bum = function (e) {
                        !$(e.target).parents('.filter_downloads fieldset').length && $(
                            '.filter fieldset legend:has(+div:visible)').trigger('click');
                    }

                    function showOptions() {
                        $('.filter_dropdown:visible').not($(this).next()).stop().slideUp(200, function () {
                            $('body').unbind('mousedown', _bum);
                            $('body').unbind('touchstart', _bum);
                        });
                        var fieldset_downloads = $(this).parent();
                        fieldset_downloads.siblings().find('legend').removeClass('active');
                        filter_downloads.find('.filter_downloads').toggleClass('opened');
                        fieldset_downloads.find('legend').toggleClass('active').next().stop().slideToggle(200,
                            function () {
                                if ($(this).is(':visible')) {
                                    if (cantouch) {
                                        $('body').bind('touchstart', _bum);
                                    } else if (!$(document.body).hasClass('mobile')) {
                                        $('body').bind('mousedown', _bum);
                                    }
                                } else {
                                    $('body').unbind('mousedown', _bum);
                                    $('body').unbind('touchstart', _bum);
                                }
                            });
                    }

                    function clearSelection() {
                        var inputs_downloads = $(this).siblings('input');
                        inputs_downloads.prop("checked", false).next('label').removeClass('checked');
                    }
                }

                function switch_view(target) {
                    if (!$(target).hasClass('current')) {
                        var self = $(target).siblings().removeClass('current').end();
                        $('.list_downloads--in-tabs').removeClass('grid no-grid crsl').addClass(self.attr('class'));
                        self.addClass('current');
                        $('.list_downloads--in-tabs').hide();
                        $('.list_downloads--in-tabs').fadeIn();
                    }
                    $("#selector .list:not(:first)").hide();
                    $(".download_tabs .tab_title").removeClass('tab_selected');
                    $(".download_tabs .tab_title:first").addClass('tab_selected');
                }

                function resize_view() {
                    if ($(window).width() < 800) {
                        var blur = function (e) {
                                !$(e.target).parents('.views').length && $('.views ul').slideUp();
                            },
                            current_view = $('.views li.current').text().split(' ')[0].toUpperCase();
                        filter_downloads.find('.views ul').hide();
                        filter_downloads.find('.views h3').text('View ' + current_view).off('click').click(function () {
                            var views_ul = $(this).next();
                            views_ul.slideToggle(function () {
                                if ($(this).is(':visible')) {
                                    $('body').bind('click', blur);
                                } else {
                                    $('body').unbind('click', blur);
                                }
                            });
                            views_ul.find('li').click(function () {
                                var view_name = $(this).text().split(' ')[0].toUpperCase();
                                filter_downloads.find('.views h3').text('Views ' + view_name);
                                switch_view(this);
                                views_ul.slideUp();
                            });
                        });
                    } else {
                        filter_downloads.find('.views h3').off('click').text('Views');
                        filter_downloads.find('.views li').off('click').click(function () {
                            switch_view(this);
                        });
                        filter_downloads.find('.views ul').css('display', 'inline-block');
                        $('body').off('click');
                    }
                }
                $(document).ready(function () {
                    filter_check();
                    resize_view();
                });
                $(window).resize(resize_view);

            </script>
        </div><br><br><br>
        <div id="homepage-footer">
            <footer>
                <div class="footer-columns container-fluid fixed-content">
                  <div class="container section-padding">
                    <div class="row">
                      <div class="col-md-4 column" style="text-align: left">
                        <h6>НАВИГАТОР</h6>
                        <div class="footer-nav">
              
                          <ul>
                            <li><a href="{{route('frontend.allProduct')}}" class="nav-link">ПРОДУКТЫ</a></li>
                            <li><a href="{{route('frontend.library')}}" class="nav-link">ДОКУМЕНТЫ</a></li>
                            <li><a href="{{route('frontend.visualizer')}}" class="nav-link">ВИЗУАЛИЗАТОР</a></li>
                            <li><a href="{{route('frontend.contact')}}" class="nav-link">ЗАДАТЬ ВОПРОС</a></li>
              
                          </ul>
                        </div>
                      </div>
                      <div class="col-md-4 column" style="text-align: left">
                        <h6>КОНТАКТЫ</h6>
                        <p>195279, Санкт-Петербург, Шпалерная ул., 51 </p>
                        <p>бизнес-центр "Таврический"</p>
                        <p><a><i class="fa-solid fa-phone"></i></a> : +7 (812) 244 46 00</p>
                        <p><i class="fa-solid fa-envelope"></i></i> : office@pgsouz.ru</p>
                      </div>
              
                      <div class="logo col-md-2 col-sm-3 column">
                        <a href="{{route('frontend.index')}}"><img src="{{asset('/upload/img/SGlogo12.png')}}" alt="logo"></a>
              
                      </div>
              
                      <div class="logo col-md-2 col-sm-3 column">
                        <!-- <a href="#"><img src="img/SGlogo12.jpg" alt="logo"></a> -->
                        <div class="socials">
                          <a href="#" class="social-link"><i class="fa-brands fa-vk"></i></a>
                          <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                          <a href="#" class="social-link"><i class="fa-brands fa-telegram"></i></a>
                        </div>
              
                      </div>
              
              
                    </div>
                  </div><br><br><br>
                  <div class="copyright">
                    <div class="container">
                      <p class="d-inline-block">© 2012-2024 SOYUZ GROUP </p>
                      <a class="d-inline-block" href="#">Политика в отношении обработки персональных данных</a>
                    </div>
                  </div>
                </div>
              </footer>
        </div>
    </div>
    <div id="modal" class="iziModal" data-keyboard="false" aria-hidden="true" aria-labelledby="modal" role="dialog"
        style="z-index: 9999; border-radius: 0px; max-width: 600px;">
        <div class="iziModal-wrap">
            <div class="iziModal-content" style="padding: 0px;">
                <div class="search-bar-widget search">
                    <form action="/search/" method="GET"> <input type="text" name="query"
                            placeholder="Search in Ultradecor" autocomplete="off"> </form> <button
                        class="search-close-btn" data-izimodal-close="modal"><img src="/i/plus_bl.png" alt="Search">
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
