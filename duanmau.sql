-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 06, 2024 at 04:00 PM
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
(8, 'Nhìn màu tối quá', 7, 5, '09:58:15am  31/05/2024');

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id` int NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`id`, `tendanhmuc`) VALUES
(2, 'op iphone'),
(3, 'op hawai'),
(4, 'op hàn quốc'),
(5, 'op da nhập khẩu'),
(6, 'op viet nam'),
(7, 'op vivo'),
(8, 'op nhật bản');

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
  `iddanhmuc` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `sanpham`
--

INSERT INTO `sanpham` (`id`, `tensp`, `gia`, `image`, `mota`, `luotxem`, `iddanhmuc`) VALUES
(2, 'op dady', 1112.00, 'shop-ban-op-lung-dien-thoai-dep-nhat-can-tho-663388.jpg', '                     ppp                    ', 19, 4),
(3, 'op dad', 5555.00, '4.jpg', '    www                ', 9, 4),
(4, 'op hoa', 111.00, '8.jpg', '         rrrr           ', 0, 3),
(5, 'op ke ke', 111.00, '4.jpg', '        oooo            ', 40, 4),
(6, 'op dad', 77.00, '5.jpg', '                  ppp  ', 90, 3),
(7, 'op kiki', 111.00, '8.jpg', '       qqqq             ', 0, 2),
(8, 'op hehe', 8070.00, '3.jpg', '            pppp        ', 77, 5),
(11, 'op hehe', 5555.00, '6.jpg', '            eeee        ', 0, 3),
(12, 'op hoa', 77.00, '4.jpg', '         www           ', 41, 2),
(13, 'op dad', 111.00, '9aa384f46bfb4583d3a894e57074257c.jpg', '                    ppp', 23, 4),
(14, 'op hoa la cai', 0.00, '4.jpg', '                    ', 120, 7),
(15, 'op decao', 121.00, '5.jpg', '        qqqq            ', 0, 6),
(16, 'op kikww', 1233.00, '9.jpg', '             tgg       ', 0, 6),
(17, 'op lele', 77.00, '9aa384f46bfb4583d3a894e57074257c.jpg', '            eee        ', 0, 8);

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
  `role` tinyint DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `taikhoan`
--

INSERT INTO `taikhoan` (`id`, `tentk`, `pass`, `email`, `diachi`, `sdt`, `role`) VALUES
(7, 'quan', '0000000', 'quan@gmail.com', 'vinh phuc', '987654321', 0),
(8, 'ducduc', '12345678', 'luuduc@gmail.com', NULL, NULL, 1),
(9, 'quan', '0000000', 'quan@gmail.com', NULL, NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binhluan`
--
ALTER TABLE `binhluan`
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
-- AUTO_INCREMENT for table `binhluan`
--
ALTER TABLE `binhluan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `taikhoan`
--
ALTER TABLE `taikhoan`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

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
