<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link rel="shortcut icon" type="x-icon" href="{{asset('/upload/img/SG_верт_оригин.png')}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Industrial Group Union</title>
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/normalize.css')}}">
      
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      
        <link
          href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:wght@100;400;700&family=Ubuntu:wght@300;400;700&display=swap"
          rel="stylesheet">
      
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/slick-theme.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/responsive.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/search.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/checkbox.css')}}">
        <link rel="stylesheet" type="text/css" media="screen" href="{{asset('css/contact.css')}}">
      </head>
  <body data-spay="scroll" data-target=".nav" data-offset="100">

    {{-- Header --}}
    @include('components-frontend-en.header')

    <style>
        .contact {
            position: relative;
            min-height: 100vh;
            padding: 50px 100px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            background: url('{{asset('/upload/img/contactfond1.jpg')}}');
            background-size: cover;
        }
        .contactForm .inputBox input[type="submit"] {
            width: 100px;
            background: #02a9a9;
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 10px;
            font-size: 18px;
        }
    </style>

    <section class="contact">
        <div class="content">
            <h2>ASK A QUESTION</h2>

            <div class="containery">
                <div class="contactInfo">
                    <div class="box">
                        <div class="icon"> <i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Address</h3>
                            <p>195279, St. Petersburg, Shpaler Street, 51
                                <br> Tavrichesky Business Center
                            </p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="text">
                            <h3>Phone</h3>
                            <p>+7 (812) 244 46 00</p>
                        </div>
                    </div>

                    <div class="box">
                        <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i>
                        </div>
                        <div class="text">
                            <h3>Email</h3>
                            <p>office@pgsouz.ru</p>
                        </div>
                    </div>

                </div>
                <div class="contactForm">
                    <form action="{{route('frontend.contactStore', 2)}}" method="post">
                    @csrf
                        <h2>Send Message</h2>
                        <div class="inputBox">
                            <input type="text" name="name" required="required">
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="phone" placeholder="+7 90 000 00 00" required="required">
                            <!-- <span>Телефон</span> -->
                        </div>
                        <div class="inputBox">
                            <textarea required="required" name="message"></textarea>
                            <span>Enter your message...</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Send">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- Footer --}}
    @include('components-frontend-en.footer')
    
    <script src="{{asset('/js/jquery.min.js')}}"></script>
    <script src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('/js/slick.min.js')}}"></script>
    <script src="{{asset('/js/main.js')}}"></script>
  </body>
</html>