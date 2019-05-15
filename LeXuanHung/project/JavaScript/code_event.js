// JavaScript Document
$(document).ready(function() {
	
	
   change();
   awe_category();

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
	// AUTO COMPLETE FIND 
	var data = ["Nấu nướng", "Đồ gia dụng", "Thực phẩm", "Tài liệu, đề cương ", "Tài liệu ôn thi"];

	$("#search1").autocomplete({
		delay: 0,
		source: data
	});
            
});

var s = 0;

function change(){
 

	$(".g-list").mouseleave(function(){
	
		$(".l1").stop().slideUp(500);/* sửa ở đây */
   	    $(".l2").stop().slideUp(550);
        $(".l3").stop().slideUp(600);
        $(".l4").stop().slideUp(650);
        $(".l5").stop().slideUp(700);
        
        $(".list-content").css({"display":"block", "padding-top": "25px","float":"left", });
		
	});

	$(".g-list").mouseenter(function() {	
	$(".l1").stop().slideDown(500);
    $(".l2").stop().slideDown(550);
    $(".l3").stop().slideDown(600);
    $(".l4").stop().slideDown(650);
    $(".l5").stop().slideDown(700);
    

    $(".list-content").css({"display": "block"});
	
	});
}
function awe_category(){

	$('.fa-angle-right').click(function(e){
		$('.list-content1').toggleClass('active');
	});
	
} 

    
	
