-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 29, 2023 lúc 09:07 AM
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
-- Đang đổ dữ liệu cho bảng `chitiet_hd`
--

INSERT INTO `chitiet_hd` (`SP_ID`, `HD_ID`, `SP_SOLUONG`) VALUES
(1, 1, 2),
(2, 1, 1),
(1, 2, 2),
(2, 2, 2),
(4, 3, 1),
(5, 3, 1),
(7, 3, 1);

--
-- Đang đổ dữ liệu cho bảng `chitiet_nhap`
--

INSERT INTO `chitiet_nhap` (`NH_ID`, `SP_ID`, `NV_ID`, `NH_NGAYNHAP`, `SP_SOLUONG`) VALUES
(1, 1, 1, '2023-03-13', 20),
(1, 1, 1, '2023-03-27', 4),
(1, 5, 1, '2023-03-19', 11),
(1, 5, 1, '2023-03-27', 2),
(1, 6, 1, '2023-03-19', 14),
(2, 2, 1, '2023-03-19', 50),
(2, 2, 1, '2023-03-27', 20),
(2, 3, 1, '2023-03-19', 15),
(3, 4, 1, '2023-03-16', 4),
(3, 7, 1, '2023-03-19', 50);

--
-- Đang đổ dữ liệu cho bảng `don_van_chuyen`
--

INSERT INTO `don_van_chuyen` (`DVC_ID`, `NVC_ID`, `DVC_DIACHI`, `DVC_TGBATDAU`, `DVC_TGHOANTHANH`) VALUES
(1, 2, 'A, đường A, huyện A, tỉnh A', '2022-03-16', '2022-05-13'),
(2, 1, 'B, đường B, huyện B, tỉnh B', '2022-03-15', '2022-05-12');

--
-- Đang đổ dữ liệu cho bảng `hoa_don`
--

INSERT INTO `hoa_don` (`HD_ID`, `DVC_ID`, `KM_ID`, `NV_ID`, `PTTT_ID`, `KH_ID`, `TT_ID`, `HD_TONGTIEN`, `HD_NGAYDAT`, `HD_LIDOHUY`) VALUES
(1, 1, NULL, 1, 1, 1, 3, 300000, '2023-03-12', 'Lí do huỷ đơn'),
(2, 2, NULL, 1, 1, 2, 3, 400000, '2023-03-14', 'Lí do huỷ đơn'),
(3, 2, NULL, NULL, 1, 3, 1, 320000, '2023-03-02', 'Lí do huỷ đơn');

--
-- Đang đổ dữ liệu cho bảng `khach_hang`
--

INSERT INTO `khach_hang` (`KH_ID`, `TK_ID`, `KH_HOTEN`, `KH_SDT`, `KH_EMAIL`, `KH_NGAYSINH`, `KH_DIACHI`, `KH_GIOITINH`, `KH_NGAYDK`) VALUES
(1, 8, 'Nguyễn Văn Khách', '0972666533', 'toilakhach@gmail.com', '2001-04-17', 'A123, Đường A, huyện AA, tỉnh AAA', 'm', '2022-03-16'),
(2, 9, 'Trần Thị Khách', '0972636534', 'toicunglakhach@gmail.com', '2001-04-17', 'B123, Đường B, huyện BB, tỉnh BBB', 'm', '2022-03-16'),
(3, 10, 'Quynh Quý Phi', '0891864273', 'quysphi@gmail.com', '1999-12-15', 'Số 10, đường Trần Phú, quận Hoàn Kiếm, Hà Nội', 'f', '2022-09-03'),
(4, 11, 'Trần Hạo Nam', '0823564275', 'haonam9x@gmail.com', '1998-04-25', '27, đường Lý Tự Trọng, quận 1, TP.HCM', 'm', '2022-02-13');

--
-- Đang đổ dữ liệu cho bảng `khuyen_mai`
--

INSERT INTO `khuyen_mai` (`KM_ID`, `KM_TGBATDAU`, `KM_TGKETTHUC`, `KM_GIATRI`) VALUES
(1, '2022-04-01', '2022-05-01', 0.1);

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`LSP_ID`, `LSP_TEN`) VALUES
(1, 'Cá kiểng'),
(2, 'Thức ăn'),
(3, 'Trang trí'),
(4, 'Khác');

--
-- Đang đổ dữ liệu cho bảng `nguon_hang`
--

INSERT INTO `nguon_hang` (`NH_ID`, `NH_TENNGUON`) VALUES
(1, 'Công ty Aqua One'),
(2, 'Công ty Ocean Nutrition'),
(3, 'Công ty Tetra');

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
-- Đang đổ dữ liệu cho bảng `nha_van_chuyen`
--

INSERT INTO `nha_van_chuyen` (`NVC_ID`, `NVC_TEN`) VALUES
(1, 'J&J Express'),
(2, 'Giao hàng tiết kiệm'),
(3, 'Giao hàng nhanh'),
(4, 'EMS Express');

--
-- Đang đổ dữ liệu cho bảng `pt_thanhtoan`
--

INSERT INTO `pt_thanhtoan` (`PTTT_ID`, `PTTT_TEN`) VALUES
(1, 'Tiền mặt'),
(2, 'Chuyển khoản ngân hàng'),
(3, 'Visa/Mastercard');

--
-- Đang đổ dữ liệu cho bảng `san_pham`
--

INSERT INTO `san_pham` (`SP_ID`, `LSP_ID`, `SP_TEN`, `SP_MOTA`, `SP_GIA`, `SP_HINHANH`, `SP_SOLUONG`, `SP_DVT`) VALUES
(1, 1, 'Cá hề', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque feugiat sapien auctor auctor egestas. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Inter', 200000, 'untitled-1-1.jpg', 66, 'Con'),
(2, 2, 'Aquamaster Wheat Gerrm', 'Thức ăn cho cá Koi vào mùa đông\r\nThức ăn cho cá Koi vào mùa đông\r\nThức ăn cho cá Koi vào mùa đông', 100000, '0-Thức ăn mùa đông cho cá Koi Aquamaster Aqua Master Wheat Germ Koi Food.jpg', 35, 'Gói'),
(3, 2, 'Tôm sấy khô cho cá hộp 85g', 'Tôm sấy khô cho cá hộp 85gTôm sấy khô cho cá hộp 85gTôm sấy khô cho cá hộp 85g', 120000, 'ff4dde06ff158a22744a1663aa69c74e.jpg', 38, 'Hộp'),
(4, 3, 'Tượng đá phục sinh', 'Tượng đá phục sinh\r\nTượng đá phục sinh\r\nTượng đá phục sinh, Tượng đá phục sinh', 250000, '27044915_318094348699756_72419214_n.jpg', 6, 'Cái'),
(5, 3, 'Bể cá mini', 'Bể cá mini kích thước 20x20x20cm, có thể đặt trên bàn làm việc', 150000, 'mau-be-ca-de-ban-lam-viec-1.jpg', 6, 'Cái'),
(6, 1, 'Cá chép vàng', 'Cá chép vàng có kích thước từ 5-7cm, phù hợp để nuôi trong bể nhỏ Cá chép vàng có kích thước từ 5-7cm, phù hợp để nuôi trong bể nhỏ', 15000, 'ca-chep-canh-hellothucung-1.jpg', 63, 'Con'),
(7, 3, 'Thảm cỏ hồ cá', 'Thảm cỏ giả kích thước 30x30cm, giúp tạo cảnh quan tự nhiên cho bể', 50000, 'tham-co-nhan-tao-be-ca-chat-luong.jpg', 20, 'm2');

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
(8, 'kh1', 'kh1', 'macdinh.jpg', 'custommer'),
(9, 'kh2', 'khh2', 'team-2.jpg', 'custommer'),
(10, 'kh3', 'kh3', 'team-1.jpg', 'custommer'),
(11, 'kh4', 'kh4', 'macdinh.jpg', 'custommer');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
