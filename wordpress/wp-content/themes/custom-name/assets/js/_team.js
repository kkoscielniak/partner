window.Partner = window.Partner || {};

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
