<?php
    include('../config.php');
    $theloaisach = $_POST['theloaisach'];
    $id = $_POST['id'];
    if (isset($_POST['them'])){
        $sql = "insert into types (type) values('$theloaisach')";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=theloaisach');
     } elseif (isset($_POST['sua'])){
        $sql = "update types set type='$theloaisach' where id_types='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=theloaisach');
     } else{
        $sql = "delete from types where id_types='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=theloaisach');
     }
?>