<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
	<script type="text/javascript" src="JavaScript/jquery.js"></script>
    <script type="text/javascript" src="JavaScript/jquery-ui-1.12.1/jquery-ui.js"></script>
    
    <script type="text/javascript">
    	$(document).ready(function() {
			var data = ["Nấu nướng", "Đồ gia dụng", "Thực phẩm", "Tài liệu, đề cương ", "Tài liệu ôn thi"];

		$("#search1").autocomplete({
			delay: 0,
			source: data
		});
		});
    </script>
</head>

<body>

</body>
</html>