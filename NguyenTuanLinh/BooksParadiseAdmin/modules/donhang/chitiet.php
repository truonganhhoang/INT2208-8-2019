<div class="container-fluid">
        
        <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#chitiet<?php echo $dong['orderNumber'] ?>">Chi tiết</button>
            
        <div class="modal fade" id="chitiet<?php echo $dong['orderNumber'] ?>" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Chi tiết đơn hàng</h5> 
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php
                            $number = $dong['orderNumber'];
                            $sql_detail = "select * from orderdetails, products where orderdetails.orderNumber='$number' and orderdetails.product_id=products.id";
                            $run_detail = mysqli_query($conn, $sql_detail);
                        ?>
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Sản phẩm</th>
                                    <th scope="col">Hình ảnh</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Đơn giá</th>
                                    <th scope="col">Thành tiền</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $n = 1;
                                    $tongtien = 0;
                                    while ($dong_detail = mysqli_fetch_array($run_detail)){
                                        $tien =  $dong_detail['quantity']*$dong_detail['cost'];
                                ?>
                                <tr>
                                    <th scope="row"><?php echo $n ?></th>
                                    <td><?php echo $dong_detail['title'] ?></td>
                                    <td><img src="modules/chitietsach/uploads/<?php echo $dong_detail['image'] ?>" width="60" height="auto"></td>
                                    <td><?php echo $dong_detail['quantity'] ?></td>
                                    <td><?php echo $dong_detail['cost'] ?></td>
                                    <td><?php echo $tien ?></td>
                                </tr>
                                <?php
                                        $n = $n +1;
                                        $tongtien = $tongtien + $tien;
                                    }
                                ?>
                                <td colspan="5">
                                    <th scope="row" class="my-2 my-sm-0"><h5>Tổng tiền: <?php echo $tongtien ?></h3></th>
                                </td>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
                    </div>
                </div>
            </div>
        </div>

</div>