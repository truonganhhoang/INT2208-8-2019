<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Quản lý sản phẩm</title>
	<script type="text/javascript" src="<c:url value="/resource/js/manage-product.js" />"></script>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
	<form action="/BookWebMVC/formManageProduct", method="POST">
		<table id="customers">
		  <tr>
		    <th>Hình ảnh</th>
		    <th>Tên sách</th>
		    <th>Số lượng</th>
		    <th>Mô tả</th>
		    <th>Đơn giá</th>
		    <th>Đơn vị tiền</th>
		    <th>Thể loại</th>
		    <th colspan="2">Lựa chọn</th>
		  </tr>
		  <c:forEach var="product" items="${lstProductAll}">
		        <tr>
		        	<td>${product.image}</td>
			        <td>${product.name}</td>
			        <td>${product.quantity}</td>
			        <td>${product.productDescription}</td>
			        <td>${product.priceUnitProduct}</td>
			        <td>${product.donVi}</td>
			        <td>${product.category.name}</td>
			        <td><input type="submit" name="EditProduct" value="Edit" onclick="setModeActive('Edit',  ${product.id} )"></td>
			        <td><input type="submit" name="DeleteProduct" value="Delete" onclick="setModeActive('Delete',  ${product.id})"></td>
		        </tr>
		  </c:forEach>
		  <input id="modeActive" type="hidden" name="modeActive" value="1" />
		  <input type="hidden" name="idProduct" id="idProduct" value="2" />
		  <input type="submit" name="AddProduct" value="Add" onclick="setModeActive('Add')">
		</table>
	</form>
</body>
</html>
