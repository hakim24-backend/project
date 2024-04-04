<?php 
    use App\Models\Description;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="x-icon" href="img/SG_верт_оригин.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Столешницы Коллекция Color</title>
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
      href="{{asset('/css/search.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/checkbox.css')}}"
    />
  </head>
  <style>
    .gallerys {
  
    padding: 250px;
    
    text-align: center;
    color: #ffffff;
    background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(rgba(0, 0, 0, 0)),
        color-stop(12%, rgba(0, 0, 0, 0.432)),
        to(rgba(0, 0, 0, 0.144))
        ),
        url('{{asset('/upload/img/image1/design-fond-moderne-3d-bois/design1.jpg')}}');
    }
  </style>

  <body data-spay="scroll" data-target=".nav" data-offset="100">
    <header>
      <div class="container-fluid">
        <div class="row">
          <div class="logo col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1">
            <a href="{{route('frontend.index')}}"><img src="{{asset('/upload/img/SGlogo1.png')}}" alt="logo" /></a>
          </div>
          <div
            class="desktop-nav col-6 col-sm-8 col-md-9 col-lg-10 col-xl-11 d-none d-lg-block"
          >
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
                <li class="nav-item">
                  <a href="#" class="nav-link">Мебельные комплектующие</a>
                  <ul class="dropdown">
                    <li><a href="stoleshnitsy.html">Столешницы</a></li>
                    <li><a href="#">Мебельные детали</a></li>
                    <li><a href="/meubleni complektyshie/ldcp/ldcp.html">ЛДСП</a></li>
                    <li><a href="#">ДСП</a></li>
                    <li><a href="#">ЛМДФ</a></li>
                    <li><a href="#">МДФ</a></li>
                    <li><a href="#">ДВПО</a></li>
                    <li><a href="#">ДВП</a></li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">Строительные материалы</a>
                  <ul class="dropdown">
                    <li><a href="/straitelni_materiali/стеновые_панели_мдф/стеновые_панели_мдф.html">Стеновые панели</a></li>
                    <li><a href="#">Пиломатериалы</a></li>
                    <li><a href="#">Строганные изделия</a></li>
                    <li><a href="#">Огнестойкие панели</a></li>
                    <li><a href="#">Шпунтованная ДСП</a></li>
                    <li><a href="#">Шпунтованная МДФ</a></li>
                    
                  </ul>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">Изделия из древесины</a>
                  <ul class="dropdown">
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

                <li class="nav-item">
                  <a href="#" class="nav-link">Межкомнатные двери</a>
                  <ul class="dropdown"></ul>
                </li>

                <li class="nav-item">
                  <a href="#" class="nav-link">КОМПАНИЯ</a>
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
                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link"
                    onclick="setTimeout(mobile_nav_toggle, 800)"
                    >Мебельные комплектующие</a
                  >
                  <ul class="dropdown">
                    <li>
                      <a href="/stoleshnitsy.html" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Столешницы</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >МЕБЕЛЬНЫЕ ДЕТАЛИ</a
                      >
                    </li>
                    <li>
                      <a href="/meubleni complektyshie/ldcp/ldcp.html" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >ЛДСП</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >ДСП</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >ЛМДФ</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >МДФ</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >ДВПО</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >ДВП</a
                      >
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link"
                    onclick="setTimeout(mobile_nav_toggle, 800)"
                    >Строительные материалы</a
                  >
                  <ul class="dropdown">
                    <li>
                      <a href="/straitelni_materiali/стеновые_панели_мдф/стеновые_панели_мдф.html" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Стеновые панели</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Пиломатериалы</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Строганные изделия</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Огнестойкие панели</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Шпунтованная ДСП</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Шпунтованная МДФ</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Шпунтованная МДФ</a
                      >
                    </li>
                    
                  </ul>
                </li>

                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link"
                    onclick="setTimeout(mobile_nav_toggle, 800)"
                    >Изделия из древесины</a
                  >
                  <ul class="dropdown">
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Пеллеты</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Мульча</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Тара</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Палеты</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Поддоны</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Прокладочные листы</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Прокладочные бруски</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Комплекты изделий из древесины</a
                      >
                    </li>
                  </ul>
                </li>

                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link"
                    onclick="setTimeout(mobile_nav_toggle, 800)"
                    >Межкомнатные двери</a
                  >
                </li>
                <li class="nav-item">
                  <a
                    href="#"
                    class="nav-link"
                    onclick="setTimeout(mobile_nav_toggle, 800)"
                    >КОМПАНИЯ</a
                  >
                  <ul class="dropdown">
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >ИСТОРИЯ ПРОФИЛЯ</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >РАБОТАТЬ С НАМИ</a
                      >
                    </li>
                    <li>
                      <a href="#" onclick="setTimeout(mobile_nav_toggle, 800)"
                        >Задать вопрос</a
                      >
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Layout grid -->
    <div class="gallerys">

      <span> Столешницы Коллекция Color</span>
      <span> <p> Более 20 лет мы производим и поставляем столешницы из ДСП, соответствующие европейским и российским стандартам качества. Столешницы «Союз» – это огромный ассортимент, эксклюзивные разработки, высочайшие эксплуатационные характеристики и демократичная цена.</p> </span>
    </div>
    <form action="/stoleshnitsy_color.php" method="post">
        <div class="checkbox-container">
            <div>
              <input id="univ" type="checkbox" name="category[]" value="universal">
              <label for="cb1">Universal</label>
            </div>
          
            <div>
              <input id="classic" type="checkbox" name="category[]" value="classic">
              <label for="cb2">Classic </label>
            </div>
            
            <div>
              <input id="pro" type="checkbox" name="category[]" value="pro">
              <label for="cb3">Standart Pro</label>
            </div>

            <div>
              <button id="filter" class="btn btn-success" type="submit">фильтр</button> &nbsp; <a class="btn btn-info" href="/stoleshnitsy_color.html">сброс</a>
            </div>
        </div>
      </form>
        <div class="gallery">

            @foreach ($product as $item)
                <a href="{{route('frontend.product', $item->id)}}"><img src="{{asset('/upload/product/'.$item->filename)}}">
                    <h3>{{$item->name}}</h3>
                    @php
                        $series = Description::where('id_product', $item->id)->where('name', 'Серия')->first();
                    @endphp
                    <p>{{$series->value}}</p>
                </a>
            @endforeach

        </div>
    <!-- End of Layout grid -->
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
                  <li><a href="#" class="nav-link">ВИЗУАЛИЗАТОР</a></li>
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
              <a href="#"><img src="img/SGlogo12.png" alt="logo"></a>
    
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
    <!-- Footer -->

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
<script>
  $("#filter").on("click",function(){

    var univ = document.getElementById("univ");
    var classic = document.getElementById("classic");
    var pro = document.getElementById("pro");

    if (univ.checked == false && classic.checked == false && pro.checked == false) {
      Swal.fire({
        icon: "error",
        title: "Простите",
        text: "пожалуйста заполните форму фильтра",
      });
      return false;
    } else {
      return true;
    }

  });
</script>
