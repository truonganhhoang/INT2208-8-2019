<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="<c:url value="/resource/css/product.css" />" rel="stylesheet">
	<script src="<c:url value="/resource/js/product.js" />"></script>
</head>
<body>
    <div id="productScreen">
        <%@ include file="header.jsp" %>
            <div class="content">
                <div class="container">
                    <div class="clearfix">
                        <h2 class="page-title">Product</h2>
                        <ul class="page-control">
                            <li class="page-control-item"><a href="/BookWebMVC/index">Home</a></li>
                            <li>Product</li>
                        </ul>
                    </div>
                    <div class="product-title">
                        <div class="content-left">
                            <div class="product-img-price">
                                <div class="img-product-hero">
                                    <img src="<c:url value="${productSelected.image}" />" alt="img-product">
                                </div>
                                <div class="title-product">
                                    <h3 class="product-name-hero">${productSelected.name}</h3>
                                    <h5 class="product-price">${productSelected.priceUnitProduct}${productSelected.donVi}</h5>
                                    <p>Số lượng:</p>
                                    <div class="product-buy">
                                        <div class="option-buy">
                                            <button class="button-config" id="reduce" onclick="setChange('reduce')"><i class="fas fa-minus"></i></button>
                                            <input type="number" value="1" min="1" max="${productSelected.quantity}"  oninput="validity.valid||(value='');" id="quantity">
                                            <button class="button-config" id="increase" onclick="setChange('increase')"><i class="fas fa-plus"></i></button>
                                        </div>
                                        <p>${productSelected.quantity} sản phẩm có sẵn</p>
                                    </div>

                                    <div class="add-to-cart">
                                    	<c:if test="${sessionScope.user == null}">
                                        	<a href="#" class="add-item-cart-related"><i class="fa fa-shopping-cart"></i></a>
                                        </c:if>
                                        <c:if test="${sessionScope.user != null}">
                                        	
                                        	<a href="/BookWebMVC/add?id=${productSelected.id}" id="add-to-cart" onclick="setQuantity('addToCart')" class="add-item-cart-related"><i class="fa fa-shopping-cart"></i></a>
                                        </c:if>
                                        
                                        <c:if test="${sessionScope.user == null}">
                                        	<a href="#" class="buy-now">Mua ngay</a>
                                        </c:if>
                                        <c:if test="${sessionScope.user != null}">
                                        	<a href="/BookWebMVC/buynow?id=${productSelected.id}" id="buy-more-product" onclick="setQuantity('buyMore')" class="buy-now">Mua ngay</a>
                                        </c:if>
                                    </div>
                                </div>
                            </div>
                            <div class="description-reviews">
                                <div class="tab">
                                    <button class="tablinks" onclick="openAction(event, 'description')" id="defaultOpen">Mô tả</button>
                                    <button class="tablinks" onclick="openAction(event, 'reviews')">Đánh giá</button>
                                </div>

                                <div id="description" class="tabcontent">
                                    <p>${productSelected.productDescription}</p>
                                </div>

                                <div id="reviews" class="tabcontent">
                                    <p>Hay</p>
                                </div>
                            </div>
                            <div class="clearfix">
                                <h2 class="page-title">Sách cùng thể loại</h2>
                            </div>
                            <div class="product-list">
                                <c:forEach var="product" items="${lstProductSameCategory}">
                                    <div class="product-item-related">
                                        <a href="/BookWebMVC/product?id=${product.id}"><img src="<c:url value="${product.image}" />" alt="img-product" class="img-product-related"></a>
                                        <div class="product-item-detail-related">
                                            <h3 class="product-name-related">${product.name}</h3>
                                            <h5 class="product-price-related">${product.priceUnitProduct}${product.donVi}</h5>
                                            <div class="product-buy-detail-related">
                                                <c:if test="${sessionScope.userName == null}">
                                        			<a href="#" class="add-item-cart-related"><i class="fa fa-shopping-cart"></i></a>
                                       			</c:if>
                                        		<c:if test="${sessionScope.userName != null}">
                                        			<a href="/BookWebMVC/add?id=${productSelected.id}" class="add-item-cart-related"><i class="fa fa-shopping-cart"></i></a>
                                        		</c:if>
                                                <a href="/BookWebMVC/product?id=${product.id}" class="item-detail-related">Details<i class="fa fa-chevron-right"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </c:forEach>
                            </div>
                        </div>
                        <div class="content-right">
                            <div class="list-product">
                                <h3 class="list-product-title">New Products</h3>
                                <div class="list-product-body">
                                    <c:forEach var="product" items="${lstProductsByTime}">
                                        <div class="product-item-mini">
                                            <a class="img-product-item" href="/BookWebMVC/product?id=${product.id}">
											<img src="<c:url value="${product.image}" />" alt="img-product" class="img-product-mini">
										</a>
                                            <div class="media-body">
                                                <p class="beta-name">${product.name}</p>
                                                <span class="beta-sales-price">${product.priceUnitProduct}${product.donVi}</span>
                                            </div>
                                        </div>
                                    </c:forEach>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <%@ include file="footer.jsp" %>
    </div>
    <script>
        document.getElementById("defaultOpen").click();
    </script>
</body>
</html>