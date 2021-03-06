# nhom-10

### Báo cáo dự án: [Link README báo cáo](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/blob/master/README.md)
### Thành viên

 - [Phí Xuân Hoàn - 17020759](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/PhiXuanHoan/baocao.md)
 - [Trần Tiến Đức - 17020701](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/TranTienDuc/baocao.md)
 - [Lê Công Kỳ - 17020842](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/LeCongKy/baocao.md)
 - [Nguyễn Trường Giang - 17020706](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/NguyenTruongGiang/baocao.md)

### Tên ứng dụng: Thi trắc nghiệm THPT quốc gia
<ul>
  <li>Nhóm người dùng
    <ul>
      <li>Học Sinh THPT</li>
      <li>Giáo Viên </li>
    </ul>
  </li>
</ul>

<ul>
  <li>Mô tả ứng dụng
    <ul>
      <li>Cho phép giáo viên đăng tải 1 đề thi 40 - 50 câu hỏi</li>
      <li>Đề thi có 2 dạng 
        <ul>
          <li>Thi thường (thi bất cứ lúc nào)</li>
          <li>Thi trực tuyến (thi vào 1 khung giờ do giáo viên chỉ định)</li>
        </ul>
      </li>
      <li>Cho phép giáo viên đăng tải 1 bài viết, tin tức, tài liệu</li>
    </ul>
  </li>
</ul>

<ul>
  <li>Các màn hình
    <ul>
      <li>Đăng nhập, đăng kí, quên mật khẩu</li>
      <li>Trang chủ </li>
      <li>Trang danh sách đề thi trực tuyến </li>
      <li>Trang danh sách đề thi thường </li>
      <li>Trang hồ sơ, thông tin </li>
      <li>Trang bài viết </li>
      <li>Trang trò chuyện </li>
    </ul>
  </li>
</ul>

<ul>
  <li>Công nghệ sử dụng
    <ul>
      <li>Client: Angular 4, Boostrap, Angular Material </li>
      <li>Server: Node.js 10.15.0 kết hợp với framework Express 4.16.3 </li>
      <li>Database: MongoDB (sử dụng mlab) </li>
    </ul>
  </li>
</ul>
<ul>
  <li>Thảo luận, công việc
    <ul>
      <li>Sử dụng Trello </li>
      <li>Group chat Facebook </li>
    </ul>
  </li>
</ul>

### Nhóm thực hiện theo quy trình Scrum
##### Các vị trí và công việc tương ứng trong quy trình Scrum:
* <i>Phí Xuân Hoàn</i> (<b>Product Owner</b>): Là người chịu trách nghiệm về sự thành công của ứng dụng, có nhiệm vụ tìm hiểu nhu cầu của khách hàng, từ đó hoạch định ra các hạng mục cần phát triển của dự án(lập Product Backlog). Là người có tiếng nói cuối cùng mọi quyết định liên quan đến ứng dụng.
* <i>Trần Tiến Đức</i> (<b>ScrumMaster</b>): Là người đảm bảo nhóm luôn hoạt động năng suất. Đức giúp Hoàn quản lý Product Backlog, đảm bảo việc bố trí Product Backlog sao cho hợp lý. Phổ biến cho các thành viên trong nhóm về việc tổ chức, làm việc, kỹ thuật trong Scrum. Là người quan sát trong nhóm, sẽ giúp đỡ các thành viên khi họ gặp khó khăn.
* <i>Tất cả thành viên nhóm</i> (<b>Nhóm phát triển</b>): Trực tiếp sản xuất ứng dụng, không có ai chịu trách nghiệm quản lý nhóm, vậy nên kết quả công việc thuộc về toàn bộ nhóm. Nhóm sẽ lập kế hoạch thực hiện các hạng mục Product Backlog trong từng Sprint. Nhóm phải thường xuyên trao đổi thường xuyên với Product Owner để đảm bảo công việc luôn đi đúng hướng.

Chi tiết tại: https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10

#### Các màn hình đã làm

* Trang chủ
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week1_image/home.png" >

* Trang quản lý người dùng
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week1_image/users.png">

* Hộp thoại thay đổi màu nền thanh bên
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week1_image/fixbar.png">

* Trang đăng nhập
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week1_image/login.png">

* Trang điền đáp án
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week1_image/test.png">

#### Quy trình thực hiện
  * Lựa chọn quy trình Scrum
  * User story    
  <div class="container">
     
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Là một</th>
        <th>Tôi muốn</th>
        <th>Để</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Người quản lý</td>
        <td>Xem, thêm, sửa, xóa một nhóm người dùng (group) ví dụ như học sinh, giáo viên, người quản lý</td>
        <td>Quản lý dễ dàng</td>
      </tr>
      <tr>
        <td>Người quản lý</td>
        <td>Xem, thêm, sửa, xóa một người dùng mới (admin, student, teacher)</td>
        <td>Tiện cho việc quản lý</td>
      </tr>
      <tr>
        <td>Người quản lý</td>
        <td>Thêm, sửa, xóa một danh sách chủ để môn học (subject)</td>
        <td>Lưu trữ các đề thi</td>
      </tr>
      <tr>
         <td>Người quản lý</td>
        <td>Xem, thêm, sửa, xóa một để thi thuộc một môn học bất kì</td>
        <td>Lưu trữ, chỉnh sửa</td>
      </tr>
      <tr>
         <td>Người quản lý</td>
        <td>Thêm, sửa, xóa một nhóm tin tức (category)</td>
        <td>Lưu trữ các tin tức</td>
      </tr>
       <tr>
         <td>Người quản lý</td>
        <td>Thêm, sửa, xóa một tin tức (bài viết, bài báo,…) thuộc về một nhóm tin tức nào đó</td>
        <td>Lưu trữ, chỉnh sửa, hiển thị</td>
      </tr>
      <tr>
         <td>Người quản lý</td>
        <td>Xem kết quả của các bài thi trên đồ thị hoặc biểu đồ </td>
        <td>Thống kê và cải tiến chất lượng của đề thi</td>
      </tr>
      <tr>
         <td>Người quản lý</td>
        <td>Người dùng truy cập vào ứng dụng phải đăng nhập </td>
        <td>Thực hiên các chức năng phù hợp</td>
      </tr>
      <tr>
         <td>Học sinh hoặc giáo viên</td>
        <td>Có một trang chủ chứa thông tin về bài viết, đề thi</td>
        <td>Hiển thị các thông tin</td>
      </tr>
      <tr>
         <td>Học sinh hoặc giáo viên</td>
        <td>Có một trang bài viết, tin tức</td>
        <td>Hiển thị các bài viết, tin tức</td>
      </tr>
      <tr>
         <td>Người dùng</td>
        <td>Có một trang thông tin cá nhân (profile)</td>
        <td>Xem, chỉnh sửa thông tin của chính mình</td>
      </tr>
      <tr>
         <td>Người dùng</td>
        <td>Có một trang đăng ký tài khoản vào ứng dụng</td>
        <td>Ghi danh</td>
      </tr>
      <tr>
         <td>Người dùng</td>
        <td>Có một trang quên mật khẩu</td>
        <td>Lấy lại mật khẩu khi cần</td>
      </tr>
    </tbody>
  </table>
</div>

* Sprint 1 (3 tuần)
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week2_image/sprint_1.jpg">


* Sprint 2 (2 tuần)
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week2_image/sprint_2.jpg">


* Sprint 3 (2 tuần)
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week2_image/sprint_3.jpg">


* Sprint 4 (2 tuần)
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week2_image/sprint_4.jpg">


* Sprint 5 (3 tuần)
<img src="https://github.com/hoanphi2201/INT2208-8-2019/blob/master/nhom-10/week2_image/sprint_5.jpg">
