-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 09:12 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sayangmamah`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `roles` varchar(50) NOT NULL DEFAULT 'superadmin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `email`, `password`, `roles`) VALUES
(1, 'Admin', 'admin@admin', '12345678', 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_com` varchar(150) NOT NULL,
  `jenis_devices` enum('handphone','laptop','pc','printer') NOT NULL,
  `harga_com` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(150) NOT NULL,
  `roles` varchar(50) NOT NULL DEFAULT 'company'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `nama_com`, `jenis_devices`, `harga_com`, `email`, `alamat`, `password`, `roles`) VALUES
(1, 'PT Restu Sehat Selalu', 'handphone', '15000', 'restu@restu', 'Jl. Pasteur No 1 Kota Bandung', '12345678', 'company'),
(2, 'PT Tatanan Dunia Baru', 'laptop', '100005', 'company@company', 'Jl. Bersama Rakyat 12 Kota Bandung', '12345678', 'company'),
(3, 'PT Faris Bersama Warga Baleendah', 'laptop', '20000', 'faris@faris', 'Jl. Pasti Selalu Bisa No 32 Kota Bogor', '12345678', 'company'),
(6, 'PT Ashiaap Indonesia', 'printer', '12000', 'ashiap@ashiap', 'Jl. Yonex no 111 Kota Jakarta', '12345678', 'company'),
(7, 'CS Service Center', 'laptop', '200000', 'mencari@mencari', 'Jl. Kembang Melati No 33 Kota Jakarta', '123456789', 'company'),
(8, 'PT Masyarakat Komputer', 'printer', '150000', 'faris@company', 'JL. lintang Selatan no 88 Kota Bekasi', '12345678', 'company'),
(11, 'PT Komputer sejati', 'pc', '150000', 'bandung@bandung', 'Jl. Ligar Dalam No 44 Kota Bandung', '12345678', 'company'),
(12, 'PT Fafifu Center', 'handphone', '200000', 'fafifu@fafifu', 'Jl. Kereta Dalam no 55 Kota Jakarta', '12345678', 'company'),
(13, 'Service Printer Center', 'printer', '200000', 'sejati@sejati', 'jl. Sukaluyu no 56B Kota Bekasi', '12345678', 'company'),
(15, 'PT Tebak Service', 'pc', '150000', 'tebak@tebak', 'JL. Lebak Dalam no 89 Kota Jakarta', '12345678', 'company');

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_kurir` varchar(100) NOT NULL,
  `harga_kurir` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `nama_kurir`, `harga_kurir`) VALUES
(1, 'JNE', '20000'),
(2, 'SICEPAT', '11000'),
(3, 'NINJA', '15000');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(5) UNSIGNED NOT NULL,
  `nama_cus` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telp` varchar(120) NOT NULL,
  `alamat` text NOT NULL,
  `password` varchar(150) NOT NULL,
  `roles` varchar(50) NOT NULL DEFAULT 'customer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `nama_cus`, `email`, `telp`, `alamat`, `password`, `roles`) VALUES
(1, 'Muhammad Nabil Wafi', 'user@user', '12345678899', 'Jl. kemana aja 2', '12345678', 'customer'),
(2, 'Faris Fadhillah Jatnika Duar Uwaw', 'faris@faris.com', '0812938', 'Jl. Baleendah hayu main yuk', '12345678', 'customer'),
(3, 'disini kami', 'disini@disini', '12345678899', 'jl.dawdawdaw', '12345678', 'customer');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(23, '2022-08-01-170657', 'App\\Database\\Migrations\\Customer', 'default', 'App', 1659413758, 1),
(24, '2022-08-01-170712', 'App\\Database\\Migrations\\Company', 'default', 'App', 1659413758, 1),
(25, '2022-08-01-170719', 'App\\Database\\Migrations\\Courier', 'default', 'App', 1659413758, 1),
(26, '2022-08-01-170732', 'App\\Database\\Migrations\\Admin', 'default', 'App', 1659413758, 1),
(27, '2022-08-01-170703', 'App\\Database\\Migrations\\Transaksi', 'default', 'App', 1659413762, 2),
(28, '2022-08-02-134359', 'App\\Database\\Migrations\\UpdateTransactions', 'default', 'App', 1659448987, 3),
(29, '2022-08-02-134425', 'App\\Database\\Migrations\\Orders', 'default', 'App', 1659449029, 4),
(30, '2022-08-02-140439', 'App\\Database\\Migrations\\DeleteTableOrders', 'default', 'App', 1659449089, 5),
(31, '2022-08-02-143735', 'App\\Database\\Migrations\\DropTableTransactions', 'default', 'App', 1659451484, 6),
(32, '2022-08-02-143813', 'App\\Database\\Migrations\\ChangeOrderTableToTransactions', 'default', 'App', 1659451484, 6);

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_customer` int(5) UNSIGNED NOT NULL,
  `id_company` int(5) UNSIGNED NOT NULL,
  `id_courier` int(5) UNSIGNED NOT NULL,
  `nama_device` varchar(150) NOT NULL,
  `keluhan` text NOT NULL,
  `ppn` varchar(10) DEFAULT NULL,
  `total_harga` varchar(50) DEFAULT NULL,
  `bukti_pembayaran` varchar(50) DEFAULT NULL,
  `status_transaksi` enum('belum bayar','menunggu verifikasi','pembayaran diterima','device dalam proses','device selesai diperbaiki','transaksi selesai') DEFAULT 'belum bayar',
  `created_at` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `id_customer`, `id_company`, `id_courier`, `nama_device`, `keluhan`, `ppn`, `total_harga`, `bukti_pembayaran`, `status_transaksi`, `created_at`) VALUES
(4, 1, 3, 1, 'HP 150 PX', 'rusak layar', '20%', '48000', NULL, 'belum bayar', '2022-08-03 12:54:18'),
(8, 1, 2, 3, 'hp', 'layar pecah', '20%', '250000', '1659813351_a39f899cc8cfb65c6cc4.png', 'transaksi selesai', '2022-08-04 12:53:11'),
(9, 1, 3, 2, 'Asus RAG 456', 'Rusak Layar', '20%', '37200', NULL, 'belum bayar', '2022-08-06 12:45:57'),
(10, 2, 6, 1, 'EPSON Kerja Rodi', 'Printer duar ', '20%', '38400', NULL, 'belum bayar', '2022-08-08 00:49:59'),
(11, 3, 13, 3, 'printer bawah meja', 'meledak', '20%', '258000', '1660362264_e55bcec1347815bc8db6.png', 'transaksi selesai', '2022-08-13 10:43:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_id_customer_foreign` (`id_customer`),
  ADD KEY `transactions_id_company_foreign` (`id_company`),
  ADD KEY `transactions_id_courier_foreign` (`id_courier`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_id_company_foreign` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_id_courier_foreign` FOREIGN KEY (`id_courier`) REFERENCES `couriers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `transactions_id_customer_foreign` FOREIGN KEY (`id_customer`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
