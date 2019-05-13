<?php
    $sql = "select * from comments, users, products where comments.id_user=users.id_user and comments.product_id=products.id  order by comments.id_comment desc";
    $run = mysqli_query($conn, $sql);
?>
<div class="lietke">
    <div class="container-fluid">
        <table class="table table-hover">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Người dùng</th>
                    <th scope="col">Sản phẩm</th>
                    <th scope="col">nội dung</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php
                  $i = 1;
                  while ($dong = mysqli_fetch_array($run)){
                ?>
                <tr>
                  <th scope="row"><?php echo $i ?></th>
                  <td><?php echo $dong['user_name'] ?></td>
                  <td><?php echo $dong['title'] ?></td>
                  <td><?php echo $dong['comment'] ?></td>
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