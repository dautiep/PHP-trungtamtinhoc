-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 27, 2019 at 07:24 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ql_sinh_vien`
--

-- --------------------------------------------------------

--
-- Table structure for table `khoa`
--

DROP TABLE IF EXISTS `khoa`;
CREATE TABLE IF NOT EXISTS `khoa` (
  `makhoa` int(50) NOT NULL AUTO_INCREMENT,
  `tenkhoa` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`makhoa`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `khoa`
--

INSERT INTO `khoa` (`makhoa`, `tenkhoa`) VALUES
(1, 'Công nghệ thông tin'),
(2, 'Công nghệ thực phẩm'),
(3, 'Quản trị kinh doanh'),
(4, 'Thiết kế - Đồ hoạ'),
(5, 'Cơ khí'),
(6, 'Xây dựng'),
(7, 'Luật'),
(8, 'Kỹ thuật'),
(9, 'Ngoại ngữ'),
(10, 'Âm nhạc'),
(12, 'Vật lý');

-- --------------------------------------------------------

--
-- Table structure for table `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `mamonhoc` int(11) NOT NULL AUTO_INCREMENT,
  `tenmonhoc` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`mamonhoc`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `monhoc`
--

INSERT INTO `monhoc` (`mamonhoc`, `tenmonhoc`) VALUES
(1, 'Pháp luật Việt Nam đại cương'),
(2, 'Những nguyên lý cơ bản của chủ nghĩa Mác Lê Nin'),
(3, 'Toán cao cấp'),
(4, 'Tin học đại cương'),
(5, 'Giáo dục quốc phòng'),
(6, 'Giáo dục thể chất'),
(7, 'Ngoại ngữ 1'),
(8, 'Ngoại ngữ 2'),
(9, 'Hoá đại cương'),
(10, 'Kỹ năng giao tiếp');

-- --------------------------------------------------------

--
-- Table structure for table `sinhvien`
--

DROP TABLE IF EXISTS `sinhvien`;
CREATE TABLE IF NOT EXISTS `sinhvien` (
  `masv` int(10) NOT NULL AUTO_INCREMENT,
  `makhoa` int(11) NOT NULL,
  `tensv` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lop` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`masv`),
  KEY `makhoa` (`makhoa`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sinhvien`
--

INSERT INTO `sinhvien` (`masv`, `makhoa`, `tensv`, `lop`) VALUES
(1, 1, 'Phan Tấn Trung', 'TH-2018'),
(2, 1, 'Trần Văn Cường', 'TH-2018'),
(3, 2, 'Nguyễn Chí Thanh', 'TP-2019'),
(4, 2, 'Lê Thị Nhỏ', 'TP-2019'),
(5, 10, 'Đen Vâu', 'AN-2019'),
(6, 10, 'Sơn Tùng', 'AN-2019'),
(7, 4, 'Nguyễn Thanh Thảo', 'TK-2018'),
(8, 3, 'Trần Việt Tuấn', 'QTKD-2019'),
(9, 5, 'Đổ Thành An', 'CKHI-2019'),
(10, 6, 'Tăng Trọng Nghĩa', 'XD-2017'),
(11, 7, 'Trần Thanh Hà', 'LDS-2017'),
(12, 8, 'Quách Thành Vũ', 'KT-2017'),
(13, 9, 'Đặng Thanh Cường', 'NN-2019');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD CONSTRAINT `FK_KHOA_SV` FOREIGN KEY (`makhoa`) REFERENCES `khoa` (`makhoa`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
