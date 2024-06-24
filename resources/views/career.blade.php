<?php 
    use App\Models\CareerDetail;
?>
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

    <title>Карьера</title>

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
     .page-headingg {
          padding: 0px 0px 130px 0px;
          text-align: center;
          background-position: center center;
          background-repeat: no-repeat;
          background-size: cover;
          background: #000000;
          margin-top: -76px;
     }
  </style>
  <body>

     {{-- Header --}}
     @include('components-frontend.header', [
          'active' => $active
     ]);

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
    <div class="page-headingg about-heading header-text" style="background-image: url('{{asset('assets/images/heading-6-1920x500.jpg')}}');">
     <div class="container">
     </div>
   </div>

    <div class="products">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
               <br>
             <div class="contact-form" style="color: rgb(0, 0, 0)">
                <form action="#">
                 <h5 style="margin-bottom: 15px">Тип</h5>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Полный рабочий день</small>
                      </label>
                 </div>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Половина рабочего дня</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Стажировка</small>
                      </label>
                 </div>

                 <br>

                 <h5 style="margin-bottom: 15px">Категория</h5>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Юрист</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Программист/Системный администратор</small>
                      </label>
                 </div>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Инженер</small>
                      </label>
                 </div>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Директор/Помощник руководителя</small>
                      </label>
                 </div>

                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Курьер/Водитель</small>
                      </label>
                 </div>
                 <div>
                      <label>
                           <input type="checkbox">

                           <small>Бухгалтер</small>
                      </label>
                 </div>

                 <br>

              

                 <h5 style="margin-bottom: 15px">Годы опыта</h5>

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
            <br>
             </div>
          </div>

          <div class="col-md-9">
            <div class="row">

               @foreach ($career as $item)
                    <div class="col-md-6">
                         <div class="product-item">

                              @php
                                  $cekDetail = CareerDetail::where('id_career', $item->id)->first();
                              @endphp
                              @if ($cekDetail == null)
                                   <a href="#"><img src="{{asset('/upload/career/'.$item->filename)}}" alt=""></a>
                                   {{-- <a href="{{route('frontend.careerDetail')}}"><img src="{{asset('/career/assets/images/product-1-370x270.jpg')}}" alt=""></a> --}}
                                   <div class="down-content">
                                   <a href="#"><h4><strong>{{$item->job}}</strong></h4></a>
                                   {{-- <a href="{{route('frontend.careerDetail')}}"><h4><strong>Менеджер</strong></h4></a> --}}
                              @else
                                   <a href="{{route('frontend.careerDetail', $item->id)}}"><img src="{{asset('/upload/career/'.$item->filename)}}" alt=""></a>
                                   {{-- <a href="{{route('frontend.careerDetail')}}"><img src="{{asset('/career/assets/images/product-1-370x270.jpg')}}" alt=""></a> --}}
                                   <div class="down-content">
                                   <a href="{{route('frontend.careerDetail', $item->id)}}"><h4><strong>{{$item->job}}</strong></h4></a>
                                   {{-- <a href="{{route('frontend.careerDetail')}}"><h4><strong>Менеджер</strong></h4></a> --}}
                              @endif

                              <h6>₽ {{$item->salary}}</h6>

                              <h4><small><i class="fa fa-briefcase"></i> Опыт / {{$item->experience}} года <br> <strong><i class="fa fa-building"></i> {{$item->office}}</strong></small></h4>

                              <small>
                                   <strong title="Posted on"><i class="fa fa-calendar"></i> {{$item->date}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                   <strong title="Type"><i class="fa fa-file"></i> {{$item->type}}</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                              </small><br>
                              <small>
                                   <strong title="Location"><i class="fa fa-map-marker"></i> {{$item->location}}</strong>
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
    @include('components-frontend.footer')

    <script src="{{asset('/career/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/career/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('/career/assets/js/custom.js')}}"></script>
    <script src="{{asset('/career/assets/js/owl.js')}}"></script>
  </body>

</html>
