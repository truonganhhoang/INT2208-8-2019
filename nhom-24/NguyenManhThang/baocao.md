# Báo cáo cá nhân #

## Thông tin sinh viên ##
  * Họ và tên: Nguyễn Mạnh Thắng
  * Mã số sinh viên: 17021030
  * Nhóm: 24
  * Lớp CNPM INT2208-8-2019
  * Vai trò: Product Owner, Developer, Tester
  
## User story chịu trách nhiệm ##
  * ### Là một người có nhu cầu thuê nhà/phòng, tôi muốn tìm loại phòng phù hợp cho mục đích và điều kiện của bản thân. ###
 
## Phân tích User story và tách thành các task ##
- [x] Sử dụng MXH và các trang web khác về nhà trọ để tìm hiểu cách thức tìm người ở ghép (1.5 h)
- [x] Sau khi tìm hiểu, phân tích tìm ra những yêu cầu chính để thiết kế chức năng (2h)
 * Trang chủ: ![index](https://user-images.githubusercontent.com/43413114/57317591-a30ee580-7122-11e9-9a1a-dcad1393a66f.png)
 * Một phần chức năng, ví dụ: Phòng trọ
 ![phongtro](https://user-images.githubusercontent.com/43413114/57317670-dcdfec00-7122-11e9-8e8d-c480a357559a.png)
- [x] Tìm danh sách quận huyện và xã phường của TP Hà Nội (2h)
![danh-sach-xa-phuong](https://user-images.githubusercontent.com/43413114/57564381-f5772d00-73d4-11e9-8a2d-def630d4a571.png)
 * [Commit tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/178fa8349dfbb8024a57fb5e93d5e68f2bda85f5)
- [x] Tìm nguồn địa chỉ để tạo cơ sở dữ liệu (4h) (tại Facebook hoặc các trang như phongtot.vn, ...)
   * Nội dung lý thuyết tương ứng: [Requirements Elicitation](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex ) 
- [x] phân rã giao diện trang thành các thành phần độc lập nhau (module)
 * [Commit tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/e84df65ea0062dcabd5c4cc91621399c51708ffa)
- [x] Tạo bố cục cơ bản của trang bằng HTML và CSS cho từng module đó (1 ngày)
- [x] Sử dụng thêm Bootstrap 4 và JavaScript để trang trí thêm (2 ngày)
 * [Commit tương ứng cho 2 tasks](https://github.com/thangnmuet2017/TroTotHN/commit/b38cf3943f004d0675e619702b7e0512332c6de6)
   * Nội dung lý thuyết tương ứng: [Decomposition](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.5cskxy8rszpr) 
- [x] Thiết kế và thiết lập Cơ sở dữ liệu (4h)
 * Thiết kế của CSDL: ![database](https://user-images.githubusercontent.com/43413114/57319667-52e65200-7127-11e9-831b-03af135791ca.png)
 * [Commit tạo CSDL](https://github.com/thangnmuet2017/TroTotHN/commit/38935f7e6367a0e6da6164d07e114dd9f9098eb2)
- [x] Tạo các controller để xử lý dữ liệu (đăng nhập, đăng xuất, tải dữ liệu, kết nối database,..)
 * [Commit tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/178fa8349dfbb8024a57fb5e93d5e68f2bda85f5)
- [x] Thiết lập kết nối CSDL vào trang (3h)
- [x] Hiển thị kết quả phù hợp của chức năng (3h)
 * [Commit tương ứng cho cả 2 tasks](https://github.com/thangnmuet2017/TroTotHN/commit/f46547130766e8fb88b9463bbcf4b38b4ef0ba6e)
   * Nội dung lý thuyết tương ứng: [Design Patterns: MVC](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.kehlqoeo6d9r)
- [x] Thêm chức năng sắp xếp theo giá và thời gian đăng (3h)
 * [Commit tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/f46547130766e8fb88b9463bbcf4b38b4ef0ba6e)
   
   * Nội dung lý thuyết tương ứng: [Cải thiện thiết kế](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.k2pmncz8nvla)
- [x] Kiểm thử hộp trắng dựa trên mã nguồn, tìm các lỗi và sửa lỗi (3h) 
 * Các lỗi phát hiện:
   + Item trong bộ lọc bị sai
   + Tiêu đề đến từng kiểu phòng thiếu nhất quán
   + Link đến chi tiết từng phòng không đồng bộ nhau
   + Thời gian đăng bài bị sai
   + Những phòng không có ảnh minh họa làm xộc xệch giao diện
 * Các commit sửa lỗi mã nguồn
   + [Sửa một item của bộ lọc bị sai](https://github.com/thangnmuet2017/TroTotHN/commit/6403aa65f871118bf4d43dc1da739ebbf3911284)
   + [Sửa lịnk đến chi tiết từng phòng](https://github.com/thangnmuet2017/TroTotHN/commit/4a5ce207bdf6fdde62b09d28ef7b390ab6b34327)
   + [Lấy ra loại phòng để chèn vào đường dẫn](https://github.com/thangnmuet2017/TroTotHN/commit/f3e9a47b0d787e34106a39f8877934bf5d6ee1ed)
   + [Lấy ra kiểu phòng trong câu lệnh SQL phục vụ phương thức GET và chèn vào đường dẫn đến chi tiết phòng](https://github.com/thangnmuet2017/TroTotHN/commit/b4ced95fc8e386e90bd7179681f077aff4db507d)
   
   * Nội dung lý thuyết tương ứng: [White Box Testing](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)
- [x] Kiểm thử hộp đen dựa vào đặc tả yêu cầu, tìm các lỗi và sửa lỗi (3h)
 * Các lỗi phát hiện:
   + Chỉ sắp xếp được trang kết quả tìm kiếm đầu tiên
 * Các commit sửa lỗi chức năng
   + [Sử dụng dropdown cho sắp xếp thay vì select](https://github.com/thangnmuet2017/TroTotHN/commit/efd02e652438b817d95272dcf82ce53ca60b1af7)
   + [Loại bỏ sử dụng Ajax để sắp xếp](https://github.com/thangnmuet2017/TroTotHN/commit/68555bdbd6c07cb770e1ceeeca69858d4d80ef06)
   + [Sử dụng biến $_GET để lấy hành động sắp xếp thay vì Ajax](https://github.com/thangnmuet2017/TroTotHN/commit/4ba3fc33d3d59556679130fcc289dbfef2614bfa)
   + [Sửa câu lệnh sql thêm điều kiện sắp xếp cho căn phòng](https://github.com/thangnmuet2017/TroTotHN/commit/11a026b06f4055254d443e0894e65e193b54a429)
   
   * Nội dung lý thuyết tương ứng: [Black Box Testing](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd)
- [ ] Bảo trì, cải tiến code, tránh mã xấu (1-2 ngày) 
   * Nội dung lý thuyết tương ứng: [Refactoring](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.bxti8dsihgwm) và [Code smells](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.x5jzfha6cshw)
- [ ] Kiểm thử chấp nhận của người dùng (3h) 
   * Nội dung lý thuyết tương ứng: [Kind of tests](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.3b0u209i2c7r)
- [ ] Triển khai trên website (4h)

## Trình bày và hướng dẫn chức năng tương ứng với User story ##
 * Ta có các menu trên trang chủ bao gồm Phòng trọ, Nhà nguyên căn và Ở ghép, click vào để hiện ra từng trang. Mặc định các kết quả được sắp xếp theo thời gian đăng từ mới nhất đến cũ nhất
 ![PhongTro1](https://user-images.githubusercontent.com/43413114/57570152-3567ff80-7429-11e9-883f-6c04d56ad1c1.png)
 
 ![NhaNguyenCan](https://user-images.githubusercontent.com/43413114/57570150-34cf6900-7429-11e9-97c5-7cc435951755.png)
 
 ![OGhep](https://user-images.githubusercontent.com/43413114/57570151-3567ff80-7429-11e9-8fd0-2d32444e7541.png)
 
 * Ví dụ bây giờ ta muốn tìm danh sách tất cả các phòng trọ trên toàn thành phố, được sắp xếp theo giá giảm hay tăng dần, chọn nút "Sắp xếp giá" và chọn "Đắt nhất"/"Rẻ nhất".
![PhongTroReNhat1](https://user-images.githubusercontent.com/43413114/57564777-13945b80-73dc-11e9-897a-ac9cd30d3a1c.png)

![PhongTroReNhat2](https://user-images.githubusercontent.com/43413114/57564778-142cf200-73dc-11e9-8fd4-72d1e59bb5e4.png)

* Sắp xếp theo thời gian đăng từ cũ nhất, chọn nút "Sắp xếp thời gian" và chọn "Cũ nhất".
![SapXepCuNhat1](https://user-images.githubusercontent.com/43413114/57570218-ed95a800-7429-11e9-8b49-c18c92787879.png)

![SapXepCuNhat2](https://user-images.githubusercontent.com/43413114/57570223-f38b8900-7429-11e9-8c58-806ffb2df3e1.png)

* Click vào các kết quả tìm kiếm để xem chi tiết
![ChiTietPhong](https://user-images.githubusercontent.com/43413114/57570346-fd61bc00-742a-11e9-8fb5-7fb3e6ff16c3.png)

