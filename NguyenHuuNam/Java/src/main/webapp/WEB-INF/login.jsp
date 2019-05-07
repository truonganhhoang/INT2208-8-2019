<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="<c:url value="/resource/css/login.css" />" rel="stylesheet">
	<style>
		.has-error {
			color: red;
		}
	</style>
</head>
<body>
    <div id="loginScreen">
        <%@ include file="header.jsp" %>
            <div class="content">
                <div class="container">
                    <div class="clearfix">
                        <h2 class="page-title">Đăng Nhập</h2>
                        <ul class="page-control">
                            <li class="page-control-item"><a href="/BookWebMVC/index">Home</a></li>
                            <li>Đăng nhập</li>
                        </ul>
                    </div>
                    <form:form action="/BookWebMVC/formLogin" method="POST" modelAttribute="user">
                        <table class="content-login">
                            <tr>
                                <td>
                                    <h1 class="page-title">Đăng nhập</h1>
                                </td>
                            </tr>
                            <tr>
                                <spring:bind path="email">
                                    <div class="form-group ${status.error ? 'has-error' : ''}">
                                        <td class="name-input">Email*</td>
                                        <td>
                                            <form:input path="email" type="email" cssClass="input-login" required="required" />
                                            <form:errors path="email" cssClass="has-error" />
                                        </td>
                                    </div>
                                </spring:bind>
                            </tr>
                            <tr>
                                <spring:bind path="password">
                                    <div class="form-group ${status.error ? 'has-error' : ''}">
                                        <td class="name-input">Password*</td>
                                        <td>
                                            <form:password path="password" cssClass="input-login" required="required" />
                                            <form:errors path="password" cssClass="has-error" />
                                        </td>
                                    </div>
                                </spring:bind>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Login" id="btn-login">
                                </td>
                            </tr>
                        </table>
                    </form:form>

                </div>
            </div>
            <%@ include file="footer.jsp" %>
    </div>
</body>
</html>