<?php
    include('../config.php');
    $theloaisach = $_POST['theloaisach'];
    $id = $_POST['id'];
    if (isset($_POST['them'])){
        $sql = "insert into theloaisach (theloaisach) values('$theloaisach')";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=theloaisach');
     } elseif (isset($_POST['sua'])){
        $sql = "update theloaisach set theloaisach='$theloaisach' where id_theloaisach='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=theloaisach');
     } else{
        $sql = "delete from theloaisach where id_theloaisach='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=theloaisach');
     }
?>