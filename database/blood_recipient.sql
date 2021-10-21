-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 21, 2021 lúc 05:22 AM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `blood_recipient`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `recipient`
--

CREATE TABLE `recipient` (
  `reci_id` int(10) UNSIGNED NOT NULL,
  `reci_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_age` int(11) DEFAULT NULL,
  `reci_bgrp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reci_bqnty` int(11) NOT NULL,
  `reci_sex` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reci_reg_date` date DEFAULT NULL,
  `reci_phno` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `recipient`
--

INSERT INTO `recipient` (`reci_id`, `reci_name`, `reci_age`, `reci_bgrp`, `reci_bqnty`, `reci_sex`, `reci_reg_date`, `reci_phno`) VALUES
(1, 'Nguyễn Ngọc Bích', 19, 'B', 300, 'Nữ', '2021-10-15', '09822685456'),
(2, 'Nguyễn Thị Nga', 20, 'A', 300, 'Nữ', '2021-10-16', '0987952147'),
(3, 'Phùng Quang Anh', 21, 'O', 300, 'Nam', '2021-10-19', '0979500226');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `recipient`
--
ALTER TABLE `recipient`
  ADD PRIMARY KEY (`reci_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `recipient`
--
ALTER TABLE `recipient`
  MODIFY `reci_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
