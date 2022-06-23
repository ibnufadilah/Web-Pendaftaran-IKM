-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2019 at 12:49 AM
-- Server version: 10.1.37-MariaDB
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
-- Database: `ikm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
('admin_', 'Ibnu Fadilah', 'ibnu', '123'),
('admin_1', 'Chyta Rehulina', 'chyta', '123'),
('admin_2', 'Gilang Haikal', 'Gilang', '123');

-- --------------------------------------------------------

--
-- Table structure for table `ikm`
--

CREATE TABLE `ikm` (
  `id_ikm` varchar(50) NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `nama_ikm` varchar(100) NOT NULL,
  `penanggung_jawab` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `jenis_produksi` varchar(100) NOT NULL,
  `bahan_baku` varchar(100) NOT NULL,
  `tahun` varchar(50) NOT NULL,
  `surat_keterangan_kelurahan` text NOT NULL,
  `nib` text NOT NULL,
  `siup_iui` text NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ikm`
--

INSERT INTO `ikm` (`id_ikm`, `id_user`, `nama_ikm`, `penanggung_jawab`, `alamat`, `jenis_produksi`, `bahan_baku`, `tahun`, `surat_keterangan_kelurahan`, `nib`, `siup_iui`, `status`) VALUES
('ikm_001', 'user_001', 'CV. JAVAFOODA INDONESIA', 'Iwan Widoyoko', 'Vila Bogor Indah I Blok F3 No. 36 Cipaku', 'Minuman aneka rasa', 'Tempe', '2018', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'IKM dibina oleh Disperindag'),
('ikm_002', 'user_002', 'CV. Bandoe', 'Dida Sadyaningsih', 'Komp. Haji Jl. Jarona A2 No. 14 Cimahpar', 'Roti dan Kue Manis', 'terigu, telur, gula, coklat', '2018', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'IKM dibina oleh Disperindag'),
('ikm_003', 'user_003', 'CV Nutrima Sehat Alami', 'Mahani', 'JL Kavling Panorama 5 No 85 Rt 05  Sindang Barang', 'Madu', 'Madu', '2018', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_004', 'user_004', 'CV. Hazwa Dinar Abadi', 'Widy Yuzianti', 'Blok K1 No. 1 Taman Cimanggu Kedung Waringin', 'Manisan Buah', 'Kolang Kaling', '2017', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_005', 'user_005', 'Poetris Cookies', 'Lela Kurnia Putri', 'Bogor Raya Permai Blok FC6 No. 10', 'Aneka Abon', 'ayam', '2017', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_006', 'user_006', 'Bakoel', 'Ridwan Dhani Renuat', 'Perum Kiara Residence Blok C8 No. 3 Curug', 'Anekan Ikan Kering', 'Ikan Teri, Garam', '2017', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_007', 'user_007', 'Kudapan Mak Amin', 'Yunita Aryani', 'Bogor Raya Permai Blok FD III No. 6 Curug', 'Empek - empek', 'Tepung Tapioka, ikan tenggiri', '2017', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_008', 'user_008', 'PT. Anggabaya Adi Perkasa', 'Lisnawati', 'Kp. Nagrog RT 001/009 Pamoyanan', 'Manisan Buah', 'buah-buahan', '2018', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_009', 'user_009', ' MaUchie', 'Yusi Susanti', 'Perumahan Kebun Raya Jl. Jati Blok B7 No. 21 RT 003/006 Pamoyanan', 'Bawang Goreng', 'bawang merah, bawang putih', '2016', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_010', 'user_010', 'Teh Neng', 'Sri Nurmulyanti', 'Babakan Cimahpar RT 05 RW 09 No. 130 Cimaphar', 'Bawang Goreng', 'bawang merah, bawang putih', '2016', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_011', 'user_011', 'PT. Nutri Palma Nabati', 'Darmono Taniwiryono', 'Baranangsiang Indah Blok C5 No. 16 RT 003/005 Katulampa', 'Minyak Sawit, Minyak Goreng, Minyak Sayur', 'kelapa, kelapa sawit', '2016', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_012', 'user_012', 'UD. Berlian', 'Sulianti Gusanto', 'Jl. Sukaraja No. 238 Ciluar', 'Tepung atau Teerigu dan sejenisnya', 'terigu', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_013', 'user_013', 'Nila Harry Bakery', 'Nila Yurnalia', 'Jl. Bubulak No. 69 RT 02/01 Kebon Pedes', 'Roti dan Kue Manis', 'tepung, coklat, keju,gula', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_014', 'user_014', 'Unis  Gluten Free', 'Farid Hasan Baktir', 'Jl. Sudirman No. 37B Sempur', 'Roti dan Kue Manis', 'tepung, coklat, keju, gula, mentega', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_015', 'user_015', 'Cecile Bakery', 'Sesilia Wulandari', 'BNR Arga Nirwana Blok 5 No. 10', 'Roti dan Kue Manis', 'tepung, mentega, ragi', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_016', 'user_016', 'PT. Amelian Aura Sinergi', 'Amelian Sari', 'Bukit Cimanggu City Blok T3 No. 9 Cibadak', 'Roti dan Kue Manis', 'terigu, telur, gula, coklat,ragi,susu', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_017', 'user_017', 'Bandeng Prajurit', 'Nur Kosim', 'Komplek Griya Wanakaya Permai Blok H1 No. 5 RT 03 RW 12 Bubulak', 'Makanan Olahan Ikan', 'ikan bandeng', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_018', 'user_018', 'Ocani', 'Any Mahardhiany', 'Villa Citra Bantarjati Blok F1 No. 1 Tegal Gundil', 'Makanan Olahan Ikan', 'ikan cakalang', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_019', 'user_019', 'Sukajadi', 'Jojon Suheman', 'Gg. Sukajadi RT 04/10 Bondongan', 'Empek - empek', 'Tepung Tapioka, ikan tenggiri', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_020', 'user_020', 'Samara Internasional', 'J. Shodiq', 'Jl. Johar 3 RT 002/004 Kedung Waringin', 'Minyak Sawit, Minyak Goreng, Minyak Sayur', 'kelapa', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'Data Menunggu Konfirmasi'),
('ikm_021', 'user_021', 'Capucino Cinau', 'Ibnu Fadilah', 'kp. kelapa ds.rawa panjang rt 05 rw 02', 'Minuman aneka rasa', 'kopi, susu, cincau', '', 'surat kelurahan.jpg', 'nib.jpg', 'iui.jpg', 'IKM dibina oleh Disperindag');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produksi`
--

CREATE TABLE `jenis_produksi` (
  `id_produksi` varchar(50) NOT NULL,
  `jenis_produksi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis_produksi`
--

INSERT INTO `jenis_produksi` (`id_produksi`, `jenis_produksi`) VALUES
('produksi_001', 'Roti dan Kue Manis'),
('produksi_002', 'Cireng'),
('produksi_003', 'Keripik'),
('produksi_004', 'Susu'),
('produksi_006', 'Aneka Abon'),
('produksi_007', 'Seblak Instan'),
('produksi_008', 'Anekan Ikan Kering'),
('produksi_009', 'Bawang Goreng'),
('produksi_010', 'Tepung atau Teerigu dan sejenisnya'),
('produksi_011', 'Empek - empek'),
('produksi_012', 'Minyak Sawit, Minyak Goreng, Minyak Sayur'),
('produksi_013', 'Makanan Olahan Ikan'),
('produksi_014', 'Minuman aneka rasa');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(10) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL,
  `nik` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `npwp` int(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `nik`, `email`, `password`, `npwp`, `jenis_kelamin`, `alamat`) VALUES
('user_001', 'Iwan Widoyoko', 2147483647, 'iwanwidoyoko@gmail.com', '123', 76447467, 'laki - laki', 'Vila Bogor Indah I Blok F3 No. 36  Cipaku'),
('user_002', 'Dida Sadyaningsih', 2147483647, 'didasadyaningshih@gmail.com', '123', 21725182, 'laki - laki', 'Komp. Haji Jl. Jarona A2 No. 14 Cimahpar'),
('user_003', 'Mahani', 2147483647, 'mahani11@gmail.com', '123', 8648291, 'Perempuan', 'JL Kavling Panorama 5 No 85 Rt 05  Sindang Barang'),
('user_004', 'Widy Yuzianti', 2147483647, 'widy_yuzi@gmail.com', '123', 72647281, 'Perempuan', 'Blok K1 No. 1 Taman Cimanggu Kedung Waringin'),
('user_005', 'Lela Kurnia Putri', 2147483647, 'lelaputri@gmail.com', '123', 4242147, 'Perempuan', 'Bogor Raya Permai Blok FC6 No. 10'),
('user_006', 'Ridwan Dhani Renuat', 2147483647, 'ridwan_dhani@gmail.com', '123', 2414124, 'laki - laki', 'Perum Kiara Residence Blok C8 No. 3 Curug'),
('user_007', 'Yunita Aryani', 2147483647, 'yunita@gmail.com', '123', 274172, 'Perempuan', 'Bogor Raya Permai Blok FD III No. 6 Curug'),
('user_008', 'Lisnawati', 2147483647, 'lisna234@gmail.com', '123', 4716248, 'Perempuan', 'Kp. Nagrog RT 001/009 Pamoyanan'),
('user_009', 'Yusi Susanti', 2147483647, 'yusi_susanti@gmail.com', '123', 21482174, 'Perempuan', 'Perumahan Kebun Raya Jl. Jati Blok B7 No. 21 RT 003/006 Pamoyanan'),
('user_010', 'Sri Nurmulyanti', 2147483647, 'sri_762@gmail.com', '123', 2412928, 'Perempuan', 'Babakan Cimahpar RT 05 RW 09 No. 130 Cimaphar'),
('user_011', 'Darmono Taniwiryono', 2147483647, 'darmono_tan@gmail.com', '123', 214948, 'laki - laki', 'Baranangsiang Indah Blok C5 No. 16 RT 003/005 Katulampa'),
('user_012', 'Sulianti Gusanto', 2147483647, 'gusanto_suli@gmail.com', '123', 214125, 'Perempuan', 'Jl. Sukaraja No. 238 Ciluar'),
('user_013', 'Nila Yurnalia', 2147483647, 'nilayun@gmail.com', '123', 8789792, 'Perempuan', 'Jl. Bubulak No. 69 RT 02/01 Kebon Pedes'),
('user_014', 'Farid Hasan Baktir', 2147483647, 'faridhasan12@gmail.com', '123', 7624899, 'laki - laki', 'Jl. Sudirman No. 37B Sempur'),
('user_015', 'Sesilia Wulandari', 2147483647, 'sesildari@gmail.com', '123', 124689, 'Perempuan', 'BNR Arga Nirwana Blok 5 No. 10'),
('user_016', 'Amelian Sari', 2147483647, 'amelia_sari@gmail.com', '123', 2145112, 'Perempuan', 'Bukit Cimanggu City Blok T3 No. 9 Cibadak'),
('user_017', 'Nur Kosim', 2147483647, 'kosim_bandeng@gmail.com', '123', 2341241, 'laki - laki', 'Komplek Griya Wanakaya Permai Blok H1 No. 5 RT 03 RW 12 Bubulak'),
('user_018', 'Any Mahardhiany', 2147483647, 'anydhiany@gmail.com', '123', 246278, 'Perempuan', 'Villa Citra Bantarjati Blok F1 No. 1 Tegal Gundil'),
('user_019', 'Jojon Suheman', 2147483647, 'jojon_546@gmail.com', '123', 21767624, 'laki - laki', 'Gg. Sukajadi RT 04/10 Bondongan'),
('user_020', 'J. Shodiq', 2147483647, 'shodiqqq@gmail.com', '123', 46216987, 'laki - laki', 'Jl. Johar 3 RT 002/004 Kedung Waringin'),
('user_021', 'ibnu fadilah', 2147483647, 'ibnufadilah07@gmail.com', '123', 214788, 'laki - laki', ''),
('user_022', 'ewf', 0, '', '', 0, '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `ikm`
--
ALTER TABLE `ikm`
  ADD PRIMARY KEY (`id_ikm`);

--
-- Indexes for table `jenis_produksi`
--
ALTER TABLE `jenis_produksi`
  ADD PRIMARY KEY (`id_produksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
