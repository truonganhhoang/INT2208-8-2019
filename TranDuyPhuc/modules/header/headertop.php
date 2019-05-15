<div class="header-top" >
			<div class="container">
				<div class="pull-left auto-width-left">
					<ul class="top-menu menu-beta l-inline">
						<li><a href=""><i class="fa fa-home"></i>UET-VNU</a></li>
						<li><a href=""><i class="fa fa-phone"></i> 0163 296 7751</a></li>
					</ul>
				</div>
				<div class="pull-right auto-width-right">
					<ul class="top-details menu-beta l-inline">
                    	<li><a href="admin/login.php">Trang Admin</a></li>
						<li><a href="signup.php">Đăng kí</a></li>
						<li><a href="login.php">Đăng nhập</a></li>
                        <li><a href="#"><i class="fa fa-user"></i>
                        
						<?php 
							if(isset($_SESSION['fullname'])){
								echo $_SESSION['fullname'];
							}else{
								echo 'Tài khoản';
							}
						
						?>
                        </a>
                        </li>
                        <li>
                        <form action="modules/orther/logout.php">
                        <button class="dropbtn">Logout</button>
                        </form>
                        </li>
                    </ul>
				</div>
				<div class="clearfix"></div>
			</div> <!-- .container -->
		</div> <!-- .header-top -->