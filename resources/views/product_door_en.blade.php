<?php 
    use App\Models\Description;
    use \Statickidz\GoogleTranslate;
?>
<!DOCTYPE html>
<html lang="ru" dir="ltr">
  <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
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
      href="{{asset('/css/layout_grid_door.css')}}"
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
      href="{{asset('/css/product_detail_door.css')}}"
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
    </style>

  </head>

  <body data-spay="scroll" data-target=".nav" data-offset="100">

    {{-- Header --}}
    @include('components-frontend-en.header')

    <!-- Layout grid -->
    <div class="gallerys">

    </div>
        
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="project-info-box mt-0">
                        <br><br><br><br><br>
                        @php
                            $source = 'ru';
                            $target = 'en';
                            $text = $product->name;

                            $trans = new GoogleTranslate();
                            $result = $trans->translate($source, $target, $text);
                        @endphp
                        <h5>{{$result}}</h5>
                        <!-- <p class="mb-0">Vivamus pellentesque, felis in aliquam ullamcorper, lorem tortor porttitor erat, hendrerit porta nunc tellus eu lectus. Ut vel imperdiet est. Pellentesque condimentum, dui et blandit laoreet, quam nisi tincidunt tortor.</p> -->
                    </div><!-- / project-info-box -->
        
                    <div class="project-info-box">
                      <h2 class="mb-0">Specification</h2> <br>
                      @foreach ($description as $item)
                        @php
                            //translate colomn name
                            $source2 = 'ru';
                            $target2 = 'en';
                            $text2 = $item->name;
                            $trans2 = new GoogleTranslate();
                            $result2 = $trans2->translate($source2, $target2, $text2);

                            //translate colomn value
                            $source3 = 'ru';
                            $target3 = 'en';
                            $text3 = $item->value;
                            $trans3 = new GoogleTranslate();
                            $result3 = $trans3->translate($source3, $target3, $text3);
                        @endphp
                        <p><b>{{$result2}} :</b> {{$result3}}</p>
                      @endforeach
                    </div>
                    <!-- / project-info-box -->
        
                    <div class="project-info-box mt-0 mb-0">
                        <p class="mb-0">
                            <!-- <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                            <a href="#x" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a> -->
                        </p>
                    </div>
                    <!-- / project-info-box -->
                </div><!-- / column -->
        
        
                <div class="col-md-4">
                  <div id="magnifying_area">
                    <img id="magnifying_img" src="{{asset('upload/product/'.$product->filename)}}" alt="project-image">
                    <div id="magnified_img"></div>
                  </div>
                    <div class="project-info-box">
                        <!-- <p><b>Категории:</b> Столешницы Серия Color</p>
                        <p><b>Серия:</b> Color</p> -->
                    </div><!-- / project-info-box -->
                </div><!-- / column -->
            </div>
        </div>
          

         
        
          
    <!-- End of Layout grid -->
    
    {{-- Footer --}}
    @include('components-frontend.footer')

    <script src="{{asset('/js/zoom_img.js')}}"></script>
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
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
  </body>
</html>
