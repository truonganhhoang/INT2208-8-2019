<?php
     include('../config.php');
     $id = $_GET[id];
     $theloaisach = $_POST['theloaisach'];
     if ($_POST['them']){
         $sql = "insert into theloaisach (theloaisach) values('$theloaisach')";
         mysqli_query($conn, $sql);
         header('location:../../index.php?quanly=quanlytheloaisach&ac=them');
     } elseif($_POST['sua']){
         $sql = "update theloaisach set theloaisach='$theloaisach' where id_theloaisach='$id'";
         mysqli_query($conn, $sql);
         header('location:../../index.php?quanly=quanlytheloaisach&ac=sua&id='.$id);
     } else{
         $sql = "delete from theloaisach where id_theloaisach='$id'";
         mysqli_query($conn, $sql);
         header('location:../../index.php?quanly=quanlytheloaisach&ac=them');
     }
?>
