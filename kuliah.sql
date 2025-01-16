-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2025 at 04:38 PM
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

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`NIDN`, `Nama`, `Alamat`, `NoHP`) VALUES
('', '', '', ''),
('', '', '', ''),
('', '', '', ''),
('', '', '', '');

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
('220840077', 'esYs4XT9GR6HjV3oqKNUyZZUWw==', 'YtYy9XCpPB4=', 'aNY14ma0', 'GINutzjtbFLa2A==', 'ef4foyT9BT6tqGbZlg=='),
('220840079', 'fNow5nm8dSyDnVHorQ==', 'edYq6nS/IBuD', 'YdI84nu3NBeP', 'GINusDjsZ1Lb3w==', 'ef4fo16cFz6ko3XQnQ=='),
('220840080', 'Z9o963S4OV+9yWf9ta5Om7cabA==', 'bdIw5DWPNBeHiEA=', 'edo/7WG8Jw==', 'GINutzjsZFLa0Q==', 'ef4foyf9Bjarp2DZig=='),
('220840082', 'etYs7Hu0Ph7KvBTWuaVJjrkbZ8W6', 'ftIw6WCzMl+5iEbx', 'ftY86nu6dSuDh1P', 'GINutzjtY1Lb0A==', 'ef4fo1v9ZF+upnjXk+xq'),
('220840093', 'eNwno1z9BhaLgVX5uaI=', 'ftIw6WCzMl+5iEbx', 'edo87Hm6NA==', 'GINusDjsZVLa0Q==', 'ef4foyT9BjaopnjfmQ=='),
('220840094', 'eNww4nm5dTyLm1D5+JxOh7sZ', 'edoz4nm0OxiBiEa4mg==', 'Z9Y64ns=', 'GINusDjtZ1Lb0A==', 'ef4fo0GYGTSlpA=='),
('220840095', 'btYw7XyudT7KpFX2sac=', 'edoz4nm0OxiBiEY=', 'edo/7WG8Jw==', 'GINuszjtYVLa3Q==', 'ef4VoyT9GDquqHo='),
('220840096', 'ecc79XCzdT7KuRTLsaBGi78a', 'ftIw6WCzMl+nhkb5r60=', 'Z9Y64ns=', 'GINutzjtY1Lb0A==', 'ef4foyT9ATWnpmbZj40='),
('220840099', 'Z9Y35HqrNBGYgBTLsaRInb8abA==', 'bdIw5DWPNBeHiEA=', 'etI16HSp', 'GINusDjtbVLY2w==', 'ef4foyT9BT6honXM'),
('220840100', 'Z9Y37nT9BxaQgk24lK1UjA==', 'bdIw5DWPNBeHiEA=', 'edo87Hm6NA==', 'GINuszjtYlLb0A==', 'ef4Vo1eUGyurp3O4jIVq'),
('220840102', 'edY14jWOPBGfhV32v6tG', 'etIz5nm8', 'aNYs4mapNBiD', 'GINusTjtbFLb2w==', 'ef4foyT9Fzq4qGfMmYtu'),
('220840109', 'btYy73T9Bhaehlz5tqs=', 'ecYw5HK8OQ==', 'a9A76w==', 'GINusDjtbFLb2g==', 'ef4foyT9FDyvoQ=='),
('220840114', 'a8E393i4O1+rh1Dqva1UyZMVZdGmAh4A', 'Z9Y64ns=', 'Z9Y64ns=', 'GINusjjtbFLb0Q==', 'ef4foyT9GDquqHo=');

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
(1, 'ecc/93yuIRaBiA==', 'GA==', 'fdI06nc=');

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
