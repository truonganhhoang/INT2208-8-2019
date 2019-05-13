<meta charset="utf-8">
<?php
    $sql = "select * from theloaisach order by id_theloaisach desc";
    $run = mysqli_query($conn, $sql);
?>
<table width="100%" border="1">
  <tbody>
    <tr>
      <td>ID</td>
      <td>Thể loại sách</td>
      <td colspan="2">Quản lý</td>
    </tr>
    <?php
      $i = 0;
      while ($dong = mysqli_fetch_array($run)){
    ?>
    <tr>
      <td><?php echo $i;?></td>
      <td><?php echo $dong['theloaisach'];?></td>
      <td><a href="index.php?quanly=quanlytheloaisach&ac=sua&id=<?php echo $dong['id_theloaisach']?>">Sửa</a></td>
      <td><a href="modules/quanlytheloaisach/xuly.php?id=<?php echo $dong['id_theloaisach']?>">Xóa</a></td>
    </tr>
    <?php
    $i = $i + 1;
    }
    ?>
  </tbody>
</table>