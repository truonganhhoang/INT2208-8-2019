
# Báo cáo cá nhân
## Thông tin sinh viên
* Họ và tên: Nguyễn Duy Tâm
* MSSV: 17021009
* Nhóm: 24
* Lớp: INT2208-8 2019
* Vai trò: Scrum master, tester, devoloper.
## User story: Là một người đi tìm phòng trọ, tôi muốn tìm kiếm phòng trọ thông qua các lựa chọn, để việc tìm kiếm trở nên nhanh dễ dàng và chính xác hơn
## Phân tích user story và tách thành các task
- [x] Làm rõ yêu cầu của user story (chức năng tìm kiếm phòng trọ bằng bộ lọc) (1 giờ) 
* Tài liệu: [Phân rã câu chuyện người dùng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#)

- [x] Liệt kê các nội dung cần có trong bộ lọc tìm kiếm (1 giờ)

- [x] Lựa chọn thiết kế theo mô hình MVC 
* Tài liệu: [Mẫu thiết kế MVC](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.kehlqoeo6d9r)

- [x] Thiết kế cơ sở dữ liệu lưu các thông tin của phòng trọ (1 giờ) 
* [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/63f9c24830ed0c76f02979be1f7776e1365cd138)

- [x] Thêm giao diện cho bộ lọc và hiển thị kết quả tìm kiếm bằng html (2 giờ) 
* [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/950cd94a308cb3a3162023ff40aee4b1b7ceceac)

- [x] Chỉnh sửa hiển thị trang web theo các loại màn hình(2 giờ) 
* Tài liêu: [Cải thiện thiết kế](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.k2pmncz8nvla)  
* [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/950cd94a308cb3a3162023ff40aee4b1b7ceceac)

- [x] Sử dụng CSS và javascript để giao diện hiển thị đẹp và dễ sử dụng hơn (3 giờ) 
* [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/950cd94a308cb3a3162023ff40aee4b1b7ceceac)

- [x] Xử lý việc nhập sai dữ liệu từ người dùng (1.5 giờ) 
* [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/e84df65ea0062dcabd5c4cc91621399c51708ffa)

- [x] Lấy dữ liệu người dùng nhập vào  (1.5 giờ) 
* [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/3453a12cf8a0d35bdf68473abe869992bd21cc80)

- [x] Từ dữ liệu đã nhập và lấy ra dữ liệu phù hợp trên cơ sở dữ liệu (2 giờ) 
* [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/3453a12cf8a0d35bdf68473abe869992bd21cc80)

- [x] Hiển thị các căn phòng phù hợp với tìm kiếm của người dùng (2 giờ) 
* [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/3453a12cf8a0d35bdf68473abe869992bd21cc80)

- [x] Kiểm thử hộp trắng dựa trên mã nguồn, tìm các lỗi và sửa lỗi (3 giờ)
* Tài liệu: [Kiểm thử hộp trắng](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)
* Commit: 
  * Thay đổi giá trị mặc định của bộ lọc giá: 
    [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/292dbd8a0cd52e3c1fc30662ac4302ffc522424e)
    [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/dbde71f013ab32a313887dc0913d0735add7257e)
  * Sửa lỗi lọc căn phòng theo giá: 
    [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/8a5addf55869b4bc32109f43f19b26528fc4bbb8)
    [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/77b2cbf849420d72435bb74bd7222773474a6690)
    [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/602c332fb6ef53c01d9bba99740985fc8d4df485)
    [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/6817f5379980d81a02793c3d01308dc150353d47)

- [x] Kiểm thử hộp đen dựa vào giao diện chức năng (3 giờ) 
* [Kiểm thử hộp đen](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd)
* Commit:
  * Sửa lỗi sai về quận/huyện: [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/29e62ca13847a149b80adebddfb4b89404377b0b)
  * Sửa thứ tự hiển thị của các căn phòng được tìm kiếm: [Commit](https://github.com/thangnmuet2017/TroTotHN/commit/d151b2d911fff0762d9e0dc2cedbc4961fe792cb)

- [x] Tối ưu mã nguồn ngắn gọn, dễ đọc, dễ bảo trì (1 giờ) 
* [Code smells](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.9u1t50em5040)

- [x] Kiểm thử chấp nhận của người dùng (3 giờ) 
* [Kiểm thử chấp thuận](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.e3sa5k1h7i5n)
## Hướng dẫn sử dụng:
* Trang web có hai phần bộ lọc tìm kiếm: 
  * Bộ lọc tìm kiếm tại trang chủ.
  ![bộ lọc](https://user-images.githubusercontent.com/43299711/57629090-61b88300-75c5-11e9-981e-0d56109bd2a8.png)
  * Bộ lọc tìm kiếm nằm bên phải trang của các trang khác.
  ![bộ lọc bên phải](https://user-images.githubusercontent.com/43299711/57629116-7268f900-75c5-11e9-87ec-0a4ea1c291f5.png)
* Cách sử dụng của hai phần bộ lọc là giống nhau.
* Để lọc các căn phòng bạn cần chọn các nội dung trong bộ lọc ứng với điều kiện cần lọc và nhấn tìm kiếm.
![tìm kiếm](https://user-images.githubusercontent.com/43299711/57629784-9711a080-75c6-11e9-8662-5893666699a9.png)
* Bộ lọc tìm kiếm của trang chủ có các tính năng lọc là quận/huyện, xã/phường, loại phòng trọ, khoảng giá. Ngoài các tính năng lọc trên bộ lọc ở bên phải của trang web còn có thêm tính năng lọc theo kiểu vệ sinh của phòng trọ.
  * Quận/huyện: Có chứa các quận/huyện của thành phố Hà Nội cho phép bạn chọn một trong các quận/huyện đó ứng với điều kiện lọc của bạn.
  ![khu vực](https://user-images.githubusercontent.com/43299711/57631006-dc36d200-75c8-11e9-9bbf-d28c64096c61.png)
  * Xã/phường: Có chứa các quận/huyện của thành phố Hà Nội cho phép bạn chọn một trong các quận/huyện đó ứng với điều kiện lọc của bạn. (Lưu ý: Chỉ khi bạn chọn quận/huyện thì bạn mới có thể chọn được xã/phường có trong quận/huyện đó)
  ![khu vực](https://user-images.githubusercontent.com/43299711/57631006-dc36d200-75c8-11e9-9bbf-d28c64096c61.png)
  * Loại phòng trọ: Bạn có thể chọn một trong các loại phòng là phòng trọ, nhà nguyên căn, ở ghép hoặc tất cả các loại phòng.
  ![loại phòng](https://user-images.githubusercontent.com/43299711/57631037-eeb10b80-75c8-11e9-99ab-0d4912b0102a.png)
  * Kiểu vệ sinh: Bạn có thể chọn một trong các kiểu vệ sinh là khép kín và không khép kín.
  ![kiểu vệ sinh](https://user-images.githubusercontent.com/43299711/57631059-f96ba080-75c8-11e9-9478-1a41c2e4ecc7.png)
  * Khoảng giá: Bao gồm hai khung nhập dữ liệu là từ khoảng giá bao nhiêu đến bao nhiêu. (Lưu ý: Nếu bạn chỉ nhập dữ liệu cho một khung thì sẽ không thể lọc được. Nếu bạn nhập giá trước lớn hơn giá sau thì sẽ không hiển thị ra kết quả nào cả.)
  ![khoảng giá](https://user-images.githubusercontent.com/43299711/57631097-0a1c1680-75c9-11e9-9e06-8ba7c28197cd.png)
* Bạn có thể chọn một hay nhiều tính năng để lọc.
* Sau khi lọc xong trang web sẽ hiển thị ra kết quả tương ứng với điều kiện vừa lọc.
![kết quả](https://user-images.githubusercontent.com/43299711/57631465-bbbb4780-75c9-11e9-8314-0a491c9488f7.png)

