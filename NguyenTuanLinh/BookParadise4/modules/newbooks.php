<?php
    $sql_newbooks = "select * from chitietsach order by id_sach desc limit 6";
    $run_newbooks = mysqli_query($conn, $sql_newbooks);
?>
<section class="newbooks">
        <div class="container">
            <div class="row">
                <div class="offset-sm-2 col-sm-8">
                    <div class="intro headerText text-center">
                        <h2>Sách mới</h2>
                        <p>Khám phá những tựa sách mới</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                    while ($dong_newbooks = mysqli_fetch_array($run_newbooks)){
                ?>
                <div class="col-sm-2">
                    <div class="product">
                        <a href="bookdetail.php?id=<?php echo $dong_newbooks['id_sach'] ?>">
                            <div class="imgBx">
                                <img src="admin/modules/quanlychitietsach/uploads/<?php echo $dong_newbooks['hinhanh'] ?>" class="img-fluid">
                            </div>
                            <div class="content">
                                <h6><?php echo $dong_newbooks['tensach'] ?></h6>
                                <p><i class="fas fa-cart-plus"></i><?php echo $dong_newbooks['gia'] ?></p>
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