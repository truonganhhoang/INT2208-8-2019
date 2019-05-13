#### Họ Tên: Đặng Thị Ngọc Ánh
#### Ngày Sinh: 18/12/1999
#### Mã Sinh Viên: 17020597
#### Nhóm dự án: [Nhóm 28](https://github.com/Nguyenhuy2801/nhom-28)


# Báo cáo công việc phụ trách trong dự án nhóm

### Câu chuyện người dùng:Là một người dùng, tôi muốn trang web có chức năng có thể hiển thị danh sách các món ăn theo nguyên liệu, để tôi có thể tìm kiếm những công thức nấu ăn theo nguyên liệu mà tôi có. 
### Quy tắc INVEST:
 - Independent: chức năng hiển thị món ăn theo nguyên liệu là độc lập với các chức năng khác.
 - Negotiable: câu chuyện này có thể thương lượng vì nó có thể phân tích thành các nhiệm vụ nhỏ như tạo thêm button tìm món ăn theo nguyên liệu , tạo bảng nguyên liệu trong database, kết nối với giao diện tìm món ăn theo nguyên liệu.
 - Valuable: câu chuyện này có ý nghĩa tìm kiếm những công thức nấu ăn theo nguyên liệu người dùng đưa ra.
 - Estimable: tính năng này được ước tính về chi phí là 4 giờ tương ứng với 4 công việc cần làm.
 - Small: nó chỉ là một tính năng đơn giản.
 - Testable: tính năng này có thể kiểm tra để trả về kết quả mà người dùng mong muốn.

### Công việc cần làm:

- [x]  [Phân tích yêu cầu người dùng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex): trang web có chức năng hiển thị danh sách món ăn theo nguyên liệu.

- [x] Cập nhật lại giao diện chính.
+[commit](https://github.com/Nguyenhuy2801/nhom-28/commit/6e767c0d69d330be5287aa5494b7d2232f1d9982)

- [x]  [Thiết kế giao diện món ăn theo nguyên liệu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#)
+[commit](https://github.com/Nguyenhuy2801/nhom-28/commit/f6f6f4d33735e405d7693ee167929289f9ff3089)

- [x] Tìm kiếm công thức theo thành phần, nguyên liệu ( thừa kế từ giao diện chính)
+[commit](https://github.com/Nguyenhuy2801/nhom-28/commit/f6f6f4d33735e405d7693ee167929289f9ff3089)

- [x] [Tạo thêm bảng nguyên liệu trong database](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#): chứa id và tên nguyên liệu để trỏ đến bảng công thức món ăn

- [x] Bảng món ăn thêm foreign key là id của bảng nguyên liệu ([tài liệu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.gk2kwayhjxq4))

- [x] Kết nối full text search: elasticsearch với flask-sqlalchemy. 
+[commit](https://github.com/Nguyenhuy2801/nhom-28/commit/7242c97021755cb551cf7cea1b3806f8c92e4065)

- [x] [Viết phương thức truy cập giao diện món ăn theo nguyên liệu và kết nối database](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#)
+[commit](https://github.com/Nguyenhuy2801/nhom-28/commit/3b3c5d746c417dc90bf57607e6c6c9065f36d304)

- [x] [Viết lệnh truy vấn](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#) trả về danh sách món ăn theo nguyên liệu gợi ý cho người dùng.
+[commit](https://github.com/Nguyenhuy2801/nhom-28/commit/7780318d0f53a8d048832223b91d28558fb0fb22)

- [x] [Đánh giá đúng sai](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.2p5iil2k2k1x)

- [x] [Cải tạo mã dễ đọc](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zihsvljsrx0x)

##### Testing
- [x] Kiểm thử hộp trắng độ bao phủ  ([tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1))

- [x] Kiểm thử giao diện  ([tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd))

- [x] Cho các thành viên trong nhóm kiểm thử và dùng thử, mời 1 số người dùng trải nghiệm

- [x] Triển khai ứng dụng ([link ứng dụng](http://foodforfamilyf3.pythonanywhere.com))

# Tổng hợp quá trình làm bài tập nhóm

- **Repo sản phẩm được triển khai tại [Github](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/tree/congky)**

- **Link Vieo báo cáo và demo user story tại: [Youtube](https://www.youtube.com/watch?v=O0xD-tGpk_A)**

- **Sản phẩm được deloy sử dụng pythonanywhere:** 
+ >**Trang chủ http://foodforfamilyf3.pythonanywhere.com**
+ >**Báo cáo nhóm: [Link README](https://github.com/Nguyenhuy2801/nhom-28/blob/master/Project_28/flask_project/README.md)**

