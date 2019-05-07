<%@ taglib uri = "http://java.sun.com/jsp/jstl/core" prefix = "c" %>
<%@ taglib prefix="spring" uri="http://www.springframework.org/tags"%>
<%@ taglib prefix="form" uri="http://www.springframework.org/tags/form"%>
<%@ page language="java" contentType="text/html; charset=UTF-8" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link href="<c:url value="/resource/css/footer.css" />" rel="stylesheet">
</head>
<body>
    <div id="footerScreen">
        <div class="footer">
            <div class="footer-top">
                <div class="container container-flex-bot">
                    <div class="instagram">
                        <h1 class="info-title">Instagram Feed</h1>
                    </div>
                    <div class="information">
                        <h1 class="info-title">Information</h1>
                        <ul class="information-sub">
                            <li>
                                <a href=""><i class="fa fa-chevron-right"></i>
								Web Design
							</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-chevron-right"></i>
								Web Development
							</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-chevron-right"></i>
								Marketing
							</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-chevron-right"></i>
								Tips
							</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-chevron-right"></i>
								Resources
							</a>
                            </li>
                            <li>
                                <a href=""><i class="fa fa-chevron-right"></i>
								Illustrations
							</a>
                            </li>
                        </ul>
                    </div>
                    <div class="contact">
                        <div class="contact-sub">
                            <h1 class="info-title">Contact Us</h1>
                            <i class="fas fa-map-marker-alt"></i>
                            <p class="font-size-p">30 South Park Avenue San Francisco, CA 94108 Phone: +78 123 456 78</p>
                            <p class="font-size-p">Nemo enim ipsam voluptatem quia voluptas sit asnatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione.</p>
                        </div>
                    </div>
                    <div class="subscribe">
                        <h1 class="info-title">Newsletter Subscribe</h1>
                        <form action="/">
                            <input type="text" id="input-subscribe">
                            <button class="btn-subscribe" type="submit">Subscribe <i class="fa fa-chevron-right"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container footer-bottom-flex">
                    <p class="pull-left">Privacy policy. (©) 2014</p>
                    <p class="pull-right">
                        <a href="#">
						<img src="<c:url value="/resource/img/rectangle.jpg" />" alt="linhtinh">
					</a>
                        <a href="#">
						<img src="<c:url value="/resource/img/rectangle.jpg" />" alt="linhtinh">
					</a>
                        <a href="#">
						<img src="<c:url value="/resource/img/rectangle.jpg" />" alt="linhtinh">
					</a>
                        <a href="#">
						<img src="<c:url value="/resource/img/rectangle.jpg" />" alt="linhtinh">
					</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>