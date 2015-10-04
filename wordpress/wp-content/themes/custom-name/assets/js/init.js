window.FEW = window.FEW || {};
window.FEW._submodules = window.FEW._submodules || {};

(function($) {

    $(function() {
        var bodyClassName = document.body.className.replace(/-/g, '_');
        var bodyClasses = bodyClassName.split(/\s+/);

        var getSubmodule = function(name) {
            return function() {
                window.FEW._submodules[name]($);
            };
        };

        $.each(['common'].concat(bodyClasses), function(i, module) {
            if ($.isFunction(window.FEW[module])) {
                window.FEW[module]($);
            }
        });
    });

}(jQuery));
