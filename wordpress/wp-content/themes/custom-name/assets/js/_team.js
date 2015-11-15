window.Partner = window.Partner || {};

window.Partner.team = function($) {
    var $window = $(window);
    var $body = $('body');

    var $teamMembers = $body.find('.js-team-member'),
        $readMoreBtns = $body.find('.js-read-more');

    // $readMoreBtns.each(function(){
    //     $(this).on('click', function(e){
    //         e.preventDefault();

    //         var index = $(this).data('index');

    //         $body.find('.js-description-' + index).slideDown();
    //     });
    // });




    var handleViewportChange = function() {
    };

    $window.on('resize', handleViewportChange);
    $window.on('orientationchange', handleViewportChange);
};
