<!DOCTYPE html>
<html lang="ru">

<!-- Mirrored from pgsouz.ru/kompaniya/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Jun 2024 15:40:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<!-- /Added by HTTrack -->
<head>
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
<meta name="yandex-verification" content="be2af71c171dde9f" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="robots" content="index, follow" />
<meta name="keywords" content="Компания" />
<meta name="description" content="Компания" />
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

{{-- css header and footer --}}
<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick.css')}}">
{{-- <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick-theme.css')}}"> --}}
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/responsive.css')}}">
<link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">

<link href="{{asset('profile/css/style1.css')}}" type="text/css"  data-template-style="true" rel="stylesheet" />

<!-- Stylesheets -->
<link rel="stylesheet" href="{{asset('profile/css/all.css')}}" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="{{asset('profile/css/style.css')}}" type="text/css" />

<!-- Scripts -->

<title>Компания</title>
</head>
<style>
    p {
        color: #ffffff;
    }
</style>
<body class="page-company">

    {{-- Header --}}
    @include('components-frontend.header')

<div id="wrapper">
  <div class="main-slider-wrap">
    <div id="slider" class="main-slider">
      @if ($company->isNotEmpty())
        @foreach ($company as $item)
          <div class="main-company" style="background-image: url('{{asset('upload/company/'.$item->filename)}}');">
            <div class="container">
              <div class="row">
                <div class="col-lg-5">
                  <p class="title">{{$item->tittle1}}</p>
                  <p>{{$item->desc1}}</p>
                </div>
                <div class="col-lg-6">
                  <div class="row about-short">
                    <div class="item">
                      <p class="h1">{{$item->tittle2}}</p>
                      <p>{{$item->desc2}}</p>
                    </div>
                    <div class="item">
                      <p class="h1">{{$item->tittle3}}</p>
                      <p>{{$item->desc3}}</p>
                    </div>
                    <div class="item">
                      <p class="h1">{{$item->tittle4}}</p>
                      <p>{{$item->desc4}}</p>
                    </div>
                    <div class="item">
                      <p class="h1">{{$item->tittle5}}</p>
                      <p>{{$item->desc5}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach
      @endif
    </div>
    <div class="slider-nav-wrap">
      <div class="container">
        <div class="slider-nav"></div>
      </div>
    </div>
  </div>
  <div class="main-advantages">
    <div class="container">
      <p class="h1">Преимущества сотрудничества с нами</p>
      <div class="row advantages-items">
        <div class="col-lg-4 col-sm-6">
          <div class="advantages-item">
            <div class="icon"><img src="{{asset('profile/images/medal.png')}}" alt="Производственный комплекс" title="Производственный комплекс"></div>
            <p class="h2">Производственный комплекс</p>
            <p> Включает автоматизированные линии ведущих станкостроительных заводов Европы. Линия по производству мебельных фасадов создана в Германии специально для ПГ «СОЮЗ» и не имеет аналогов в РФ. </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="advantages-item">
            <div class="icon"><img src="{{asset('profile/images/navigation.png')}}" alt="Масштаб присутствия" title="Масштаб присутствия"></div>
            <p class="h2">Масштаб присутствия</p>
            <p> Продукция Промышленной группы «СОЮЗ» представлена во всех регионах России и странах ближнего и дальнего зарубежья.и. </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="advantages-item">
            <div class="icon"><img src="{{asset('profile/images/path.png')}}" alt="Совершенная логистика" title="Совершенная логистика"></div>
            <p class="h2">Совершенная логистика</p>
            <p> Отлаженные схемы поставок широкого спектра мебельных комплектующих от одного производителя по России и за рубеж обеспечивают оперативность и сокращение транспортных издержек. </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="advantages-item">
            <div class="icon"><img src="{{asset('profile/images/capacity.png')}}" alt="Собственная сырьевая база" title="Собственная сырьевая база"></div>
            <p class="h2">Собственная сырьевая база</p>
            <p> Предприятия холдинга обеспечивают гарантированное наличие сырья и материалов, необходимых для производства. </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="advantages-item">
            <div class="icon"><img src="{{asset('profile/images/sketch.png')}}" alt="Конструкторские разработки" title="Конструкторские разработки"></div>
            <p class="h2">Конструкторские разработки</p>
            <p> Специалисты конструкторского бюро ПГ «Союз» постоянно совершенствуют технологии производства, внедряют передовые решения, разрабатывают и предлагают рынку новые эксклюзивные продукты. </p>
          </div>
        </div>
        <div class="col-lg-4 col-sm-6">
          <div class="advantages-item">
            <div class="icon"><img src="{{asset('profile/images/kitchen.png')}}" alt="Уникальный модельный ряд" title="Уникальный модельный ряд"></div>
            <p class="h2">Уникальный модельный ряд</p>
            <p> Мы предлагаем максимальный выбор декоров и конфигураций по всем видам производимой продукции. Мы тщательно  отслеживаем потребительский спрос  и, в соответствии с ним, внедряем новинки в производство. </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="our-history">
    <div class="container">
      <p class="h1">История нашей компании</p>
      <div class="tabs">
        <div class="tab-content">

          <div class="tab-pane fade show active" id="362" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/43a572cacbe30f3543bae9c2ad55d9ee.jpg')}}" alt="2024" title="2024"></div>
              <div class="col-md-7 text-wrap">
                <p>2024</p>
                <p> Выведен на рынок новый эксклюзивный продукт: R2 Eclipse – тонкая столешница из МДФ с радиусом завала 2 мм </p>
                <p> Коллекция столешниц дополнена декорами, доподлинно воспроизводящими натуральные материалы – камень и дерево </p>
                <p> Успешно завершен международный проект в области подтверждения качества панелей МДФ и сопутствующего строительного погонажа, выпускаемого под торговой маркой «Союз». </p>
                <p> В коллекции стеновых панелей МДФ появились декоры с различными видами оригинальных тиснений. </p>
                <p> </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>  

          <div class="tab-pane fade " id="361" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/43a572cacbe30f3543bae9c2ad55d9ee.jpg')}}" alt="2022" title="2023"></div>
              <div class="col-md-7 text-wrap">
                <p>2023 </p>
                <p> Выведен на рынок новый эксклюзивный продукт: R2 Eclipse – тонкая столешница из МДФ с радиусом завала 2 мм </p>
                <p> Коллекция столешниц дополнена декорами, доподлинно воспроизводящими натуральные материалы – камень и дерево </p>
                <p> Успешно завершен международный проект в области подтверждения качества панелей МДФ и сопутствующего строительного погонажа, выпускаемого под торговой маркой «Союз». </p>
                <p> В коллекции стеновых панелей МДФ появились декоры с различными видами оригинальных тиснений. </p>
                <p> </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>  

          <div class="tab-pane fade " id="360" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/43a572cacbe30f3543bae9c2ad55d9ee.jpg')}}" alt="2022" title="2022"></div>
              <div class="col-md-7 text-wrap">
                <p>2022 </p>
                <p> Выведен на рынок новый эксклюзивный продукт: R2 Eclipse – тонкая столешница из МДФ с радиусом завала 2 мм </p>
                <p> Коллекция столешниц дополнена декорами, доподлинно воспроизводящими натуральные материалы – камень и дерево </p>
                <p> Успешно завершен международный проект в области подтверждения качества панелей МДФ и сопутствующего строительного погонажа, выпускаемого под торговой маркой «Союз». </p>
                <p> В коллекции стеновых панелей МДФ появились декоры с различными видами оригинальных тиснений. </p>
                <p> </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>   
          
          <div class="tab-pane fade " id="359" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/43a572cacbe30f3543bae9c2ad55d9ee.jpg')}}" alt="2021" title="2021"></div>
              <div class="col-md-7 text-wrap">
                <p>2021 </p>
                <p> Выведен на рынок новый эксклюзивный продукт: R2 Eclipse – тонкая столешница из МДФ с радиусом завала 2 мм </p>
                <p> Коллекция столешниц дополнена декорами, доподлинно воспроизводящими натуральные материалы – камень и дерево </p>
                <p> Успешно завершен международный проект в области подтверждения качества панелей МДФ и сопутствующего строительного погонажа, выпускаемого под торговой маркой «Союз». </p>
                <p> В коллекции стеновых панелей МДФ появились декоры с различными видами оригинальных тиснений. </p>
                <p> </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>  


          <div class="tab-pane fade " id="358" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/43a572cacbe30f3543bae9c2ad55d9ee.jpg')}}" alt="2020" title="2020"></div>
              <div class="col-md-7 text-wrap">
                <p>2020 </p>
                <p> Выведен на рынок новый эксклюзивный продукт: R2 Eclipse – тонкая столешница из МДФ с радиусом завала 2 мм </p>
                <p> Коллекция столешниц дополнена декорами, доподлинно воспроизводящими натуральные материалы – камень и дерево </p>
                <p> Успешно завершен международный проект в области подтверждения качества панелей МДФ и сопутствующего строительного погонажа, выпускаемого под торговой маркой «Союз». </p>
                <p> В коллекции стеновых панелей МДФ появились декоры с различными видами оригинальных тиснений. </p>
                <p> </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>  
          
          
          
          
          
          <div class="tab-pane fade " id="357" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/43a572cacbe30f3543bae9c2ad55d9ee.jpg')}}" alt="2019" title="2019"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> Выведен на рынок новый эксклюзивный продукт: R2 Eclipse – тонкая столешница из МДФ с радиусом завала 2 мм </p>
                <p> Коллекция столешниц дополнена декорами, доподлинно воспроизводящими натуральные материалы – камень и дерево </p>
                <p> Успешно завершен международный проект в области подтверждения качества панелей МДФ и сопутствующего строительного погонажа, выпускаемого под торговой маркой «Союз». </p>
                <p> В коллекции стеновых панелей МДФ появились декоры с различными видами оригинальных тиснений. </p>
                <p> </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="356" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/9408fb6b7aa0ebb49c9b01bb04831091.jpg')}}" alt="2018" title="2018"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p>
                
                <p>
                
                <p> Открыт «Торговый дом «Союз» в г. Екатеринбург. </p>
                <p> Выведен на рынок новый продукт в линейке МФС Alleanza – фасады «Комби». </p>
                <p> Обновлена коллекция декоров столешниц. </p>
                <p> Обновлена коллекция декоров стеновых панелей МДФ </p>
                <p> Успешно реализован холдинговый инвестиционный проект ПГ «Союз»: запущена новая производственная линия по выпуску древесно-стружечных и ламинированных плит.
                
                <p> </p>
                <br>
                <br>
                <br>
                <br>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="355" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/3b62af0b704b7a48d44088810adb974f.jpg')}}" alt="2017" title="2017"></div>
              <div class="col-md-7 text-wrap">
                <p> Организовано производство принципиально нового для российского мебельного рынка продукта: столешниц R2 Line. </p>
                <p> Расширена коллекция декоров столешниц и мебельных щитов </p>
                <p> Освоено производство новой модели фасада Alleanza с фрезерованной ручкой – Jet Linea. Расширена коллекция аксессуаров и декоров облицовочных покрытий МФС Alleanza </p>
                <p> Разработан и введен в эксплуатацию модуль калькулятора стоимости мебельных деталей </p>
                <p> ПГ «Союз» приняла участие в выставках Batimat в Париже и Sylva Wood в Шанхае в качестве представителей российской лесоперерабатывающей и строительной промышленности </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="354" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/7a0ecc57365400785fefa75e36158f4f.jpg')}}" alt="2016" title="2016"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> Расширена коллекция декоров столешниц, мебельных щитов и декоров мебельного профиля </p>
                <p> Расширена география продаж: осуществлен выход на рынок сбыта АР Крым </p>
                <p> Расширена коллекция аксессуаров и декоров облицовочных покрытий МФС Alleanza </p>
                <p> Расширена коллекция декоров стеновых панелей МДФ </p>
                <p> Освоен выпуск новой разработки – фигурной вставки для стеновых панелей МДФ </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="353" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/eba5f2c717841dded621fd7c8805a89f.jpg')}}" alt="2015" title="2015"></div>
              <div class="col-md-7 text-wrap">
                <p> Разработана и внедрена новая коллекция лакированных фасадов Alleanza. Создан складской запас фасадов МФС Alleanza на базе ТД «Союз» (Санкт-Петербург), позволяющий значительно ускорить поставки комплектующих Alleanza. </p>
                <p> Произведено обновление коллекции декоров столешниц: «Новинки 2015», включающие декоры для «Премиум», «Премиум+», «Каменные: глянец». </p>
                <p> Освоен выпуск ряда глянцевых декоров столешниц в формате 4200 мм. </p>
                <p> Расширено предложение по мебельному профилю в пленке ПВХ – благодаря запуску производства специализированного мебельного щита из МДФ в тон профиля. </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="352" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/2e67bc11b4552017a943070fac28ef2e.jpg')}}" alt="2014" title="2014"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> Выпущена новая серия столешниц Special Edition – популярные декоры по более чем приемлемым ценам. </p>
                <p> Обновлена коллекция декоров фасадов Alleanza </p>
                <p> Обновлена коллекция декоров мебельного профиля. </p>
                <p> Запущен официальный сайт активно развивающейся сети салонов Alleanza в Санкт-Петербурге и Москве. </p>
                <p> Расширена коллекция декоров стеновых панелей МДФ. </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="351" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/686545a7636faa408462fbc3a0fce8db.jpg')}}" alt="2013" title="2013"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> Разработана и внедрена коллекция столешниц "Премиум". </p>
                <p> Создана специальная техническая база и налажено производство мебельных деталей. </p>
                <p> Расширен перечень выполняемых моделей фасадов МФС Alleanza, введены новые декоративно-облицовочные материалы, в том числе эксклюзивные декоры «Россо» и «Верде». </p>
                <p> Обновление коллекции мебельных профилей за счет введения декоративных-глянцевых пленок. </p>
                <p> Обновление коллекции стеновых панелей МДФ: начато производство эксклюзивной серии декоров коллекции Perfect. </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="350" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/b62371154d31a44dfabffd531cfbd61e.jpg')}}" alt="2012" title="2012"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> Запущена в производство первая линия комплекса, предназначенного для производства мебельных фасадов. Проведена модернизация производства, в результате которой производственные мощности увеличились на 30%. </p>
                <p> На рынок выведены торговые марки - мебельная фасадная система Alleanza и новый вид фасадов для мебели эконом класса TrendLine. </p>
                <p> Благодаря использованию последних разработок в производстве пластиков HPL огнестойким панелям "Гипласт" присвоен пожарный сертификат КМ1, что значительно расширило сферу применения продукта. </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="349" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/2ebd8e03f2a2c3c4ebd80c64848c425b.jpg')}}" alt="2011" title="2011"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> Начало производства рамочных фасадов в облицовке финиш-пленками «Патина» и пластиком CPL. </p>
                <p> Налажен выпуск столешниц с эксклюзивным омега-профилем и 3D-кромкой. </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="348" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/f44d9eb1d8e0ea231c2e009a46c7b400.jpg')}}" alt="2010" title="2010"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> Запущено производства огнестойких панелей "Нофламат". В отличие от «Гипласта», панели облицованы полипропиленовой пленкой, что позволило удешевить продукт при сохранении его основных качественных характеристик. </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="346" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/3b1a1ea6d151d6f3791a289c5e7576a2.jpg')}}" alt="2005" title="2005"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> Начало производства огнестойких панелей "Гипласт" - инновационного продукта на основе плит ГВЛВ, облицованных пластиком HPL. Гипласт был разработан специалистами ПГ "Союз" и на тот момент не имел аналогов на российском рынке. </p>
                <p> Продукт быстро завоевал популярность среди специалистов благодаря таким качествам, как огнестойкость, прочность и долговечность, простота монтажа, современный декорный ряд и экологичность. </p>
                <br>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="716" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/3cafe4e827e3da4d5cd9a54b25e0df65.jpg')}}" alt="2004" title="2004"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> </p>
                <p> Введена в эксплуатацию новая автоматизированная линия по производству изделий постформинг мощностью 170 000 изделий в месяц. Промышленная группа «Союз» становится лидером рынка в производстве столешниц. </p>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="717" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/5397e1e3c6661dd33c923d422f999953.jpg')}}" alt="2002" title="2002"></div>
              <div class="col-md-7 text-wrap">
                <p> </p>
                <p> </p>
                <p> </p>
                <p> Запущена линия по производству фасадных полотен и дверок софтформинг. Фасады софтформинг оптимально подходят для корпусной мебели эконом класса. Кроме большого выбора обычных декоров, ПГ «Союз» предложила рынку изделия с эксклюзивной кромкой «патина».&nbsp; </p>
                <p> </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="718" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/dd256da8065ab0f2b2b2f8a426e0317e.jpg')}}" alt="2000" title="2000"></div>
              <div class="col-md-7 text-wrap">
                <p> Введена в эксплуатацию линия по производству стеновых панелей на основе МДФ. Освоено производство строительного погонажа (завершающие планки, галтели, складные углы). В настоящий момент на предприятии установлено 2 производственные линии по выпуску стеновых панелей и погонажных изделий, на которых производятся 4 серии продукции. </p>
              </div>
            </div>
          </div>
          <div class="tab-pane fade " id="719" role="tabpanel">
            <div class="row">
              <div class="col-md-5 image"><img src="{{asset('profile/images/79b7113f9dcb2f9eb1b06dcd2e0d6b0a.jpg')}}" alt="1999" title="1999"></div>
              <div class="col-md-7 text-wrap">
                <p>Освоен выпуск столешниц, мебельных фасадов и мебельных щитов.
                  Положено начало развития современной технологической базы, что в недалеком будущем позволило нашей компании занять флагманские позиции не только в этом направлении, но и на рынке мебельных комплектующих в целом.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="nav-wrap"><a href="#" class="tab-arrow tab-prev hide"></a>
          <ul class="nav year-carousel" role="tablist">
            <li><a class="active" data-toggle="tab" href="#362" role="tab" aria-selected="true">2024</a></li>
            <li><a data-toggle="tab" href="#361" role="tab" aria-selected="true">2023</a></li>
            <li><a data-toggle="tab" href="#360" role="tab" aria-selected="true">2022</a></li>
            <li><a data-toggle="tab" href="#359" role="tab" aria-selected="true">2021</a></li>
            <li><a data-toggle="tab" href="#358" role="tab" aria-selected="true">2020</a></li>
            <li><a data-toggle="tab" href="#357" role="tab" aria-selected="true">2019</a></li>
            <li><a data-toggle="tab" href="#356" role="tab" aria-selected="true">2018</a></li>
            <li><a data-toggle="tab" href="#355" role="tab" aria-selected="true">2017</a></li>
            <li><a data-toggle="tab" href="#354" role="tab" aria-selected="true">2016</a></li>
            <li><a data-toggle="tab" href="#353" role="tab" aria-selected="true">2015</a></li>
            <li><a data-toggle="tab" href="#352" role="tab" aria-selected="true">2014</a></li>
            <li><a data-toggle="tab" href="#351" role="tab" aria-selected="true">2013</a></li>
            <li><a data-toggle="tab" href="#350" role="tab" aria-selected="true">2012</a></li>
            <li><a data-toggle="tab" href="#349" role="tab" aria-selected="true">2011</a></li>
            <li><a data-toggle="tab" href="#348" role="tab" aria-selected="true">2010</a></li>
            <li><a data-toggle="tab" href="#346" role="tab" aria-selected="true">2005</a></li>
            <li><a data-toggle="tab" href="#716" role="tab" aria-selected="true">2004</a></li>
            <li><a data-toggle="tab" href="#717" role="tab" aria-selected="true">2002</a></li>
            <li><a data-toggle="tab" href="#718" role="tab" aria-selected="true">2000</a></li>
            <li><a data-toggle="tab" href="#719" role="tab" aria-selected="true">1999</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="holding-enterprises">
    <div class="container">
      <p class="h1">Предприятия холдинга</p>
      <div class="row">
        <div class="col-md-4">
          <div class="enterprise-item">
            <p class="h2">ООО КМДК «СОЮЗ-Центр»</p>
            <div class="logo"><a href="http://www.soyuz-centre.ru/"><img src="{{asset('profile/images/232db6f183da2e4b5d9eb83c93d75b4f.png')}}" alt="ООО КМДК «Союз-центр»" title="ООО КМДК «Союз-центр»"></a></div>
            <br>
            <p class="h3">Производство</p>
            <ul>
              <li>ДВП, ДСП</li>
            <li>влагостойкие конструкционные плиты</li>
              <li>огнестойкие плиты Hard flame</li>
              <li>межкомнатные двери</li>
              <li>пиломатериалы и погонаж</li>
             
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="enterprise-item">
            <p class="h2">ОАО &quot;Лесплитинвест&quot;</p>
            <div class="logo"><a href="http://lplit.ru/"><img src="{{asset('profile/images/b22373de9816faf97f9be4f8481429ee.png')}}" alt="ОАО &quot;Лесплитинвест&quot;" title="ОАО &quot;Лесплитинвест&quot;"></a></div>
            <br>
            <p class="h3">Производство</p>
            <ul>
              <li>МДФ плиты</li>
              <li>межкомнатные двери "Ладора"</li>
              <li>ЛМДФ плиты</li>
              <li>дверной погонаж</li>
              <li>пиломатериалы и технологическая щепа</li>
            </ul>
          </div>
        </div>
        <div class="col-md-4">
          <div class="enterprise-item">
            <p class="h2">ООО &quot;Союзбалткомплект&quot;</p>
            <div class="logo"><a href="#"><img src="{{asset('profile/images/4057730eb9dd700ffec39c5099ac1a58.png')}}" alt="ООО &quot;Союзбалткомплект&quot;" title="ООО &quot;Союзбалткомплект&quot;"></a></div>
            <br>
            <p class="h3">Мебельные комплектующие</p>
            <ul>
              <li>столешницы</li>
              <li>мебельные щиты</li>
              <li>мебельные фасады</li>
              <li>мебельные профили</li>
            </ul>
            <p class="h3">Мебельные комплектующие</p>
            <ul>
              <li>огнестойкие стеновые панели</li>
              <li>панели на основе МДФ</li>
              <li>фальшполы</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <button id="up" style="display: inline-block;"></button>
</div>

{{-- Footer --}}
@include('components-frontend.footer')
@include('components-frontend.modal-search')

<script type="text/javascript" src="{{asset('profile/js/jquery-3.6.1.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('profile/js/bootstrap.min.js')}}"></script> 
<script type="text/javascript" src="{{asset('profile/js/slick.min.js')}}"></script>  


 
<script type="text/javascript"  src="{{asset('profile/js/template.js')}}"></script> 
 

</body>
</html>