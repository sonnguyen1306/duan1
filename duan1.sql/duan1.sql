-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 17, 2024 at 03:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wd19204-duanmau`
--

-- --------------------------------------------------------

--
-- Table structure for table `bill`
--

CREATE TABLE `bill` (
  `id` int NOT NULL,
  `idtk` int DEFAULT '0',
  `billname` varchar(255) NOT NULL,
  `billdiachi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `billsdt` varchar(50) NOT NULL,
  `billemail` varchar(255) NOT NULL,
  `billpttt` tinyint(1) DEFAULT '1' COMMENT '1.Thanh toán trực tiếp 2.Chuyển khoản 3.Thanh toán online',
  `ngaydathang` varchar(50) DEFAULT NULL,
  `total` int NOT NULL DEFAULT '0',
  `billstatus` tinyint(1) DEFAULT '0' COMMENT '0.Đơn hàng mới 1.Đang sử lý 2.Đang giao hàng 3.Đã giao hàng',
  `receiven_ame` varchar(255) DEFAULT NULL,
  `receiven_diachi` varchar(255) DEFAULT NULL,
  `receiven_sdt` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `bill`
--

INSERT INTO `bill` (`id`, `idtk`, `billname`, `billdiachi`, `billsdt`, `billemail`, `billpttt`, `ngaydathang`, `total`, `billstatus`, `receiven_ame`, `receiven_diachi`, `receiven_sdt`) VALUES
(53, 0, 'quan', 'vinh phuc', '987654321', 'quan@gmail.com', 2, '06:17:55am  03/07/2024', 77, 0, NULL, NULL, NULL),
(54, 0, 'quan', 'vinh phuc', '987654321', 'quan@gmail.com', 2, '06:18:55am  03/07/2024', 77, 1, NULL, NULL, NULL),
(55, 0, '', '', '', '', 1, '06:30:23am  03/07/2024', 1233, 0, NULL, NULL, NULL),
(56, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '08:57:57am  03/07/2024', 0, 0, NULL, NULL, NULL),
(57, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '10:29:26am  03/07/2024', 77, 0, NULL, NULL, NULL),
(58, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '10:29:49am  03/07/2024', 77, 0, NULL, NULL, NULL),
(59, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '01:16:46pm  03/07/2024', 2299, 0, NULL, NULL, NULL),
(60, 7, 'quan', 'vinh phuc', '987654321', 'quan@gmail.com', 2, '01:37:09pm  03/07/2024', 154, 0, NULL, NULL, NULL),
(61, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '04:41:04pm  03/07/2024', 0, 0, NULL, NULL, NULL),
(62, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '04:51:26pm  03/07/2024', 242, 0, NULL, NULL, NULL),
(63, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '04:53:18pm  03/07/2024', 319, 0, NULL, NULL, NULL),
(64, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '05:10:57pm  03/07/2024', 242, 0, NULL, NULL, NULL),
(65, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '05:32:37pm  03/07/2024', 22220, 2, NULL, NULL, NULL),
(66, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 3, '12:07:54pm  08/07/2024', 5753, 1, NULL, NULL, NULL),
(67, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '12:05:43pm  09/07/2024', 13625, 0, NULL, NULL, NULL),
(68, 10, 'quangquang', 'Hải Dương', '0989801133', 'quang@gmail.com', 1, '12:09:37pm  10/07/2024', 1233, 0, NULL, NULL, NULL),
(69, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '01:38:19am  12/07/2024', 99, 0, NULL, NULL, NULL),
(70, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '12:06:14pm  13/07/2024', 154, 0, NULL, NULL, NULL),
(71, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '12:06:47pm  13/07/2024', 1409, 0, NULL, NULL, NULL),
(72, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '01:02:53pm  13/07/2024', 143, 0, NULL, NULL, NULL),
(73, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '01:16:34pm  15/07/2024', 111, 0, NULL, NULL, NULL),
(74, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '06:49:24am  16/07/2024', 111, 0, NULL, NULL, NULL),
(75, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '07:19:26am  16/07/2024', 111, 0, NULL, NULL, NULL),
(76, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '07:20:17am  16/07/2024', 55, 0, NULL, NULL, NULL),
(77, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '07:35:11am  16/07/2024', 110, 0, NULL, NULL, NULL),
(78, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '08:12:32am  16/07/2024', 110, 0, NULL, NULL, NULL),
(79, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '09:36:59am  16/07/2024', 110, 0, NULL, NULL, NULL),
(80, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '10:08:38am  16/07/2024', 110, 0, NULL, NULL, NULL),
(81, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '10:08:48am  16/07/2024', 165, 0, NULL, NULL, NULL),
(82, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '10:09:47am  16/07/2024', 12, 0, NULL, NULL, NULL),
(83, 8, 'ducduc', 'Vĩnh Phúc', '0965866805', 'luuduc@gmail.com', 1, '10:11:08am  16/07/2024', 12, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `binhluan`
--

CREATE TABLE `binhluan` (
  `id` int NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `idtk` int NOT NULL,
  `idpro` int NOT NULL,
  `ngaybinhluan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `binhluan`
--

INSERT INTO `binhluan` (`id`, `noidung`, `idtk`, `idpro`, `ngaybinhluan`) VALUES
(1, 'dep qua di', 8, 8, '09:17:17am 26/05/2024'),
(2, 'dep qua di', 8, 8, '09:17:22am 26/05/2024'),
(3, 'xau qua', 8, 8, '09:18:56am 26/05/2024'),
(4, 'san pham xau', 8, 8, '09:21:20am 26/05/2024'),
(5, 'xau qua', 8, 12, '09:52:40am 26/05/2024'),
(6, 'ship lâu quá', 8, 3, '10:11:04am  26/05/2024'),
(7, 'Đẹp quá đi', 7, 13, '09:57:42am  31/05/2024'),
(8, 'Nhìn màu tối quá', 7, 5, '09:58:15am  31/05/2024'),
(9, 'Màu này sáng quá!', 8, 2, '11:24:08am  29/06/2024'),
(10, 'màu này được đấy', 8, 6, '12:15:37pm  15/07/2024');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int NOT NULL,
  `idtk` int DEFAULT '0',
  `idpro` int NOT NULL,
  `tensp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `image` varchar(255) NOT NULL,
  `gia` double(10,2) NOT NULL DEFAULT '0.00',
  `soluong` int NOT NULL,
  `thanhtien` int NOT NULL,
  `idbill` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `idtk`, `idpro`, `tensp`, `image`, `gia`, `soluong`, `thanhtien`, `idbill`) VALUES
(102, 7, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 1, 77, 53),
(103, 7, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 1, 77, 54),
(104, 8, 14, 'op hoa la cai', '4.jpg', 0.00, 1, 0, 56),
(105, 8, 14, 'op hoa la cai', '4.jpg', 0.00, 1, 0, 57),
(106, 8, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 1, 77, 57),
(107, 8, 14, 'op hoa la cai', '4.jpg', 0.00, 1, 0, 58),
(108, 8, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 1, 77, 58),
(109, 8, 14, 'op hoa la cai', '4.jpg', 0.00, 1, 0, 59),
(110, 8, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 1, 77, 59),
(111, 8, 18, 'Biển', '9.jpg', 2222.00, 1, 2222, 59),
(112, 7, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 1, 77, 60),
(113, 7, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 1, 77, 60),
(114, 8, 15, 'op decao', '5.jpg', 121.00, 2, 121, 62),
(115, 8, 15, 'op decao', '5.jpg', 121.00, 2, 121, 63),
(116, 8, 12, 'op hoa', '4.jpg', 77.00, 1, 77, 63),
(117, 8, 15, 'op decao', '5.jpg', 121.00, 2, 121, 64),
(118, 8, 11, 'op hehe', '6.jpg', 5555.00, 4, 5555, 65),
(119, 8, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 1, 77, 66),
(120, 8, 15, 'op decao', '5.jpg', 121.00, 1, 121, 66),
(121, 8, 11, 'op hehe', '6.jpg', 5555.00, 1, 5555, 66),
(122, 8, 8, 'op hehe', '3.jpg', 8070.00, 1, 8070, 67),
(123, 8, 3, 'op dad', '4.jpg', 5555.00, 1, 5555, 67),
(124, 10, 16, 'op kikww', '9.jpg', 1233.00, 1, 1233, 68),
(125, 8, 2, 'op hoa la cai', 'shop-ban-op-lung-dien-thoai-dep-nhat-can-tho-663388.jpg', 99.00, 1, 99, 69),
(126, 8, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 2, 77, 70),
(127, 8, 17, 'op lele', '9aa384f46bfb4583d3a894e57074257c.jpg', 77.00, 2, 77, 71),
(128, 8, 16, 'op kikww', '9.jpg', 1239.00, 1, 1239, 71),
(129, 8, 26, 'Biển đen', '6.jpg', 16.00, 1, 16, 71),
(130, 8, 23, 'hạ long', '5.jpg', 55.00, 1, 55, 72),
(131, 8, 24, 'Biển xanh', '5.jpg', 88.00, 1, 88, 72),
(132, 8, 5, 'op ke ke', 'upload/4.jpg', 111.00, 1, 111, 73),
(133, 8, 5, 'op ke ke', 'upload/4.jpg', 111.00, 1, 111, 74),
(134, 8, 5, 'op ke ke', 'upload/4.jpg', 111.00, 1, 111, 75),
(135, 8, 23, 'hạ long', '5.jpg', 55.00, 1, 55, 76),
(136, 8, 23, 'hạ long', '5.jpg', 55.00, 2, 55, 77),
(137, 8, 23, 'hạ long', '5.jpg', 55.00, 2, 55, 78),
(138, 8, 23, 'hạ long', '5.jpg', 55.00, 2, 55, 79),
(139, 8, 23, 'hạ long', '5.jpg', 55.00, 2, 55, 80),
(140, 8, 23, 'hạ long', '5.jpg', 55.00, 3, 55, 81),
(141, 8, 27, 'op lely', '5.jpg', 12.00, 1, 12, 82),
(142, 8, 27, 'op lely', '5.jpg', 12.00, 1, 12, 83);

-- --------------------------------------------------------

--
-- Table structure for table `chitietbill`
--

CREATE TABLE `chitietbill` (
  `id` int NOT NULL,
  `idpro` int NOT NULL,
  `idbill` int NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` double(10,2) NOT NULL,
  `soluong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `status-dm` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`, `status-dm`) VALUES
(2, 'op iphone', 0),
(3, 'op hawai', 0),
(4, 'op hàn quốc', 0),
(5, 'op da nhập khẩu', 0),
(6, 'op viet nam', 0),
(7, 'op vivo', 0),
(8, 'op nhật bản', 0),
(11, 'op vietnam', 0),
(12, 'op lam ', 0),
(13, 'op hàn quốc', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sanpham`
--

CREATE TABLE `sanpham` (
  `id` int NOT NULL,
  `tensp` varchar(255) NOT NULL,
  `gia` double(10,2) DEFAULT '0.00',
  `image` varchar(255) DEFAULT NULL,
  `mota` text,
  `luotxem` int DEFAULT '0',
  `iddanhmuc` int NOT NULL,
  `status` tinyint(1) DEFAULT '0',
  `soluong` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `image`, `mota`, `luotxem`, `iddanhmuc`, `status`, `soluong`) VALUES
(3, 'op dad', 5555.00, '4.jpg', '     www                                    ', 9, 4, 0, 22),
(4, 'op hoa', 111.00, '8.jpg', '          rrrr                               ', 0, 3, 0, 8),
(5, 'op ke ke', 111.00, '4.jpg', '         oooo                                ', 40, 4, 0, 3),
(6, 'op dad', 77.00, '5.jpg', '                   ppp                      ', 90, 3, 0, 9),
(7, 'op kiki', 111.00, '8.jpg', '        qqqq                                 ', 0, 2, 0, 8),
(8, 'op hehe', 8070.00, '3.jpg', '             pppp                            ', 77, 5, 0, 5),
(11, 'op hehe', 5555.00, '6.jpg', '             eeee                            ', 0, 3, 0, 8),
(12, 'op hoa', 77.00, '4.jpg', '          www                               ', 41, 2, 0, 15),
(13, 'op dad', 111.00, '9aa384f46bfb4583d3a894e57074257c.jpg', '                     ppp                    ', 23, 4, 0, 9),
(14, 'op hoa la cai', 77.00, '4.jpg', '                                         ', 120, 7, 0, 6),
(15, 'op decao', 121.00, '5.jpg', '         qqqq                                ', 0, 6, 0, 7),
(16, 'op kikww', 1239.00, '9.jpg', '               tgg                                               ', 0, 6, 0, 12),
(17, 'op lele', 77.00, '9aa384f46bfb4583d3a894e57074257c.jpg', '             eee                            ', 67, 8, 0, 8),
(18, 'Biển', 2222.00, '9.jpg', '                    bxhbh                     ', 0, 3, 0, 5),
(21, 'op lela', 98.00, '8.jpg', '          oo                               ', 55, 2, 0, 13),
(22, 'Biển', 98.00, '9.jpg', '                   ppp                      ', 0, 11, 0, 23),
(23, 'hạ long', 55.00, '5.jpg', '          uu                               ', 0, 11, 0, 6),
(24, 'Biển xanh', 88.00, '5.jpg', '                 ww                        ', 0, 2, 0, 9),
(25, 'op dady', 99.00, '9aa384f46bfb4583d3a894e57074257c.jpg', '                    ww', 0, 12, 0, 10),
(26, 'Biển đen', 16.00, '6.jpg', '           re                              ', 0, 13, 0, 10),
(27, 'op lely', 12.00, '5.jpg', '         ttt                                ', 0, 12, 0, 9);

-- --------------------------------------------------------

--
-- Table structure for table `taikhoan`
--

CREATE TABLE `taikhoan` (
  `id` int NOT NULL,
  `tentk` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `diachi` varchar(255) DEFAULT NULL,
  `sdt` varchar(20) DEFAULT NULL,
  `role` tinyint DEFAULT '0',
  `status-tk` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tentk`, `pass`, `email`, `diachi`, `sdt`, `role`, `status-tk`) VALUES
(7, 'quan', '0000000', 'quan@gmail.com', 'vinh phuc', '987654321', 1, 0),
(8, 'ducduc', '12345678', 'luuduc@gmail.com', 'Vĩnh Phúc', '0965866805', 1, 0),
(9, 'quan', '0000000', 'quan@gmail.com', NULL, NULL, 0, 0),
(10, 'quangquang', '11111111', 'quang@gmail.com', 'Hải Dương', '0989801133', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bill`
--
ALTER TABLE `bill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chitietbill`
--
ALTER TABLE `chitietbill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`),
  ADD KEY `lk_sp_dm` (`iddanhmuc`);

--
-- Indexes for table `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bill`
--
ALTER TABLE `bill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `chitietbill`
--
ALTER TABLE `chitietbill`
  MODIFY `id` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `lk_sp_dm` FOREIGN KEY (`iddanhmuc`) REFERENCES `danhmuc` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;