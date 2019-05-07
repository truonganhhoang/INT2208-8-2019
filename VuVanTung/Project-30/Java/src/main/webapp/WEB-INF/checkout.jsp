<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Check out</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="<c:url value="/resource/css/checkout.css" />" rel="stylesheet">
	<script src="<c:url value="/resource/js/checkout.js" />"></script>
</head>

<body>
    <div id="checkoutScreen">
    	<%@ include file="header.jsp" %>
        <div class="content">
            <div class="container">
                <div class="clearfix">
                    <h2 class="page-title">Đặt hàng</h2>
                    <ul class="page-control">
                        <li class="page-control-item"><a href="#">Home</a></li>
                        <li>Đặt hàng</li>
                    </ul>
                </div>
                <div class="detail-cart">
                    <table class="list">
                        <tr>
                            <th class="san-pham" colspan="2">Sản phẩm</th>
                            <th class="don-gia">Đơn giá</th>
                            <th class="so-luong">Số lượng</th>
                            <th class="so-tien">Số tiền</th>
                            <th class="thao-tac">Thao tác</th>
                        </tr>
                        <c:forEach var="map" items="${sessionScope.myCartItems}">
                        	<tr>
	                            <td>
	                            	<a href="/BookWebMVC/product?id=${map.value.product.id}">
	                            		<img src="<c:url value="${map.value.product.image}"/>"  class="img-check-out" alt="book-buy">
	                            	</a>
	                            </td>
	                            <td>${map.value.product.name}</td>
	                            <td>
	                                <span id="don-gia">${map.value.product.priceUnitProduct}</span>${map.value.product.donVi}
	                            </td>
	                            <td>
	                                <div class="option-buy">
	                                    <button class="button-config" id="reduce" onclick="setChange('reduce')"><i class="fas fa-minus"></i></button>
	                                    <input type="number" value="${map.value.quantityBuy}" id="quantity" min="1" max="${map.value.product.quantity}" oninput="validity.valid||(value='');">
	                                    <button class="button-config" id="increase" onclick="setChange('increase')"><i class="fas fa-plus"></i></button>
	                                </div>
	                            </td>
	                            <td>
	                                <span id="so-tien">${map.value.product.priceUnitProduct*map.value.quantityBuy}</span>${map.value.product.donVi}
	                            </td>
	                            <td>
	                                <a href="/BookWebMVC/remove?id=${map.value.product.id}" id="delete-product-in-cart">Xóa</a>
	                            </td>
                        	</tr>
                        </c:forEach>
                      
                       
                    </table>

                </div>

            </div>
            <div class="container">
                <form:form>
                	<table class="information-buyer">
	                    <tr>
	                        <td>Người nhận hàng:</td>
	                        <td> ${sessionScope.user.name}</td>
	                    </tr>
	                    <tr>
	                        <td class="name-input">Số điện thoại:</td>
	                        <td>
	                            <input type="number" class="input-login" value = "${sessionScope.user.phone}" required>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td class="name-input">Địa chỉ</td>
	                        <td>
	                            <input type="text" class="input-login" value = "${sessionScope.user.address}" required>
	                        </td>
	                    </tr>
	                    <tr>
	                        <td class="tong-thanh-toan">
	                            Tổng tiền hàng:
	                        </td>
	                        <td><span class="tong-tien"> ${sessionScope.myCartTotal}$</span></td>
	                    </tr>
               		</table>
               		<input type="submit" value="Đặt hàng" id="buy-now">
                </form:form>
            </div>
        </div>
        <%@ include file="footer.jsp" %>
    </div>
</body>

</html>