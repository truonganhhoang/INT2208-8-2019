<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <script src="sanpham.js"></script>

  <title> My shop </title>
  </head>
  <body style="height:1500px">
    <style type="text/css">
      #id1{
        text-decoration-color: red;
      }
      th{
        text-align: center;
      }
      ul li:hover ul {
        display: block;   
      }
      li:hover {
        background: #00BB00;
      }
      #linkmau:hover{
      	color: red;
      	size: 14;
      }
      ul li ul li a {display:block !important;} 
      ul li ul li:hover {background: #666;}

      div.thumbnail:hover {
  		border: 1px solid gray;
}
    </style>
<nav class="navbar navbar-inverse">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="myshop.php">    SHOP 69    </a>
    </div>
    <form class="navbar-form navbar-left" action="search.php">
      <div class="input-group">
          <input type="text" name="ten" value="" class="form-control" size="70" placeholder="Từ khóa tìm kiếm" class="form-control input-lg">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit" name="submit" value="Tìm Kiếm">
              <i class="glyphicon glyphicon-search"></i>
            </button>
          </div>
      </div>
    </form>
    <ul class="nav navbar-nav">
      <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> Giỏ hàng</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>
</nav>    
  <nav class="navbar navbar-default"  style="background-color: #CCCCCC;">
        <div class="container">

        	<!-- Tạo nút menu --> 
        <div class="navbar-header">
          	<button type="button" class="navbar-toggle navbar-left" data-toggle="collapse" data-target="#myNavbar">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>                        
      		</button>
        </div>

        <div class="dropdown">
          	<div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">

              <li class="dropdown">
                <a class="dropdown-toggle" href="#" style="color: black"><b>ĐIỆN THOẠI</b></a>
                <ul class="dropdown-menu">
                  <li><a href="trangloc.php" id="linkmau" name="IPHONE"><strong>IPHONE</strong></a></li>
                  <li><a href="#" id="linkmau" name="SAMSUNG"><strong>SAMSUNG</strong></a></li>
                  <li><a href="#" id="linkmau"><strong>XIAOMI</strong></a></li>
                  <li><a href="#" id="linkmau"><strong>HAWEI</strong></a></li>
                  <li><a href="#" id="linkmau"><strong>NOKIA</strong></a></li>
                  <li><a href="#" id="linkmau"><strong>ASUS</strong></a></li>
                  <li><a href="#" id="linkmau"><strong>LENOVO</strong></a></li>
                </ul>
              </li>

              <li class="dropdown">
                  <a class="dropdown-toggle" href="#" style="color: black;"><b>LAPTOP</b></a>
                  <ul class="dropdown-menu">
                  	<li><a href="#" id="linkmau"><strong>MACBOOK</strong></a></li>
                    <li><a href="#" id="linkmau"><strong>DELL</strong></a></li>
                    <li><a href="#" id="linkmau"><strong>ASUS</strong></a></li>
                    <li><a href="#" id="linkmau"><strong>ACER</strong></a></li>
                    <li><a href="#" id="linkmau"><strong>HP</strong></a></li>
                    <li><a href="#" id="linkmau"><strong>VAI0</strong></a></li>
                    <li><a href="#" id="linkmau"><strong>LENOVO</strong></a></li>

                  </ul>
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" href="#" style="color: black;"><b>MÁY TÍNH BẢNG</b></a>
                <ul class="dropdown-menu">
                  <li><a href="#" id="linkmau"><strong>IPAD</strong></a></li>
                  <li><a href="#" id="linkmau"><strong>TAB</strong></a></li>
                </ul>           
              </li>

              <li class="dropdown">
                <a class="dropdown-toggle" href="#" style="color: black;" ><b>PHỤ KIỆN</b></a>
                <ul class="dropdown-menu">
                  <li><a href="#" id="linkmau"><strong>ĐIỆN THOẠI</strong></a></li>
                  <li><a href="#" id="linkmau"><strong>LAPTOP</strong></a></li>
                  
                </ul>
            </li>
        	</div>
        </div>
        </div>      
  </nav>
</body>
</html>