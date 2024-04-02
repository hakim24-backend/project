<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Промышленная группа Союз</title>
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/normalize.css')}}">

  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;400;700&family=Ubuntu:wght@300;400;700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick-theme.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/responsive.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">
</head>
<style>
  #hero-slider .slide1 {
    background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(rgba(0, 0, 0, 0)),
        color-stop(12%, rgba(0, 0, 0, 0.8)),
        to(rgba(0, 0, 0, 0.5))
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design1.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design1.jpg')}}');
    background-size: cover;
    background-position: center;
  }
  #hero-slider .slide2 {
    background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(rgba(0, 0, 0, 0.95)),
        color-stop(12%, rgba(0, 0, 0, 0.8)),
        to(rgba(0, 0, 0, 0.5))
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design2.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design2.jpg')}}');
    background-size: cover;
    background-position: center;
  }
  #hero-slider .slide3 {
    background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(rgba(0, 0, 0, 0.95)),
        color-stop(12%, rgba(0, 0, 0, 0.8)),
        to(rgba(0, 0, 0, 0.5))
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design3.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design3.jpg')}}');
    background-size: cover;
    background-position: center;
  }
  #hero-slider .slide4 {
    background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(rgba(0, 0, 0, 0.95)),
        color-stop(12%, rgba(0, 0, 0, 0.8)),
        to(rgba(0, 0, 0, 0.5))
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design6.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design6.jpg')}}');
    background-size: cover;
    background-position: center;
  }
  #hero-slider .slide5 {
    background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(rgba(0, 0, 0, 0.95)),
        color-stop(12%, rgba(0, 0, 0, 0.8)),
        to(rgba(0, 0, 0, 0.5))
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design5.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0.5) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design5.jpg')}}');
    background-size: cover;
    background-position: center;
  }
</style>

<body data-spay="scroll" data-target=".nav" data-offset="100">
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="logo col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1">
          <a href="index.html"><img src="{{asset('/upload/img/SGlogo1.png')}}" alt="logo"></a>
        </div>
        <div class="desktop-nav col-6 col-sm-8 col-md-9 col-lg-10 col-xl-11 d-none d-lg-block">
          <nav class="nav">
            <ul class="menu">
              <!-- Столешницы=stoleshnitsy
              Мебельные детали=mebelnye-detali
              ЛДСП=ldcp
              ДСП=dcp
              ЛМДФ=lmdf
              МДФ=mlf
              ДВПО=dvpo
              ДВП =dvp
            -->
              <li class="nav-item"><a href="#" class="nav-link" >Мебельные комплектующие</a>
                <ul class="dropdown" >
                  <li><a href="/stoleshnitsy.html">Столешницы</a></li>  
                  <li><a href="#">Мебельные детали</a></li>  
                  <li><a href="/meubleni complektyshie/ldcp/ldcp.html">ЛДСП</a></li>
                  <li><a href="#">ДСП</a></li>
                  <li><a href="#">ЛМДФ</a></li>
                  <li><a href="#">МДФ</a></li>
                  <li><a href="#">ДВПО</a></li>
                  <li><a href="#">ДВП</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" >Строительные материалы</a>
                <ul class="dropdown" >
                  <li><a href="/straitelni_materiali/стеновые_панели_мдф/стеновые_панели_мдф.html">Стеновые панели</a></li>
                  <li><a href="#">Пиломатериалы</a></li>
                  <li><a href="#">Строганные изделия</a></li>
                  <li><a href="#">Огнестойкие панели</a></li>
                  <li><a href="#">Шпунтованная ДСП</a></li>
                  <li><a href="#">Шпунтованная МДФ</a></li>
                  
                  
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" >Изделия из древесины</a>
                <ul class="dropdown" >
                  <li><a href="#">Пеллеты</a></li>
                  <li><a href="#">Мульча</a></li>
                  <li><a href="#">Тара</a></li>
                  <li><a href="#">Палеты</a></li>
                  <li><a href="#">Поддоны</a></li>
                  <li><a href="#">Прокладочные листы</a></li>
                  <li><a href="#">Прокладочные бруски</a></li>
                  <li><a href="#">Комплекты изделий из древесины</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" >Межкомнатные двери</a>
                <ul class="dropdown" >
                 
                </ul>
              </li>


             
              <li class="nav-item"><a href="#" class="nav-link">КОМПАНИЯ</a>
                <ul class="dropdown">
                  <li><a href="#">ИСТОРИЯ ПРОФИЛЯ</a></li>
                  <li><a href="#">РАБОТАТЬ С НАМИ</a></li>
                  <li><a href="#">КОЛЛЕКЦИИ</a></li>
                  <li><a href="#">Задать вопрос</a></li>

                </ul>
              
              </li>
              <span>|</span>

              <li>
                <form action="/search.php" method="post">
                  <div class="search-box">
                    <input name="search" type="text" placeholder="Поиск "/><span></span>
                  </div>
                </form>
              </li>

              <!-- <li class="socials">
                <a href="#" class="social-link"><i class="fa-brands fa-vk"></i></a>
                <a href="#" class="social-link"><i class="fa-solid fa-phone"></i></a>
              </li> -->
            </ul>
          </nav>     
        </div>


 <!-- mobile responsive -->
        <div class="mobile-nav d-lg-none">

          <div class="nav-bg"></div>

          <div class="nav-icon">
            <div class="bars">
              <i class="bar"></i>
              <i class="bar"></i>
              <i class="bar"></i>
            </div>
          </div>

          <div class="nav">

            <ul>

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Мебельные комплектующие</a>
                <ul class="dropdown">
                  <li><a href="/stoleshnitsy.html" onclick="setTimeout(mobile_nav_toggle, 800)">Столешницы</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">МЕБЕЛЬНЫЕ ДЕТАЛИ</a></li>
                  <li><a href="/meubleni complektyshie/ldcp/ldcp.html" onclick="setTimeout(mobile_nav_toggle, 800)">ЛДСП</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">ДСП</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">ЛМДФ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">МДФ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">ДВПО</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">ДВП</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Строительные материалы</a>
                <ul class="dropdown">
                  <li><a href="/straitelni_materiali/стеновые_панели_мдф/стеновые_панели_мдф.html" onclick="setTimeout(mobile_nav_toggle, 800)">Стеновые панели</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Пиломатериалы</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Строганные изделия</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Огнестойкие панели</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Шпунтованная ДСП</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Шпунтованная МДФ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Шпунтованная МДФ</a></li>
                  
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Изделия из древесины</a>
                <ul class="dropdown">
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Пеллеты</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Мульча</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Тара</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Палеты</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Поддоны</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Прокладочные листы</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Прокладочные бруски</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Комплекты изделий из древесины</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Межкомнатные двери</a></li>
              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">КОМПАНИЯ</a>
                <ul class="dropdown">
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">ИСТОРИЯ ПРОФИЛЯ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">РАБОТАТЬ С НАМИ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Задать вопрос</a></li>

                </ul>
              
              </li>
            </ul>

          </div>


        </div>
      </div>
    </div>
  </header>
                  <!-- section heros -->
  <section class="hero">
    <div id="hero-slider" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <div class="col-10 m-auto">
        <ul class="carousel-indicators">
          <li data-target="#hero-slider" data-slide-to="0" class="active"></li>
          <li data-target="#hero-slider" data-slide-to="1"></li>
          <li data-target="#hero-slider" data-slide-to="2"></li>
          <li data-target="#hero-slider" data-slide-to="3"></li>
          <li data-target="#hero-slider" data-slide-to="4"></li>
        </ul>
      </div>

      <!-- The slideshow -->
      <div class="carousel-inner">

        <div class="carousel-item slide1 active">
          <div class="col-10 m-auto">
            <div class="row h100 align-items-center">
              <div class="col col-xl-6 slide-left">
                <h1>Мебельные комплектующие <span class="primary-color">|</span></h1>
                <p>Промышленная группа «Союз»
                  – единственная компания на российском мебельном рынке,
                  реализующая полный спектр мебельных комплектующих для выпуска
                  корпусной мебели</p>
                <div class="cta">
                  <a href="#" class="button button-primary">ПОДРОБНЕЕ</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item slide2">
          <div class="col-10 m-auto">
            <div class="row h100 align-items-center">
              <div class="col col-xl-6 slide-left">
                <h1>Столешницы<span class="primary-color">|</span></h1>
                <p>Более 20 лет мы производим столешницы высочайшего качества.
                  Столешницы «Союз» это уникальные технологии, эксклюзивный дизайн,
                  огромный ассортимент</p>
                <div class="cta">
                  <a href="stoleshnitsy.html" class="button button-primary">ПОДРОБНЕЕ</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item slide3">
          <div class="col-10 m-auto">
            <div class="row h100 align-items-center">
              <div class="col col-xl-6 slide-left">
                <h1>ЛДСП<span class="primary-color">|</span></h1>
                <p>Уникальная для российского рынка гибкая высокотехнологичная
                  система производства и поставки мебельных фасадов и
                  аксессуаров.</p>
                <div class="cta">
                  <a href="/meubleni complektyshie/ldcp/ldcp.html" class="button button-primary">ПОДРОБНЕЕ</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item slide4">
          <div class="col-10 m-auto">
            <div class="row h100 align-items-center">
              <div class="col col-xl-6 slide-left">
                <h1>Мебельный профиль<span class="primary-color">|</span></h1>
                <p>Огромный ассортимент мебельных профилей на основе МДФ,
                  обладающих исключительными эксплуатационными качествами.</p>
                <div class="cta">
                  <a href="#" class="button button-primary">ПОДРОБНЕЕ</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item slide5">
          <div class="col-10 m-auto">
            <div class="row h100 align-items-center">
              <div class="col col-xl-6 slide-left">
                <h1>Строительные и отделочные материалы<span class="primary-color">|</span></h1>
                <p>Мы создаем удобную, безопасную и эстетически привлекательную среду
                  обитания для дома, а также социальных и коммерческих объектов </p>
                <div class="cta">
                  <a href="#" class="button button-primary">ПОДРОБНЕЕ</a>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Left and right controls -->
      <a class="carousel-control carousel-control-prev" href="#hero-slider" data-slide="prev">

        <div class="arrow arrow-prev"><img src="{{asset('/upload/img/Arrow-left.png')}}" alt="Arrow-left"></div>
      </a>
      <a class="carousel-control carousel-control-next" href="#hero-slider" data-slide="next">
        <div class="arrow arrow-next"><img src="{{asset('/upload/img/Arrow-right.png')}}" alt="Arrow-right"></div>

      </a>

    </div>
  </section>
                  <!-- Footer -->
<footer>
  <div class="footer-columns container-fluid fixed-content">
    <div class="container section-padding">
      <div class="row">
        <div class="col-md-4 column">
          <h6>НАВИГАТОР</h6>
          <div class="footer-nav">

            <ul>
              <li><a href="#" class="nav-link">ПРОДУКТЫ</a></li>
              <li><a href="#" class="nav-link">КОЛЛЕКЦИИ</a></li>
              <li><a href="/visualiter.html" class="nav-link">ВИЗУАЛИЗАТОР</a></li>
              <li><a href="#" class="nav-link">КОМПАНИЯ</a></li>
             
            </ul>
          </div>
        </div>
        <div class="col-md-4 column">
          <h6>КОНТАКТЫ</h6>
          <p>195279, Санкт-Петербург, Шпалерная ул., 51 </p>
          <p>бизнес-центр "Таврический"</p>
          <p><a><i class="fa-solid fa-phone"></i></a>    : +7 (812) 244 46 00</p>
          <p><i class="fa-solid fa-envelope"></i></i>    : office@pgsouz.ru</p>
        </div>

        <div class="logo col-md-2 col-sm-3 column">
          <a href="index.html"><img src="{{asset('/upload/img/SGlogo12.png')}}" alt="logo"></a>

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
    </div>
    <div class="copyright">
      <div class="container">
        <p class="d-inline-block">© 2012-2024 SOYUZ GROUP </p>
        <a class="d-inline-block" href="#">Политика в отношении обработки персональных данных</a>
      </div>
    </div>

  </div>
</footer>

  <script src="{{asset('/js/jquery.min.js')}}"> </script>
  <script src="{{asset('/js/bootstrap.min.js')}}"> </script>
  <script src="{{asset('/js/slick.min.js')}}"> </script>
  <script src="{{asset('/js/main.js')}}"> </script>

</body>

</html>