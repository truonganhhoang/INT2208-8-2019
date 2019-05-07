<!doctype html>
<html lang="en">
  <title> My shop </title>
  <body style="height:100%">
    
    <?php include ('header.php'); ?>
  
  <div class="container">

  <h3 style="text-align: left;"><strong>ĐIỆN THOẠI BÁN CHẠY</strong></h3>

  <hr> 	
      <div class="row">
        <?php
          include('config.php');
          $sql = "SELECT * FROM `sanpham` WHERE `type`='Phone'";
          $query = mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_array($query)) {
          ?>
            <div class="col-sm-4">
              <div class="thumbnail">
                <a href="sanpham.php?id=<?php echo $row['id'] ?>"  style="text-decoration: none;" value="<?php echo $row['id'] ?>" >
                  <?php echo '<img src="anh/'.$row['link_img'].'" alt="picture" style="height: 250px; width: 394px" />'?>
                  <div class="caption">
                    <h3 style="text-align: left; color: black"><?php echo $row['name'] ?><br><h4><?php echo $row['price_text'] ?>₫</h4></h3>
                  </div>
                </a>
              </div>
            </div>
          <?php
        }
        ?>
      </div>
  </div>


  <div class="container">

  <h3 style="text-align: left;"><strong>LAPTOP BÁN CHẠY</strong></h3>

  <hr>  
      <div class="row">
        <?php
          include('config.php');
          $sql = "SELECT * FROM `sanpham` WHERE `type`='Laptop' limit 6";
          $query = mysqli_query($conn,$sql);
          while ($row = mysqli_fetch_array($query)) {
          ?>
            <div class="col-sm-4">
              <div class="thumbnail">
                <a href="sanpham.php?id=<?php echo $row['id'] ?> " style="text-decoration: none;" value="<?php echo $row['id'] ?>">
                  <?php echo '<img src="anh/'.$row['link_img'].'" alt="picture" style="height: 250px; width: 394px" />'?>
                  <div class="caption">
                    <h3 style="text-align: left; color: black"><?php echo $row['name'] ?><br><h4><?php echo $row['price_text'] ?>₫</h4></h3>
                  </div>
                </a>
              </div>
            </div>
          <?php
        }
        ?>
      </div>
  </div>

  <?php include ('footer.php'); ?>
  </body>
</html>