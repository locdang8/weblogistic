-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 07, 2022 lúc 03:11 AM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `logistics`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitietdonbaogia`
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
-- Cấu trúc bảng cho bảng `chitiettintuc`
--

CREATE TABLE `chitiettintuc` (
  `machitietintuc` int(11) NOT NULL,
  `noidung` varchar(255) NOT NULL,
  `ghichu` text NOT NULL,
  `hinhanh` varchar(255) NOT NULL,
  `madv` varchar(32) NOT NULL,
  `matintuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dichvu`
--

CREATE TABLE `dichvu` (
  `madv` varchar(32) NOT NULL,
  `tendv` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dichvu`
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
-- Cấu trúc bảng cho bảng `donbaogia`
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
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` int(11) NOT NULL,
  `tenkhachhang` varchar(255) NOT NULL,
  `diachi` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkhachhang`, `diachi`, `email`) VALUES
(1, 'Trần Văn Tiến', '132 Ngô Quyền,Hải Phòng', 'tiennq@gmail.com'),
(2, 'Nguyễn Chiến Thắng', '10 Đà Nẵng,Hải Phòng', 'thang11@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `matintuc` int(11) NOT NULL,
  `tentintuc` varchar(255) NOT NULL,
  `noidung` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `tendaydu` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitietdonbaogia`
--
ALTER TABLE `chitietdonbaogia`
  ADD PRIMARY KEY (`madonchitiet`),
  ADD KEY `ma_don` (`madon`),
  ADD KEY `ma_dv` (`madv`);

--
-- Chỉ mục cho bảng `chitiettintuc`
--
ALTER TABLE `chitiettintuc`
  ADD PRIMARY KEY (`machitietintuc`),
  ADD KEY `ma_tt` (`matintuc`),
  ADD KEY `madv` (`madv`);

--
-- Chỉ mục cho bảng `dichvu`
--
ALTER TABLE `dichvu`
  ADD PRIMARY KEY (`madv`);

--
-- Chỉ mục cho bảng `donbaogia`
--
ALTER TABLE `donbaogia`
  ADD PRIMARY KEY (`madon`),
  ADD KEY `ma_kh` (`makh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`matintuc`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiettintuc`
--
ALTER TABLE `chitiettintuc`
  MODIFY `machitietintuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `donbaogia`
--
ALTER TABLE `donbaogia`
  MODIFY `madon` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `makh` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `matintuc` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitietdonbaogia`
--
ALTER TABLE `chitietdonbaogia`
  ADD CONSTRAINT `ma_don` FOREIGN KEY (`madon`) REFERENCES `donbaogia` (`madon`),
  ADD CONSTRAINT `ma_dv` FOREIGN KEY (`madv`) REFERENCES `dichvu` (`madv`);

--
-- Các ràng buộc cho bảng `chitiettintuc`
--
ALTER TABLE `chitiettintuc`
  ADD CONSTRAINT `ma_tt` FOREIGN KEY (`matintuc`) REFERENCES `tintuc` (`matintuc`),
  ADD CONSTRAINT `madv` FOREIGN KEY (`madv`) REFERENCES `dichvu` (`madv`);

--
-- Các ràng buộc cho bảng `donbaogia`
--
ALTER TABLE `donbaogia`
  ADD CONSTRAINT `ma_kh` FOREIGN KEY (`makh`) REFERENCES `khachhang` (`makh`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
