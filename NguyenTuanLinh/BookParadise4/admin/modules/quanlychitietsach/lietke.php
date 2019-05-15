<meta charset="utf-8">
<?php
    $sql = "select * from chitietsach,theloaisach where theloaisach.id_theloaisach=chitietsach.id_theloai order by chitietsach.id_sach desc";
    $run = mysqli_query($conn, $sql);
?>
<table width="100%" border="1">
  <tbody>
    <tr>
      <td>ID</td>
      <td>Tên sách</td>
      <td>Hình ảnh</td>
      <td>Tác giả</td>
      <td>Giá</td>
      <td>Số trang</td>
      <td>Thể loại</td>
      <td>Đã bán</td>
      <td colspan="2">Quản lý</td>
    </tr>
    <?php
      $i = 0;
      while ($dong = mysqli_fetch_array($run)){
    ?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $dong['tensach'];?></td>
      <td><img src="modules/quanlychitietsach/uploads/<?php echo $dong['hinhanh'];?>" width="60" height="auto"></td>
      <td><?php echo $dong['tacgia'];?></td>
      <td><?php echo $dong['gia'];?></td>
      <td><?php echo $dong['sotrang'];?></td>
      <td><?php echo $dong['theloaisach'];?></td>
      <td><?php echo $dong['daban'];?></td>
      <td><a href="index.php?quanly=quanlychitietsach&ac=sua&id=<?php echo $dong['id_sach']?>">Sửa</a></td>
      <td><a href="modules/quanlychitietsach/xuly.php?id=<?php echo $dong['id_sach']?>">Xóa</a></td>
    </tr>
    <?php
        $i = $i + 1;
      }
    ?>
  </tbody>
</table>
