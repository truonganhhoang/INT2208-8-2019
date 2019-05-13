- Họ tên sinh viên: **_Cao Thị Ngọc Huyền_**
- MSSV: **_17020807_**
- Nhóm dự án: **_Nhóm 28_** 
- Môn học: **_Công Nghệ Phần Mềm (INT2208-8)_**
- Vai trò: Developer, Tester.
 # BÁO CÁO CÁ NHÂN
1. Hoàn thành khóa học trên edx ([chi tiết]())
2. Bài tập dự án: [**_Food for Family_**](http://foodforfamilyf3.pythonanywhere.com/) - web dạy nấu ăn
### User story: 
_**Là người học nấu ăn, tôi muốn có một trang giao diện riêng có đầy đủ hình ảnh minh họa, nguyên liệu, công thức và phần video hướng dẫn chi tiết cho từng món ăn để việc học nấu ăn dễ dàng hơn**_
###  Đánh giá theo quy tắc INVEST:

- **_Independent_**: user story này là cụ thể và độc lập với các user story khác

- **_Negotiable_**: có thể thương lượng khi thêm các tính năng bổ sung hoặc chỉnh sửa nội dung

- **_Valuable_**: giúp người học nấu ăn dễ dàng làm theo công thức với các video chi tiết, cụ thể

- **_Estimable_**: cần nguồn video, chỉnh sửa giao diện phần xem công thức nấu ăn của từng món (khoảng 15h)

- _**Small**_: dễ chỉnh sửa, bổ sung, tuy nhiên việc thu thập video phụ thuộc vào số lượng công thức món ăn

- **_Testable_**: có thể dễ dàng kiểm thử để cập nhật đúng theo hướng mà người dùng mong muốn

### Công việc cần thực hiện cho user story:

- [x] Nắm bắt chung các yêu cầu: Yêu cầu người dùng là có giao diện xem công thức, dữ liệu cần chi tiết và rõ ràng, đáp ứng được nhu cầu người dùng [Requirements process](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.4e8vcw2o7pg2)
 + Yêu cầu chức năng: giao diện công thức (gồm hình ảnh, nguyên liệu công thức, video) sẽ hiển thị thế nào trên màn hình, sử dụng thanh tìm kiếm ra sao,...
+ Yêu cầu phi chức năng: Dễ sử dụng (Người dùng chỉ cần nhấn vào phần công thức nấu ăn của một món cụ thể, sẽ hiển thị một video để xem cách chế biến của món đó), kiểm thử dễ dàng.

- [x] [Xác định tính chất của yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.s0hihj78muyz): đầy đủ, nhất quán, chính xác và xúc tích

- [x] [Thẩm định yêu cầu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.a3b33sgbrokp): Đo lường khi nào thì chức năng hoàn thành được đánh giá là đạt yêu cầu

- [x] Tạo user story theo [quy trình Scrum](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.wgcflgn6nhvc)

- [x] Đánh giá user story theo [nguyên tắc INVEST](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.q7gf6fh2jgdn)

- [x]  Tìm hiểu về Python và Framework Flask đặc biệt lưu ý đến phần nhúng video:
[Flask-embed-video](http://www.compjour.org/lessons/flask-single-page/simple-youtube-viewing-flask-app/)

- [x] Xây dựng APIs giúp gửi dữ liệu lên server
[Tài liệu thiết kế API](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.1ir22jw41cpg) 
[Commit code](https://github.com/Nguyenhuy2801/nhom-28/commit/b3ec8b3e47d24f58ee88b9f2d64677dab0c49b48) 

- [x] Thu thập dữ liệu:  Tạo kho dữ liệu gồm ảnh, nguyên liệu, công thức, link nhúng video hướng dẫn nấu ăn theo từng món đã có trong danh sách món ăn của trang web (10h)

- [x] Thiết kế Database tối ưu nhất [Tài liệu](https://www.ntu.edu.sg/home/ehchua/programming/sql/relational_database_design.html)

- [x] Đưa dữ liệu về công thức, hình ảnh, video của món ăn vào database sử dụng Xampp

- [x] Thiết kế sơ đồ giao diện mới cho giao diện xem công thức nấu ăn, thêm sắp xếp lại các phần cho hợp lí: 
[Tài liệu về sơ đồ](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.gk2kwayhjxq4)
[Sơ đồ giao diện mới](https://github.com/Nguyenhuy2801/nhom-28/commit/672556e3c30f2a06bb553870c8ac38093844b726)

- [x] Sử dụng HTML và CSS để thiết kế giao diện đẹp hơn
 [Commit code](https://github.com/Nguyenhuy2801/nhom-28/blob/master/Project_28/flask_project/templates/app_nauan.html)

- [x] Tạo phương thức tìm kiếm cho giao diện món ăn.
[Commit code](https://github.com/Nguyenhuy2801/nhom-28/commit/c8c28c90a8bec388b6d6878f52881ba439c80ab8)

- [x] Kiểm thử bằng [kiểm thử hộp đen](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd) để viết các ca kiểm thử, kiểm tra giao diện, chức năng tìm kiếm,... (1-2 giờ)

- [x]  Loại bỏ các loại [mã xấu](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.x5jzfha6cshw) (1-2 giờ).
 
## Giới thiệu và hướng dẫn sử dụng chức năng:

**Giới thiệu chức năng:**

Chức năng được tạo ra để phù hợp yêu cầu của khách hàng theo user story ở trên. 

Với các tính năng xem công thức món ăn, gồm các phần: 
- Hình ảnh minh họa
- Nguyên liệu cần dùng
- Công thức chi tiết
- Video hướng dẫn nấu ăn


**Hướng dẫn sử dụng:**
1. Mở trang web ở link: [http://foodforfamilyf3.pythonanywhere.com](http://foodforfamilyf3.pythonanywhere.com)
2. Nhấn vào một item món ăn mà bạn muốn xem công thức ở phần giao diện trang chủ hoặc ở bất cứ giao diện nào của phần công thức nấu ăn như: Các món theo mùa (Xuân, Hạ, Ngày ăn chay,...); Món ăn theo thành phần (Gà, Thịt heo, Tôm, Đậu hũ,...); Món ăn theo cách chế biến; Món ăn theo văn hóa các vùng.
<img src= "https://i.imgur.com/dzc9Cmf.png">
  Màn hình công thức của món đó sẽ hiện ra như sau: 
  <img src= "https://i.imgur.com/JgRFCFh.png">
  Vì là video nhúng từ YOUTUBE, nên người dùng có thể có các tính năng như share video trên các mạng xã hội, hơn nữa còn có thể vào kênh dạy nấu ăn trên YOUTUBE để tìm hiểu thêm nhiều công thức mới hơn.
