$(document).ready(function(){
  "use strict";
  $(document).scroll(function () {
      if ($(this).scrollTop() > 50) {
          $('.navbar').addClass('navbar-open');
          $('.header .layout .navbar-nav li a').addClass('active-color');
          //navbar-icon in mobile
          $('.navbar-icon').addClass('active');
      } else {
          $('.navbar').removeClass('navbar-open');
          $('.header .layout .navbar-nav li a').removeClass('active-color');
          $('.navbar-icon').removeClass('active');
      }  
      //btn-up
      if ($(this).scrollTop() > 100 ) {
        $('.btn-up').addClass('btn-up-show');
      } else {
        $('.btn-up').removeClass('btn-up-show');
      }
  });
  //features
  $('.features .container .col-md-4').hover(function () {
    $(this).find('span').css({
        "color" : $(this).find('.i-cover i').css("color")
    })
    },function () {
    $(this).find('span').css({
        "color" : "#476b6b"
    })
  })

  $('.btn-up').click(function () {
    $('html, body').animate({
        scrollTop: 0
    }, 1000);
  });
})