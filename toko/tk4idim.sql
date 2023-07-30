-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 30, 2023 at 02:22 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tk4idim`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL,
  `satuan` varchar(20) DEFAULT NULL,
  `id_pengguna` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `keterangan`, `satuan`, `id_pengguna`) VALUES
(1, 'kopi', 'kapal api', 'pack', 1),
(2, 'susu', 'ultramilk', 'pack', 1),
(3, 'air mineral', 'aqua', 'botol', 1),
(4, 'sabun', 'lifeboy', 'pack', 1),
(5, 'beras', 'pandan wangi', 'pack', 1),
(6, 'minyak', 'sunco', 'liter', 1),
(7, 'telur', 'telur7', 'kg', 1),
(8, 'tepung', 'rosebrand', 'pack', 1),
(9, 'sampo', 'clear', 'renteng', 1),
(10, 'roti', 'roti sobek', 'lusin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(11) NOT NULL,
  `nama_customer` varchar(50) DEFAULT NULL,
  `alamat_customer` text DEFAULT NULL,
  `no_hp_customer` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama_customer`, `alamat_customer`, `no_hp_customer`) VALUES
(2, 'toko jaya', 'skdj', '0896763283'),
(3, 'Toko Abadi', 'dkfl', '081234785434');

-- --------------------------------------------------------

--
-- Table structure for table `hak_akses`
--

CREATE TABLE `hak_akses` (
  `id_akses` int(11) NOT NULL,
  `nama_akses` varchar(255) DEFAULT NULL,
  `keterangan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hak_akses`
--

INSERT INTO `hak_akses` (`id_akses`, `nama_akses`, `keterangan`) VALUES
(1, 'admin_utama', 'database administrator'),
(2, 'admin_umum', 'admin'),
(3, 'pengguna', 'pengguna'),
(4, 'pembelian', 'pembeli'),
(5, 'penjualan', 'penjual'),
(6, 'gudang', 'gudang'),
(7, 'pembayaran', 'pembayaran'),
(8, 'pengiriman', 'pengiriman');

-- --------------------------------------------------------

--
-- Table structure for table `pembelian`
--

CREATE TABLE `pembelian` (
  `id_pembelian` int(11) NOT NULL,
  `jumlah_pembelian` int(11) DEFAULT NULL,
  `harga_beli` double DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_supplier` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pembelian`
--

INSERT INTO `pembelian` (`id_pembelian`, `jumlah_pembelian`, `harga_beli`, `id_barang`, `id_supplier`, `created_at`, `updated_at`) VALUES
(15, 20, 5000, 1, 5, '2023-07-28 13:28:31', NULL),
(16, 30, 7000, 2, 5, '2023-07-28 13:29:42', NULL),
(17, 25, 8000, 3, 7, '2023-07-28 13:30:55', NULL),
(18, 15, 4000, 4, 5, '2023-07-28 13:31:46', NULL),
(19, 6, 20000, 5, 5, '2023-07-28 13:32:30', NULL),
(20, 20, 15000, 6, 5, '2023-07-28 13:35:04', NULL),
(21, 20, 70000, 7, 5, '2023-07-28 13:37:36', NULL),
(22, 35, 9000, 8, 5, '2023-07-28 13:38:25', NULL),
(23, 30, 10000, 9, 5, '2023-07-28 13:39:15', NULL),
(24, 20, 11000, 10, 5, '2023-07-28 13:39:36', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `nama_pengguna` varchar(30) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `nama_depan` varchar(50) DEFAULT NULL,
  `nama_belakang` varchar(50) DEFAULT NULL,
  `no_hp` varchar(15) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `id_akses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `nama_pengguna`, `password`, `nama_depan`, `nama_belakang`, `no_hp`, `alamat`, `id_akses`) VALUES
(1, 'didik santoso', 'pass1', 'didik', 'santoso', '081234213212', 'solo', 1),
(2, 'dono indro', 'pass2', 'dono', 'indro', '082344758218', 'solo', 2),
(3, 'yeni inka', 'pass3', 'yeni', 'inka', '081234758381', 'bandung', 3),
(4, 'devi anjasari', 'pass4', 'devi', 'anjasari', '081937478221', 'bandung', 3),
(5, 'rena renita', 'pass5', 'rena', 'renita', '082317483282', 'bandung', 4),
(6, 'bagas adi', 'pass6', 'bagas', 'adi', '082371836472', 'jakarta', 4),
(7, 'surya kencana', 'pass7', 'surya', 'kencana', '089237467281', 'jakarta', 5),
(8, 'reni tri', 'pass8', 'reni', 'tri', '081237468281', 'jakarta', 5);

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE `penjualan` (
  `id_penjualan` int(11) NOT NULL,
  `jumlah_penjualan` int(11) DEFAULT NULL,
  `harga_jual` double DEFAULT NULL,
  `id_barang` int(11) DEFAULT NULL,
  `id_customer` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penjualan`
--

INSERT INTO `penjualan` (`id_penjualan`, `jumlah_penjualan`, `harga_jual`, `id_barang`, `id_customer`, `created_at`, `updated_at`) VALUES
(39, 10, 80000, 1, 2, '2023-07-28 13:28:56', NULL),
(40, 20, 8000, 2, 2, '2023-07-28 13:30:00', NULL),
(41, 20, 11000, 3, 2, '2023-07-28 13:31:17', NULL),
(42, 10, 6000, 4, 2, '2023-07-28 13:32:01', NULL),
(43, 3, 30000, 5, 2, '2023-07-28 13:32:48', NULL),
(44, 10, 30000, 6, 3, '2023-07-28 13:35:29', NULL),
(45, 15, 80000, 7, 2, '2023-07-28 13:37:56', NULL),
(46, 20, 15000, 8, 3, '2023-07-28 13:38:50', NULL),
(47, 15, 20000, 9, 2, '2023-07-28 13:39:55', NULL),
(48, 6, 15000, 10, 2, '2023-07-28 13:40:49', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nama_supplier` varchar(255) DEFAULT NULL,
  `no_hp_supplier` varchar(30) DEFAULT NULL,
  `alamat_supplier` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nama_supplier`, `no_hp_supplier`, `alamat_supplier`) VALUES
(5, 'Supplier 1', '087766367126', 'Tes alamat'),
(7, 'gigi', '08123774385', 'sdf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`) USING BTREE,
  ADD KEY `id_pengguna` (`id_pengguna`) USING BTREE;

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`) USING BTREE;

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`id_akses`) USING BTREE;

--
-- Indexes for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD PRIMARY KEY (`id_pembelian`) USING BTREE,
  ADD KEY `id_barang` (`id_barang`) USING BTREE,
  ADD KEY `id_supplier` (`id_supplier`) USING BTREE;

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`) USING BTREE,
  ADD KEY `IdAkses` (`id_akses`) USING BTREE;

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`id_penjualan`) USING BTREE,
  ADD KEY `id_barang` (`id_barang`) USING BTREE,
  ADD KEY `id_pelanggan` (`id_customer`) USING BTREE;

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `id_akses` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembelian`
--
ALTER TABLE `pembelian`
  MODIFY `id_pembelian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `barang_ibfk_1` FOREIGN KEY (`id_pengguna`) REFERENCES `pengguna` (`id_pengguna`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pembelian`
--
ALTER TABLE `pembelian`
  ADD CONSTRAINT `pembelian_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `pembelian_ibfk_2` FOREIGN KEY (`id_supplier`) REFERENCES `supplier` (`id_supplier`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD CONSTRAINT `pengguna_ibfk_1` FOREIGN KEY (`id_akses`) REFERENCES `hak_akses` (`id_akses`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD CONSTRAINT `penjualan_ibfk_1` FOREIGN KEY (`id_barang`) REFERENCES `barang` (`id_barang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `penjualan_ibfk_2` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
