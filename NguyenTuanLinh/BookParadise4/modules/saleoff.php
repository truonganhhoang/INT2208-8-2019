<?php
    $sql_saleoff = "select * from chitietsach order by gia asc limit 6";
    $run_saleoff = mysqli_query($conn, $sql_saleoff);
?>
<section class="saleoff">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="intro headerText text-center">
                        <h2>Đang giảm giá</h2>
                        <p>Hãy chọn cho mình những đầu sách không chỉ hay mà còn vô cùng phải chăng</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    while ($dong_saleoff = mysqli_fetch_array($run_saleoff)){
                ?>
                <div class="col-sm-2">
                    <div class="product">
                        <a href="bookdetail.php?id=<?php echo $dong_saleoff['id_sach'] ?>">
                            <div class="imgBx">
                            <img src="admin/modules/quanlychitietsach/uploads/<?php echo $dong_saleoff['hinhanh'] ?>" class="img-fluid">
                        </div>
                        <div class="content">
                            <h6><?php echo $dong_saleoff['tensach'] ?></h6>
                            <p><i class="fas fa-cart-plus"></i><?php echo $dong_saleoff['gia'] ?></p>
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