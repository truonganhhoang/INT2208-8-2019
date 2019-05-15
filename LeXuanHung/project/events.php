
<?php include('connectMySql.php'); ?>
<?php $k = '';?>
<script type="text/javascript" src="JavaScript/ajax.js"></script>
<script type="text/javascript" src="JavaScript/jquery.js"></script>
<script type="text/javascript" src="JavaScript/jquery-ui-1.12.1/jquery-ui.js"></script>
    
<script type="text/javascript">
$(document).ready(function() {
	$('#search1').val('');
	//$('#search1').click(function(){
		//$('#show_name_product').css({"display": "block","z-index":"10"});	
	//});
	//searchProduct();
	
  	dropmenu();
  	change();
   	awe_category();
	boolFilterPrice();
	filterByDimension();
	filterByStatus();
	search2();
	auto_complete();
	slideBar_all();
	click_listProduct_content();
	
	document.getElementById('_all').onclick = function(e){
		var k = document.getElementById('main-product');
		k.innerHTML = '<?php echo ShowProduct($conn,'SELECT * FROM products'); ?>';
	}
	
    $("#l1").hover(function() {
        $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
    },
        function() {
        $(this).css ({"background-color":"white", "color":"black"});
        });
    $("#l2").hover(function() {
            $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
        },
            function() {
            $(this).css ({"background-color":"white", "color":"black"});
            });
    $("#l3").hover(function() {
                $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
            },
                function() {
                $(this).css ({"background-color":"white", "color":"black"});
                });

    $("#l4").hover(function() {
                    $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
                },
                    function() {
                    $(this).css ({"background-color":"white", "color":"black"});
                    });
     $("#l5").hover(function() {
                        $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800"});
                    },
                        function() {
                        $(this).css ({"background-color":"white", "color":"black"});
                        });
	$("#l6").hover(function() {
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
	
		$("#l1").stop().slideUp(500);/* sửa ở đây */
   	    $("#l2").stop().slideUp(550);
        $("#l3").stop().slideUp(600);
        $("#l4").stop().slideUp(650);
        $("#l5").stop().slideUp(700);
		$("#l6").stop().slideUp(750);
        
        $(".list-content").css({"display":"block", "padding-top": "25px","float":"left", });
		
	});

	$(".g-list").mouseenter(function() {	
	$("#l1").stop().slideDown(500);
    $("#l2").stop().slideDown(550);
    $("#l3").stop().slideDown(600);
    $("#l4").stop().slideDown(650);
    $("#l5").stop().slideDown(700);
	$("#l6").stop().slideDown(750);
    

    $(".list-content").css({"display": "block"});
	
	});
}

function auto_complete(){
	
	var content = document.getElementById('show_name_product');
		content.innerHTML = '<?php echo getDataForSearch($conn,"SELECT * FROM products"); ?>';
		$('.productName').hide();
	$('#search1').focus(function(){	
		$('#search1').keyup(function(){
			
			var val = $(this).val().toLowerCase();
		
			$('.productName').hide();
		
			$('.productName').each(function(){
				var text = $(this).text().toLowerCase();
			
				if(text.indexOf(val)!=-1){
					$(this).show();
					
				}	
			
			});
			
		});
			
	});
	
	//Sự kiện click cho mỗi sản phẩm
	
	
	for (var i = 1; i<= <?php echo NumberOfProduct($conn);?>; i++){
		$('#'+i).click(function(){
			$('#search1').val($(this).text());
			getdata($(this).text());
			$(".productName").hide();
			$('#notification').hide();
		});
	}
	
	$(".productName").hover(function() {
                $(this).css ({"background-color":"#f2f2f2", "color":"#e6b800","cursor":"pointer"});
            },
                function() {
                $(this).css ({"background-color":"white", "color":"black"});
                });
	$('#show_name_product').blur(function(){
		$('.productName').hide();
	});
	$('.title1').click(function(){
		$('.productName').hide();
	});
	$('#content').click(function(){
		$('.productName').hide();
	});
	$('.list').click(function(){
		$('.productName').hide();
	});
	$('#option').click(function(){
		$('.productName').hide();
	});
}
/*
function getProduct(var name){
	$('#search1').val($(this).text());
					
	var div123 = document.getElementById('main-product');
	div123.innerHTML = '<?php echo ShowProduct($conn,"select * from products where T like '%$k%'"); ?>';
}*/

function click_listProduct_content(){
	var div = document.getElementById('main-product'); 
	$('#l1').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%device%'"); ?>';
	});
	$('#d1').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%device%'"); ?>';
	});
	$('#l2').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%housewares%'"); ?>';
	});
	$('#d2').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%housewares%'"); ?>';
	});
	$('#l3').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%electronic%'"); ?>';
	});
	$('#d3').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%electronic%'"); ?>';
	});
	$('#l4').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%fashion%'"); ?>';
	});
	$('#d4').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%fashion%'"); ?>';
	});
	$('#l5').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%document%'"); ?>';
	});
	$('#d5').click(function(){
		div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ like '%document%'"); ?>';
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
			$('#btn_sp').css('color','black');
  		} else {
  		dropdownContent.style.display = "block";
		$('#btn_sp').css('color','orange');
		
  		}
  });
}
}

function search2(){
	var div = document.getElementById('main-product');
	<?php
	$k = '';$t=0;
	if(isset($_GET['submit'])){
			if(isset($_GET['search_'])){
				$k = $_GET['search_'];
				$_GET['search_']=null;
				//echo ShowProduct($conn,"select * from products where T like'%$k%'");
				$t=1;
			}
		}
	?>  
		document.getElementById('notification').innerHTML ='<?php if($k!=""){ echo showNotification($k);}
							   
		?>'; 
		div.innerHTML = '<?php if($k!=""){ echo ShowProduct($conn,"select * from products where T like'%$k%'");}
							   else if ($k ==""&&$t == 1) { echo alert();}
							   else echo ShowProduct($conn,"select * from products");
		?>';
}

/*
function searchProduct(){
	var AllItem = '';
	var s = '(';
	AllItem = '<?php echo getData($conn,"SELECT * FROM products") ?>';
	//alert(AllItem);
	var AllProduct = AllItem.split(',');
	var k = "hom nay troi kha dep";
	var value = document.getElementById('search1').value;
	for (var i = 0; i < AllProduct.length; i++){
		var index = AllProduct[i].indexOf(value);
		if (index >=0){
			alert(AllProduct[i]);
		}
	}
	//var index = AllProduct[0].indexOf(value);
	
	alert(index);
	//alert (AllProduct[24]);
	
}*/

//Hàm bộ lọc theo giá
function boolFilterPrice(){
	
	var all_dimension = document.getElementById('all_dimension');
	var big_dimension = document.getElementById('big');
	var medium_dimension = document.getElementById('medium');
	var small_dimension = document.getElementById('small');
	var all_status = document.getElementById('all_status');
	var new_status = document.getElementById('newProduct');
	var old_status = document.getElementById('oldProduct');
	var HighToLowPrice_status = document.getElementById('priceDESC');
	var LowToHighPrice_status = document.getElementById('priceASC');
	
	var div = document.getElementById('main-product');
	div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products"); ?>';
	
	
	document.getElementById('all_price').onclick = function(e){
		if (this.checked == true){
					
					
					
					
					
					if (all_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';// Sửa ở đ
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else {
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (new_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (old_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (LowToHighPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					
					else if (HighToLowPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					
					
					
					
					
					else if (all_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (big_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (medium_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (small_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					
					else {
						div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
					}
                }
				
                else{
					
				}
				
				
	};
	
	
	
	document.getElementById('<100').onclick = function(e){
                if (this.checked == true){
					
					
					
					
					
					if (all_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else {
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (new_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (old_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (LowToHighPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					
					else if (HighToLowPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					
					
					
					
					
					else if (all_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (big_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (medium_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (small_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					
					else {
						div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
					}
                }
				
                else{
					
				}
				
				
   };
   
   

	document.getElementById('100-200').onclick = function(e){
                	if (this.checked == true){
					
					
					
					
					
					if (all_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else {
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (new_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (old_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (LowToHighPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					
					else if (HighToLowPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					
					
					
					
					
					else if (all_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (big_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (medium_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (small_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					
					else {
						div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
					}
                }
				
                else{
					
				}
				
				
		
   };
   
   document.getElementById('200-300').onclick = function(e){
	   			if (this.checked == true){
					
					
					
					
					
					if (all_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else {
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (new_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (old_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (LowToHighPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					
					else if (HighToLowPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					
					
					
					
					
					else if (all_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (big_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (medium_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (small_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					
					else {
						div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
					}
                }
				
                else{
					
				}
				
				
			
                
   };
   document.getElementById('300-500').onclick = function(e){
				if (this.checked == true){
					
					
					
					
					
					if (all_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else {
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (new_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (old_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (LowToHighPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					
					else if (HighToLowPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					
					
					
					
					
					else if (all_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (big_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (medium_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (small_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					
					else {
						div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
					}
                }
				
                else{
					
				}
				
				
			         
   };
   document.getElementById('500-1000').onclick = function(e){
	     		if (this.checked == true){
					
					
					
					
					
					if (all_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else {
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (new_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (old_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (LowToHighPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					
					else if (HighToLowPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					
					
					
					
					
					else if (all_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (big_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (medium_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (small_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					
					else {
						div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
					}
                }
				
                else{
					
				}
				
				
				
                
   };
   document.getElementById('>1000').onclick = function(e){
	   			if (this.checked == true){
					
					
					
					
					
					if (all_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else {
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (new_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (old_status.checked == true ){
						if (all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (LowToHighPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					
					else if (HighToLowPrice_status.checked == true ){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if (small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					
					
					
					
					
					else if (all_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (big_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (medium_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					else if (small_dimension.checked == true ){
						if(all_status.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(new_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small new%' AND group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(old_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small old%' AND group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(LowToHighPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}else if(HighToLowPrice_status.checked){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					
					else {
						div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
					}
                }
				
                else{
					
				}
				
				
				
                
   };
}

//Hàm bộ lọc theo kích thước

function filterByDimension(){
	
	var all_price = document.getElementById('all_price');
	var under100 = document.getElementById('<100');
	var price100_200 = document.getElementById('100-200');
	var price200_300 = document.getElementById('200-300');
	var price300_500 = document.getElementById('300-500');
	var price500_1000 = document.getElementById('500-1000');
	var above1000 = document.getElementById('>1000');
	var all_status = document.getElementById('all_status');
	var new_status = document.getElementById('newProduct');
	var old_status = document.getElementById('oldProduct');
	var HighToLowPrice_status = document.getElementById('priceDESC');
	var LowToHighPrice_status = document.getElementById('priceASC');
	
	
	var div = document.getElementById('main-product');
	div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products"); ?>';
	
	document.getElementById('all_dimension').onclick = function(e){
		if (this.checked == true){
			
			if (all_price.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
				}
				
			}
			else if(under100.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price100_200.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price200_300.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price300_500.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price500_1000.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(above1000.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			
			
			else if(all_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500_1000%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(new_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
				}
			}
			else if(old_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
				}
			}
			else if(HighToLowPrice_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
			}
			else if(LowToHighPrice_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
			}
			else {
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
			}
		}
		else{
		}
	};
	
	document.getElementById('big').onclick = function(e){
        if (this.checked == true){
			
			if (all_price.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big new%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big old%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
				}
				
			}
			else if(under100.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100% big' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100% big' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price100_200.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price200_300.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price300_500.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price500_1000.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(above1000.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			
			
			else if(all_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500_1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(new_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big new%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big new%' AND T LIKE '%$k%'"); ?>';
				}
			}
			else if(old_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big old%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100% big' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200% big' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big old%' AND T LIKE '%$k%'"); ?>';
				}
			}
			else if(HighToLowPrice_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
			}
			else if(LowToHighPrice_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
			}
			else {
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
			}
		}
        
		
		else{
		}
			
                
   };
   
   document.getElementById('medium').onclick = function(e){
        if (this.checked == true){
			
			if (all_price.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium new%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium old%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
				}
				
			}
			else if(under100.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price100_200.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price200_300.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price300_500.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price500_1000.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(above1000.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			
			
			else if(all_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500_1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(new_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium new%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium new%' AND T LIKE '%$k%'"); ?>';
				}
			}
			else if(old_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium old%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100% medium' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200% medium' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium old%' AND T LIKE '%$k%'"); ?>';
				}
			}
			else if(HighToLowPrice_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
			}
			else if(LowToHighPrice_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
			}
			else {
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
			}
		}
        
		
		else{
		}
			
                
   };
   
   
   
   document.getElementById('small').onclick = function(e){
        if (this.checked == true){
			
			if (all_price.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small new%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small old%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
				}
				
			}
			else if(under100.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price100_200.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price200_300.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price300_500.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(price500_1000.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(above1000.checked == true){
				if(all_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(new_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(old_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(HighToLowPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(LowToHighPrice_status.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			
			
			else if(all_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500_1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
				}
			}
			
			else if(new_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small new%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small new%' AND T LIKE '%$k%'"); ?>';
				}
			}
			else if(old_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small old%' AND T LIKE '%$k%'"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100% small' AND T LIKE '%$k%'"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200% small' AND T LIKE '%$k%'"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small old%' AND T LIKE '%$k%'"); ?>';
				}
			}
			else if(HighToLowPrice_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC"); ?>';
				}
			}
			else if(LowToHighPrice_status.checked == true){
				if(all_price.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(under100.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price100_200.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price200_300checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price300_500.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(price500_1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else if(above1000.checked == true){
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
				else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC"); ?>';
				}
			}
			
			else {
				div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
			}
		}
        
		
		else{
		}
			
                
   };
   
}

//Hàm bộ loc theo trạng thái

 function filterByStatus(){
	 
	
	var all_dimension = document.getElementById('all_dimension');
	var big_dimension = document.getElementById('big');
	var medium_dimension = document.getElementById('medium');
	var small_dimension = document.getElementById('small');
	var all_price = document.getElementById('all_price');
	var under100 = document.getElementById('<100');
	var price100_200 = document.getElementById('100-200');
	var price200_300 = document.getElementById('200-300');
	var price300_500 = document.getElementById('300-500');
	var price500_1000 = document.getElementById('500-1000');
	var above1000 = document.getElementById('>1000');
	
	 
	var div = document.getElementById('main-product');
	div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products"); ?>';
	
	document.getElementById('all_status').onclick = function(e){
		if (this.checked == true){
					if(all_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
						}
					}
					else if(big_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
					}
					else if(medium_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
					}
					else if(small_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%'"); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					
					else if(all_price.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%'"); ?>';
						}
						
					}
					else if(under100.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}
					}
					else if(price100_200.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}
					}
					else if(price200_300.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}
					}
					else if(price300_500.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}
						
					}
					else if(price500_1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}
					}
					else if(above1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}
					}
					
					
					
					else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' "); ?>';
					}
                }
                else{
					
				}
	};
	
	
	document.getElementById('newProduct').onclick = function(e){
                if (this.checked == true){
					if(all_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%' "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%' "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%' "); ?>';
						}
					}
					else if(big_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big new%' AND T LIKE '%$k%' "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big new%' AND T LIKE '%$k%' "); ?>';
						}
					}
					else if(medium_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium new%' AND T LIKE '%$k%' "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium new%' AND T LIKE '%$k%' "); ?>';
						}
					}
					else if(small_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small new%' AND T LIKE '%$k%' "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small new%' AND T LIKE '%$k%' "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small new%' AND T LIKE '%$k%' "); ?>';
						}
					}
					
					
					else if(all_price.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%'"); ?>';
						}
					}
					else if(under100.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(price100_200.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(price200_300.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(price300_500.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(price500_1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(above1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium new%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small new%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					
					
					
					else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%new%' AND T LIKE '%$k%' "); ?>';
					}
                }
                else{
					
				}
				
				
   };

	document.getElementById('oldProduct').onclick = function(e){
                if (this.checked == true){
					if(all_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%' "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%' "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%' "); ?>';
						}
					}
					else if(big_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big old%' AND T LIKE '%$k%' "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big old%' AND T LIKE '%$k%' "); ?>';
						}
					}
					else if(medium_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium old%' AND T LIKE '%$k%' "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium old%' AND T LIKE '%$k%' "); ?>';
						}
					}
					else if(small_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small old%' AND T LIKE '%$k%' "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small old%' AND T LIKE '%$k%' "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small old%' AND T LIKE '%$k%' "); ?>';
						}
					}
					
					
					else if(all_price.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%'"); ?>';
						}
					}
					else if(under100.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%under100%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(price100_200.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%100-200%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(price200_300.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%200-300%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(price300_500.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%300-500%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(price500_1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium old%' AND T LIKE '%$k%'"); ?>';

						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%500-1000%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					else if(above1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium old%' AND T LIKE '%$k%'"); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small old%' AND T LIKE '%$k%'"); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND group_ LIKE '%above1000%' AND T LIKE '%$k%'"); ?>';
						}	
					}
					
					
					
					else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%old%' AND T LIKE '%$k%' "); ?>';
					}
                }
                else{
					
				}
				
				
   };
   
   document.getElementById('priceASC').onclick = function(e){
	   			if (this.checked == true){
					if(all_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					else if(big_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					else if(medium_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}	
					}
					else if(small_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}	
					}
					
					
					else if(all_price.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
					}
					else if(under100.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}	
					}
					else if(price100_200.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}	
					}
					else if(price200_300.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}		
					}
					else if(price300_500.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}		
					}
					else if(price500_1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}		
					}
					else if(above1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
						}		
					}
					
					
					
					else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt ASC "); ?>';
					}
                }
                else{
					
				}   
   }; 
   
   
   document.getElementById('priceDESC').onclick = function(e){
	   			if (this.checked == true){
					if(all_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					else if(big_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					else if(medium_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}	
					}
					else if(small_dimension.checked == true){
						if(all_price.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(under100.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price100_200.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price200_300.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price300_500.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(price500_1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(above1000.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}	
					}
					
					
					else if(all_price.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
					}
					else if(under100.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%under100%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}	
					}
					else if(price100_200.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%100-200%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}	
					}
					else if(price200_300.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%200-300%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}		
					}
					else if(price300_500.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%300-500%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}		
					}
					else if(price500_1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%500-1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}		
					}
					else if(above1000.checked == true){
						if(all_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(big_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 big%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(medium_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 medium%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else if(small_dimension.checked == true){
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000 small%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}
						else{
							div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE group_ LIKE '%above1000%' AND T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
						}		
					}
					
					
					
					else{
					div.innerHTML = '<?php echo ShowProduct($conn,"SELECT * FROM products WHERE T LIKE '%$k%' ORDER BY priceByInt DESC "); ?>';
					}
                }
                else{
					
				}   
   }; 
   
}


function slideBar_all(){
	document.getElementById('_all').onclick = function(e){
		var div = document.getElementById('main-product');
		div.innerHTML = '<?php echo ShowProduct($conn,'SELECT * FROM products'); ?>';
		<?php $_GET['search_'] = '';?>
	};
}
// JavaScript Document
function create_obj(){
	var td = navigator.appName;
	if ( td == "Microsoft Internet Explorer"){
		obj = new ActiveXObject("Microsoft.XMLHTTP");
	}
	else{
		obj = new XMLHttpRequest();
	}
	return obj;
}

var http = create_obj();

function getdata(id){
	http.open("get","test.php?data="+id,true);
	http.onreadystatechange = process;
	http.send(null);
}

function process(){
	if(http.readyState = 4 && http.status == 200){
		var kq = http.responseText;
		document.getElementById('main-product').innerHTML = kq;	
	}
}

</script>
    
	
