<?php
	include('config.php');
	session_start();
	$type=$_GET['type'];
	
	$sql="select * from products where type=$type ";
	$query=mysqli_query($conn,$sql);
	
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
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/settings.css">
	<link rel="stylesheet" href="assets/dest/rs-plugin/css/responsive.css">
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
				<h6 class="inner-title">Thể Loại</h6>
			</div>
			
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container" >
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
							<li><a href="product_type.php?type='Văn Học Nước Ngoài'">Văn Học Nước Ngoài</a></li>
							<li><a href="product_type.php?type='Khoa Học'">Khoa Học</a></li>
							<li><a href="product_type.php?type='Lịch Sử'">Lịch Sử</a></li>
							<li><a href="product_type.php?type='Thiếu Nhi'">Thiếu Nhi</a></li>
							
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4 style="background:#3498DB; height:60px; text-align:center; padding-top:10px; color:#FFF"><?php echo substr($type,1,strlen($type)-2) ?></h4>
                            
							<div class="beta-products-details">
								<p class="pull-left">Tìm thấy <?php echo mysqli_num_rows($query) ?> quyển sách </p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
                            <?php
							while($row=mysqli_fetch_array($query)){
							?>
								<div class="col-sm-4" style="margin-bottom:10px;">
									<div class="single-item">
										<div class="single-item-header">
											<a href="product.php?id=<?php echo $row['id'] ?>"><?php
					echo '<img src="admin/modules/chitietsach/uploads/'.$row['image'].'" />';
					?></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo $row['title'] ?></p>
											<p class="single-item-price">
												<span>$<?php echo $row['cost'] ?></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="checkout.php?id=<?php echo $row['id'] ?>&type=add&qty=1"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.php?id=<?php echo $row['id'] ?>">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
                                <?php
								}
								?>
								
								
							</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						
					</div>
				</div> <!-- end section with sidebar and main content -->


			</div> <!-- .main-content -->
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
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="assets/dest/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="assets/dest/js/waypoints.min.js"></script>
	<script src="assets/dest/js/wow.min.js"></script>
	<!--customjs-->
	<script src="assets/dest/js/custom2.js"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>
</body>
</html>
