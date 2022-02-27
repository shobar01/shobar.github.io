-- phpMyAdmin SQL Dump
-- version 4.5.0.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 04:20 AM
-- Server version: 10.0.17-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_p2_shobar`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_level`
--

CREATE TABLE `tb_level` (
  `id_level` int(11) NOT NULL,
  `nama_level` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `kode_pemesanan` int(15) NOT NULL,
  `tanggal_pemesanan` date NOT NULL,
  `tempat_pemesanan` varchar(25) NOT NULL,
  `id_pelanggan` int(15) NOT NULL,
  `kode_kursi` int(15) NOT NULL,
  `id_rute` int(15) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `tanggal_berangkat` date NOT NULL,
  `jam_cekin` time NOT NULL,
  `jam_berangkat` time NOT NULL,
  `total_bayar` int(15) NOT NULL,
  `id_petugas` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_penumpang`
--

CREATE TABLE `tb_penumpang` (
  `id_penumpang` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_penumpang` varchar(25) NOT NULL,
  `alamat_penumpang` varchar(25) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('p','l') NOT NULL,
  `telefone` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_petugas`
--

CREATE TABLE `tb_petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama_petugas` varchar(25) NOT NULL,
  `id_level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_petugas`
--

INSERT INTO `tb_petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `id_level`) VALUES
(1, 'admin', 'admin', 'shobar', 1),
(2, 'petugas', 'petugas', 'aldi', 2),
(3, 'penumpang', 'penumpang', 'dhefa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_rute`
--

CREATE TABLE `tb_rute` (
  `id_rute` int(11) NOT NULL,
  `tujuan` varchar(25) NOT NULL,
  `rute_awal` varchar(25) NOT NULL,
  `rute_akhir` varchar(25) NOT NULL,
  `harga` int(15) NOT NULL,
  `id_transportasi` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_transportasi`
--

CREATE TABLE `tb_transportasi` (
  `id_transportasi` int(11) NOT NULL,
  `kode` int(15) NOT NULL,
  `jumlah_kursi` int(15) NOT NULL,
  `keterangan` varchar(35) NOT NULL,
  `id_type_transportasi` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_type_transportasi`
--

CREATE TABLE `tb_type_transportasi` (
  `id_type_transportasi` int(11) NOT NULL,
  `nama_type` varchar(25) NOT NULL,
  `keterangan` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_level`
--
ALTER TABLE `tb_level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id_pelanggan` (`id_pelanggan`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `tb_penumpang`
--
ALTER TABLE `tb_penumpang`
  ADD PRIMARY KEY (`id_penumpang`);

--
-- Indexes for table `tb_petugas`
--
ALTER TABLE `tb_petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tb_rute`
--
ALTER TABLE `tb_rute`
  ADD PRIMARY KEY (`id_rute`);

--
-- Indexes for table `tb_transportasi`
--
ALTER TABLE `tb_transportasi`
  ADD PRIMARY KEY (`id_transportasi`);

--
-- Indexes for table `tb_type_transportasi`
--
ALTER TABLE `tb_type_transportasi`
  ADD PRIMARY KEY (`id_type_transportasi`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD CONSTRAINT `tb_pemesanan_ibfk_1` FOREIGN KEY (`id_pelanggan`) REFERENCES `tb_penumpang` (`id_penumpang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_pemesanan_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `tb_petugas` (`id_petugas`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
