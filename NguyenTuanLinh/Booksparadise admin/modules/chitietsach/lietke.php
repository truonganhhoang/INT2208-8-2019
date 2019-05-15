<?php
    if (isset($_POST['searchbtn'])){
        $tmp = $_POST['searchtext'];
        $sql = "select * from chitietsach,theloaisach where theloaisach.id_theloaisach=chitietsach.id_theloai order by chitietsach.id_sach desc limit 2";
    } else{
        $sql = "select * from chitietsach,theloaisach where theloaisach.id_theloaisach=chitietsach.id_theloai order by chitietsach.id_sach desc";
    }
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
                    <td><?php echo $dong['tensach'] ?></td>
                    <td><?php echo $dong['tacgia'] ?></td>
                    <td><img src="modules/chitietsach/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="auto"></td>
                    <td><?php echo $dong['theloaisach'] ?></td>
                    <td><?php echo $dong['sotrang'] ?></td>
                    <td><?php echo $dong['gia'] ?></td>
                    <td><?php echo $dong['daban'] ?></td>
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