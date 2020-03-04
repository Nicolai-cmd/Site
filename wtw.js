$(function() {
    $(window).scroll(function() {
      if ($(this).scrollTop() > 240) {
        $("#gotop").fadeIn();
      } else {
        $("#gotop").fadeOut();
      }
    });
    $("#gotop").click(function() {
      $('body, html').animate({
        scrollTop: 0
      }, 500);
    });
  });