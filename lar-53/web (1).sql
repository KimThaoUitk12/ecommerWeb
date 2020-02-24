-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 27, 2019 lúc 03:39 PM
-- Phiên bản máy phục vụ: 10.4.6-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admin`
--

CREATE TABLE `admin` (
  `MAAD` int(10) UNSIGNED NOT NULL,
  `TENTK` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `anh`
--

CREATE TABLE `anh` (
  `MASP` int(10) UNSIGNED NOT NULL,
  `LINK` varchar(255) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiethoadon`
--

CREATE TABLE `chitiethoadon` (
  `MAHD` int(10) UNSIGNED NOT NULL,
  `MASP` int(10) UNSIGNED NOT NULL,
  `THANHTIEN` int(11) DEFAULT NULL,
  `SOLUONG` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang`
--

CREATE TABLE `hang` (
  `MAHANG` int(11) NOT NULL,
  `TENHANG` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `hang`
--

INSERT INTO `hang` (`MAHANG`, `TENHANG`) VALUES
(1, 'Iphone'),
(2, 'SamSung '),
(3, 'Xiaomi'),
(4, 'Oppo'),
(5, 'Nokia'),
(6, 'Realmi'),
(7, 'Sony'),
(8, 'LG'),
(9, 'Lenovo'),
(10, 'Hãng khác');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `MAHD` int(10) UNSIGNED NOT NULL,
  `NGAYHD` date NOT NULL,
  `TONGTIEN` int(11) NOT NULL,
  `MAKH` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MAKH` int(10) UNSIGNED NOT NULL,
  `TENKH` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `DIACHI` varchar(100) COLLATE utf8_vietnamese_ci NOT NULL,
  `SDT` char(10) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `EMAIL` varchar(50) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `TENTK` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `magiamgia`
--

CREATE TABLE `magiamgia` (
  `MAGIAMGIA` varchar(10) COLLATE utf8_vietnamese_ci NOT NULL,
  `MASP` int(10) UNSIGNED NOT NULL,
  `PHANTRAM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` int(10) UNSIGNED NOT NULL,
  `TENSP` varchar(30) COLLATE utf8_vietnamese_ci NOT NULL,
  `HANG` int(11) NOT NULL,
  `MOTA` varchar(200) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `NAMSX` date DEFAULT NULL,
  `GIA` int(11) DEFAULT NULL,
  `GIAKHUYENMAI` int(11) DEFAULT NULL,
  `ANHDAIDIEN` varchar(150) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `MANHINH` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CAMERATRUOC` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CAMERASAU` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `RAM` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `BONHOTRONG` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `CPU` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `GPU` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `PIN` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `OS` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL,
  `SIM` varchar(30) COLLATE utf8_vietnamese_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSP`, `HANG`, `MOTA`, `NAMSX`, `GIA`, `GIAKHUYENMAI`, `ANHDAIDIEN`, `MANHINH`, `CAMERATRUOC`, `CAMERASAU`, `RAM`, `BONHOTRONG`, `CPU`, `GPU`, `PIN`, `OS`, `SIM`) VALUES
(1, 'Điện thoại thông minh', 1, NULL, NULL, 10000000, 5000000, '6s-plus.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'Điện thoại thông minh', 2, NULL, NULL, 1000000, NULL, '6s-plus-8.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 'Điện thoại thông minh', 1, NULL, NULL, 1000000, NULL, '11.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 'Điện thoại thông minh', 2, NULL, NULL, 1000000, NULL, '11-den.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 'Điện thoại thông minh', 1, NULL, NULL, 1000000, NULL, '11-do.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 'Điện thoại thông minh', 2, NULL, NULL, 1000000, NULL, '11-pro-max-xam.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Điện thoại thông minh', 6, NULL, NULL, 1000000, NULL, 'xr.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 'Điện thoại thông minh', 4, NULL, NULL, 1000000, NULL, '11-pro-max-bac.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 'Điện thoại thông minh', 3, NULL, NULL, 1000000, NULL, '11-vang.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 'Điện thoại thông minh', 1, NULL, NULL, 1000000, NULL, '11-pro-max-vang.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 'Điện thoại thông minh', 5, NULL, NULL, 1000000, NULL, 'xr-den.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 'Điện thoại thông minh', 3, NULL, NULL, 1000000, NULL, 'xr-xanh.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Điện thoại thông minh', 7, NULL, NULL, 1000000, NULL, 'xr-vang.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 'Điện thoại thông minh', 2, NULL, NULL, 1000000, NULL, 'xr-trang.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Điện thoại thông minh', 1, NULL, NULL, 1000000, NULL, 'xr-nau.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 'Điện thoại thông minh', 4, NULL, NULL, 1000000, NULL, 'xs-max.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 'Điện thoại thông minh', 2, NULL, NULL, 1000000, NULL, 'xs-max-2.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Điện thoại thông minh', 3, NULL, NULL, 1000000, NULL, 'xs-max-1.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 'Điện thoại thông minh', 1, NULL, NULL, 1000000, NULL, 'xs-max-4.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 'Điện thoại thông minh', 8, NULL, NULL, 1000000, NULL, '6s-plus-7.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

CREATE TABLE `taikhoan` (
  `TENTK` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `PASS` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL,
  `QUYEN` varchar(20) COLLATE utf8_vietnamese_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_vietnamese_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`TENTK`, `PASS`, `QUYEN`) VALUES
('taikhoan1', '123', 'admin'),
('taikhoan10', '123', 'khach'),
('taikhoan2', '123', 'admin'),
('taikhoan3', '123', 'khach'),
('taikhoan4', '123', 'khach'),
('taikhoan5', '123', 'khach'),
('taikhoan6', '123', 'khach'),
('taikhoan7', '123', 'admin'),
('taikhoan8', '123', 'khach'),
('taikhoan9', '123', 'khach');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`MAAD`),
  ADD KEY `FK_AD_TK` (`TENTK`);

--
-- Chỉ mục cho bảng `anh`
--
ALTER TABLE `anh`
  ADD PRIMARY KEY (`MASP`,`LINK`);

--
-- Chỉ mục cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD PRIMARY KEY (`MAHD`,`MASP`) USING BTREE,
  ADD KEY `FK_CTHD_SP` (`MASP`),
  ADD KEY `FK_CTHD_HD` (`MAHD`) USING BTREE;

--
-- Chỉ mục cho bảng `hang`
--
ALTER TABLE `hang`
  ADD PRIMARY KEY (`MAHANG`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`MAHD`),
  ADD KEY `FK_HD_KH` (`MAKH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MAKH`),
  ADD KEY `FK_KH_TK` (`TENTK`);

--
-- Chỉ mục cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD PRIMARY KEY (`MAGIAMGIA`),
  ADD KEY `FK_GIAMGIA_SP` (`MASP`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`),
  ADD KEY `FK_SP_HANG` (`HANG`);

--
-- Chỉ mục cho bảng `taikhoan`
--
ALTER TABLE `taikhoan`
  ADD PRIMARY KEY (`TENTK`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admin`
--
ALTER TABLE `admin`
  MODIFY `MAAD` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `hang`
--
ALTER TABLE `hang`
  MODIFY `MAHANG` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `MAHD` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `MAKH` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `MASP` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `FK_AD_TK` FOREIGN KEY (`TENTK`) REFERENCES `taikhoan` (`TENTK`);

--
-- Các ràng buộc cho bảng `anh`
--
ALTER TABLE `anh`
  ADD CONSTRAINT `FK_ANH_KH` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Các ràng buộc cho bảng `chitiethoadon`
--
ALTER TABLE `chitiethoadon`
  ADD CONSTRAINT `FK_CTHD_HD` FOREIGN KEY (`MAHD`) REFERENCES `hoadon` (`MAHD`),
  ADD CONSTRAINT `FK_CTHD_SP` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `FK_HD_CTHD` FOREIGN KEY (`MAHD`) REFERENCES `chitiethoadon` (`MAHD`),
  ADD CONSTRAINT `FK_HD_KH` FOREIGN KEY (`MAKH`) REFERENCES `khachhang` (`MAKH`);

--
-- Các ràng buộc cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD CONSTRAINT `FK_KH_TK` FOREIGN KEY (`TENTK`) REFERENCES `taikhoan` (`TENTK`);

--
-- Các ràng buộc cho bảng `magiamgia`
--
ALTER TABLE `magiamgia`
  ADD CONSTRAINT `FK_GIAMGIA_SP` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`);

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `FK_SP_HANG` FOREIGN KEY (`HANG`) REFERENCES `hang` (`MAHANG`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
