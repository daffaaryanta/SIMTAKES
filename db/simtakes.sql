-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2024 at 08:53 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simtakes`
--

-- --------------------------------------------------------

--
-- Table structure for table `akreditasi`
--

CREATE TABLE `akreditasi` (
  `id_ak` int(10) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kode` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_akreditasi` varchar(30) NOT NULL,
  `tahun` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akreditasi`
--

INSERT INTO `akreditasi` (`id_ak`, `id_kategori`, `kode`, `nama`, `jenis_akreditasi`, `tahun`) VALUES
(1, 3, '1260258', 'POLKES 06.09.15/ HST', 'Pratama', '2024'),
(2, 3, 'Poskes 06.10.17 Batola', 'Poskes 06.10.17 Batola', 'Pratama', '2024'),
(3, 2, '1060630', 'Pekauman', 'Pratama', '2024'),
(8, 3, '6301013 ', 'RS Umum Daerah H. Boejasin Pelaihari ', 'Dasar', '2016 '),
(9, 4, '1660058 ', 'Laboratorium Klinik Panasea ', 'Madya', '2018 ');

-- --------------------------------------------------------

--
-- Table structure for table `data_kabkota`
--

CREATE TABLE `data_kabkota` (
  `id_kabkota` int(11) NOT NULL,
  `kabkota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_kabkota`
--

INSERT INTO `data_kabkota` (`id_kabkota`, `kabkota`) VALUES
(26, 'Dasar'),
(13, 'Kabupaten Hulu Sungai Tengah'),
(10, 'Kabupaten Balangan'),
(12, 'Kabupaten Barito Kuala'),
(19, 'Kabupaten Hulu Sungai Selatan'),
(23, 'Kabupaten Hulu Sungai Utara'),
(8, 'Kabupaten Kotabaru'),
(17, 'Kabupaten Tanah Bumbu'),
(25, 'Kabupaten Tanah Laut'),
(14, 'Kabupaten Tapin'),
(24, 'Kota Banjarmasin');

-- --------------------------------------------------------

--
-- Table structure for table `data_klinik`
--

CREATE TABLE `data_klinik` (
  `idx` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `kabkota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kodeklinik` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namaklinik` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenisklinik` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_klinik`
--

INSERT INTO `data_klinik` (`idx`, `id_kategori`, `kabkota`, `kodeklinik`, `namaklinik`, `jenisklinik`, `alamat`) VALUES
(10, 3, 'Kota Banjarmasin', '1260316', 'Klinik Gigi My Dentist Sutoyo', 'Pratama', 'Jl. Sutoyo No. 128 Rt 008'),
(11, 3, 'Kota Banjarmasin', '1260317', 'Klinik Gigi My Dentis Sultan Adam', 'Pratama', 'Jl. Pinus Raya No 10 Rt 19 (Samping i-pone bjm)'),
(12, 3, 'Kota Banjarmasin', '1260670', 'Rafisa Sei Andai', 'Pratama', 'Jl.Sungai Andai No 2 Rt 16'),
(13, 3, 'Kota Banjarmasin', '1260466', 'Abdi Persada', 'Pratama', 'Jl.Soetoyo S No 365'),
(17, 3, 'Kota Banjarmasin', '1260648', 'Klinik Tumbuh Kembang Happy Kids', 'Utama', 'Jl.KS Tubun No 165'),
(18, 3, 'Kabupaten Tapin', '1260275', 'BP Polres Tapin', 'Pratama', ' Jln. Brigjen. H. Hassan Basry Rantau'),
(19, 3, 'Kabupaten Tapin', '1260280', 'KODIM 1010 Tapin', 'Pratama', 'Jl. Kesehatan RT. 18 Kec. Tapin Utara'),
(20, 3, 'Kabupaten Tapin', '1260278', 'Klinik Mitra Sehat', 'Pratama', 'Jl. A. Yani, Pulau Pinang, Binuang, Kabupaten Tapin, Kalimantan Selatan 71183, Indonesia'),
(21, 3, 'Kabupaten Tapin', '1260278', 'Klinik Pratama Rumah Tahanan Negara Kelas IIB Rant', 'Pratama', 'Jl. SPG kelurahan Rangda Malingkung'),
(22, 3, 'Kabupaten Tapin', '1260531', 'Klinik Pratama PT. Kharisma Inti Usaha', 'Pratama', 'Desa Pandahan Kecamatan Tapin Tengah Kabupaten Tapin'),
(23, 3, 'Kabupaten Hulu Sungai Selatan', '1260265', 'Klinik Cahaya Imami Kandangan', 'Utama', 'Klinik Cahaya Imani Kandangan'),
(24, 3, 'Kabupaten Hulu Sungai Tengah', '1260260', 'Klinik Dharma Usada', 'Pratama', 'Jl. Brigjend H. Hasan Baseri No.17 Kelurahan Barabai Darat'),
(25, 3, 'Kabupaten Hulu Sungai Tengah', '1260252', 'Klinik Polres Hulu Sungai Tengah', 'Pratama', 'Jl. Ir. P. H. M Noor No.29 Kec. Barabai Kab. HST'),
(26, 3, 'Kabupaten Hulu Sungai Tengah', '1260258', 'POLKES 06.09.15/ HST', 'Pratama', 'Jl. SMP Komp. Beringin RT.08 RW. 02 Kel. Barabai Barat'),
(27, 3, 'Kabupaten Hulu Sungai Tengah', '1260258', 'LABORATORIUM KLINIK PERMATA', 'Pratama', 'JL. Pangeran Antasario No. 18 A RT.012/004'),
(28, 3, 'Kabupaten Hulu Sungai Tengah', '1260269', 'KLINIK UTAMA ASY-SYIFA DARUL HIDAYAH', 'Utama', 'KLINIK UTAMA ASY-SYIFA DARUL HIDAYAH'),
(29, 3, 'Kabupaten Hulu Sungai Tengah', '1260259', 'Klinik Utama Mubarak', 'Utama', 'Jl. A. Yani Desa Panggung RT. 02 RW.01'),
(30, 3, 'Kabupaten Balangan', '1260559', 'Klinik Polres Balangan', 'Pratama', 'JL. A. YANI NO. 13 KEC. PARINGIN SELATAN KAB. BALANGAN'),
(31, 3, 'Kabupaten Barito Kuala', '1260616', 'Klinik Polres Batola', 'Pratama', 'Jl. Gusti M.Seman No.1 Marabahan'),
(32, 3, 'Kabupaten Barito Kuala', 'Poskes 06.10.17 Batola', 'Poskes 06.10.17 Batola', 'Pratama', 'Jl. AES Nasution Asrama Militer 1005/Batola'),
(33, 3, 'Kabupaten Tanah Laut', '1260191', 'ALMEER HEALTH & DENTAL CARE', 'Pratama', 'Komp.Gagas Permai Jl.Kakatua No.31 Angsau'),
(34, 3, 'Kabupaten Tanah Laut', '12606210', 'Klinik Kesehatan Politala', 'Pratama', 'Klinik Kesehatan Politala'),
(35, 3, 'Kabupaten Tanah Laut', '1260211', 'Klinik Azka Medical Centre', 'Pratama', 'Jl.H.Boejasin Rw 7'),
(36, 3, 'Kabupaten Tanah Laut', '1260221', 'Klinik Mitra Sehat', 'Pratama', 'Jl.A.Yani Km.121 Ds.Simpang Empat Sungai Baru'),
(37, 3, 'Kabupaten Tanah Laut', '1260323', 'Poliklinik Kesehatan 061013', 'Pratama', 'Jl.A.Yani Rt.001 Rw 001 Angsau'),
(38, 3, 'Kabupaten Tanah Laut', '1260561', 'Polres Tanah Laut', 'Pratama', 'Jl.Kemakmuran No.1'),
(39, 3, 'Kabupaten Tanah Laut', '1260562', 'Klinik Utama Ammariz', 'Utama', 'Jl.KH.Mansyur No.5 Rt.15/4 Angsau'),
(40, 3, 'Kabupaten Tanah Bumbu', '12600611', 'Pertama Bunda', 'Pratama', 'Jl. Provinsi KM.226 Desa Damar Indah Kec. Sungai Loban'),
(41, 3, 'Kabupaten Tanah Bumbu', '1260196', 'Klinik Kasih Ibu Satui', 'Pratama', 'Jl. Provinsi KM. 165 RT. 06 No.09 Desa Sungai Danau Kec. Satui'),
(42, 3, 'Kabupaten Tanah Bumbu', '126/195', 'Klinik Mandiri', 'Pratama', 'Jl. Transmigrasi RT.13 RW.04 Desa Kampung Baru Kec. Simpang Empat '),
(43, 3, 'Kabupaten Tanah Bumbu', '126041', 'Klinik Zam - Zam', 'Pratama', 'Jl. Kodeco KM. 1,5 RT.06 Ds. Gunung Antasari Kec. Simpang Empat'),
(44, 3, 'Kabupaten Tanah Bumbu', '1260196', 'Klinik Simpang', 'Pratama', 'Jl. Gawe Sabumi RT.08 Desa Bersujud Kec. Simpang Empat'),
(45, 3, 'Kabupaten Tanah Bumbu', '1260551', 'Klinik Hamdi Medika', 'Utama', 'Jl. Gawe Sabumi RT.07 no.09  Desa Bersujud Kec. Simpang Empat'),
(46, 3, 'Kabupaten Kotabaru', '1260579', 'Klinik Polres', 'Pratama', 'JL,DIPONEGORO'),
(47, 3, 'Kabupaten Kotabaru', '1260580', 'Klinik PT Smart', 'Pratama', 'DESA LANGADAI'),
(48, 3, 'Kabupaten Kotabaru', '1260585', 'Arutmin NPLCT', 'Pratama', 'BERANGAS'),
(49, 3, 'Kabupaten Kotabaru', '1260593', 'Aulia Wibisono', 'Pratama', 'Raya Stagen'),
(50, 3, 'Kabupaten Kotabaru', '1260593', 'Kllinik PT SILO', 'Pratama', 'Sungai Bali'),
(51, 3, 'Kabupaten Kotabaru', '12600619', 'Klinik BP Lanal', 'Pratama', 'Rumdin Lanal');

-- --------------------------------------------------------

--
-- Table structure for table `data_labkes`
--

CREATE TABLE `data_labkes` (
  `idx` int(11) NOT NULL,
  `kabkota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kodelabkes` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namalabkes` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenislabkes` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_labkes`
--

INSERT INTO `data_labkes` (`idx`, `kabkota`, `kodelabkes`, `namalabkes`, `jenislabkes`, `alamat`) VALUES
(3, 'Kota Banjarmasin', '1660061', 'Laboratorium Klinik Prodia Banjarmasin', 'Laboratorium Medis Umum Pratama', 'Jl. A. Yani KM. 3,5 No. 131-133, Kel. Kebun Bunga'),
(4, 'Kota Banjarbaru', '1660058', 'Laboratorium Klinik Panasea', 'Laboratorium Umum Pratama', 'Jl. Panglima Batur Timur, No.14, Kav.6 Banjarbaru Utara Kalimantan Selatan'),
(5, 'Kota Banjarmasin', '1660057', 'UPTD Laboratorium Kesehatan Kota Banjarmasin', 'Laboratorium Kesehatan Masyarakat Utama', 'Jl.Pramuka Komplek Tirta Dharma (PDAM) Km.6 Banjarmasin'),
(6, 'Kota Banjarmasin', '1660056', 'UPTD Laboratorium Kesehatan Kota Banjarmasin', 'Laboratorium Kesehatan Masyarakat dan Lab Medis Khusus', 'Jl.Pramuka Komplek Tirta Dharma (PDAM) Km.6 Banjarmasin'),
(7, 'Dasar', '1660055', 'Lab Klinik Prodia Martapura', 'Laboratorium Medis Umum Pratama', 'Jl. A. Yani KM. 37,5 No. 98D, Desa/Kelurahan Sungai Paring, Kec. Martapura, Kab. Banjar, Provinsi Kalimantan Selatan'),
(8, 'Kabupaten Tanah Bumbu', '1660053', 'Laboratorium Klinik Tirta Medical Centre', 'Laboratorium Medis Umum Pratama', 'Jl. Desa Karang Indah RT.11, Angsana, Tanah Bumbu, Kalimantan Selatan'),
(9, 'Kabupaten Tanah Bumbu', '1660050', 'UPTD Laboratorium Kesehatan Kabupaten Tanah Bumbu', 'Laboratorium Kesehatan Masyarakat dan Lab Medis Khusus', 'Jl. Lokalitbang Kelurahan Gunung Tinggi Kec Batulicin'),
(10, 'Kota Banjarbaru', '1660049', 'Laboratorium Medis Kimia Farma Banjarbaru', 'Laboratorium Medis Umum Pratama', 'Jl. Ahmad Yani KM.34 No.10 Banjarbaru Utara'),
(11, 'Kabupaten Kotabaru', '1660044', 'Laboratorium Medis Klinik Safira Medika', 'Laboratorium Medis Umum Pratama', 'Jl. Silver Gg. Perintis No.100 Kotabaru'),
(12, 'Kabupaten Banjar', '1660029', 'UPT. Labkesda Kabupaten Banjar', 'Laboratorium Kesehatan Masyarakat dan Lab Medis Umum', 'Jl. Pramuka Komplek Pangeran Antasari, Martapura'),
(13, 'Kabupaten Tanah Laut', '1660028', 'UPT. Laboratorium Kesehatan Daerah Kabupaten Tanah', 'Laboratorium Kesehatan Masyarakat Utama', 'Jl. H. Boejasin No.9 Pelaihari, kab. Tanah Laut');

-- --------------------------------------------------------

--
-- Table structure for table `data_pkm`
--

CREATE TABLE `data_pkm` (
  `idx` int(11) NOT NULL,
  `kabkota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kodepkm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namapkm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `statuspkm` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kategori` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pkm`
--

INSERT INTO `data_pkm` (`idx`, `kabkota`, `kodepkm`, `namapkm`, `statuspkm`, `kategori`, `alamat`) VALUES
(36, 'Dasar', '1060630', 'Pekauman', 'Perkotaan', 'Rawat Jalan', 'JI. KS Tubun No. 151, Kec. Banjarmasin Selatan'),
(39, 'Kota Banjarmasin', '106031', 'Kelayan Timur', 'Perkotaan', 'Rawat Jalan', 'Jl. Kelayan B, Komplek 10, Kec. Banjarmasin Selatan'),
(40, 'Kota Banjarmasin', '1060643', 'Pelambuan', 'Perkotaan', 'Rawat Jalan', 'JI. Barito Hulu Rt. 154 No. 6, Kec. Banjarmasin Barat'),
(41, 'Kota Banjarmasin', '1060646', 'Basirih Baru', 'Perkotaan', 'Rawat Jalan', 'JI. Purba Sakti Komplek Permata Sari Rt 26 No 41A, Kec. Banjarmasin Barat'),
(42, 'Kota Banjarmasin', '1060650', 'Teluk Dalam', 'Perkotaan', 'Rawat Jalan', 'JI. Sotoyo S, Kec. Banjarmasin Tengah'),
(43, 'Kabupaten Tapin', '1060532', 'Puskesmas Tapin Utara', 'Perkotaan', 'Rawat Jalan', 'JI. Darussalam No.1 Ds.Rantau Kiwa, Kec. Tapin Utara'),
(44, 'Kabupaten Tapin', '1060526', 'Salam Babaris', 'Pedesaan', 'Rawat Jalan', 'JI. Salam Babaris, Kec. Salam Babaris'),
(45, 'Kabupaten Tapin', '1060528', 'Puskesmas Pandahan', 'Pedesaan', 'Rawat Jalan', 'JI. Hakim Samad Km 9, Kec. Tapin Tengah'),
(46, 'Kabupaten Tapin', '1060534', 'Baringin', 'Pedesaan', 'Rawat Inap', 'JI. Labuhan, Kec. Candi Laras Selatan'),
(47, 'Kabupaten Tapin', '1060535', 'Margasari', 'Pedesaan', 'Rawat Jalan', 'JI. Gusti Libio, Kec. Candi Laras Utara'),
(48, 'Kabupaten Hulu Sungai Selatan', '1060541', 'Angkinang', 'Perdesaan', 'Rawat Inap', 'Ds. Angkinang, Kec. Angkinang'),
(49, 'Kabupaten Hulu Sungai Selatan', '1060547', 'Batang Kulur', 'Perdesaan', 'Rawat Jalan', 'Ds. Batang Kulur Tengah, Kec. Sungai Raya'),
(50, 'Kabupaten Hulu Sungai Selatan', '1060550', 'Kalumpang', 'Perdesaan', 'Rawat Jalan', 'Ds. Kalumpang, Kec. Katumpang'),
(51, 'Kabupaten Hulu Sungai Selatan', '1060543', 'Kandangan', 'Perkotaan', 'Rawat Jalan', 'Ds. Gambah Luar Muka, Kec. Kandangan'),
(52, 'Kabupaten Hulu Sungai Selatan', '1060555', 'Negara', 'Pedesaan', 'Rawat Inap', 'Ds. Tambak Bitin, Kec. Daha Utara'),
(53, 'Kabupaten Hulu Sungai Tengah', '1060559', 'Pagat', 'Perdesaan', 'Rawat Jalan', 'JI. Tanjung  Pura Ds. Pagat, Kec. Batu Benawa'),
(54, 'Kabupaten Hulu Sungai Tengah', '1060561', 'Hantakan', 'Sangat Terpencil', 'Rawat Inap', 'JI. H. Hasan Baseri, Kec. Hantakan'),
(55, 'Kabupaten Hulu Sungai Tengah', '1060562', 'Birayang', 'Perdesaan', 'Rawat Jalan', 'JI. Merdeka  Kel. Birayang, Kec. Batang Alai Selatan'),
(56, 'Kabupaten Hulu Sungai Tengah', '1060566', 'Barabai', 'Perkotaan', 'Rawat Jalan', 'JI. Hevea No. 49 Kel. Barabai Darat, Kec. Barabai'),
(57, 'Kabupaten Hulu Sungai Tengah', '1060568', 'Pantai Hambawang', 'Perdesaan', 'Rawat Inap', 'JI. Merdeka  Kel. Birayang, Kec. Batang Alai Selatan'),
(58, 'Kabupaten Hulu Sungai Utara', 'P6308071201', 'Haur Gading', 'Perdesaan', 'Rawat Jalan', 'Ds. Haur Gading Kec. Haur Gading 71471'),
(59, 'Kabupaten Hulu Sungai Utara', 'P6308010101', 'Alabio', 'Perdesaan', 'Rawat Inap', 'JI. lstirahat  No.43 Alabio, Kec. Sungai Pandan 71455'),
(60, 'Kabupaten Hulu Sungai Utara', 'P6308031201', 'Pasar Sabtu', 'Perdesaan', 'Rawat Jalan', 'Ds. Pasar Sabtu, Kec. Sungai Tabukan 71455'),
(61, 'Kabupaten Hulu Sungai Utara', 'P6308020201', 'Babirik', 'Perdesaan', 'Rawat Inap', 'JI. Tembok  Baru No. 39 Rt Ill Ds. Murung Panti Hllir, Kec. Babirik 71454'),
(62, 'Kabupaten Hulu Sungai Utara', 'P6308010101', 'Danau Panggang', 'Perdesaan', 'Rawat Inap', 'JI. Suka Ramai Rt 3, Kec. Danau Panggang 71453'),
(63, 'Kabupaten Balangan', '1060624', 'Paringin', 'Perkotaan', 'Rawat Jalan', 'JI. Jenderal Basuki Rahmat Rt. 1 Rw. 1, Kec. Paringin'),
(64, 'Kabupaten Balangan', '1060625', 'Paringin Selatan', 'Perkotaan', 'Rawat Jalan', 'JI. Tumenggung Jalil, Muara Pitap 2, Kel. Bt.Paringin, Kec. Paringin Sel.'),
(65, 'Kabupaten Balangan', '1060620', 'Batu Mandi', 'Perdesaan', 'Rawat Jalan', 'JI. Abdul Khair Rt. 1 Rw. 0, Kec. Batu Mandi'),
(66, 'Kabupaten Balangan', '1060619', 'Lampihong', 'Perkotaan', 'Rawat Jalan', 'JI. Raya Lampihong No. 1, Kec. Lampihong'),
(67, 'Kabupaten Balangan', '1060628', 'Halong', 'Perdesaan', 'Rawat Inap', 'JI. Pembangunan  Rt. 5 No. 72 Halong, Kec. Halong'),
(68, 'Kabupaten Barito Kuala', '1060504', 'Tabunganen', 'Terpencil', 'Rawat Inap', 'JI. Kerokan Rt. 06 No. 20 Ds. Tabunganen Kecil, Kec. Tabunganen'),
(69, 'Kabupaten Barito Kuala', '1060510', 'Berangas', 'Perkotaan', 'Rawat Inap', 'Ds. Berangas Timur, Kec. Alalak'),
(70, 'Kabupaten Barito Kuala', '1060511', 'Semangat Dalam', 'Perkotaan', 'Rawat Inap', 'Ds. Semangat Dalam, Kec. Alalak'),
(71, 'Kabupaten Barito Kuala', '1060513', 'Jejangkit', 'Terpencil', 'Rawat Jalan', 'JI. Pendidikan No. 2 Ds. Jejangkit Pasar, Kec. Jejangkit'),
(72, 'Kabupaten Barito Kuala', '1060520', 'Marabahan', 'Perkotaan', 'Rawat Jalan', 'JI. A. Yani No.71  Marabahan Kota, Kec. Marabahan'),
(73, 'Kabupaten Tanah Laut', '1060436', 'Takisung', 'Perdesaan', 'Rawat Jalan', 'Jl. A Yani Ds. Banua Tengah, Kec. Takisung'),
(74, 'Kabupaten Tanah Laut', '1060435', 'Batakan', 'Perdesaan', 'Rawat Jalan', 'Jl. Pariwisata  RT.20, Ds. Batakan, Kec. Panyipatan'),
(75, 'Kabupaten Tanah Laut', '1060443', 'Pelaihari', 'Perkotaan', 'Rawat Jalan', 'Jl.Matah Kec.Karang Taruna , Kec. Pelaihari'),
(76, 'Kabupaten Tanah Laut', '1060437', 'Kurau', 'Perdesaan', 'Rawat Inap', 'Jl. A Yani KM 121 Ds. Simpang Empat Sungai Baru , Kec. Jorong'),
(77, 'Kabupaten Tanah Laut', '1060440', 'Bati - Bati', 'Perdesaan', 'Rawat Jalan', 'Jl. A Yani Km 39, Ds. Padang, Kec. Bati-Bati'),
(78, 'Kabupaten Tanah Bumbu', '1060609', 'Sebamban II', 'Perdesaan', 'Rawat Inap', 'JI. Blok A Ds. Sari Mulya Sebamban, Kec. Sei Loban'),
(79, 'Kabupaten Tanah Bumbu', '1060613', 'Batulicin', 'Perkotaan', 'Rawat Jalan', 'JI. Pemerintahan No.19, Kec. Batu Licin'),
(80, 'Kabupaten Tanah Bumbu', '1060607', 'Sebamban I', 'Perdesaan', 'Rawat Jalan', 'JI. Blok A Ds. Sari Mulya Sebamban, Kec. Sei Loban'),
(81, 'Kabupaten Tanah Bumbu', '1060615', 'Batulicin 1', 'Perdesaan', 'Rawat Jalan', 'JI. Transmigrasi  Km.13,5, Ds. Manunggal, Kec. Karang Bintang'),
(82, 'Kabupaten Tanah Bumbu', '1060605', 'Pagatan', 'Perkotaan', 'Rawat Inap', 'JI. Arif Rahman Hakim No. 68 Ds. Pasar Baru,  Kec. Kusan Hilir'),
(83, 'Kabupaten Kotabaru', '1060458', 'Kotabaru', 'Perkotaan', 'Rawat Jalan', 'Jl. P Indra Kusuma Negara Kel.Kotabaru Hilir, Kec. Pulau Laut Utara'),
(84, 'Kabupaten Kotabaru', 'P6302060201', 'Dirgahayu', 'Perkotaan', 'Rawat Jalan', 'Jl. Yakut, Kec. Pulau Laut Utara'),
(85, 'Kabupaten Kotabaru', '1060460', 'Lontar', 'Perdesaan', 'Rawat Inap', 'Jl. KH. Ahmad Darmawi, kec. Pulau Laut Barat'),
(86, 'Kabupaten Kotabaru', '1060474', 'Tanjung Samalantakan', 'Terpencil', 'Rawat Jalan', 'JI. H.  Kandau,  Kec.  Pamukan Selatan'),
(87, 'Kabupaten Kotabaru', '1060479', 'Sengayam', 'Terpencil', 'Rawat Inap', 'JI. Poros Batu - Tanah Grogot Ds.  Sengayam, Kec.  Pamukan Barat'),
(88, 'Kabupaten Kotabaru', '1071403', 'Marabatuan', 'Sangat Terpencil', 'Rawat Jalan', 'JI. Desa Tanjung  Nyiur, Kec.  Pulau Sembilan');

-- --------------------------------------------------------

--
-- Table structure for table `data_pmdrsp`
--

CREATE TABLE `data_pmdrsp` (
  `idx` int(11) NOT NULL,
  `kabkota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kodepmdrsp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namapmdrsp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pmdrsp`
--

INSERT INTO `data_pmdrsp` (`idx`, `kabkota`, `kodepmdrsp`, `namapmdrsp`, `alamat`) VALUES
(6, 'Kota Banjarmasin', '-', 'dr. H. YULIZAR DARWIS, Sp.KJ, MM', 'Jl. Simpang Gatot Subroto VI No.21 ,Banjarmasin'),
(7, 'Kota Banjarmasin', '-', 'dr. OSCAR NURHADI, Sp.S', 'Jl. Kolonel Sugiono No. 26 Banjarmasin'),
(8, 'Kota Banjarmasin', '-', 'dr. DWIANA SAVITRI, Sp.KK', 'Jl. Kinibalu No.8 RT.38 RW.08, Kel. Teluk Dalam, Banjarmasin'),
(9, 'Kota Banjarmasin', '-', 'dr. DIKARA WIDYANGGA SULFIAN MAULIDY, Sp.PD', 'Jl. Pramuka No. 26 Banjarmasin'),
(10, 'Kabupaten Tapin', '-', 'dr. RISNAWATI, Sp.KK', 'Jln. A. Yani No. 03 RT.03 Kel. Kupang  Rantau'),
(11, 'Kabupaten Tapin', '-', 'dr. ANITA NURAINI, Sp.T.H.T.K.L', 'Jln. Brig. Jend. H. Hasan Basri Kel. Bitahan Kec. Lokpaikat'),
(12, 'Kabupaten Hulu Sungai Selatan', '-', 'drg. Emmaria Siregar, Sp.Perio', 'Jl. Kesehatan, Desa Baluti, HSS'),
(13, 'Kabupaten Hulu Sungai Selatan', '-', 'dr. M. Arief Budi W., Sp.KK.,M.Kes', 'desa hamalau, Hulu Sungai Selatan'),
(14, 'Kabupaten Hulu Sungai Tengah', '-', 'dr. RADEN PANJI SURYA PUTRA, Sp.PD', 'JL. Murakata No. 70, Kec. Barabai, '),
(15, 'Kabupaten Hulu Sungai Tengah', '-', 'dr. FAHRUL BUKHORI, M. Biomed, Sp. PD', 'Praktek Mandiri JL. Keramat Manjang No. 9, Barabai Barat, Kec. Barabai'),
(16, 'Kabupaten Hulu Sungai Tengah', '-', 'dr. IIN TRILISTIYANTI NUGRAHANI, Sp.A', 'JL. Putra Harapan RT 02 RW 01, Matang Ginalon'),
(17, 'Kabupaten Hulu Sungai Utara', '-', 'dr.Ahmad Zaki,SPOG', 'Jln. Bihman Villa Kel.Antasari Amuntai'),
(18, 'Kabupaten Balangan', '-', 'dr. Akhmad Nurdani, Sp.PD', 'Apotik Alazka Farma');

-- --------------------------------------------------------

--
-- Table structure for table `data_pmdrumum`
--

CREATE TABLE `data_pmdrumum` (
  `idx` int(11) NOT NULL,
  `kabkota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kodepmdrumum` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namapmdrumum` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_pmdrumum`
--

INSERT INTO `data_pmdrumum` (`idx`, `kabkota`, `kodepmdrumum`, `namapmdrumum`, `alamat`) VALUES
(3, 'Kabupaten Kotabaru', '-', 'dr. Eka Putra Anto', 'Jl. Merak RT.05/001 Desa Mulyoharjo, Kec. Pamukan Utara'),
(4, 'Kabupaten Kotabaru', '-', 'dr. Elsyah Triani Dewi', 'Jl. Raya Stagen Kotabaru'),
(5, 'Kabupaten Kotabaru', '-', 'dr. Siti Aisyah', 'Desa Dirgahayu, Kotabaru'),
(6, 'Kabupaten Kotabaru', '-', 'dr. Strata Pertiwi', 'Desa Semayap'),
(7, 'Kabupaten Kotabaru', '-', 'dr. Djoko Santoso', 'Kotabaru Tengah, Kabupaten Kotabaru'),
(8, 'Kabupaten Tanah Bumbu', '-', 'dr. Muhammad Topan Widyanto', 'Jl. Transmigrasi, Ds. Giri Mulya Rt/Rw 06/01, Kec Kuranji'),
(9, 'Kabupaten Tanah Bumbu', '-', 'dr. Josua Prima Identa Karo-Karo', 'Jl. Transmigrasi Km. 4, Ds. Manunggal, kec. Karang Bintang'),
(10, 'Kabupaten Tanah Bumbu', '-', 'dr. Sheila Eka Elvaretta', 'Jl. Rano Welom RT.003 Desa Barokah'),
(11, 'Kabupaten Tanah Bumbu', '-', 'dr. Rezky Mawarni', 'Jl. Poros Sekapuk II RT.007 RW 003 Desa Sekapuk'),
(12, 'Kabupaten Kotabaru', '-', 'dr. Wisnu Drajat Dyantoro, MM.,M.Kes', 'Jl. A.Yani Kota Pagatan RT.05'),
(13, 'Kabupaten Tanah Laut', '-', 'dr.Irwan Setiawan Syah', 'Desa Panyipan, Tanah Laut'),
(14, 'Kabupaten Tanah Laut', '-', 'dr.Jauhari Rahmani', 'Desa Jorong, Kabupaten Pelaihari'),
(15, 'Kabupaten Tanah Laut', '-', 'dr. Toto Tri Hartanto', 'Desa Durian Bungkuk'),
(16, 'Kabupaten Tanah Laut', '-', 'dr. Adi Hartono', 'Kecamatan Asam - Asam'),
(17, 'Kabupaten Tanah Laut', '-', 'dr. H.Aji Supian Nor', 'Desa Karang Taruna'),
(18, 'Kabupaten Balangan', '-', 'dr. Muhammad Khairan Naomi', 'Desa Kusambi Hulu No.52 RT. 2 Kec. Lampihong'),
(19, 'Kabupaten Balangan', '-', 'dr. Aulia Asmi Setiawaty', 'Jl. Basuki Rahmat Ke. Paringin'),
(20, 'Kabupaten Balangan', '-', 'dr. Aida Musyrifah ', 'Jl. Setia Karsa No. 134 Mungkur Uyam'),
(21, 'Kabupaten Balangan', '-', 'dr. Jesica Cristin', 'Jalan Raya Lampihong KM 2.0'),
(22, 'Kabupaten Balangan', '-', 'dr. Rezeki Permanasari', 'dr. Rezeki Permanasari'),
(23, 'Kabupaten Hulu Sungai Utara', '-', 'dr. Andika D Praja', 'Jln. H. Ali Desa Hulu Pasar Amuntai'),
(24, 'Kabupaten Hulu Sungai Utara', '-', 'dr. Akhmad Taufik', 'Jln.Empu Jatmika Kel.Sungai Malang Amuntai'),
(25, 'Kabupaten Hulu Sungai Utara', '-', 'dr. Ali Zainal Abidin', 'Jln.Brigjen Hasan Basri Desa Kota Raden Hilir'),
(26, 'Kabupaten Hulu Sungai Utara', '-', 'dr. Marisa Vasa', 'Jln.H.Sabran Effendi '),
(27, 'Kabupaten Hulu Sungai Utara', '-', 'dr. Muhammad Hendi Saputra', 'Jln.Pambalah Batung Kel.Paliwara Amuntai'),
(28, 'Kabupaten Hulu Sungai Tengah', '-', 'dr. Aminah', 'JL. Brigjen H. Hasan Baseri RT 011 RW 004 Ds. Bukat'),
(29, 'Kabupaten Hulu Sungai Tengah', '-', 'dr. Muhammad Rizky Fahdila', 'Komplek Grand Rizky Mandingin Blok F No. 7 '),
(30, 'Kabupaten Hulu Sungai Tengah', '-', 'drg. Hermawan Sutanto', 'JL. Murakata RT 06 RW 02, Kel. Bukat'),
(31, 'Kabupaten Hulu Sungai Tengah', '-', 'dr. Desfi Delfiana Fahmi', 'Praktek Mandiri JL. Sarigading RT 06 Barabai Utara, Kec. Barabai'),
(32, 'Kabupaten Hulu Sungai Tengah', '-', 'dr. Erni Nurhayati Anggro', 'Praktek Mandiri JL. Brigjen H Hasan Baseri No. 27 RT 03, Kel. Bukat, '),
(33, 'Kabupaten Hulu Sungai Tengah', '-', 'dr. Raden Panji Surya Putra, Sp.PD', 'JL. Murakata No. 70, Kec. Barabai, '),
(34, 'Kabupaten Hulu Sungai Selatan', '-', 'dr. Hartono Tengguno', 'Jl. Musyawarah No. 30 Kandangan Kab. HSS'),
(35, 'Kabupaten Hulu Sungai Selatan', '-', 'dr. Arif Kun Muhandis', 'Jl. Panglima Batur NO.82. Kandangan'),
(36, 'Kabupaten Hulu Sungai Selatan', '-', 'dr. Zaini Fajrin', 'Desa Tumbukan Banyu, Kecamatan Daha Selatan'),
(37, 'Kabupaten Hulu Sungai Selatan', '-', 'dr. Hj. Sri Rahmi Rahayu', 'Jl.Tambak Bitin No.19,RT.04 RW.02 Desa Tambak Bitin Kec.Daha Utara Kab.HSS'),
(38, 'Kabupaten Hulu Sungai Selatan', '-', 'dr. Erdania Devianti', 'jl.Letjend Soeprapto No.21 RT.11 RW 05 Kelurahan Kandangan Kota'),
(39, 'Kabupaten Tapin', '-', 'dr. Ade Riza Widyanti', 'Jln. Brigjen. H.Hassan Basry KM.3 Rantau'),
(40, 'Kabupaten Tapin', '-', 'dr. Arie Restyawan', 'Jl. Gubernur H.A Sulaiman Kel. Rantau Kiwa Kec. Tapin Utara'),
(41, 'Kabupaten Tapin', '-', 'dr. Diana Bakti', 'Jln. Tasan Panyi No. 19 Kel. Rantau Kanan'),
(42, 'Kabupaten Tapin', '-', 'dr. Fiqhiyatun Perdani', 'Klinik PTP Nusantara XIII (Persero) Kebun Tambarangan'),
(43, 'Kabupaten Tapin', '-', 'dr. Muhammad Ajib Nuzula', 'Ds. Baringin A Kec. CLS Kab. Tapin'),
(44, 'Kota Banjarmasin', '-', 'dr. Asti Rahmita Putri', 'Jl. Perdagangan Komplek HKSN Permai Blok 9B No.446 Banjarmasin'),
(45, 'Kota Banjarmasin', '-', 'dr. Septania Gunawa', 'Jl. Manggis No.103 Banjarmasin'),
(46, 'Kota Banjarmasin', '-', 'dr. Muthma Innah', 'Jl. Kolonel Sugiono No. 48 RT.03 Kel. Pekapuran Laut, Banjarmasin'),
(47, 'Kota Banjarmasin', '-', 'dr. Dian Permata Hariati', 'Jl. Gerilya Komplek Graha Mahatama Raya 1 No. 3 Banjarmasin'),
(48, 'Kota Banjarmasin', '-', 'dr. Hj. Rosally Gunawan', 'Jl. Manggis No. 15 RT.012 Banjarmasin');

-- --------------------------------------------------------

--
-- Table structure for table `data_rumahsakit`
--

CREATE TABLE `data_rumahsakit` (
  `idx` int(11) NOT NULL,
  `kabkota` varchar(50) NOT NULL,
  `koderumah` varchar(30) NOT NULL,
  `namarumah` varchar(100) NOT NULL,
  `kategorirumah` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_rumahsakit`
--

INSERT INTO `data_rumahsakit` (`idx`, `kabkota`, `koderumah`, `namarumah`, `kategorirumah`, `alamat`) VALUES
(2, 'Kabupaten Tanah Laut', '6301013', 'RS Umum Daerah H. Boejasin Pelaihari', 'Rumah Sakit Umum', 'Tanah Laut');

-- --------------------------------------------------------

--
-- Table structure for table `data_utd`
--

CREATE TABLE `data_utd` (
  `idx` int(11) NOT NULL,
  `kabkota` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kodeutd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `namautd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenisutd` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_utd`
--

INSERT INTO `data_utd` (`idx`, `kabkota`, `kodeutd`, `namautd`, `jenisutd`, `alamat`) VALUES
(2, 'Kota Banjarmasin', '1560037', 'Unit Donor Darah Palang Merah Indonesia Kota Banja', 'UTD Kelas Madya', 'Jl. S. Parman No.14'),
(3, 'Kota Banjarbaru', '1560017', 'UTD RS Daerah Idaman Kota Banjarbaru', 'UTD Kelas Pratama', 'Jl. Trikora No.115,'),
(4, 'Kabupaten Banjar', '1560011', 'Unit Donor Darah PMI Kabupaten Banjar', 'UTD Kelas Pratama', 'JL. MENTERI EMPAT RT.04'),
(5, 'Kabupaten Tapin', '1560008', 'UTD RSUD Datu Sanggul Rantau', 'UTD Kelas Pratama', 'Jl. Tarantang, Rangda Malingkung, Kec. Tapin Utara, Kabupaten Tapin, Kalimantan Selatan 71114'),
(6, 'Kabupaten Hulu Sungai Selatan', '1560005', 'Unit Donor Darah PMI Kabupaten Hulu Sungai Selatan', 'UTD Kelas Pratama', 'JL Jend .Sudirman No.01'),
(7, 'Kabupaten Hulu Sungai Tengah', '1560002', 'Unit Transfusi Darah Rumah Sakit H. Damanhuri Bara', 'UTD Kelas Pratama', 'Jl. Murakata No.4, Barabai Bar., Kec. Barabai, Kabupaten Hulu Sungai Tengah, Kalimantan Selatan 71314'),
(9, 'Kabupaten Balangan', '1560003', 'Unit Transfusi Darah Rumah Sakit Balangan', 'UTD Kelas Pratama', 'Jl. Lingkar Timur No.KM. 1.7, Batu Piring, Paringin Sel., Kabupaten Balangan, Kalimantan Selatan 71612'),
(10, 'Kabupaten Tabalong', '1560007', 'UTD PMI Kabupaten Tabalong', 'UTD Kelas Pratama', 'Jl. Ir. PH. Moch. Noor, Pembataan, Kec. Murung Pudak, Kabupaten Tabalong, Kalimantan Selatan 71571'),
(11, 'Kabupaten Tabalong', '1560012', 'Unit Transfusi Darah Rumah Sakit H. Badaruddin Kas', 'UTD Kelas Pratama', 'Jl. Tj. Baru, Maburai, Kec. Murung Pudak, Kabupaten Tabalong, Kalimantan Selatan 71571'),
(12, 'Kabupaten Barito Kuala', '1560037', 'Unit Transfusi Darah Rumah Sakit Daerah Umum  H. A', 'UTD Kelas Pratama', 'Jl. Dr. Sutomo No.28, Pasiran, Kec. Singkawang Bar., Kota Singkawang, Kalimantan Barat 79123'),
(13, 'Kabupaten Tanah Laut', '1560027', 'UTD PMI Kabupaten Tanah Laut', 'UTD Kelas Pratama', 'Jl. H. Boejasin, Pelaihari, Kabupaten Tanah Laut,  Kalimantan Selatan 70815'),
(14, 'Kabupaten Hulu Sungai Utara', '1560004', 'Unit Transfusi Darah Rumah Sakit Umum Daerah Pamba', 'UTD Kelas Pratama', 'Jalan Jenderal Basuki Rahmat No.1, Antasari, Amuntai Tengah, Murung Sari, Kec. Amuntai Tengah, Kabupaten Hulu Sungai Utara, Kalimantan Selatan 71414');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Rumah Sakit'),
(2, 'Puskesmas'),
(3, 'Klinik'),
(4, 'Labkes');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `role`) VALUES
(1, 'Pimpinan'),
(2, 'Operator Dinkes Provinsi'),
(3, 'Operator Dinkes Kabkota');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `password` varchar(30) NOT NULL,
  `id_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `id_role`) VALUES
(22, 'admin', 'Dinkes Provinsi', 'admin', 2),
(23, 'pimpinan', 'Pimpinan', 'pimpinan', 1),
(31, 'dinkeskabkota', 'Dinkes Kabkota', 'dinkeskabkota', 3);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_aklinik`
-- (See below for the actual view)
--
CREATE TABLE `view_aklinik` (
`id_ak` int(10)
,`nama_kategori` varchar(50)
,`kabkota` varchar(50)
,`kode` varchar(30)
,`nama` varchar(100)
,`jenisklinik` varchar(50)
,`alamat` varchar(255)
,`jenis_akreditasi` varchar(30)
,`tahun` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_alabkes`
-- (See below for the actual view)
--
CREATE TABLE `view_alabkes` (
`id_ak` int(10)
,`nama_kategori` varchar(50)
,`kabkota` varchar(50)
,`kode` varchar(30)
,`nama` varchar(100)
,`alamat` varchar(255)
,`jenis_akreditasi` varchar(30)
,`tahun` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_apuskes`
-- (See below for the actual view)
--
CREATE TABLE `view_apuskes` (
`id_ak` int(10)
,`nama_kategori` varchar(50)
,`kabkota` varchar(50)
,`kode` varchar(30)
,`nama` varchar(100)
,`alamat` varchar(255)
,`jenis_akreditasi` varchar(30)
,`tahun` varchar(30)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_arumah`
-- (See below for the actual view)
--
CREATE TABLE `view_arumah` (
`id_ak` int(10)
,`nama_kategori` varchar(50)
,`kabkota` varchar(50)
,`kode` varchar(30)
,`nama` varchar(100)
,`alamat` varchar(100)
,`jenis_akreditasi` varchar(30)
,`tahun` varchar(30)
);

-- --------------------------------------------------------

--
-- Structure for view `view_aklinik`
--
DROP TABLE IF EXISTS `view_aklinik`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_aklinik`  AS   (select `a`.`id_ak` AS `id_ak`,`c`.`nama_kategori` AS `nama_kategori`,`b`.`kabkota` AS `kabkota`,`a`.`kode` AS `kode`,`a`.`nama` AS `nama`,`b`.`jenisklinik` AS `jenisklinik`,`b`.`alamat` AS `alamat`,`a`.`jenis_akreditasi` AS `jenis_akreditasi`,`a`.`tahun` AS `tahun` from ((`akreditasi` `a` join `data_klinik` `b`) join `kategori` `c`) where `a`.`nama` = `b`.`namaklinik` and `a`.`id_kategori` = `c`.`id_kategori`)  ;

-- --------------------------------------------------------

--
-- Structure for view `view_alabkes`
--
DROP TABLE IF EXISTS `view_alabkes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_alabkes`  AS   (select `a`.`id_ak` AS `id_ak`,`c`.`nama_kategori` AS `nama_kategori`,`b`.`kabkota` AS `kabkota`,`a`.`kode` AS `kode`,`a`.`nama` AS `nama`,`b`.`alamat` AS `alamat`,`a`.`jenis_akreditasi` AS `jenis_akreditasi`,`a`.`tahun` AS `tahun` from ((`akreditasi` `a` join `data_labkes` `b`) join `kategori` `c`) where `a`.`nama` = `b`.`namalabkes` and `a`.`id_kategori` = `c`.`id_kategori`)  ;

-- --------------------------------------------------------

--
-- Structure for view `view_apuskes`
--
DROP TABLE IF EXISTS `view_apuskes`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_apuskes`  AS   (select `a`.`id_ak` AS `id_ak`,`c`.`nama_kategori` AS `nama_kategori`,`b`.`kabkota` AS `kabkota`,`a`.`kode` AS `kode`,`a`.`nama` AS `nama`,`b`.`alamat` AS `alamat`,`a`.`jenis_akreditasi` AS `jenis_akreditasi`,`a`.`tahun` AS `tahun` from ((`akreditasi` `a` join `data_pkm` `b`) join `kategori` `c`) where `a`.`nama` = `b`.`namapkm` and `a`.`id_kategori` = `c`.`id_kategori`)  ;

-- --------------------------------------------------------

--
-- Structure for view `view_arumah`
--
DROP TABLE IF EXISTS `view_arumah`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_arumah`  AS   (select `a`.`id_ak` AS `id_ak`,`c`.`nama_kategori` AS `nama_kategori`,`b`.`kabkota` AS `kabkota`,`a`.`kode` AS `kode`,`a`.`nama` AS `nama`,`b`.`alamat` AS `alamat`,`a`.`jenis_akreditasi` AS `jenis_akreditasi`,`a`.`tahun` AS `tahun` from ((`akreditasi` `a` join `data_rumahsakit` `b`) join `kategori` `c`) where `a`.`nama` = `b`.`namarumah` and `a`.`id_kategori` = `c`.`id_kategori`)  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD PRIMARY KEY (`id_ak`) USING BTREE,
  ADD KEY `id_kategori_2` (`id_kategori`);

--
-- Indexes for table `data_kabkota`
--
ALTER TABLE `data_kabkota`
  ADD PRIMARY KEY (`id_kabkota`),
  ADD KEY `kabkota` (`kabkota`);

--
-- Indexes for table `data_klinik`
--
ALTER TABLE `data_klinik`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `kabkota` (`kabkota`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `data_labkes`
--
ALTER TABLE `data_labkes`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `kabkota` (`kabkota`),
  ADD KEY `kabkota_2` (`kabkota`),
  ADD KEY `kabkota_3` (`kabkota`),
  ADD KEY `kabkota_4` (`kabkota`);

--
-- Indexes for table `data_pkm`
--
ALTER TABLE `data_pkm`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `kabkota` (`kabkota`);

--
-- Indexes for table `data_pmdrsp`
--
ALTER TABLE `data_pmdrsp`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `kabkota` (`kabkota`);

--
-- Indexes for table `data_pmdrumum`
--
ALTER TABLE `data_pmdrumum`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `kabkota` (`kabkota`);

--
-- Indexes for table `data_rumahsakit`
--
ALTER TABLE `data_rumahsakit`
  ADD PRIMARY KEY (`idx`);

--
-- Indexes for table `data_utd`
--
ALTER TABLE `data_utd`
  ADD PRIMARY KEY (`idx`),
  ADD KEY `kabkota` (`kabkota`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`),
  ADD KEY `id_role` (`id_role`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akreditasi`
--
ALTER TABLE `akreditasi`
  MODIFY `id_ak` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `data_kabkota`
--
ALTER TABLE `data_kabkota`
  MODIFY `id_kabkota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `data_klinik`
--
ALTER TABLE `data_klinik`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `data_labkes`
--
ALTER TABLE `data_labkes`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `data_pkm`
--
ALTER TABLE `data_pkm`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `data_pmdrsp`
--
ALTER TABLE `data_pmdrsp`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `data_pmdrumum`
--
ALTER TABLE `data_pmdrumum`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `data_rumahsakit`
--
ALTER TABLE `data_rumahsakit`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `data_utd`
--
ALTER TABLE `data_utd`
  MODIFY `idx` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `akreditasi`
--
ALTER TABLE `akreditasi`
  ADD CONSTRAINT `akreditasi_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_klinik`
--
ALTER TABLE `data_klinik`
  ADD CONSTRAINT `data_klinik_ibfk_1` FOREIGN KEY (`kabkota`) REFERENCES `data_kabkota` (`kabkota`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `data_klinik_ibfk_2` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `data_pkm`
--
ALTER TABLE `data_pkm`
  ADD CONSTRAINT `data_pkm_ibfk_1` FOREIGN KEY (`kabkota`) REFERENCES `data_kabkota` (`kabkota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pmdrsp`
--
ALTER TABLE `data_pmdrsp`
  ADD CONSTRAINT `data_pmdrsp_ibfk_1` FOREIGN KEY (`kabkota`) REFERENCES `data_kabkota` (`kabkota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `data_pmdrumum`
--
ALTER TABLE `data_pmdrumum`
  ADD CONSTRAINT `data_pmdrumum_ibfk_1` FOREIGN KEY (`kabkota`) REFERENCES `data_kabkota` (`kabkota`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`id_role`) REFERENCES `role` (`id_role`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
