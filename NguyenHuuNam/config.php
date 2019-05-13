<?php
$servername = "localhost";
$database = "booksparadise";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database) or die('Không kết nối được');

mysqli_set_charset($conn, 'UTF8');
?>