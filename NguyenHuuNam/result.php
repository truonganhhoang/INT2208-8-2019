<?php
session_start();
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
	
	
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
                <?php
								include('config.php');// ket noi voi database
                                if(isset($_REQUEST['searchsubmit'])){
                                    $search = $_GET['s'];
                                    if(empty($search)){
                                       echo "<p>Bạn cần nhập dữ liệu vào thanh tìm kiếm </p>";                                   }
									else{
										$query="select * from products where title like '%$search%'";
										$result= mysqli_query($conn,$query);
										if( ! mysqli_num_rows($result) ) {
											echo "<p>Không tìm thấy kết quả nào</p>";
										}else{
										
									//}
                                //}
                                ?>
					<div class="col-sm-12">
						<div class="beta-products-list">
							<h4>Kết quả tìm kiếm cho '<?php echo $search ?>'</h4>
							<div class="beta-products-details">
								
								<div class="clearfix"></div>
							</div>

							<div class="row">
                                <br>
                                <?php
									while($row=mysqli_fetch_array($result)){
								?>
								<div class="col-sm-3"  style="margin-top:20px">
                                
									<div class="single-item" >
										<div class="single-item-header">
											<a class="pull-left" href="product.php?id=<?php echo $row['id'] ?>"><?php
					echo '<img src="admin/modules/chitietsach/uploads/'.$row['image'].'" />';
					?></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo $row['title'] ?></p>
											<p class="single-item-price">
												<span><p style="font-size:12px;">Giá Bán: <?php echo $row['cost'] ?>$</p></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.php?id=<?php echo $row['id'] ?>">Chi Tiết <i class="fa fa-chevron-right"></i></a>
                                            
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
								 <?php
										}
										}
										}
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
