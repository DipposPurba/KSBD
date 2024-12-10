-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2024 at 03:03 PM
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
-- Database: `kuliah`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `NIDN` varchar(20) NOT NULL,
  `Nama` varchar(45) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `NoHP` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `krs`
--

CREATE TABLE `krs` (
  `npm` varchar(20) NOT NULL,
  `kode_mk` varchar(15) NOT NULL,
  `tahun_ajaran` varchar(15) NOT NULL,
  `semester` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `krsnil`
--

CREATE TABLE `krsnil` (
  `tahun_ajaran` varchar(15) NOT NULL,
  `semester` varchar(25) NOT NULL,
  `npm` varchar(20) NOT NULL,
  `kode_mk` int(15) NOT NULL,
  `nsikap` varchar(5) NOT NULL,
  `ntugas` varchar(5) NOT NULL,
  `nuts` varchar(5) NOT NULL,
  `nuas` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `krsnil`
--

INSERT INTO `krsnil` (`tahun_ajaran`, `semester`, `npm`, `kode_mk`, `nsikap`, `ntugas`, `nuts`, `nuas`) VALUES
('2024/2025', 'Ganjil', '220840077', 1, '90', '40', '85', '98'),
('2024/2025', 'Ganjil', '220840077', 2, '80', '65', '88', '70'),
('2024/2025', 'Ganjil', '220840079', 3, '80', '75', '87', '79'),
('2024/2025', 'Ganjil', '220840080', 5, '70', '80', '90', '87'),
('2024/2025', 'Ganjil', '220840080', 14, '76', '87', '78', '90'),
('2024/2025', 'Ganjil', '220840082', 7, '50', '78', '87', '77'),
('2024/2025', 'Ganjil', '220840093', 9, '77', '78', '89', '69'),
('2024/2025', 'Ganjil', '220840095', 11, '55', '87', '76', '87'),
('2024/2025', 'Ganjil', '220840096', 13, '87', '80', '80', '80'),
('2024/2025', 'Ganjil', '220840099', 15, '80', '78', '97', '59'),
('2024/2025', 'Ganjil', '220840100', 2, '50', '66', '78', '89'),
('2024/2025', 'Ganjil', '220840102', 3, '78', '68', '78', '98'),
('2024/2025', 'Ganjil', '220840109', 5, '78', '78', '87', '87'),
('2024/2025', 'Ganjil', '220840114', 7, '89', '87', '76', '56'),
('2024/2025', 'Ganjil', '220840126', 9, '88', '76', '67', '85'),
('2024/2025', 'Ganjil', '228400106', 10, '57', '89', '54', '78'),
('2024/2025', 'Genap', '220840079', 4, '86', '79', '67', '89'),
('2024/2025', 'Genap', '220840080', 6, '67', '89', '56', '56'),
('2024/2025', 'Genap', '220840080', 15, '68', '89', '46', '98'),
('2024/2025', 'Genap', '220840082', 8, '76', '87', '56', '89'),
('2024/2025', 'Genap', '220840093', 10, '86', '75', '76', '78'),
('2024/2025', 'Genap', '220840095', 12, '76', '79', '79', '90'),
('2024/2025', 'Genap', '220840096', 14, '79', '89', '78', '67'),
('2024/2025', 'Genap', '220840099', 1, '87', '67', '56', '87'),
('2024/2025', 'Genap', '220840100', 3, '78', '56', '87', '95'),
('2024/2025', 'Genap', '220840102', 4, '56', '67', '45', '78'),
('2024/2025', 'Genap', '220840109', 6, '75', '56', '57', '99'),
('2024/2025', 'Genap', '220840114', 8, '65', '76', '87', '56'),
('2024/2025', 'Genap', '220840126', 10, '78', '56', '89', '66'),
('2024/2025', 'Genap', '228400106', 11, '65', '57', '87', '55');

-- --------------------------------------------------------

--
-- Table structure for table `tblmahasiswa`
--

CREATE TABLE `tblmahasiswa` (
  `npm` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `tempat_lahir` varchar(15) NOT NULL,
  `tanggal_lahir` varchar(20) NOT NULL,
  `asal_sma` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmahasiswa`
--

INSERT INTO `tblmahasiswa` (`npm`, `nama`, `alamat`, `tempat_lahir`, `tanggal_lahir`, `asal_sma`) VALUES
('220840077', 'Purba Lamdippos H P', 'Helvetia', 'Bekasi', '01-09-2004', 'SMA 1 PAGARAN'),
('220840079', 'Vinela Sitepu', 'Setiabudi', 'Kaban Jahe', '16-12-2003', 'SMA KABAN JAHE'),
('220840080', 'Michael W Sembiring', 'Gang Rahmat', 'Siantar', '08-11-2004', 'SMA 2 SIANTAR'),
('220840082', 'Peronica U Nainggolan', 'Tanjung Sari ', 'Tebing Tinggi', '19-06-2004', 'SMA 1 DOLOK MASIHUL'),
('220840093', 'Roy I Siahaan', 'Warnet Imka Tj Sari', 'Sibolga', '08-10-2003', 'SMAS 1 SIBOLGA'),
('220840094', 'Ronald Carda Pinem', 'Simalingkar  B', ' Medan', '30-02-2003', 'SMA TELKOM'),
('220840095', 'Dennis A Manik', 'Simalingkar ', 'Siantar', '04-04-2000', 'SMK 1 MEDAN'),
('220840096', 'Steven Ari P Silaban', 'Tanjung Morawa', 'Setiabudi', '19-06-2004', 'SMA 1 TANJUNG MORAWA'),
('220840099', 'Meigovanri Sihotang', 'Gang Bahagia', 'Pakkat', '15-09-2003', 'SMA 3 PAKKAT'),
('220840100', 'Meiman Rizky Lase', 'Gang Horas depan OYO', 'Sibolga', '06-07-2003', 'SMK BINTANG TIMUR'),
('220840102', 'Seka Sinulingga', 'Jalan Pales Raya', 'Kaban Jahe', '30-12-2003', 'SMA 3 KABAN JAHE'),
('220840109', 'Della Sitohang', 'Sunggal', 'Aceh Tenggara', '06-07-2003', 'SMA ACEH'),
('220840114', 'Aritmen Andreas Manurung', 'Medan', 'Medan', '11-01-2003', 'SMK ASGA MANDIRI'),
('220840126', 'Frans Bangun', 'Padang Bulan', 'Medan', '09-11-2004', 'SMA PENCAWAN'),
('228400106', 'Ananda Sinaga', 'Setiabudi', 'Siborong borong', '05-05-2004', 'SMA 1 SIBORONG-BORON');

-- --------------------------------------------------------

--
-- Table structure for table `tblmatakuliah`
--

CREATE TABLE `tblmatakuliah` (
  `kode_mk` int(15) NOT NULL,
  `nama_mk` varchar(25) NOT NULL,
  `sks` varchar(20) NOT NULL,
  `prasyarat` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblmatakuliah`
--

INSERT INTO `tblmatakuliah` (`kode_mk`, `nama_mk`, `sks`, `prasyarat`) VALUES
(1, 'Statistika', '2', 'wajib'),
(2, 'Pendidikan Kewarganegaraa', '2', 'umum'),
(3, 'Algoritma Pemrograman', '3', 'wajib'),
(4, 'Bahasa Indonesia', '2', 'umum'),
(5, 'Bahasa Inggris', '2', 'umum'),
(6, 'Matematika Dasar', '3', 'wajib'),
(7, 'Pengantar Teknologi ', '2', 'wajib'),
(8, 'Etika Profesi', '2', 'umum'),
(9, 'Rekayasa Perangkat Lunak', '3', 'wajib'),
(10, 'Sistem Basis data', '3', 'wajib'),
(11, 'Pemrograman basis Objek', '3', 'wajib'),
(12, 'Pengantar AI', '3', 'wajib'),
(13, 'Pengolahan Citra Digital', '3', 'wajib'),
(14, 'Pemrograman Web', '3', 'wajib'),
(15, 'Keamanan Basis Data', '3', 'Peminatan');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `role` enum('mahasiswa','dosen','','') NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`role`, `username`, `password`) VALUES
('mahasiswa', 'mahasiswa1', '$2y$10$E/La3DHT/EnEz7O10M8vIuF8zu35eCa9rWXnCkSGLm7qWaSnaXOS2'),
('dosen', 'dosen1', '$2y$10$mE8SvOm3vNpL2RmK.kJqsuHkAPDubP8stZfWWPMqnkfSHbgnicYni');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `krs`
--
ALTER TABLE `krs`
  ADD PRIMARY KEY (`npm`),
  ADD KEY `npm` (`npm`);

--
-- Indexes for table `krsnil`
--
ALTER TABLE `krsnil`
  ADD PRIMARY KEY (`tahun_ajaran`,`semester`,`npm`,`kode_mk`),
  ADD KEY `npm` (`npm`,`kode_mk`),
  ADD KEY `kode_mk` (`kode_mk`);

--
-- Indexes for table `tblmahasiswa`
--
ALTER TABLE `tblmahasiswa`
  ADD PRIMARY KEY (`npm`);

--
-- Indexes for table `tblmatakuliah`
--
ALTER TABLE `tblmatakuliah`
  ADD PRIMARY KEY (`kode_mk`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`,`password`),
  ADD UNIQUE KEY `role` (`role`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `krsnil`
--
ALTER TABLE `krsnil`
  ADD CONSTRAINT `krsnil_ibfk_2` FOREIGN KEY (`kode_mk`) REFERENCES `tblmatakuliah` (`kode_mk`),
  ADD CONSTRAINT `krsnil_ibfk_3` FOREIGN KEY (`npm`) REFERENCES `tblmahasiswa` (`npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
