# Báo cáo cá nhân: User story đã làm trong dự án nhóm
## User story: Là một người quản lý, tôi muốn có chức năng thêm, sửa đề thi để thêm mới một đề thi vào CSDL hoặc chỉnh sửa nó khi phát hiện sai sót
### Phân tích user story
#### Nội dung:
- Từ trang danh sách đề thi tạo một button thêm mới có chức năng thêm mới đề thi.
- Ứng với mỗi đề thi trong table sẽ có một cột chứa button chỉnh sửa có chức năng chỉnh sửa đề thi.
- Khi click vào button thêm mới hoặc chỉnh sửa thì hiện lên một modal có chức năng nhập thông tin.
- Chức năng thêm mới và chỉnh sửa dùng chung một form trên modal, đối với chức năng thêm thì các ô nhập dữ liệu sẽ để trống, đối với chức năng sửa thì các ô nhập dữ liệu hiển thị thông tin của đề thi đang sửa.
- Dữ liệu nhập vào được kiểm tra đúng định dạng ngay sau khi unfocus khỏi ô nhập dữ liệu.
- Có chức năng lựa chọn kiểu đề thi (online, offline) và chọn giờ thi (nếu thi online)
- Phần nhập đáp án thay đổi theo số câu, lựa chọn số lượng câu và render ra số lượng ô nhập đáp án.
#### Các công việc cần làm:
- [x]  Làm rõ yêu cầu (thêm - sửa đề thi) (1h).  [Tham khảo EDX](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex)

- [x] Các yêu cầu khác (kiểm tra dữ liệu, báo lỗi,...).  [Tham khảo EDX](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.99diysc4s7mc)

- [x] Tìm hiểu và lựa chọn mô hình MVC. [Tham khảo mô hình MVC](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.kehlqoeo6d9r)

- [x] Vẽ sơ đồ tương tác giữa các component. [Tham khảo Technical Representation](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.9sexdtfjiyvo)

- [x] Tìm hiểu nguyên lý chia nhỏ giao diện  [Tham khảo EDX](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.t50jyopjk04o)

- [x] Thiết kế form nhập thông tin thêm, chỉnh sửa (2h)  [Link commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/2ac62d3f95faae0781fdfb090d9cdaff479febc0)

- [x] Viết html form hiển thị (sử dụng modal) (1h)  [Link commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/2ac62d3f95faae0781fdfb090d9cdaff479febc0)

- [x] Tìm hiểu về REST Development.  [Tham khảo REST Dev](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.rxyqst9dtgtt)

- [x] Gọi API POST phía backend (Hoàn đã làm và deloy lên server để cả nhóm làm chung)  [REST](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.rxyqst9dtgtt)

- [x] Hiển thị dữ liệu khi mở form từ list (khi thêm và khi sửa) (30p)  [Link commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/582267631012cb6545c902547a46d99c10c1f49e)

- [x] Tạo form data, xử lý ảnh upload lên, validate dữ liệu (1h) [Link commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/f977a712e9ed4a352201385bd8508ece5763e966)

- [x] Chức năng lựa chọn giờ thi - sử dụng date-picker (30p)  [Link commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/2ac62d3f95faae0781fdfb090d9cdaff479febc0)

- [x] Chức năng nhập số câu và đáp án (1h)  [Link commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/893bfa22a3ada76dd93ea5174d81cc49c5789519)

- [x] Xử lý khi click button Submit (báo thất bại hoặc thành công) (1h)  [Link commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/360736fbe864852a19a0aa938395ce9688bfebd5)

- [x] View list sau khi báo thêm (sửa) thành công (2h)  [Link commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/edbb2b7540b30921cca92e05a37ea92b99104a6e)

##### TESTING
- [x] Kiểm thử hộp trắng độ bao phủ  [Tham khảo EDX](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)
- [x] Kiểm thử giao diện  [Tham khảo EDX](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd)
- [x] Cho các thành viên trong nhóm kiểm thử và dùng thử, mời 1 số người dùng trải nghiệm

### Ghi chú: Tổng hợp quá trình làm bài tập nhóm
- Repo sản phẩm được triển khai tại [GITHUB]()
- Video báo cáo và demo user story tại [YOUTUBE](https://youtu.be/SSHt6mW1eN0)
- Link sản phẩm của nhóm deloy server node.js và angular chế độ development tại [SẢN PHẨM](http://webthi-angular.s3-website-ap-southeast-1.amazonaws.com)
