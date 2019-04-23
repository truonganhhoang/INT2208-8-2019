<meta charset="utf-8">
<?php
    $sql = "select * from chitietsach where id_sach=$_GET[id]";
    $run = mysqli_query($conn, $sql);
    $dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlychitietsach/xuly.php?id=<?php echo $dong['id_sach'] ?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Sửa chi tiết sách</div></td>
      </tr>
    <tr>
      <td>Tên sách</td>
      <td><input type="text" name="tensach" value="<?php echo $dong['tensach'] ?>"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh" ><img src="modules/quanlychitietsach/uploads/<?php echo $dong['hinhanh'] ?>" width="60" height="auto"></td>
    </tr>
    <tr>
      <td>Tác giả</td>
      <td><input type="text" name="tacgia" value="<?php echo $dong['tacgia'] ?>"></td>
    </tr>
    <tr>
      <td>Giá</td>
      <td><input type="text" name="gia" value="<?php echo $dong['gia'] ?>"></td>
    </tr>
    <tr>
      <td>Mô tả</td>
      <td><textarea name="mota" cols="40" rows="15"><?php echo $dong['mota'] ?></textarea></td>
    </tr>
    <tr>
      <td>Số trang</td>
      <td><input type="text" name="sotrang" value="<?php echo $dong['sotrang'] ?>"></td>
    </tr>
    <?php
        $sql_theloai = "select * from theloaisach";
        $run_theloai = mysqli_query($conn, $sql_theloai);
    ?>
    <tr>
      <td>Thể loại</td>
      <td><select name="theloai">
          <?php
            while ($dong_theloai = mysqli_fetch_array($run_theloai)){
                if ($dong['id_theloai'] == $dong_theloai['id_theloaisach']){
          ?>
                  <option selected="selected" value="<?php echo $dong_theloai['id_theloaisach'] ?>"><?php echo $dong_theloai['theloaisach'] ?></option>
          <?php 
                } else{
          ?>
                  <option value="<?php echo $dong_theloai['id_theloaisach']?>"><?php echo $dong_theloai['theloaisach']?></option>
          <?php
                }
            }
          ?>
          </select></td>
    </tr>
    <tr>
      <td>Đã bán</td>
      <td><input type="text" name="daban" value="<?php echo $dong['daban'] ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"></div></td>
    </tr>
  </tbody>
</table>
</form>