User Story:
Với tư cách là một admin tôi muốn:
- Tải truyện lên trang web
- Xóa truyện của trang web
- Sửa thông tin truyện
- Xem những truyện đã có ở trang web

Để cập nhật truyện, thông tin mới của các truyện cho trang web giúp người dùng có được thông tin mới khi đọc truyện ở trang web của tôi.


Hướng giải quyết của nhóm phát triển:
- [x] Làm rõ yêu cầu thống nhất chức năng.
(2 ngày)
 [edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.fvjpas4blmex)
- [x] Áp dụng nguyên lí chia nhỏ giao diện thành các phần nhỏ với mỗi chức năng cho một giao diện.
 (tạo giao diện thêm, sửa, thêm: 7 ngày)
[edx](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#)
[commit](https://github.com/phamhung99/Website-truyen-tranh/commit/366fe9330164d96b654d1264586d8403facc8163)
- [x] Phát triển các router tùy thuộc từng chức năng đã thống nhất.
(phát triển chức năng ở phía backend: 7 ngày)
 [REST](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.rxyqst9dtgtt)
[commit](https://github.com/phamhung99/Website-truyen-tranh/commit/3072252e19127b29d245c8a73a7a5fcb2b373beb)
- [x] Sử dụng Ajax để tối ưu chức năng. 
(Tối ưu một số chức năng giúp thao tác mượt mà hơn: 7 ngày )
[ajax](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.2teh197aonak)
[w3school ajax](https://www.w3schools.com/js/js_ajax_intro.asp)
[commit](https://github.com/phamhung99/Website-truyen-tranh/commit/516613d693f3172387bf307dba798a1434991c70)
- [x] Mã dễ đọc hơn.
(comment cho những chức năng trong các dòng code,phân hàm cho các phương thức ở mỗi chức năng - 2 ngày)
 [Tính dễ đọc](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zihsvljsrx0x) 

Kiểm thử:
- [x] Developer kiểm thử từng chức năng đã làm. 
[testing](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.ryzy80x4sqk1)
- [x] Đưa người dùng kiểm thử chức năng đã hoàn thành.
 [testing](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.zhrswbsdiifd)

Tiêu chí:
[Quy tắc INVEST](https://docs.google.com/document/d/1a4i_31R8WBUAnF91syr1FwBpKoAiTY6rEJt1xWjb74M/edit#heading=h.q7gf6fh2jgdn)

- Độc lập.(admin được cung cấp tài khoản riêng nên độc lập)
- Có thể thương lượng.(Các chức năng chó thể phát triển thêm để phù hợp với nhu cầu khách hàng)
- Có giá trị với khách hàng.(đáp ứng được các yêu cầu nêu ở trên)
- Ước lượng được.(Có thể được phát triển trong 3-5 ngày và thường được làm đầu tiên.)
- Đủ nhỏ.(Chức năng đủ nhỏ để xây dựng trong thời gian ngắn)
- Có thể kiểm thử.(Kiểm thử cho khách hàng check lỗi  và khả năng hoạt động ổn định của các chức năng)


Giới thiệu chức năng:

Chức năng được tạo ra để phù hợp yêu cầu của khách hàng theo user story ở trên. Với các tính năng gồm:
- Xem các truyện đang có trên trang web.
- Xóa truyện. 
- Thêm truyện mới.
- Thêm chap cho truyện đã có sẵn.
- Sửa một số thông tin của truyện đang có trên web.

Hướng dẫn sử dụng:

Đăng nhập vào tài khoản admin đã được cung cấp:

Gmail: admin@gmail.com

Password: admin

Hình ảnh:
<img src = "https://imgur.com/SOty1KW">


