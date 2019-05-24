<!DOCTYPE html>
<html>
  <head>
  <link rel="stylesheet" href="css\button_new.css">
  </head>
<body style="background-color: WhiteSmoke	">

  <!-- header -->
    <?php include ('smallheader.php'); ?>
  <!-- endheader -->

  <div class="container" style="background-color: white">
  <!-- truy van -->
    <?php

      include ('config.php');
        $value = $_GET['id'];
        $querysp = "SELECT * FROM `phone` WHERE `id`= $value ";
        $resultsp = mysqli_query($conn,$querysp);
        while ($row2 = mysqli_fetch_array($resultsp)) {
        ?>

          <h1><?php echo $row2['name'] ?><h1>
          <div class="row">

              <div class="col-sm-5">
                <div class="thumbnail">

                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- keo xe -->
                  <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                  </ol>

                  <!-- Wrapper for slides -->
                  <div class="carousel-inner" role="listbox">
                    <div class="item active">
                    <?php echo '<img src="anh/'.$row2['link_img'].'" alt="picture" id="myimage"/>'?> 
                    </div>

                    <div class="item">
                    <?php echo '<img src="anh/'.$row2['link_img'].'" alt="picture" id="myimage" />'?>
                    </div> 
                    <div class="item">
                    <?php echo '<img src="anh/'.$row2['link_img'].'" alt="picture" id="myimage"/>'?> 
                    </div>    
                  </div>
                </div>
              </div>
              </div>
              
              <div class="col-sm-4">
                    <div>
                        <h1 style="text-align: left; color: black" id="gia"><?php echo $row2['price_text']?></h1>
                    </div>
                    <hr>
                    <div style="border :1px solid #D3D3D3; background-color:#00BB00	">
                      <h5 style="text-align: center;">Sản phẩm được nhận giao hàng trong 2h </h5>
                    </div>

                    <div style="border: 1px solid #EEEEEE; margin-top: 15px">
                        <h4 style="color: #FF0000; margin-left: 30px">Khuyến mại đăc biệt</h4>
                        <h5 style="margin-left: 40px">something</h5>
                    </div>
                    <div>
                      <a href="#"><button style="width: 100%; margin-top: 15px; background-color: red; border: none;color: white;"><h4>Mua ngay</h4><h5>Giao hàng trong 1 giờ hoặc nhận tại shop</h5></button></a>
                    </div>
                    <div style="text-align: center;">
                      <h5>Gọi đặt mua: 1800.1060 (miễn phí - 7:30-22:00)</h5>
                    </div>
                </div>

                <div class="col-sm-3">
                  <br>
                  <br>
                  <div style="border: 1px solid #EEEEEE;">
                      <h5 style="color: #FF0000; margin-left: 30px">Trong hộp có:</h5>
                      <a href="#" style="text-decoration: none;"><h5 style="margin-left: 40px;">Sạc, Tai nghe, Sách hướng dẫn, Cáp, Cây lấy sim</h5></a>
                      <hr>
                      <h5 style="color: #FF0000; margin-left: 30px">Chế độ bảo hành 12 tháng:</h5>
                      <a href="#" style="text-decoration: none;"><h5 style="margin-left: 40px;">Xem chi tiết</h5></a>
                      <hr>
                      <h5 style="color: #FF0000; margin-left: 30px">1 đổi 1 tháng nếu có lỗi:</h5>
                      <a href="#" style="text-decoration: none;"><h5 style="margin-left: 40px">Xem chi tiết</h5></a>
                  </div>
                  
                  <div style="border: 1px solid #EEEEEE; margin-top: 15px">
                      <h5 style="color: #FF0000; margin-left: 30px"><a href="#" style="text-decoration: none; color: red"><?php echo $row2['name'] ?> cũ</a></h5>
                      <h5 style="margin-left: 30px">Giá: <?php echo $row2['old_price'] ?>₫</h5>
                      <h5 style="margin-left: 30px">Bảo hành 11 tháng: <a href="#" style="text-decoration: none;">Xem chi tiết.</a></h5>
                     
                  </div>

                  </div>
                  
                </div>
              </div>

          </div>
    <?php
      }
    ?>
    </div>

    <?php include ('footer.php'); ?>

  





</body>
</html>
