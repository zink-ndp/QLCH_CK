-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 16, 2023 lúc 03:53 AM
-- Phiên bản máy phục vụ: 10.4.27-MariaDB
-- Phiên bản PHP: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_db`
--


--
-- Đang đổ dữ liệu cho bảng `tai_khoan`
--

INSERT INTO `tai_khoan` (`TK_ID`, `TK_TENDANGNHAP`, `TK_MATKHAU`, `TK_AVATAR`, `TK_VAITRO`) VALUES
(1, 'ad', 'ad', 'avatar.jpg', 'admin'),
(2, 'nv1', 'nv1', 'bruce-mars.jpg', 'staff'),
(3, 'nv2', 'nv2', 'team-4.jpg', 'admin'),
(4, 'ad3', 'ad3', 'team-4.jpg', 'admin'),
(5, 'nv3', 'nv3', 'kal-visuals-square.jpg', 'staff'),
(6, 'ad1', 'ad1', 'marie.jpg', 'admin'),
(7, 'nv9', 'nv9', 'team-2.jpg', 'staff'),
(8, 'kh1', 'kh1', 'default.jpg', 'custommer');

--
-- Đang đổ dữ liệu cho bảng `nhan_vien`
--

INSERT INTO `nhan_vien` (`NV_ID`, `TK_ID`, `NV_HOTEN`, `NV_SDT`, `NV_EMAIL`, `NV_NGAYSINH`, `NV_GIOITINH`, `NV_NGAYTUYEN`) VALUES
(1, 1, 'Nguyễn Đỗ Phúc Vinh', '0377899959', 'admin@gmail.com', '2002-11-01', 'm', '2020-11-14'),
(2, 2, 'Nguyễn Tuấn Hoàng', '0976768965', 'nthoang@gmail.com', '1999-10-13', 'm', '2019-10-03'),
(3, 4, 'Trần Văn Sơn', '0377811142', 'son.son95@gmail.com', '1995-10-13', 'm', '2018-09-02'),
(4, 5, 'Lê Trúc Yên', '0978623123', 'yyen@gmail.com', '1996-11-09', 'f', '2020-11-14'),
(5, 6, 'Trần Thị Lan', '0379816362', 'tranlan97@gmail.com', '1998-03-14', 'm', '2023-03-13'),
(6, 7, 'Lê Văn Lai', '0379816362', 'lailv@gmail.com', '1987-04-14', 'm', '2023-03-16');


--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`KH_ID`, `TK_ID`, `KH_HOTEN`, `KH_SDT`, `KH_EMAIL`, `KH_NGAYSINH`, `KH_DIACHI`, `KH_GIOITINH`) VALUES
(1, 8, 'Nguyễn Văn Khách', '0972666533', 'toilakhach@gmail.com', '2001-04-17', 'A123, Đường A, huyện AA, tỉnh AAA', 'm');



--
-- Đang đổ dữ liệu cho bảng `nguon_hang`
--

INSERT INTO `nguon_hang` (`NH_ID`, `NH_TENNGUON`) VALUES
(1, 'Công ty A'),
(2, 'Công ty B'),
(3, 'Công ty C');



--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`LSP_ID`, `LSP_TEN`) VALUES
(1, 'Cá kiểng'),
(2, 'Thức ăn'),
(3, 'Trang trí'),
(4, 'Khác');


--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`SP_ID`, `LSP_ID`, `SP_TEN`, `SP_MOTA`, `SP_GIA`, `SP_HINHANH`) VALUES
(4, 1, 'Cá hề', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque feugiat sapien auctor auctor egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Inter', 200000, 'untitled-1-1.jpg'),
(5, 2, 'Aquamaster Wheat Gerrm', 'Thức ăn cho cá Koi vào mùa đông\r\nThức ăn cho cá Koi vào mùa đông\r\nThức ăn cho cá Koi vào mùa đông', 100000, '0-Thức ăn mùa đông cho cá Koi Aquamaster Aqua Master Wheat Germ Koi Food.jpg'),
(6, 2, 'Tôm sấy khô cho cá hộp 85g', 'Tôm sấy khô cho cá hộp 85gTôm sấy khô cho cá hộp 85gTôm sấy khô cho cá hộp 85g', 120000, 'ff4dde06ff158a22744a1663aa69c74e.jpg'),
(7, 3, 'Tượng đá phục sinh', 'Tượng đá phục sinh\r\nTượng đá phục sinh\r\nTượng đá phục sinh, Tượng đá phục sinh', 250000, '27044915_318094348699756_72419214_n.jpg');


--
-- Đang đổ dữ liệu cho bảng `chitiet_kho`
--

INSERT INTO `chitiet_kho` (`SP_ID`, `K_ID`, `SP_SOLUONG`) VALUES
(4, 1, '50'),
(5, 2, '20'),
(6, 3, '15'),
(7, 3, '4');


--
-- Đang đổ dữ liệu cho bảng `kho`
--

INSERT INTO `kho` (`K_ID`, `K_DIACHI`) VALUES
(1, 'Cần Thơ'),
(2, 'Hà Nội'),
(3, 'An Giang'),
(4, 'Sóc Trăng');


--
-- Đang đổ dữ liệu cho bảng `chitiet_nhap`
--

INSERT INTO `chitiet_nhap` (`NH_ID`, `SP_ID`, `NV_ID`, `NH_NGAYNHAP`, `SP_SOLUONG`, `SP_DVT`) VALUES
(1, 5, 1, '2023-03-13', '20', 'Kg'),
(2, 4, 1, '2023-03-13', '50', 'Con'),
(2, 6, 1, '2023-03-13', '15', 'Cái'),
(3, 7, 1, '2023-03-16', '4', 'Cái');



--
-- Đang đổ dữ liệu cho bảng `pt_thanhtoan`
--

INSERT INTO `pt_thanhtoan` (`PTTT_ID`, `PTTT_TEN`) VALUES
(1, 'Tiền mặt'),
(2, 'Chuyển khoản ngân hàng'),
(3, 'Visa/Mastercard');



COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
