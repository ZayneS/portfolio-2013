var json;
var which;

 $(document).ready(function(){




    function readIn(where) {
        $.getJSON( where+".json", function(data) {
                console.log(data);
                json = data;
                m = json.a.length;
            });

    }


    function backward() {
        if (which <= 0) {
            which = json.a.length - 1;
        } else {
            which --;
        }
        document.getElementById('pic').src = json.a[which].url;
    }


    function forward() {
        which = (which + 1) % json.a.length;               //  modulus keeps which within
        document.getElementById('pic').src = json.a[which].url;     // the bounds, while incrementing
    }   


    function FullWindowWrap() {
        var winW = window.innerWidth;
        var winH = window.innerHeight;
            console.log("width: "+winW+"  Height: "+winH);
            $('.image_lightbox').width(winW);
            $('.image_lightbox').height(winH);
            $('.image_full img').height(winH);
            $('.image_description').width(winW);
    }

    function CloseWrapper() {
        $('.image_lightbox').css("display","none");
    }

    $('.photo-box a').hover(function(){
        console.log("hovered");
    }); 

    $('.multi-photos a').hover(function(){
        console.log("hovered");
    }); 

    $('.multi-photos a').click(function(){
        var newImageSrc = $(this).attr('rel');
        where = $(this).parent().attr('name');
        which = $(this).attr('index');
        which = parseInt(which);
        readIn(where);
        console.log(newImageSrc+"  "+which);
         FullWindowWrap();
        $('.image_lightbox').css(
                    "display","block"
                );
        $('.image_full img').attr({'src': newImageSrc});
        return false;

    });

    $(document).keydown(function(e){
        if (e.keyCode == 37) { 
            console.log( "left pressed");
            backward();
            return false;
        }

        if(e.keyCode == 39) {
            // alert("right pressed" );
            forward();
            return false;
        }

        if(e.keyCode == 27){
            CloseWrapper();
            return false;
        }
    });

    $(window).resize(function(){
        console.log("Stop it!");
        FullWindowWrap();
    });

    $("image_description").css()
    $("image_description").hover(function(){
                $(this).stop().animate({
                    opacity:1,
                },200);
            },function(){
                $(this).stop().animate({
                    opacity:0,
                },200);
        }
    );


    $('.arrow_hide').hover(function(){
            $(this).stop().animate({opacity:".7"},300);
        },function(){
        $(this).stop().animate({opacity:0},300);
        }
    );

    $('#arrow_left').click(function(){
        backward();
    });

    $('#arrow_right').click(function(){
        forward();
    });

    $('#exit').click(function(){
        CloseWrapper();
        return false;
    })




});