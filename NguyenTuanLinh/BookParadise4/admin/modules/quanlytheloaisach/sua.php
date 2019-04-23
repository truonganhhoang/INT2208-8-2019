<meta charset="utf-8">
<?php
    $sql = "select * from theloaisach where id_theloaisach=$_GET[id]";
    $run = mysqli_query($conn, $sql);
    $dong = mysqli_fetch_array($run);
?>
<form action="modules/quanlytheloaisach/xuly.php?id=<?php echo $dong['id_theloaisach'] ?>" method="post" enctype="multipart/form-data">
    <table width="100%" border="1">
      <tbody>
        <tr>
          <td colspan="2"><div align="center">Sửa thể loại sách</div></td>
        </tr>
        <tr>
          <td>Thể loại sách</td>
          <td><input type="text" name="theloaisach" value="<?php echo $dong['theloaisach']?>"></td>
        </tr>
        <tr>
          <td colspan="2"><div align="center"><input type="submit" name="sua" id="sua" value="Sửa"></div></td>
        </tr>
      </tbody>
    </table>
</form>