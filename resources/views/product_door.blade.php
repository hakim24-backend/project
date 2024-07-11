<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title></title>

    {{-- css header and footer --}}
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick-theme.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/main.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">

    <link rel="stylesheet" href="{{asset('door/css/magnify.css')}}" />
    <link rel="stylesheet" href="{{asset('door/css/zoomple.css')}}" />
    <link rel="stylesheet" href="{{asset('door/css/style.css?v=1234')}}" />
    <style>
        .section-padding {
            padding-top: 50px;
            padding-bottom: 210px;
        }



    </style>
</head>

<body>

    {{-- Header --}}
    @include('components-frontend.header')

    <div class="container-door">
        <div class="innerContainer">
            <!-- <div class="row addressBar">
			<p>Главная > межкомнатные двери > Cерия HISPANIA > МОДЕЛЬ III (3) / ПАНЕЛЬ </p>
		</div> -->

            <div class="breadcrumbs1">
                <br><br>
                <div itemscope="" itemtype="http://schema.org/BreadcrumbList" class="container">
                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="first" itemprop="item" href="{{route('frontend.index')}}" title="Главная"><span itemprop="name">Главная</span>
                            <meta itemprop="position" content="0"> >
                        </a>
                    </span>

                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="first" itemprop="item" href="{{route('frontend.category', $product->collection->category->name)}}"
                            title="{{$product->collection->category->name}}"><span itemprop="name">межкомнатные двери</span>
                            <meta itemprop="position" content="1"> >
                        </a>
                    </span>

                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a class="first" itemprop="item" href="{{route('frontend.collection', $product->collection->id)}}" title="{{$product->collection->name}}"><span
                                itemprop="name">{{$product->collection->name}}</span>
                            <meta itemprop="position" content="2"> >
                        </a>
                    </span>

                    <span itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><span
                            itemprop="name">{{$product->name}}</span>
                        <meta itemprop="position" content="4">
                    </span>
                </div>
            </div><br>
            <div class="productSec">
                <h1 class="text-center">{{$product->name}}</h1>
                <div class="productBox">
                    <div class="productSpecs">
                        <h3>спецификация</h3>
                        @foreach ($description as $item)
                        <p><b>{{$item->name}} :</b> {{$item->value}}</p>
                        @endforeach


                        <!-- Thumbnail images -->
                        @if ($smalldoor->isNotEmpty())
                            <p class="noborder">другой декор:</p>
                            <div class="thumbnailsRow">
                                @foreach ($smalldoor as $sd)
                                    <div class="column">
                                        <img class="demo cursor" src="{{asset('upload/small_door/'.$sd->filename)}}"
                                            onclick="openModal('{{asset('upload/small_door/'.$sd->filename)}}')" alt="The Woods" />
                                        <p>{{$sd->name}}</p>
                                    </div>
                                @endforeach
                                <div id="myModal" class="modal">
                                    <span class="close" onclick="closeModal()">&times;</span>
                                    <a href="" class="zoomHover2" id="zoomContainer">
                                        <img class="modalZoom" id="modalImage">
                                    </a>
                                </div>
                            </div>
                            <br>
                        @endif
                    </div>
                    <div class="productImg">
                        <a href="{{asset('upload/product/'.$product->filename)}}" class="zoomHover">
                            <img src="{{asset('upload/product/'.$product->filename)}}" class="zoom">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('components-frontend.footer')
    @include('components-frontend.modal-search')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
    <script src="{{asset('door/js/jquery.magnify.js')}}"></script>
    <script src="{{asset('door/js/jquery.magnify-mobile.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('.zoom').magnify();

            $('#zoomple_image_overlay').mouseenter(function () {
                $(".modalZoom").addClass("hoverEffect");
            });
            $('#zoomple_image_overlay').mouseleave(function () {
                $(".modalZoom").removeClass("hoverEffect");
            });
        });

    </script>
    <script>

    </script>

</body>

</html>
