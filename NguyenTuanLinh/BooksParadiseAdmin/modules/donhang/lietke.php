<?php
    $sql = "select * from orders, users where orders.id_user = users.id_user order by orders.orderNumber desc";
    $run = mysqli_query($conn, $sql);
?>
<div class="lietke">
    <div class="container-fluid">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Mã đơn</th>
                    <th scope="col">Username</th>
                    <th scope="col">Tên người đặt</th>
                    <th scope="col">Email</th>
                    <th scope="col">Địa chỉ</th>
                    <th scope="col">Số điện thoại</th>
                    <th scope="col">Ghi chú</th>
                    <th scope="col" colspan="2"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $i = 1;
                  while ($dong = mysqli_fetch_array($run)){
                ?>
                <tr>
                  <th scope="row"><?php echo $i ?></th>
                  <td><?php echo $dong['orderNumber'] ?></td>
                  <td><?php echo $dong['user_name'] ?></td>
                  <td><?php echo $dong['name'] ?></td>
                  <td><?php echo $dong['email'] ?></td>
                  <td><?php echo $dong['address'] ?></td>
                  <td><?php echo $dong['phone'] ?></td>
                  <td><?php echo $dong['notes'] ?></td>
                  <td><?php include('chitiet.php') ?></td>
                  <td><?php include('xoa.php') ?></td>
                </tr>
                <?php
                    $i = $i +1;
                  }
                ?>
            </tbody>
        </table>
    </div>
</div>