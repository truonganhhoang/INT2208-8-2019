<?php
    include('../config.php');
    $username = $_POST['username'];
    $password = $_POST['password'];
    $fullname = $_POST['fullname'];
    $id = $_POST['id'];
     if (isset($_POST['sua'])){
        $sql = "update users set user_name='$username', user_password='$password', fullname='$fullname' where id_user='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=nguoidung');
     } else{
        $sql = "delete from users where id_user='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=nguoidung');
     }
?>