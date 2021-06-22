jQuery.noConflict();
(function ($) {

    var turuncuMegaMenu = {
        init: function (jQueyr) {
            $('.tmm-container').append('<div class="tmm-backdrop"></div>')

            $('body').on('click', '.tmm-burger, .tmm-mobile-close, .tmm-backdrop', function(e){
                e.preventDefault();
                $('.tmm-menu').toggleClass('mobile');
                $('html').toggleClass('tmm-mobile-backdrop');
            });
        },
    };

    $(window).bind("load", function () {
        turuncuMegaMenu.init();
    });

})(jQuery);