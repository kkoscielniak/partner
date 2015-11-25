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
