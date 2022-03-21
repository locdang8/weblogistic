-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 21, 2022 at 09:40 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `logistics`
--

-- --------------------------------------------------------

--
-- Table structure for table `baiviet`
--

CREATE TABLE `baiviet` (
  `mabaiviet` int(11) NOT NULL,
  `tieude` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `ngaydang` datetime NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `madanhmuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`mabaiviet`, `tieude`, `noidung`, `ngaydang`, `hinhanh`, `madanhmuc`) VALUES
(1, 'okokok', 'okokoko', '2022-03-20 22:03:00', 'logistics3.jpg', 1),
(2, 'kokoko', 'kokoko', '2022-03-20 22:03:00', 'logistics5.jpeg', 2),
(4, 'kimochioo', 'kimochioo', '2022-03-01 22:45:00', 'logistics5.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `danhmuc`
--

CREATE TABLE `danhmuc` (
  `madanhmuc` int(11) NOT NULL,
  `tendanhmuc` varchar(255) NOT NULL,
  `ghichu` varchar(255) DEFAULT 'Không có ghi chú'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `danhmuc`
--

INSERT INTO `danhmuc` (`madanhmuc`, `tendanhmuc`, `ghichu`) VALUES
(1, 'Dịch vụ COD', 'Chuyển phát nhanh'),
(2, 'Vận chuyển hàng không ', 'Không có ghi chú');

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `madv` varchar(32) NOT NULL,
  `tendv` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`madv`, `tendv`, `noidung`) VALUES
('COD', 'Dịch vụ chuyển phát ', 'Tốc độ nhanh'),
('LK01', 'Lưu kho', 'Cất trữ hàng hóa, lưu kho cho khách hàng có nhu cầu sử dụng'),
('TT01', 'Thủ tục hải quan', 'Làm các thủ tục giấy tờ liên quan đến hải quan cho khách hàng'),
('VC01', 'Vận chuyển đường bộ', 'Vận chuyển bằng đường bộ dùng các xe vận tải, thuê container,..'),
('VC02', 'Vận chuyển đường hàng không', 'Vận chuyển hàng hóa bằng các máy bay khi thuê bên dịch vụ vận chuyển'),
('VC03', 'Vận chuyển đường thủy', 'Vận chuyển hàng hóa bằng tàu, thuyền tại các bến bãi ở nhiều nơi');

-- --------------------------------------------------------

--
-- Table structure for table `hinhthuc`
--

CREATE TABLE `hinhthuc` (
  `mahinhthuc` int(11) NOT NULL,
  `tenhinhthuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hinhthuc`
--

INSERT INTO `hinhthuc` (`mahinhthuc`, `tenhinhthuc`) VALUES
(1, 'Hàng rời'),
(2, 'CFS');

-- --------------------------------------------------------

--
-- Table structure for table `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkhachhang` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkhachhang`, `diachi`, `email`) VALUES
(1, 'Trần Văn Tiến', '132 Ngô Quyền,Hải Phòng', 'tiennq@gmail.com'),
(2, 'Nguyễn Chiến Thắng', '10 Đà Nẵng,Hải Phòng', 'thang11@gmail.com'),
(3, 'Nguyễn Bảo Nguyên', 'Hải Phòng', 'nguyen@gmail.com'),
(4, 'Nguyễn Bảo Nguyên', 'Hải Phòng', 'nguyen@gmail.com'),
(5, 'Nguyễn Bảo Nguyên', 'Hải Phòng', 'nguyen@gmail.com'),
(6, 'okok', 'okok', 'ok@gmail.com'),
(7, 'okok', 'okok', 'ok@gmail.com'),
(8, 'ijij', 'ok', 'k2j2@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `tendaydu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `taikhoan`, `matkhau`, `tendaydu`) VALUES
(2, 'nguyen', '202cb962ac59075b964b07152d234b70', 'nguyen bao nguyen'),
(3, 'admin', '202cb962ac59075b964b07152d234b70', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD PRIMARY KEY (`mabaiviet`),
  ADD KEY `ma_danhmuc` (`madanhmuc`);

--
-- Indexes for table `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`madanhmuc`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`madv`);

--
-- Indexes for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  ADD PRIMARY KEY (`mahinhthuc`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `baiviet`
--
ALTER TABLE `baiviet`
  MODIFY `mabaiviet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `madanhmuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `mahinhthuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `baiviet`
--
ALTER TABLE `baiviet`
  ADD CONSTRAINT `ma_danhmuc` FOREIGN KEY (`madanhmuc`) REFERENCES `danhmuc` (`madanhmuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
