$(document).ready(function(){
    $(".g-list").mouseenter(function() {
        $(".l1").stop().slideDown(500);
        $(".l2").stop().slideDown(550);
        $(".l3").stop().slideDown(600);
        $(".l4").stop().slideDown(650);
        $(".l5").stop().slideDown(700);
       
        $(".list-content").css({"display": "block", "padding-top": "25px","float":"left", });

});
$(".g-list").mouseleave(function() {
    $(".l1").stop().slideUp(500);
    $(".l2").stop().slideUp(550);
    $(".l3").stop().slideUp(600);
    $(".l4").stop().slideUp(650);
    $(".l5").stop().slideUp(700);

    $(".list-content").css({"display": "block"});
});

    $(".l1").hover(function() {
        $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
    },
        function() {
        $(this).css ({"background-color":"white", "color":"black"});
        });
    $(".l2").hover(function() {
            $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
        },
            function() {
            $(this).css ({"background-color":"white", "color":"black"});
            });
    $(".l3").hover(function() {
                $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
            },
                function() {
                $(this).css ({"background-color":"white", "color":"black"});
                });

    $(".l4").hover(function() {
                    $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
                },
                    function() {
                    $(this).css ({"background-color":"white", "color":"black"});
                    });
     $(".l5").hover(function() {
                        $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
                    },
                        function() {
                        $(this).css ({"background-color":"white", "color":"black"});
                        });
            
});
