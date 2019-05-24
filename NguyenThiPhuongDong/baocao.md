# Là người quản lý, tôi muốn có chức năng đăng nhập để quản lý những người dùng ứng dụng của mình.

### Task list:
- [x] Nắm bắt chung các yêu cầu và chia thành 2 nhóm: 
   
   Yêu cầu chức năng: Sau khi đăng nhập sẽ chuyển đến đâu, yêu cầu người dùng nhập vào những dữ liệu gì,....
   
   Phi chức năng: dễ dàng kiểm thử bằng cách thử đăng nhập, người dùng chỉ cần nhập vào 2 trường là username và password,....
   
   [Requirements Process](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2)

- [x] Xác định tính chất, Làm rõ yêu cầu, Thẩm định yêu cầu: 
   
   [Xác định tính chất của yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2): đầy đủ, nhất quán, chính xác và xúc tích.
   
   [Làm rõ yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2): từ yêu cầu xác định các chức năng của hệ thống,...
   
   [Thẩm định yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2): loại bỏ những yêu cầu thừa.

- [x] Xây dựng User Story dựa trên mô hình MVC: 
    [Mẫu thiết kế MVC cơ bản](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.kehlqoeo6d9r)
    
    [Mô hình MVC trong Django](https://www.howkteam.vn/course/lap-trinh-web-voi-python-bang-django/django-su-dung-mo-hinh-mvc-1528)

- [x] Tìm hiểu về Python và Framework Django đặc biệt lưu ý đến phần tạo Form login (1 ngày):
  
  [Form login trong Django](https://www.howkteam.vn/course/lap-trinh-web-voi-python-bang-django/huong-dan-xu-ly-login-va-logout-user-trong-python-django-1531)

- [x] Xây dựng chức năng: Cài đặt Form login của Django để có chức năng login với giao diện sơ khai (2-3 giờ):
  
  [Lý thuyết xây dựng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.e2vc3zkgusoi)
  
  [Form login trong Django](https://www.howkteam.vn/course/lap-trinh-web-voi-python-bang-django/huong-dan-xu-ly-login-va-logout-user-trong-python-django-1531)
  
  [Commit sản phẩm](https://github.com/NguyenTuanVu2105/INT2208-8-2019/commit/689d84440f73c0569c86b82c94619f86e972a03e)

- [x] Sử dụng HTML, CSS,... để thiết kế giao diện đẹp hơn (1 ngày):
  
  [Commit sản phẩm](https://github.com/NguyenTuanVu2105/INT2208-8-2019/commit/689d84440f73c0569c86b82c94619f86e972a03e)

- [x] Sử dụng kiểm thử đơn vị để kiểm thử riêng chức năng đăng nhập (1 giờ):
  
  [Lý thuyết KT đơn vị](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.e3sa5k1h7i5n)

- [x] Cải tiến thiết kế (1 ngày): Thêm checkbox ghi nhớ tài khoản và xử lý khi người dùng quên mật khẩu.
  
  [Cải tiến thiết kế](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2)
  
  [Hiệu quả cải tiến](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2)

- [x] Xây dựng các ca kiểm thử hộp trắng để bao phủ các nhánh code (1-2 giờ):
  
  [Lý thuyết kiểm thử hộp trắng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2)

- [x] Kiểm thử bằng kiểm thử hộp đen để kiểm thử giao diện, chức năng (1-2 giờ):
   
  Đoán lỗi: không đăng nhập được tài khoản đúng, đăng nhập thành công tài khoản sai, cho phép nhập quá số lượng ký tự trong input, cho phép nhập các ký tự đặc biệt,...
  
  [Lý thuyết kiểm thử hộp đen](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2)

- [x] Loại bỏ các loại mã xấu (1-2 giờ).
  
  [Lý thuyết mã xấu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2)
