-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 01:12 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pengadaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `token` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `nama`, `email`, `alamat`, `password`, `status`, `token`, `created_at`, `updated_at`) VALUES
(1, 'Maulana', 'admin@gmail.com', 'Alamat Admin', 'eyJpdiI6IndVR3RvbHk0ZzJjbVl5WENEY2JJbHc9PSIsInZhbHVlIjoiQ3pwUHkzOFgxNlZpUkNRXC9hek05bWc9PSIsIm1hYyI6IjM5NTFjOGY4MDhjNTIxMTNhZWZlMGU3Y2IyNzVhNjQxYzBiMWQ3YzU1MDA1YmE4MTk2MmQ1Y2RmYWFkMmVkMTAifQ==', 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF9hZG1pbiI6MX0._Qnky-cB1lvffVdnCOd8wHlwS7NQWFs-Tu1v3jplu_g', '2021-08-01 20:44:01', '2021-08-18 19:24:38'),
(2, 'Nursan', 'admin2@gmail.com', 'Subang', 'eyJpdiI6IktrNzF2ODlPQUx3cGRuNDgxQXM0ZFE9PSIsInZhbHVlIjoiNVhTb2VEdXRtRGJaR1g4ZmFqOUF6Zz09IiwibWFjIjoiYmZmODJjNzdkN2U1ODJlYWEzNzQ1NTI2OTY3MGExYjg1N2FhZTAwODM4YzA2ZjExNzk2MDY0NzMxZTU4YWQ4OSJ9', 1, 'eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZF9hZG1pbiI6Mn0.mGSdA92OJj0utNSPKhRomzUcQaJ20VYpcEi4r7vKLhs', '2021-08-04 02:02:01', '2021-08-17 21:08:46'),
(11, 'Alfarizi', 'admin3@gmail.com', 'Alamat Admin 3', 'eyJpdiI6IkFcL2Z5akh0QUlHamozb2tFN2pwc1N3PT0iLCJ2YWx1ZSI6Im05c2NDYmxvK1B3OWZMYTA0OUJGb2c9PSIsIm1hYyI6ImY4N2Q0MTIyNDYyN2ZkMmM3YmM4ODhiZTEyY2E5ZTBkYTJiOGY0NWI2MjYzZTE3MWE5MDc4YzZjNjI4MzU0YzQifQ==', 1, 'kosong', '2021-08-04 02:56:51', '2021-08-17 21:08:25');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_laporan`
--

CREATE TABLE `tbl_laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_pengajuan` int(11) NOT NULL,
  `id_suplier` int(11) NOT NULL,
  `laporan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_laporan`
--

INSERT INTO `tbl_laporan` (`id_laporan`, `id_pengajuan`, `id_suplier`, `laporan`, `created_at`, `updated_at`) VALUES
(2, 2, 6, 'public/laporan/tBLewxK2lPY7DawdZ1qxbczlGxEeH6VN64WCD7Kb.pdf', '2021-08-11 22:46:53', '2021-08-11 22:46:53'),
(3, 1, 6, 'public/laporan/hlkC2JYFMfy2YFyNyBqqxnzLQH9AfRYIEl1U875K.pdf', '2021-08-17 02:22:44', '2021-08-17 02:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengadaan`
--

CREATE TABLE `tbl_pengadaan` (
  `id_pengadaan` int(11) NOT NULL,
  `nama_pengadaan` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` text NOT NULL,
  `anggaran` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengadaan`
--

INSERT INTO `tbl_pengadaan` (`id_pengadaan`, `nama_pengadaan`, `deskripsi`, `gambar`, `anggaran`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Meja Kayu', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/Nasrq6jHNkfCMIVeYFmZOQd6zW37bS1sEsiRrP7O.png', 25000000, 1, '2021-08-04 23:11:58', '2021-08-17 01:31:33'),
(2, 'Kursi Kayu', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/qG7VgKqKsrlK8tlhr1FJhknWGZcTEHZoLAuoEHfB.png', 15000000, 1, '2021-08-04 23:13:46', '2021-08-17 01:04:04'),
(4, 'Mobil', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/x9QWKznKQSh5tsDCPKQtitvDNA6v5TaihouEGKaE.png', 375000000, 1, '2021-08-08 22:04:30', '2021-08-17 01:04:10'),
(5, 'Motor', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/wRuoYcoIS00T7h22E2E1NcS26Uk4x1N2rFS6V4Lk.png', 25000000, 1, '2021-08-04 23:11:58', '2021-08-17 01:04:18'),
(6, 'Laptop', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/CYYPBQGxLOVWYCnfZDgyiu6EFN4TmjF4QbgvgF9K.png', 15000000, 1, '2021-08-04 23:13:46', '2021-08-17 01:04:49'),
(7, 'PC Komputer', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/HZ3gF5vjn4seXtCFifWemCAZIoeA8OCVhEkP6sZu.png', 17500000, 1, '2021-08-08 22:04:30', '2021-08-17 01:17:36'),
(8, 'Projector', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/rkj52u0LVej4Wm7fxxiYBUAGvu8VsJIJ28L2diP1.png', 5000000, 1, '2021-08-04 23:11:58', '2021-08-17 01:17:43'),
(9, 'Sound Sistem', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/Otr3gnIe5e3yQ4C3kEdNFpViBiPParmQX9YYRCM9.png', 15000000, 1, '2021-08-04 23:13:46', '2021-08-17 01:35:15'),
(10, 'Telephone', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/NCTNOBTPoATu6HNvHsPLU5wVrg1rVjwyPJ0wh14x.png', 7500000, 1, '2021-08-08 22:04:30', '2021-08-17 01:07:06'),
(11, 'Kulkas', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/LpcJDg6xITKCHtBpZVfqF9zFXOzGBpp7TbwhK1Vl.png', 25000000, 1, '2021-08-04 23:11:58', '2021-08-17 01:07:51'),
(12, 'Lemari', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/ZXAge7GxeHLEOxmkyTOheD4gSo3fSp0ipMluYFG3.png', 15000000, 1, '2021-08-04 23:13:46', '2021-08-17 01:40:50'),
(13, 'Pelampung', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/Dsgw3kq0r4ACjLNLDdk9xbZ3LntADZKAHfv7wLpX.png', 7500000, 1, '2021-08-08 22:04:30', '2021-08-17 01:09:15'),
(14, 'Perahu', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/f1oVEOSREnTi8P2qgtRIw5Y6ySZoHXrWRqSZv6x3.png', 125000000, 1, '2021-08-04 23:11:58', '2021-08-17 01:17:59'),
(15, 'Baju Seragam', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/CH5gx41aONJldwoFrafRkeyAaoKFoMQlGKKTyyHS.png', 15000000, 1, '2021-08-04 23:13:46', '2021-08-17 01:11:29'),
(16, 'Printer', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/WB3fwS0pBfjZ6RCHyM4DPXqbyKJPfikfScuf6uhq.png', 7500000, 1, '2021-08-08 22:04:30', '2021-08-17 01:12:00'),
(17, 'Akua', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/OAwZ7MtydWtnIV8An9w56mgK40nNccy9INGi9o9b.png', 5000000, 1, '2021-08-04 23:11:58', '2021-08-17 01:18:12'),
(18, 'TV LCD', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/GcBFVviRgxBBFW1uaNAv2vHd15XCjP0TPaeHGFpB.png', 15000000, 1, '2021-08-04 23:13:46', '2021-08-17 01:14:11'),
(19, 'Hand Sanitizer', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/WG6UveKF8luw7aSaym8iYclunkbm6ganlaSTjN1g.png', 7500000, 1, '2021-08-08 22:04:30', '2021-08-17 01:14:56'),
(20, 'Masker', 'https://jdih.bsn.go.id/public_assets/file/ee9870807228bfbe394a0d274d076fef.pdf', 'public/gambar/9XNGss1ThoQBy0tJieNC1d5thSJ9rWbBgimPRLgd.png', 25000000, 1, '2021-08-04 23:11:58', '2021-08-17 01:16:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengajuan`
--

CREATE TABLE `tbl_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `id_suplier` int(11) NOT NULL,
  `id_pengadaan` float NOT NULL,
  `anggaran` int(11) NOT NULL,
  `proposal` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pengajuan`
--

INSERT INTO `tbl_pengajuan` (`id_pengajuan`, `id_suplier`, `id_pengadaan`, `anggaran`, `proposal`, `status`, `created_at`, `updated_at`) VALUES
(1, 6, 1, 25000000, 'public/proposal/QmEV9MFFJtVMBc7rqPuVViOuGlC5VkSP3uC08OBa.pdf', 2, '2021-08-09 02:27:33', '2021-08-11 23:00:41'),
(2, 6, 2, 15000000, 'public/proposal/3dmEWdhcz102UN4q6cWHc1XWP6NVdH6sQoW4yCTW.pdf', 3, '2021-08-10 17:44:47', '2021-08-11 22:49:05'),
(3, 6, 4, 375000000, 'public/proposal/hHEE3ttEoA1652zH0K4varz0b18QbJreTdYAr69M.pdf', 2, '2021-08-17 02:21:14', '2021-08-17 02:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_suplier`
--

CREATE TABLE `tbl_suplier` (
  `id_suplier` int(11) NOT NULL,
  `nama_usaha` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `no_npwp` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `token` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_suplier`
--

INSERT INTO `tbl_suplier` (`id_suplier`, `nama_usaha`, `email`, `alamat`, `no_npwp`, `password`, `status`, `token`, `created_at`, `updated_at`) VALUES
(6, 'CV. Sehat Bahagia', 'sehat@gmail.com', 'Alamat Test Karawang', '001.001.001.001.000', 'eyJpdiI6InBGUHpCMThzNElRWGhhaTBlZlBPRmc9PSIsInZhbHVlIjoiT2tiNlpORnk1OFdHdjNQXC8wTnhGekE9PSIsIm1hYyI6IjU5YWQxMDIwYWMzYTM2YTAxYzYxNjNiNGEzYjg4MzFlZTY2ZmRiMDRiYzIwMDhiNjM0YjlhN2U5NGZmY2MyOWYifQ==', 0, 'kosong', '2021-08-18 23:52:02', '2021-08-18 16:52:02'),
(8, 'PT. Senyum Sajalah', 'senyum@gmail.com', 'Jl. Purwadana Karawang', '34.434.3434.676.000', 'eyJpdiI6InJVRzNPUDNyQmx5NVgxTUVmOEU0U0E9PSIsInZhbHVlIjoiNkplNkRqY1Eza0JzQWNZXC9BYlo5YkE9PSIsIm1hYyI6IjBhYjMxM2Q0YzQyMzYzZTMyMmEwYWM4MzNiYTI4NThlZmRlMzlkNzYzOTU2M2JiMDg4ZTBhYzA4ZjM5YzFiODEifQ==', 1, 'kosong', '2021-08-18 07:01:33', '2021-08-18 00:01:33'),
(9, 'PT. Karya Anak Bangsa', 'karya@gmail.com', 'Jl. Gatot Subroto Jakarta', '23.456.45.66.000', 'eyJpdiI6IkhwdE93dGFtRTVLTnlYM3hcL012M1ZRPT0iLCJ2YWx1ZSI6IktHaHBMY21hNUVZajZLSDZFMytpeEE9PSIsIm1hYyI6ImI5ZjMzNmU1NzVmZDAzZmVmNTc3ZjgzY2FjZTQxNDc5NTA1MjFjYmE0YTVlNDI2MTZjZGQwY2YxNzE4Nzg4ZmQifQ==', 1, 'kosong', '2021-08-18 08:16:54', '2021-08-18 01:16:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  ADD PRIMARY KEY (`id_laporan`);

--
-- Indexes for table `tbl_pengadaan`
--
ALTER TABLE `tbl_pengadaan`
  ADD PRIMARY KEY (`id_pengadaan`);

--
-- Indexes for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  ADD PRIMARY KEY (`id_suplier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_laporan`
--
ALTER TABLE `tbl_laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pengadaan`
--
ALTER TABLE `tbl_pengadaan`
  MODIFY `id_pengadaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_pengajuan`
--
ALTER TABLE `tbl_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_suplier`
--
ALTER TABLE `tbl_suplier`
  MODIFY `id_suplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
