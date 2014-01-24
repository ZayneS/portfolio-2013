
// remap jQuery to $
(function($) {})(window.jQuery);



/* trigger when page is ready */
$(document).ready(function(){

    $(".project-box").hover(
        function(){
            $(this).find(".overlay").stop().animate({bottom:-30},300)
            $(this).find(".overlay .brief-intro").stop().fadeIn("fast")
        },
        function(){
            $(this).find(".overlay").stop().animate({bottom:-86},300)
            $(this).find(".overlay .brief-intro").stop().fadeOut("fast")
        }
    );

    $(".accordion .tab .tab-link").click(
        function(){
            if(false == $(this).next().is(":visible")) {
                $(".accordion .tab .sub-menu").slideUp(300);
            }
            $(this).next().slideToggle(300);
        }
    );

});/* document.ready ends here*/







