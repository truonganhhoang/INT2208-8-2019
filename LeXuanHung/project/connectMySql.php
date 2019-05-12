<?php
	$conn = mysqli_connect('localhost','root','','product');
	mysqli_query($conn,"SET NAMES UTF8");
	if(!$conn){
		echo "error";
	}
	
	$kt;
	$tempUnder100='';
	$temp100_200='';
	$temp200_300='';
	$temp300_500='';
	$temp500_1000='';
	$tempAbove1000='';
	function NumberOfProduct($conn){
		$s=0;
		$result = mysqli_query($conn,"SELECT * FROM products");
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$s++;
			}
		}
		return $s;
	}
	function getDataForSearch($conn,$sql){
		$dem = 0;
		$s='';
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$dem ++;
				$s.='<tr id="'.$row["id"].'" class="productName"><td>'.$row["T"].'</td></tr>';
			}
		}
		return $s;
	}
	function ShowProduct($conn,$sql){
		//$sql = "SELECT * FROM products";
		$result = mysqli_query($conn,$sql);
		$dem = 0;
		$s='<div class="row" style="float:left">';
		$kq='';
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			
			$s=$s.'<div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img class="img" src='.$row["ImagePath"].' alt"..." /></a><div class="product-price"><span class="old-price">'.$row["PriceOld"].'</span><br /><span class="current-price">'.$row["PriceCurrent"].'</span></div><div class="saleright"><span>'.$row["Discount"].'</span></div><h4 style="position:absolute;left:0px;top:290px;" class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">'.$row["T"].'</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div>';			
			$dem++;
			if($dem%3 == 0){
				$s.='</div>';
				$kq.=$s;
				$s='<div class="row" style="float:left">';
			}
		}
	}
	if($dem%3 != 0){
		$s.='</div>';
		$kq.=$s;
	}	
		//echo $mang[2];
		return $kq;
	}
	
	function getData($conn,$sql){
		$k = '';
		$result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_assoc($result)){
				$k .= $row["T"].',';
			}
		}
		return $k;
	}
	
	function search123($conn){
		$temp;
		if(isset($_POST['submit'])){
			$data = $_POST['search_'];
			$temp=ShowProduct($conn,"SELECT * FROM products like '%$data%'");
		}
		return $temp;
	}
	
	function alert(){
		$s='<div class="row" style="float:left">';
		$s.='<p style="color:red;font-size:25px">Bạn cần nhập từ khóa để tìm kiếm sản phẩm.</p></div>';
		return $s;
	}
	
	function showNotification($k){
		$s= '<br/>';
		$s.= 'Search for: <span style="font-weight:100">'.$k.'</span>';
		return $s;
	}
	//search();
	//getData($conn,"SELECT * FROM products");
	//ShowProduct($conn,"SELECT * FROM products");
	
?>