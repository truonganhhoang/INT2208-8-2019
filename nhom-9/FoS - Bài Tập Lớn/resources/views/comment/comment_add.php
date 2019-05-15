<?php 
	
	/*header('Content-Type: text/html; charset=utf-8');*/
	// Thiết lập kết nối
	$conn = mysqli_connect("localhost","root","","vidu") or die ('Could not connect!');
	  
	if (isset($_POST['sub_comment']))
	{
		//Lấy thông tin
	    $com_message = mysqli_real_escape_string($conn, $_POST['comment_message']);	   
	    $com_email = mysqli_real_escape_string($conn, $_POST['comment_email']);
	    if(isset($_POST['comment_anonymous'])){
	    	$com_email = null;
	    }
		
		// Thêm Dl 
	    $sql = "INSERT INTO cmt(com_message, com_email) VALUES ('$com_message', '$com_email')";
	    $query = mysqli_query($conn, $sql);
	               
	    if (!$query){
	        echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="detail.php";</script>';
	    }
	    else {
	        echo '<script language="javascript">alert("Ok"); window.location="detail.php";</script>';
	        header("Location: detail.php");
	    }

	}
    
 ?>