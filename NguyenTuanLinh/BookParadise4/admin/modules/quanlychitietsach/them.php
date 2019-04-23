<meta charset="utf-8">
<form action="modules/quanlychitietsach/xuly.php" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
  <tbody>
    <tr>
      <td colspan="2"><div align="center">Thêm chi tiết sách</div></td>
      </tr>
    <tr>
      <td>Tên sách</td>
      <td><input type="text" name="tensach"></td>
    </tr>
    <tr>
      <td>Hình ảnh</td>
      <td><input type="file" name="hinhanh"></td>
    </tr>
    <tr>
      <td>Tác giả</td>
      <td><input type="text" name="tacgia"></td>
    </tr>
    <tr>
      <td>Giá</td>
      <td><input type="text" name="gia"></td>
    </tr>
    <tr>
      <td>Mô tả</td>
      <td><textarea name="mota" cols="40" rows="15"></textarea></td>
    </tr>
    <tr>
      <td>Số trang</td>
      <td><input type="text" name="sotrang"></td>
    </tr>
    <?php
        $sql = "select * from theloaisach";
        $run = mysqli_query($conn, $sql);
    ?>
    <tr>
      <td>Thể loại</td>
      <td><select name="theloai">
          <?php
            while ($dong = mysqli_fetch_array($run)){
          ?>
          <option value="<?php echo $dong['id_theloaisach'] ?>"><?php echo $dong['theloaisach'] ?></option>
          <?php
            }
          ?>
          </select></td>
    </tr>
    <tr>
      <td>Đã bán</td>
      <td><input type="text" name="daban"></td>
    </tr>
    <tr>
      <td colspan="2"><div align="center"><div align="center"><input type="submit" name="them" id="them" value="Thêm"></div></td>
    </tr>
  </tbody>
</table>
</form>