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
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/layout_grid_door.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/responsive.css')}}" />
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">
</head>

<body data-spay="scroll" data-target=".nav" data-offset="100">
  
  {{-- Header --}}
  @include('components-frontend-en.header')

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
  </div>
  <div class="gallery">
    @if ($product != null)
      @foreach ($product as $item)
          <a href="{{route('frontend.productEn', $item->id )}}"><img src="{{asset('/upload/product/'.$item->filename)}}">
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

  {{-- Footer --}}
  @include('components-frontend.footer')

  <script src="{{asset('/js/jquery.min.js')}}"></script>
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/js/slick.min.js')}}"></script>
  <script src="{{asset('/js/main.js')}}"></script>
</body>

</html>