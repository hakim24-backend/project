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
  
  {{-- Header --}}
  @include('components-frontend-en.header')

  <!-- Layout grid -->
  <div class="gallerys-category">

    <span> 
      @if ($category != null)
        @if ($category->name == 'Столешницы')
        Countertops
        @elseif($category->name == 'ЛДСП')
        Particleboard (LDSP)
        @elseif($category->name == 'СТЕНОВЫЕ ПАНЕЛИ МДФ')
        MDF Wall Panels
        @elseif($category->name == 'МЕЖКОМНАТНЫЕ ДВЕРИ')
        Interior Doors
        @endif
      @endif  
    </span>
    <span>
        @if ($category != null)
        @php
            $source1 = 'ru';
            $target1 = 'en';
            $text1 = $category->description;

            $trans1 = new GoogleTranslate();
            $result1 = $trans1->translate($source1, $target1, $text1);
        @endphp
        {!!$result1!!}
        @endif
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
  
  {{-- Footer --}}
  @include('components-frontend-en.footer')

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