<?php
	include('config.php');
	session_start();
	$sql="select * from products where id=$_GET[id] ";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query);
	$type= $row['type'];
	$id = $_GET['id'];
	include('modules/cart/cart_update.php');
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>BookParadise</title>
	<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/dest/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/dest/vendors/colorbox/example3/colorbox.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/style.css">
	<link rel="stylesheet" href="assets/dest/css/animate.css">
	<link rel="stylesheet" title="style" href="assets/dest/css/huong-style.css">
    <style>
	.dropbtn{
		 background-color: #3498DB;
		  color: white;
		  padding: 16px;
		  font-size: 16px;
		  border: none;
	}
	</style>
</head>
<body>

	<div id="header">
		<?php 
			include('modules/header/headertop.php');
			include('modules/header/headerbody.php');
		
			include('modules/header/header-bottom.php');
		?>
	</div> <!-- #header -->

	<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Sản Phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="index.php">Trang chủ</a> / <span>Sản Phẩm</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>

	<div class="container">
		<div id="content">
			<div class="row">
				<div class="col-sm-9">

					<div class="row">
						<div class="col-sm-4" >
							<img src="admin/modules/chitietsach/uploads/<?php echo $row['image'] ?>" alt="no_picture">
						</div>
						<div class="col-sm-8" style="  height:320px;  ">
							
                            <div style="width:500px;  height:320px; border:solid 3px #3498DB ">
								<p class="single-item-title" style=" height:40px; background-color:#3498DB; text-align:center; color:#FFF;  padding-top:6px"><?php echo $row['title'] ?></p>
                                
								<p class="single-item-price">
									<span><p style="font-size:14px; margin-left:10px;">Giá Bán: <?php echo $row['cost'] ?>$</p></span>
                                    <hr >
								</p>
							
							<form action="product.php?id=<?php echo $row['id'] ?>&type=add" method="post">
							<div class="single-item-desc">
								<p style="margin-left:10px;">Tác giả: <?php echo $row['author'] ?></p>
                                <hr >
                                <p style="margin-left:10px;">Số trang: <?php echo $row['numberpage'] ?></p>
                                <hr >
                                
                                <p style="margin-left:10px;">Số lượng: <input type="number" min="1" name="qty" value="1" style="width:70px;"  /></p>
                               </div>
                                <input class="beta-btn primary text-center"  type="submit" id="add" name="add" value="Đặt Hàng"   style=" float: right; margin-bottom:0px ; margin-right: 10px; " /> 
	
     						
							
				 			
                            </form>
                            <?php
							//
							
							$query5 = mysqli_query($conn,"select * from comments where product_id= '$id'");
							
							$number_comment=mysqli_num_rows($query5);
         ?>                                               
         				</div>
						</div>
					</div>

					<div class="space40">&nbsp;</div>
					<div class="woocommerce-tabs">
						<ul class="tabs">
							<li><a href="#tab-description">Mô tả</a></li>
							<li><a href="#tab-reviews">Đánh giá (<?php echo $number_comment   ?>)</a></li>
						</ul>

						<div class="panel" id="tab-description">
							<p><?php echo $row['Description'] ?></p>
							
						</div>
                        <?php

if (isset($_POST['binhluan'])) {
	if(isset($_SESSION['id'])){
	$id_user = $_SESSION['id'];
    
   
    $comment = $_POST['noidung'];
    
    $comment_length = strlen($comment);
    if ( $comment_length > 0) {

        $sql = "insert into comments (id_user,product_id,comment) values ('$id_user','$id','$comment' )";
        mysqli_query($conn, $sql);
    } else {
        echo "<script> alert('Vui lòng điền nội dung');</script>";
    }
	}else{
		echo "<script> alert('Bạn cần đăng nhập để bình luận');</script>";
	}

}

?>

						<div class="panel" id="tab-reviews">
                        <?php
$fine_comment = "select c.comment as comment,u.fullname as name from comments c inner join users u on c.id_user=u.id_user
where c.product_id=$id ";
$ketqua_comment = mysqli_query($conn, $fine_comment);
while ($dong_comment = mysqli_fetch_array($ketqua_comment)) {
    $comment_name = $dong_comment['name'];
    $comment = $dong_comment['comment'];
    echo '<p  style="border-bottom:1px solid #ccc">';
    echo "<p style='font-weight:bold;'><i class='fa fa-user'></i>  $comment_name</p>  $comment<p>";
    
    echo '</p >';
}
?>
                                   <form action="product.php?id=<?php echo $row['id'] ?>&type=add&qty=1" method="post" enctype="multipart/form-data">
<div style="height:200px; width:800px">
    <table width="800px"  border="0" style="margin-bottom:40px;">
        <tr>
        <hr>
            <td colspan="2" style="font-size:16px; font-weight:bold">Bình luận sản phẫm</div></td>

        </tr>
        <tr>
            <td width="60">Tên :</td>
            <td width="100"><label for="ten"></label>
                <?php if(isset($_SESSION['fullname'])){ 
				echo $_SESSION['fullname'];
				}else echo "<P style='color:red'>Bạn chưa đăng nhập</p> ";
				 ?>
        </tr>
        <tr>
            <td>Nội dung :</td>
            <td><label for="noidung"></label>
                <textarea name="noidung" style="height:70px" id="noidung" cols="30" rows="2" placeholder="Nội dung bình luận..."></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input class="beta-btn primary text-center"  type="submit" name="binhluan" id="binhluan" value="Bình luận"    /> </td>

        </tr>
    </table>
</div>
</form>
        
        
						</div>
					</div>
					<div class="space50">&nbsp;</div>
					<div class="beta-products-list">
						<h4 style=" height:50px; background-color:#3498DB; color:#FFF; text-align:center; padding-top:8px">Sách Cùng Thể Loại</h4>
					
						<div class="row">
                        <?php
						$sql2="select * from products where type = '$type' and id!=$_GET[id] limit 3";
						$query2=mysqli_query($conn,$sql2);
						
						while($row2 = mysqli_fetch_array($query2)){
					?>
							<div class="col-sm-4">
								<div class="single-item">
									<div class="single-item-header">
										<a href="product.php?id=<?php echo $row2['id'] ?>"><?php
					echo '<img src="admin/modules/chitietsach/uploads/'.$row2['image'].'" />';
					?></a>
									</div>
									<div class="single-item-body">
										<p class="single-item-title"><?php echo $row2['title'] ?></p>
										<p class="single-item-price">
											<span><p style="font-size:12px;">Giá Bán: <?php echo $row['cost'] ?>$</p></span>
										</p>
									</div>
									<div class="single-item-caption">
										<a class="add-to-cart pull-left" href="checkout.php?id=<?php echo $row2['id'] ?>&type=add&qty=1"><i class="fa fa-shopping-cart"></i></a>
										<a class="beta-btn primary" href="product.php?id=<?php echo $row2['id'] ?>">Chi Tiết <i class="fa fa-chevron-right"></i></a>
										<div class="clearfix"></div>
									</div>
								</div>
							</div>
                             <?php 
							 
							 } 
							 ?>
						</div>
                       
					</div> <!-- .beta-products-list -->
				</div>
				<div class="col-sm-3 aside">
					<div class="widget">
						<h3 class="widget-title">Sách Bán Chạy Nhất</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
                            <?php
								$sql4="select * from products p inner join orderdetails od on p.id = od.product_id group by od.product_id order by sum(od.quantity) desc limit 4";
								$query4=mysqli_query($conn,$sql4);
								
								while($row4 = mysqli_fetch_array($query4)){
							?>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.php?id=<?php echo $row4['id'] ?>"><?php
					echo '<img src="admin/modules/chitietsach/uploads/'.$row4['image'].'" />';
					?></a>
									<div class="media-body">
										<?php echo $row4['title'] ?>
										<span class="beta-sales-price">$<?php echo $row4['cost'] ?></span>
									</div>
								</div>
								<?php
								}
								?>
							</div>
						</div>
					</div> <!-- best sellers widget -->
					<div class="widget">
						<h3 class="widget-title">Sách Mới Nhất</h3>
						<div class="widget-body">
							<div class="beta-sales beta-lists">
                            <?php
								$sql3="select * from products order by id desc limit 4";
								$query3=mysqli_query($conn,$sql3);
								
								while($row3 = mysqli_fetch_array($query3)){
							?>
								<div class="media beta-sales-item">
									<a class="pull-left" href="product.php?id=<?php echo $row3['id'] ?>"><?php
					echo '<img src="admin/modules/chitietsach/uploads/'.$row3['image'].'" />';
					?></a>
									<div class="media-body">
										<?php echo $row3['title'] ?>
										<span class="beta-sales-price">$<?php echo $row3['cost'] ?></span>
									</div>
								</div>
								<?php
								}
								?>
								
							</div>
						</div>
					</div> <!-- best sellers widget -->
                    
				</div>
			</div>
		</div> <!-- #content -->
	</div> <!-- .container -->

	<?php
	include('modules/footer/footer.php');
	?>
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Privacy policy. (&copy;) 2014</p>
			<p class="pull-right pay-options">
				<a href="#"><img src="assets/dest/images/pay/master.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/pay.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/visa.jpg" alt="" /></a>
				<a href="#"><img src="assets/dest/images/pay/paypal.jpg" alt="" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->


	<!-- include js files -->
	<script src="assets/dest/js/jquery.js"></script>
	<script src="assets/dest/vendors/jqueryui/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="assets/dest/vendors/bxslider/jquery.bxslider.min.js"></script>
	<script src="assets/dest/vendors/colorbox/jquery.colorbox-min.js"></script>
	<script src="assets/dest/vendors/animo/Animo.js"></script>
	<script src="assets/dest/vendors/dug/dug.js"></script>
	<script src="assets/dest/js/scripts.min.js"></script>

	<!--customjs-->
	<script type="text/javascript">
    $(function() {
        // this will get the full URL at the address bar
        var url = window.location.href;

        // passes on every "a" tag
        $(".main-menu a").each(function() {
            // checks if its the same on the address bar
            if (url == (this.href)) {
                $(this).closest("li").addClass("active");
				$(this).parents('li').addClass('parent-active');
            }
        });
    });


</script>
<script>
	 jQuery(document).ready(function($) {
                'use strict';

// color box

//color
      jQuery('#style-selector').animate({
      left: '-213px'
    });

    jQuery('#style-selector a.close').click(function(e){
      e.preventDefault();
      var div = jQuery('#style-selector');
      if (div.css('left') === '-213px') {
        jQuery('#style-selector').animate({
          left: '0'
        });
        jQuery(this).removeClass('icon-angle-left');
        jQuery(this).addClass('icon-angle-right');
      } else {
        jQuery('#style-selector').animate({
          left: '-213px'
        });
        jQuery(this).removeClass('icon-angle-right');
        jQuery(this).addClass('icon-angle-left');
      }
    });
				});
	</script>
</body>
</html>
