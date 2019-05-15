<?php
    $sql_detail = "select * from chitietsach where id_sach=$_GET[id]";
    $run_detail = mysqli_query($conn, $sql_detail);
    $dong_detail = mysqli_fetch_array($run_detail);
?>
<section class="bookdetail">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="imgBx">
                        <img src="admin/modules/quanlychitietsach/uploads/<?php echo $dong_detail['hinhanh'] ?>" class="img-fluid">
                    </div>
                </div>
                <div class="col-sm-9">
                    <div class="row">
                        <div class="intro headerText text-left">
                            <h2><?php echo $dong_detail['tensach'] ?></h2>
                            <p><?php echo $dong_detail['gia'] ?>đ</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="bookdetail col-sm-9">
                            <div class="detailcontent">
                                <p>Tác giả: <?php echo $dong_detail['tacgia'] ?></p>
                                <p>Số trang: <?php echo $dong_detail['sotrang'] ?></p>
                                <p align="justify"><i>Mô tả: <?php echo $dong_detail['mota'] ?></i></p>
                            </div>
                        </div> 
                        <div class="shopping col-sm-3">
                            <div class="numbers headerText text-right">
                                <input type="number" min="1" name="numberofbooks" placeholder="Số lượng" oninput="validity.valid||(value='');">
                            </div>
                            <div class="button-more headerText text-right">
                                <a href="#" class="btn btnD1">Thêm vào giỏ hàng<i class="fas fa-cart-plus"></i></a>
                            </div>
                            <div class="button-more headerText text-right">
                                <a href="#" class="btn btnD1">Mua ngay<i class="fas fa-shopping-bag"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>