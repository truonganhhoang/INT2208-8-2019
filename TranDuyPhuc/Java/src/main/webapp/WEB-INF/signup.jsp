<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ page language="java" contentType="text/html; charset=UTF-8"
    pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Đăng ký</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="<c:url value="/resource/css/signup.css"></c:url>" rel="stylesheet">
	<style>
	.has-error {
		color: red;
	}
</style>
</head>
<body>
    <div id="signupScreen">
        <%@ include file="header.jsp" %>
            <div class="content">
                <div class="container">
                    <div class="clearfix">
                        <h2 class="page-title">Đăng Kí</h2>
                        <ul class="page-control">
                            <li class="page-control-item"><a href="/BookWebMVC/index">Home</a></li>
                            <li>Đăng kí</li>
                        </ul>
                    </div>
                    <form:form action="/BookWebMVC/formSignUp" method="POST" modelAttribute="user">
                        <table class="content-register">
                            <tr>
                                <td>
                                    <h1 class="page-title">Đăng kí</h1>
                                </td>
                            </tr>
                            <tr>
                                <spring:bind path="email">
                                    <div class="form-group ${status.error ? 'has-error' : ''}">
                                        <td class="name-input">Email*</td>
                                        <td>
                                            <form:input path="email" type="email" cssClass="input-register" required="required" />
                                            <form:errors path="email" cssClass="has-error" />
                                        </td>
                                    </div>
                                </spring:bind>

                                <%--  <td class="name-input">Email address*</td>
						<td>
							<form:input path="email"  type="email"  cssClass="input-register" required="required"/>
						</td> --%>
                            </tr>

                            <tr>
                                <td class="name-input">Fullname*</td>
                                <td>
                                    <form:input path="name" cssClass="input-register" required="required" />
                                </td>
                            </tr>
                            <tr>
                                <td class="name-input">Address*</td>
                                <td>
                                    <form:input path="address" cssClass="input-register" required="required" />
                                </td>
                            </tr>
                            <tr>
                                <spring:bind path="phone">
                                    <div class="form-group ${status.error ? 'has-error' : ''}">
                                        <td class="name-input">Phone*</td>
                                        <td>
                                            <form:input path="phone" cssClass="input-register" required="required" />
                                            <form:errors path="phone" cssClass="has-error" />
                                        </td>
                                    </div>
                                </spring:bind>
                                <%-- <td class="name-input">Phone*</td>
						<td><form:input path="phone" cssClass="input-register" required="required"/></td> --%>
                            </tr>
                            <tr>
                                <spring:bind path="password">
                                    <div class="form-group ${status.error ? 'has-error' : ''}">
                                        <td class="name-input">Password*</td>
                                        <td>
                                            <form:password path="password" cssClass="input-register" required="required" />
                                            <form:errors path="password" cssClass="has-error" />
                                        </td>
                                    </div>
                                </spring:bind>
                                <%-- <td class="name-input">Password*</td>
						<td><form:password path="password" cssClass="input-register" required="required"/></td> --%>
                            </tr>
                            <tr>
                                <spring:bind path="rePassword">
                                    <div class="form-group ${status.error ? 'has-error' : ''}">
                                        <td class="name-input">Re password*</td>
                                        <td>
                                            <form:password path="rePassword" cssClass="input-register" required="required" />
                                            <form:errors path="rePassword" cssClass="has-error" />
                                        </td>
                                    </div>
                                </spring:bind>
                                <%-- <td class="name-input">Re password*</td>
						<td><form:password path="rePassword" cssClass="input-register" required="required"/></td> --%>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="Register" id="btn-register">
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