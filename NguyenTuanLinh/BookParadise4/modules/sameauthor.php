<?php
    $tacgia = $dong_detail['tacgia'];
    $sql_sameauthor = "select * from chitietsach where tacgia='$tacgia' order by id_sach desc limit 6";
    $run_sameauthor = mysqli_query($conn, $sql_sameauthor);
?>
<section class="samekind">
        <div class="container">
            <div class="row">
                <div class="intro headerText text-left">
                    <h2>Cùng tác giả</h2>
                </div>
            </div>
            <div class="row">
                <?php
                    while ($dong_sameauthor = mysqli_fetch_array($run_sameauthor)){
                ?>
                <div class="col-sm-2">
                    <div class="product">
                        <a href="bookdetail.php?id=<?php echo $dong_sameauthor['id_sach'] ?>">
                            <div class="imgBx">
                                <img src="admin/modules/quanlychitietsach/uploads/<?php echo $dong_sameauthor['hinhanh'] ?>" class="img-fluid">
                            </div>
                            <div class="content">
                                <h6><?php echo $dong_sameauthor['tensach'] ?></h6>
                                <p><i class="fas fa-cart-plus"></i><?php echo $dong_sameauthor['gia'] ?></p>
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