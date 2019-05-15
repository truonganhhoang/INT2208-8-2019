# Báo cáo cá nhân #
## Thông tin sinh viên #
* Họ và tên: Đặng Văn Nguyễn
* Mã số sinh viên: 17020939
* Nhóm: 24
* Lớp CNPM INT2208-8-2019
* Vai trò: Developer

## User Story chịu trách nhiệm ##
* ## Là một người có nhà cho thuê, tôi muốn đăng thông tin phòng trọ lên trang web để người có nhu cầu có thể tìm thấy phòng trọ tôi cho thuê
## Phân tích User story và tách thành các task

- [x] Phân tích và xây dựng các mục cần thiết của phòng trọ(30p) 
* Nội dung lý thuyết: [Requirements Elicitation](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex)

- [x] Thiết kế database lưu thông tin phòng trọ

![Thiết kế CSDL phòng trọ](https://user-images.githubusercontent.com/43127898/57609045-4f742000-7598-11e9-8f10-f33375c82d80.png)

- [x] Tạo giao diện nhập thông tin phòng trọ(2 tiếng)

![Giao diện đăng thông tin phòng trọ](https://user-images.githubusercontent.com/43127898/57609622-72530400-7599-11e9-9ca9-0fe69f59d0d3.png)
* [Commmits tương ứng](https://github.com/thangnmuet2017/TroTotHN/blob/master/module/uploadNewRoom.php)

- [x] Dùng Bootstrap và CSS để tạo giao diện đẹp hơn(2 tiếng) 
* Nội dung lý thuyết tương ứng: [Decomposition](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.5cskxy8rszpr)

- [x] Kiểm tra xem người dùng đã đăng nhập hay chưa, nếu đăng nhập mới được đăng tin(1 tiếng)

![Kiểm tra người dùng đã đăng nhập hay chưa](https://user-images.githubusercontent.com/43127898/57610941-f9a17700-759b-11e9-9d18-a88b63f4f413.png)
* [Commits tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/46066da329f39793307d79452b1757ac04287e6d)
- [x] Kiểm tra thông tin phòng trọ(30p)
* [Commits tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/a0603994fb6020d825517c402ab871d24de027f6)
* [Commits tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/30695448814464a1e37f8830e8165c2d16467b36)
- [x] Kết nối với CSDL phòng trọ(30p)
* [Commits tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/546ff879165ed3cccb94e25990a826475619b649#diff-a893ae0f3dd8fa0e249e340c0687b2e7)

- [x] Xử lý phần đăng ảnh của phòng trọ(4 tiếng)
* [Commits tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/fb4cb1d54f8ba9969d8b77c9750a677dcdf96102#diff-a893ae0f3dd8fa0e249e340c0687b2e7)

- [x] Thêm thông tin phòng trọ vào CSDL(1 tiếng)

* [Commits tương ứng](https://github.com/thangnmuet2017/TroTotHN/commit/546ff879165ed3cccb94e25990a826475619b649)

- [x] Kiểm thử hộp trắng, nếu đạt trên 70% thì đạt yêu cầu (3 giờ) 
* Nội dung lý thuyết tương ứng: [Kiểm thử hộp trắng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)
* Các lỗi phát hiện:
  + Hiển thị thời gian đăng còn chưa chi tiết(Thời gian đã đăng chỉ được tính bằng ngày)
  + Nếu người dùng nhập trực tiếp địa chỉ https://trotothn.000webhostapp.com/DangTinNhanh.php lên thanh địa chỉ thì vẫn có thể vào đưuọc phần đăng tin mà không cần đăng nhập
* Các commits sửa lỗi:
  + [Sửa lỗi hiện thị thời gian đã đăng](https://github.com/thangnmuet2017/TroTotHN/commit/c51f1e0742651d0839666391a776272f4cb777de)
  + [Sửa lỗi người dùng nhập trực tiếp địa chỉ https://trotothn.000webhostapp.com/DangTinNhanh.php lên thanh địa chỉ mà chưa đăng nhập. Khi đó sẽ chuyển hướng về trang chủ](https://github.com/thangnmuet2017/TroTotHN/commit/3da4138063588525d3a965b2088c50db0e860e83)
- [x] Kiểm thử hộp đen dựa vào giao diện chức năng (3 giờ)
* Nội dung lý thuyết tương ứng: [Kiểm thử hộp đen](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd)
* Các lỗi phát hiện:
  + Vẫn còn action = logOut trên thanh địa chỉ khi đăng xuất
  + Lỗi nhập các kiểu dữ liệu khác vào mục Giá cho thuê và Diện tích(Đã khắc phục)
* Các commits sửa lỗi:
  + [Sửa lỗi hiện thị action khi đăng xuất](https://github.com/thangnmuet2017/TroTotHN/commit/04f992a5cdcf69a08d400424b32c469f5698e909)
- [x]  Tối ưu mã nguồn ngắn gọn, dễ đọc, dễ bảo trì (1 giờ) 
* Nội dung lý thuyết tương ứng: [Mã dễ đọc hơn](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ocf6iosigvwc)

- [x] Đưa người dùng sử dụng để kiểm tra phản ứng người dùng (2 giờ) 
* Nội dung lý thuyết tương ứng: [Kiểm thử chấp thuận](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.e3sa5k1h7i5n)
* Một số ý kiến ghi nhận được:
  + Đã có địa chỉ chi tiết thì không cần mục quận huyện và xã phường nữa - Thêm mục quận huyện, xã phường để quá trình tìm kiếm thông qua bộ lọc trở nên dễ dàng hơn.
  + Phần đăng tin chưa tối ưu hóa tốt cho người muốn đăng nhà nguyên căn vì không có mục số tầng và các vấn đề chi tiết khác - Có thể đăng các vấn đề chi tiết chưa có trong các mục cố định vào phần Thông tin mô tả.
  + Cần có thêm phần sửa bài đăng vì có các yếu tố thay đổi - Sẽ phát triển thêm.
  + Cần có chức năng xóa bài đăng khi đã có đủ người thuê hoặc ở ghép - Sẽ phát triển thêm.
  + Cần có chức năng lấy lại mật khẩu - Sẽ phát triển thêm.

- [x] Sửa và tối ưu hóa khi nhận được phản ánh của người dùng (3 giờ)

- [x] Hiển thị bài đăng(1 tiếng)

## Trình bày và hướng dẫn chức năng tương ứng với User story ##
* Đầu tiên mở trình duyệt và nhập địa chỉ https://trotothn.000webhostapp.com/index.php lên thanh địa chỉ
![Đăng nhập, đăng kí tài khoản](https://user-images.githubusercontent.com/43127898/57618333-4c375f00-75ad-11e9-8404-b706b15c1aa8.png)
* Sau đó nhấn chuột vào phần Đăng Tin Nhanh trên thanh menu
![Nhấp chuột vào phần Đăng tin nhanh trên thanh menu](https://user-images.githubusercontent.com/43127898/57618597-22cb0300-75ae-11e9-9718-9ddec0437e24.png)
  + Nếu bạn chưa đăng nhập thì trang web sẽ hiện khung đăng nhập để bạn đăng nhập hoặc đăng kí tài khoản. Chỉ có đăng nhập tài khoản thì bạn mới có thể tiếp tục đăng tin
  ![Kiểm tra người dùng đã đăng nhập hay chưa](https://user-images.githubusercontent.com/43127898/57618460-aafcd880-75ad-11e9-9503-5c6f0722587e.png)
  + Nếu bạn đã đăng nhập rồi thì trang web sẽ chuyển đến trang đăng tin
  ![Trang Đăng tin nhanh](https://user-images.githubusercontent.com/43127898/57618746-74738d80-75ae-11e9-9f40-2fdb61fe584a.png)
* Tiếp theo bạn nhập các thông tin cần thiết của phòng trọ. Có tổng cộng 16 thông tin phòng trọ bạn cần nhập. Trong đó có 11 mục bắt buộc phải nhập và 5 mục không bắt buộc. Các mục bắt buộc có dấu * màu đỏ ở cạnh còn các mục không bắt buộc thì không có dấu * đỏ này.
  
  + Phần tiêu đề: Bạn cần nhập tiêu đề của bài đăng. Nên chọn tiêu đề ngắn gọn, ý nghĩa. Đây là mục bắt buộc.
  ![Mục tiêu đề](https://user-images.githubusercontent.com/43127898/57622557-151a7b00-75b8-11e9-9b74-f2d673f8e398.png)
  
  + Phần chọn loại phòng: Bạn cần chọn một trong ba loại Phòng trọ, Nhà nguyên căn và ở ghép. Chỉ được chọn một trong ba loại. Chọn loại phòng bằng cách nhấn chuột vào ô tròn trước loại phòng. Đây là mục bắt buộc.
  ![Mục chọn loại phòng](https://user-images.githubusercontent.com/43127898/57622567-177cd500-75b8-11e9-8229-79cc1a9929f8.png)
  
  + Phần kiểu vệ sinh: Bạn cần chọn một trong hai kiểu vệ sinh là Khép kín và Không khép kín. Chỉ được chọn một trong hai loại. Chọn loại nhà vệ sinh bằng cách nhấn chuột vào ô tròn trước loại nhà vệ sinh. Đây là mục bắt buộc.
  ![Mục kiểu vệ sinh](https://user-images.githubusercontent.com/43127898/57622547-1186f400-75b8-11e9-8077-b8e19ce51105.png)
  
  + Giá cho thuê: Bạn cần nhập giá cho thuê phòng trọ vào ô phía dưới Giá cho thuê. Lưu ý cần phải nhập kiểu số tự nhiên. Đây là mục bắt buộc.
  ![Mục giá cho thuê](https://user-images.githubusercontent.com/43127898/57622572-18ae0200-75b8-11e9-85b1-12f8cc7032b5.png)
  
  + Diện tích: Bạn cần nhập diện tích phòng vào ô phía dưới Diện tích. Lưu ý cần nhập kiểu số dương. Đây là mục bắt buộc.
  ![Mục diện tích](https://user-images.githubusercontent.com/43127898/57622569-177cd500-75b8-11e9-9b55-c7b9f0080820.png)
  
  + Giá sử dụng điện: Nhập giá điện vào ô phía dưới Giá sử dụng điện. Đây là mục không bắt buộc.
  ![Mục giá sử dụng điện](https://user-images.githubusercontent.com/43127898/57622545-1186f400-75b8-11e9-8a29-5a287144eeee.png)
  
  + Giá sử dụng nước: Nhập giá nước vào ô phía dưới Giá sử dụng nước. Đây là mục không bắt buộc.
  ![Mục giá sử dụng nước](https://user-images.githubusercontent.com/43127898/57622546-1186f400-75b8-11e9-967d-432b304fd874.png)
  
  + Đối tượng cho thuê: Bạn click chuột vào ô phía dưới Đối tượng cho thuê. Có bốn lựa chọn là Tất cả, Sinh viên, Người đi làm và Gia đình. Bạn chỉ có thể chọn một. Đây là mục không bắt buộc. Mặc định đối tượng sẽ là tất cả.
  ![Mục đối tượng cho thuê](https://user-images.githubusercontent.com/43127898/57622571-18156b80-75b8-11e9-9631-ed1798fc90b1.png)
  
  + Các tiện ích: Đây là mục không bắt buộc.
  ![Mục tiện ích](https://user-images.githubusercontent.com/43127898/57622555-151a7b00-75b8-11e9-87f2-731a78ece3ee.png)
  
  + Quận huyện: Bạn nhấp vào mục Chọn quận huyện và chọn quận huyện của phòng trọ. Đây là mục bắt buộc. Nó giúp quá trình tìm kiếm của người thuê trọ trở nên dễ dàng hơn.
  ![Mục quận huyện](https://user-images.githubusercontent.com/43127898/57622550-13e94e00-75b8-11e9-94bc-1fe59031fe1b.png)
  
  + Xã phường: Bạn nhấp vào mục Chọn xã phường và chọn xã phường của phòng trọ.Bạn chỉ có thể chọn xã phường khi đã chọn quận huyện. Đây là mục bắt buộc. Nó giúp quá trình tìm kiếm của người thuê trọ trở nên dễ dàng hơn.
  ![Mục xã phường](https://user-images.githubusercontent.com/43127898/57622558-151a7b00-75b8-11e9-9010-e5ac7b7a26e7.png)
  
  + Địa chỉ chính xác: Bạn cần nhập địa chỉ chính xác của phòng trọ vào ô dưới Địa chỉ chính xác. Đây là mục bắt buộc.
  ![Mục địa chỉ chính xác](https://user-images.githubusercontent.com/43127898/57622568-177cd500-75b8-11e9-97c0-60af45ceaa01.png)
  
  + Tên chủ trọ: Đây là mục không bắt  buộc.
  ![Mục tên củ trọ](https://user-images.githubusercontent.com/43127898/57622553-13e94e00-75b8-11e9-9e02-e864c298e733.png)
  
  + Số điện thoại: Đây là mục bắt buộc.
  
  ![Mục số điện thoại](https://user-images.githubusercontent.com/43127898/57622552-13e94e00-75b8-11e9-9208-6d24824c72bd.png)
  
  + Thông tin mô tả: Bạn có thể nhập chi tiết thông tin phòng trọ hoặc các yêu cầu thêm của bạn thân vào phần này. Đây là phần bắt buộc.
  ![Mục thông tin mô tả](https://user-images.githubusercontent.com/43127898/57622554-1481e480-75b8-11e9-8ba0-037a67a2db17.png)
  
  + Hình ảnh: Bạn nhấn chuột vào nút Chọn tệp. Một cửa sổ chọn tệp sẽ hiện lên. Bạn cần chọn đến thư mục lưu ảnh muốn đăng và chọn ảnh đó. Bạn có thể chọn nhiểu ảnh bằng cách ấn nút CTRL và nhấn chọn nhiều ảnh.
  ![Mục chọn ảnh](https://user-images.githubusercontent.com/43127898/57622564-16e43e80-75b8-11e9-8468-021eb6f6c97a.png)
  ![Cửa sổ chọn ảnh](https://user-images.githubusercontent.com/43127898/57622563-16e43e80-75b8-11e9-9b64-222ad24f79c4.png)
  ![Ảnh đã chọn](https://user-images.githubusercontent.com/43127898/57622562-164ba800-75b8-11e9-8c20-65c9d2b68676.png)
  
  + Chúng tôi có để phần dướng dẫn ở phía tay phải trang web(đối với máy tính) và phí dưới(đối với điện thoại). Bạn cso thể tham khảo thêm.
* Khi bạn nhập thiếu các thông tin bắt buộc sẽ có cảnh báo màu đỏ hiện lên nhắc nhở bạn.
![Lỗi khi nhập thiếu thông tin bắt buộc](https://user-images.githubusercontent.com/43127898/57619104-5bb7a780-75af-11e9-8ecf-e613c722aa44.png)
* Khi bạn đã nhập đầy đủ các thông tin cần thiết thì nhấn nút Đăng tin ở cuối trang web
![Nhấn chuột vào nút Đăng tin](https://user-images.githubusercontent.com/43127898/57619432-1cd62180-75b0-11e9-99c8-d7ab170331d2.png)
* Phòng trọ bạn muốn đăng sẽ được xử lý và đăng ngay lên trang web. Bạn sẽ trở về trang chủ. Khi đó phòng trọ của bạn sẽ xuất hiện ở đầu trang web.
  
