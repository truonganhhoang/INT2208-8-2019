<?php
	include ('connectMySql.php');
	function All($conn){
		$sql = "SELECT * FROM products";
		$result = mysqli_query($conn,$sql);
		$dem = 0;
		$s='<div class="row" style="float:left">';
		$kq='';
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){	
			$s=$s.'<div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img class="img" src='.$row["ImagePath"].' alt"..." /></a><div class="product-price"><span class="old-price">'.$row["PriceOld"].'</span><br /><span class="current-price">'.$row["PriceCurrent"].'</span></div><div class="saleright"><span>'.$row["Discount"].'</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Calibe 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div>';			
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
		echo $kq;
	}
	
	function product100_200($conn){
		$sql = "SELECT * FROM products WHERE group_ LIKE '100-200'";
		$result = mysqli_query($conn,$sql);
		$dem = 0;
		$s='<div class="row" style="float:left">';
		$kq='';
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){	
			$s=$s.'<div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img class="img" src='.$row["ImagePath"].' alt"..." /></a><div class="product-price"><span class="old-price">'.$row["PriceOld"].'</span><br /><span class="current-price">'.$row["PriceCurrent"].'</span></div><div class="saleright"><span>'.$row["Discount"].'</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Calibe 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div>';			
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
		return $kq;
	}
	function product200_300($conn){
		$sql = "SELECT * FROM products WHERE group_ LIKE '200-300'";
		$result = mysqli_query($conn,$sql);
		$dem = 0;
		$s='<div class="row" style="float:left">';
		$kq='';
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){	
			$s=$s.'<div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img class="img" src='.$row["ImagePath"].' alt"..." /></a><div class="product-price"><span class="old-price">'.$row["PriceOld"].'</span><br /><span class="current-price">'.$row["PriceCurrent"].'</span></div><div class="saleright"><span>'.$row["Discount"].'</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Calibe 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div>';			
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
		return $kq;
	}
	function product300_500($conn){
		$sql = "SELECT * FROM products WHERE group_ LIKE '300-500'";
		$result = mysqli_query($conn,$sql);
		$dem = 0;
		$s='<div class="row" style="float:left">';
		$kq='';
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){	
			$s=$s.'<div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img class="img" src='.$row["ImagePath"].' alt"..." /></a><div class="product-price"><span class="old-price">'.$row["PriceOld"].'</span><br /><span class="current-price">'.$row["PriceCurrent"].'</span></div><div class="saleright"><span>'.$row["Discount"].'</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Calibe 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div>';			
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
		return $kq;
	}
	function product500_1000($conn){
		$sql = "SELECT * FROM products WHERE group_ LIKE '500-1000'";
		$result = mysqli_query($conn,$sql);
		$dem = 0;
		$s='<div class="row" style="float:left">';
		$kq='';
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){	
			$s=$s.'<div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img class="img" src='.$row["ImagePath"].' alt"..." /></a><div class="product-price"><span class="old-price">'.$row["PriceOld"].'</span><br /><span class="current-price">'.$row["PriceCurrent"].'</span></div><div class="saleright"><span>'.$row["Discount"].'</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Calibe 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div>';			
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
		return $kq;
	}
	function productAbove1000($conn){
		$sql = "SELECT * FROM products WHERE group_ LIKE 'above1000'";
		$result = mysqli_query($conn,$sql);
		$dem = 0;
		$s='<div class="row" style="float:left">';
		$kq='';
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){	
			$s=$s.'<div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img class="img" src='.$row["ImagePath"].' alt"..." /></a><div class="product-price"><span class="old-price">'.$row["PriceOld"].'</span><br /><span class="current-price">'.$row["PriceCurrent"].'</span></div><div class="saleright"><span>'.$row["Discount"].'</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Calibe 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div>';			
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
		return $kq;
	}
	function productUnder100($conn){
		$sql = "SELECT * FROM products WHERE group_ LIKE 'under100'";
		$result = mysqli_query($conn,$sql);
		$dem = 0;
		$s='<div class="row" style="float:left">';
		$kq='';
		if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){	
			$s=$s.'<div class="product"><a class="img_product" href="#" title="sản phẩm ... "><img class="img" src='.$row["ImagePath"].' alt"..." /></a><div class="product-price"><span class="old-price">'.$row["PriceOld"].'</span><br /><span class="current-price">'.$row["PriceCurrent"].'</span></div><div class="saleright"><span>'.$row["Discount"].'</span></div><h4 class="product-title"><a href="#" title="Lò nướng Calibe 30 inch">Lò nướng Calibe 30 inch</a></h4><div id="evaluate-product"><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i><i data-alt="3" class="star-five" title="gorgeous"></i></div></div>';			
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
		return $kq;
	}
	
	function merge(){
	}
	
	$kg_Under100 = productUnder100($conn);
	$kg_100_200 = product100_200($conn);
	$kg_200_300 = product200_300($conn);
	$kg_300_500 = product300_500($conn);
	$kg_500_1000 = product500_1000($conn);
	$kg_above1000 = productAbove1000($conn);
?>