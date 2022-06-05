-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 18, 2021 at 03:04 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `investori`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `deksripsi` varchar(500) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `stock` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `deksripsi`, `tgl_masuk`, `stock`, `gambar`) VALUES
(22, 'kursi panjang', 'kursi panjang untuk lobi kantor', '2021-07-12', 2, '60ec121062a2e.jpg'),
(25, 'almari ', 'ini adalah almari', '2021-07-12', 3, '60ec1ddae9708.jpg'),
(26, 'kojoju iiu', 'iuiu  iuuiuiu', '2021-08-13', 3, '611671234d6b8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tambah_barang`
--

CREATE TABLE `tambah_barang` (
  `id` int(10) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `tgl_masuk` varchar(8) NOT NULL,
  `gambar` varchar(10) NOT NULL,
  `stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tambah_barang`
--

INSERT INTO `tambah_barang` (`id`, `nama_barang`, `deskripsi`, `tgl_masuk`, `gambar`, `stock`) VALUES
(22, 'kursi panjang', 'kursi panjang untuk lobi kantor', '2021-07-', '60ec121062', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_roles`
--

CREATE TABLE `tb_roles` (
  `id_roles` int(11) NOT NULL,
  `jabatan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_roles`
--

INSERT INTO `tb_roles` (`id_roles`, `jabatan`) VALUES
(1, 'Admin'),
(2, 'Pemimpin');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `username`, `password`) VALUES
(1, 'admin', 'admin'),
(2, 'sultan', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `ubah_barang`
--

CREATE TABLE `ubah_barang` (
  `nama_barang` varchar(50) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `tgl_masuk` varchar(8) NOT NULL,
  `gambar` varchar(10) NOT NULL,
  `stock` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambah_barang`
--
ALTER TABLE `tambah_barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `tambah_barang`
--
ALTER TABLE `tambah_barang`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
