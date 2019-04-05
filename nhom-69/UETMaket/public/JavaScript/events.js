// JavaScript Document

$(document).ready(function() {
	
  	dropmenu();
  	change();
   	awe_category();
	
	boolFilterPrice();
	
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

function dropmenu(){
	var dropdown = document.getElementsByClassName("dropdown-btn");
	var i;

	for (i = 0; i < dropdown.length; i++) {
	  dropdown[i].addEventListener("click", function() {
 	  this.classList.toggle("active");
      var dropdownContent = this.nextElementSibling;
  		if (dropdownContent.style.display === "block") {
  			dropdownContent.style.display = "none";
  		} else {
  		dropdownContent.style.display = "block";
  		}
  });
}

}

function boolFilterPrice(){
    var div = document.getElementById('main-product');
	document.getElementById('100-200').onclick = function(e){
                if (this.checked){
                    //$('#main-product').html("<img class='img' src='img/thucpham.jpg' alt='...' />");
					div.innerHTML = '<div class="row"><div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img style="width:226px;" src="img/dodandung.jpg" alt"..." /></a><div class="product-price"><span class="old-price">12.000.000₫</span><br /><span class="current-price">9.990.000₫</span></div><div class="saleright"><span>-17%</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Caliber 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div><div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img style="width:226px;" src="img/dodandung.jpg" alt"..." /></a><div class="product-price"><span class="old-price">12.000.000₫</span><br /><span class="current-price">9.990.000₫</span></div><div class="saleright"><span>-17%</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Caliber 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div><div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img style="width:226px;" src="img/dodandung.jpg" alt"..." /></a><div class="product-price"><span class="old-price">12.000.000₫</span><br /><span class="current-price">9.990.000₫</span></div><div class="saleright"><span>-17%</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Caliber 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div></div>';
                }
                else{
					$('.img_product').html("<img class='img' src='img/dodandung.jpg' alt='...' />");
				}
   };
   
   document.getElementById('200-300').onclick = function(e){
                if (this.checked){
                    $('.img_product').html("<img src='img/thucpham.jpg' alt='...' />");
                }
                else{
                    alert("Bạn vừa bỏ thích freetuts.net");
                }
   };
   document.getElementById('300-500').onclick = function(e){
                if (this.checked){
                    $('.img_product').html("<img src='img/thucpham.jpg' alt='...' />");
                }
                else{
                    alert("Bạn vừa bỏ thích freetuts.net");
                }
   };
   document.getElementById('500-1000').onclick = function(e){
                if (this.checked){
                    $('.img_product').html("<img src='img/thucpham.jpg' alt='...' />");
                }
                else{
                    alert("Bạn vừa bỏ thích freetuts.net");
                }
   };
   document.getElementById('>1000').onclick = function(e){
                if (this.checked){
                    $('.img_product').html("<img src='img/thucpham.jpg' alt='...' />");
                }
                else{
                    alert("Bạn vừa bỏ thích freetuts.net");
                }
   };
	
}

    
	
