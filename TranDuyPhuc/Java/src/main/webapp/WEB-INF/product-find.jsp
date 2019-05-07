<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tìm kiếm</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="<c:url value="/resource/css/product-find.css" />" rel="stylesheet">
</head>
<body>
	<div id="productFind">
		<%@ include file="header.jsp" %>
		<div class="content">
			<div class="container">
				<div class="clearfix changeBot">
					<h2 class="page-title">Kết quả tìm kiếm: <span>${keyword}</span></h2>
					<h5 class="quantity-product-search">có ${lstProductSearch.size()} sản phẩm</h5>
				</div>
				<c:forEach var="productSearch" items="${lstProductSearch}">
                	<div class="product-item">
                    	<a href="/BookWebMVC/product?id=${productSearch.id}"><img src="<c:url value="${productSearch.image}" />" class="img-product"></a>
                        <div class="product-item-detail">
							<h3 class="product-name">${productSearch.name}</h3>
                            <h5 class="product-price">${productSearch.priceUnitProduct}${productSearch.donVi}</h5>
                            <div class="product-buy-detail">
                            	<a href="/BookWebMVC/add?id=${productSearch.id}" class="add-item-cart"><i class="fa fa-shopping-cart"></i></a>
                               	<a href="/BookWebMVC/product?id=${productSearch.id}" class="item-detail">Details<i class="fa fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </c:forEach>
			</div>
		</div>	
		 <%@ include file="footer.jsp" %>
	</div>
</body>
</html>