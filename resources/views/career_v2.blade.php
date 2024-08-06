<?php
    use App\Models\DetailCareertwo;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    @php
        $audioUrl = 'https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3';
    @endphp
    @if (strpos($audioUrl, 'https://flag-gimn.ru/wp-content/uploads/2021/09/Ukraina.mp3') === false)
        <audio src="{{ $audioUrl }}" loop=""></audio>
    @endif
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <title></title>
    <link rel="stylesheet" href="{{asset('career2/css/style.css?v=123')}}" />

	<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
    integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">

</head>
<style>
	body {
		background: #000000;
        font-family: "IBM Plex Sans", sans-serif;
	}

	h1 {
		margin-top: 20px;
	}

	p {
		margin-top: 20px;
		color: #000000;
	}

</style>
<body>

    {{-- Header --}}
    @include('components-frontend.header', [
    'active' => $active
    ]);

	<br><br><br>
    <div class="container-career">
        <div class="row-career banner-career">
            <img class="img-career" src="{{asset('career2/images/banner2.png')}}" />
            <h1 class="text-center">ВАКАНСИИ</h1>
            <p class="text-center">В НАСТОЯЩИЙ МОМЕНТ НА ПРЕДПРИЯТИЯХ ХОЛДИНГА SOYUZ GROUP ОТКРЫТЫ СЛЕДУЮЩИЕ ВАКАНСИИ
            </p>
        </div>
        <div class="row-career jobSec">

            {{-- foreach company --}}
            @foreach ($careertwo as $item)
                <div class="row-career bgRow pdtb">
                    <div class="center">
                        
                        <div class="row-career contentRow">
                            <div class="leftBox logoBox">
                                <img src="{{asset('upload/careertwo/'.$item->filename)}}" alt="" />
                            </div>
                            <div class="rightBox contentBox">
                                <p class=""><strong>{{$item->name_company}}</strong></p>
                                <p>
                                    {{$item->info_company}}
                                </p>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="row-career pdtb">
                    <div class="center">
                        
                        @php
                            $detailCareertwo = DetailCareertwo::where('id_careertwo', $item->id)->get();
                            $start=count($detailCareertwo);$end=0;
                        @endphp
                        @foreach ($detailCareertwo as $value)
                            @php $end=$end+1; @endphp
                            
                            @if ($end < $start)
                                <div class="row-career contentRow border-career">
                            @else
                                <div class="row-career contentRow">
                            @endif
                            
                                <div class="leftBox">
                                    <p>
                                        <a href="{{route('frontend.careerDetailv2', $value->id)}}">{{$value->job}}</a>
                                    </p>
                                </div>
                                <div class="rightBox contentBox">
                                    <p>
                                        <strong>требования:</strong> {{$value->requirment}}
                                    </p>
                                    <p>
                                        <strong>график работы:</strong> {{$value->schedule}}, выходной: {{$value->day_of}}
                                    </p>
                                    <p>
                                        <strong>заработная плата:</strong> @salary($value->salary)
                                    </p>
                                    <p>
                                        <strong>место работы:</strong> {{$value->location}}
                                    </p>
                                </div>
                            </div>
                        @endforeach
    
                    </div>
                </div>

            @endforeach
        </div>
    </div>
	<br><br><br>

    {{-- Footer --}}
    @include('components-frontend.footer')
    @include('components-frontend.modal-search')

    <script src="{{asset('/career/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/career/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
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
