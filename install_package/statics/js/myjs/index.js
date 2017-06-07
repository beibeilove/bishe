$(function(){
    /*下拉菜单*/
    $(".yiji>li").hover(function(){
        $(this).find(".erji").slideDown();
    },function(){
        $(this).find(".erji").slideUp();
    });

    /*banner*/
    // var width=$(".banner-box").width();
    // $(".img-box>a").eq(3).css("transform","translateZ("+-width+"px)");
    // var i=0;
    // var t;
    // function move(){
    //     i++;
    //     $(".btn>li").removeAttr("id","ban-active").eq(i%4).attr("id","ban-active");
    //     $(".img-box").css({
    //         transition:"transform 2s ease",
    //         transformOrigin: "center center "+-width/2+"px",
    //         transform: "rotate3d(0,1,0," + 90 * i + "deg)"
    //     });
    // };
    // $(".btn>li").click(function(){
    //     "use strict";
    //     move();
    // });
    // t=setInterval(move,3000);
    // $(window).focus(function(){
    //     "use strict";console.log(1);
    //     t=setInterval(move,3000);
    // });
    // $(window).blur(function(){
    //     "use strict";console.log(2);
    //     clearInterval(t);
    // });


/*模块*/
    // var widths=$(".module>img").width();
    // $(".module").width(widths);

    /*分页*/
    var num=$("#num").html();
    var num1=Math.ceil(num/10);
    $("#page").html(num1);
});

