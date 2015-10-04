window.FEW = window.FEW || {};

window.FEW.home = function($) {
    var $window = $(window);
    var $body = $('body');

    var handleViewportChange = function() {
    };

    $window.on('resize', handleViewportChange);
    $window.on('orientationchange', handleViewportChange);
};
