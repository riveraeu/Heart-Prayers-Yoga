$(document).ready(function() {
  // Goolge maps Api overlay
  $('.overlay').click(function () {
      $("#map").css("pointer-events", "auto");
  });

  $('.overlay').mouseleave(function() {
    $("#map").css("pointer-events", "none");
  });

  // Smooth scroll
  $(function() {
    $('a[href*="#"]:not([href="#"])').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 500);
          return false;
        }
      }
    });
  });
});
