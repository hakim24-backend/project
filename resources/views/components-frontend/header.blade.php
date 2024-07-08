<?php
use App\Models\Category;
use App\Models\Collection;

$menu1 = Category::where('name1', 'МЕБЕЛЬНЫЕ КОМПЛЕКТУЮЩИЕ')->get();
$menu2 = Category::where('name1', 'ПЛИТНЫЕ МАТЕРИАЛЫ')->get();
$menu3 = Category::where('name1', 'СТРОИТЕЛЬНЫЕ МАТЕРИАЛЫ')->get();
$menu4 = Category::where('name1', 'ИЗДЕЛИЯ ИЗ ДРЕВЕСИНЫ')->get();
$menu5 = Category::where('name1', 'КОМПАНИЯ')->get();
?>
<header class="header-bg">
    <div class="container-fluid">
      <div class="row">
        <div class="logo col-6 col-sm-4 col-md-3 col-lg-2 col-xl-1">
          <a href="{{route('frontend.index')}}"><img src="{{asset('/upload/img/SGlogo1.png')}}" alt="logo"></a>
        </div>
        <div class="desktop-nav col-6 col-sm-8 col-md-9 col-lg-10 col-xl-11 d-none d-lg-block">
          <nav class="nav">
            <ul class="menu">
              <li class="nav-item"><a href="#" class="nav-link {{ $active == 'МЕБЕЛЬНЫЕ КОМПЛЕКТУЮЩИЕ' ? 'active' : '' }}">Мебельные комплектующие</a>
                <ul class="dropdown">
                  @foreach ($menu1 as $item1)
                    <li class="header-menu"><a href="{{route('frontend.category', $item1->name)}}">{{$item1->name}}</a></li>
                  @endforeach
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link {{ $active == 'ПЛИТНЫЕ МАТЕРИАЛЫ' ? 'active' : '' }}">Плитные материалы</a>
                <ul class="dropdown">
                  @foreach ($menu2 as $item2)

                    @php
                        //cek collection or product
                        $cekCollection = Collection::where('id_category', $item2->id)->count();
                    @endphp
                    
                    @if ($cekCollection !== 0)
                      @if ($item2->name == 'ЛДСП')
                        <li><a href="{{route('frontend.category', $item2->name)}}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; {{$item2->name}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                      @else
                        <li><a href="{{route('frontend.category', $item2->name)}}">{{$item2->name}}</a></li>
                      @endif                        
                    @endif
                  @endforeach
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link {{ $active == 'СТРОИТЕЛЬНЫЕ МАТЕРИАЛЫ' ? 'active' : '' }}">Строительные материалы</a>
                <ul class="dropdown">
                  @foreach ($menu3 as $item3)
                    <li><a href="{{route('frontend.category', $item3->name)}}">{{$item3->name}}</a></li>
                  @endforeach


                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link {{ $active == 'ИЗДЕЛИЯ ИЗ ДРЕВЕСИНЫ' ? 'active' : '' }}">Изделия из древесины</a>
                <ul class="dropdown">
                  @foreach ($menu4 as $item4)
                    <li><a href="{{route('frontend.category', $item4->name)}}">{{$item4->name}}</a></li>
                  @endforeach
                </ul>
              </li>

              <li class="nav-item"><a href="{{route('frontend.category', 'Межкомнатные двери')}}" class="nav-link {{ $active == 'МЕЖКОМНАТНЫЕ ДВЕРИ' ? 'active' : '' }}">Межкомнатные двери</a>
                <ul class="dropdown">

                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link {{ $active == 'careers' || $active == 'careersv2' || $active == 'profile' || $active == 'contacts' ? 'active' : '' }}">КОМПАНИЯ</a>
                <ul class="dropdown">
                  <li><a href="{{route('frontend.profile')}}">ИСТОРИЯ ПРОФИЛЯ</a></li>
                  <li><a href="{{route('frontend.career')}}">Карьера</a></li>
                  <li><a href="{{route('frontend.careerv2')}}">Карьера 2</a></li>
                  <li><a href="#">КОЛЛЕКЦИИ</a></li>
                  <li><a href="{{route('frontend.contact')}}">Задать вопрос</a></li>
                </ul>

              </li>
              <li>
                {{-- <form action="{{route('frontend.search')}}" method="post">
                @csrf
                  <div class="search-box">
                    <input name="search" type="text" placeholder="Поиск " /><span></span>
                  </div>
                </form> --}}
                <a class="nav-link" data-toggle="modal" href="#myModal">поиск</a>
              </li>

              <span>|</span>
              <!-- ------------------------ langage section bar  -->
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
              <li class="nav-item"><a href="#" class="nav-link">МЕБЕЛЬНЫЕ КОМПЛЕКТУЮЩИЕ</a>
                <ul class="dropdown">
                  @foreach ($menu1 as $itemMobile1)
                    <li style="background: #9adee7"><a style="color: black" href="{{route('frontend.category', $itemMobile1->name)}}">{{$itemMobile1->name}}</a></li>
                  @endforeach
                  {{-- <li><a href="{{route('frontend.category', 'Столешницы')}}" onclick="setTimeout(mobile_nav_toggle, 2000)">Столешницы</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">МЕБЕЛЬНЫЕ ДЕТАЛИ</a></li>
                  <li><a href="{{route('frontend.category', 'ЛДСП')}}"
                      onclick="setTimeout(mobile_nav_toggle, 2000)">ЛДСП</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">ДСП</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">ЛМДФ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">МДФ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">ДВПО</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">ДВП</a></li> --}}
                </ul>
              </li>

              <li class="nav-item"><a href="#" class="nav-link">Плитные материалы</a>
                <ul class="dropdown">
                  @foreach ($menu2 as $itemMobile2)
                    <li style="background: #9adee7"><a style="color: black" href="{{route('frontend.category', $itemMobile2->name)}}">{{$itemMobile2->name}}</a></li>
                  @endforeach
                  {{-- <li><a href="{{route('frontend.category', 'Стеновые панели')}}"
                      onclick="setTimeout(mobile_nav_toggle, 2000)">Стеновые панели</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Пиломатериалы</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Строганные изделия</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Огнестойкие панели</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Шпунтованная ДСП</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Шпунтованная МДФ</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Шпунтованная МДФ</a></li> --}}
                </ul>
              </li>
              <li class="nav-item"><a href="#" class="nav-link">Строительные материалы</a>
                <ul class="dropdown">
                  @foreach ($menu3 as $itemMobile3)
                    <li style="background: #9adee7"><a style="color: black" href="{{route('frontend.category', $itemMobile3->name)}}">{{$itemMobile3->name}}</a></li>
                  @endforeach
                  {{-- <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Пеллеты</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Мульча</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Тара</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Палеты</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Поддоны</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Прокладочные листы</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Прокладочные бруски</a></li>
                  <li><a href="#" onclick="setTimeout(mobile_nav_toggle, 2000)">Комплекты изделий из древесины</a></li> --}}
                </ul>
              </li>
              <li class="nav-item"><a href="#" class="nav-link">Изделия из древесины</a>
                <ul class="dropdown">
                  @foreach ($menu4 as $itemMobile4)
                    <li style="background: #9adee7"><a style="color: black" href="{{route('frontend.category', $itemMobile4->name)}}">{{$itemMobile4->name}}</a></li>
                  @endforeach
                </ul>
              </li>
              <li class="nav-item"><a href="{{route('frontend.category', 'Межкомнатные двери')}}" class="nav-link">Межкомнатные двери</a></li>
              <li class="nav-item"><a href="#" class="nav-link">КОМПАНИЯ</a>
                <ul class="dropdown">
                  <li style="background: #9adee7"><a style="color: black" href="{{route('frontend.profile')}}">ИСТОРИЯ ПРОФИЛЯ</a></li>
                  <li style="background: #9adee7"><a style="color: black" href="{{route('frontend.career')}}">Карьера</a></li>
                  <li style="background: #9adee7"><a style="color: black" href="{{route('frontend.careerv2')}}">Карьера 2</a></li>
                  <li style="background: #9adee7"><a style="color: black" href="#">КОЛЛЕКЦИИ</a></li>
                  <li style="background: #9adee7"><a style="color: black" href="{{route('frontend.contact')}}">Задать вопрос</a></li>
                </ul>
              </li>
              <li class="nav-item"><a data-toggle="modal" href="#myModal" class="nav-link">поиск</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </header>