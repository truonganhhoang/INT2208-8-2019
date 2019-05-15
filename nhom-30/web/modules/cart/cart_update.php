<?php
	include('config.php');
	
	
	if(isset($_GET['type'])&&$_GET['type']=='add'){
		if(isset($_POST['add'])|| isset($_GET['qty'])){
		if(isset($_SESSION['id'])){
		$product_id=$_GET['id'];
		$product_qty=$_REQUEST['qty'];
		/*
		if($product_qty>10){
			echo '<script>alert("nho hon 10 san pham")</script>';
			echo '<a href="'.$return_url.'">Back</a>';
		}*/
		$sql="select image,cost,title from products where id='$product_id' limit 1";
		$run_pro=mysqli_query($conn,$sql);
		$row_pro=mysqli_fetch_array($run_pro);
		if($row_pro){
			$new_pro=array(array('image'=>$row_pro['image'],'name'=>$row_pro['title'],'qty'=>$product_qty,'id'=>$product_id,'qty'=>$product_qty,'price'=>$row_pro['cost']));
			if(isset($_SESSION['product'])){
				$found=false;
				foreach($_SESSION['product'] as $cart_itm){
					if($cart_itm['id']==$product_id){
					
					$product[]=array('image'=>$cart_itm['image'],'name'=>$cart_itm['name'],'id'=>$product_id,'qty'=>$cart_itm['qty'],'price'=>$cart_itm['price']);
					$found=true;
				}else{
					$product[]=array('image'=>$cart_itm['image'],'name'=>$cart_itm['name'],'id'=>$cart_itm['id'],'qty'=>$cart_itm['qty'],'price'=>$cart_itm['price']);
				}
			}
			if($found==false){
				$_SESSION['product']=array_merge($product,$new_pro);
			}else{
				$_SESSION['product']=$product;
			}
			}else{
				$_SESSION['product']=$new_pro;
			}
		}
	}else{
			
			echo (' <script> alert("Bạn cần đăng nhập trước khi mua sách"); </script>');
			
		}
		}//isset post[add]
	}
	/*
	//empty cart
		if(isset($_GET['emptycart'])&&$_GET['emptycart']==1){
		session_destroy();
		$return_url=base64_decode($_GET["return_url"]);
		header('location:'.$return_url);
	}*/
	
	
		
	
	//delete cart
	if(isset($_GET['removep'])&&isset($_SESSION['product'])){
		$product_id=$_GET['removep'];
		foreach($_SESSION['product'] as $cart_itm){
		if($cart_itm['id']!=$product_id){
			$product[]=array('image'=>$cart_itm['image'],'name'=>$cart_itm['name'],'id'=>$cart_itm['id'],'qty'=>$cart_itm['qty'],'price'=>$cart_itm['price']);			
		}
		$_SESSION['product']=$product;
		}
		header('location:checkout.php');
	}
	
?>