-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th5 29, 2022 lúc 06:20 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `lmsnhom4`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baikiemtra_tl`
--

DROP TABLE IF EXISTS `baikiemtra_tl`;
CREATE TABLE IF NOT EXISTS `baikiemtra_tl` (
  `MaBaiKT` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenMonKT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGianBD_KT` time(6) NOT NULL,
  `ThoiGianKT_KT` time(6) NOT NULL,
  `Diem` float NOT NULL,
  `MaLoaiBaiKT` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaDe` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaHS` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaBaiKT`),
  KEY `MaDe` (`MaDe`),
  KEY `MaHS` (`MaHS`),
  KEY `MaLoaiBaiKT` (`MaLoaiBaiKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `baikiemtra_tn`
--

DROP TABLE IF EXISTS `baikiemtra_tn`;
CREATE TABLE IF NOT EXISTS `baikiemtra_tn` (
  `MaBaiKT` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenMonKT` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `ThoiGianKT` time(6) NOT NULL,
  `SoLanKT` int(10) NOT NULL,
  `MaLoaiBaiKT` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaDe` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaHS` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaBaiKT`),
  KEY `MaDe` (`MaDe`),
  KEY `MaLoaiBaiKT` (`MaLoaiBaiKT`),
  KEY `MaMH` (`MaMH`),
  KEY `MaHS` (`MaHS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cauhoi`
--

DROP TABLE IF EXISTS `cauhoi`;
CREATE TABLE IF NOT EXISTS `cauhoi` (
  `MaCauHoi` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `NoiDungCauHoi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaGV` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaDe` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaCauHoi`),
  KEY `MaGV` (`MaGV`),
  KEY `MaDe` (`MaDe`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `dekiemtra`
--

DROP TABLE IF EXISTS `dekiemtra`;
CREATE TABLE IF NOT EXISTS `dekiemtra` (
  `MaDe` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `SoCauHoi` int(10) NOT NULL,
  `MaGV` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaDe`),
  KEY `MaGV` (`MaGV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

DROP TABLE IF EXISTS `giaovien`;
CREATE TABLE IF NOT EXISTS `giaovien` (
  `MaGV` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenGV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `SDT` int(25) NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop2` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaGV`),
  KEY `MaLop` (`MaLop`),
  KEY `MaLop2` (`MaLop2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng chứa thông tin chi tiết của giáo viên';

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`MaGV`, `TenGV`, `NgaySinh`, `SDT`, `DiaChi`, `Email`, `MaLop`, `MaLop2`) VALUES
('GV01NBK', 'Ngo Thai Thuan', '1992-04-17', 342487146, 'Tan Phu, TP.HCM', 'thaithuan92@gmail.com', '7A1TQT', ''),
('GV02NBK', 'Le Hoang Vy', '1992-01-25', 927451478, 'Q.2, TP.HCM', 'levi19@gmail.com', '6A1HLK', ''),
('GV03HLK', 'Nguyen Ngoc Lan', '1993-05-17', 382241745, 'Binh Thanh, TP.HCM', 'ngoclan77@gmail.com', 'Mời chọn mục', '9A1HLK'),
('GV04HLK', 'Nguyen Thanh Nhan', '1992-04-28', 847157489, 'Tan Binh, TP.HCM', 'thanhnhan.92@gmail.com', '', 'Mời chọn mục'),
('GV05NT', 'Nguyen Thai Son', '1992-05-15', 862417492, 'Go Vap, TP.HCM', 'thaison1992@gmail.com', '', '6A1HLK'),
('GV06NT', 'Tran Tuyet Mai', '1993-12-01', 841527458, 'Binh Thanh, TP.HCM', 'tuyetmai1993@gmail.com', '', 'Mời chọn mục'),
('GV07TQT', 'Le Thanh Kieu', '1994-12-05', 335417541, 'Phu Nhuan, TP.HCM', 'thanhkieu1994@gmail.com', '', ''),
('GV08TQT', 'Tran Thanh Tuan', '1994-05-17', 827418231, 'Phu Nhuan, TP.HCM', 'thanhtuan1994@gmail.com', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hocsinh`
--

DROP TABLE IF EXISTS `hocsinh`;
CREATE TABLE IF NOT EXISTS `hocsinh` (
  `MaHS` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenHS` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaLop` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `DiemTK` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `DiemGK` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `DiemCK` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `DiemTB` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `MaTruong` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaHS`),
  KEY `MaLop` (`MaLop`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hocsinh`
--

INSERT INTO `hocsinh` (`MaHS`, `TenHS`, `NgaySinh`, `DiaChi`, `MaLop`, `DiemTK`, `DiemGK`, `DiemCK`, `DiemTB`, `MaTruong`) VALUES
('HS01NBK', 'Vo Duy Tan', '2010-02-25', 'Q2, TP.HCM', '6A1NBK', '5', '2', '8', '6', '01NBK'),
('HS02NBK', 'Dinh Duy Bao', '2010-03-14', 'Tan Binh, TP.HCM', '6A1NBK', '7', '7', '7', '7', '01NBK'),
('HS03NBK', 'Le Thai Nam', '2010-05-02', 'Binh Thanh, TP.HCM', '6A1NBK', '', '', '', '', ''),
('HS04NBK', 'Vo Trong Tan', '2010-07-16', 'Tan Binh, TP.HCM', '6A1NBK', '8', '8', '9', '10', '01NBK'),
('HS09HLK', 'Ly The Nam', '2010-01-23', 'Nha Be, TP.HCM', '6A1HLK', '', '', '', '', ''),
('HS10HLK', 'Doan Duy Bao', '2010-04-12', 'Can Gio, TP.HCM', '6A1HLK', '', '', '', '', ''),
('HS11HLK', 'Nguyen Nhu Thao', '2010-01-30', 'Q1, TP.HCM', '6A1HLK', '', '', '', '', ''),
('HS12HLK', 'Huynh Kim Yen', '2010-12-25', 'Q8, TP.HCM', '6A1HLK', '', '', '', '', ''),
('HS20NT', 'Le Kim Yen', '2010-03-14', 'Go Vap, TP.HCM', '6A1NT', '', '', '', '', ''),
('HS21NT', 'Dao Kim Tung', '2010-05-02', 'Phu Nhuan, TP.HCM', '6A1NT', '', '', '', '', ''),
('HS22NT', 'Ly Thanh Nhan', '2010-07-16', 'Binh Thanh, TP.HCM', '6A1NT', '', '', '', '', ''),
('HS23NT', 'Nguyen Kim Thao', '2010-01-23', 'Go Vap, TP.HCM', '6A1NT', '', '', '', '', ''),
('HS30TQT', 'Nguyen Duy The', '2010-04-12', 'Tan Binh, TP.HCM', '6A1TQT', '', '', '', '', ''),
('HS31TQT', 'Luu Vinh Te', '2010-01-30', 'Nha Be, TP.HCM', '6A1TQT', '', '', '', '', ''),
('HS32TQT', 'Doan Chi Thanh', '2010-07-16', 'Can Gio, TP.HCM', '6A1TQT', '', '', '', '', ''),
('HS33TQT', 'Le Thai Trung', '2010-01-23', 'Q1, TP.HCM', '9A1TQT', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ketqua_baikt`
--

DROP TABLE IF EXISTS `ketqua_baikt`;
CREATE TABLE IF NOT EXISTS `ketqua_baikt` (
  `id_ketqua` bigint(20) NOT NULL,
  `phodiem` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_ketqua`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoilop`
--

DROP TABLE IF EXISTS `khoilop`;
CREATE TABLE IF NOT EXISTS `khoilop` (
  `MaKhoiLop` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenKhoiLop` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `SoLopTrongKhoi` int(25) NOT NULL,
  `MaQTVT` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaMH` varchar(25) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `MaMH2` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaKhoiLop`),
  KEY `MaQTVT` (`MaQTVT`),
  KEY `MaMH` (`MaMH`),
  KEY `MaMH2` (`MaMH2`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoilop`
--

INSERT INTO `khoilop` (`MaKhoiLop`, `TenKhoiLop`, `SoLopTrongKhoi`, `MaQTVT`, `MaMH`, `MaMH2`) VALUES
('06HLK', 'Khối 06', 8, 'QT259HLK', 'T', 'T'),
('06NBK', 'Khối 06', 8, 'QT135NBK', 'T', 'T'),
('06NT', 'Khối 06', 6, 'QT412NT', 'T', 'T'),
('06TQT', 'Khối 06', 6, 'QT128TQT', 'MT', ''),
('07HLK', 'Khối 07', 7, 'QT259HLK', 'T', ''),
('07NBK', 'Khối 07', 6, 'QT135NBK', '', ''),
('07NT', 'Khối 07', 7, 'QT412NT', '', ''),
('07TQT', 'Khối 07', 5, 'QT128TQT', '', ''),
('08HLK', 'Khối 08', 6, 'QT259HLK', '', ''),
('08NBK', 'Khối 08', 7, 'QT135NBK', '', ''),
('08NT', 'Khối 08', 6, 'QT412NT', '', ''),
('08TQT', 'Khối 08', 5, 'QT128TQT', '', ''),
('09HLK', 'Khối 09', 5, 'QT259HLK', '', ''),
('09NBK', 'Khối 09', 6, 'QT135NBK', '', ''),
('09NT', 'Khối 09', 5, 'QT412NT', '', ''),
('09TQT', 'Khối 09', 6, 'QT128TQT', '', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaibaikiemtra`
--

DROP TABLE IF EXISTS `loaibaikiemtra`;
CREATE TABLE IF NOT EXISTS `loaibaikiemtra` (
  `MaLoaiBaiKT` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLoaiBaiKT`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lophoc`
--

DROP TABLE IF EXISTS `lophoc`;
CREATE TABLE IF NOT EXISTS `lophoc` (
  `MaLop` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenLop` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `SiSo` int(25) NOT NULL,
  `MaKhoiLop` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `MaGV` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaLop`),
  KEY `MaKhoiLop` (`MaKhoiLop`),
  KEY `MaGV` (`MaGV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lophoc`
--

INSERT INTO `lophoc` (`MaLop`, `TenLop`, `SiSo`, `MaKhoiLop`, `MaGV`) VALUES
('6A1HLK', '6A1', 50, '06HLK', 'GV03HLK'),
('6A1NBK', '6A1', 40, '06NBK', 'GV01NBK'),
('6A1NT', '6A1', 40, '06NT', 'GV06NT'),
('6A1TQT', '6A1', 40, '06NT', 'GV06NT'),
('7A1HLK', '7A1', 39, '07HLK', 'GV04HLK'),
('7A1NBK', '7A1', 38, '07NBK', 'GV02NBK'),
('7A1NT', '7A1', 40, '07NT', 'GV06NT'),
('7A1TQT', '7A1', 35, '07TQT', 'GV07TQT'),
('8A1HLK', '8A1', 38, '08HLK', 'GV03HLK'),
('8A1NBK', '8A1', 41, '08NBK', 'GV01NBK'),
('8A1NT', '8A1', 40, '08NT', 'GV05NT'),
('8A1TQT', '8A1', 40, '08TQT', 'GV07TQT'),
('9A1HLK', '9A1', 41, '09HLK', 'GV04HLK'),
('9A1NBK', '9A1', 42, '09NBK', 'GV02NBK'),
('9A1NT', '9A1', 40, '09NT', 'GV06NT'),
('9A1TQT', '9A1', 40, '09TQT', 'GV06NT'),
('9A2LNK', '9A2', 45, '09LNK', 'GV03LNK'),
('9A3LNK', '9A3', 45, '09LNK', 'GV03LNK'),
('9A4LNK', '9A4', 45, '09LNK', 'GV03LNK');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `monhoc`
--

DROP TABLE IF EXISTS `monhoc`;
CREATE TABLE IF NOT EXISTS `monhoc` (
  `MaMH` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenMH` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaGV` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaMH`),
  KEY `MaGV` (`MaGV`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `monhoc`
--

INSERT INTO `monhoc` (`MaMH`, `TenMH`, `MaGV`) VALUES
('A', 'Anh văn', 'GV08TQT'),
('Đ', 'Địa lý', 'GV02NBK'),
('GD', 'GDCD', 'GV02NBK'),
('H', 'Hóa học', 'GV04HLK'),
('L', 'Vật Lý', 'GV05NT'),
('MT', 'Mỹ Thuật', 'GV03HLK'),
('S', 'Lịch sử', 'GV01NBK'),
('SH', 'Sinh học', 'GV01NBK'),
('T', 'Toán', 'GV01NBK'),
('TH', 'Tin học', 'GV06NT'),
('V', 'Ngữ Văn', 'GV01NBK');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien_tp`
--

DROP TABLE IF EXISTS `quantrivien_tp`;
CREATE TABLE IF NOT EXISTS `quantrivien_tp` (
  `MaQTVTP` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenQTV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaQTVTP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng chứa thông tin chi tiết của Quản trị viên cấp TP';

--
-- Đang đổ dữ liệu cho bảng `quantrivien_tp`
--

INSERT INTO `quantrivien_tp` (`MaQTVTP`, `TenQTV`, `NgaySinh`, `Email`) VALUES
('QT001TP', 'Pham Thanh Tri', '1990-04-06', 'thanhtri143@gmail.com'),
('QT002TP', 'Nguyen Yen Mai', '1991-03-21', 'yenmai244@gmail.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien_truong`
--

DROP TABLE IF EXISTS `quantrivien_truong`;
CREATE TABLE IF NOT EXISTS `quantrivien_truong` (
  `MaQTVT` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenQTV` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `NgaySinh` date NOT NULL,
  `Email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `MaQTVTP` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaQTVT`),
  KEY `MaQTVTP` (`MaQTVTP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quantrivien_truong`
--

INSERT INTO `quantrivien_truong` (`MaQTVT`, `TenQTV`, `NgaySinh`, `Email`, `MaQTVTP`) VALUES
('QT128TQT', 'Le Thai Cong', '1993-04-07', 'thaicong1993@gmail.com', 'QT002TP'),
('QT135NBK', 'Pham Quang Thang', '1992-05-29', 'quangthang259@gmail.com', 'QT001TP'),
('QT259HLK', 'Dinh The Nam', '1994-04-15', 'thenam153@gmail.com', 'QT002TP'),
('QT412NT', 'Doan Duy The', '1992-06-19', 'duythedoan19@gmail.com', 'QT001TP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan`
--

DROP TABLE IF EXISTS `taikhoan`;
CREATE TABLE IF NOT EXISTS `taikhoan` (
  `matk` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `quyenhan` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `maqtvtp` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`matk`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bảng chứa thông tin chi tiết của TaiKhoan';

--
-- Đang đổ dữ liệu cho bảng `taikhoan`
--

INSERT INTO `taikhoan` (`matk`, `username`, `password`, `quyenhan`, `maqtvtp`) VALUES
('GV04NBK', 'quangthang.gv', '4adf88e6cf62c50f48ed0f565bbb749e', '03', 'QT002TP'),
('HS03NBK', 'chithanh6a1.hs', 'fc24b78f56f8bb3fe97392b688043938', '04', 'QT002TP'),
('SA01TP', 'thanhtri.ad', 'a0a48bd19da1c1ff458c73da89a12b82', '01', 'QT001TP'),
('SA02TR', 'duythe.subad', '61155218af8161800bf599f6dad158ed', '02', 'QT001TP');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thoigianbieu`
--

DROP TABLE IF EXISTS `thoigianbieu`;
CREATE TABLE IF NOT EXISTS `thoigianbieu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `truonghoc`
--

DROP TABLE IF EXISTS `truonghoc`;
CREATE TABLE IF NOT EXISTS `truonghoc` (
  `MaTruong` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `TenTruong` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `DiaChi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MaQTVTP` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`MaTruong`),
  KEY `MaQTVTP` (`MaQTVTP`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `truonghoc`
--

INSERT INTO `truonghoc` (`MaTruong`, `TenTruong`, `DiaChi`, `MaQTVTP`) VALUES
('01NBK', 'Truong THCS Nguyen Binh Khiem', 'Q.2, TP.HCM', 'QT001TP'),
('02HLK', 'Truong THCS Hoang Le Kha', 'Tan Binh, TP.HCM\r\n', 'QT002TP'),
('03NT', 'Truong THCS Nguyen Trai', 'Binh Thanh, TP.HCM', 'QT001TP'),
('04TQT', 'Truong THCS Tran Quoc Toan', 'Tan Phu, TP.HCM\r\n', 'QT002TP');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `baikiemtra_tl`
--
ALTER TABLE `baikiemtra_tl`
  ADD CONSTRAINT `baikiemtra_tl_ibfk_1` FOREIGN KEY (`MaDe`) REFERENCES `dekiemtra` (`MaDe`),
  ADD CONSTRAINT `baikiemtra_tl_ibfk_2` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`),
  ADD CONSTRAINT `baikiemtra_tl_ibfk_3` FOREIGN KEY (`MaLoaiBaiKT`) REFERENCES `loaibaikiemtra` (`MaLoaiBaiKT`);

--
-- Các ràng buộc cho bảng `baikiemtra_tn`
--
ALTER TABLE `baikiemtra_tn`
  ADD CONSTRAINT `baikiemtra_tn_ibfk_1` FOREIGN KEY (`MaDe`) REFERENCES `dekiemtra` (`MaDe`),
  ADD CONSTRAINT `baikiemtra_tn_ibfk_2` FOREIGN KEY (`MaLoaiBaiKT`) REFERENCES `loaibaikiemtra` (`MaLoaiBaiKT`),
  ADD CONSTRAINT `baikiemtra_tn_ibfk_3` FOREIGN KEY (`MaMH`) REFERENCES `monhoc` (`MaMH`),
  ADD CONSTRAINT `baikiemtra_tn_ibfk_4` FOREIGN KEY (`MaHS`) REFERENCES `hocsinh` (`MaHS`);

--
-- Các ràng buộc cho bảng `cauhoi`
--
ALTER TABLE `cauhoi`
  ADD CONSTRAINT `cauhoi_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giaovien` (`MaGV`),
  ADD CONSTRAINT `cauhoi_ibfk_2` FOREIGN KEY (`MaDe`) REFERENCES `dekiemtra` (`MaDe`);

--
-- Các ràng buộc cho bảng `dekiemtra`
--
ALTER TABLE `dekiemtra`
  ADD CONSTRAINT `dekiemtra_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giaovien` (`MaGV`);

--
-- Các ràng buộc cho bảng `hocsinh`
--
ALTER TABLE `hocsinh`
  ADD CONSTRAINT `hocsinh_ibfk_1` FOREIGN KEY (`MaLop`) REFERENCES `lophoc` (`MaLop`);

--
-- Các ràng buộc cho bảng `khoilop`
--
ALTER TABLE `khoilop`
  ADD CONSTRAINT `khoilop_ibfk_1` FOREIGN KEY (`MaQTVT`) REFERENCES `quantrivien_truong` (`MaQTVT`);

--
-- Các ràng buộc cho bảng `monhoc`
--
ALTER TABLE `monhoc`
  ADD CONSTRAINT `monhoc_ibfk_1` FOREIGN KEY (`MaGV`) REFERENCES `giaovien` (`MaGV`);

--
-- Các ràng buộc cho bảng `quantrivien_truong`
--
ALTER TABLE `quantrivien_truong`
  ADD CONSTRAINT `quantrivien_truong_ibfk_1` FOREIGN KEY (`MaQTVTP`) REFERENCES `quantrivien_tp` (`MaQTVTP`);

--
-- Các ràng buộc cho bảng `truonghoc`
--
ALTER TABLE `truonghoc`
  ADD CONSTRAINT `truonghoc_ibfk_1` FOREIGN KEY (`MaQTVTP`) REFERENCES `quantrivien_tp` (`MaQTVTP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
