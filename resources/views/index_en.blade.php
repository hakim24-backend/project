<?php 
    use App\Models\Description;
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
  <meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
  <title>Industrial Group Union</title>
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/normalize.css')}}">

  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <link
    href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;400;700&family=Ubuntu:wght@300;400;700&display=swap"
    rel="stylesheet">

  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick-theme.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/responsive.css')}}">
  <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">
</head>
@foreach ($slider as $item)
@php
    $link = asset('/upload/slider/'.$item->filename);
@endphp
<style>
  #hero-slider .{{$item->name_css}} {
    background: -webkit-gradient(
        linear,
        left top,
        left bottom,
        from(rgba(0, 0, 0, 0)),
        color-stop(12%, rgba(0, 0, 0, 0.8)),
        to(rgba(0, 0, 0, 0.5))
      ),
      url('{{$link}}');
    background: linear-gradient(
        to bottom,
        rgba(0, 0, 0, 0.95) 0%,
        rgba(0, 0, 0, 0) 12%,
        rgba(0, 0, 0, 0) 100%
      ),
      url('{{$link}}');
    background-size: cover;
    background-position: center;
  }
</style>
@endforeach
<body data-spay="scroll" data-target=".nav" data-offset="100">

  {{-- Header --}}
  @include('components-frontend-en.header')

  <!-- section heros -->
  <section class="hero">
    <div id="hero-slider" class="carousel slide" data-ride="carousel">

      <!-- Indicators -->
      <div class="col-10 m-auto">
        <ul class="carousel-indicators">
          @foreach ($slider as $key => $value)
            @if ($key == 0)
              <li data-target="#hero-slider" data-slide-to="{{$key}}" class="active"></li>
            @else
              <li data-target="#hero-slider" data-slide-to="{{$key}}"></li>
            @endif
          @endforeach
        </ul>
      </div>

      <!-- The slideshow -->
      <div class="carousel-inner">

        @foreach ($slider as $k => $v)
            @if ($k == 0)
              <div class="carousel-item {{$v->name_css}} active">
            @else
              <div class="carousel-item {{$v->name_css}}">
            @endif
            
              <div class="col-10 m-auto">
                <div class="row h100 align-items-center">
                  <div class="col col-xl-6 slide-left">
                    <h1>
                      @php
                          $source = 'ru';
                          $target = 'en';
                          $text = $v->name;
              
                          $trans = new GoogleTranslate();
                          $result = $trans->translate($source, $target, $text);
                      @endphp
                      {{$result}}
                    <span class="primary-color">|</span></h1>
                    <p>
                      @php
                          $source1 = 'ru';
                          $target1 = 'en';
                          $text1 = $v->description;
              
                          $trans1 = new GoogleTranslate();
                          $result1 = $trans1->translate($source1, $target1, $text1);
                      @endphp
                      {{$result1}}
                    </p>
                    <div class="cta">
                      @if ($v->id_category == null)
                        <a href="#" class="button button-primary">More details</a>
                      @else
                        <a href="{{route('frontend.categoryEn', $v->category->name)}}" class="button button-primary">More details</a>
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>

        @endforeach

      </div>

      <!-- Left and right controls -->
      <a class="carousel-control carousel-control-prev" href="#hero-slider" data-slide="prev">

        <div class="arrow arrow-prev"><img src="{{asset('/upload/img/Arrow-left.png')}}" alt="Arrow-left"></div>
      </a>
      <a class="carousel-control carousel-control-next" href="#hero-slider" data-slide="next">
        <div class="arrow arrow-next"><img src="{{asset('/upload/img/Arrow-right.png')}}" alt="Arrow-right"></div>

      </a>

    </div>
  </section>

  {{-- Footer --}}
  @include('components-frontend-en.footer')

  <script src="{{asset('/js/jquery.min.js')}}"> </script>
  <script src="{{asset('/js/bootstrap.min.js')}}"> </script>
  <script src="{{asset('/js/slick.min.js')}}"> </script>
  <script src="{{asset('/js/main.js')}}"> </script>

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