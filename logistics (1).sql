-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 11, 2022 at 02:13 PM
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
-- Table structure for table `chitietdonbaogia`
--

CREATE TABLE `chitietdonbaogia` (
  `madonchitiet` varchar(32) NOT NULL,
  `hinhthuc` varchar(255) NOT NULL,
  `soluong` int(11) NOT NULL,
  `dongia` float NOT NULL,
  `madv` varchar(32) NOT NULL,
  `madon` int(11) NOT NULL,
  `ghichu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `chitiettintuc`
--

CREATE TABLE `chitiettintuc` (
  `machitietintuc` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `ghichu` text NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `matintuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
('COD', 'Ship COD', 'Thanh toán khi nhận được hàng theo yêu cầu'),
('LK01', 'Lưu kho', 'Cất trữ hàng hóa, lưu kho cho khách hàng có nhu cầu sử dụng'),
('TT01', 'Thủ tục hải quan', 'Làm các thủ tục giấy tờ liên quan đến hải quan cho khách hàng'),
('VC01', 'Vận chuyển đường bộ', 'Vận chuyển bằng đường bộ dùng các xe vận tải, thuê container,..'),
('VC02', 'Vận chuyển đường hàng không', 'Vận chuyển hàng hóa bằng các máy bay khi thuê bên dịch vụ vận chuyển'),
('VC03', 'Vận chuyển đường thủy', 'Vận chuyển hàng hóa bằng tàu, thuyền tại các bến bãi ở nhiều nơi');

-- --------------------------------------------------------

--
-- Table structure for table `donbaogia`
--

CREATE TABLE `donbaogia` (
  `madon` int(11) NOT NULL,
  `tendon` varchar(255) NOT NULL,
  `ngaylap` datetime NOT NULL,
  `ngayxuat` datetime NOT NULL,
  `makh` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(2, 'Nguyễn Chiến Thắng', '10 Đà Nẵng,Hải Phòng', 'thang11@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tieumuc`
--

CREATE TABLE `tieumuc` (
  `matieumuc` int(11) NOT NULL,
  `tentieumuc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tintuc`
--

CREATE TABLE `tintuc` (
  `matintuc` int(11) NOT NULL,
  `tentintuc` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `ngaydang` datetime NOT NULL,
  `matieumuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'ADMIN'),
(2, 'nguyen', '202cb962ac59075b964b07152d234b70', 'nguyen bao nguyen');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chitietdonbaogia`
--
ALTER TABLE `chitietdonbaogia`
  ADD PRIMARY KEY (`madonchitiet`),
  ADD KEY `ma_don` (`madon`),
  ADD KEY `ma_dv` (`madv`);

--
-- Indexes for table `chitiettintuc`
--
ALTER TABLE `chitiettintuc`
  ADD PRIMARY KEY (`machitietintuc`),
  ADD KEY `ma_tt` (`matintuc`);

--
-- Indexes for table `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`madv`);

--
-- Indexes for table `donbaogia`
--
ALTER TABLE `donbaogia`
  ADD PRIMARY KEY (`madon`),
  ADD KEY `ma_kh` (`makh`);

--
-- Indexes for table `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Indexes for table `tieumuc`
--
ALTER TABLE `tieumuc`
  ADD PRIMARY KEY (`matieumuc`);

--
-- Indexes for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matintuc`),
  ADD KEY `tieumuc` (`matieumuc`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chitiettintuc`
--
ALTER TABLE `chitiettintuc`
  MODIFY `machitietintuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `donbaogia`
--
ALTER TABLE `donbaogia`
  MODIFY `madon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tieumuc`
--
ALTER TABLE `tieumuc`
  MODIFY `matieumuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matintuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chitietdonbaogia`
--
ALTER TABLE `chitietdonbaogia`
  ADD CONSTRAINT `ma_don` FOREIGN KEY (`madon`) REFERENCES `donbaogia` (`madon`),
  ADD CONSTRAINT `ma_dv` FOREIGN KEY (`madv`) REFERENCES `dichvu` (`madv`);

--
-- Constraints for table `chitiettintuc`
--
ALTER TABLE `chitiettintuc`
  ADD CONSTRAINT `ma_tt` FOREIGN KEY (`matintuc`) REFERENCES `tintuc` (`matintuc`);

--
-- Constraints for table `donbaogia`
--
ALTER TABLE `donbaogia`
  ADD CONSTRAINT `ma_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);

--
-- Constraints for table `tintuc`
--
ALTER TABLE `tintuc`
  ADD CONSTRAINT `tieumuc` FOREIGN KEY (`matieumuc`) REFERENCES `tieumuc` (`matieumuc`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
