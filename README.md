# INT2208-8-2019
Môn học CNPM

## Gheets Danh sách lớp, nhóm, và tài liệu môn học

https://docs.google.com/spreadsheets/d/1hRc_sCYV6-O9ELMNNB0Y8MQ25Xu6XZmCN_Gbc7jUAuk/edit#gid=963192854

#User stories:
Là một học sinh thường xuyên phải di chuyển, tôi muốn có thể đăng nhập và truy cập chương trình học của mình để tôi có thể học bài mọi lúc mọi nơi. (<Nguyễn Nhật Minh>)

+ Validate:

1, Independent: Đây là chức năng có thể phát triển riêng không cần phụ thuộc vào các chức năng khác.
2, Negotiable: Có thể thiết kế đăng nhập tùy theo FB hay gmail do người dùng chọn.
3, Valuable: Chức năng đăng nhập giúp người dùng học mọi lúc, thậm chí khi mất thiết bị di động.
4, Estimatable: Việc thiết kế phụ thuộc chủ yếu vào database, vì vậy có thể ước tính thời gian được với phiên bản đơn giản là 1-2 ngày.
5, Small: Đủ nhỏ và đơn giản nhưng vẫn dễ hiểu với team dev.
6, Testable: Có thể dễ dàng kiểm thử bằng cách tạo một tài khoản bất kỳ.

+ Task:

1, Thiết kế giao diện đăng nhập (Gồm khung đăng nhập hoặc option đăng nhập theo các mạng xã hội tùy theo thỏa hiệp với người dùng)
2, Thực hiện truy cập và liên kết với tài khoản của các mạng xã hội khác (google hoặc facebook).
3, Thiết kế giao diện cập nhật thông tin trong lần đăng nhập đầu tiên.(tên hiển thị, số điện thoại, email 2 nhằm mục đích lấy lại tài khoản khi bị quên mật khẩu)
4, Thiết kế database lưu dữ liệu người dùng.
5, Thiết kế các giao diện profile, không cho phép truy cập khi chưa đăng nhập.
6, Thiết kế nút login, register ở vị trí phù hợp.
7, Thiết kế giao diện chứa các kiến thức của người dùng, giao diện này có thể được truy cập từ giao diện profile.
8, Thiết kế chức năng tìm kiếm người dùng theo đơn vị
9, Thực hiện ghép nối giữa database và server
10, Lập tài khoản và kiểm thử chức năng
11, Refactor lại code