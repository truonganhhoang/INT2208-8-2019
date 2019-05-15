<?php
    include('../config.php');
    $id = $_POST['id'];
    if (isset($_POST['xoa'])){
        $sql = "delete from orders where orderNumber='$id'";
        mysqli_query($conn, $sql);
        header('location:../../index.php?quanly=donhang');
    }
?>