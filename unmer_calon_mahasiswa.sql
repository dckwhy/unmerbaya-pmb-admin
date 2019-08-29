-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2019 at 02:30 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unmer_calon_mahasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE `personal_data` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `gender` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `agama` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `nik` varchar(50) DEFAULT NULL,
  `nisn` varchar(20) DEFAULT NULL,
  `hasil_tryout` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_data`
--

INSERT INTO `personal_data` (`id`, `user_id`, `name`, `tgl_lahir`, `tempat_lahir`, `gender`, `agama`, `address`, `phone`, `nik`, `nisn`, `hasil_tryout`) VALUES
(1, 0, 'Nabila Ramadhani', '1998-01-16', 'Malang', 'Perempuan', 'Islam', '1, Kwangsen, Lowokwaru, Nganjuk', '3546789', '465789', '56879', NULL),
(3, 0, 'Izza Isma', '1996-12-15', 'Surabaya', 'Perempuan', 'Islam', '2, Kwangsen, Ketawanggede, Mojokerto', '081333200918', '3257609234188974', '23456789012329', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_data_details`
--

CREATE TABLE `personal_data_details` (
  `id` int(11) NOT NULL,
  `camaba_id` int(11) NOT NULL,
  `sekolah_asal` varchar(50) DEFAULT NULL,
  `alamat_sekolah_asal` varchar(100) DEFAULT NULL,
  `nama_kantor` varchar(50) DEFAULT NULL,
  `alamat_kantor` varchar(50) DEFAULT NULL,
  `prodi` varchar(50) DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL,
  `gelombang` int(11) DEFAULT NULL,
  `sumber_informasi` varchar(10) DEFAULT NULL,
  `img_ktp` varchar(30) DEFAULT NULL,
  `img_kk` varchar(30) DEFAULT NULL,
  `img_nisn` varchar(30) DEFAULT NULL,
  `img_ijazah` varchar(30) DEFAULT NULL,
  `photo` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_data_details`
--

INSERT INTO `personal_data_details` (`id`, `camaba_id`, `sekolah_asal`, `alamat_sekolah_asal`, `nama_kantor`, `alamat_kantor`, `prodi`, `waktu`, `gelombang`, `sumber_informasi`, `img_ktp`, `img_kk`, `img_nisn`, `img_ijazah`, `photo`) VALUES
(1, 0, 'smk telkom', 'malang', 'astro', 'malang', 'Hukum', 'Pagi', 1, '--Silahkan', 'ktp2019.jpg', 'kk2019.jpg', 'nisn2019.png', 'ijazah2019.png', 'photo2019.png'),
(2, 0, 'SMKN 4 Malang', 'Jl. Tanimbar 22, Malang', 'OPTIIK', 'Jl. Veteran Malang', 'Teknik', 'Pagi', 1, 'Brosur', NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_data`
--
ALTER TABLE `personal_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_data_details`
--
ALTER TABLE `personal_data_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_data`
--
ALTER TABLE `personal_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `personal_data_details`
--
ALTER TABLE `personal_data_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
