#### Họ Tên: Phí Xuân Hoàn
#### Ngày Sinh: 22/01/1999
#### Mã Sinh Viên: 17020759
#### Nhóm dự án: Nhóm 10
#### Vau trò: Product Owner & Developer


## Báo cáo quá trình tự học
#### Tham gia các khoá học HTML CSS JS Node.js trên freecodecamp để có kiến thức làm bài tập lớn: 

+ >100%, Responsive Web Design, [ảnh dẫn chứng](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/PhiXuanHoan/images/Certification_Responsive_Web_Design.png)
+ >100%, Javascript Algorithms And Data Structures, [ảnh dẫn chứng](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/PhiXuanHoan/images/Javascript%20Algorithms%20And%20Data%20Structures%20Certification.png)
+ >100%, Front End Libraries , [ảnh dẫn chứng](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/PhiXuanHoan/images/Front%20End%20Libraries.png)
+ >100%, Data Visualization  , [ảnh dẫn chứng](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/PhiXuanHoan/images/DataVisualization.png)
+ >100%, Apis And Microservices , [ảnh dẫn chứng](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/PhiXuanHoan/images/APIsandMicroservices.png)

#### Khoá học trên EDX:  [Ảnh dẫn chứng](https://github.com/hoanphi2201/INT2208-8-2019/blob/master/PhiXuanHoan/SoftEng1x.jpg)

## Báo cáo công việc đã làm trong quá trình học

#### User Story được giao: Là một người dùng tôi muốn có thể đăng nhập bằng facebook, google để tiết kiệm thời gian tham gia vào ứng dụng (Phí Xuân Hoàn)

##### Nội dung
- Nhận thấy việc tham gia hệ thống bằng việc đăng ký tài khoản mất quá nhiều thời gian nhập dữ liệu sau khi điền thông tin người dùng lại phải xác nhận qua email hoặc số điện thoại.
- Các mạng xã hội lớn đã hỗ trợ các api lấy thông tin của người dùng một cách hiệu quả.
- Thay vì việc đăng ký đăng nhập tốn thời gian người dùng chỉ cần nhấp chuột vào "Đăng nhập google" hoặc "Đăng nhập facebook" một tài khoản sẽ tự động được tạo với đầu đủ thông tin tài khoản và ảnh đại diện.
- Sau khi đăng nhập thành công người dùng sẽ được chuyển đến trang đăng nhập hoặc quay lại trang trước đó người dùng bị chuyển đến bằng tham số returnUrl.
- Hệ thống sẽ lấy được các thông tin cơ bản của người dùng sau đó cần phải thực hiện lưu người dùng. kiểm tra id facebook hoặc google đã có hay chưa nếu có thì đăng nhập. Nếu chưa tồn tại người dùng cần phải lưu người dùng vào cơ sở dữ liệu, tải ảnh đại diện của người dùng.
- Hệ thống sẽ sử dụng 2 thư viện chính là passport.js và jwt để kiểm tra thông tin người dùng và tạo ra một token trả về cho client. Lựa chọn phương án lưu thông tin vào localStorage.

##### Công việc cần làm

- [x] Làm rõ yêu cầu (giao diện như thế nào, sau khi đăng nhập chuyển đến trang nào, cần những dữ liệu nào mà google, facebook trả về hệ thống của mình) [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex)

- [x] Thẩm định yêu cầu [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.a3b33sgbrokp) 

- [x] Các yêu cầu khác (giao diện di động, yêu cầu về hiệu năng ...)  [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.99diysc4s7mc)

- [x] User story được xây dựng dựa trên mô hình MVC kết hợp API [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.rxyqst9dtgtt)   [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.tild5ajfrgup)  [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.nzr0nabmnmj3) [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.58qkxg2rderr) [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.rxyqst9dtgtt)

- [x] Tìm tài liệu đọc về google auth và faccebook auth  
Google:  [url](https://developers.google.com/identity/sign-in/web/sign-in)
 Facebook: [url](https://developers.facebook.com/docs/facebook-login/)

- [x] Tạo ứng dụng trên nền tảng facebook, google để có được facebook app id và google client id (1-2 giờ)
Google: [url](https://console.developers.google.com/apis/credentials)
Facebook: [url]( https://developers.facebook.com/apps/325860808251746/dashboard/)

- [x] Xây dựng giao diện đăng nhập. gồm các input đăng nhập bằng local. các nút nhấn có biểu tượng facebook, google (2 giờ)    [bootstrap](https://getbootstrap.com/) [w3school](https://www.w3schools.com/html/default.asp) [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.t50jyopjk04o) | [commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/b36c02826492e28066ad084052f119c781601e92)

- [x] Thiết kế sơ đồ tương tác ví dụ như các tiện ích bằng nút nhấn chuyển trang (ví dụ như ở trang đăng nhập thì họ sẽ có xác suất đến trang đăng ký)  [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.gk2kwayhjxq4) |  [commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/b36c02826492e28066ad084052f119c781601e92)

- [x] Kiểm tra dữ liệu form đăng nhập [commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/5e6f9bcd644ffab2c0be22568c1e6b953e09c191)

- [x] Viết Service yêu cầu trả về dữ liệu người dùng của facebook, google (cần custom để lấy thêm thông tin) (2-3 giờ) [commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/f46658b9d3b9fe9976eb28cf4cafe4b74dcb1a7c)  [commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/f98d1e6885ac94db5d20e4c376b0b3b9e713feb2)

- [x] Viết service gửi thông tin người dùng cho server của hệ thống thực hiện xác minh [commit](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10/commit/5e8034457fd0959ff363c897a0e4b3fc62bd3056)

- [x] Viết API ghi nhận người dùng vào hệ thống (2-3 giờ) [commit](https://github.com/hoanphi2201/API-NOP/commit/d681199e3df39c26d788a49aed992990a3f1c9ae)  [commit](https://github.com/hoanphi2201/API-NOP/commit/d7e33413608ddeeb253931e961a603f8f1d9bd82) [commit](https://github.com/hoanphi2201/API-NOP/commit/2702888155158a965559b876a7f407fb0d6c7510) 

- [x] Xử lý download ảnh đại diện về hệ thống của mình (1-2 giờ) [commit](https://github.com/hoanphi2201/API-NOP/commit/4c7972f0c5994e8c439b3eefc38cb4bc76019bef)  [commit](https://github.com/hoanphi2201/API-NOP/commit/a6e3258b34ed581890ef6f0481174f658921d11a)


- [x] Xử lý trùng tên đăng nhập (1 giờ)  [commit](https://github.com/hoanphi2201/API-NOP/commit/4c7972f0c5994e8c439b3eefc38cb4bc76019bef)  [commit](https://github.com/hoanphi2201/API-NOP/commit/a6e3258b34ed581890ef6f0481174f658921d11a)


##### Testing

- [x] Kiểm thử hộp trắng độ bao phủ [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)

- [x] Kiểm thư giao diện (reponsive, text, ...) [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd)

- [x]  Unit Testing với Karma và Jasmine [tài liệu](https://github.com/truonganhhoang/int3507-2016/wiki/%5BPATH%5D-Testing-in-angular-2)

- [x] Cho các thành viên trong nhóm kiểm thử và dùng thử, mời 1 số người dùng trải nghiệm.

## Tổng hợp quá trình làm bài tập nhóm 

- Repo sản phẩm được triển khai tại [GITHUB](https://github.com/hoanphi2201/SoftEng-Assignments-nhom-10)

- Link Vieo báo cáo và demo dự án:  [YOUTUBE](https://youtu.be/bxZMtXm2gAk)

- Sản phẩm được deloy sử dụng ec2 và s3 của amazon: 
+ >Trang chủ http://luyenthi365.xyz
+ >Trang quản trị [Link](http://webthi-angular.s3-website-ap-southeast-1.amazonaws.com)
+ >Link dự phòng [Link](http://luyenthi365.xyz.s3-website-ap-southeast-1.amazonaws.com)
