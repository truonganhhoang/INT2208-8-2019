<?php
    $sql_bestsellers = "select * from chitietsach order by daban desc limit 8";
    $run_bestsellers = mysqli_query($conn, $sql_bestsellers);
?>
<section class="bestsellers">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="intro headerText text-center">
                        <h2>Sách bán chạy</h2>
                        <p>Cùng xem những tựa sách bán chạy nhất</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    while ($dong_bestsellers = mysqli_fetch_array($run_bestsellers)){
                ?>
                <div class="col-sm-3">
                    <div class="product">
                        <a href="bookdetail.php?id=<?php echo $dong_bestsellers['id_sach'] ?>">
                            <div class="imgBx">
                            <img src="admin/modules/quanlychitietsach/uploads/<?php echo $dong_bestsellers['hinhanh'] ?>" class="img-fluid">
                        </div>
                        <div class="content">
                            <h6><?php echo $dong_bestsellers['tensach'] ?></h6>
                            <p><i class="fas fa-cart-plus"></i><?php echo $dong_bestsellers['gia'] ?></p>
                        </div>
                        </a>
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="button-more headerText text-center">
                        <a href="#" class="btn btnD1">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>