<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
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
            <div class="row-career bgRow pdtb">

                <div class="center">
                    <div class="row-career contentRow">
                        <div class="leftBox logoBox">
                            <a href="#"><img src="{{asset('career2/images/coio.png')}}" alt="" /></a>
                        </div>
                        <div class="rightBox contentBox">
                            <p class=""><strong><a href="#">ООО «СоюзБалтКомплект»</a></strong></p>
                            <p>
                                196643, г. Санкт-Петербург, п. Саперный, тер. Предприятия Балтика, д. 3,
                                литера ЮА
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row-career pdtb">
                <div class="center">
                    <div class="row-career contentRow border-career">
                        <div class="leftBox">
                            <p>
                                <a href="#">Водитель погрузчика</a>
                            </p>
                        </div>
                        <div class="rightBox contentBox">
                            <p>
                                <strong>требования:</strong> Мужчина, возраст от 18 лет, без вредных привычек,
                                водительские права категории «В», «С».
                            </p>
                            <p>
                                <strong>график работы:</strong> 2/2, выходной: суббота, воскресенье
                            </p>
                            <p>
                                <strong>заработная плата:</strong> 80 000 руб
                            </p>
                            <p>
                                <strong>место работы:</strong> г. Санкт-Петербург, п. Саперный, тер. Предприятия
                                Балтика, д. 3
                            </p>
                        </div>
                    </div>

                    <div class="row-career contentRow border-career">
                        <div class="leftBox">
                            <p>
                                <a href="#">Наладчик станков с ЧПУ</a>
                            </p>
                        </div>
                        <div class="rightBox contentBox">
                            <p>
                                <strong>требования:</strong> Мужчина, возраст от 18 лет, образование не ниже
                                среднего специального, с опытом работы
                            </p>
                            <p>
                                <strong>график работы:</strong> 5/2, выходной: суббота, воскресенье
                            </p>
                            <p>
                                <strong>заработная плата:</strong> 80 000 руб
                            </p>
                            <p>
                                <strong>место работы:</strong> г. Санкт-Петербург, п. Саперный, тер. Предприятия
                                Балтика, д. 3
                            </p>
                        </div>
                    </div>

                    <div class="row-career contentRow">
                        <div class="leftBox">
                            <p>
                                <a href="#">Менеджер по продажам</a>
                            </p>
                        </div>
                        <div class="rightBox contentBox">
                            <p>
                                <strong>требования:</strong> Высшее образование, опыт активных и пассивных продаж,
                                стрессоустойчивость, коммуникабельность, грамотная устная
                                и письменная речь, владение компьютерными прграммами 1С
                            </p>
                            <p>
                                <strong>график работы:</strong> 5/2, выходной: суббота, воскресенье,
                            </p>
                            <p>
                                <strong>заработная плата:</strong> 80 000 руб
                            </p>
                            <p>
                                <strong>место работы:</strong> г. Санкт-Петербург, ул. Шпалерная, д.51А, БЦ
                                «Таврический»
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-career bgRow pdtb">

                <div class="center">
                    <div class="row-career contentRow">
                        <div class="leftBox logoBox">
                            <a href="#"><img src="{{asset('career2/images/liehtp.png')}}" alt="" /></a>
                        </div>
                        <div class="rightBox contentBox">
                            <p class=""><strong><a href="#">ООО «СОЮЗ-ЦЕНТР»</a></strong></p>
                            <p>
                                <strong>Калужский многопрофильный деревоперерабатывающий
                                    комбинат (КМДК)</strong> <br />
                                Калужская обл, г. Балабаново, пл. 50 лет Октября, д.3
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row-career pdtb">
                <div class="center">
                    <div class="row-career contentRow">
                        <div class="leftBox">
                            <p>
                                <a href="#">Водитель погрузчика</a>
                            </p>
                        </div>
                        <div class="rightBox contentBox">
                            <p>
                                <strong>требования:</strong> Мужчина, возраст от 18 лет, без вредных привычек,
                                водительские права категории «В», «С».


                            </p>
                            <p>
                                <strong>график работы:</strong> 2/2, выходной: суббота, воскресенье,

                            </p>
                            <p>

                                <strong>заработная плата:</strong> 80 000 руб


                            </p>
                            <p>
                                <strong>место работы:</strong> Калужская обл, г. Балабаново, пл. 50 лет Октября, д.3
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-career bgRow pdtb">

                <div class="center">
                    <div class="row-career contentRow">
                        <div class="leftBox logoBox">
                            <a href="#"><img src="{{asset('career2/images/hebct.png')}}" alt="" /></a>
                        </div>
                        <div class="rightBox contentBox">
                            <p class=""><strong><a href="#">ОАО «ЛЕСПЛИТИНВЕСТ»</a></strong></p>
                            <p>
                                Ленинградская обл, г. Приозерск, ул. Инженерная, д.13
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row-career pdtb">
                <div class="center">
                    <div class="row-career contentRow border-career">
                        <div class="leftBox">
                            <p>
                                <a href="#">Водитель погрузчика</a>
                            </p>
                        </div>
                        <div class="rightBox contentBox">
                            <p>
                                <strong>требования:</strong> Мужчина, возраст от 18 лет, без вредных привычек,
                                водительские права категории «В», «С».
                            </p>
                            <p>
                                <strong>график работы: 2/2, выходной:</strong> суббота, воскресенье,
                            </p>
                            <p>
                                <strong>заработная плата:</strong> 80 000 руб
                            </p>
                            <p>
                                <strong>место работы:</strong> Ленинградская обл, г. Приозерск, ул. Инженерная, д.13
                            </p>
                        </div>
                    </div>

                    <div class="row-career contentRow">
                        <div class="leftBox">
                            <p>
                                <a href="#">Менеджер по продажам</a>
                            </p>
                        </div>
                        <div class="rightBox contentBox">
                            <p>
                                <strong>требования:</strong> Высшее образование, опыт активных и пассивных продаж,
                                стрессоустойчивость, коммуникабельность, грамотная устная
                                и письменная речь, владение компьютерными прграммами 1С
                            </p>
                            <p>
                                <strong>график работы: 5/2, выходной:</strong> суббота, воскресенье,
                            </p>
                            <p>
                                <strong>заработная плата:</strong> 80 000 руб
                            </p>
                            <p>
                                <strong>место работы:</strong> г. Санкт-Петербург, ул. Шпалерная, д.51А, БЦ
                                «Таврический»
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-career bgRow pdtb">

                <div class="center">
                    <div class="row-career contentRow">
                        <div class="leftBox logoBox">
                            <a href="#"><img src="{{asset('career2/images/soyuz.png')}}" alt="" /></a>
                        </div>
                        <div class="rightBox contentBox">
                            <p class=""><strong><a href="#">ООО «SOYUZ GROUP»</a></strong></p>
                            <p>
                                91015, Россия, Санкт-Петербург, ул. Шпалерная, д. 51А
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row-career pdtb">
                <div class="center">
                    <div class="row-career contentRow">
                        <div class="leftBox">
                            <p>
                                <a href="#">Менеджер по продажам</a>
                            </p>
                        </div>
                        <div class="rightBox contentBox">
                            <p>
                                <strong>требования:</strong> Высшее образование, опыт активных и пассивных продаж,
                                стрессоустойчивость, коммуникабельность, грамотная устная
                                и письменная речь, владение компьютерными прграммами 1С

                            </p>
                            <p>
                                <strong>график работы:</strong> 5/2, выходной: суббота, воскресенье,

                            </p>
                            <p>

                                <strong>заработная плата:</strong> 80 000 руб


                            </p>
                            <p>
                                <strong>место работы:</strong> г. Санкт-Петербург, ул. Шпалерная, д.51А, БЦ
                                «Таврический»
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<br><br><br>

    {{-- Footer --}}
    @include('components-frontend.footer')

    <script src="{{asset('/career/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('/career/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
</body>

</html>
