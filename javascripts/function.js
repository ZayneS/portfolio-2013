
// remap jQuery to $
// (function($) {})(window.jQuery);



/* trigger when page is ready */
// $(document).ready(function(){

//     $(".project-box").hover(
//         function(){
//             // $(this).find(".overlay").stop().animate({bottom:-30},300)
//             // $(this).find(".overlay .brief-intro").stop().fadeIn("fast")
//         },
//         function(){
//             // $(this).find(".overlay").stop().animate({bottom:-86},300)
//             // $(this).find(".overlay .brief-intro").stop().fadeOut("fast")
//         }
//     );

//     $(".accordion .tab .tab-link").click(
//         function(){
//             if(false == $(this).next().is(":visible")) {
//                 $(".accordion .tab .sub-menu").slideUp(300);
//             }
//             $(this).next().slideToggle(300);
//         }
//     );

// });/* document.ready ends here*/





$(document).ready(function(){


    // $(".grid li").hover(
    //     function(){
    //         console.log("hovered!");
    //         $(this).addClass("hovered");
    //     },function(){
    //         $(this)
    //     }
    // );



    // $(".grid li").hover(
    //     function(){
    //         $(this).find(".color-swatch").stop().animate({
    //             height:$(this).height(),
    //             opacity:".7"
    //         },300);
    //         $(this).find(".brief-intro h3").css(
    //             "color","white"
    //         );
    //         $(this).find('.copy').stop().delay(200).animate({
    //             opacity: 1,
    //             marginTop: 35
    //         }, 300);
    //     },function(){
    //         $(this).find(".color-swatch").stop().animate({
    //             opacity:0
    //         },300,function() {
    //             $(this).css('height', 0);
    //         });
    //         $(this).find(".brief-intro h3").css(
    //             "color","black"
    //         );
    //         $(this).find('.copy').stop().animate({
    //             opacity: 0,
    //             marginTop: 50
    //         }, 300);
    //     });

    $('.button li a').hover(
        function(){
            $(this).stop().animate({'background-position-y':'-41px'}, 200,'linear');
        },function(){
            $(this).stop().animate({'background-position-y':'0px'},200,'linear');
        });

    $('.social-media li a').hover(
        function(){
            $(this).css('background-position','0px 0px');
            console.log("got it");
        },function(){
            $(this).css('background-position','0px -31px');
        });
});

