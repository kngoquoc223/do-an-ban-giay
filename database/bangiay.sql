-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 27, 2019 at 12:17 PM
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
('FL_02', 'Fila OAKMONT TR', 600000, 'Fila OAKMONT TR.jpg', 'FL', 'LS', 10, 0),
('FL_03', 'FILA REY Rracer Sandal', 500000, 'da67b713c6b02056bd39993879ab3a20.jpg', 'FL', 'SD', 20, 1),
('FL_04', 'FILA Distruptor Sandal', 799000, '9fd7b75728dbee9e8f7a2fbac026126b.jpg', 'FL', 'SD', 16, 0),
('NB_01', 'New Balance N-BACK', 2650000, 'Newbalance 530.jpg', 'NB', 'LS', 15, 1),
('NB_02', 'Newbalance Freshfoam', 990000, 'Newbalance Freshfoam.jpg', 'NB', 'SP', 12, 1),
('NB_03', 'New Balance TEAM AWAY GREY', 2190000, '9e9cfa56dc7a4bdf8e5b76cf893daaf8.jpg', 'NB', 'SP', 6, 1),
('sad', 'sadsad', 1212, '', 'CV', 'LS', 9, 0),
('VS_01', 'Vans Old Skool Red', 800000, 'Vans Old Skool.jpg', 'VS', 'SP', 10, 1),
('VS_02', 'Sneaker Unisex Sk8 Hi Vans', 2160000, 'ss.jpg', 'VS', 'LS', 32, 1),
('VS_03', 'Vans Slip On', 2699000, 'Vans Slip On.jpg', 'VS', 'LS', 4, 0);

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
('SD', 'Sandals'),
('SP', 'Sport');

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
  `id_tv` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thanhvien`
--

INSERT INTO `thanhvien` (`id_tv`, `password`, `name`) VALUES
('huy', '202cb962ac59075b964b07152d234b70', 'minh huy'),
('khanh', '202cb962ac59075b964b07152d234b70', 'quoc khanh'),
('root', 'd41d8cd98f00b204e9800998ecf8427e', '');

--
-- Indexes for dumped tables
--

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
  ADD PRIMARY KEY (`id_tv`);

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
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`email`) REFERENCES `thanhvien` (`id_tv`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`order_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_detail_ibfk_2` FOREIGN KEY (`Ma_Giay`) REFERENCES `giay` (`Ma_Giay`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
