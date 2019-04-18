var marker;
var map;
var myLatLng = {lat: 3.512316, lng: 101.617725};

function initMap() {
  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng,
    zoom: 17,
    disableDefaultUI: true,
    styles: [
      {
        "elementType": "geometry",
        "stylers": [{"color": "#f5f5f5"}]
      },
      {
        "elementType": "labels.icon",
        "stylers": [{"visibility": "off"}]
      },
      {
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#616161"}]
      },
      {
        "elementType": "labels.text.stroke",
        "stylers": [{"color": "#f5f5f5"}]
      },
      {
        "featureType": "administrative",
        "elementType": "geometry",
        "stylers": [{"visibility": "off"}]
      },
      {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#bdbdbd"}]
      },
      {
        "featureType": "poi",
        "stylers": [{"visibility": "off"}]
      },
      {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{"color": "#eeeeee"}]
      },
      {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#757575"}]
      },
      {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{"color": "#e5e5e5"}]
      },
      {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#9e9e9e"}]
      },
      {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [{"color": "#ffffff"}]
      },
      {
        "featureType": "road",
        "elementType": "labels.icon",
        "stylers": [{"visibility": "off"}]
      },
      {
        "featureType": "road.arterial",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#757575"}]
      },
      {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [{"color": "#dadada"}]
      },
      {
        "featureType": "road.highway",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#616161"}]
      },
      {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#9e9e9e"}]
      },
      {
        "featureType": "transit",
        "stylers": [{"visibility": "off"}]
      },
      {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [{"color": "#e5e5e5"}]
      },
      {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [{"color": "#eeeeee"}]
      },
      {
        "featureType": "water",
        "elementType": "geometry",
        "stylers": [{"color": "#c9c9c9"}]
      },
      {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [{"color": "#9e9e9e"}]
      }
    ]
  });

  marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    title: 'Totalgard Manufacturing'
  });

}

//Maps button function
jQuery(function($){
  var i;
  $(".contact-move").css({"margin-bottom": "-40px"});
  $(".contact-select-2").hide();
  $(".contact-select-1").css({"opacity": "1"});
  $(".contact-move").removeClass("d-none");
  $(".contact-column").css({"opacity": "1"});
  $(".contact-column").css({"padding-top": "0px"});
  $(".contact-move").animate({bottom: "20px"});
  $(".contact-select-2").css({"top": "+5px"});

  $('#contact-map-1').on('click', function() {
    changeMarkerPos(3.512316, 101.617725);
    $(".contact-select-2").hide();
    $(".contact-select-1").show();
    $(".contact-select-1").css({"opacity": "1"});
    $(".contact-select-1").css({"top": "-5px"});
    $(".contact-select-2").css({"opacity": "0"});
    $(".contact-select-2").css({"top": "+5px"});
  });

  $('#contact-map-2').on('click', function() {
    changeMarkerPos(3.218778, 101.640294);
    $(".contact-select-1").hide();
    $(".contact-select-2").show();
    $(".contact-select-2").css({"opacity": "1"});
    $(".contact-select-2").css({"top": "-5px"});
    $(".contact-select-1").css({"opacity": "0"});
    $(".contact-select-1").css({"top": "+5px"});

  });
});

//Update map position
function changeMarkerPos(lat, lon){
    myLatLng = new google.maps.LatLng(lat, lon)
    marker.setPosition(myLatLng);
    map.panTo(myLatLng);
}
