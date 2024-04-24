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

  {{-- Header --}}
  @include('components-frontend-en.header')

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

  {{-- Footer --}}
  @include('components-frontend-en.footer')

  <script src="{{asset('/js/jquery.min.js')}}"> </script>
  <script src="{{asset('/js/bootstrap.min.js')}}"> </script>
  <script src="{{asset('/js/slick.min.js')}}"> </script>
  <script src="{{asset('/js/main.js')}}"> </script>

</body>

</html>