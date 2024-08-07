<?php 
    use App\Models\CareerDetail;
    use \Statickidz\GoogleTranslate;
?>
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

    <title>Career</title>

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

  
    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url('{{asset('assets/images/heading-6-1920x500.jpg')}}');">
     <div class="container">
     </div>
   </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
             <div class="contact-form" style="color: white">
                <form action="#">
                 <h5 style="margin-bottom: 15px">Type</h5>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Full-time</small>
                      </label>
                 </div>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Part-time</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Internship</small>
                      </label>
                 </div>

                 <br>

                 <h5 style="margin-bottom: 15px">Category</h5>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Lawyer</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Programmer/System Administrator</small>
                      </label>
                 </div>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Engineer</small>
                      </label>
                 </div>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Director/Executive Assistant</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Courier/Driver</small>
                      </label>
                 </div>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Accountant</small>
                      </label>
                 </div>

                 <br>

              

                 <h5 style="margin-bottom: 15px">Years of Experience</h5>

                 <div>
                      <label>
                           <input type="checkbox">

                            <small>&lt; 1 </small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                            <small>&lt; 2 </small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                            <small>&lt; 5 </small>
                      </label>
                 </div>
            </form>
             </div>
          </div>

          <div class="col-md-9">
            <div class="row">

               @foreach ($career as $item)
                    <div class="col-md-6">
                         <div class="product-item">

                              @php
                                   $cekDetail = CareerDetail::where('id_career', $item->id)->first();
                                   $source = 'ru';
                                   $target = 'en';
                                   $text = $item->job;

                                   $trans = new GoogleTranslate();
                                   $result = $trans->translate($source, $target, $text);
                              @endphp
                              @if ($cekDetail == null)
                                   <a href="#"><img src="{{asset('/upload/career/'.$item->filename)}}" alt=""></a>
                                   {{-- <a href="{{route('frontend.careerDetail')}}"><img src="{{asset('/career/assets/images/product-1-370x270.jpg')}}" alt=""></a> --}}
                                   <div class="down-content">
                                   <a href="#"><h4><strong>{{$result}}</strong></h4></a>
                                   {{-- <a href="{{route('frontend.careerDetail')}}"><h4><strong>Менеджер</strong></h4></a> --}}
                              @else
                                   <a href="{{route('frontend.careerDetailEn', $item->id)}}"><img src="{{asset('/upload/career/'.$item->filename)}}" alt=""></a>
                                   {{-- <a href="{{route('frontend.careerDetail')}}"><img src="{{asset('/career/assets/images/product-1-370x270.jpg')}}" alt=""></a> --}}
                                   <div class="down-content">
                                   <a href="{{route('frontend.careerDetailEn', $item->id)}}"><h4><strong>{{$result}}</strong></h4></a>
                                   {{-- <a href="{{route('frontend.careerDetail')}}"><h4><strong>Менеджер</strong></h4></a> --}}
                              @endif

                              <h6>₽ {{$item->salary}}</h6>

                              <h4><small><i class="fa fa-briefcase"></i> Experience / {{$item->experience}} years <br> <strong><i class="fa fa-building">
                                   @php
                                        $source3 = 'ru';
                                        $target3 = 'en';
                                        $text3 = $item->office;

                                        $trans3 = new GoogleTranslate();
                                        $result3 = $trans3->translate($source3, $target3, $text3);
                                   @endphp
                                   </i> {{$result3}}
                              </strong></small></h4>

                              <small>
                                   <strong title="Posted on"><i class="fa fa-calendar"></i>{{$item->date}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                   <strong title="Type"><i class="fa fa-file"></i> 
                                        @php
                                             $source1 = 'ru';
                                             $target1 = 'en';
                                             $text1 = $item->type;

                                             $trans1 = new GoogleTranslate();
                                             $result1 = $trans1->translate($source1, $target1, $text1);
                                        @endphp
                                        {{$result1}}
                                   </strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                   <strong title="Location"><i class="fa fa-map-marker"></i> 
                                        @php
                                             $source2 = 'ru';
                                             $target2 = 'en';
                                             $text2 = $item->location;

                                             $trans2 = new GoogleTranslate();
                                             $result2 = $trans2->translate($source2, $target2, $text2);
                                        @endphp
                                        {{$result2}}
                                   </strong>
                              </small>
                              </div>
                         </div>
                    </div>
               @endforeach

              {{-- <div class="col-md-12">
                <ul class="pages">
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
                </ul>
              </div> --}}
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
  </body>

</html>
