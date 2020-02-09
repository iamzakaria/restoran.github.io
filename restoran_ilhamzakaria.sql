-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 05, 2020 at 09:39 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran_ilhamzakaria`
--

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `idmenu` varchar(30) NOT NULL,
  `namamenu` varchar(30) NOT NULL,
  `harga` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`idmenu`, `namamenu`, `harga`) VALUES
('1', 'kjkj1j1', '444'),
('100', 'ayam', '3000');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `idpelanggan` varchar(30) NOT NULL,
  `namapelanggan` varchar(30) NOT NULL,
  `jeniskelamin` varchar(30) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `alamat` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`idpelanggan`, `namapelanggan`, `jeniskelamin`, `nohp`, `alamat`) VALUES
('', '', '', '', ''),
('1', '100', 'permpuan', '0813476353636', 'cicurug'),
('3', '20', '20', '50', '10');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `idpesanan` varchar(30) NOT NULL,
  `iduser` varchar(30) NOT NULL,
  `idpelanggan` varchar(30) NOT NULL,
  `totalporsi` varchar(300) NOT NULL,
  `totalbayar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`idpesanan`, `iduser`, `idpelanggan`, `totalporsi`, `totalbayar`) VALUES
('10', '3', '1', '40', '30000'),
('2', '2', '2', '2', '20');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `idtransaksi` varchar(30) NOT NULL,
  `idpesanan` varchar(30) NOT NULL,
  `idmenu` varchar(30) NOT NULL,
  `jumlahporsi` varchar(300) NOT NULL,
  `jumlahbayar` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`idtransaksi`, `idpesanan`, `idmenu`, `jumlahporsi`, `jumlahbayar`) VALUES
('1', '1', '1', '100', '1000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` varchar(30) NOT NULL,
  `namauser` varchar(30) NOT NULL,
  `password` varchar(300) NOT NULL,
  `hakakses` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `namauser`, `password`, `hakakses`) VALUES
('4', 'elsa', '23', 'member'),
('5', 'dfdf', '21', 'member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`idmenu`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`idpesanan`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`idtransaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
