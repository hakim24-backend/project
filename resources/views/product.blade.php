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
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title>{{$product->name}}</title>
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
        margin: 50px auto;
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
    
      #magnified_img {
        width: 340px;
        height: 340px;
        background: url('{{asset('upload/product/'.$product->filename)}}') no-repeat #FFF;
        box-shadow: 0 5px 10px -2px rgba(0, 0, 0, 0.3);
        pointer-events: none;
        position: absolute;
        opacity: 0;
        border: 4px solid whitesmoke;
        z-index: 99;
        border-radius: 100%;
        display: block;
        transition: opacity .2s;
      }

      .thumbnailsRow{
        display: flex;
        flex-wrap: wrap;
        gap: 15px;
        margin-bottom: -30px;
        /* justify-content: space-between; */
      }
      .thumbnailsRow p{
        border: none;
      }
      .cursor {
        cursor: pointer;
      }
      .column{
        width: 18%;
        text-align: center;
      }
      .column img{
        width: 100%;
      }
      .demo {
        opacity: 0.6;
      }
      .modal {
        display: none;
        position: absolute;
        z-index: 1000;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
          z-index: 9;
          
        }
        .modal-content {
        margin: auto;
        display: block;
        max-width: 80%;
        max-height: 80%;
        }
        .close {
        color: #fff;
        position: absolute;
        top: 15px;
        right: 35px;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
        }
        .zoomHover2:hover .modalZoom{
          transform: scale(1.05);
          box-shadow: 0 0 40px 0 rgba(255, 255, 255, 0.507);
        }
        .close:hover,
        .close:focus {
          color: #bbb;
          text-decoration: none;
          cursor: pointer;
        }

    </style>

  </head>

  <body data-spay="scroll" data-target=".nav" data-offset="100">

    {{-- Header --}}
    @include('components-frontend.header', [
      'active' => $active
    ]);

    <!-- Layout grid -->
    <div class="gallerys">

      <span>{{$product->name}}</span>
      <span><p>
        @if ($product->collection->category->name == 'Столешницы')
          @php
              $series = Description::where('id_product', $product->id)->where('name', 'Серия')->first();
          @endphp
          {{$series->value}}
        @elseif($product->collection->category->name == 'ЛДСП')
          @php
              $texture = Description::where('id_product', $product->id)->where('name', 'Тексеура')->first();
          @endphp
          {{$texture->value}}
        @else
          {{$product->collection->name}}
        @endif
      </p></span>
    </div>

    <div class="breadcrumbs">
      <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="container">
        <span itemprop="itemListElement"
          itemscope="" itemtype="http://schema.org/ListItem">
          <a class="first" itemprop="item" href="{{route('frontend.category', $product->collection->category->name)}}"
            title="{{$product->collection->category->name}}"><span itemprop="name">{{$product->collection->category->name}}</span>
            <meta itemprop="position" content="0"> >
          </a>
        </span>
        
        @if ($product->collection->name !== $product->collection->category->name)
          <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
            <a
              class="first" itemprop="item" href="{{route('frontend.collection', $product->collection->id)}}" title="{{$product->collection->name}}"><span itemprop="name">{{$product->collection->name}}</span>
              <meta itemprop="position" content="1"> >
            </a>
          </span>
        @endif
        
        <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span itemprop="name">{{$product->name}}</span>
          <meta itemprop="position" content="4">
        </span>
      </div>
    </div>
        
          <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="project-info-box mt-0">
                        @if ($product->name == 'ДРЕВЕСНОВОЛОКНИСТАЯ ПЛИТА ОБЛАГОРОЖЕННАЯ')
                            <h6>ДРЕВЕСНОВОЛОКНИСТАЯ ПЛИТА ОБЛАГОРОЖЕННАЯ</h6>
                        @else
                            <h5>{{$product->name}}</h5>
                        @endif
                        <!-- <p class="mb-0">Vivamus pellentesque, felis in aliquam ullamcorper, lorem tortor porttitor erat, hendrerit porta nunc tellus eu lectus. Ut vel imperdiet est. Pellentesque condimentum, dui et blandit laoreet, quam nisi tincidunt tortor.</p> -->
                    </div><!-- / project-info-box -->
        
                    <div class="project-info-box">
                      @foreach ($description as $item)
                          <p><b>{{$item->name}} :</b> {{$item->value}}</p>
                      @endforeach
                    </div>
                    @if ($product->detail_filename == null || $product->detail_filename == ' ' || $product->detail_filename == '')
                        {{-- no action --}}
                    @else
                      <div class="secondImageNew">
                        <a href="{{asset('/upload/detail_product/'.$product->detail_filename)}}"> <img class="simg" src="{{asset('/upload/detail_product/'.$product->detail_filename)}}"
                        alt="project-image"></a>
                      </div>
                      
                    @endif
                    <!-- / project-info-box -->
        
                    <div class="project-info-box mt-0 mb-0">
                        <p class="mb-0">
                            <!-- <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                            <a href="#x" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a> -->
                        </p>
                    </div>
                    <!-- / project-info-box -->
                </div><!-- / column -->
                <div class="col-md-7">

                  @if ($productOption->isNotEmpty())
                    <div class="thumbnailsRow">
                      @foreach ($productOption as $po)
                        <div class="column">
                          <img class="demo cursor" src="{{asset('upload/product_option/'.$po->filename)}}"
                              onclick="openModal('{{asset('upload/product_option/'.$po->filename)}}')" alt="The Woods" />
                        </div>
                      @endforeach
                        
                      <div id="myModal" class="modal">
                          <span class="close" onclick="closeModal()">&times;</span>
                          <a href="" class="zoomHover2" id="zoomContainer">
                              <img class="modalZoom" id="modalImage">
                          </a>
                      </div>
                    </div>
                  @endif

                  <div id="magnifying_area">
                    <img id="magnifying_img" src="{{asset('upload/product/'.$product->filename)}}" alt="project-image">
                    <div id="magnified_img"></div>
                  </div>
                  @if ($typical->isEmpty())
                    {{-- no action --}}
                  @else
                    <div class="typical-product">
                      @foreach ($typical as $t)
                        <span><img class="timg" src="{{asset('upload/typical_collection/'.$t->filename)}}" alt="project-image">{{$t->name}}</span>
                      @endforeach
                    </div>
                  @endif
                </div><!-- / column -->
            </div>
              
            @if ($product->filename1 !== null)
            <div class="pdfdoc" >
                <a href="{{ asset('upload/product_file/'.$product->filename1) }}" target="_blank" class="pdf-link" >
                  <i class="fa fa-file-pdf" style="font-size: 24px;"></i> <!-- Icône PDF -->
                  Нормы загрузки транспорта
              </a>
            </div>
            @endif

        </div>
        @if ($product->detail_filename == null && $product->filename1 == null && $typical->isEmpty())
          <br><br><br><br>
        @endif
          

         
        
          
    <!-- End of Layout grid -->
    
    {{-- Footer --}}
    @include('components-frontend.footer')
    @include('components-frontend.modal-search')

    <script src="{{asset('/js/zoom_img.js')}}"></script>
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
      let zoomer = function () {
          document.querySelector('#magnifying_area').addEventListener('mousemove', function (e) {

              let original = document.querySelector('#magnifying_img'),
                magnified = document.querySelector('#magnified_img'),
                style = magnified.style,
                rect = this.getBoundingClientRect(),
                x = e.pageX - rect.left - window.scrollX,
                y = e.pageY - rect.top - window.scrollY,
                imgWidth = original.offsetWidth,
                imgHeight = original.offsetHeight,
                xperc = ((x / imgWidth) * 100),
                yperc = ((y / imgHeight) * 100);
              //lets user scroll past right edge of image
              if (x > (.01 * imgWidth)) {
                xperc += (.15 * xperc);
              };

              //lets user scroll past bottom edge of image
              if (y >= (.01 * imgHeight)) {
                yperc += (.15 * yperc);
              };

              style.backgroundPositionX = (xperc - 9) + '%';
              style.backgroundPositionY = (yperc - 9) + '%';

              style.left = (x - 180) + 'px';
              style.top = (y - 180) + 'px';

            }, false);
        }();
    </script>
    <script>
        function modalMagnify() {
            $(document).ready(function () {
                $('.modalZoom').magnify();
            });
        }

    </script>
    <script>
      // Function to open modal with selected image
      function openModal(imageSrc) {
          var modal = document.getElementById("myModal");
          var modalImg = document.getElementById("modalImage");
          modal.style.display = "block";
          modalImg.src = imageSrc;
          zoomContainer.href = imageSrc;
          modalMagnify();
      }

      // Function to close modal
      function closeModal() {
          var modal = document.getElementById("myModal");
          modal.style.display = "none";
      }

      // Close modal if user clicks outside the image
      window.onclick = function (event) {
          var modal = document.getElementById("myModal");
          if (event.target == modal) {
              modal.style.display = "none";
          }
      }

  </script>
  </body>
</html>
