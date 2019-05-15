<?php
    include('../config.php');
    $id = $_GET[id];
    $tensach = $_POST['tensach'];
    $tacgia = $_POST['tacgia'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $sotrang = $_POST['sotrang'];
    $theloai = $_POST['theloai'];
    $daban = $_POST['daban'];
    $hinhanh = basename($_FILES['hinhanh']['name']);
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
    if ($_POST['them']){
        $sql = "insert into chitietsach (tensach,tacgia,gia,mota,sotrang,id_theloai,daban,hinhanh) values('$tensach', '$tacgia', '$gia', '$mota', '$sotrang', '$theloai', '$daban', '$hinhanh')";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=quanlychitietsach&ac=them');
    } elseif ($_POST['sua']){
        if ($hinhanh == ''){
            $sql = "update chitietsach set tensach='$tensach', tacgia='$tacgia', gia='$gia', mota='$mota', sotrang='$sotrang', id_theloai='$theloai', daban='$daban' where id_sach='$id'";
        } else{
            $sql = "update chitietsach set tensach='$tensach', tacgia='$tacgia', gia='$gia', mota='$mota', sotrang='$sotrang', id_theloai='$theloai', daban='$daban', hinhanh='$hinhanh' where id_sach='$id'";
        }
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=quanlychitietsach&ac=sua&id='.$id);
    } else{
        $sql = "delete from chitietsach where id_sach='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=quanlychitietsach&ac=them');
    }
?>