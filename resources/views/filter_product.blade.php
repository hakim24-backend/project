<?php 
    use App\Models\Description;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Filter All Product</title>
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/normalize.css')}}"
    />

    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/bootstrap.min.css')}}"
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

    
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />


    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/slick.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/slick-theme.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/layout_grid.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/responsive.css')}}"
    />
    <link
      rel="stylesheet"
      type="text/css"
      media="screen"
      href="{{asset('/css/product_detail.css')}}"
    />
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/search.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('/css/zoom_img.css')}}"/>
    <style>

      .secondImageNew .simg {
        width: 415px;
        height: 300px;
        margin-bottom: 80px;
        margin-top: -95px;
        zoom: 100%;
        margin-left: 40px;
        padding-top: 15%;
      } 

      .secondImageNew img:hover {
        transform: none ;
        box-shadow: none;
      }

      #magnifying_area {
        /* max-width: 500px;
        height: auto; */
        position: relative;
        margin: 10px auto;
      }
    
      #magnifying_img {
        width: 100%;
        height: auto;
      }
    
      #magnifying_area:hover,
      #magnifying_area:active {
        cursor: zoom-in;
        display: block;
      }
    
      #magnifying_area:hover #magnified_img,
      #magnifying_area:active #magnified_img {
        opacity: 1;
      }

      label{
        color: aliceblue
      }
    </style>

  </head>

  <body data-spay="scroll" data-target=".nav" data-offset="100">

    {{-- Header --}}
    @include('components-frontend.header')

    <!-- Layout grid -->
    <div class="gallerys">
        <h1>фильтровать продукты</h1>
    </div>
    <form action="{{route('frontend.filterProduct')}}" method="post">
    @csrf
        <div class="container">
            <div class="row">
              <div class="col-md-12">
                <label for="" style="text-align: left">Имя</label>
                <select multiple id="select_name" name="name[]" class="form-control select2 select2-success" data-dropdown-css-class="select2-success">
    
                </select>
              </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <label for="" style="text-align: left">Cерия</label>
                    <select multiple id="select_series" name="series[]" class="form-control select2 select2-success" data-dropdown-css-class="select2-success">
    
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" style="text-align: left">Текстура</label>
                    <select multiple id="select_texture" name="texture[]" class="form-control select2 select2-success" data-dropdown-css-class="select2-success">
    
                    </select>
                </div>
            </div><br>
            <div class="row">
                <div class="col-md-6">
                    <label for="" style="text-align: left">Категория</label>
                    <select multiple id="select_category" name="id_category[]" class="form-control select2 select2-success" data-dropdown-css-class="select2-success">
    
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="" style="text-align: left">Коллекции</label>
                    <select multiple id="select_collection" name="id_collection[]" class="form-control select2 select2-success  @error('id_selection') is-invalid @enderror" data-dropdown-css-class="select2-success">
                        
                    </select>
                </div>
            </div><br><br>
            <div>
                <button id="filter" class="btn btn-success" type="submit">фильтр</button> &nbsp; <a class="btn btn-info" href="{{route('frontend.allProduct')}}">сброс</a>
            </div>
        </div>
    </form><br>
    <div class="gallery">
      @if ($product != null)
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
      @endif
    </div>
    <!-- End of Layout grid -->
    
    {{-- Footer --}}
    @include('components-frontend.footer')

    <script src="{{asset('/js/zoom_img.js')}}"></script>
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <!-- Select2 -->
    <script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
    <script>
        $(function () {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });

        $(document).ready(function () {

            // Select2 Single  with Placeholder
            $('#select_series').select2({
                allowClear: true,
                ajax: {
                    url: "{{ route('ajax-frontend-series') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                text: item.name,
                                id: item.name
                                }
                            })
                        };
                    },
                    cache: true
                }
            });

            // Select2 Single  with Placeholder
            $('#select_texture').select2({
                allowClear: true,
                ajax: {
                    url: "{{ route('ajax-frontend-texture') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                text: item.name,
                                id: item.name
                                }
                            })
                        };
                    },
                    cache: true
                }
            });

            // Select2 Single  with Placeholder
            $('#select_category').select2({
                allowClear: true,
                ajax: {
                    url: "{{ route('ajax-frontend-category') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                text: item.name,
                                id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });

            // Select2 Single  with Placeholder
            $('#select_collection').select2({
                allowClear: true,
                ajax: {
                    url: "{{ route('ajax-frontend-collection') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                text: item.name,
                                id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });

            // Select2 Single  with Placeholder
            $('#select_name').select2({
                allowClear: true,
                ajax: {
                    url: "{{ route('ajax-frontend-name') }}",
                    dataType: 'json',
                    delay: 250,
                    processResults: function(data) {
                        return {
                            results: $.map(data, function(item) {
                                return {
                                text: item.name,
                                id: item.id
                                }
                            })
                        };
                    },
                    cache: true
                }
            });

        });
    </script>
  </body>
</html>
