<?php include('connectMySql.php'); ?>
<?php
	$id = $_GET['data'];
	echo ShowProduct($conn,"SELECT * FROM products WHERE T = '$id' ");
?>