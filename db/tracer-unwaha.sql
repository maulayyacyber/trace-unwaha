-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 16, 2016 at 06:44 
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer-unwaha`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_trace`
--

CREATE TABLE `tbl_trace` (
  `id_register` int(225) NOT NULL,
  `prodi` varchar(100) NOT NULL,
  `nim` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tahun_lulus` varchar(50) NOT NULL,
  `no_hp` int(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `status_kerja` varchar(225) NOT NULL,
  `menunggu_kerja` int(225) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `bentuk_perusahaan` varchar(100) NOT NULL,
  `bidang_pekerjaanIT` varchar(100) NOT NULL,
  `bidang_pekerjaannonIT` varchar(100) NOT NULL,
  `jabatan_pertama` varchar(100) NOT NULL,
  `income_pertama` varchar(100) NOT NULL,
  `jenis_perusahaan` varchar(100) NOT NULL,
  `bidang_perusahaan` varchar(100) NOT NULL,
  `waktu_mendirikan` varchar(100) NOT NULL,
  `jumlah_karyawan` varchar(255) NOT NULL,
  `aset` varchar(255) NOT NULL,
  `kesulitan_pertama` varchar(100) NOT NULL,
  `kemampuan` varchar(100) NOT NULL,
  `kurikulum` varchar(100) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_trace`
--

INSERT INTO `tbl_trace` (`id_register`, `prodi`, `nim`, `nama`, `tahun_lulus`, `no_hp`, `email`, `alamat`, `status_kerja`, `menunggu_kerja`, `nama_perusahaan`, `bentuk_perusahaan`, `bidang_pekerjaanIT`, `bidang_pekerjaannonIT`, `jabatan_pertama`, `income_pertama`, `jenis_perusahaan`, `bidang_perusahaan`, `waktu_mendirikan`, `jumlah_karyawan`, `aset`, `kesulitan_pertama`, `kemampuan`, `kurikulum`, `saran`) VALUES
(2, '0204', 1402040424, 'Fika Ridaul Maulayya', '0000-00-00', 2147483647, 'ridaulmaulayya@gmail.com', 'demak', 'Test Status Kerja C', 0, '', '', '', '', '', '', '', '', '', '', '', '', 'Kemampuan terapan/lapangan', 'baik kok :pvsv', 'baik kok :v'),
(4, '0204', 1402040454, 'Faisal Mahadi', '08/27/2016', 2147483647, 'faisal@elek.com', 'jombang', 'b', 0, '', '', '', '', '', '', 'IT engineer', 'IT kok -_-', 'sue wesan', '110', '1200000 jt', 'ngeri', 'Kemampuan keahlian', 'sv', 'sfsf'),
(7, '0204', 1402040428, 'Abdul Kahfi', '08/29/2016', 2147483647, 'kahfi@elek.com', 'jombang', 'a', 12, 'CV afindo', 'bentuk perusahaan isian lainnya', 'Programmer ', 'BANK', 'programmer', '> 3 juta', '', '', '', '', '', 'mudah kok :p', 'Kemampuan komunikasi', 'hahahahhah', 'hahahhaha'),
(8, '0307', 1403040456, 'Yoji Maru', '08/05/2016', 2147483647, 'yoji@gmail.com', 'Jombang', 'test lagi isian C', 0, '', '', '', '', '', '', '', '', '', '', '', 'mudah kok :p', 'Kemampuan komunikasi', 'hahahahahha', 'wkwkwkkwkwkwkwk :v'),
(10, '0101', 1402040429, 'Mahsun Jauhari', '08/27/2016', 2147483647, 'mahsun@elek.com', 'Banyuwangi', 'hahahha', 0, '', '', '', '', '', '', '', '', '', '', '', 'ahahah', 'Kemampuan terapan/lapangan', 'hahhahaha', 'hahhahahahaha'),
(11, '0411', 1505040546, 'Charisudin ashar', '08/17/2016', 2147483647, 'charis@gmail.com', 'Nganjuk', 'wenak :p', 0, '', '', '', '', '', '', '', '', '', '', '', 'mudah saja sih :v', 'Kemampuan terapan/lapangan', 'baik', 'mantap :D\r\n'),
(12, '0514', 1405060786, 'Muhammad Abidin', '08/11/2015', 2147483647, 'ridaulmaulayya@gmail.com', 'Jombang', 'hahah\r\n', 0, '', '', '', '', '', '', '', '', '', '', '', 'hahha', 'Kemampuan keahlian', 'adadad', 'dadda'),
(13, '0309', 130406079, 'Muhajirin', '08/14/2016', 2147483647, 'jirin@gmail.com', 'hahahha', 'hahhaha', 0, '', '', '', '', '', '', '', '', '', '', '', 'dadadad', 'Kemampuan terapan/lapangan', 'dadadadad', 'dadadada'),
(15, '0101', 1504050678, 'Subqi', '08/06/2016', 2147483647, 'aku@gmail.com', 'demak', 'hahha\r\n', 0, '', '', '', '', '', '', '', '', '', '', '', 'sulit sih', 'Kemampuan keahlian', 'hahahhaha', 'hahaha');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `pass`, `nama`, `email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Fika Ridaul Maulayya', 'ridaulmaulayya@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tracer1`
--

CREATE TABLE `tracer1` (
  `nim` varchar(20) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tlulus` date DEFAULT NULL,
  `trumah` varchar(20) NOT NULL,
  `thp` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kontak` varchar(255) DEFAULT NULL,
  `kerja` tinyint(1) NOT NULL,
  `alasan` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telepon` varchar(20) DEFAULT NULL,
  `prodi` tinyint(1) NOT NULL DEFAULT '1',
  `kesulitan` varchar(255) DEFAULT NULL,
  `kkeahlian` tinyint(1) DEFAULT NULL,
  `kterapan` tinyint(1) DEFAULT NULL,
  `kkomunikasi` tinyint(1) DEFAULT NULL,
  `ksikap` tinyint(1) DEFAULT NULL,
  `ksikapPenjelasan` varchar(255) DEFAULT NULL,
  `klainPenjelasan` varchar(255) DEFAULT NULL,
  `relevansi` varchar(255) DEFAULT NULL,
  `saran` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tracer2B`
--

CREATE TABLE `tracer2B` (
  `nim` varchar(20) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `bidang` varchar(50) NOT NULL,
  `berdiri` varchar(50) NOT NULL,
  `karyawan` smallint(6) NOT NULL,
  `komposisi` varchar(255) NOT NULL,
  `aset` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_trace`
--
ALTER TABLE `tbl_trace`
  ADD PRIMARY KEY (`id_register`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tracer1`
--
ALTER TABLE `tracer1`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `tracer2B`
--
ALTER TABLE `tracer2B`
  ADD PRIMARY KEY (`nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_trace`
--
ALTER TABLE `tbl_trace`
  MODIFY `id_register` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
