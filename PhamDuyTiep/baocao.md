# Báo cáo cá nhân - Môn học Công nghệ phần mềm (INT2208-8-2019)

## User story
***"Là một người đọc truyện, tôi muốn có tài khoản đăng nhập để có thể tương tác với những bạn đọc khác và admin trang web."***

**1.Quy tắc INVEST:** 

- Independent: Độc lập với tất cả các User Story khác. Không trùng ý tưởng.
- Negotiable: Chức năng này có thể thương lượng để các thành viên nhóm cùng xây dựng. Với người dùng trao đổi về giao diện sao cho hợp lý.
- Valuable: Giúp bạn đọc có thể bày tỏ cảm nghĩ cá nhân về truyện với người khác và đóng góp ý kiến cho admin trang web.
- Estimable: Thu thập kiến thức và thực hiện xây dựng trong khoảng 2 ngày.
- Small: Chức năng đủ nhỏ để xây dựng trong thời gian ngắn và chia thành các công việc nhỏ để làm.
- Testable: Có thể kiểm thử được: tạo thứ 3 tài khoản và đăng nhập. Sau đó dùng đăng nhập thử.
 
 **2.Công việc cần làm:**
- [x] Đặt ra mục tiêu để thực hiện công việc(thiết kế giao diện, điều hướng đăng nhập, đăng ký,...)
       - EDX: [Requirements Elicitation(Làm rõ yêu cầu)](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex).
- [x] Học kiến thức về html, css, js, bootstrap, ... để áp dụng làm giao diện cần thiết. 
       - Tài liệu đọc: [W3chool](https://www.w3schools.com/).
- [x] Tạo màn hình đăng nhập, đăng ký tài khoản(1h).
       - commit: [Xây dựng 2 màn hình](https://github.com/phamhung99/Website-truyen-tranh/commit/77f9e361555b9cfce30af3eb3b85798dcd090215).
- [x] Kiểm thử giao diện trên các loại màn hình khác nhau(30p).
       - EDX: [Black Box Testing(Kiểm thử hộp đen)](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd).
- [x] Tìm hiểu xây dựng chức năng đăng nhập/đăng ký với NodeJs, MySQL.
      - Tài liệu: [Medium.com](https://medium.com/technoetics/handling-user-login-and-registration-using-nodejs-and-mysql-81b146e37419).
      - commit: [đăng ký](https://github.com/tiep2999/Website-truyen-tranh/commit/f8f6092d65bd87ed711b42b515dc736bf37d3d9e).
- [x] Tạo cơ sở dữ liệu lưu tài khoản người dùng(4h).
- [x] Tạo trang thông tin cá nhân người dùng(2h).
      - commit: [tạo trang profile user](https://github.com/tiep2999/Website-truyen-tranh/commit/1c1b2627cf66a2fd35fefcb4aaddf3f7c76c33a6).
- [x] Tạo 3 tài khoản kiểm thử chức năng đăng nhập, đăng ký(30p).
- [x] Làm sạch, tối ưu lại mã nguồn(1h).
      - EDX: [Mã dễ đọc hơn](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ocf6iosigvwc).
- [x] Các thành viên trong nhóm tham gia kiểm thử.
## Sản phẩm:
   Sản phẩm được xây dựng và phát triển tại: [Repositories GitHub](https://github.com/phamhung99/Website-truyen-tranh).

   link video demo: [user story và demo chức năng đăng nhập đăng ký](https://www.youtube.com/watch?v=eeN7UqVwMn8&t=75s).

   **Hướng dẫn sử dụng chức năng đăng nhập/đăng ký:**
   ##### 1.Đăng ký
   - Sau khi đăng nhập vào trang Web bạn sẽ được dẫn đến trang chủ.
   - Chọn vào phần "Đăng ký" trên thanh công cụ menu.
   - Sau khi chọn phần đăng ký, bạn sẽ được chuyển đến trang mới để đăng ký tài khoản. Tại đây, bạn nhập các thông tin yêu cầu cần            thiết để tạo một tài khoản.
   
     **Lưu ý:**
     - Nếu tên người dùng, email chỉ được sử dụng để đăng ký cho một tài khoản duy nhất. Nên nếu bị trùng lặp, bản phải nhập tên người          dùng hoặc email khác để đăng ký.
     - "Password" và "Confirm Password" phải giống nhau tuyệt đối.
