-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 01, 2021 lúc 07:22 AM
-- Phiên bản máy phục vụ: 10.4.14-MariaDB
-- Phiên bản PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Cấu trúc bảng cho bảng `dangnhap`
--

CREATE TABLE `dangnhap` (
  `id` int(11) NOT NULL,
  `tk` varchar(20) NOT NULL,
  `mk` varchar(255) NOT NULL,
  `chucvu` varchar(20) NOT NULL,
  `sdt` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `dangnhap`
--

INSERT INTO `dangnhap` (`id`, `tk`, `mk`, `chucvu`, `sdt`) VALUES
(4, 'admin', '123456', 'admin', '123456789'),
(5, 'b1812280', '123456', 'kh', '0358795'),
(6, 'b1812294', '12345', 'kh', '01357895');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mshh` varchar(5) NOT NULL,
  `tenhh` varchar(50) NOT NULL,
  `gia` int(11) NOT NULL,
  `soluonghang` tinyint(4) DEFAULT NULL,
  `manhom` varchar(5) DEFAULT NULL,
  `hinh` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mshh`, `tenhh`, `gia`, `soluonghang`, `manhom`, `hinh`) VALUES
('001', 'Rubik Gan MX', 299, 10, 'rb3', './1.jpg'),
('002', 'Rubik Gan', 300, 20, 'rb3', './2.jpg'),
('003', 'Rubik Gan X', 450, 25, 'rb4', './4.jpg'),
('004', 'Rubik Gan XG', 550, 5, 'rb3', './6.jpg'),
('005', 'MoYu Weipo WR M', 360, 8, 'rb2', './21.png'),
('006', 'QiYi Valk 2 LM', 380, 9, 'rb2', './22.jpg'),
('007', 'GAN 251 M', 520, 13, 'rb2', './23.jpg'),
('008', 'YJ MGC Magnetic Black', 380, 16, 'rb4', './41.jpg'),
('009', 'YJ MGC 4x4 Stickerless', 400, 18, 'rb4', './42.jpg'),
('010', 'QiYi MS Magnetic', 120, 19, 'rb5', './51.jpg'),
('011', 'QiYi MS Magnetic XG', 999, 12, 'rb5', './52.jpg'),
('012', 'QiYi MS Magnetic LMX', 320, 15, 'rb5', './53.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `MSKH` varchar(5) NOT NULL,
  `hotenkh` varchar(50) DEFAULT NULL,
  `diachi` varchar(50) DEFAULT NULL,
  `sdt` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nahnvien`
--

CREATE TABLE `nahnvien` (
  `MSNV` varchar(5) NOT NULL,
  `hotennv` varchar(50) NOT NULL,
  `chucvu` varchar(50) NOT NULL,
  `diachi` varchar(50) NOT NULL,
  `sdt` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mshh`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`MSKH`);

--
-- Chỉ mục cho bảng `nahnvien`
--
ALTER TABLE `nahnvien`
  ADD PRIMARY KEY (`MSNV`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `dangnhap`
--
ALTER TABLE `dangnhap`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
