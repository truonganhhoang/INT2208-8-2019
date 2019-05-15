<div class="beta-products-list" style="margin-top:20px;">
							<h4 style=" height:50px; background-color:#3498DB; color:#FFF; text-align:center; padding-top:8px">Tất cả sách</h4>
							<br>
                            

							<div class="row">
                            <?php
							if(isset($_GET['begin'])){
							$pos = $_GET['begin'];
							}else{
								$pos=0;
							}
							
							$sqli=" select * from products order by id limit $pos,$display";
							$truyvan=mysqli_query($conn,$sqli);
							
							while($book=mysqli_fetch_array($truyvan)){
							?>
								<div class="col-sm-3"  style="margin-top:20px">
                                
									<div class="single-item" >
										<div class="single-item-header">
											<a href="product.php?id=<?php echo $book['id'] ?>"><?php
					echo '<img src="admin/modules/chitietsach/uploads/'.$book['image'].'" />';
					?></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title"><?php echo $book['title'] ?></p>
											<p class="single-item-price">
												<span><p style="font-size:12px;">Giá Bán: <?php echo $book['cost'] ?>$</p></span>
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="checkout.php?id=<?php echo $book['id'] ?>&type=add&qty=1"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="product.php?id=<?php echo $book['id'] ?>">Chi Tiết <i class="fa fa-chevron-right"></i></a>
                                            
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
                                
                                 <?php
									}
									
									
									
								?>
                               
							</div>
                           
						</div> <!-- .beta-products-list -->