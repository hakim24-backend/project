<?php
use \Statickidz\GoogleTranslate;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>
    @if ($category != null)
      @if ($category->name == 'Столешницы')
      Countertops
      @elseif($category->name == 'ЛДСП')
      Particleboard (LDSP)
      @elseif($category->name == 'СТЕНОВЫЕ ПАНЕЛИ')
      MDF Wall Panels
      @elseif($category->name == 'МЕЖКОМНАТНЫЕ ДВЕРИ')
      Interior Doors
      @endif
    @endif
  </title>
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/normalize.css')}}" />

  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;400;700&family=Ubuntu:wght@300;400;700&display=swap"
    rel="stylesheet" />

  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/slick.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/slick-theme.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/layout_grid.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/responsive.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">
</head>

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
            <li class="nav-item"><a href="#" class="nav-link">Furniture Accessories</a>
              <ul class="dropdown">
                <li><a href="{{route('frontend.categoryEn', 'Столешницы')}}">Countertops</a></li>
                <li><a href="#">Furniture Details</a></li>
               

              </ul>
            </li>

            <li class="nav-item"><a href="#" class="nav-link">Panel Materials</a>
              <ul class="dropdown">
                <li><a href="{{route('frontend.categoryEn', 'ЛДСП')}}">Particleboards</a></li>
                <li><a href="#">Fiberboard (MDF)</a></li>
                <li><a href="#">Laminated Medium-Density Fiberboard (LMDP)</a></li>
                <li><a href="#">Medium-Density Fiberboard (MDF)</a></li>
                <li><a href="#">Oriented Strand Board (OSB)</a></li>
                <li><a href="#">Plywood</a></li>
              </ul>
            </li>

            <li class="nav-item"><a href="#" class="nav-link">Building Materials</a>
              <ul class="dropdown">
                <li><a href="{{route('frontend.categoryEn', 'Стеновые панели')}}">Wall Panels</a>
                </li>
                <li><a href="#">Timber</a></li>
                <li><a href="#">Planed Products</a></li>
                <li><a href="#">Fireproof Panels</a></li>
                <li><a href="#">Tongue-and-Groove Particleboard</a></li>
                <li><a href="#">Tongue-and-Groove Medium-Density Fiberboard</a></li>


              </ul>
            </li>

            <li class="nav-item"><a href="#" class="nav-link">Wooden Products</a>
              <ul class="dropdown">
                <li><a href="#">Pellets</a></li>
                <li><a href="#">Mulch</a></li>
                <li><a href="#">Containers</a></li>
                <li><a href="#">Pallets</a></li>
                <li><a href="#">Pallets</a></li>
                <li><a href="#">Gasket Sheets</a></li>
                <li><a href="#">Gasket Blocks</a></li>
                <li><a href="#">Wooden Product Sets</a></li>
              </ul>
            </li>

            <li class="nav-item"><a href="{{route('frontend.categoryEn', 'Стеновые панели')}}" class="nav-link">Interior Doors</a>
              <ul class="dropdown">

              </ul>
            </li>



            <li class="nav-item"><a href="#" class="nav-link">COMPANY</a>
              <ul class="dropdown">
                <li><a href="#">PROFILE HISTORY</a></li>
                <li><a href="#">WORK WITH US</a></li>
                <li><a href="#">COLLECTIONS</a></li>
                <li><a href="contact.html">Ask a Question</a></li>

              </ul>

            </li>

              <span>|</span>
              <li>
                <form action="/search.php" method="post">
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

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Furniture Components</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.categoryEn', 'Столешницы')}}" onclick="setTimeout(mobile_nav_toggle, 800)">Countertops</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Furniture Details</a></li>
                  <li><a href="{{route('frontend.categoryEn', 'ЛДСП')}}"
                      onclick="setTimeout(mobile_nav_toggle, 800)">Particle Boards</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">MDF</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Laminated MDF</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Fiberboard with PVC Overlay</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Oriented Strand Board</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Plywood</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link"
                  onclick="setTimeout(mobile_nav_toggle, 800)">Building Materials</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.categoryEn', 'Стеновые панели')}}"
                      onclick="setTimeout(mobile_nav_toggle, 800)">Wall Panels</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Timber Materials</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Planed Products</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Fireproof Panels</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Tongue-and-groove Particle Board</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Tongue-and-groove MDF</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Tongue-and-groove MDF</a></li>
                </ul>
              </li>


              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Wood Products</a>
                <ul class="dropdown">
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Pellets</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Mulch</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Containers</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Pallets</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Pallets</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Laying Sheets</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Laying Blocks</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Wooden Product Sets</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Interior Doors</a></li>
              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">COMPANY</a>
                <ul class="dropdown">
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Profile History</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Work With Us</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Ask a Question</a></li>
                </ul>
              </li>

              </li>
            </ul>

          </div>


        </div>
      </div>
    </div>
  </header>
  <!-- Layout grid -->
  <div class="gallerys">

    <span> 
      @if ($category != null)
        @if ($category->name == 'Столешницы')
        Countertops
        @elseif($category->name == 'ЛДСП')
        Particleboard (LDSP)
        @elseif($category->name == 'СТЕНОВЫЕ ПАНЕЛИ')
        MDF Wall Panels
        @elseif($category->name == 'МЕЖКОМНАТНЫЕ ДВЕРИ')
        Interior Doors
        @endif
      @endif  
    </span>
    <span>
      <p> 
        @if ($category != null)
        For over 20 years, we have been manufacturing and supplying particleboard countertops 
        that comply with European and Russian quality standards. 
        "Soyuz" countertops offer a vast assortment, exclusive designs, 
        top-notch performance characteristics, and affordable prices.
        @endif
        </p>
    </span>
  </div>
  <div class="gallery">
    @if ($collection != null)
      @foreach ($collection as $item)
          <a href="{{route('frontend.collectionEn', $item->id )}}"><img src="{{asset('/upload/collection/'.$item->filename)}}">
            @php
                $source = 'ru';
                $target = 'en';
                $text = $item->name;

                $trans = new GoogleTranslate();
                $result = $trans->translate($source, $target, $text);
            @endphp
            <h3>{{$result}}</h3>
          </a>
      @endforeach
    @endif
    
  </div>
  <!-- End of Layout grid -->
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
            <p>195279, Saint Petersburg, Shpalernaya St., 51</p>
            <p>"Tavricheskiy" Business Center</p>
            <p><a><i class="fa-solid fa-phone"></i></a> : +7 (812) 244 46 00</p>
            <p><i class="fa-solid fa-envelope"></i></i> : office@pgsouz.ru</p>
          </div>
          <div class="logo col-md-2 col-sm-3 column">
            <a href="{{route('frontend.en')}}"><img src="{{asset('/upload/img/SGlogo12.png')}}" alt="logo"></a>
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
          <a class="d-inline-block" href="#">Personal Data Processing Policy</a>
        </div>
      </div>
    </div>
  </footer>
  <!-- Footer -->

  <script src="{{asset('/js/jquery.min.js')}}"></script>
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/js/slick.min.js')}}"></script>
  <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>