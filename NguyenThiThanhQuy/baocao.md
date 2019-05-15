## Sinh Viên: Nguyễn Thị Thanh Quý
### MSSV:17020991

### Thành viên nhóm 69- Product Owner và deverloper

## BÁO CÁO CÁ NHÂN MÔN CÔNG NGHỆ PHẦN MỀM

> Hoàn thành khóa học EDX:
  Link bài tập [EDX](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/NguyenThiThanhQuy/SoftEng1x.jpg)
  
> Hoàn thành các bài kiểm tra trắc nghiệm trên học liệu- sách mềm: [Link bài tập-1](https://github.com/ThanhthanhQuy/UETmarket/blob/master/Hoclieu-sachmem.png), [Link bài tập-2](https://github.com/ThanhthanhQuy/UETmarket/blob/master/hoclieu-sachmem2.png)

> Tham gia làm bài tập nhóm:  
  Trang web bán hàng online [VNU's Market](https://vnumarket.herokuapp.com)- [Link hướng dẫn sản phẩm](https://github.com/tranthiensonuet/INT2208-8-2019/tree/master/nhom-69)
  
  > User story: Là khách hàng, tôi muốn lựa chọn sản phẩm và bắt đầu công việc mua hàng để có được sản phẩm mong muốn 
  * Chi tiết user story: [link](https://github.com/truonganhhoang/INT2208-8-2019/issues/138)
  
  1. **Xác định yêu cầu mong muốn** :
  * Các tính năng mong muốn
    + Tìm kiếm và xem thông tin về sản phẩm trên trang chủ
    + Đăng nhập tài khoản bắt đầu việc mua sắm
    + Thêm giỏ hàng các sản phẩm mong muốn
    
  2. **Áp dụng quy trình phát triển Scrum** : 
     * Kế hoạch cụ thể
      + Sprint 1: từ tuần 1 - tuần 4: Xây dựng giao diện cơ bản, và tạo hệ quản trị csdl 
      
        Các commit:  [commit-html Trang chủ](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/views/Mainpage.hbs),
        [commit-html Giỏ hàng](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/views/cart.hbs), [commit-giao diện admin](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/views/admin.hbs), [commit-css](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/public/mainpage-css.css)
      + Sprint 2: từ tuần 4 - tuần 8: Xây dựng tính năng đặt mua
      
        Các commit: [commit- cấu trúc giỏ hàng ](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/models/cart.js), [commit- xử lí khi có đường dẫn được gọi](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/routes/router.js)
      + Sprint 3: từ tuần 8 - tuần 11: Xây dựng tính năng đăng kí tài khoản
      
        Các commit: [commit- cấu trúc thông tin 1 khách hàng](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/models/customer.js), [commit- Sứ dụng passport cho việc xác thực](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/config/passport.js), [commit- xử lí khi có đường dẫn được gọi](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/routes/router.js)
      + Sprint 4: từ tuần 11 - tuần 12: Hoàn thiện tính năng và kiểm thử
      
      
   3. **High level design** :  chọn hệ quản trị dữ liệu MongoDB và xây dựng sơ đồ lớp 
   4. **Low level design**:  Sử dụng mô hình MVC của framework Express
   5. **Mã nguồn sản phẩm**: [Sản phẩm](https://github.com/tranthiensonuet/INT2208-8-2019/tree/master/nhom-69/UETMaket)
   6. **Kiểm thử** : Đảm bảo mã nguồn không bị lỗi, chạy và sử dụng tốt (Kiểm thử hộp trắng)
   
   
  > ## Hướng dẫn sử dụng phẩn mềm
  **Link video demo sản phẩm** : [link video demo](https://www.youtube.com/watch?v=KaqgnzWfQTg)
  
  1. Bạn mở trình duyệt web bất kì: Chrome, Cốc Cốc,...
  2. Mở đường dẫn link: [https://vnumarket.herokuapp.com](https://vnumarket.herokuapp.com)
  3. Trang chủ VNU's Market hiện ra với Logo và tiêu đề trang web,mọi người có thể nhìn thấy các danh mục sản phẩm cụ thể với từng sản phẩm có giá và hình ảnh trực quan
  <img src="https://i.imgur.com/IlA8wYx.png">
  
  4. Tất cả các tính năng đăng nhập và đăng kí, giỏ hàng đều trong mục có hình ảnh "người dùng" ở góc phải của trang chủ
  <img src="https://i.imgur.com/2XugggP.png">
  
  5: Giao diện đăng nhập đăng kí :
  
  <img src="https://i.imgur.com/gofa67H.png">
  
  6: Giao diện thêm giỏ hàng, chỉ có thể thêm sản phẩm khi người dùng đã đăng nhập tài khoản, nếu chưa, bạn sẽ được đưa tới giao diện đăng nhập thay vì giao diện giỏ hàng:
  
  <img src="https://i.imgur.com/oOiQZZt.png">
  
  7. Ngoài ra em còn bổ sung thêm tính năng đăng nhập admin, hiện tại em chỉ để 1 tk duy nhất có thể truy cập admin 
  
 <img src="https://i.imgur.com/BtVnRAn.png">
 
 8 Dưới đây là giao diện payment của các đơn đặt hàng sau khi admin truy cập, từ đó liên hệ và giao hàng cho khách hàng
 <img src="https://i.imgur.com/8RuAGfs.png">
 

  
  
  
  
  
   
 
  


