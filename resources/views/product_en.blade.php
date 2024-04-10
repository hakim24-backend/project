<?php 
    use App\Models\Description;
    use \Statickidz\GoogleTranslate;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>{{$product->name}}</title>
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/normalize.css')}}"
    />

    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/bootstrap.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;400;700&family=Ubuntu:wght@300;400;700&display=swap"
      rel="stylesheet"
    />

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/slick.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/slick-theme.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/layout_grid.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/responsive.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/product_detail.css')}}"
    />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/search.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/zoom_img.css')}}"/>
    <style>
      #magnifying_area {
        /* max-width: 500px;
        height: auto; */
        position: relative;
        margin: 10px auto;
      }
    
      #magnifying_img {
        width: 100%;
        height: auto;
      }
    
      #magnifying_area:hover,
      #magnifying_area:active {
        cursor: zoom-in;
        display: block;
      }
    
      #magnifying_area:hover #magnified_img,
      #magnifying_area:active #magnified_img {
        opacity: 1;
      }
    
      #magnified_img {
        width: 340px;
        height: 340px;
        background: url('{{asset('upload/product/'.$product->filename)}}') no-repeat #FFF;
        box-shadow: 0 5px 10px -2px rgba(0, 0, 0, 0.3);
        pointer-events: none;
        position: absolute;
        opacity: 0;
        border: 4px solid whitesmoke;
        z-index: 99;
        border-radius: 100%;
        display: block;
        transition: opacity .2s;
      }
    </style>

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
        @php
            $source = 'ru';
            $target = 'en';
            $text = $product->name;

            $trans = new GoogleTranslate();
            $result = $trans->translate($source, $target, $text);
        @endphp
        {{$result}}
      </span>
      <span><p>
        @if ($product->collection->category->name == 'Столешницы')
          @php
              $series = Description::where('id_product', $product->id)->where('name', 'Серия')->first();
          @endphp
          {{$series->value}}
        @elseif($product->collection->category->name == 'ЛДСП')
          @php
              $texture = Description::where('id_product', $product->id)->where('name', 'Тексеура')->first();
          @endphp
          {{$texture->value}}
        @else
        @php
            $source4 = 'ru';
            $target4 = 'en';
            $text4 = $product->collection->name;

            $trans4 = new GoogleTranslate();
            $result4 = $trans4->translate($source4, $target4, $text4);
        @endphp
          {{$result4}}
        @endif
      </p></span>
    </div>
        
          <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="project-info-box mt-0">
                        <h5>{{$result}}</h5>
                        <!-- <p class="mb-0">Vivamus pellentesque, felis in aliquam ullamcorper, lorem tortor porttitor erat, hendrerit porta nunc tellus eu lectus. Ut vel imperdiet est. Pellentesque condimentum, dui et blandit laoreet, quam nisi tincidunt tortor.</p> -->
                    </div><!-- / project-info-box -->
        
                    <div class="project-info-box">
                      @foreach ($description as $item)
                      @php
                          //translate colomn name
                          $source2 = 'ru';
                          $target2 = 'en';
                          $text2 = $item->name;
                          $trans2 = new GoogleTranslate();
                          $result2 = $trans2->translate($source2, $target2, $text2);

                          //translate colomn value
                          $source3 = 'ru';
                          $target3 = 'en';
                          $text3 = $item->value;
                          $trans3 = new GoogleTranslate();
                          $result3 = $trans3->translate($source3, $target3, $text3);
                      @endphp
                          <p><b>{{$result2}} :</b> {{$result3}}</p>
                      @endforeach
                    </div>
                    <!-- / project-info-box -->
        
                    <div class="project-info-box mt-0 mb-0">
                        <p class="mb-0">
                            <!-- <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                            <a href="#x" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a> -->
                        </p>
                    </div>
                    <!-- / project-info-box -->
                </div><!-- / column -->
        
        
                <div class="col-md-7">
                  <div id="magnifying_area">
                    <img id="magnifying_img" src="{{asset('upload/product/'.$product->filename)}}" alt="project-image">
                    <div id="magnified_img"></div>
                  </div>
                    <div class="project-info-box">
                        <!-- <p><b>Категории:</b> Столешницы Серия Color</p>
                        <p><b>Серия:</b> Color</p> -->
                    </div><!-- / project-info-box -->
                </div><!-- / column -->
            </div>
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

    <script src="{{asset('/js/zoom_img.js')}}"></script>
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script>
      let zoomer = function () {
          document.querySelector('#magnifying_area').addEventListener('mousemove', function (e) {

              let original = document.querySelector('#magnifying_img'),
                magnified = document.querySelector('#magnified_img'),
                style = magnified.style,
                rect = this.getBoundingClientRect(),
                x = e.pageX - rect.left - window.scrollX,
                y = e.pageY - rect.top - window.scrollY,
                imgWidth = original.offsetWidth,
                imgHeight = original.offsetHeight,
                xperc = ((x / imgWidth) * 100),
                yperc = ((y / imgHeight) * 100);
              //lets user scroll past right edge of image
              if (x > (.01 * imgWidth)) {
                xperc += (.15 * xperc);
              };

              //lets user scroll past bottom edge of image
              if (y >= (.01 * imgHeight)) {
                yperc += (.15 * yperc);
              };

              style.backgroundPositionX = (xperc - 9) + '%';
              style.backgroundPositionY = (yperc - 9) + '%';

              style.left = (x - 180) + 'px';
              style.top = (y - 180) + 'px';

            }, false);
        }();
    </script>
  </body>
</html>
