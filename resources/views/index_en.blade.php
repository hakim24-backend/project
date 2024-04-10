<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="{{asset('img/SG_верт_оригин.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Industrial Group Union</title>
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
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/столешницы_1_уровень.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/столешницы_1_уровень.jpg')}}');
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
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/лдсп.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/лдсп.jpg')}}');
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
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/мдф_коллаж1.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/мдф_коллаж1.jpg')}}');
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
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/door1.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/door1.jpg')}}');
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
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/door1.jpg')}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0.5) 100%
      ),
      url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/door3.jpg')}}');
    background-size: cover;
    background-position: center;
  }
</style>
<body data-spay="scroll" data-target=".nav" data-offset="100">
  <header>
    <div class="container-fluid">
      <div class="row">
        <div class="logo col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1">
          <a href="{{route('frontend.en')}}"><img src="{{asset('/upload/img/SGlogo1.png')}}" alt="logo"></a>
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
              <li class="nav-item"><a href="#" class="nav-link">Furniture components</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.categoryEn', 'Столешницы')}}">Tabletops</a></li>
                  <li><a href="#">Furniture Parts</a></li>
                  <li><a href="{{route('frontend.categoryEn', 'ЛДСП')}}">Laminated Chipboard</a></li>
                  <li><a href="#">Chipboard</a></li>
                  <li><a href="#">LMDF</a></li>
                  <li><a href="#">MDF</a></li>
                  <li><a href="#">DVPO</a></li>
                  <li><a href="#">Fiberboard</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">Construction Materials</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.categoryEn', 'Стеновые панели')}}">Wall panels</a>
                  </li>
                  <li><a href="#">Lumber</a></li>
                  <li><a href="#">Planed Products</a></li>
                  <li><a href="#">Fire Resistant Panels</a></li>
                  <li><a href="#">Tongue and Groove Chipboard</a></li>
                  <li><a href="#">Tongue and Groove MDF</a></li>


                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">Wood Products</a>
                <ul class="dropdown">
                  <li><a href="#">Pellets</a></li>
                  <li><a href="#">Mulch</a></li>
                  <li><a href="#">Tara</a></li>
                  <li><a href="#">Pallets</a></li>
                  <li><a href="#">Pallets</a></li>
                  <li><a href="#">Gaskets</a></li>
                  <li><a href="#">Gasket Strips</a></li>
                  <li><a href="#">Wooden Product Sets</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">Interior Doors</a>
                <ul class="dropdown">

                </ul>
              </li>


<!-- 
              <li class="nav-item"><a href="#" class="nav-link">КОМПАНИЯ</a>
                <ul class="dropdown">
                  <li><a href="#">ИСТОРИЯ ПРОФИЛЯ</a></li>
                  <li><a href="#">РАБОТАТЬ С НАМИ</a></li>
                  <li><a href="#">КОЛЛЕКЦИИ</a></li>
                  <li><a href="contact.html">Задать вопрос</a></li>

                </ul>

              </li> -->
              <span>|</span>

              <li>
                <form action="{{route('frontend.searchEn')}}" method="post">
                @csrf
                  <div class="search-box">
                    <input name="search" type="text" placeholder="Поиск " /><span></span>
                  </div>
                </form>


              </li>


              <!-- ------------------------ langage section bar  -->
              <span>|</span>
              <li class="current">
                <a href="{{route('frontend.index')}}" style="color: white; text-decoration: none" rel="alternate" hreflang="ru-RU">RU</a>
                <a href="{{route('frontend.en')}}" style="color: white; text-decoration: none" rel="alternate" hreflang="en-US">EN</a>
              </li>

              <!-- <li class="link">
                <a href="/en_US/" style="color: white; text-decoration: none" rel="alternate" hreflang="en-US">EN</a>
              </li> -->

              <!-- end langage section  bar-->


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

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Furniture components</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.categoryEn', 'Столешницы')}}" onclick="setTimeout(mobile_nav_toggle, 800)">Countertops</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Furniture parts</a></li>
                  <li><a href="{{route('frontend.category', 'ЛДСП')}}"
                      onclick="setTimeout(mobile_nav_toggle, 800)">Laminate chipboard (LDSP)</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">DSP</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Laminate MDF (LMDF)</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">MDF</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">DVP</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">HDF</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link"
                  onclick="setTimeout(mobile_nav_toggle, 800)">Building materials</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.category', 'Стеновые панели')}}"
                      onclick="setTimeout(mobile_nav_toggle, 800)">Wall panels</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Timber</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Planed products</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Fireproof panels</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Grooved DSP</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Grooved MDF</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Grooved HDF</a></li>

                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Wooden products</a>
                <ul class="dropdown">
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Pellets</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Mulch</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Packaging</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Pallets</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Pallets</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Gaskets</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Packing blocks</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Wooden product sets</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Interior doors</a></li>
              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Company</a>
                <ul class="dropdown">
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Profile history</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Work with us</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Ask a question</a></li>

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
                <h1>Countertops<span class="primary-color">|</span></h1>
                <p>Famous among manufacturers, stable consumer demand, variety of classic and modern designs, glossy decors, exclusive trendy decors, 
                  4 new structures, premium quality at an affordable price, wood and stone, original decors in collections, imitation of natural 
                  material textures, global design trends, authentic reproduction of natural materials - full-format stone and wood pattern, 
                  foil decors, plastics with digital printing</p>
                <div class="cta">
                  <a href="countertops.html" class="button button-primary">LEARN MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item slide2">
          <div class="col-10 m-auto">
            <div class="row h100 align-items-center">
              <div class="col col-xl-6 slide-left">
                <h1>Laminate<span class="primary-color">|</span></h1>
                <p>A unique, flexible, high-tech production and supply system of furniture facades and accessories for the Russian market.</p>
                <div class="cta">
                  <a href="/meubleni complektyshie/ldcp/ldcp.html" class="button button-primary">LEARN MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item slide3">
          <div class="col-10 m-auto">
            <div class="row h100 align-items-center">
              <div class="col col-xl-6 slide-left">
                <h1>Wall Panels<span class="primary-color">|</span></h1>
                <p>A wide range of furniture profiles based on MDF, possessing exceptional performance qualities.</p>
                <div class="cta">
                  <a href="/straitelni_materiali/стеновые_панели_мдф/стеновые_панели_мдф.html" class="button button-primary">LEARN MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item slide4">
          <div class="col-10 m-auto">
            <div class="row h100 align-items-center">
              <div class="col col-xl-6 slide-left">
                <h1>INTERIOR DOORS<span class="primary-color">|</span></h1>
                <p>We create a comfortable, safe, and aesthetically appealing living environment for homes, 
                  as well as social and commercial spaces.</p>
                <div class="cta">
                  <a href="#" class="button button-primary">LEARN MORE</a>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="carousel-item slide5">
          <div class="col-10 m-auto">
            <div class="row h100 align-items-center">
              <div class="col col-xl-6 slide-left">
                <h1>INTERIOR DOORS<span class="primary-color">|</span></h1>
                <p>We create a comfortable, safe, and aesthetically appealing living environment for homes, 
                  as well as social and commercial spaces.</p>
                <div class="cta">
                  <a href="#" class="button button-primary">LEARN MORE</a>
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
              <h6>NAVIGATOR</h6>
              <div class="footer-nav">
                <ul>
                  <li><a href="#" class="nav-link">PRODUCTS</a></li>
                  <li><a href="#" class="nav-link">COLLECTIONS</a></li>
                  <li><a href="#" class="nav-link">VISUALIZER</a></li>
                  <li><a href="#" class="nav-link">COMPANY</a></li>
                </ul>
              </div>
            </div>
            <div class="col-md-4 column">
              <h6>CONTACTS</h6>
              <p>195279, Saint Petersburg, Shpalernaya ul., 51</p>
              <p>"Tavricheskiy" business center</p>
              <p><a><i class="fa-solid fa-phone"></i></a> : +7 (812) 244 46 00</p>
              <p><i class="fa-solid fa-envelope"></i></i> : office@pgsouz.ru</p>
            </div>
            <div class="logo col-md-2 col-sm-3 column">
              <a href="{{route('frontend.index')}}"><img src="{{asset('/upload/img/SGlogo12.png')}}" alt="logo"></a>
            </div>
            <div class="logo col-md-2 col-sm-3 column">
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
            <a class="d-inline-block" href="#">Privacy Policy</a>
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