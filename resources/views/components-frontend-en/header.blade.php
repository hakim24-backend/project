<?php 
    use \Statickidz\GoogleTranslate;
    use App\Models\Category;

    $menu1 = Category::where('name1', 'МЕБЕЛЬНЫЕ КОМПЛЕКТУЮЩИЕ')->get();
    $menu2 = Category::where('name1', 'ПЛИТНЫЕ МАТЕРИАЛЫ')->get();
    $menu3 = Category::where('name1', 'СТРОИТЕЛЬНЫЕ МАТЕРИАЛЫ')->get();
    $menu4 = Category::where('name1', 'ИЗДЕЛИЯ ИЗ ДРЕВЕСИНЫ')->get();
    $menu5 = Category::where('name1', 'КОМПАНИЯ')->get();
?>
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
                @foreach ($menu1 as $item1)
                  <li><a href="{{route('frontend.categoryEn', $item1->name)}}">
                    @php
                          $source = 'ru';
                          $target = 'en';
                          $text = $item1->name;

                          $trans = new GoogleTranslate();
                          $result = $trans->translate($source, $target, $text);
                    @endphp
                    {{$result}}
                  </a></li>
                @endforeach
               

              </ul>
            </li>

            <li class="nav-item"><a href="#" class="nav-link">Panel Materials</a>
              <ul class="dropdown">
                @foreach ($menu2 as $item2)
                  <li><a href="{{route('frontend.categoryEn', $item2->name)}}">
                    @php
                          $source1 = 'ru';
                          $target1 = 'en';
                          $text1 = $item2->name;

                          $trans1 = new GoogleTranslate();
                          $result1 = $trans1->translate($source1, $target1, $text1);
                    @endphp
                    {{$result1}}
                  </a></li>
                @endforeach
              </ul>
            </li>

            <li class="nav-item"><a href="#" class="nav-link">Building Materials</a>
              <ul class="dropdown">
                @foreach ($menu3 as $item3)
                  <li><a href="{{route('frontend.categoryEn', $item3->name)}}">
                    @php
                          $source2 = 'ru';
                          $target2 = 'en';
                          $text2 = $item3->name;

                          $trans2 = new GoogleTranslate();
                          $result2 = $trans2->translate($source2, $target2, $text2);
                    @endphp
                    {{$result2}}
                  </a></li>
                @endforeach


              </ul>
            </li>

            <li class="nav-item"><a href="#" class="nav-link">Wooden Products</a>
              <ul class="dropdown">
                @foreach ($menu4 as $item4)
                  <li><a href="{{route('frontend.categoryEn', $item4->name)}}">
                    @php
                          $source3 = 'ru';
                          $target3 = 'en';
                          $text3 = $item4->name;

                          $trans3 = new GoogleTranslate();
                          $result3 = $trans3->translate($source3, $target3, $text3);
                    @endphp
                    {{$result3}}
                  </a></li>
                @endforeach
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