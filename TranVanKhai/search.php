<!doctype html>
<html lang="en">
  <title>My Shop</title>

  <body style="height:100%">

  <?php include ("smallheader.php"); ?>

  <div class="container">
    <div class="container">
      <?php
      $thongbaokhirong="Nhập lại dữ liệu!";
      include ('config.php');
        if(isset($_REQUEST['submit']))
        {
            $search=$_GET['ten'];
            if(empty($search))
            {
              echo "<h2>".$thongbaokhirong."</h2>";
            }
            else
            { 
              echo ("<h2>Kết quả tìm kiếm '$search'</h2><hr>");
              $query1 = "SELECT * FROM `sanpham` WHERE `name` LIKE '%$search%' OR `type` LIKE '%$search%'";
              $result1 = mysqli_query($conn, $query1);
                while ($row = mysqli_fetch_array($result1, MYSQLI_ASSOC)) {
                ?> 
                <div class="col-sm-4">
                <div class="thumbnail">
                  <a href="#" style="text-decoration: none;">
                    <?php echo '<img src="anh/'.$row['link_img'].'" alt="picture" style="height: 250px; width: 394px"/>'?>
                    <div class="caption">
                      <h3 style="text-align: left; color: black"><?php echo $row['name'] ?><br><h4><?php echo $row['price_text'] ?>₫</h4></h3>
                    </div>
                  </a>
                </div>
              </div>
                <?php
              }
            }
        }
      
      ?>
    </div>
    
  </div>
  <?php include ('footer.php'); ?>
	
  </body>
</html>