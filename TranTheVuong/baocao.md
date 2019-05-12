# BÁO CÁO CÁ NHÂN - DỰ ÁN PHẦN MỀM TRÒ CHƠI TRẮC NGHIỆM QUIZY

**Họ tên:** Trần Thế Vượng<br/>
**MSSV:** 17021142<br/>
**Nhóm:** 19

## USER STORY

	Là một người chơi, tôi muốn có một bảng xếp hạng level để biết mình đang ở đâu.

## Đánh giá dựa trên INVEST

- Independent: user story này độc lập với các user story khác.

- Negotiable: có thể đàm phán. Tính năng này có thể đàm phán để có thể phát triển hơn nữa trong tương lai.

- Variable: có giá trị với người dùng. Người dùng biết bản thân đang ở vị trí nào để có thể cố gắng hơn, nâng cao vị trí trong Bảng Xếp Hạng.

- Estimate: có thể ước lượng. Có thể ước lượng số lượng công việc phải làm.

- Small: đủ nhỏ để xây dựng trong một thời gian không quá dài.

- Testable: có thể kiểm thử.

## Các công việc cần làm

- [x] Thu thập, phân tích và xử lý yêu cầu (tài liệu: [Specifications](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex) )

- [x] Viết User story. Đánh giá User story theo tiêu chí INVEST (tài liệu: [INVEST Guidelines](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.q7gf6fh2jgdn) )

- [x] Xác định các Component cần cho User story

- [x] Vẽ sơ đồ tương tác theo mô hình MVC (tài liệu: [Design Partner: MVC](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.kehlqoeo6d9r) )

- [x] Viết API cho Rank (tài liệu: [APIs](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.8wbcxnd04jqr) )

	+ Tạo model trừu tượng AbstractRank (commit: [link](https://github.com/19team/INT2208-8-2019/commit/b9356b63448d1e95504f095640171630583b9de0) )
	+ Tạo model LevelRank kế thừa AbtractRank (commit: [link](https://github.com/19team/INT2208-8-2019/commit/3fb2fba197099e7aac98109cc0eaf3a854ee8b2f) )
	+ Tạo các phương thức điều khiển trong Rank API (commit: [link](https://github.com/19team/INT2208-8-2019/commit/c146a4b469b9e91a0a57d35cc0982eeca1fd0f6a) )
	+ Tạo các routes điều hướng trong Rank API (commit: [link](https://github.com/19team/INT2208-8-2019/commit/28ec5445faa6489aafd746c45128ce3cc3d3e664) )

- [x] Tạo các mốc điểm kinh nghiệm cho level (commit: [link](https://github.com/19team/INT2208-8-2019/commit/4c2c1b501c38ead2c0d001a4105c7dd761c6f54c) )

- [x] Thiết kế giao diện cho Rank

	+ Tạo khung giao diện bằng HTML5 (tài liệu: [HTML5](https://www.w3schools.com/html/default.asp), commit: [link](https://github.com/19team/INT2208-8-2019/commit/d4ce6eeae99bcd3adb7ff2c4b1d135073f26ea96) )
	+ Sử dụng CSS để trang trí cho trang web (tài liệu: [CSS](https://www.w3schools.com/css/default.asp), commit: [link](https://github.com/19team/INT2208-8-2019/commit/d02d2d3dd6335584162c3a75cd6857a55b98117a) )

- [x] Kiểm thử 

	+ Kiểm thử hộp đen (tài liệu: [Black box testing](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd) )
	+ Kiểm thử hộp trắng (tài liệu: [White box testing](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1) )
	
- [x] Tái cấu trúc mã nguồn, cải tiến các đoạn mã nguồn chưa tối ưu (tài liệu: [Refactoring](http://bit.ly/2UxULb2) )

- [x] Thêm comment vào các vị trí cần thiết để code dễ đọc và quản lí hơn (tài liệu: [Rules for commenting code](https://www.hongkiat.com/blog/source-code-comment-styling-tips/), commit: [link](url))

## Giới thiệu/hướng dẫn sử dụng tính năng của sản phẩm trên sản phẩm 

- **Tính năng:** Bảng xếp hạng

- **Mục đích:** Người dùng có thể xem cấp độ của mình, so sánh với những người chơi khác

-**Hướng dẫn:** Sau khi đăng nhập thành công, người dùng chỉ cần click vào *Bảng xếp hạng* ở *Header*

	![hướng dẫn](https://user-images.githubusercontent.com/38174506/57578456-1b74fe00-74b7-11e9-980a-51dc415afe06.png)

	+ Bảng xếp hạng có TOP 10 người chơi có thành tích cao nhất và bao gồm người chơi hiện tại
	+ Vị trí TOP 3 có 3 màu sắc khác nhau và không thay đổi, kể cả khi người đang chơi ở TOP 3
	+ Nếu người đang chơi ngoài TOP 3, vị trí người đang chơi có màu nền là xanh
	
	![từ vị trí 12 trở xuống](https://user-images.githubusercontent.com/38174506/57578448-0dbf7880-74b7-11e9-8d4a-c539c86620aa.png)
	![vị trí 11](https://user-images.githubusercontent.com/38174506/57578450-1021d280-74b7-11e9-81ca-ec60233e4223.png)
	![vị trí từ 4 đến 10](https://user-images.githubusercontent.com/38174506/57578452-12842c80-74b7-11e9-98f9-fc33b62cb59a.png)
	![Vị trí trong top 3](https://user-images.githubusercontent.com/38174506/57578455-1617b380-74b7-11e9-8c29-bdf59d371f7b.png)

- [Video](url)

