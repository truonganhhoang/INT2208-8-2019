# Trần Thiên Sơn
### MSSV: 17021006
### Nhóm dự án: Nhóm 69
### Vai trò: Developer

# Báo cáo các nhân môn học Công nghệ phần mềm

* #### Hoàn thiện khoá học trên edx [EDX](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/TranThienSon/SoftEng1x.jpg)
* #### Hoàn thiện câu hỏi trắc nghiệm trên hoclieu.sachmem
* #### Tham gia làm bài tập nhóm: Web bán hành online [WEB](https://vnumarket.herokuapp.com), [Github](https://github.com/tranthiensonuet/INT2208-8-2019/tree/master/nhom-69)
* #### User Story: Là một khách hàng, tôi muốn đăng kí tài khoản để có thể đặt mua đơn hàng của mình. [User Story](https://github.com/truonganhhoang/INT2208-8-2019/issues/145)
  
  - Xác định yêu cầu, mong muốn:
     - Mọi người khi vào trang web đều có thể đăng kí cho riêng mình một tài khoản cá nhân.
     - Khi có tài khoản cá nhân thì khách hàng có thể đặt hàng.
     - Các tài khoản sẽ được bảo mật, mỗi người sẽ có tài khoản cho riêng mình.
     - Yêu cầu này đảm bảo đúng quy tắc INVEST.
    
  - Quy trình phát triển Scrum được áp dụng vào câu chuyện người dùng:
     - Tạo phần giao diện cho HTML, CSS cho trang đăng kí và đăng nhập
       - [Đặc tả - Làm rõ yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex)
       - [Commit](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/views/login.hbs)
     - Tạo database bằng MongoDB, sử dụng moogoose để tạo model (thiết lập mô hình MVC) kết nối tương tác với cơ sở dữ liệu
       - [Thiết kế mức thấp - MVC](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.kehlqoeo6d9r)
       - [Commit](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/models/user.js)
     - Liên kết với database sử dụng module mongoose
       - [Đặc tả - Làm rõ yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex)
       - [Commit](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/seed/customer-seeder.js)
     - Sau khi kiểm tra mail được đăng kí không bị trung lặp bắt đầu lưu tài khoản của người dùng vào database
       - [Thiết kế mức cao - Trừu tượng - Che dấu dữ liệu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.94cy1bq9fkl2)
       - [Commit](https://github.com/tranthiensonuet/INT2208-8-2019/blob/master/nhom-69/UETMaket/views/error.hbs)
     - Xem lại logic 1 lượt của chức năng đăng nhập ,đảm bảo người dùng đăng nhập để sử dụng các tính năng có trong website
       - [Kiểm thử - Kiểm thử hộp trắng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)
     - Xây dựng các ca kiểm thử (test case) dựa trên kỹ thuật kiểm thử biên. Yêu cầu độ bao phủ của bộ kiểm thử phải trên 70%. Nếu dưới 70% thì sửa lại test case để đạt yêu cầu về độ bao phủ
       - [Kiểm thử - Kiểm thử hộp trắng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)
     - Kiểm tra lại mã nguồn xem có mã xấu hay không. Nếu có mã xấu thì sửa lại đoạn mã đó
       - [Xây dựng - Tái cấu trúc](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.bxti8dsihgwm)
     - Demo sản phẩm với những thành viên trong nhóm dùng thử sản phẩm để kiểm tra xem còn lỗi về giao diện, logic hay không
       - [Đặc tả - Thẩm định yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.a3b33sgbrokp)
   - Viết mã:
     - Tạo một project trên heroku.
     - Thêm cơ sở dữ liệu cho ứng dụng.
     - Đẩy code lên heroku để chạy ứng dụng.

 * #### Mã nguồn sản phẩm [Link](https://github.com/tranthiensonuet/INT2208-8-2019/tree/master/nhom-69/UETMaket)
 
 * #### Hướng dẫn sử dụng sản phẩm
    - Mở trình duyệt và gõ "vnumarket.herokuapp.com" đợi trình duyệt điều hướng sẽ thấy trang web tự động được đưa về dưới dạng https.
    ![123](https://user-images.githubusercontent.com/43133165/57585695-bbfa0b00-7515-11e9-84b3-6f4cacb94198.png)
    - Ấn vào biểu tượng "Tài khoản" để đăng ký hoặc đăng nhập
    ![123](https://user-images.githubusercontent.com/43133165/57585703-db913380-7515-11e9-941c-d667a6ea9d43.png)
    - Sau khi ấn xong thì màn hình đăng ký, đăng nhập sẽ hiện ra rồi điền thông tin vào đó
    ![Untitled](https://user-images.githubusercontent.com/43133165/57585629-cec01000-7514-11e9-818a-0b5a4dab5aaa.png)
    - Khi đăng ký, đăng nhập xong thì sẽ hiện ra thông tin tài khoản rồi sau đó ấn quay về trang chủ để mua hàng
    ![123](https://user-images.githubusercontent.com/43133165/57585642-1050bb00-7515-11e9-8ab5-d29cf500123f.png)

  
