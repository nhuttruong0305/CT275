-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 14, 2022 lúc 05:24 AM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ct275_project`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` char(10) NOT NULL,
  `pass_word` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `full_name`, `email`, `phone_number`, `pass_word`) VALUES
(1, 'trường', 'truong.lnt123@gmail.com', '0966899548', '11111'),
(2, 'Lê Nhựt Trường', 'truong.lnt654@gmail.com', '0123456789', '22222'),
(3, 'Nhựt', 'truongb1910015@student.ctu.edu.vn', '0966899548', '33333'),
(4, 'test', 'test@gmail.com', '0123456789', '$2y$10$w20CxlXOKDApuQ9CikyRx.3DtUO3sLQlNNyVCQDXPhQDx5LIN4sDq'),
(5, 'ok', 'ok@gmail.com', '0123456789', '$2y$10$EpakBD0muiwQ8qAP4H595u2DSHcOuXv2x7FDuyiXHJ9r/kxgWDGPq'),
(6, 'a', 'a@gmail.com', '0021345454', '$2y$10$UWgxp3dsryczdX6tXHBidOTTyyObk/AfIvnv2fEtn9JeG7120VpC2'),
(7, 'ttttt', 'l@gmail.com', '0145645645', '$2y$10$dKeu3.9p7ua4thTH1f2lk.Efv/5bRHsBWYsV4n5lAeYJwPjKL9Z9y'),
(8, 'Admin_Account', 'admin123@gmail.com', '', '$2a$12$lAwI5muSade5DPZc7/f7xOzY5vo2l/c7uFBAPwJeofIuwB4bfqOcq'),
(9, 'cá con', 'ca@gmail.com', '0000000000', '$2y$10$XX3P1m81o3tBxMVADvqdZ.OJi4XPHiIyk2Fl9Fp32u4Abv6eezyCS'),
(11, 'Nhựt Trường Lê', 'truongle@gmail.com', '0966899548', '$2y$10$N4xYiNi.HtlsgPfl0xx9n.t6QmP9FDFlbCQhrbVlXXbOKgL6kg1nK'),
(12, 'quideptrai@gmail.com', 'quideptrai@gmail.com', '0988422744', '$2y$10$8SXn9UiLkUU8P.QP9nCbfuMCopXAUunC4KlTYdFylFjstqj/4HMLa'),
(13, 'Trường 123', 'truongdeptrai@gmail.com.vn', '0342389962', '$2y$10$H8AszKxU6Wm9Y.1gOCLnBu4tiK9hAMbUG0cN.fmVvfGNJlXfnD8bW'),
(14, 'Trường', 'lenhuttruong@gmail.com', '0000000000', '$2y$10$JjRk6lMajig6o5USq4Lhl.rSZpzczUmPmqKNAZ68jsWfopPXsUfd6'),
(15, 'Phan Qúi', 'qui@gmail.com', '0000000000', '$2y$10$c034NICniAEx3JpiqXv7gedq4GQvzR3U317b0XVaxsxdMxq..6XSG');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `category_name`) VALUES
(1, 'sofa'),
(2, 'ghế'),
(3, 'trang trí'),
(4, 'kệ sách'),
(5, 'bàn'),
(6, 'tủ');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone_number` char(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `total` int(11) NOT NULL,
  `payment` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `full_name`, `address`, `phone_number`, `email`, `total`, `payment`) VALUES
(1, 'âf', 'fawsf', 'fafs', 'f@gmail.com', 3000000, 0),
(2, 'ădaw', 'ưdawd', 'ưdawda', 'a@gmail.com', 3000000, 0),
(3, 'ădaw', 'ưdawd', 'ưdawda', 'a@gmail.com', 3000000, 0),
(4, 'ădaw', 'ưdawd', 'ưdawda', 'a@gmail.com', 3000000, 0),
(5, 'adasd', 'ăda', 'dădawd', 'o@gmail.com', 3000000, 0),
(6, 'fsefsef', '151561', 'fsef', 'a@gmail.com', 1000000, 0),
(7, 'fsefsef', '151561', 'fsef', 'a@gmail.com', 1000000, 0),
(8, 'đă', 'đă', '55500', 't@gmail.com', 6900000, 0),
(9, 'fsefsef', 'adswda', '232332', 'f@gmail.com', 7900000, 0),
(10, 'dwdw', 'dawdawd', '2312231231', 'a@gmail.com', 2020000, 0),
(11, 'cá con', 'can thho chau dthawjsdhakj', '0000000000', 'ca@gmail.com', 1270000, 0),
(12, 'cá con', 'can thho chau dthawjsdhakj', '0000000000', 'ca@gmail.com', 1270000, 0),
(13, 'quideptrai@gmail.com', 'tân châu long xuyên an giang', '0988422744', 'quideptrai@gmail.com', 2020000, 0),
(14, 'quideptrai@gmail.com', 'cà mau sóc trăng an giang', '0988422744', 'quideptrai@gmail.com', 27580000, 0),
(15, 'Lê Nhựt Trường', 'Cái khế ninh kiều cần thơ', '0966899548', 'truong.lnt123456789@gmail.com', 14820000, 0),
(16, 'Nhựt Trường Lê', 'Vĩnh Thọ, Vĩnh Bình, Châu Thành, An Giang', '0966899548', 'truong.lnt123456789@gmail.com', 690000, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `product_img` text NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL,
  `id_orders` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `product_name`, `product_img`, `price`, `amount`, `thanhtien`, `id_orders`) VALUES
(1, 'Đồng hồ Miso', 'https://product.hstatic.net/200000280801/product/upload_6335a50c71584d4fb92ebc1957c6f55a.jpg', 1000000, 3, 3000000, 1),
(2, 'Đồng hồ Miso', 'https://product.hstatic.net/200000280801/product/upload_6335a50c71584d4fb92ebc1957c6f55a.jpg', 1000000, 3, 3000000, 2),
(3, 'Đồng hồ Miso', 'https://product.hstatic.net/200000280801/product/upload_6335a50c71584d4fb92ebc1957c6f55a.jpg', 1000000, 3, 3000000, 3),
(4, 'Đồng hồ Miso', 'https://product.hstatic.net/200000280801/product/upload_6335a50c71584d4fb92ebc1957c6f55a.jpg', 1000000, 3, 3000000, 4),
(5, 'Đồng hồ Miso', 'https://product.hstatic.net/200000280801/product/upload_6335a50c71584d4fb92ebc1957c6f55a.jpg', 1000000, 3, 3000000, 5),
(6, 'Kệ treo Poplar', 'https://product.hstatic.net/200000280801/product/upload_b902d84a30ff4bfd9994a9b1b723c3c7_1024x1024.jpg', 500000, 2, 1000000, 6),
(7, 'Kệ treo Poplar', 'https://product.hstatic.net/200000280801/product/upload_b902d84a30ff4bfd9994a9b1b723c3c7_1024x1024.jpg', 500000, 2, 1000000, 7),
(8, 'Kệ treo Poplar', 'https://product.hstatic.net/200000280801/product/upload_b902d84a30ff4bfd9994a9b1b723c3c7_1024x1024.jpg', 500000, 3, 1500000, 8),
(9, 'Ghế Woody', 'https://product.hstatic.net/200000280801/product/upload_900a35429e89464bb1f66bdae46142d9.jpg', 900000, 6, 5400000, 8),
(10, 'Kệ treo Poplar', 'https://product.hstatic.net/200000280801/product/upload_b902d84a30ff4bfd9994a9b1b723c3c7_1024x1024.jpg', 500000, 5, 2500000, 9),
(11, 'Ghế Woody', 'https://product.hstatic.net/200000280801/product/upload_900a35429e89464bb1f66bdae46142d9.jpg', 900000, 6, 5400000, 9),
(12, 'Tranh ảnh', 'https://product.hstatic.net/200000280801/product/upload_0b8101174d7942809b8587b2355d73df.jpg', 2000000, 1, 2000000, 10),
(13, 'Ghế Woody Pinky', 'ghe_woody_pinky.jpg', 1250000, 1, 1250000, 11),
(14, 'Ghế Woody Pinky', 'ghe_woody_pinky.jpg', 1250000, 1, 1250000, 12),
(15, 'Kệ treo Poplar', 'ke_treo_poplar.jpg', 500000, 4, 2000000, 13),
(16, 'Ghế Euro', 'ghe_euro.jpg', 960000, 16, 15360000, 14),
(17, 'Đồng hồ Miso Limited', 'dong_ho_miso_limited.jpg', 1200000, 5, 6000000, 14),
(18, 'Tủ Hobu', 'tu_giay_hobu.jpg', 3100000, 2, 6200000, 14),
(19, 'Ghế Luxury', 'ghe_luxury.jpg', 570000, 10, 5700000, 15),
(20, 'Bàn Aillen', 'ban_aillen.jpg', 1300000, 7, 9100000, 15),
(21, 'Bàn Aillen 02', 'ban_aillen_02.jpg', 670000, 1, 670000, 16);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(30) NOT NULL,
  `brand` varchar(30) NOT NULL,
  `img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `category_id`, `description`, `color`, `brand`, `img`) VALUES
(1, 'Ghế Luxury', 570000, 2, 'Mặt ngồi ghế hõm sâu, dáng ghế như một thác nước đổ xuống giữ cho người ngồi thoải mái bằng cách giảm áp lực lên lưng và đùi. Qua đó bạn có thể ngồi lâu hơn trên ghế mà không cảm thấy mỏi', 'đen', 'Luxury', 'ghe_luxury.jpg'),
(2, 'Ghế Woody Pinky', 1250000, 2, 'Với những biến tấu đa dạng độc đáo, có thể nói Pinky là một trong những mẫu ghế hiện đại được ưa chuộng nhất hiện nay dành cho phái đẹp', 'hồng', 'Woody', 'ghe_woody_pinky.jpg'),
(3, 'Ghế Woody', 900000, 2, 'Ghế Woody màu sắc trang nhã, chân gỗ cao su phủ sơn màu nâu óc chó đẹp mắt. Hãy kết hợp với các mẫu bàn trong cùng bộ sưu tập Woody để hoàn thiện không gian nội thất gia đình.', 'vàng', 'Woody', 'ghe_woody.jpg'),
(4, 'Ghế Euro 2', 750000, 2, 'Đơn giản nhưng vẫn thanh lịch và tiện dụng chính là Euro 2. Đây là một chiếc ghế với màu sắc đen bóng phù hợp cho mọi không gian trong gia đình', 'đen', 'Euro', 'ghe_euro_02.jpg'),
(5, 'Ghế Euro', 960000, 2, 'Ghế Euro ra đời nhằm mong muốn tạo cảm giác thông thoáng, thoải mái cho người dùng. Thân và phần ngồi cách điệu với nhiều lỗ xen kẻ nhau, tạo sự thông thoáng khi ngồi.', 'xanh nhạt', 'Euro', 'ghe_euro.jpg'),
(6, 'Tranh ảnh', 2000000, 3, 'Những bức tranh với họa tiết hiện đại giúp lấp đầy những khoảng trống trên tường nhà và góp phần tô điểm thêm cho căn hộ xinh xắn của bạn. ', 'khung đen', 'Miso', 'tranh_anh.jpg'),
(7, 'Đồng hồ Miso Limited', 1200000, 3, 'Là phiên bản giới hạn được Miso tung ra trong năm 2022 với thiết kế mặt đồng hồ sặc sỡ, bắt mắt hơn sẽ là điểm nổi bật trên tường nhà của bạn', 'khung đen mặt trắng', 'Miso', 'dong_ho_miso_limited.jpg'),
(8, 'Đồng hồ Miso', 1000000, 3, 'Được cấu thành chủ yếu từ chất liệu nhựa PP cao cấp cùng với thiết kế mặt đồng hồ đơn giản với màu sắc trung tính phù hợp với những người thích sự đơn giản', 'khung vàng mặt xanh', 'Miso', 'dong_ho_miso.jpg'),
(10, 'Kệ đẩy Hobu', 750000, 4, 'Với thiết kế ba tầng, không gian chứa đồ rộng rãi và dễ dàng di chuyển, HOBU Trolley sẽ khiến bạn hài lòng về sự linh hoạt và tiện dụng của mình.', 'đen', 'Hobu', 'ke_day_hobu.jpg'),
(11, 'Bàn Aillen 03', 1400000, 5, 'Thiết kế đơn giản nhưng thanh lịch. Màu sắc tinh tế, sang trọng. Chất liệu gỗ MDF chống mối mọt, chịu ẩm tốt, thân thiện với môi trường. Sơn tĩnh điện chống gỉ sét tối đa.', 'trắng đen', 'Aillen ', 'ban_aillen_03.jpg'),
(12, 'Bàn Aillen 02', 670000, 5, 'Với thiết kế tối giản và tinh tế của mình, Aillen 02 sẽ giúp phòng ăn của bạn trở nên ấm cũng và trang nhã hơn.', 'vàng trắng', 'Aillen ', 'ban_aillen_02.jpg'),
(24, 'Bàn Aillen 01', 460000, 5, 'Một chiếc bàn đơn giản, không chiếm quá nhiều diện tích không gian luôn là sự lựa chọn của mọi người ngày nay. Dù thiết kế tối giản nhưng lại làm cho không gian thêm phần tinh tế', 'trắng', 'Aillen ', 'ban_aillen_01.jpg'),
(25, 'Tủ Hobu', 3100000, 6, 'Một chiếc tủ đơn giản, không chiếm quá nhiều diện tích không gian luôn là lựa chọn tối ưu của tất cả mọi người hiện nay. Thiết kế dù đơn giản nhưng không kém phần tinh tế', 'trắng', 'Hobu', 'tu_giay_hobu.jpg'),
(27, 'Kệ treo Poplar', 500000, 4, 'Kệ treo Poplar màu sắc trang nhã, chân trắng, chất liệu gồm Gỗ bạch dương và MFC.Thiết kế chắc chắn cùng kiểu dáng sang trọng.', 'trắng', 'Poplar', 'ke_treo_poplar.jpg'),
(28, 'Sofa đơn ALICE', 800000, 1, 'Kích thước sofa đơn alice D65*R63*C82 cm cùng chất liệu: Vải Indonesia, khung gỗ tần bì, sẽ cho cảm giác ngồi êm ái.', 'Xám nhạt', 'Alice', 'sofa_don_alice.jpg'),
(29, 'Bàn Binas', 900000, 5, 'Thiết kế độc đáo, kết hợp hai trong một đem lại sự tiện dụng.Màu sắc tinh tế, sang trọng. Chất liệu gỗ MDF chống mối mọt, chịu ẩm tốt, thân thiện với môi trường. Sơn tĩnh điện chống gỉ sét tối đa.Tháo lắp dễ dàng', 'Trắng, đen, gỗ.', 'Binas', 'ban_binas.jpg'),
(30, 'Sofa giường AURORA', 3100000, 1, 'Kích thước: D170 cmChất liệu: Vải China, Khung gỗ thông CanadaCho cảm giác ngồi êm ái.', 'Xám nhạt/ xám đậm', 'Aurora', 'sofa_giuong_aurora.jpg'),
(31, 'Bàn ARABICA', 600000, 5, 'Phần mặt bàn làm từ gỗ công nghiệp MDF có khả năng chống ẩm tốt, các đường vân hiên đại.Phần chân tháo lắp được làm từ sắt sơn tĩnh điện có khả năng chóng rỉ sét, độ bền hoàn hảo, thuận tiện trong việc di chuyển, tháo rời.Được thiết kế tỉ mỉ đến từng góc độ cho ra bộ khung vững chãi có khả năng chịu lực tốt nhất.', 'Trắng, đen', 'Arabica', 'ban_arabica.jpg'),
(32, 'Kệ TV Hobu', 400000, 4, 'Kệ Tivi – Bằng việc tối đa hoá diện tích sử dụng, Kệ tivi Hobu mang lại giải pháp trưng bày và lưu trữ hiệu quả nhưng vẫn tiết kiệm không gian cho gia đình nhỏ của bạn.Kệ Tivi HOBU với khung sắt chắc chắn sẽ khiến cho góc phòng của bạn trở nên ngăn nắp và tiết kiệm diện tích hơn rất nhiều.Thiết kế đơn giản, 2 tầng cùng vô cùng tiện lợi, không gian chứa đồ rộng. Dễ dàng tháo lắp, tiết kiệm chi phí vận chuyển.', 'Trắng, đen.', 'Hobu', 'ke_tv_hobu.jpg'),
(42, 'Bàn Aillen', 1300000, 5, 'Phần mặt bàn làm từ gỗ công nghiệp MDF có khả năng chống ẩm tốt, các đường vân hiên đại.\r\n\r\nPhần chân tháo lắp được làm từ sắt sơn tĩnh điện có khả năng chóng rỉ sét, độ bền hoàn hảo, thuận tiện trong việc di chuyển, tháo rời.\r\n\r\nĐược thiết kế tỉ mỉ đến từng góc độ cho ra bộ khung vững chãi có khả năng chịu lực tốt nhất. ', 'Trắng, đen', 'Aillen', 'ban_aillen.jpg'),
(44, 'Sofa góc BELLA', 5100000, 1, 'Sofa góc cao cấp BELLA có sự kết hợp giữa nét đẹp hiện đại và cổ điển. Vậy nên sản phẩm thích hợp với nhiều phong cách thiết kế nội thất khác nhau.', 'đen', 'BELLA', 'sofa_goc_bella.png'),
(45, 'Đồng hồ Tabu 001', 600000, 3, 'Mặt đồng hồ được thiết kế lạ mắt với thêm 2 kim đồng hồ phụ giúp người dùng theo dõi được nhiều thông tin về thời gian hơn.', 'viền đen mặt trắng', 'Tabu', 'dong_ho_tabu_001.png'),
(46, 'Đồng hồ Tabu', 350000, 3, 'Đồng hồ treo tường với thiết kế tối giản hóa đi phần chữ số khiến cho chiếc đồng hồ trong lạ mắt hơn so với các mẫu hiện tại', 'viền đen mặt trắng', 'Tabu', 'dong_ho_tabu.png'),
(47, 'Sofa băng BELLA', 2200000, 1, 'Với chất liệu vải Indonesia, khung gỗ dầu đỏ, kích thước D150/160/180*R80*C87cm cùng với phần đệm êm ái giúp người dùng có trải nghiệm tốt nhất khi ngồi', 'xanh mint', 'BELLA', 'sofa_bang_bella.png');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_orders` (`id_orders`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`id_orders`) REFERENCES `orders` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
