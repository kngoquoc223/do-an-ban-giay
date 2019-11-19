-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2019 at 01:39 PM
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
('CV_01', 'Converse 70s Hightop', 1550000, 'Converse 70s Hightop.jpg', 'CV', 'LS', 10, 1),
('CV_02', 'Converse Star Metalic Hightop', 1900000, 'Converse Star Metalic Hightop.jpg', 'CV', 'LS', 2, 0),
('CV_03', 'Converse Hightop skull', 2850000, 'Converse Hightop skull.jpg', 'CV', 'LS', 4, 1),
('FL_01', 'Fila Disruptor', 1900000, 'Fila Disruptor.jpg', 'FL', 'LS', 5, 0),
('NB_01', 'Newbalance 530', 2200000, 'Newbalance 530.jpg', 'NB', 'SP', 8, 0),
('NB_02', 'Newbalance Freshfoam', 990000, 'Newbalance Freshfoam.jpg', 'NB', 'SP', 12, 1);

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
-- Constraints for dumped tables
--

--
-- Constraints for table `giay`
--
ALTER TABLE `giay`
  ADD CONSTRAINT `giay_ibfk_1` FOREIGN KEY (`ID_NhaSanXuat`) REFERENCES `nsx` (`ID_NhaSanXuat`) ON UPDATE CASCADE,
  ADD CONSTRAINT `giay_ibfk_2` FOREIGN KEY (`Ma_Loai`) REFERENCES `loai` (`Ma_Loai`) ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
