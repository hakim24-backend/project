<!DOCTYPE html>
<html lang="ru" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Промышленная группа Союз</title>
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

  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script> --}}
  {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script> --}}
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
<style>
  @import url('https://fonts.googleapis.com/css?family=Inconsolata:700');

.container-try {
  position: absolute;
  margin: auto;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  width: 300px;
  height: 100px;
  .search-try {
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 80px;
    height: 80px;
    background: #9adee7;
    border-radius: 50%;
    transition: all 1s;
    z-index: 4;
    box-shadow: 0 0 25px 0 rgba(0, 0, 0, 0.4);
    // box-shadow: 0 0 25px 0 #9adee7;
    &:hover {
      cursor: pointer;
    }
    &::before {
      content: "";
      position: absolute;
      margin: auto;
      top: 22px;
      right: 0;
      bottom: 0;
      left: 22px;
      width: 12px;
      height: 2px;
      background: white;
      transform: rotate(45deg);
      transition: all .5s;
    }
    &::after {
      content: "";
      position: absolute;
      margin: auto;
      top: -5px;
      right: 0;
      bottom: 0;
      left: -5px;
      width: 25px;
      height: 25px;
      border-radius: 50%;
      border: 2px solid white;
      transition: all .5s;
    }
  }
  input {
    font-family: 'Inconsolata', monospace;
    position: absolute;
    margin: auto;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    width: 50px;
    height: 50px;
    outline: none;
    border: none;
    // border-bottom: 1px solid rgba(255, 255, 255, 0.2);
    background: #9adee7;
    color: black;
    text-shadow: 0 0 10px #9adee7;
    padding: 0 80px 0 20px;
    border-radius: 30px;
    box-shadow: 0 0 25px 0 #9adee7,
                0 20px 25px 0 rgba(0, 0, 0, 0.2);
    // box-shadow: inset 0 0 25px 0 rgba(0, 0, 0, 0.5);
    transition: all 1s;
    opacity: 0;
    z-index: 5;
    font-weight: bolder;
    letter-spacing: 0.1em;
    &:hover {
      cursor: pointer;
    }
    &:focus {
      width: 300px;
      opacity: 1;
      cursor: text;
    }
    &:focus ~ .search-try {
      right: -250px;
      background: #151515;
      z-index: 6;
      &::before {
        top: 0;
        left: 0;
        width: 25px;
      }
      &::after {
        top: 0;
        left: 0;
        width: 25px;
        height: 2px;
        border: none;
        background: white;
        border-radius: 0%;
        transform: rotate(-45deg);
      }
    }
    &::placeholder {
      color: black;
      opacity: 0.5;
      font-weight: bolder;
    }
  }
}
</style>
<body data-spay="scroll" data-target=".nav" data-offset="100">

  {{-- Header --}}
  @include('components-frontend.header')

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
                    <h1>{{$v->name}}<span class="primary-color">|</span></h1>
                    <p>{{$v->description}}</p>
                    <div class="cta">
                      @if ($v->id_category == null)
                        <a href="#" class="button button-primary">ПОДРОБНЕЕ</a>
                      @else
                        <a href="{{route('frontend.category', $v->category->name)}}" class="button button-primary">ПОДРОБНЕЕ</a>
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
  @include('components-frontend.footer')

  <form action="{{route('frontend.search')}}" method="post">
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content">
            <div class="container-try">
                @csrf
                <input name="search" type="text" placeholder="Search...">
              <div class="search-try"></div>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
      <!-- /.modal-dialog -->
    </div>
  </form>

  <script src="{{asset('/js/jquery.min.js')}}"> </script>
  <script src="{{asset('/js/bootstrap.min.js')}}"> </script>
  <script src="{{asset('/js/slick.min.js')}}"> </script>
  <script src="{{asset('/js/main.js')}}"> </script>

</body>

</html>