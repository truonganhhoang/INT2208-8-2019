#### Họ Tên: Lê Công Kỳ
#### Ngày Sinh: 02/11/1999
#### Mã Sinh Viên: 17020842
#### Nhóm dự án: [Nhóm 10](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/blob/master/README.md)


# Báo cáo công việc phụ trách trong dự án nhóm

### Câu chuyện người dùng: Là một người quản lý tôi muốn có một danh sách các môn học để biết tổng quan về các đề thi liên quan.

### Phân tích câu chuyện người dùng

#### Nội dung: 
+ Có một danh sách các môn học hiển thị trong bảng và mỗi môn học sẽ hiển thị thông tin trên một hàng. Mỗi môn học có một ô checkbox và ba nút nhấn (edit, delete, show chart) để thực hiện thao tác ứng với chức năng của nó. 
+ Có một nút nhấn để thêm môn học mới, khi nhấn vào nó thì sẽ hiện lên một modal để ghi thông tin và khi submit thì có hiển thị thông báo thêm thành công hoặc không.
+ Có chức năng  xóa nhiều môn học, thay đổi trạng thái nhiều môn học.
+ Có phần tìm kiếm theo từ khóa và có phần lọc danh sách theo trạng thái môn học.
+ Trên bảng danh sách môn học có các phần để sắp xếp các môn học theo tên, trạng thái, thời gian tạo môn học.
+ Có thể phân trang danh sách môn học với số môn học cụ thể trên một trang.

#### Các công việc cần làm

- [x] Phân tích rõ yêu cầu khách hàng về giao diện và chức năng( 2h ) ([cụ thể](https://docs.google.com/document/d/1jKoMBMpRJ0eCefOzNS66KRqH9XkNAEAY19WdQXQQPHo/edit?usp=sharing))

- [x] Tìm hiểu câu chuyện người dùng(User story) ([tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.pxfsgxtlm12o))

- [x] Tìm hiểu và lựa chọn mô hình MVC(Design Patterns: MVC) ([tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.kehlqoeo6d9r))

- [x] Tìm hiểu nguyên lí chia nhỏ giao diện (Interface segregation principle) ([Tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.t50jyopjk04o))

- [x] Tìm hiểu mẫu thiết kế trạng thái (design patterns: state) ([tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.n7eoxfhzn2gn))

- [x] Tìm hiểu về API ([tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.1ir22jw41cpg))

- [x] Thiết kế khung hình giao diện gồm check box , table content, button, dropdown ( 2h )

- [x] Viết mã html, css ( 2h ) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/deeea0b8e00ee75e6ee78c0144c18eec032d91a7), [lần 2](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/a46f24526ec97038db940fdc96912710de3f4a1e))

- [x] Gọi  API trả về dữ liệu danh sách môn học( 2h) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/c793753a2b7c4feb17e740e505a267aa1843dd45))

- [x] Gọi API thay đổi trạng thái một môn học( 1h) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/c6109a2fa50d03540bc2fac5d510470bb77edbce))

- [x] Gọi API thay đổi trạng thái nhiều môn học (1h) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/1c9bdac813a601ce0836a2f68e1633442d7abd76), [lần 2](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/ad77d0abb4142fc094432f56e5fede1ce7082b7f))

- [x] Gọi API để xóa một môn học (1h) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/7ab5ec3058a80b7a36729ef5b4b9f3c8f916a650))

- [x] Gọi API để thêm, sửa một môn học (1h) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/393e006fe9ec9c7deb024772e6a33c6054745efb))

- [x] Xử lí thông báo thành công hoặc không thành công khi thêm hoặc sửa môn học (1h) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/1b30e9c8931cc356f9fae90b5d4f83e175b948a7))

- [x] Lọc danh sách môn theo tùy chọn (theo trạng thái hoặc tìm kiếm môn học) (1h) 
(commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/7aaf43cc54f2fdf3ed630a6cf4cbaa5e8be69f8c))

- [x] Sắp xếp môn học theo các tính chất khác nhau (1h) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/84f402c66a4c81113004a1b462ef5aca84cac958))

- [x] Tạo chức năng phân trang (1h) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/67e2458309c8ea5351375d4b73d55bed03dde553))

- [x] Ghi chú, cải thiện mã nguồn (clean code) ([tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ocf6iosigvwc)) (commit: [lần 1](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/c189b0663e223d2ad5f1082dfca49043b901d00a))

##### Testing
- [x] Kiểm thử hộp trắng độ bao phủ  ([tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1))

- [x] Kiểm thử giao diện  ([tài liệu tham khảo](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd))

- [x] Cho các thành viên trong nhóm kiểm thử và dùng thử, mời 1 số người dùng trải nghiệm

- [x] Triển khai ứng dụng ([link ứng dụng](http://luyenthi365.xyz))

# Tổng hợp quá trình làm bài tập nhóm

- **Repo sản phẩm được triển khai tại [Github](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/tree/congky)**

- **Link Vieo báo cáo và demo user story tại: [Youtube](https://www.youtube.com/watch?v=O0xD-tGpk_A)**

- **Sản phẩm được deloy sử dụng ec2 và s3 của amazon:** 
+ >**Trang chủ http://luyenthi365.xyz**
+ >**Trang quản trị [Link](http://webthi-angular.s3-website-ap-southeast-1.amazonaws.com)**
+ >**Link dự phòng [Link](http://luyenthi365.xyz.s3-website-ap-southeast-1.amazonaws.com)**
+ >**Báo cáo nhóm: [Link README](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/blob/master/README.md)**

