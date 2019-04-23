<?php
    $theloai = $dong_detail['id_theloai'];
    $sql_samekind = "select * from chitietsach where id_theloai='$theloai' order by id_sach desc limit 6";
    $run_samekind = mysqli_query($conn, $sql_samekind);
?>
<section class="sameauthor">
        <div class="container">
            <div class="row">
                <div class="intro headerText text-left">
                    <h2>Cùng thể loại</h2>
                </div>
            </div>
            <div class="row">
                <?php
                    while ($dong_samekind = mysqli_fetch_array($run_samekind)){
                ?>
                <div class="col-sm-2">
                    <div class="product">
                        <a href="bookdetail.php?id=<?php echo $dong_samekind['id_sach'] ?>">
                            <div class="imgBx">
                                <img src="admin/modules/quanlychitietsach/uploads/<?php echo $dong_samekind['hinhanh'] ?>" class="img-fluid">
                            </div>
                            <div class="content">
                                <h6><?php echo $dong_samekind['tensach'] ?></h6>
                                <p><i class="fas fa-cart-plus"></i><?php echo $dong_samekind['gia'] ?></p>
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