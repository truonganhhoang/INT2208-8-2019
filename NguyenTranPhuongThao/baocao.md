## Sinh Viên: Nguyễn Trần Phương Thảo
### MSSV:17021024

### Nhóm dự án: nhóm 69
### Vai trò : Deverloper

## BÁO CÁO CÁ NHÂN MÔN CÔNG NGHỆ PHẦN MỀM

- Hoàn thành khóa học EDX: [EDX](https://github.com/truonganhhoang/INT2208-8-2019/blob/master/NguyenTranPhuongThao/SoftEng1x.jpg)
- Hoàn các bài kiểm tra trắc nghiệm trên trang web [https://hoclieu.sachmem.vn](https://hoclieu.sachmem.vn)


- Tham gia làm bài tập nhóm: **Trang web bán hàng online - VNU's Market** [Web](https://vnumarket.herokuapp.com), [Git](https://github.com/tranthiensonuet/INT2208-8-2019/tree/master/nhom-69)
  
- User story: Là một khách hàng tôi muốn có một trang hiển thị thông tin chi tiết sản phẩm để có thể hiểu rõ hơn về sản phẩm
     * Chi tiết user story: [Link](https://github.com/truonganhhoang/INT2208-8-2019/issues/139)

- **Xác định yêu cầu mong muốn** :
    + Xem thông tin chi tiết của mỗi sản phẩm
    + Yêu cầu này đảm bảo đúng quy tắc INVEST.
    
    
 - **Quy trình phát triển Scrum được áp dụng vào câu chuyện người dùng:** : 
    - Tạo trang giao diện hiển thị thông tin chi tiết sản phẩm
      - [Đặc tả - Làm rõ yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex),
      - [Commit](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/views/product.hbs)
     
       
     - Chọn hệ quản trị dữ liệu MongoDB,tạo database bằng MongoDB, thiết lập mô hình MVC kết nối tương tác với cơ sở dữ liệu
       - [MVC](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.kehlqoeo6d9r)
       - [Commit](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/models/product.js)
     - Xây dựng các ca kiểm thử (test case) dựa trên kỹ thuật kiểm thử biên. Yêu cầu độ bao phủ của bộ kiểm thử phải trên 70%. Nếu dưới 70% thì sửa lại test case để đạt yêu cầu về độ bao phủ
       - [Kiểm thử - Kiểm thử hộp trắng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)
     - Demo sản phẩm với những thành viên trong nhóm dùng thử sản phẩm để kiểm tra xem còn lỗi về giao diện, logic hay không
       - [Đặc tả - Thẩm định yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.a3b33sgbrokp)
      - Kiểm tra lại mã nguồn xem có mã xấu hay không. Nếu có mã xấu thì sửa lại đoạn mã đó
        - [Xây dựng - Tái cấu trúc](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.bxti8dsihgwm)
       
      - **Mã nguồn sản phẩm**: [Sản phẩm](https://github.com/tranthiensonuet/INT2208-8-2019/tree/master/nhom-69/UETMaket)
   * **Giới thiệu sản phẩm**
      + Link video demo: [Link](https://www.youtube.com/watch?v=BXsERupXCcw&feature=youtu.be)
   
      + Khi vào trang web [https://vnumarket.herokuapp.com](https://vnumarket.herokuapp.com) mọi người có thể nhìn thấy các danh mục sản phẩm có giá cả và hình ảnh minh họa
      <img src="https://i.imgur.com/IlA8wYx.png">
      
      + Mọi người muốn biết rõ thông tin của sản phẩm chi tiết hơn thì click vào sản phẩm đó và nó sẽ ra toàn bộ thông tin của sản phẩm đó
      
      <img src="https://i.imgur.com/KqsICmg.png">
