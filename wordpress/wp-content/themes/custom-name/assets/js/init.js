window.Partner = window.Partner || {};
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
