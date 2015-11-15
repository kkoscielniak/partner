window.Partner = window.Partner || {};

window.Partner.common = function($) {
    var $window = $(window);
    var $body = $('body');

    var handleViewportChange = function() {
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
