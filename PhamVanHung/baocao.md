# Báo cáo cá nhân - Môn học Công nghệ phần mềm(INT2208-8-2019)

## User story

**1.Quy tắc INVEST**

- Independent: Không liên quan đến các câu chuyện người dùng khác trong dự án để đảm bảo tính thuận tiện, dễ quản lí khi thực hiện.

- Negotiable: Có thể chỉnh sửa dễ dàng bằng cách thay đổi dữ liệu, có thể thương lượng được.

- Valuable: Có giá trị lớn với người dùng, giúp người dùng tiết kiệm tối đa thời gian tìm kiếm truyện.

- Estimable: Nhóm phát triển có thể ước lượng được khối lượng công việc để thuận lợi cho việc đánh giá mức độ ưu tiên và lên kế hoạch.

- Small: Tính năng đủ nhỏ để có thể xây dựng trong thời gian tương đối (đảm bảo tính ước lượng được). có thể hoàn thành trong 10 ngày.

- Testable: Có thể kiểm thử dễ dàng, trực tiếp.

**2.Những công việc cần làm**
- [x] Đặt ra mục tiêu để thực hiện công việc(thiết kế giao diện, chia thể loại truyện trong sơ sở dữ liệu,...)
       - EDX: [Requirements Elicitation(Làm rõ yêu cầu)](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex).
- [x]  Thu thập kiến thức html, css, js, bootstrap,...để làm giao diện(3 ngày).
       - Tài liệu đọc: [W3chool](https://www.w3schools.com/).
- [x] Xây dựng giao diện thể loại truyện (2 giờ).
       - [commit](https://github.com/phamhung99/Website-truyen-tranh/commit/7c81fd96920cd0c045e98d4132082de5c108124b).
- [x] Kiểm thử giao diện với các nền tảng, kích thước màn hình(1h).
       - EDX: [Black Box Testing(Kiểm thử hộp đen)](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd).
- [x] Tìm hiểu xây dựng chức năng chia truyện theo thể loại với NodeJs, MySQL.
      - Tài liệu: [Medium.com](https://medium.com/technoetics/handling-user-login-and-registration-using-nodejs-and-mysql-81b146e37419).
      - [commit](https://github.com/phamhung99/Website-truyen-tranh/commit/1d8c86fdb10753f7330bd8a643971547bdf111fc).
- [x] Thêm thuộc tính thể loại vào trong cơ sở dữ liệu(15p).
- [x] Tạo và liên kết với cơ sở dữ liệu lưu trữ truyện (2 ngày).
      - [commit](https://github.com/phamhung99/Website-truyen-tranh/commit/daa008bb261ca791e21f78ecb6e053d20a588b50).
- [x] Xuất dữ liệu theo thể loại ra màn hình (1 ngày).
- [x] Kiểm tra xem dữ liệu xuất ra màn hình có đúng với yêu cầu.

## Giới thiệu, hướng dẫn chức năng.
 - Chức năng menu thể loại: truyện được chia thành các thể loại khác nhau(thiếu nhi, hành động,...) giúp người đọc dễ dàng tìm được nhiều truyện với thể loại muốn đọc.
 - Link trang web: [Web-truyen-tranh](https://afternoon-gorge-98922.herokuapp.com/).
 - Repositories: [Repo sản phẩm](https://github.com/phamhung99/Website-truyen-tranh).
 - [Link video demo chức năng](https://www.youtube.com/watch?v=ulxruYLofYE&feature=youtu.be).
 
## Hướng dẫn sử dụng chức năng.

  Khi bạn yêu thíhc một thể laoị truyện mà lại không biết tên truyện nào thuộc thể loại đó cả. Chọn vào phần thể loại trên thanh công cụ menu.
  
  ![alt](https://github.com/phamhung99/PhamHung/blob/master/theloai.png)
  
  Tại đây, chọn một thể loại bạn muốn đọc, màn hình sẽ trả về các truyện thuộc thể loại đó.
  Một truyện có thể được xếp vào nhiều thể loại. Ví dụ: truyện one piece có thể nằm trong 2 thể loại là hành động và harem.
    - ví dụ: chọn vào hành động màn hình sẻ trả về các truyện  như: conan, one piece,...Bạn hay chọn một truyện để đọc.
