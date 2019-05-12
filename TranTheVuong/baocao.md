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

- [x] Thu thập, phân tích và xử lý yêu cầu (1h) (tài liệu: [Specifications](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex) )

- [x] Viết User story. Đánh giá User story theo tiêu chí INVEST (30p) (tài liệu: [INVEST Guidelines](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.q7gf6fh2jgdn) )

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

## Giới thiệu/hướng dẫn sử dụng tính năng của sản phẩm trên sản phẩm 
- [Video](url)

