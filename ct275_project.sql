-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2022 at 09:32 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ct275_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone_number` char(10) NOT NULL,
  `pass_word` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `full_name`, `email`, `phone_number`, `pass_word`) VALUES
(1, 'trường', 'truong.lnt123@gmail.com', '0966899548', '11111'),
(2, 'Lê Nhựt Trường', 'truong.lnt654@gmail.com', '0123456789', '22222'),
(3, 'Nhựt', 'truongb1910015@student.ctu.edu.vn', '0966899548', '33333');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
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
-- Table structure for table `orders`
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

-- --------------------------------------------------------

--
-- Table structure for table `orders_detail`
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

-- --------------------------------------------------------

--
-- Table structure for table `product`
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
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `price`, `category_id`, `description`, `color`, `brand`, `img`) VALUES
(1, 'Ghế Luxury', 570000, 2, 'Mặt ngồi ghế hõm sâu, dáng ghế như một thác nước đổ xuống giữ cho người ngồi thoải mái bằng cách giảm áp lực lên lưng và đùi. Qua đó bạn có thể ngồi lâu hơn trên ghế mà không cảm thấy mỏi', 'đen', 'Luxury', 'https://product.hstatic.net/200000280801/product/upload_111b23fecf12438cbaaf881b39ad6182.jpg'),
(2, 'Ghế Woody Pinky', 1250000, 2, 'Với những biến tấu đa dạng độc đáo, có thể nói Pinky là một trong những mẫu ghế hiện đại được ưa chuộng nhất hiện nay dành cho phái đẹp', 'hồng', 'Woody', 'https://product.hstatic.net/200000280801/product/upload_470ce5aa3e8e4c7eaa1302d321ddd1b1.jpg'),
(3, 'Ghế Woody', 900000, 2, 'Ghế Woody màu sắc trang nhã, chân gỗ cao su phủ sơn màu nâu óc chó đẹp mắt. Hãy kết hợp với các mẫu bàn trong cùng bộ sưu tập Woody để hoàn thiện không gian nội thất gia đình.', 'vàng', 'Woody', 'https://product.hstatic.net/200000280801/product/upload_900a35429e89464bb1f66bdae46142d9.jpg'),
(4, 'Ghế Euro 2', 750000, 2, 'Đơn giản nhưng vẫn thanh lịch và tiện dụng chính là Euro 2. Đây là một chiếc ghế với màu sắc đen bóng phù hợp cho mọi không gian trong gia đình', 'đen', 'Euro', 'https://product.hstatic.net/200000280801/product/upload_cbd997dac1b64693a255edc1f3c4355c.jpg'),
(5, 'Ghế Euro', 960000, 2, 'Ghế Euro ra đời nhằm mong muốn tạo cảm giác thông thoáng, thoải mái cho người dùng. Thân và phần ngồi cách điệu với nhiều lỗ xen kẻ nhau, tạo sự thông thoáng khi ngồi.', 'xanh nhạt', 'Euro', 'https://product.hstatic.net/200000280801/product/upload_6b032c7ce891416e8c001bc6a063b57e.jpg'),
(6, 'Tranh ảnh', 2000000, 3, 'Những bức tranh với họa tiết hiện đại giúp lấp đầy những khoảng trống trên tường nhà và góp phần tô điểm thêm cho căn hộ xinh xắn của bạn. ', 'khung đen', 'Miso', 'https://product.hstatic.net/200000280801/product/upload_0b8101174d7942809b8587b2355d73df.jpg'),
(7, 'Đồng hồ Miso Limited', 1200000, 3, 'Là phiên bản giới hạn được Miso tung ra trong năm 2022 với thiết kế mặt đồng hồ sặc sỡ, bắt mắt hơn sẽ là điểm nổi bật trên tường nhà của bạn', 'khung đen mặt trắng', 'Miso', 'https://product.hstatic.net/200000280801/product/upload_52dfbb92ac8349dfac40f68f1ec66cfc.jpg'),
(8, 'Đồng hồ Miso', 1000000, 3, 'Được cấu thành chủ yếu từ chất liệu nhựa PP cao cấp cùng với thiết kế mặt đồng hồ đơn giản với màu sắc trung tính phù hợp với những người thích sự đơn giản', 'khung vàng mặt xanh', 'Miso', 'https://product.hstatic.net/200000280801/product/upload_6335a50c71584d4fb92ebc1957c6f55a.jpg'),
(9, 'Kệ Hobu', 400000, 4, 'Bằng việc tối đa hoá diện tích sử dụng, Kệ Hobu mang lại giải pháp trưng bày và lưu trữ hiệu quả nhưng vẫn tiết kiệm không gian cho gia đình nhỏ của bạn.', 'trắng đen', 'Hobu', 'https://product.hstatic.net/200000280801/product/upload_865e27f71874468ab59a6ec2c9f14a59.jpg'),
(10, 'Kệ đẩy Hobu', 750000, 4, 'Với thiết kế ba tầng, không gian chứa đồ rộng rãi và dễ dàng di chuyển, HOBU Trolley sẽ khiến bạn hài lòng về sự linh hoạt và tiện dụng của mình.', 'đen', 'Hobu', 'https://product.hstatic.net/200000280801/product/upload_e85dbae4286f455785face60d686e414.jpg'),
(11, 'Bàn Aillen 03', 1400000, 5, 'Thiết kế đơn giản nhưng thanh lịch. Màu sắc tinh tế, sang trọng. Chất liệu gỗ MDF chống mối mọt, chịu ẩm tốt, thân thiện với môi trường. Sơn tĩnh điện chống gỉ sét tối đa.', 'trắng đen', 'AILLEN', 'https://bizweb.dktcdn.net/thumb/large/100/364/402/products/1-05792e3fd4ab48d3ab2aa960df68bc37-master.jpg?v=1566942817537'),
(12, 'Bàn Aillen 02', 670000, 5, 'Với thiết kế tối giản và tinh tế của mình, Aillen 02 sẽ giúp phòng ăn của bạn trở nên ấm cũng và trang nhã hơn.', 'vàng trắng', 'AILLEN', 'https://bizweb.dktcdn.net/thumb/large/100/364/402/products/t-g-2-master.jpg?v=1566942776260'),
(23, 'Bàn ARABICA', 600000, 5, 'Phần mặt bàn làm từ gỗ công nghiệp MDF có khả năng chống ẩm tốt, các đường vân hiên đại. Được thiết kế tỉ mỉ đến từng góc độ cho ra bộ khung vững chãi có khả năng chịu lực tốt nhất. ', 'đen', 'ARABICA', 'https://bizweb.dktcdn.net/thumb/large/100/364/402/products/den-30-do-d9f9e88fd07c483b99859b9df1bf7058-master.jpg?v=1566941959460'),
(24, 'Bàn Aillen 01', 460000, 5, 'Một chiếc bàn đơn giản, không chiếm quá nhiều diện tích không gian luôn là sự lựa chọn của mọi người ngày nay. Dù thiết kế tối giản nhưng lại làm cho không gian thêm phần tinh tế', 'trắng', 'AILLEN', 'https://bizweb.dktcdn.net/thumb/large/100/364/402/products/2-0e9aac17a08545028116b62187004f20-master.jpg?v=1566942598000'),
(25, 'Tủ Hobu', 3100000, 6, 'Một chiếc tủ đơn giản, không chiếm quá nhiều diện tích không gian luôn là lựa chọn tối ưu của tất cả mọi người hiện nay. Thiết kế dù đơn giản nhưng không kém phần tinh tế', 'trắng', 'Hobu', 'https://bizweb.dktcdn.net/thumb/large/100/364/402/products/30-do-2021fed95b944be3873d99cbd3dd93ff-master.jpg?v=1566960549770'),
(26, 'Sofa băng BELLA', 2200000, 1, 'Với chất liệu vải Indonesia, khung gỗ dầu đỏ, kích thước: D150/160/180*R80*C87 cm cùng với phần đệm êm ái giúp người dùng có trải nghiệm tốt nhất khi ngồi', 'xanh mint', 'BELLA', 'https://bizweb.dktcdn.net/thumb/large/100/364/402/products/bella-1m5-xanh-b5ab68ddc5a44d678003f1b53a33cb31-master.png?v=1566943226947');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_orders` (`id_orders`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_ibfk_1` FOREIGN KEY (`id_orders`) REFERENCES `orders` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
