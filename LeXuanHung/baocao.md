## Sinh viên: Lê Xuân Hưng

### MSSV: 17020814
### Nhóm dự án: 69
### Vai trò: Scrum master and developer

# Báo cáo cá nhân môn học công nghệ phần mềm
* #### Hoàn thành khóa học trên EDX: [edx](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/LeXuanHung/SoftEng1x.png)
* #### Tham gia làm bài tập nhóm: Web bán hàng online: [Link trang web](https://vnumarket.herokuapp.com/), [Link mô tả](https://github.com/tranthiensonuet/INT2208-8-2019/tree/master/nhom-69)
* #### User story: Là một khách hàng, tôi muốn xem các sản phẩm được phân loại theo chức năng, để tìm mua dễ dàng và nhanh chóng hơn.
  * Chi tiết user story: [Link](https://github.com/truonganhhoang/INT2208-8-2019/issues/136)

  * Link youtube: https://youtu.be/p4Tz_FAdJbo

  *I. Xác định yêu cầu, mong muốn:*
    + Xem thông tin và phân loại các sản phẩm theo chức năng.
    + Tìm kiếm sản phẩm theo từ khóa.
    + Sự đồng bộ giữa các chức năng.
    + Yêu cầu này đảm bảo đúng quy tắc INVEST.
  
 
       
  *II. Áp dụng quy trình phát triển Scrum vào làm dự án nhóm:*
    + Kế hoạch cụ thể
      + Sprint 1: từ tuần 1 - tuần 4: Xây dựng giao diện cơ bản, và tạo hệ quản trị csdl.
      + Sprint 2: từ tuần 4 - tuần 8: Xây dựng tính năng xem thông tin sản phẩm và đặt mua.
      + Sprint 3: từ tuần 8 - tuần 11: Xây dựng tính năng đăng kí tài khoản- thêm giỏ hàng.
      + Sprint 4: từ tuần 11 - tuần 12: Hoàn thiện tính năng và kiểm thử.
       
  *III. High Level Design:* chọn hệ quản trị dữ liệu MySql và xây dựng sơ đồ lớp.
  
  [commit](https://github.com/tranthiensonuet/INT2208-8-2019/tree/master/LeXuanHung/project/product)
  
  *IV. Low level design:*  Sử dụng mô hình MVC của framework Express.
  
  *V. Mã nguồn sản phẩm:* [Sản phẩm](https://github.com/tranthiensonuet/INT2208-8-2019/tree/master/nhom-69/UETMaket)
  
  *VI. Kiểm thử:*
    - Tạo các test case.
    - Kiểm thử hộp đen. [Kiểm thử hộp đen](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd)
    - Xây dựng các ca kiểm thử hộp trắng. Yêu cầu độ bao phủ của bộ kiểm thử phải trên 70%. Nếu dưới 70% thì sửa lại test case để đạt yêu cầu về độ bao phủ. [Kiểm thử hộp trắng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)
    - Đưa sản phẩm cho các thanh viên trong nhóm dùng thử.
  
 ## Giới thiệu và hướng dẫn sử dụng
 **Link video demo:** [Link](https://youtu.be/p4Tz_FAdJbo)
 1. Bạn mở trình duyệt sẵn có trong máy: Google Chrome, Cốc Cốc, ...
 2. Truy cập vào đường link: https://vnumarket.herokuapp.com/
 3. Sau khi trang web hiện ra, bạn ấn vào ô **xem thêm** (màu vàng) để hiển thị tất cả sản phẩm.
 <img src="https://i.imgur.com/IlA8wYx.png">
 
 - **Để tìm kiếm, bạn nhập sản phẩm cần tìm vào ô tìm kiếm (màu trắng).** 
 Ví dụ: bạn gõ từ **"balo"**, sau đo ấn enter hoặc kích vào biểu tượng tìm kiếm. Trang web sẽ trả lại kết quả.
 
 <img src="https://i.imgur.com/nA2GZSQ.png">
 
 - **Để tìm kiếm sản phẩm theo bộ lọc giá cả, bạn click 1 trong các ô giá bên trái có sẵn trên màn hình.**
 (Ví dụ: 100.000₫ - 200.000₫)
 
 <img src="https://i.imgur.com/cgnYzUD.png">
 
 - **Để tìm kiếm sản phẩm theo bộ lọc trạng thái, bạn click 1 trong các ô phía trên các sản phẩm.**
 (Ví dụ: Giá tăng dần)
 
 <img src="https://i.imgur.com/EbuASwb.png">
 
 - **Để tìm kiếm sản phẩm theo bộ lọc kích thước,  bạn click 1 trong các ô giá bên trái có sẵn trên màn hình.**
 (Ví dụ: To)
 
 <img src="https://i.imgur.com/Qj7pJeA.png">
 
 - **Tìm kiếm sản phẩm bằng cách kết hợp các bộ lọc, bạn click 1 trong các ô của các bộ lọc.**
 
 <img src="https://i.imgur.com/Rf2D6tT.png">
 
