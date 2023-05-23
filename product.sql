-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 23, 2023 at 06:07 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `id` int(5) NOT NULL,
  `iddh` int(5) NOT NULL,
  `id_product` int(5) NOT NULL,
  `soluong` int(9) NOT NULL DEFAULT 0,
  `dongia` double(10,2) NOT NULL DEFAULT 0.00,
  `name_product` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `img_product` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_cart`
--

INSERT INTO `tbl_cart` (`id`, `iddh`, `id_product`, `soluong`, `dongia`, `name_product`, `img_product`) VALUES
(1, 8, 31, 1, 123.00, 'áo adidas', 0),
(2, 8, 28, 5, 789.00, 'quần jean', 0),
(3, 9, 31, 4, 123.00, 'áo adidas', 0),
(4, 9, 21, 1, 250.00, 'Áo thun trắng', 0),
(5, 10, 31, 4, 123.00, 'áo adidas', 0),
(6, 10, 21, 1, 250.00, 'Áo thun trắng', 0),
(7, 11, 31, 4, 123.00, 'áo adidas', 0),
(20, 21, 31, 1, 123.00, 'áo adidas', 0),
(25, 25, 23, 5, 270.00, 'Quần dài xám', 0),
(26, 25, 20, 5, 170.00, 'Áo thun họa tiết', 0),
(27, 26, 30, 1, 789.00, 'quần đùi lửng', 0),
(28, 26, 22, 5, 175.00, 'Áo thun xám', 0),
(29, 28, 30, 4, 789.00, 'quần đùi lửng', 0),
(30, 28, 23, 4, 270.00, 'Quần dài xám', 0),
(31, 31, 31, 1, 123.00, 'áo adidas', 0),
(32, 33, 31, 1, 123.00, 'áo adidas', 0),
(33, 35, 30, 1, 789.00, 'quần đùi lửng', 0),
(34, 35, 28, 1, 789.00, 'quần jean', 0),
(35, 36, 31, 5, 123.00, 'áo adidas', 0),
(36, 36, 21, 5, 250.00, 'Áo thun trắng', 0),
(37, 38, 30, 4, 789.00, 'quần đùi lửng', 0),
(38, 38, 31, 5, 123.00, 'áo adidas', 0),
(39, 39, 31, 5, 123.00, 'áo adidas', 0),
(40, 40, 31, 1, 123.00, 'áo adidas', 0),
(41, 41, 31, 1, 123.00, 'áo adidas', 0),
(42, 41, 22, 1, 175.00, 'Áo thun xám', 0),
(43, 43, 28, 1, 789.00, 'quần jean', 0),
(44, 43, 23, 1, 270.00, 'Quần dài xám', 0),
(45, 44, 30, 1, 789.00, 'quần đùi lửng', 0),
(46, 45, 31, 1, 123.00, 'áo adidas', 0),
(47, 46, 31, 1, 123.00, 'áo adidas', 0),
(48, 47, 23, 1, 270.00, 'Quần dài xám', 0),
(49, 49, 30, 1, 789.00, 'quần đùi lửng', 0),
(50, 50, 30, 1, 789.00, 'quần đùi lửng', 0),
(51, 55, 28, 1, 789.00, 'quần jean', 0),
(52, 56, 31, 1, 123.00, 'áo adidas', 0),
(53, 57, 28, 1, 789.00, 'quần jean', 0),
(54, 58, 31, 1, 123.00, 'áo adidas', 0),
(55, 59, 31, 1, 123.00, 'áo adidas', 0),
(56, 61, 31, 1, 123.00, 'áo adidas', 0),
(57, 63, 31, 1, 123.00, 'áo adidas', 0),
(58, 64, 23, 1, 270.00, 'Quần dài xám', 0),
(59, 65, 30, 1, 789.00, 'quần đùi lửng', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id_category` int(5) NOT NULL,
  `name_category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `prioritized_category` int(5) NOT NULL DEFAULT 0,
  `hide_category` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id_category`, `name_category`, `prioritized_category`, `hide_category`) VALUES
(10, 'áo', 0, 1),
(12, 'quần', 1, 1),
(20, 'quần ngắn', 0, 1),
(43, 'danh mục 123', 2, 2),
(44, 'danh mục 123', 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_comment`
--

CREATE TABLE `tbl_comment` (
  `id` int(10) NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id_user` int(5) NOT NULL,
  `id_product` int(5) NOT NULL,
  `ngaybinhluan` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_comment`
--

INSERT INTO `tbl_comment` (`id`, `noidung`, `id_user`, `id_product`, `ngaybinhluan`) VALUES
(8, 'dài vãi', 5, 31, '03:42:38pm 11/10/2022'),
(10, 'dài vãi', 5, 31, '03:55:40pm 11/10/2022'),
(11, 'đẹp', 33, 31, '03:59:50pm 11/10/2022'),
(13, 'dep vai ca cu chuoi', 33, 20, '05:11:09pm 11/10/2022'),
(14, 'sieu cap dep', 40, 21, '05:12:45pm 11/10/2022'),
(16, 'xin phép chê', 5, 30, '03:18:33am 14/10/2022'),
(17, 'xinh đẹp', 5, 28, '03:30:03am 14/10/2022'),
(24, 'dài vãi', 37, 29, '09:45:51am 18/10/2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id_order` int(5) NOT NULL,
  `code_order` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `total` double(10,2) DEFAULT 0.00,
  `pttt` tinyint(1) NOT NULL DEFAULT 1,
  `id_user` int(5) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ngaydathang` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id_order`, `code_order`, `total`, `pttt`, `id_user`, `name`, `address`, `email`, `tel`, `ngaydathang`) VALUES
(46, '387866', 133.00, 1, 5, 'Trung Hieu', 'HCM', 'trunghieu1042003@gmail.com', '0917972553', '04:53:13am 12/10/2022'),
(49, '28182', 799.00, 2, 37, 'Trung Hieu', 'HCM', 'trunghieu1042003@gmail.com', '0585818504', '10:59:51am 20/10/2022'),
(50, '64106', 799.00, 3, 40, 'trung123', 'HCM', 'quangsangmarketing2022@gmail.com', '0585818504', '06:01:56pm 20/10/2022'),
(64, '155331', 280.00, 3, 5, 'trung Nghĩa', 'HCM', 'trunghieuxinhdep@gmail.com', '123456789', '06:17:05pm 20/10/2022'),
(65, '80370', 799.00, 2, 5, 'trung Nghĩa', 'HCM', 'trunghieuxinhdep@gmail.com', '123456789', '10:07:46am 11/11/2022');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `id_product` int(5) NOT NULL,
  `name_product` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `img_product` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `oldprice_product` double(10,0) NOT NULL DEFAULT 0,
  `price_product` double(10,0) NOT NULL DEFAULT 0,
  `describe_product` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `id_category` int(5) NOT NULL,
  `view_product` int(6) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`id_product`, `name_product`, `img_product`, `oldprice_product`, `price_product`, `describe_product`, `id_category`, `view_product`) VALUES
(19, 'Áo thun đen', '../upload/ao1.jpg', 100, 99, 'Áo Thun Classic Tối Giản M9\r\nChất liệu: Hexagon Poly Fabric\r\nThành phần: 100% Polyester\r\n- Mềm mại\r\n- Thoáng khí\r\n- Nhanh khô\r\n- Trọng lượng nhẹ\r\n- Hạn chế co rút\r\n+ Họa tiết silicon nhũ bạc\r\n- Bo tay', 10, 0),
(20, 'Áo thun họa tiết', '../upload/ao2.jpg', 0, 170, 'Áo Thun Classic Tối Giản M9\r\nChất liệu: Hexagon Poly Fabric\r\nThành phần: 100% Polyester\r\n- Mềm mại\r\n- Thoáng khí\r\n- Nhanh khô\r\n- Trọng lượng nhẹ\r\n- Hạn chế co rút\r\n+ Họa tiết silicon nhũ bạc\r\n- Bo tay', 10, 0),
(21, 'Áo thun trắng', '../upload/ao3.jpg', 0, 250, 'Áo Thun Classic Tối Giản M9\r\nChất liệu: Hexagon Poly Fabric\r\nThành phần: 100% Polyester\r\n- Mềm mại\r\n- Thoáng khí\r\n- Nhanh khô\r\n- Trọng lượng nhẹ\r\n- Hạn chế co rút\r\n+ Họa tiết silicon nhũ bạc\r\n- Bo tay', 10, 0),
(22, 'Áo thun xám', '../upload/ao4.jpg', 0, 175, 'Áo Thun Classic Tối Giản M9\r\nChất liệu: Hexagon Poly Fabric\r\nThành phần: 100% Polyester\r\n- Mềm mại\r\n- Thoáng khí\r\n- Nhanh khô\r\n- Trọng lượng nhẹ\r\n- Hạn chế co rút\r\n+ Họa tiết silicon nhũ bạc\r\n- Bo tay', 10, 0),
(23, 'Quần dài xám', '../upload/quan1.jpg', 120, 270, 'Áo Thun Classic Tối Giản M9\r\nChất liệu: Hexagon Poly Fabric\r\nThành phần: 100% Polyester\r\n- Mềm mại\r\n- Thoáng khí\r\n- Nhanh khô\r\n- Trọng lượng nhẹ\r\n- Hạn chế co rút\r\n+ Họa tiết silicon nhũ bạc\r\n- Bo tay', 12, 0),
(28, 'quần jean', '../upload/e3eba5bf-989f-1f00-1b3a-0018b9fa8629.jpg', 0, 789, 'Áo Thun Classic Tối Giản M9\r\nChất liệu: Hexagon Poly Fabric\r\nThành phần: 100% Polyester\r\n- Mềm mại\r\n- Thoáng khí\r\n- Nhanh khô\r\n- Trọng lượng nhẹ\r\n- Hạn chế co rút\r\n+ Họa tiết silicon nhũ bạc\r\n- Bo tay', 12, 0),
(29, 'quần ống xuông', '../upload/1ca9547e-ba9e-3d00-6002-0019522b5f0e.jpg', 0, 0, 'Áo Thun Classic Tối Giản M9\r\nChất liệu: Hexagon Poly Fabric\r\nThành phần: 100% Polyester\r\n- Mềm mại\r\n- Thoáng khí\r\n- Nhanh khô\r\n- Trọng lượng nhẹ\r\n- Hạn chế co rút\r\n+ Họa tiết silicon nhũ bạc\r\n- Bo tay', 12, 0),
(30, 'quần đùi lửng', '../upload/d0251ff1-ca07-8800-151f-0019522c9337.jpg', 0, 789, 'Áo Thun Classic Tối Giản M9\r\nChất liệu: Hexagon Poly Fabric\r\nThành phần: 100% Polyester\r\n- Mềm mại\r\n- Thoáng khí\r\n- Nhanh khô\r\n- Trọng lượng nhẹ\r\n- Hạn chế co rút\r\n+ Họa tiết silicon nhũ bạc\r\n- Bo tay', 12, 0),
(31, 'áo adidas', '../upload/138eaa2a-e1ed-6500-b704-001957b08d4b.jpg', 321, 123, 'Áo Thun Classic Tối Giản M9\r\nChất liệu: Hexagon Poly Fabric\r\nThành phần: 100% Polyester\r\n- Mềm mại\r\n- Thoáng khí\r\n- Nhanh khô\r\n- Trọng lượng nhẹ\r\n- Hạn chế co rút\r\n+ Họa tiết silicon nhũ bạc\r\n- Bo tay', 10, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(5) NOT NULL,
  `name_user` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phoneNumber_user` int(10) DEFAULT NULL,
  `gmail_user` varchar(60) COLLATE utf8_unicode_ci DEFAULT NULL,
  `account_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password_user` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `name_user`, `phoneNumber_user`, `gmail_user`, `account_user`, `password_user`, `role`) VALUES
(5, 'trung Nghĩa', 123456789, 'trunghieuxinhdep@gmail.com', 'trungnghia123', '123', 0),
(33, 'Hiếu ', 972111392, 'trunghieu1111@gmail.com', 'acbde', '123', 0),
(37, 'trunghieu123', 0, 'trunghieu11111@gmail.com', 'hieu', '1357', 0),
(40, 'trung123', NULL, NULL, 'trunghieu12', '123', 0),
(42, NULL, NULL, NULL, 'admin', '123', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `fk_product_category` (`id_category`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id_category` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `tbl_comment`
--
ALTER TABLE `tbl_comment`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id_order` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `id_product` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD CONSTRAINT `fk_product_category` FOREIGN KEY (`id_category`) REFERENCES `tbl_category` (`id_category`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
