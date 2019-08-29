-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 11, 2019 at 02:53 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `unmer_core`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_admin`
--

CREATE TABLE `data_admin` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `uname` varchar(50) DEFAULT NULL,
  `upass` varchar(50) DEFAULT NULL,
  `previlege` enum('Super Admin','Admin') DEFAULT NULL,
  `status` enum('0','1') NOT NULL DEFAULT '1' COMMENT '''0'' Tidak Aktif, ''1'' Aktif'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_informasi`
--

CREATE TABLE `data_informasi` (
  `id` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_informasi`
--

INSERT INTO `data_informasi` (`id`, `img`, `content`) VALUES
(1, 'pic3.jpg', 'Perkiraan Biaya Pendidikan\r\nUntuk biaya pendidikan Universitas Merdeka Surabaya akan dibutuhkan bagi para calon mahasiswa dalam mempersiapkan dana yang dibutuhkan.'),
(2, 'Untitled-4.png', 'Pengumuman Pendaftaran\r\nHasil pengumuman pendaftaran Universitas Merdeka Surabaya akan diumumkan setelah proses pendaftaran dan tes masuk telah selesai. Pada hasil pengumuman pendaftaran Universitas Merdeka Surabaya ini akan menentukan pelajar yang mana saja yang akan lulus menjadi mahasiswa baru universitas ini.');

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal_pendaftaran`
--

CREATE TABLE `data_jadwal_pendaftaran` (
  `id` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `img2` varchar(100) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jadwal_pendaftaran`
--

INSERT INTO `data_jadwal_pendaftaran` (`id`, `img`, `img2`, `content`) VALUES
(1, 'img2.png', 'img1.png', 'Gelombang pertama dilaksanakan pada tanggal 1 Pebruari - 30 April 2019.'),
(2, 'img3.png', 'img1.png', 'Gelombang pertama dilaksanakan pada tanggal 2 Mei - 31 Juli 2019.'),
(3, 'img1.png', 'img1.png', 'Gelombang pertama dilaksanakan pada tanggal 1 Agustus - 23 September 2019.');

-- --------------------------------------------------------

--
-- Table structure for table `data_jadwal_test`
--

CREATE TABLE `data_jadwal_test` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL,
  `content` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_jadwal_test`
--

INSERT INTO `data_jadwal_test` (`id`, `date`, `img`, `content`) VALUES
(1, '2019-02-04', 'img2.png', 'Jadwal Test Gelombang I\r\nJadwal test gelombang I penerimaan mahasiswa baru Universitas Merdeka Surabaya akan diluncurkan pada tanggal 4 Februari 2019'),
(2, '2019-05-02', 'img3.png', 'Jadwal Test Gelombang II\r\nJadwal test gelombang II penerimaan mahasiswa baru Universitas Merdeka Surabaya akan diluncurkan pada tanggal 2 Mei 2019'),
(3, '2019-08-01', 'img1.png', 'Jadwal Test Gelombang III\r\nJadwal test gelombang III penerimaan mahasiswa baru Universitas Merdeka Surabaya akan diluncurkan pada tanggal 1 Agustus 2019'),
(4, NULL, 'jt20190331.png', '<p>Tes</p>');

-- --------------------------------------------------------

--
-- Table structure for table `data_persyaratan`
--

CREATE TABLE `data_persyaratan` (
  `id` int(11) NOT NULL,
  `img` varchar(100) DEFAULT NULL,
  `content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_persyaratan`
--

INSERT INTO `data_persyaratan` (`id`, `img`, `content`) VALUES
(1, 'syarat20190732.png', '<p class=\"p1\">1. Syarat Umum<span class=\"Apple-converted-space\">&nbsp;</span></p><p class=\"p1\">A. Fotokopi ijasah/STTB SMU/SMK/Sederajat dan Danem dilegalisir 3 lembar<span class=\"Apple-converted-space\">&nbsp;</span></p><p class=\"p1\">B. Pas Foto berwarna terbaru, ukuran :<span class=\"Apple-converted-space\">&nbsp;</span></p><p class=\"p1\"><span class=\"Apple-converted-space\">&nbsp;&nbsp; </span>4 x 6 = 4 lembar<span class=\"Apple-converted-space\">&nbsp;</span></p><p class=\"p1\"><span class=\"Apple-converted-space\">&nbsp;&nbsp; </span>3 x 4 = 4 lembar<span class=\"Apple-converted-space\">&nbsp;</span></p><p class=\"p1\">C. Fotokopi KTP 3 lembar<span class=\"Apple-converted-space\">&nbsp;</span></p><p class=\"p1\">D. Fotokopi Kartu Keluarga (KK) 3 lembar<span class=\"Apple-converted-space\">&nbsp;</span></p><p>\r\n\r\n\r\n\r\n\r\n<style type=\"text/css\">\r\np.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica}\r\n</style>\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"p1\">E. Mengisi dan Menandatangani surat pernyataan</p>'),
(2, 'syarat20190529.jpg', '<p class=\"p1\">2. Syarat Khusus<span class=\"Apple-converted-space\">&nbsp;</span></p><p class=\"p1\">Mahasiswan transfer harus melampirkan :<span class=\"Apple-converted-space\">&nbsp;</span></p><p class=\"p1\">a. Fototkopi Kartu Mahasiswa (KTM) perguruan tinggi asal<span class=\"Apple-converted-space\">&nbsp;</span></p><p class=\"p1\">b. Fotokopi Transkrip (Daftar Nilai Hasil Ujian)<span class=\"Apple-converted-space\">&nbsp;</span></p><p>\r\n\r\n\r\n\r\n\r\n<style type=\"text/css\">\r\np.p1 {margin: 0.0px 0.0px 0.0px 0.0px; font: 12.0px Helvetica}\r\n</style>\r\n\r\n\r\n\r\n\r\n\r\n\r\n</p><p class=\"p1\">c. Surat pindah dari perguruan tinggi asal</p>');

-- --------------------------------------------------------

--
-- Table structure for table `data_user`
--

CREATE TABLE `data_user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_user`
--

INSERT INTO `data_user` (`id`, `name`, `phone`, `email`, `pass`, `img`) VALUES
(1, 'Inas', '085333800999', 'Inas@gmail.com', '12345', 'user.png');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `home_banner` varchar(30) DEFAULT NULL,
  `home_content` text,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(15) DEFAULT NULL,
  `website` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL,
  `count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_admin`
--
ALTER TABLE `data_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_informasi`
--
ALTER TABLE `data_informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jadwal_pendaftaran`
--
ALTER TABLE `data_jadwal_pendaftaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jadwal_test`
--
ALTER TABLE `data_jadwal_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_persyaratan`
--
ALTER TABLE `data_persyaratan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_user`
--
ALTER TABLE `data_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_admin`
--
ALTER TABLE `data_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_informasi`
--
ALTER TABLE `data_informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_jadwal_pendaftaran`
--
ALTER TABLE `data_jadwal_pendaftaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_jadwal_test`
--
ALTER TABLE `data_jadwal_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_persyaratan`
--
ALTER TABLE `data_persyaratan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `data_user`
--
ALTER TABLE `data_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
