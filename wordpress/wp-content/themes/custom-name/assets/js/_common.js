window.Partner = window.Partner || {};

window.Partner.common = function($) {
    var $window = $(window);
    var $body = $('body');

    var handleViewportChange = function() {
    };

    $window.on('resize', handleViewportChange);
    $window.on('orientationchange', handleViewportChange);
};
