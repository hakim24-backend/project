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

            <li class="nav-item"><a href="{{route('frontend.categoryEn', 'Межкомнатные двери')}}" class="nav-link">Interior Doors</a>
              <ul class="dropdown">

              </ul>
            </li>



            <li class="nav-item"><a href="#" class="nav-link">COMPANY</a>
              <ul class="dropdown">
                <li><a href="#">PROFILE HISTORY</a></li>
                <li><a href="{{route('frontend.careerEn')}}">CAREER</a></li>
                <li><a href="#">COLLECTIONS</a></li>
                <li><a href="{{route('frontend.contactEn')}}">ASK A QUESTION</a></li>

              </ul>

            </li>

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