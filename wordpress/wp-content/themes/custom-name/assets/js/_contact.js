window.Partner = window.Partner || {};

window.Partner.contact = function($) {
    var $window = $(window);
    var $body = $('body'),
        $mapCanvas = $('#map-canvas');

    var map;
    var googleMap = function() {
        map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: {lat: 50.296529, lng: 18.659647},
          zoom: 11,
          styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}],
          scrollwheel: false,
          draggable: false,
          zoomControl: false,
        });

        var marker = new google.maps.Marker({
            position: {lat: 50.296529, lng: 18.659647},
            map: map
          });
    };

    console.log('contact');

    googleMap();

    var handleViewportChange = function() {
    };

    $window.on('resize', handleViewportChange);
    $window.on('orientationchange', handleViewportChange);
};
