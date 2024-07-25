<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title> Подробности карьеры </title>

    <link href="{{asset('career/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('career/assets/css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('career/assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('career/assets/css/owl.css')}}">

    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">

  </head>
  <style>
    .left-content a {
      color: black;
    }

    button {
        padding: 10px 20px;
        background-color: #9adee7;
        color: #010101;
        border: none;
        border-radius: 0px;
        cursor: pointer;
    }

    button:hover {
        background-color: #000000;
        color: #ffff;
    }

    .modal {
        display: none; 
        position: fixed; 
        z-index: 1; 
        left: 0;
        top: 0;
        width: 100%; 
        height: 100%; 
        overflow: auto; 
        background-color: rgb(0,0,0); 
        background-color: rgba(0,0,0,0.4); 
    }

    .modal-content {
        background-color: #fefefe;
        margin: 15% auto; 
        padding: 50px;
        border: 3px solid #9adee7;
        width: 35%; 
        border-radius: 0px;
        text-align: center;
    }

    .close-button {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close-button:hover,
    .close-button:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    #cvForm input[type="file"] {
        margin-bottom: 20px;
    }

    #cvForm button {
        padding: 10px 20px;
        background-color: #9adee7;
        color: #000000;
        border: none;
        border-radius: 0px;
        cursor: pointer;
    }

    #cvForm button:hover {
        background-color: #000000;
        color: #ffff;
    }

  </style>
  <body>

    {{-- Header --}}
    @include('components-frontend.header', [
      'active' => $active
    ])

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    @php
        $link = asset('/upload/career/'.$careerDetail->career->filename);
    @endphp
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url('{{asset('assets/images/heading-6-1920x500.jpg')}}');">
      <div class="container">
      </div>
    </div>

    <!-- Page Content --> 
    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8">
              <br><br>
              <p class="lead" style="color: rgb(0, 0, 0)">
                   <i class="fa fa-map-marker"></i> {{$careerDetail->career->location}} &nbsp;&nbsp;
                   <i class="fa fa-calendar"></i> {{$careerDetail->career->date}} &nbsp;&nbsp;
                   <i class="fa fa-file"></i> {{$careerDetail->career->type}}
              </p>

              <br>
              <br>
              
              <div class="form-group">
                <h5>{{$careerDetail->career->job}}</h5>
              </div>

              {!! $careerDetail->desc_job !!}

              <br>
              <br>
          </div>

          <div class="col-md-3 col-sm-4">
            <br><br>
            <div class="contact-form">
              <div class="form-group">
                <button id="openModalButton" class="filled-button btn-block">Отправить Резюме</button>
              </div>
            </div>

            <div>
              <img src="{{asset('/upload/career/'.$careerDetail->career->filename)}}" alt="" class="img-fluid wc-image">
            </div>

            <br>

         

            <br>
            <br>
          </div>
        </div>
      </div>
    </div>

    <div class="section">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <div class="section-heading">
              <h2>Информация о компании</h2>
            </div>

            <p class="lead">
                  <i class="fa fa-map-marker"></i> {{$careerDetail->career->location}} 
            </p>

            {!! $careerDetail->desc_location !!}
            <br>
            <iframe src="https://yandex.ru/maps/org/1184371713" title="W3Schools Free Online Web Tutorials"></iframe>
          </div>

          <div class="col-md-3">
            <div class="section-heading">
              <h2>Контакты</h2>
            </div>
            
            <div class="left-content">
              <p>
                <span>Организация</span>

                <br>

                <strong>{{$careerDetail->name_contact}}</strong>
              </p>

              <p>
                <span>Телефон</span>

                <br>
                
                <strong>
                  <a href="tel:{{$careerDetail->phone_contact}}">{{$careerDetail->phone_contact}}</a>
                </strong>
              </p>

    
              <p>
                <span>Почта</span>

                <br>
                
                <strong>
                  <a href="mailto:{{$careerDetail->email_contact}}">{{$careerDetail->email_contact}}</a>
                </strong>
              </p>

              <p>
                <span>Веб-сайт</span>

                <br>
                
                <strong>
                  <a href="https://{{$careerDetail->website_contact}}/">{{$careerDetail->website_contact}}</a>
                </strong>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div id="modal" class="modal">
        <div class="modal-content">
            <span style="text-align: right" class="close-button">&times;</span>
            <h1><b>Отправить Резюме</b></h1><br>
            <form action="{{route('ajax-resume', $idCareer)}}" method="POST" id="cvForm" enctype="multipart/form-data">
              @csrf
                <input type="file" name="cv" accept=".pdf" required>
                <input type="hidden" name="id_career" value="{{$idCareer}}">
                <button type="submit">Отправить</button>
            </form>
        </div>
    </div>

    {{-- Footer --}}
    @include('components-frontend.footer')
    @include('components-frontend.modal-search')

    <script src="{{asset('/career/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/career/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/career/assets/js/custom.js')}}"></script>
    <script src="{{asset('/career/assets/js/owl.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      var modal = document.getElementById("modal");
        var openModalButton = document.getElementById("openModalButton");
        var closeButton = document.querySelector(".close-button");

        openModalButton.onclick = function() {
            modal.style.display = "block";
        }

        closeButton.onclick = function() {
            modal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }

        document.getElementById('cvForm').addEventListener('submit', function(event) {
            event.preventDefault();
            jQuery.ajax({
                url:"{{route('ajax-resume')}}",
                type:'POST',
                data:new FormData(this),
                contentType:false,
                processData:false,
                allowClear: true,
                success:function(result)
                {
                  Swal.fire({
                    position: "top-end",
                    icon: "success",
                    title: "Резюме успешно отправлено!",
                    showConfirmButton: false,
                    timer: 1500
                  });
                  modal.style.display = "none";
                },
                cache: true
            }).fail(function (jqXHR, textStatus, error) {
                Swal.fire({
                  position: "top-end",
                  icon: "error",
                  title: "Файлы должны быть в формате pdf!",
                  showConfirmButton: false,
                  timer: 1500
                });
                modal.style.display = "none";
            });
        });
    </script>

  </body>

</html>
