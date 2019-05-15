<?php
    include('../config.php');
    $id = $_POST['id'];
    $tensach = $_POST['tensach'];
    $tacgia = $_POST['tacgia'];
    $gia = $_POST['gia'];
    $mota = $_POST['mota'];
    $sotrang = $_POST['sotrang'];
    $theloai = $_POST['theloai'];
    $soluong = $_POST['soluong'];
    $hinhanh = basename($_FILES['hinhanh']['name']);
    $hinhanh_tmp = $_FILES['hinhanh']['tmp_name'];
    move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
    if ($_POST['them']){
        $sql = "insert into products (title,author,cost,Description,numberpage,type,quantityInStock,image) values('$tensach', '$tacgia', '$gia', '$mota', '$sotrang', '$theloai', '$soluong', '$hinhanh')";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=chitietsach');
    } elseif ($_POST['sua']){
        if ($hinhanh == ''){
            $sql = "update products set title='$tensach', author='$tacgia', cost='$gia', Description='$mota', numberpage='$sotrang', type='$theloai', quantityInStock='$soluong' where id='$id'";
        } else{
            $sql = "update products set title='$tensach', author='$tacgia', cost='$gia', Description='$mota', numberpage='$sotrang', type='$theloai', quantityInStock='$soluong', image='$hinhanh' where id='$id'";
        }
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=chitietsach');
    } else{
        $sql = "delete from products where id='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=chitietsach');
    }
?>