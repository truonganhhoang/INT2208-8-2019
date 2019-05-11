<?php
    $sql = "select * from products order by id desc";
    $run = mysqli_query($conn, $sql);
?>
<div class="lietke">
    <div class="container-fluid">
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tên sách</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Thể loại</th>
                    <th scope="col">Số trang</th>
                    <th scope="col">Giá</th>
                    <th scope="col">Số lượng</th>
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
                    <td><?php echo $dong['title'] ?></td>
                    <td><?php echo $dong['author'] ?></td>
                    <td><img src="modules/chitietsach/uploads/<?php echo $dong['image'] ?>" width="60" height="auto"></td>
                    <td><?php echo $dong['type'] ?></td>
                    <td><?php echo $dong['numberpage'] ?></td>
                    <td><?php echo $dong['cost'] ?></td>
                    <td><?php echo $dong['quantityInStock'] ?></td>
                    <td><?php include('sua.php') ?></td>
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