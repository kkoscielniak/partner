window.Partner = window.Partner || {};

window.Partner.team = function($) {
    var $window = $(window);
    var $body = $('body');

    console.log('dziala');

    var handleViewportChange = function() {
    };

    $window.on('resize', handleViewportChange);
    $window.on('orientationchange', handleViewportChange);
};
