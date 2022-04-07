-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 07, 2022 at 07:34 PM
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
  `noidung` text NOT NULL,
  `ngaydang` datetime NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `matheloai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `baiviet`
--

INSERT INTO `baiviet` (`mabaiviet`, `tieude`, `noidung`, `ngaydang`, `hinhanh`, `matheloai`) VALUES
(1, 'Dịch vụ vận chuyển', 'Thủ tục xuất khẩu gỗ có quy trình như thế nào? Gỗ nguyên khối hay các sản phẩm từ gỗ là mặt hàng chiếm tỉ trọng lớn trong mảng xuất khẩu hằng năm của nước ta. Tuy nhiên, đây cũng chính là sản phẩm có thủ tục hải quan khá phức tạp, cần tuân thủ nhiều chính sách pháp lí. Vậy quy trình xuất khẩu gỗ và các sản phẩm từ gỗ như thế nào? Chúng ta sẽ cùng tìm hiểu chi tiết ngay sau đây!', '2022-04-08 00:30:00', 'logistics5.jpeg', 1),
(2, 'kokoko', 'kokoko', '2022-03-20 22:03:00', 'logistics5.jpeg', 2),
(4, 'kimochioo', 'kimochioo', '2022-03-01 22:45:00', 'logistics5.jpeg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `dichvu`
--

CREATE TABLE `dichvu` (
  `madv` varchar(32) NOT NULL,
  `tendv` varchar(255) NOT NULL,
  `noidung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dichvu`
--

INSERT INTO `dichvu` (`madv`, `tendv`, `noidung`) VALUES
('COD', 'Dịch vụ chuyển phát ', 'Vài năm gần đây, khô gà lá chanh nổi lên như một món ăn vặt được nhiều người yêu thích, đặc biệt là giới trẻ. Được chế biến bởi nhiều công đoạn khá cầu kỳ, với những sợi thịt gà mềm dai, kết hợp với vị cay của ớt và mùi thơm nồng của lá chanh khiến món gà khô này càng thêm hấp dẫn. HIện tại, Bestcargo nhận vận chuyển khô gà đi Mỹ đảm bảo nhất!'),
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
(8, 'ijij', 'ok', 'k2j2@gmail.com'),
(9, 'Nguyễn Huy Hoàng', 'Lê Lai, Hp', 'hoang@gmail.com'),
(10, 'Nguyễn Văn Hạnh', 'Hải Phòng', 'hanh@gmail.com'),
(11, 'Nguyễn Văn Test', '414 Lạch Tray, Hải Phòng', 'test@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `theloai`
--

CREATE TABLE `theloai` (
  `matheloai` int(11) NOT NULL,
  `tentheloai` varchar(255) NOT NULL,
  `ghichu` varchar(255) DEFAULT 'Không có ghi chú'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `theloai`
--

INSERT INTO `theloai` (`matheloai`, `tentheloai`, `ghichu`) VALUES
(1, 'Dịch vụ COD', 'Chuyển phát nhanh'),
(2, 'Vận chuyển đ nhớ gì ', 'Vận chuyển siêu nhanh '),
(4, 'Vận chuyển ngày đêm', 'Không có ghi chú');

-- --------------------------------------------------------

--
-- Table structure for table `ttdonbaogia`
--

CREATE TABLE `ttdonbaogia` (
  `madon` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `ngaylap` datetime NOT NULL,
  `mahinhthuc` int(11) NOT NULL,
  `makh` int(11) NOT NULL,
  `madv` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ttdonbaogia`
--

INSERT INTO `ttdonbaogia` (`madon`, `noidung`, `ngaylap`, `mahinhthuc`, `makh`, `madv`) VALUES
(1, 'tôi muốn hợp tác', '2022-03-21 09:19:40', 1, 5, 'LK01'),
(2, 'okok', '2022-03-21 09:24:56', 1, 8, 'COD'),
(3, 'Muốn hợp tác', '2022-03-28 10:47:03', 2, 9, 'VC02'),
(4, 'okoko', '2022-04-03 01:13:40', 1, 10, 'COD'),
(5, 'Muốn hợp tác', '2022-04-07 07:06:20', 1, 11, 'LK01');

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
  ADD KEY `ma_theloai` (`matheloai`);

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
-- Indexes for table `theloai`
--
ALTER TABLE `theloai`
  ADD PRIMARY KEY (`matheloai`);

--
-- Indexes for table `ttdonbaogia`
--
ALTER TABLE `ttdonbaogia`
  ADD PRIMARY KEY (`madon`),
  ADD KEY `ma_kh` (`makh`),
  ADD KEY `ma_ht` (`mahinhthuc`),
  ADD KEY `ma_dv` (`madv`);

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
-- AUTO_INCREMENT for table `hinhthuc`
--
ALTER TABLE `hinhthuc`
  MODIFY `mahinhthuc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `theloai`
--
ALTER TABLE `theloai`
  MODIFY `matheloai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ttdonbaogia`
--
ALTER TABLE `ttdonbaogia`
  MODIFY `madon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `ma_theloai` FOREIGN KEY (`matheloai`) REFERENCES `theloai` (`matheloai`);

--
-- Constraints for table `ttdonbaogia`
--
ALTER TABLE `ttdonbaogia`
  ADD CONSTRAINT `ma_dv` FOREIGN KEY (`madv`) REFERENCES `dichvu` (`madv`),
  ADD CONSTRAINT `ma_ht` FOREIGN KEY (`mahinhthuc`) REFERENCES `hinhthuc` (`mahinhthuc`),
  ADD CONSTRAINT `ma_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
