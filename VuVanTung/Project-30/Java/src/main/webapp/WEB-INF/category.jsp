 <%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<c:if test="${idCategory == null}">
		<title>Thể loại</title>
	</c:if>
	<c:if test="${idCategory != null}">
		<title>${nameCategory}</title>
	</c:if>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="<c:url value="/resource/css/category.css" />">
</head>
<body>
	<div id="categoryScreen">
		<%@ include file="header.jsp" %>
		<div class="content">
			<div class="container">
				<div class="clearfix">
					<h2 class="page-title">Thể loại</h2>
					<ul class="page-control">
						<li class="page-control-item"><a href="/BookWebMVC/index">Home</a></li>
						<li>Thể loại</li>
					</ul>
				</div>
				<div class="content-hero">
					<div class="content-left">
						<ul class="categories">
							<c:forEach var="category" items="${lstCategory}">
								<li class="category-item"><a href="/BookWebMVC/category?idCategory=${category.id}">${category.name}</a></li>
							</c:forEach>
						</ul>
					</div>
					<c:if test="${idCategory == null}">
						<div class="content-right">
							<div class="title-product">
								<h2 class="page-title">New Products</h2>
							</div>
							<c:forEach var="newProduct" items="${lstProductsByTime}" begin="0" end="2">
								<div class="product-item">
									<a href="/BookWebMVC/product?id=${newProduct.id}"><img src="<c:url value="${newProduct.image}" />" alt="product" class="img-product"></a>
									<div class="product-item-detail">
										<h3 class="product-name">${newProduct.name}</h3>	
										<h5 class="product-price">${newProduct.priceUnitProduct}${newProduct.donVi}</h5>
										<div class="product-buy-detail">
											<c:if test="${sessionScope.user == null}">
                                        		<a href="#" class="add-item-cart"><i class="fa fa-shopping-cart"></i></a>
                                       		</c:if>
                                        	<c:if test="${sessionScope.user != null}">
                                        		<a href="/BookWebMVC/add?id=${newProduct.id}" class="add-item-cart"><i class="fa fa-shopping-cart"></i></a>
                                        	</c:if>
											<a href="/BookWebMVC/product?id=${newProduct.id}" class="item-detail">Details<i class="fa fa-chevron-right"></i></a>
										</div>
									</div>
								</div>
							</c:forEach>
							
							<div class="title-product">
								<h2 class="page-title">Top Products</h2>
							</div>
							
							<c:forEach var="productByPrice" items="${lstProductByPrice}" begin="0" end="2">
								<div class="product-item">
									<a href="/BookWebMVC/product?id=${productByPrice.id}"><img src="<c:url value="${productByPrice.image}" />" alt="product" class="img-product"></a>
									<div class="product-item-detail">
										<h3 class="product-name">${productByPrice.name}</h3>	
										<h5 class="product-price">${productByPrice.priceUnitProduct}${productByPrice.donVi}</h5>
										<div class="product-buy-detail">
											<c:if test="${sessionScope.user == null}">
                                        		<a href="#"  class="add-item-cart"><i class="fa fa-shopping-cart"></i></a>
                                       		</c:if>
                                        	<c:if test="${sessionScope.user != null}">
                                        		<a href="/BookWebMVC/add?id=${productByPrice.id}" class="add-item-cart"><i class="fa fa-shopping-cart"></i></a>
                                        	</c:if>
											<a href="/BookWebMVC/product?id=${productByPrice.id}" class="item-detail">Details<i class="fa fa-chevron-right"></i></a>
										</div>
									</div>
								</div>
							</c:forEach>
						</div>					
					</c:if>
					<c:if test="${idCategory != null}">
						<div class="content-right">
							<div class="title-product">
								<h2 class="page-title">${nameCategory}</h2>
							</div>
							<c:forEach var="productByCategory" items="${lstProductByCategory}">
								<div class="product-item">
									<a href="/BookWebMVC/product?id=${productByCategory.id}"><img src="<c:url value="${productByCategory.image}" />" alt="product" class="img-product"></a>
									<div class="product-item-detail">
										<h3 class="product-name">${productByCategory.name}</h3>	
										<h5 class="product-price">${productByCategory.priceUnitProduct}${productByCategory.donVi}</h5>
										<div class="product-buy-detail">
											<c:if test="${sessionScope.user == null}">
                                        		<a href="#" class="add-item-cart"><i class="fa fa-shopping-cart"></i></a>
                                       		</c:if>
                                        	<c:if test="${sessionScope.user != null}">
                                        		<a href="/BookWebMVC/add?id=${productByCategory.id}" class="add-item-cart"><i class="fa fa-shopping-cart"></i></a>
                                        	</c:if>
											<a href="/BookWebMVC/product?id=${productByCategory.id}" class="item-detail">Details<i class="fa fa-chevron-right"></i></a>
										</div>
									</div>
								</div>
							</c:forEach>
						</div>
					</c:if>
				</div>
			</div>
		</div>	
		<%@ include file="footer.jsp" %>
	</div>
</body>
</html>