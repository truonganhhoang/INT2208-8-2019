-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 10, 2019 lúc 10:16 PM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `booksparadise`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `comment` varchar(500) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `comments`
--

INSERT INTO `comments` (`id_comment`, `id_user`, `product_id`, `comment`) VALUES
(7, 6, 1, 'sách khá thú vị , các bạn nên tìm đọc'),
(8, 3, 6, 'rất hay và hấp dẫn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orderdetails`
--

CREATE TABLE `orderdetails` (
  `orderNumber` int(255) NOT NULL,
  `product_id` int(255) NOT NULL,
  `quantity` int(255) NOT NULL,
  `priceEach` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `orderdetails`
--

INSERT INTO `orderdetails` (`orderNumber`, `product_id`, `quantity`, `priceEach`) VALUES
(1, 15, 2, 35),
(1, 12, 1, 50),
(2, 2, 3, 40),
(2, 1, 1, 20);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `orderNumber` int(255) NOT NULL,
  `id_user` int(255) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_bin NOT NULL,
  `notes` varchar(255) COLLATE utf8mb4_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`orderNumber`, `id_user`, `name`, `email`, `address`, `phone`, `notes`) VALUES
(1, 6, 'Tran van A', 'king@gmail.com', '144 xuân thủy', '0944790124', 'nhan hang buoi sang'),
(2, 6, 'Tran Van Thang', 'thangtran990201@ggmail.com', '144 xuân thủy', '0944790123', 'nhan hang buoi chieu');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(255) NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `cost` int(255) NOT NULL,
  `type` varchar(50) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `quantityInStock` int(255) NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `Description` varchar(1500) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `numberpage` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `image`, `title`, `cost`, `type`, `quantityInStock`, `author`, `Description`, `numberpage`) VALUES
(1, 'animorphs.jpg', 'NGƯỜI HOÁ THÚ', 20, 'Văn Học Nước Ngoài', 1, ' K.A Applegate', 'Ax là thành viên duy nhất còn sống sau khi tàu Vòm của người Andalite bị bọn Yeerk đánh úp ngoài không gian. Giờ cậu đang trú trên Trái Đất, cùng nhóm bạn con người đã giải cứu mình. Cùng nhau, Ax với nhóm Người Hóa Thú trở thành lực lượng chiến đấu duy nhất giúp loài người chống lại cuộc xâm lược của bọn Yeerk.\r\n\r\n \r\n\r\nNhưng Ax có những bí mật. Một trang sử đen tối của dân tộc mình mà cậu không thể chia sẻ với người ngoài. Và một lời thề mà cậu phải thực hiện: báo thù cho anh trai Elfangor - giết Visser Ba, dù có phải trả giá bằng tính mạng mình', '200'),
(2, 'ngayvadem.jpg', 'NGÀY VÀ ĐÊM', 40, 'Văn Học Nước Ngoài', 20, 'Emily Bone', 'Thế giới động vật muôn hình vạn trạng có bao điều bất ngờ  chờ em khám phá.\r\nCuốn sách xinh xắn được trình bày khoa học này ngập tràn minh họa rực rỡ cùng vô vàn kiến thức bổ ích về các loài hoạt động về đêm và các loài kiếm ăn ban ngày.\r\nĐây sẽ là người bạn nhỏ giúp em hiểu thêm về cuộc sống của muôn loài ngoài thiên nhiên kỳ thú.', '150'),
(3, 'thanthoai.jpg', 'THẦN THOẠI', 30, 'Văn Học Nước Ngoài', 0, ' Anne Royer', 'Ai là “sếp” của các vị thần Hy Lạp?Vị thần Ai cập nào có đầu lừa? Con mắt thứ ba của thần Shiva dùng để làm gì? Tóc của Medusa làm bằng gì? Oedipus đã cưới ai mà chàng không hề hay biết? Năm mới Trung quốc bắt nguồn từ con vật nào? Với người Aztec, con người đầu tiên xuất hiện như thế nào?\r\n\r\n \r\n\r\nHơn 200 câu hỏi-đáp thú vị về thần thoại Hy Lạp, Ai Cập, Viking, Ấn Độ, Nhật Bản… và còn nhiều thứ khác nữa.', '500'),
(4, 'thegioikhunglong.jpg', 'THẾ GIỚI KHỦNG LONG', 60, 'Khoa Học', 0, 'John marius Butler . SGA', 'Hãy cùng gặp gỡ những sinh vật đã gầm rống, bước đi rầm rập và nhai rào rạo trên hành tinh này hàng triệu năm về trước. Hãy cùng tìm hiểu xem chúng thích ăn gì, chúng sợ kẻ nào và chúng di chuyển ra sao.\r\n\r\n \r\n\r\nCuốn sách tuyệt đẹp này phô bày vẻ lộng lẫy của bầy khủng long, các hình nổi sống động đáng kinh ngạc đem đến sức sống cho chúng, khiến chúng như thể nhảy ra khỏi những trang sách!', '257'),
(5, 'thiennhienkythu.jpg', 'THIÊN NHIÊN KỲ THÚ', 25, 'Khoa Học', 0, 'Mai Linh (Dịch giả)', 'Bạn có biết loài sinh vật nào sống lâu nhất hành tinh? Chính là sứa Turritopsis nutricula, hay còn gọi là sứa bất tử, bởi loài này có khả năng cải lão hoàn đồng, không bao giờ chết. Trong khi loài “yểu mệnh” nhất là phù du lại chỉ sống vỏn vẹn có một ngày!\r\n\r\n \r\n\r\nMột cuốn bách khoa thư đầy ắp những điều ngạc nhiên, được chia thành các chủ đề “Lạ nhỉ!”, “Cẩn thận, nguy hiểm đấy!”, “Từ thái cực này đến thái cực khác”, “Những bí ẩn được giấu kín”, “Nghìn lẻ một kho báu”, đi kèm với những bức ảnh tuyệt đẹp và những tranh minh họa hài hước thú vị. Một mỏ thông tin về thiên nhiên kỳ thú đang chờ bạn khám phá!', '460'),
(6, 'tomsawyer.jpg', 'TOMSAWYER', 64, 'Văn Học Nước Ngoài', 3, 'Mark Twain', 'Phiêu lưu cùng tomsawyer', '566'),
(8, 'thegioiraucuqua.jpg', 'THẾ GIỚI RAU CỦ QUẢ', 44, 'Thiếu nhi', 0, ' Virginie Aladjidi - Emmanuelle.', 'Một cuốn cẩm nang được minh họa với những sắc màu phong phú và vui mắt, giới thiệu với bạn đọc các loài rau củ quả đến từ khắp nơi trên thế giới, dù lạ lẫm hay quen thuộc, dù mọc ngầm trong đất hay leo trên giàn cao, dù đơm hoa vào mùa hè hay kết trái vào mùa đông… Trên tinh thần của các nhà vạn vật học cách đây nhiều thế kỷ, Emmanuelle Tchoukriel đã tái tạo một cách chính xác sự đa dạng về hình dáng, màu sắc và cấu tạo của hơn 80 loài rau củ quả, kèm theo đó là những thông tin khoa học đơn giản và dễ hiểu ', '248'),
(9, 'khuvuondemcuatom.jpg', 'KHU VƯỜN ĐÊM CỦA TOM', 24, 'Thiếu nhi', 0, 'Philippa Pearce', 'Bằng trí tưởng tượng tuyệt vời, nha văn PHILIPPA PEARCE đã xây dựng một câu chuyện khiến người đọc vừa ngỡ ngàng vừa cảm động. KHU VƯỜN ĐÊM CỦA TOM không chỉ là một tác phẩm kinh điển dành cho thiếu nhi mà còn là một hoài niệm đẹp về tuổi thơ dành cho bất cứ ai đã từng qua thời thơ ấu.', '90'),
(10, 'mandalathiennhien.jpg', 'MANDALA THIÊN NHIÊN ', 15, 'Thiếu nhi', 0, ' Marty Noble', 'HƠN 30 BỨC VẼ MANDALA ĐỘC ĐÁO ĐỂ BẠN TÔ MÀU\r\n\r\nMột sự kết hợp độc đáo và xuất sắc giữa hoa văn Mandala và những hiện tượng sự vật trong thiên nhiên', '40'),
(11, 'chulinhchidungcam.jpg', 'CHÚ LÍNH CHÌ DŨNG CẢM', 48, 'Văn Học Nước Ngoài', 0, ' Hans Christian Andersen - Quentin Gréban.', 'Chú lính chì đồ chơi bị cụt mất một chân liên tiếp gặp những cuộc phiêu lưu gian khó, chú rơi xuống cửa sổ, chui vào cống ngầm, bị nuốt vào bụng cá… Rồi khi được trở về gia đình thì lại còn điều gì ngạc nhiên hơn đang chờ đón chú? Câu chuyện nhỏ và hấp dẫn từ đầu đến cuối kết thúc một cách đầy yêu thương, để lại dư âm ấm áp trong lòng trẻ.\r\n\r\nCùng đọc lại truyện cổ Andersen với bản minh họa ngộ nghĩnh của họa sĩ sách tranh hiện đại Quentin Gréban.', '300'),
(12, 'lichsuchientranh.jpg', 'LỊCH SỬ CHIẾN TRANH', 50, 'Lịch Sử', 1, ' John Keegan', 'Chiến tranh là văn minh hay dã man? Trả lời câu hỏi tưởng như dễ này, không dễ. Loài người ngày càng văn minh hơn, ngày càng nhiều khám phá khoa học gây sốc hơn và nhiều phát minh khó ngờ hơn, song chẳng phải vì vậy mà các cuộc chiến tranh ít đi. Ngược lại, chiến tranh vẫn tiếp tục, và sự tàn bạo của chiến tranh không hề giảm bớt - có chăng, chiến tranh chỉ ngày càng đa dạng, tinh vi hơn, khả năng giết người càng khủng khiếp hơn. Vậy loài người cần dựa vào đâu, cần có những gì để bảo đảm rằng các thế hệ tương lai sẽ chứng kiến một thế giới tuy vẫn còn quân đội nhưng sẽ ít chiến tranh hơn và vạn nhất chiến tranh có xảy ra, nó sẽ được kiểm soát tốt hơn, ít tàn bạo hơn?\r\n\r\n \r\n\r\nLịch sử chiến tranh của John Keegan là một tác phẩm công phu và quả cảm nhằm tìm câu trả lời không dễ cho những câu hỏi đó.\"', '750'),
(13, 'lichsuthegioi.jpg', 'LỊCH SỬ THẾ GIỚI', 35, 'Lịch Sử', 0, ' Jane Chisholm', 'Có bao giờ bạn tự hỏi, bánh xe được sáng tạo ra từ khi nào? Hay bạn muốn biết, vào lúc các Pharaoh cho xây dựng các Kim tự tháp ở Ai Cập thì người Ấn Độ đã văn minh đến đâu? Hoặc đơn giản, bạn đã quá ngán những tiết học lịch sử trên lớp, và muốn khám phá cuộc hành trình đến với văn minh của loài người theo một cách trực quan và sinh động, và nhất là… không gây buồn ngủ?', '870'),
(14, 'banhmikepchuot.jpg', 'BÁNH MÌ KẸP CHUỘT', 40, 'Thiếu nhi', 20, 'David Walliams', 'Zoe luôn mơ ước được có một sô diễn xiếc chuột của riêng mình, nhưng chú chuột hamster của con bé đã chết một cách đột ngột, còn chuột cưng mới thì đang gặp\r\n\r\n nguy hiểm chết người.\r\n\r\nTương lai thảm khốc nào chờ đang đợi nó?\r\n\r\nVà ai đang đứng sau tất cả chuyện này?\r\n\r\nLà bà mẹ kế bị ám ảnh với món bim bim vị tôm cốc tai và cực kỳ ghét chuột...\r\n\r\n... hay kẻ bán món bánh mì kẹp bí ẩn nhưng vô cùng hút khách?\"', '248'),
(15, 'cuocdoicuapi.jpg', 'CUỘC ĐỜI CỦA PI', 35, 'Thiếu nhi', 70, 'Yann Martel', '\"Mọi việc ở đời có bao giờ diễn ra như ta vẫn tưởng, nhưng biết làm sao. Cuộc đời đem cho ta cái gì thì ta phải nhận cái đó và chỉ còn cách làm cho chúng tốt đẹp nhất mà thôi.\"\r\n\r\nCuộc đời của Pi mở đầu với lời chào ấn tượng của tác giả, Yan Martel và hành trình tưởng như bế tắc khi ông mò mẫm đi tìm một câu chuyện cho sự nghiệp của mình. Lời chào ngắn ngủi ấy giúp người đọc hình dung được hoàn cảnh ra đời của cuốn sách và chẳng cần thắc mắc gì nhiều đến bối cảnh của câu chuyện. Và như thế, một Ấn Độ từ những năm 60, 70 của thế kỷ trước sống dậy cùng Pi, cùng vườn thú Poddicherry và cùng những ngày thơ ấu rối rắm và kỳ lạ.\"', '455');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `types`
--

CREATE TABLE `types` (
  `id_types` int(11) NOT NULL,
  `type` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `types`
--

INSERT INTO `types` (`id_types`, `type`) VALUES
(5, 'Khoa Học'),
(6, 'Thiếu nhi'),
(7, 'Lịch Sử'),
(8, 'Văn Học Nước Ngoài');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `user_password` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL,
  `fullname` varchar(255) COLLATE utf8mb4_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id_user`, `user_name`, `user_password`, `fullname`) VALUES
(1, 'user@gmail.com', 'pass123', 'user'),
(3, 'tranphuc072@gmaill.com', 'phuc1999', 'tranduyphuc'),
(6, 'thangtran990201@gmail.com', 'thang1999', 'thangtran');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Chỉ mục cho bảng `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD KEY `orderNumber` (`orderNumber`),
  ADD KEY `product_id` (`product_id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderNumber`),
  ADD KEY `id_user` (`id_user`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `type` (`type`);

--
-- Chỉ mục cho bảng `types`
--
ALTER TABLE `types`
  ADD PRIMARY KEY (`type`),
  ADD KEY `id_types` (`id_types`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `orderNumber` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `types`
--
ALTER TABLE `types`
  MODIFY `id_types` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `orderdetails`
--
ALTER TABLE `orderdetails`
  ADD CONSTRAINT `orderdetails_ibfk_1` FOREIGN KEY (`orderNumber`) REFERENCES `orders` (`orderNumber`),
  ADD CONSTRAINT `orderdetails_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);

--
-- Các ràng buộc cho bảng `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`type`) REFERENCES `types` (`type`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
