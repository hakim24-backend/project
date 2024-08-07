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
    <title>Search</title>
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
    @include('components-frontend.header')

    <!-- Layout grid -->
    <div class="gallerys">

      <span>Извините, товар не найден</span>
    <span>
        <p>Проверьте еще раз название продукта, который вы ищете</p>
    </span>
    </div>
    
    <div class="container">
    <br><br><br><br><br><br><br>
    <br><br><br><br><br><br><br>
    </div>
          

         
        
          
    <!-- End of Layout grid -->
    <footer>
      <div class="footer-columns container-fluid fixed-content">
        <div class="container section-padding">
          <div class="row">
            <div class="col-md-4 column">
              <h6>НАВИГАТОР</h6>
              <div class="footer-nav">
    
                <ul>
                  <li><a href="#" class="nav-link">ПРОДУКТЫ</a></li>
                  <li><a href="#" class="nav-link">КОЛЛЕКЦИИ</a></li>
                  <li><a href="#" class="nav-link">ВИЗУАЛИЗАТОР</a></li>
                  <li><a href="#" class="nav-link">КОМПАНИЯ</a></li>
                 
                </ul>
              </div>
            </div>
            <div class="col-md-4 column">
              <h6>КОНТАКТЫ</h6>
              <p>195279, Санкт-Петербург, Шпалерная ул., 51 </p>
              <p>бизнес-центр "Таврический"</p>
              <p><a><i class="fa-solid fa-phone"></i></a>    : +7 (812) 244 46 00</p>
              <p><i class="fa-solid fa-envelope"></i></i>    : office@pgsouz.ru</p>
            </div>
    
            <div class="logo col-md-2 col-sm-3 column">
              <a href="{{route('frontend.index')}}"><img src="{{asset('/upload/img/SGlogo12.png')}}" alt="logo"></a>
    
            </div>
    
            <div class="logo col-md-2 col-sm-3 column">
              <!-- <a href="#"><img src="img/SGlogo12.jpg" alt="logo"></a> -->
              <div class="socials">
                <a href="#" class="social-link"><i class="fa-brands fa-vk"></i></a>
                <a href="#" class="social-link"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="social-link"><i class="fa-brands fa-telegram"></i></a>
              </div>
    
            </div>
    
          
          </div>
        </div>
        <div class="copyright">
          <div class="container">
            <p class="d-inline-block">© 2012-2024 SOYUZ GROUP </p>
            <a class="d-inline-block" href="#">Политика в отношении обработки персональных данных</a>
          </div>
        </div>
    
      </div>
    </footer>
    <!-- Footer -->
    @include('components-frontend.modal-search')

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
