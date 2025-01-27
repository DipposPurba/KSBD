-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2025 at 04:54 AM
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
  `nidn` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `alamat`, `nohp`) VALUES
(1, 'btYt6nupNF+6nEb6uQ==', 'ftIw6WCzMl+rh1v1', 'Gotmuy3lbUfS0Q=='),
(2, 'aMYq5mE=', 'ftIw6WCzMl+rh1v1', 'Gotmuy3lbUfS0Q==');

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

--
-- Dumping data for table `krs`
--

INSERT INTO `krs` (`npm`, `kode_mk`, `tahun_ajaran`, `semester`) VALUES
('220840079', '1', 'GINssTrvZU3c', 'Hw==');

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
('GINssTrvZU3c', 'Hw==', '220840077', 1, 'E4M=', 'E4M=', 'E4M=', 'E4M='),
('GINstzrvZU3f', 'Hw==', '220840077', 1, 'E4M=', 'HoM=', 'EoY=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840079', 1, 'EoM=', 'HYM=', 'HIM=', 'HIQ='),
('GINstzrvZU3f', 'Hw==', '220840080', 1, 'HYQ=', 'HYM=', 'HIM=', 'HIQ='),
('GINstzrvZU3f', 'Hw==', '220840082', 1, 'EoM=', 'HYM=', 'E4M=', 'HIQ='),
('GINstzrvZU3f', 'Hw==', '220840093', 1, 'HYM=', 'HYM=', 'EoM=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840094', 1, 'HYM=', 'E4M=', 'EoM=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840094', 2, 'HYM=', 'E4M=', 'EoM=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840094', 3, 'HYM=', 'E4M=', 'EoM=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840094', 4, 'HYM=', 'E4M=', 'EoM=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840094', 5, 'HYM=', 'E4M=', 'EoM=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840094', 6, 'HYM=', 'E4M=', 'EoM=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840094', 7, 'HYM=', 'E4M=', 'EoM=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840094', 8, 'HYM=', 'E4M=', 'EoM=', 'E4s='),
('GINstzrvZU3f', 'Hw==', '220840094', 9, 'HIM=', 'Eos=', 'EoM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840094', 10, 'HIM=', 'Eos=', 'HIM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840094', 11, 'HIM=', 'HYM=', 'HIM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840094', 12, 'E4M=', 'HYM=', 'HIM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840094', 13, 'H4M=', 'HYM=', 'HIM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840094', 14, 'H4M=', 'HYM=', 'H4M=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840094', 15, 'H4M=', 'HYM=', 'H4M=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840095', 1, 'H4M=', 'HYM=', 'H4M=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840096', 1, 'H4M=', 'HYM=', 'H4M=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840099', 1, 'H4M=', 'HYM=', 'H4M=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840100', 1, 'H4M=', 'HYM=', 'H4M=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840100', 2, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840102', 1, 'H4M=', 'HYM=', 'H4M=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840102', 11, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840106', 1, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840106', 2, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840109', 1, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840109', 6, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840109', 7, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840109', 8, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840109', 10, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840114', 1, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840114', 9, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840114', 11, 'HIY=', 'E4M=', 'HYM=', 'EoE='),
('GINstzrvZU3f', 'Hw==', '220840126', 1, 'HIY=', 'E4M=', 'HYM=', 'EoE=');

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
('220840106', 'a90/7XG8dSyDh1X/uQ==', 'edYq6nT9FwqOgA==', 'edo87GeyOxjKq1v', 'GINusDjtbVLb3g==', 'ef4fo1v9ZF+5oHbXioNp'),
('220840109', 'btYy73T9Bhaehlz5tqs=', 'ecYw5HK8OQ==', 'a9A76w==', 'GINusDjtbFLb2g==', 'ef4foyT9FDyvoQ=='),
('220840114', 'a8E393i4O1+rh1Dqva1UyZMVZdGmAh4A', 'Z9Y64ns=', 'Z9Y64ns=', 'GINusjjtbFLb0Q==', 'ef4foyT9GDquqHo='),
('220840126', 'bME/7Wb9Fx6EjkH2', 'etI64nu6dT2fhVX2', 'Z9Y64ns=', 'GINuszjtZ1Lb2g==', 'ef4fo1v9ZF+nrHDZlg==');

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
(1, 'ecc/93yuIRaBiA==', 'GA==', 'fdI06nc='),
(2, 'etYw53y5PBSLhxTTvbtGm7kVZ', 'GA==', 'f94r7g=='),
(3, 'a9857Ge0IRKLyWT9tb5IjqwVZ', 'GQ==', 'fdI06nc='),
(4, 'aNI24ma8dTaEjVv2vb9OiA==', 'GA==', 'f94r7g=='),
(5, 'aNI24ma8dTaEjlPqsb8=', 'GA==', 'f94r7g=='),
(6, 'Z9Iq5ni8IRaBiBTcub9Gmw==', 'GQ==', 'fdI06nc='),
(7, 'etYw5HSzIR6YyWD9s6JIhbETY', 'GQ==', 'fdI06nc='),
(8, 'b8c36HT9BQ2Fj1HrsQ==', 'GA==', 'f94r7g=='),
(9, 'eNY14my8Jh7KuVHquaJAgr8AK', 'GQ==', 'fdI06nc='),
(10, 'edot93CwdT2Lml3r+IhGnb8=', 'GQ==', 'fdI06nc='),
(11, 'etYz8Xq6Jx6HiFq4mqlVi78HY', 'GQ==', 'fdI06nc='),
(12, 'etYw5HSzIR6YyXXR', 'GQ==', 'fdI06nc='),
(13, 'etYw5HqxNBeLhxTbsbhViP4wY', 'GQ==', 'fdI06nc='),
(14, 'etYz8Xq6Jx6HiFq4j6lF', 'GQ==', 'fdI06nc='),
(15, 'YdY/7nSzNBHKul3rrKlKyZwVe', 'GQ==', 'etYz6nu8IR6E');

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
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

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
