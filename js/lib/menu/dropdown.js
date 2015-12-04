/*---------------------------------------------------------
 * Menu
---------------------------------------------------------*/
(function ( $ ) {
    "use strict";
    $(function () {
        $(".mobile-toggle").click(function(){
            $(".mobile-nav").slideToggle();
        });
        if($(window).width() >= 940) {
            $(".primary-nav").show();
            $(".mobile-nav ").hide();
        }
        function menuDesk() {
            if($(window).width() >= 940) {
                $(".primary-nav").show();
                $(".mobile-nav ").hide();
            }
        }
        $(window).resize(function() {
            menuDesk();
        });
        $('.mobile-nav ul li .menu-item-has-children').click(function(){
            $(this).find('.sub-menu').slideToggle();
        });
        $("#nav__menu li:nth-child(3)").addClass('sub-break');
        $('#nav__menu li').hover(
        function(){
            $(this).children('.sub-menu').stop(true, false).slideDown(200);
        },
        function(){
            $(this).children('.sub-menu').stop(true, false).slideUp(200);
        });
    });
}(jQuery));
/*---------------------------------------------------------
 * Toggle Maps
---------------------------------------------------------*/
(function ( $ ) {
    "use strict";
    $(function () {
        $('#toggle_maps').on('click', function(e){
            e.preventDefault();
            $('.map .cjhsmp_show').fadeToggle();
            $('.map .cjhsmp_hide').fadeToggle();
            $('#toggle_maps .cjhsmp_show').toggle();
            $('#toggle_maps .cjhsmp_hide').toggle();
        });
    });
    $(function () {
        $('#toggle_inst').on('click', function(e){
            e.preventDefault();
            $('.maps__page-inst.cjhsmp_show').fadeToggle();
            $('.maps__page-inst.cjhsmp_hide').fadeToggle();
            $('#toggle_inst .cjhsmp_show').toggle();
            $('#toggle_inst .cjhsmp_hide').toggle();
        });
    });
}(jQuery));