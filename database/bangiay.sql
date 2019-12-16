-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2019 at 03:06 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bangiay`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(32) DEFAULT NULL,
  `name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `email` varchar(60) DEFAULT NULL,
  `phone` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `giay`
--

CREATE TABLE `giay` (
  `Ma_Giay` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_Giay` varchar(250) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Gia` float NOT NULL,
  `img` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ID_NhaSanXuat` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ma_Loai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ton_kho` int(10) NOT NULL,
  `Hot` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `giay`
--

INSERT INTO `giay` (`Ma_Giay`, `Ten_Giay`, `Gia`, `img`, `ID_NhaSanXuat`, `Ma_Loai`, `Ton_kho`, `Hot`) VALUES
('CV_01', 'Converse 70s Hightop', 1550020, 'Converse 70s Hightop.jpg', 'CV', 'LS', 10, 1),
('CV_02', 'Converse Star Metalic Hightop', 1900000, 'Converse Star Metalic Hightop.jpg', 'CV', 'LS', 2, 0),
('CV_03', 'Converse Hightop skull', 2850000, 'Converse Hightop skull.jpg', 'CV', 'LS', 4, 1),
('FL_01', 'Fila Disruptor', 1900000, 'Fila Disruptor.jpg', 'FL', 'LS', 5, 0),
('NB_01', 'Newbalance 530', 2200000, 'Newbalance 530.jpg', 'NB', 'SP', 8, 0),
('NB_02', 'Newbalance Freshfoam', 990000, 'Newbalance Freshfoam.jpg', 'NB', 'SP', 12, 1),
('V_01', 'Vans Old Skool Red', 800000, 'Vans Old Skool.jpg', 'VS', 'SP', 10, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loai`
--

CREATE TABLE `loai` (
  `Ma_Loai` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_Loai` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loai`
--

INSERT INTO `loai` (`Ma_Loai`, `Ten_Loai`) VALUES
('LS', 'Lifestyle'),
('SP', 'Sport');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL COMMENT 'tiêu đề',
  `img` varchar(50) DEFAULT NULL COMMENT 'path file hình',
  `short_content` varchar(255) CHARACTER SET utf8 NOT NULL COMMENT 'Nội dung ngắn',
  `content` text CHARACTER SET utf8 NOT NULL COMMENT 'Nội dung',
  `hot` int(1) NOT NULL DEFAULT '0' COMMENT 'tin hot=1, thường: != 1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `img`, `short_content`, `content`, `hot`) VALUES
(1, 'qqq', 'q', 'q', 'q', 0),
(2, 'ww', 'w', 'w', 'w', 1),
(3, 'ee', 'e', 'e', 'e', 1);

-- --------------------------------------------------------

--
-- Table structure for table `nsx`
--

CREATE TABLE `nsx` (
  `ID_NhaSanXuat` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Ten_NSX` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nsx`
--

INSERT INTO `nsx` (`ID_NhaSanXuat`, `Ten_NSX`) VALUES
('CV', 'Converse'),
('FL', 'Fila'),
('NB', 'New Balance'),
('VS', 'Vans');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL DEFAULT '',
  `order_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `consignee_name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `consignee_add` varchar(80) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `consignee_phone` varchar(12) NOT NULL DEFAULT '',
  `status` int(1) NOT NULL DEFAULT '0' COMMENT 'Trạng thái:0-3'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `order_id` varchar(100) NOT NULL,
  `Ma_Giay` varchar(15) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `quantity` tinyint(3) UNSIGNED NOT NULL DEFAULT '0',
  `price` float NOT NULL DEFAULT '0',
  `Color` varchar(12) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `Size` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thanhvien`
--

CREATE TABLE `thanhvien` (
  `email` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(32) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(10) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`email`, `password`, `name`, `address`, `phone`) VALUES
('abcd@yahoo.com', 'e10adc3949ba59abbe56e057f20f883e', 'Nguyễn Minh Triết', 'Q1', '99999999'),
('hung.stu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 'Đại Ca - Trần văn Hùng', 'Quận 3', '090090999');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `giay`
--
ALTER TABLE `giay`
  ADD PRIMARY KEY (`Ma_Giay`),
  ADD KEY `manxb` (`ID_NhaSanXuat`,`Ma_Loai`),
  ADD KEY `maloai` (`Ma_Loai`);

--
-- Indexes for table `loai`
--
ALTER TABLE `loai`
  ADD PRIMARY KEY (`Ma_Loai`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nsx`
--
ALTER TABLE `nsx`
  ADD PRIMARY KEY (`ID_NhaSanXuat`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`order_id`,`Ma_Giay`),
  ADD KEY `masach` (`Ma_Giay`);

--
-- Indexes for table `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `giay`
--
ALTER TABLE `giay`
  ADD CONSTRAINT `giay_ibfk_1` FOREIGN KEY (`ID_NhaSanXuat`) REFERENCES `nsx` (`ID_NhaSanXuat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `giay_ibfk_2` FOREIGN KEY (`Ma_Loai`) REFERENCES `loai` (`Ma_Loai`) ON UPDATE CASCADE;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`email`) REFERENCES `thanhvien` (`email`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`Ma_Giay`) REFERENCES `giay` (`Ma_Giay`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
