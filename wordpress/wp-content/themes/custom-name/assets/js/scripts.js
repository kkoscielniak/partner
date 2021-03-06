window.Partner = window.Partner || {};

window.Partner.common = function($) {
    var $window = $(window);
    var $body = $('body');

    var $menuTrigger = $body.find('.js-mobile-navigation');

    $menuTrigger.on('click', function(e) {
        e.preventDefault();

        $body.toggleClass('menu-open');
    });

    var handleViewportChange = function() {
    };

    $window.on('resize', handleViewportChange);
    $window.on('orientationchange', handleViewportChange);
};
;window.Partner = window.Partner || {};

window.Partner.contact = function($) {
    var $window = $(window);
    var $body = $('body'),
        $mapCanvas = $('#map-canvas');

    var map;
    var googleMap = function() {
        map = new google.maps.Map(document.getElementById('map-canvas'), {
          center: { lat: 50.296529, lng: 19.301501 },
          zoom: 8,
          styles: [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}],
          scrollwheel: false,
          draggable: false,
          zoomControl: false,
        });

        var marker = new google.maps.Marker({
            position: { lat: 50.296529, lng: 18.659647 },
            map: map
          });

        var marker_cracov = new google.maps.Marker({
          position: { lat: 50.040293, lng: 19.943356 },
          map: map
        });
    };

    googleMap();

    var handleViewportChange = function() {
        // refresh map ?
    };

    $window.on('resize', handleViewportChange);
    $window.on('orientationchange', handleViewportChange);
};
;window.Partner = window.Partner || {};

window.Partner.home = function($) {
    var $window = $(window);
    var $body = $('body');

    var handleViewportChange = function() {
    };

    $window.on('resize', handleViewportChange);
    $window.on('orientationchange', handleViewportChange);
};
;window.Partner = window.Partner || {};

window.Partner.team = function($) {
    var $window = $(window);
    var $body = $('body');

    var $teamMembers = $body.find('.js-team-member'),
        $readMoreBtns = $teamMembers.find('.js-read-more'),
        $lightboxes = $body.find('.js-lightboxes .js-lightbox'),
        $lightboxCloseBtns = $lightboxes.find('.js-lightbox-close');

    $readMoreBtns.on('click', function(e) {
        e.preventDefault();

        var index = $(this).data('index');

        var $lightbox = $lightboxes.filter(function() {
            return $(this).data('index') === index;
        });

        $body.addClass('overlay');

        $lightbox.css("height", ($lightbox.find('.js-lightbox-content').height()) + "px");
        $lightbox.addClass('active');
        $lightboxes.not($lightbox).removeClass('active');
    });

    $lightboxCloseBtns.on('click', function(e) {
        e.preventDefault();
        $lightboxes.removeClass('active');
        $body.removeClass('overlay');
    });




    var handleViewportChange = function() {
    };

    $window.on('resize', handleViewportChange);
    $window.on('orientationchange', handleViewportChange);
};
;window.Partner = window.Partner || {};
window.Partner._submodules = window.Partner._submodules || {};

(function($) {

    $(function() {
        var bodyClassName = document.body.className.replace(/-/g, '_');
        var bodyClasses = bodyClassName.split(/\s+/);

        var getSubmodule = function(name) {
            return function() {
                window.Partner._submodules[name]($);
            };
        };

        $.each(['common'].concat(bodyClasses), function(i, module) {
            if ($.isFunction(window.Partner[module])) {
                window.Partner[module]($);
            }
        });
    });

}(jQuery));
