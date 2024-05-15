<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">

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

  <body>

    {{-- Header --}}
    @include('components-frontend.header')

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
              <p class="lead" style="color: white">
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
            <div class="contact-form">
              <div class="form-group">
                <button type="submit" class="filled-button btn-block">Применить эту вакансию</button>
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
          </div>

          <div class="col-md-3">
            <div class="section-heading">
              <h2>Контактная информация</h2>
            </div>
            
            <div class="left-content">
              <p>
                <span>Имя</span>

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

    {{-- Footer --}}
    @include('components-frontend.footer')

    <script src="{{asset('/career/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/career/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/career/assets/js/custom.js')}}"></script>
    <script src="{{asset('/career/assets/js/owl.js')}}"></script>
  </body>

</html>
