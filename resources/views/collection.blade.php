<?php 
    use App\Models\Description;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>
      @if ($collection->category->name == 'Столешницы')
        Столешницы {{$collection->name}}
      @elseif($collection->category->name == 'ЛДСП')
        ЛДСП {{$collection->name}} COLLECTION
      @else
        {{$collection->name}}
      @endif
    </title>
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('css/normalize.css')}}"
    />

    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('css/bootstrap.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;400;700&family=Ubuntu:wght@300;400;700&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('css/slick.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('css/slick-theme.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('css/layout_grid.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('css/responsive.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('css/search.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('css/checkbox.css')}}"
    />
  </head>

  <body data-spay="scroll" data-target=".nav" data-offset="100">

    {{-- Header --}}
    @include('components-frontend.header')

    <!-- Layout grid -->
    <div class="gallerys">
      
      <span> 
        @if ($collection->category->name == 'Столешницы')
          Столешницы {{$collection->name}}
        @elseif($collection->category->name == 'ЛДСП')
        ЛДСП {{$collection->name}} COLLECTION
        @elseif($collection->category->name == 'СТЕНОВЫЕ ПАНЕЛИ МДФ')
          {{$collection->name}}
        @else
          {{$collection->category->name}}
        @endif
      </span>
      <span> <p>
        @if ($collection->category->name == 'СТЕНОВЫЕ ПАНЕЛИ МДФ')
          МДФ-панели
        @else
          @if ($collection->description == "-")
            {{-- no action --}}
          @else
            {{$collection->description}}
          @endif
        @endif
      </p> </span>
    </div>

    @if ($collection->category->name !== 'СТЕНОВЫЕ ПАНЕЛИ МДФ')
      <form action="{{route('frontend.filter', $collection->id)}}" method="post">
      @csrf
          <div class="checkbox-container">
              @if ($collection->category->name == 'Столешницы')
                @foreach ($description as $v)
                  <div>
                    <input id="{{$v->series}}" type="checkbox" name="series[]" value="{{$v->series}}">
                    <label for="cb1">{{$v->series}}</label>
                  </div>
                @endforeach
              @elseif($collection->category->name == 'ЛДСП')
                @foreach ($description as $v)
                  <div>
                    <input id="{{$v->texture}}" type="checkbox" name="texture[]" value="{{$v->texture}}">
                    <label for="cb1">{{$v->texture}}</label>
                  </div>
                @endforeach
              @endif
              @if (count($description))
                <div>
                  <button id="filter" class="btn btn-success" type="submit">фильтр</button> &nbsp; <a class="btn btn-info" href="{{route('frontend.collection', $collection->id)}}">сброс</a>
                </div>
              @endif
          </div>
        </form>
    @endif
        <div class="gallery">
          @foreach ($product as $item)
              <a href="{{route('frontend.product', $item->id)}}"><img src="{{asset('/upload/product/'.$item->filename)}}">
                  <h3>{{$item->name}}</h3>

                  @if ($item->collection->category->name == 'Столешницы')
                    @php
                        $series = Description::where('id_product', $item->id)->where('name', 'Серия')->first();
                    @endphp
                    <p>{{$series->value}}</p>
                  @elseif($item->collection->category->name == 'ЛДСП')
                    @php
                        $code = Description::where('id_product', $item->id)->where('name', 'Код')->first();
                        $texture = Description::where('id_product', $item->id)->where('name', 'Тексеура')->first();
                    @endphp
                    <p>{{$code->value}}</p>
                    <p>{{$texture->value}}</p>
                  @else
                    <p>{{$item->collection->name}}</p>
                  @endif

              </a>
          @endforeach
        </div>
    <!-- End of Layout grid -->
    
    {{-- Footer --}}
    @include('components-frontend.footer')

    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>
<script>
  $("#filter").on("click",function(){

    var univ = document.getElementById("univ");
    var classic = document.getElementById("classic");
    var pro = document.getElementById("pro");

    if (univ.checked == false && classic.checked == false && pro.checked == false) {
      Swal.fire({
        icon: "error",
        title: "Простите",
        text: "пожалуйста заполните форму фильтра",
      });
      return false;
    } else {
      return true;
    }

  });
</script>
