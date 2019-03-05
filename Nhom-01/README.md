# INT2208-8-2019
Môn học CNPM

## Gheets Danh sách lớp, nhóm, và tài liệu môn học

https://docs.google.com/spreadsheets/d/1hRc_sCYV6-O9ELMNNB0Y8MQ25Xu6XZmCN_Gbc7jUAuk/edit#gid=963192854  

# Phần mềm hỗ trợ học từ mới tiếng Anh trên nền tảng Android

## Thành viên
1. Phạm Ngọc Hiếu `mssv: 17020025`
2. Vương Bảo Long `mssv: 17021197`
3. Nguyễn Nhật Minh `mssv: 17020035`
4. Vũ Thị Thiên Anh `mssv: 17020020`
5. Nguyễn Thành Đạt `mssv: 1702xxxx`

## Giới thiệu về phần mềm
### Tên phần mềm:
### Mô tả phần mềm:
Phần mềm hỗ trợ người dùng học từ vựng tiếng Anh thông qua các tiện ích: Lưu trữ danh sách từ vựng, quá trình học từ vựng một cách hệ thống, nhắc nhở, kiểm tra, chơi trò chơi... và có một cộng đồng để mọi người tương tác học tập

### Ý nghĩa, mục đích hướng đến
* Giúp người dùng học tiếng Anh một cách hiệu quả, có lộ trình và không nhàm chán
* Xây dựng cộng đồng có cùng mục đích học từ vựng Tiếng Anh. Từ đó có thể giúp đỡ, thi đua với nhau, tạo ra một môi trường để mọi người cùng tiến bộ

### Đối tượng người dùng
Học sinh, sinh viên, giáo viên hoặc bắt cứ ai có nhu cầu học và tăng vốn từ Tiếng Anh

### Các tính năng nổi trội
* Cung cấp hệ thống tự vựng phong phú có sẵn
* Các từ vựng có thể lưu và hiển thị các thì liên quan, từ đồng nghĩa, trái nghĩa
* Người dùng có thể khởi tạo danh sách từ vựng cho riêng mình (từ hệ thống từ vựng có sẵn hoặc tự thêm nếu hệ thống có sẵn chưa có), và dựa vào danh sách đó, hệ thống sẽ giúp người dùng học thông qua việc nhắc nhở, kiểm tra hay chơi trò chơi
* Việc học từ mới hiển thị theo dạng flashcard ( một dạng kiểm tra nghĩa ngay khi đọc từ nếu muốn )
* Người dùng có thể tương tác với nhau như hỏi đáp, chia sẻ danh sách tự vựng của mình, hay thi đua high score một trò chơi nào đó.

## Chi tiết sản phẩm
### Words Database
Database này đã có sẵn, mỗi word cần có một ID (1) riêng, được đánh số tăng dần, giống nhau trên mọi thiết bị
### Database trên firebase:
* User: thông tin đăng nhập
Mỗi user có 2 thông tin: username và password trên firebase
* Wordlist: Bất cứ ai cũng có thể tạo danh sách từ và chia sẻ cho người khác
Cần có 3 cột:
1. id (2) (sinh ngẫu nhiên, dài ít nhất 9 ký tự , tránh sự trùng lặp)
2. name: Tên wordlist (do user đặt)
3. wordlist: Một mảng chứa ID (ở (1)) là danh sách các từ đã tạo
* Ownership : Lưu trữ xem danh sách từ (wordlist) nào là của ai
Cần 2 cột:
1. owner: username của tất cả users, sau khi đăng ký lập tức thêm một hàng với username mới này
2. wordlist: một mảng chứa ID (ở (2)) là danh sách các wordlists có ID tương ứng

### UX
* Khi mở app mà chưa đăng nhập: yêu cầu đăng ký hoặc đăng nhập, nếu đã đăng nhập thì giữ session này mãi (giữ trạng thái đã đăng nhập).
* Màn hình chính:
	Có 2 tab, một tab là phần học từ mới, một tab là các danh sách từ của tôi
* Phần học từ mới:
	- Có một danh sách các Topics, mỗi topics sẽ giữ progress đã xong
	- Khi ấn vào mỗi Topics, sẽ có 1 flashcard, trên đó chỉ có từ tiếng Anh, vuốt lên sẽ thấy thì quá khứ của từ đó, vuốt lên 2 lần sẽ thấy thì quá khứ hoàn thành, vuốt xuống sẽ thấy thì tương lai
	- Vuốt sang trái là đã biết rồi, vuốt sang phải là chưa biết và chuyển sang từ tiếp theo (giống Tinder)
	- Nếu không biết nghĩa, ấn vào card, nó sẽ lật mặt lại hiển thị nghĩa
	- Ở mỗi từ sẽ có 1 ký hiệu (+) để thêm vào các danh sách từ, khi ấn vào sẽ hiện lên 1 pop-up các danh sách từ, có thể tạo mới (giống tạo danh sách nhạc)
* Phần danh sách từ:
	- Sang tab này sẽ hiện các danh sách các từ của tôi (hiển thị tên và ID tương ứng, copyable để còn đem đi share) (lấy từ trên firebase, table ownership)
	- Mỗi danh sách từ khi ấn vào sẽ hiện lên danh sách các từ của nó dưới dạng list text thô, khi ấn vào mỗi từ mới hiện lên thông tin từ có dạng flashcard, ấn vào thì lật mặt hiện nghĩa, nhưng khác với bên trên là vuốt sang trái thì từ đứng đằng trước, vuốt sang phải thì đến từ đứng đằng sau
	- Tạo thêm danh sách từ:
		- Tạo mới danh sách từ :
		Khi ấn tạo mới  danh sách từ, giao diện danh sách từ hiện lên, bao gồm:
			- Searchbox: Giống từ điển, search trong Database từ tại máy, cứ chọn được một từ là đưa vào danh sách chờ
			- Name: điền tên danh sách từ vào
			- Button complete: ấn vào sẽ tạo danh sách từ trên firebase, table wordlist (danh sách từ tạo random ID)
		- Tải danh sách từ đã có (danh sách của người khác):
			- Text input cho phép nhập ID của danh sách từ, nếu tồn tại trên table wordlist thì trả danh sách từ đó về, lúc này điền thêm ID của danh sách từ của tôi (table ownership nếu trong đó chưa tồn tại danh sách từ với ID này)
			- Sau khi Tải danh sách từ đã có, làm mới danh sách từ của tôi





## Quy trình  
* Lên ý tưởng dự án, lựa chọn đối tượng hướng đến  
* Đưa ra thiết kế ban đầu về những tính năng, trải nghiệm mà người dùng có thể trải nghiệm  
* Lựa chọn công nghệ  
* Design UI - UX để phục vụ những tính năng đã đưa ra, Chuẩn bị Database  
* Implement  
* Kiểm thử, bổ sung chức năng (nếu cần)  
* Viết lại Document, Release  

### 1. Lên ý tưởng  
* Phần mềm hỗ trợ học từ mới tiếng Anh trên nền tảng Android, mọi đối tượng muốn học từ vựng đều có thể sử dụng  
* Đã xong  

### 2. Đưa ra thiết kế ban đầu về những tính năng, trải nghiệm mà người dùng có thể trải nghiệm  
* Chia topic cho các từ vựng, sau đó dựa theo sự quen thuộc của từng người dùng với các từ đó mà đưa ra các tương tác thích hợp  
* Muộn nhất 22/02

### 3. Lựa chọn công nghệ  
* Xây dựng trên android, sử dụng Java cùng Android Studio, sử dụng Firebase để xây dựng tương tác người - người  
* Đã xong  

### 4. Design UI - UX để phục vụ những tính năng đã đưa ra  
* Sau khi xong (2)  
* Muộn nhất 03/03

### 5. Implement  
* Sau khi xong (4)  
* Muộn nhất 24/03

### 6. Kiểm thử, bổ sung chức năng (nếu cần)  
* Sau khi xong (5)  
* Muộn nhất 31/03  

### 7. Viết lại Document, Release  
* Xong trước 07/04  
