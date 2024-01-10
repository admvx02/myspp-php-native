-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 26, 2023 at 01:02 PM
-- Server version: 5.7.43
-- PHP Version: 8.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myspp-native`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(300) NOT NULL,
  `replies` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'apa itu myspp', 'Aplikasi sederhana berbasis web yang dirancang untuk memudahkan proses pembayaran SPP oleh siswa atau orang tua/wali siswa kepada sekolah atau lembaga pendidikan..'),
(2, 'Hello', 'Ya, Ada yang bisa admin bantu?'),
(3, 'Ini aplikasi apa', 'Ini adalah aplikasi MySPP yang berbasis web berfokus pada pembayaran SPP'),
(4, 'Hai', 'Hai juga, ada yang bisa   admin bantu?'),
(5, 'Myspp Fitur nya apa', 'Ada beberapa fitur di aplikasi myspp yaitu pembayaran spp secara otomatis, pengolahan data siswa dan  juga Laporan keuangan pasti nya'),
(6, 'Siapa pencipta mu atau pembuat mu', 'Myspp kembangkan oleh seorang Manusia'),
(8, 'siapa kamu', 'Aku adalah Aplikasi Web sederhana MYSPP'),
(9, 'siapa pembuat mu', 'aku di buat dan di rancang oleh manusia '),
(10, 'Bahasa Pemrograman', 'PHP dan Framework CSS Bootstrap\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE `kelas` (
  `id_kelas` int(11) NOT NULL,
  `nama_kelas` varchar(10) NOT NULL,
  `kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`, `kategori`) VALUES
(9, '1', 'A'),
(11, '2', 'A');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `nisn` varchar(11) NOT NULL,
  `order_id` text,
  `tgl_bayar` date NOT NULL,
  `bulan_dibayar` varchar(8) NOT NULL,
  `tahun_dibayar` varchar(4) NOT NULL,
  `id_spp` int(11) NOT NULL,
  `jumlah_bayar` int(11) NOT NULL,
  `status_pembayaran` tinyint(1) NOT NULL DEFAULT '0',
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_petugas`, `nisn`, `order_id`, `tgl_bayar`, `bulan_dibayar`, `tahun_dibayar`, `id_spp`, `jumlah_bayar`, `status_pembayaran`, `email`) VALUES
(5, 1, '12345678', '', '2023-10-11', 'Oktober', '2023', 6, 100000, 1, ''),
(8, 1, '234567', '', '2023-11-16', 'November', '2023', 6, 100000, 1, ''),
(10, 1, '12', '', '2023-11-16', 'November', '2023', 6, 100000, 1, ''),
(11, 1, '0987654', '', '2023-11-25', 'November', '2023', 6, 100000, 1, ''),
(12, 1, '12', '', '2023-11-24', 'Mei', '2023', 6, 100000, 1, ''),
(13, 1, '234567', '1212122', '2023-11-24', 'Januari', '2024', 6, 100000, 0, 'adam@gmail.com'),
(23, 1, '234567', '2076279343', '2023-11-25', 'April', '2022', 6, 100000, 1, 'adam@gmail.com'),
(24, 1, '9988811', '1963888982', '2023-11-24', 'Februari', '2021', 6, 100000, 1, 'adam@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `nama_petugas` varchar(225) NOT NULL,
  `level` enum('admin','petugas','siswa') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(1, 'adam', '123', 'adam', 'admin'),
(13, '1234', '1234', 'wahyu', 'siswa'),
(14, 'wahyu', '123', 'wahyu', 'petugas');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(11) NOT NULL,
  `nis` varchar(11) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `alamat` text NOT NULL,
  `id_spp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nis`, `nama`, `id_kelas`, `alamat`, `id_spp`) VALUES
('0987654', '0987654', 'adam', 9, 'graha kota', 6),
('12', '11', 'adam', 9, 'graha kota', 6),
('12345678', '12345678', 'Adam', 11, 'Sedati', 6),
('234567', '1234567', 'adam', 11, 'Sidoarjo', 6),
('9988811', '11223', 'Mail Bin Ismail', 9, 'Kampung Durian Runtuh', 6);

-- --------------------------------------------------------

--
-- Table structure for table `spp`
--

CREATE TABLE `spp` (
  `id_spp` int(11) NOT NULL,
  `tahun` int(11) NOT NULL,
  `nominal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `spp`
--

INSERT INTO `spp` (`id_spp`, `tahun`, `nominal`) VALUES
(6, 2023, 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nisn` (`nisn`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_spp` (`id_spp`);

--
-- Indexes for table `spp`
--
ALTER TABLE `spp`
  ADD PRIMARY KEY (`id_spp`),
  ADD UNIQUE KEY `nominal` (`nominal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `pembayaran`
--
ALTER TABLE `pembayaran`
  MODIFY `id_pembayaran` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `spp`
--
ALTER TABLE `spp`
  MODIFY `id_spp` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD CONSTRAINT `pembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`),
  ADD CONSTRAINT `pembayaran_ibfk_2` FOREIGN KEY (`nisn`) REFERENCES `siswa` (`nisn`),
  ADD CONSTRAINT `pembayaran_ibfk_3` FOREIGN KEY (`id_spp`) REFERENCES `siswa` (`id_spp`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`),
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_spp`) REFERENCES `spp` (`id_spp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
