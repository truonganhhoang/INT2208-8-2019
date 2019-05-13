<?php
    include('../config.php');
    $id = $_POST['id'];
    if (isset($_POST['xoa'])){
        $sql = "delete from comments where id_comment='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=danhgia');
    }
?>