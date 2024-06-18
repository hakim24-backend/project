<!-- Footer -->
<footer>
  <div class="footer-columns container-fluid fixed-content">
    <div class="container section-padding">
      <div class="row">
        <div class="col-md-4 column" style="text-align: left">
          <h6>НАВИГАТОР</h6>
          <div class="footer-nav">

            <ul>
              <li><a href="{{route('frontend.allProduct')}}" class="nav-link">ПРОДУКТЫ</a></li>
              <li><a href="{{route('frontend.library')}}" class="nav-link">ДОКУМЕНТЫ</a></li>
              <li><a href="{{route('frontend.visualizer')}}" class="nav-link">ВИЗУАЛИЗАТОР</a></li>
              <li><a href="{{route('frontend.contact')}}" class="nav-link">ЗАДАТЬ ВОПРОС</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md-4 column" style="text-align: left">
          <h6>КОНТАКТЫ</h6>
          <p>195279, Санкт-Петербург, Шпалерная ул., 51 </p>
          <p>бизнес-центр "Таврический"</p>
          <p><a><i class="fa-solid fa-phone"></i></a> : +7 (812) 244 46 00</p>
          <p><i class="fa-solid fa-envelope"></i></i> : office@pgsouz.ru</p>
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