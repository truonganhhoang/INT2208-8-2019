<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="<c:url value="/resource/css/header.css" />" rel="stylesheet">
	<script src="<c:url value="/resource/js/show-cart.js" />"></script>
</head>
<body>
    <div id="headerScreen">
        <div class="header">
            <div class="header-top">
                <div class="container container-flex">
                    <ul class="header-contact">
                        <li>
                            <a href="#">
                                <i class="fas fa-home"></i>Địa chỉ
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fas fa-phone"></i>Số điện thoại
                            </a>
                        </li>
                    </ul>
                    <ul class="header-menu">
                        <c:if test="${sessionScope.user != null}">
                            <li>
                                <a href="#">
                                    <i class="fas fa-user"></i>${sessionScope.user.name}
                                </a>
                            </li>
                            <li><a href="/BookWebMVC/logout">Đăng xuất</a></li>
                        </c:if>
                        <c:if test="${sessionScope.user == null}">
                            <li><a href="/BookWebMVC/signup">Đăng kí</a></li>
                            <li><a href="/BookWebMVC/login">Đăng nhập</a></li>
                        </c:if>
                    </ul>
                </div>
            </div>
            <div class="header-mid">
                <div class="container container-flex">
                    <div class="hero-img">
                        <a href="/BookWebMVC/index">
							<img src="<c:url value="/resource/img/book-logo.png" />" alt="book logo">
						</a>
                    </div>
                    <div class="header-mid-right">
                        <div class="header-mid-margin">
                            <form action="/BookWebMVC/search" id="form-search" >
                                <input type="text" placeholder="Nhập từ khóa..." id="input-search" name="keyword">
                                <button class="fa fa-search" type="submit" id="btn-search"></button>
                            </form>
                        </div>
                        <div class="header-mid-margin">
							<div class="cart">
								<div class="cart-item">
									<div class="dropdown">
										<i class="fa fa-shopping-cart"></i>
										<c:if test="${sessionScope.user == null}">
											Giỏ hàng (Trống) 
											<button class="dropbtn fa fa-chevron-down"></button>  
										</c:if>
										<c:if test="${sessionScope.user != null}">
											<c:if test="${sessionScope.sizeCart == null || sessionScope.myCartNum == 0}">
												Giỏ hàng (Trống) 
												<button class="dropbtn fa fa-chevron-down"></button>  
											</c:if>
											<c:if test="${sessionScope.sizeCart != null && sessionScope.myCartNum != 0}">
												Giỏ hàng (${sessionScope.sizeCart}) 
												<button onclick="myFunction()" class="dropbtn fa fa-chevron-down"></button>  
												<div id="myDropdown" class="dropdown-content">
													<c:forEach var="map" items="${sessionScope.myCartItems}">
														<div class="item-in-cart">
															<a href="/BookWebMVC/product?id=${map.value.product.id}" class="link-product"><img src="<c:url value="${map.value.product.image}" />" alt="book-img"></a>
															<div class="detail-product-buy">
																<a href="/BookWebMVC/product?id=${map.value.product.id}"><p class="overide-line-height">${map.value.product.name}</p></a>
																<p>${map.value.quantityBuy} x 
																<span class="set-color">${map.value.product.priceUnitProduct}${map.value.product.donVi}</span>
																</p>
															</div>
														</div>
													</c:forEach>
													<p class="total-price">Tổng tiền: ${sessionScope.myCartTotal}$</p>
													<a href="/BookWebMVC/checkout" class="buy-total">Xem Giỏ Hàng</a>
												</div>
											</c:if>	
										</c:if>	
									</div>
								</div>
							</div>
						</div>
                    </div>
                </div>
            </div>
            <div class="header-bottom">
                <div class="container">
                    <ul class="header-nav">
                        <li><a href="/BookWebMVC/index" class="current-nav">Trang chủ</a></li>
                        <li>
                            <a class="current-nav" href="/BookWebMVC/category">Danh mục sách</a>
                            <ul class="header-sub-nav">
                                <c:forEach var="category" items="${lstCategory}">
                                    <li class="sub-list">
                                        <a href="/BookWebMVC/category?idCategory=${category.id}">${category.name} </a>
                                    </li>
                                </c:forEach>
                            </ul>
                        </li>
                        <li><a href="#" class="current-nav">Giới thiệu</a></li>
                        <li><a href="#" class="current-nav">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>