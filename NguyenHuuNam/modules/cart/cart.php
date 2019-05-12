<div class="cart">
							<div class="beta-select"><i class="fa fa-shopping-cart"></i> Giỏ hàng (<?php  if(isset($_SESSION['product'])){ echo count($_SESSION['product']); } else echo "Trống";
							?>) <i class="fa fa-chevron-down"></i></div>
							<div class="beta-dropdown cart-body">
                            <?php
							$total=0;
	     if(isset($_SESSION['product'])){
			 
		foreach($_SESSION['product'] as $cart_itm){	
		$subtotal = ($cart_itm["price"]*$cart_itm["qty"]); 
		$total = ($total + $subtotal); 		
        ?>                     	<div class="cart-item">
									<div class="media">
								 		<a class="pull-left" href="#"><img src=<?php echo '"admin/modules/chitietsach/uploads/'.$cart_itm['image'].'"' ?> alt=""></a>
										<div class="media-body">
											<span class="cart-item-title"><?php echo $cart_itm['name'] ?></span>
											
											<span class="cart-item-amount"><span>$<?php echo $cart_itm['price'] ?></span></span>
                                            <span class="cart-item-amount"><span>Số Lượng: <?php echo $cart_itm['qty'] ?></span></span>
										</div>
									</div>
								</div>
<?php
		}
		 }
		 ?>
								

								<div class="cart-caption">
									<div class="cart-total text-right">Tổng tiền: <span class="cart-total-value">$<?php echo $total?></span></div>
									<div class="clearfix"></div>

									<div class="center">
										<div class="space10">&nbsp;</div>
										<a href="checkout.php" class="beta-btn primary text-center">Đặt hàng <i class="fa fa-chevron-right"></i></a>
									</div>
								</div>
							</div>
						</div> <!-- .cart -->