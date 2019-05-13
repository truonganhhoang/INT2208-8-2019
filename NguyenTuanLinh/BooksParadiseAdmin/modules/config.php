<?php
    $tenmaychu = "localhost";
    $tentaikhoang = "root";
    $matkhau = "";
    $dbname = "booksparadise";
    $conn = mysqli_connect($tenmaychu,$tentaikhoang,$matkhau,$dbname) or die ('không kết nối được');
    mysqli_set_charset($conn, 'UTF8');
?>