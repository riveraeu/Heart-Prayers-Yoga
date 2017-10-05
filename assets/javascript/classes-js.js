$(document).ready(function() {
  // Goolge maps Api overlay
  $("#overlay").click(function () {
      $("#map").css("pointer-events", "auto");
  });

  $("#overlay").mouseleave(function() {
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

function initMap() {
  var myLatLng = {lat: 38.000034, lng: -122.522727};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Osher Marin JCC'
  });

  marker.addListener('click', function() {
    window.location.href = 'https://www.google.com/maps/place/Osher+Marin+JCC/@38.000043,-122.5232282,19z/data=!3m1!4b1!4m5!3m4!1s0x808599cef09f3d6d:0xce9bbc4fbe67e9!8m2!3d38.000043!4d-122.522681';
  });

  $(window).resize(function () {
    $('#map').css('height', (400));
  }).resize();
}

google.maps.event.addDomListener(window, 'load', initMap);
