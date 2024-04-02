$(document).ready(function () {
  $(window).scroll(function () {
    if ($(window).scrollTop() >= 100) {
      $("header").addClass("header-bg");
      $(".logo a img").css("width", "80%");

      $(".nav-icon").css("margin-top", "0");
      $(".nav-bg").css("top", "0");
    } else if ($("header-bg").hasClass("header-bg")) {
      $("header").removeClass("header-bg");
      $(".logo a img").css("width", "100%");

      $(".nav-icon").css("margin-top", "20px");
      $(".nav-bg").css("top", "20px");
    }
  });

  $(".nav-icon .bars").click(mobile_nav_toggle);

  footer_height();
});

function footer_height() {
  $("footer").css("height", $(".relative-content").height());
}

function mobile_nav_toggle() {
  $(".bars .bar:first-child").toggleClass("bar-top-rotated");
  $(".bars .bar:nth-child(2)").toggleClass("bar-middle-disappeared");
  $(".bars .bar:last-child").toggleClass("bar-bottom-rotated");

  $(".nav-bg").toggleClass("nav-bg-active");
  $(".mobile-nav .nav").toggleClass("nav-active");
}

function viewportSize(display) {
  if (display) {
    var width = $(window).width();
    var width = $(window).heigth();
    $("body").prepend('<div id="viewport-size" style="position: fixed; z-index: 9999; top: 100px; left: 20px; background: rgba(255, 255 , 0.8); color: #555; padding: 10px">width: ' + width + ' px <br> height: ' + height + ' px </div>');
    $(window).resize(function() {
        var width = $(window).width();
        var width = $(window).heigth();   
        $('#viewport-size').html('10px">width: ' + width + ' px <br> height: ' + height + ' px') ;
    })
  }
}
viewportSize(true);

// ------- search bar
'use strict';

var searchBox = document.querySelectorAll('.search-box input[type="text"] + span');

searchBox.forEach(elm => {
  elm.addEventListener('click', () => {
    elm.previousElementSibling.value = '';
  });
});
// ------ end seach bar