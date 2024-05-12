<header class="header-bg">
    <div class="container-fluid">
      <div class="row">
        <div class="logo col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1">
          <a href="{{route('frontend.index')}}"><img src="{{asset('/upload/img/SGlogo1.png')}}" alt="logo"></a>
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
              <li class="nav-item"><a href="#" class="nav-link">Мебельные комплектующие</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.category', 'Столешницы')}}">Столешницы</a></li>
                  <li><a href="#">Мебельные детали</a></li>
                 

                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">Плитные материалы</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.category', 'ЛДСП')}}">ЛДСП</a></li>
                  <li><a href="#">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; ДСП &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                  <li><a href="#">ЛМДФ</a></li>
                  <li><a href="#">МДФ</a></li>
                  <li><a href="#">ДВПО</a></li>
                  <li><a href="#">ДВП</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">Строительные материалы</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.category', 'Стеновые панели')}}">Стеновые панели</a>
                  </li>
                  <li><a href="#">Пиломатериалы</a></li>
                  <li><a href="#">Строганные изделия</a></li>
                  <li><a href="#">Огнестойкие панели</a></li>
                  <li><a href="#">Шпунтованная ДСП</a></li>
                  <li><a href="#">Шпунтованная МДФ</a></li>


                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">Изделия из древесины</a>
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

              <li class="nav-item"><a href="{{route('frontend.category', 'Межкомнатные двери')}}" class="nav-link">Межкомнатные двери</a>
                <ul class="dropdown">

                </ul>
              </li>



              <li class="nav-item"><a href="#" class="nav-link">КОМПАНИЯ</a>
                <ul class="dropdown">
                  <li><a href="#">ИСТОРИЯ ПРОФИЛЯ</a></li>
                  <li><a href="{{route('frontend.career')}}">Карьера</a></li>
                  <li><a href="#">КОЛЛЕКЦИИ</a></li>
                  <li><a href="{{route('frontend.contact')}}">Задать вопрос</a></li>

                </ul>

              </li>
              <span>|</span>
              <li>
                <form action="{{route('frontend.search')}}" method="post">
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

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Мебельные
                  комплектующие</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.category', 'Столешницы')}}" onclick="setTimeout(mobile_nav_toggle, 800)">Столешницы</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">МЕБЕЛЬНЫЕ ДЕТАЛИ</a></li>
                  <li><a href="{{route('frontend.category', 'ЛДСП')}}"
                      onclick="setTimeout(mobile_nav_toggle, 800)">ЛДСП</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">ДСП</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">ЛМДФ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">МДФ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">ДВПО</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">ДВП</a></li>
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link"
                  onclick="setTimeout(mobile_nav_toggle, 800)">Строительные материалы</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.category', 'Стеновые панели')}}"
                      onclick="setTimeout(mobile_nav_toggle, 800)">Стеновые панели</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Пиломатериалы</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Строганные изделия</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Огнестойкие панели</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Шпунтованная ДСП</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Шпунтованная МДФ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 800)">Шпунтованная МДФ</a></li>

                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link" onclick="setTimeout(mobile_nav_toggle, 800)">Изделия из
                  древесины</a>
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

              <li class="nav-item"><a href="#" class="nav-link"
                  onclick="setTimeout(mobile_nav_toggle, 800)">Межкомнатные двери</a></li>
              <li class="nav-item"><a href="#" class="nav-link"
                  onclick="setTimeout(mobile_nav_toggle, 800)">КОМПАНИЯ</a>
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