<?php 
    use \Statickidz\GoogleTranslate;
?>
<!DOCTYPE html>
<html lang="en">

  <head>
    @php
        $audioUrl = 'https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3';
    @endphp
    <meta charset="utf-8">
    @if (strpos($audioUrl, 'https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3') === false)
        <audio src="{{ $audioUrl }}" loop=""></audio>
    @endif
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

    <title> Career Detail </title>

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
    @include('components-frontend-en.header')

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
                   <i class="fa fa-map-marker"></i> 
                    @php
                      $source = 'ru';
                      $target = 'en';
                      $text = $careerDetail->career->location;

                      $trans = new GoogleTranslate();
                      $result = $trans->translate($source, $target, $text);
                    @endphp
                   {{$result}} 
                   &nbsp;&nbsp;
                   <i class="fa fa-calendar"></i> {{$careerDetail->career->date}} &nbsp;&nbsp;
                   <i class="fa fa-file"></i> 
                   @php
                      $source1 = 'ru';
                      $target1 = 'en';
                      $text1 = $careerDetail->career->type;

                      $trans1 = new GoogleTranslate();
                      $result1 = $trans1->translate($source1, $target1, $text1);
                    @endphp
                   {{$result1}}
              </p>

              <br>
              <br>
              
              <div class="form-group">
                <h5>
                  @php
                    $source2 = 'ru';
                    $target2 = 'en';
                    $text2 = $careerDetail->career->job;

                    $trans2 = new GoogleTranslate();
                    $result2 = $trans2->translate($source2, $target2, $text2);
                  @endphp
                  {{$result2}}
                </h5>
              </div>
              
              @php
                $source3 = 'ru';
                $target3 = 'en';
                $text3 = $careerDetail->desc_job;

                $trans3 = new GoogleTranslate();
                $result3 = $trans3->translate($source3, $target3, $text3);
              @endphp
              {!! $result3 !!}

              <br>
              <br>
          </div>

          <div class="col-md-3 col-sm-4">
            <div class="contact-form">
              <div class="form-group">
                <button type="submit" class="filled-button btn-block">Apply This Vacancy</button>
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
              <h2>Information About The Company</h2>
            </div>

            <p class="lead">
                  <i class="fa fa-map-marker"></i> 
                  @php
                    $source4 = 'ru';
                    $target4 = 'en';
                    $text4 = $careerDetail->career->location;

                    $trans4 = new GoogleTranslate();
                    $result4 = $trans4->translate($source4, $target4, $text4);
                  @endphp
                  {{$result4}} 
            </p>

            @php
              $source5 = 'ru';
              $target5 = 'en';
              $text5 = $careerDetail->desc_location;

              $trans5 = new GoogleTranslate();
              $result5 = $trans5->translate($source5, $target5, $text5);
            @endphp
            {!! $result5 !!}
          </div>

          <div class="col-md-3">
            <div class="section-heading">
              <h2>Contact Information</h2>
            </div>
            
            <div class="left-content">
              <p>
                <span>Name</span>

                <br>

                <strong>{{$careerDetail->name_contact}}</strong>
              </p>

              <p>
                <span>Phone</span>

                <br>
                
                <strong>
                  <a href="tel:{{$careerDetail->phone_contact}}">{{$careerDetail->phone_contact}}</a>
                </strong>
              </p>

    
              <p>
                <span>Email</span>

                <br>
                
                <strong>
                  <a href="mailto:{{$careerDetail->email_contact}}">{{$careerDetail->email_contact}}</a>
                </strong>
              </p>

              <p>
                <span>Website</span>

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
    @include('components-frontend-en.footer')

    <script src="{{asset('/career/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/career/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/career/assets/js/custom.js')}}"></script>
    <script src="{{asset('/career/assets/js/owl.js')}}"></script>

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
