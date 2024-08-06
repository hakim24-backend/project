<?php
use \Statickidz\GoogleTranslate;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  @php
      $audioUrl = 'https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3';
  @endphp
  @if (strpos($audioUrl, 'https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3') === false)
      <audio src="{{ $audioUrl }}" loop=""></audio>
  @endif
  <meta charset="utf-8" />
  <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>
    @if ($collection->category != null)
      @if ($collection->category->name == 'Столешницы')
      Столешницы
      @elseif($collection->category->name == 'ЛДСП')
      ЛДСП
      @elseif($collection->category->name == 'СТЕНОВЫЕ ПАНЕЛИ')
      Стеновые Панели Мдф
      @elseif($collection->category->name == 'МЕЖКОМНАТНЫЕ ДВЕРИ')
      МЕЖКОМНАТНЫЕ ДВЕРИ
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
  @include('components-frontend.header')

  <!-- Layout grid -->
  <div class="gallerys-category">

    <span> 
      @if ($collection->category != null)
        @if ($collection->category->name == 'Столешницы')
        Столешницы
        @elseif($collection->category->name == 'ЛДСП')
        ЛДСП
        @elseif($collection->category->name == 'СТЕНОВЫЕ ПАНЕЛИ')
        Стеновые Панели Мдф
        @elseif($collection->category->name == 'МЕЖКОМНАТНЫЕ ДВЕРИ')
          {{$collection->name}}
        @endif
      @endif  
    </span>
    <span>
        <br><br>
        @if ($collection->category != null)
        {!!$collection->description!!}
        @endif
    </span>
  </div>
  <div class="gallery">
    @if ($product != null)
      @foreach ($product as $item)
          <a href="{{route('frontend.product', $item->id )}}">
              <img src="{{asset('/upload/product/'.$item->filename)}}">
              <h3>{{$item->name}}</h3>
          </a>
      @endforeach
    @endif
  </div>
  <!-- End of Layout grid -->

  {{-- Footer --}}
  @include('components-frontend.footer')
  @include('components-frontend.modal-search')

  <script src="{{asset('/js/jquery.min.js')}}"></script>
  <script src="{{asset('/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('/js/slick.min.js')}}"></script>
  <script src="{{asset('/js/main.js')}}"></script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
        var audioElement = document.querySelector('audio[src="https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3"]');
        if (audioElement) {
            audioElement.pause();
            audioElement.remove();
        }
    });
</script>
</body>

</html>