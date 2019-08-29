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
-- Database: `unmer_bank_soal`
--

-- --------------------------------------------------------

--
-- Table structure for table `ipa`
--

CREATE TABLE `ipa` (
  `id` int(11) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `materi` varchar(20) DEFAULT NULL,
  `soal` text,
  `jwb_1` longtext,
  `jwb_2` longtext,
  `jwb_3` longtext,
  `jwb_4` longtext,
  `jwb_5` longtext,
  `jwb_benar` enum('1','2','3','4','5') DEFAULT NULL,
  `pembahasan` text,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipa`
--

INSERT INTO `ipa` (`id`, `code`, `materi`, `soal`, `jwb_1`, `jwb_2`, `jwb_3`, `jwb_4`, `jwb_5`, `jwb_benar`, `pembahasan`, `score`) VALUES
(3, 'MTK001', NULL, 'Diketahui barisan aritmetika dengan U4= 20 dan U8= 44. Suku ke-40 baris itu adalah…', '106', '236', '246', '275', '305', '2', 'lalala', NULL),
(4, 'MTK002', NULL, 'Pak Arif membeli motor dengan harga Rp15.000.000,00 dan dijual lagi dengan harga Rp16.500.000,00. Berapa perentase keuntungan yang diperoleh?', '1%', '1,5%', '10%', '15%', '10,5%', '3', 'YEYEYE', NULL),
(5, 'MTK003', NULL, 'K = {3, 4, 5} dan L = {1, 2, 3, 4, 5, 6, 7}, himpunan pasangan berurutan yang menyatakan relasi “dua lebihnya dari” dari himpunan K ke L adalah ….', '{(3, 5), (4, 6)}', '{(3, 5), (4, 6), (5, 7)}', '{(3, 1), (4, 2), (5, 3)}', '{(3, 2), (4, 2), (5, 2)}', '{(3, 2), (4, 5), (2, 2)}', '3', 'HUF', NULL),
(6, 'FIS001', NULL, 'Sebuah pesawat terbang bergerak ke arah Utara sejauh 13 km kemudianberbelok ke arah Timur sejauh 24 km dan berbelok lagi ke arah Selatan sejauh 3 km. Tentukan perpindahan yang dialami pesawat terbang!', '23 km', '24 km', '25 km', '27km', '26 km', '4', '', NULL),
(7, 'KIM001', NULL, 'Sebanyak 100ml CaCl2 0.6M dicampur dengan 100ml Na2CO3 0.6M. jika Ksp CaCO3 = 2.8 x 10 -9, massa zat yang mengendap adalah.... (Ar. Ca = 40, C = 12, O = 16, Na = 23, Cl = 35.5)', '6 gram', '9 gram', '60 gram', '100 gram', '120 gram', '1', NULL, NULL),
(8, 'KIM002', NULL, 'Elektrolisis larutan CuSO4 selama 30 menit dengan arus 10A, akan menghasilkan endapan logam Cu di katoda sebanyak.... (Ar Cu = 63,5)', '0.181 gram', '0,373 gram', '1,845 gram', '5,922 gram', '23,689 gram', '3', NULL, NULL),
(9, 'BIO001', NULL, 'Perhatikan ciri-ciri makhluk hidup berikut ini !\r\n\r\nEukariot\r\nHeterotrof\r\nPencernaan ekstraseluler\r\nTidak memiliki klorofil\r\nDinding sel tersusun atas kitin\r\nPeranan organisme yang memiliki ciri di atas dalam ekosistem adalah.....', 'konsumen', 'produsen', 'dekomposer', 'detritivor', 'herbivor', '3', NULL, NULL),
(10, 'BIO002', NULL, 'Pencemaran lingkungan dapat ditimbulkan oleh berbagai bahan pencemar, salah satunya adalah penumpukan kotoran dari peternakan. Cara mengatasi bahan pencemar itu sehingga menjadi bermanfaat bagi manusia adalah....', 'mengeringkan dan memadatkannya sebagai bahan bakar', 'menampung dan memprosesnya menjadi biogas', 'mengolahnya menjadi makanan ternak', 'memanfaatkannya untuk industri kertas', 'memprosesnya sebagai bahan campuran industri kayu lapis', '2', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ipc`
--

CREATE TABLE `ipc` (
  `id` int(11) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `materi` varchar(20) DEFAULT NULL,
  `soal` text,
  `jwb_1` longtext,
  `jwb_2` longtext,
  `jwb_3` longtext,
  `jwb_4` longtext,
  `jwb_5` longtext,
  `jwb_benar` enum('1','2','3','4','5') DEFAULT NULL,
  `pembahasan` text,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ips`
--

CREATE TABLE `ips` (
  `id` int(11) NOT NULL,
  `code` varchar(10) DEFAULT NULL,
  `materi` varchar(20) DEFAULT NULL,
  `soal` text,
  `jwb_1` longtext,
  `jwb_2` longtext,
  `jwb_3` longtext,
  `jwb_4` longtext,
  `jwb_5` longtext,
  `jwb_benar` enum('1','2','3','4','5') DEFAULT NULL,
  `pembahasan` text,
  `score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ips`
--

INSERT INTO `ips` (`id`, `code`, `materi`, `soal`, `jwb_1`, `jwb_2`, `jwb_3`, `jwb_4`, `jwb_5`, `jwb_benar`, `pembahasan`, `score`) VALUES
(1, 'GEO001', NULL, 'Saat ini banyak sungai yang tercemar akibat pembuangan limbah secara sembarangan. Padahal, masih banyak penduduk yang masih memanfaatkan air sungai untuk keperluan sehari-hari. Namun, karena menggunakan sungai yang telah tercemar, banyak penduduk yang mengalami masalah kesehatan. Pendekatan geografi yang dapat digunakan untuk mengkaji gejala tersebut adalah pendekatan....', 'Keruangan', 'Kelingkungan', 'Kompleks wilayah', 'Kompleks wilayah', 'Regional', '2', 'Dalam soal permasalahan yang merujuk pada soal di atas, dapat dikaji menggunakan pendekatan kelingkungan. Pendekatan kelingkungan (ecological approach) menganalisis fenomena geografis berdasarkan interaksi antara alam dengan alam, manusia dengan alam, dan manusia dengan manusia yang ada di sekitarnya. Pada soal di atas dijelaskan bahwa manusia mengalami kerugian akibat dari pencemaran yang terjadi pada sungai.', NULL),
(2, 'GEO002', NULL, 'Gempa 6,9 SR mengguncang beberapa kota di wilayah Jawa Barat pada 16 Desember 2017 dan menimbulkan peringatan tsunami. Berdasarkan posisi dan kedalamannya, kejadian gempa bumi ini disebabkan karena aktivitas tumbukan Lempeng Indo-Australia terhadap Lempeng Eurasia di selatan Jawa. Aktivitas tektonis antara kedua lempeng tersebut juga mengakibatkan terbentuknya sebaran gunung api di wilayah Sumatra bagian barat dan Jawa bagian selatan. Deskripsi di atas sesuai dengan prinsip....', 'Korologi', 'Deskripsi', 'Distribusi', 'Interelasi', 'Interaksi', '1', 'Prinsip korologi merupakan gabungan atau perpaduan dari prinsip distribusi, deskripsi, dan interelasi yang komprehensif. Soal di atas menjelaskan tentang terjadinya fenomena gempa bumi di Jawa Barat, menjelaskan faktor penyebabnya (interelasinya), serta menjelaskan keterkaitannya dengan persebaran (distribusi) gunung api di Indonesia. Hal tersebut sesuai prinsip korologi, yang merupakan campuran dari ketiga prinsip geografi. Jadi, jawaban yang benar adalah prinsip korologi.\r\n\r\n', NULL),
(3, 'SEJ001', NULL, 'Faktor yang paling berperan dalam perkembangan kehidupan masyarakat pada masa Mesolitikum lebih cepat dibandingkan dengan masa Paleolitikum...', 'beragamnya alat yang digunakan manusia pendukung masa itu yang menunjang kehidupannya', 'berkembangnya teknologi perundagian yang semakin mempermudah manusia dengan variasi peralatan dari beragam bahan', 'kemampuan otak manusia pendukung kebudayaan ini sehingga alat-alat lebih beragam', 'manusia pendukung masa tersebut lebih mengerti pemanfaatan teknologi lebih baik', 'munculnya manusia purba Homo Sapiens yang dikenal sebagai manusia cerdas', '3', 'Perkembangan masa praaksara ditunjang oleh faktor internal dan eksternal. Berdasarkan faktor internal, kehidupan masyarakat Mesolitikum lebih cepat dibandingkan masyarakat Paleolitikum sebab otak manusia pada masa itu sudah mulai berkembang. Sementara berdasarkan faktor eksternal, kondisi alam masa Mesolitikum jauh lebih stabil dibandingkan dengan masa sebelumnya.', NULL),
(4, 'SEJ002', NULL, 'Dampak yang paling terasa dalam pelaksanaan Politik Etis di Hindia Belanda adalah....', 'pemerataan pembangunan di berbagai wilayah Hindia Belanda terkait program emigrasi Politik Etis', 'terjaganya kualitas tanaman perkebunan milik pemerintah maupun pribumi sebagai dampak dari irigasi', 'pendirian sekolah–sekolah umum untuk semua warga Hindia Belanda tanpa terkecuali', 'kebebasan berpolitik dalam Volksraad bagi warga Hindia Belanda', 'lahirnya golongan terpelajar yang mengarahkan pergerakan bangsa', NULL, 'Politik Etis merupakan program pemerintah Belanda yang mencoba memberikan balas budi (bertanggung jawab) atas apa yang bangsa Hindia Belanda berikan terhadap pemerintah Belanda. Dengan dilaksanakannya Politik Etis di Hindia Belanda membuat perubahan yang signifikan dalam perjuangan bangsa, yaitu dengan munculnya kaum terpelajar yang menerima pendidikan modern dan nantinya memimpin pergerakan bangsa Indonesia.\r\n\r\n', NULL),
(5, 'EKO001', NULL, 'Terbatasnya jumlah garam yang ada membuat harga garam menjadi tinggi. Tingginya harga garam sangat berdampak besar dalam kehidupan masyarakat salah satu akibatnya adalah membuat semua produk yang berkaitan dengan garam menjadi ikut melambung. Cara mengatasi permasalahan tersebut adalah….', 'Melakukan stok garam sebanyak mungkin sebelum harga lebih tinggi', 'jangan memasak atau berproduksi menggunakan garam', 'menambah jumlah pasokan garam untuk menurunkan harga', 'menghimbau untuk meminimalisir pemakaian garam', 'mengadakan hari garam gratis', '3', 'Kelangkaan merupakan kondisi dimana jumlah barang lebih kecil dari kebutuhan. Semakin tinggi kelangkaan suatu barang maka harganya akan makin tinggi juga. Kasus garam di atas dapat diatasi dengan cara menambah pasokan garam melalui impor garam dari luar negeri oleh pemerintah. Hal ini akan menurunkan tingkat kelangkaan garam sehingga harga garam akan ikut turun. Impor garam merupakan solusi jangka pendek sedangkan solusi jangka panjangnya adalah peningkatan produksi garam.', NULL),
(6, 'EKO002', NULL, 'Ketika Lilis telah lulus dari sekolah menengahnya, ia memiliki pilihan untuk membuka usaha sendiri dengan penghasilan Rp150.000,00/hari, bekerja di perusahaan orang tuanya dengan gaji Rp7.500.000,00 atau bekerja di perusahaan temannya dengan gaji Rp6.000.000,00 per bulan. Jika Lilis memilih untuk membuka usaha sendiri, maka berapakah biaya peluang Lilis….', 'Rp150.000,00', 'Rp4.500.000,00', 'Rp6.000.000,00', 'Rp7.500.000,00', 'Rp13.500.000,00', '4', 'Biaya peluang merupakan kesempatan terbaik yang hilang karena telah memilih suatu pilihan. Karena Lilis memilih untuk membuka usaha sendiri, maka Lilis kehilangan kesempatan untuk bekerja di perusahaan orang tuanya dengan gaji Rp7.500.000,00 dan bekerja pada perusahaan temannya dengan gaji Rp6.000.000,00. Kesempatan terbaik yang hilang adalah bekerja pada perusahaan orang tuanya dengan gaji Rp7.500.000,00 maka biaya peluang Lilis adalah Rp7.500.000,00.', NULL),
(7, 'SOS001', NULL, 'Penelitian awal para sosiolog menyatakan bahwa penyebab banjir karena banyak warga membuang sampah ke sungai maupun mendirikan bangunan di bantaran kali. Kebiasaan ini membuat pendangkalan dasar sungai sehingga tidak mampu menampung lebih banyak air. Dalam penelitian terbaru menyatakan penyebab banjir juga karena sebesar 80 persen waduk saat ini dalam kondisi rusak, terlalu dangkal, atau telah diubah menjadi area perumahan. Pernyataan tersebut menunjukkan sosiologi memiliki ciri....', 'teoretis dan kumulatif', 'kumulatif dan empiris', 'empiris dan non etis', 'non etis dan teoretis', 'teoretis dan empiris', '1', 'Penelitian awal yang dilakukan adalah teoretis karena peneliti menyusun abstraksi dari hasil observasi yang konkret di lapangan terhadap penyebab banjir, dan abstraksi tersebut merupakan kerangka dari unsur-unsur yang tersusun secara logis dan bertujuan menjalankan hubungan sebab akibat sehingga menjadi teori. Kemudian penelitian susulan yang dilakukan adalah kumulatif disusun karena menyatakan penyebab banjir tidak hanya sampah tapi juga karena waduk yang sudah tidak berfungsi.', NULL),
(8, 'SOS002', NULL, 'Seringnya publik mengucilkan kehidupan pasien AIDS dikarenakan pemikiran pendek dan menganggap pasien AIDS tidak berhak hidup. Stigma dan diskriminasi di antara sebagian besar masyarakat akan terus-menerus marak jika tidak diimbangi dengan informasi dan pengetahuan yang memadai. Stigma negatif selalu dijadikan senjata utama untuk mengucilkan para penderita AIDS, hal tersebutlah yang membuat jurang diskriminasi semakin dalam. Banyak penderita AIDS yang akhirnya menarik diri masyarakat karena merasa dikucilkan dan tidak mendapat hak yang sama dengan warga negara lainnya. Tindakan penderita AIDS yang akhirnya menarik diri masyarakat merupakan bentuk....', 'Rebellion', 'anomie', 'retreatisme', 'inovation', 'conformity', '3', 'Menurut Merton, retreatisme adalah tindakan menarik diri dari masyarakat luas karena merasa nilai-nilai yang dianut masyarakat tidak sesuai dengan nilai yang dianut oleh individu. Dalam kasus ini publik mengucilkan kehidupan pasien AIDS dikarenakan menganggap pasien AIDS tidak berhak hidup, padahal jika masyarakat terbuka dengan informasi dan mengubah pola pikir penderita AIDS adalah warga negara yang mempunyai hak yang sama dengan masyarakat lainnya.', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ipa`
--
ALTER TABLE `ipa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ipc`
--
ALTER TABLE `ipc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ips`
--
ALTER TABLE `ips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ipa`
--
ALTER TABLE `ipa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `ipc`
--
ALTER TABLE `ipc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ips`
--
ALTER TABLE `ips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
