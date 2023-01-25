-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 22, 2022 at 08:44 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `administrasi_produksi`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `idadmin` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `namaadmin` varchar(50) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `password` varchar(200) NOT NULL,
  `hakakses` varchar(30) NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`idadmin`),
  KEY `idadmin` (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idadmin`, `email`, `namaadmin`, `alamat`, `password`, `hakakses`, `foto`) VALUES
(1, 'anggianggara@gmail.com', 'anggi', 'Jl. Peta No.47 Gunung Roay Kel. Kahuripan Kec. Tawang (Dekat UNPER)', '202cb962ac59075b964b07152d234b70', 'Super Admin', 'LOGO.png'),
(2, 'hilal@gmail.com', 'Hilal', 'Purbaratu', '202cb962ac59075b964b07152d234b70', 'Super Admin', 'LOGO.png'),
(3, 'zilah@gmail.com', 'Admin CTasik', 'Jl. Peta No.47 Gunung Roay Kel. Kahuripan Kec. Tawang (Dekat UNPER)\n', '202cb962ac59075b964b07152d234b70', 'Admin', 'female-headset-icon-web.png'),
(4, 'desi@gmail.com', 'Admin CKawalu', '', '202cb962ac59075b964b07152d234b70', 'Admin', 'female-headset-icon-web.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `namaadmin` varchar(50) NOT NULL,
  `pesan` varchar(500) NOT NULL,
  `tgl` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`namaadmin`, `pesan`, `tgl`) VALUES
('anggi', 'test...', '2022-10-22');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE IF NOT EXISTS `produk` (
  `idproduk` int(11) NOT NULL AUTO_INCREMENT,
  `namaproduk` varchar(25) NOT NULL,
  `foto` varchar(200) NOT NULL,
  PRIMARY KEY (`idproduk`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`idproduk`, `namaproduk`, `foto`) VALUES
(1, 'Plakat Box Buludru', 'WhatsApp Image 2022-10-21 at 09.24.14.jpeg'),
(2, 'Plakat Wisuda', '2PXL_20220926_084742710.NIGHT-removebg-preview.png');

-- --------------------------------------------------------

--
-- Table structure for table `tborder`
--

CREATE TABLE IF NOT EXISTS `tborder` (
  `idorder` int(11) NOT NULL AUTO_INCREMENT,
  `idadmin` int(11) NOT NULL,
  `namaadmin` varchar(50) NOT NULL,
  `idproduk` int(11) NOT NULL,
  `namaproduk` varchar(25) NOT NULL,
  `jml` varchar(11) NOT NULL,
  `tglorder` date NOT NULL,
  `tgltarget` date NOT NULL,
  `ket` varchar(250) NOT NULL,
  `foto` varchar(225) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`idorder`),
  KEY `idproduk` (`idproduk`),
  KEY `idadmin` (`idadmin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tborder`
--

INSERT INTO `tborder` (`idorder`, `idadmin`, `namaadmin`, `idproduk`, `namaproduk`, `jml`, `tglorder`, `tgltarget`, `ket`, `foto`, `status`) VALUES
(5, 3, 'Admin CTasik', 2, 'Plakat Wisuda', '50', '2022-10-22', '2022-10-29', 'laki-laki hitam', 'PXL_20220926_084742710.NIGHT-removebg-preview.png', 'Sudah Diproduksi');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tborder`
--
ALTER TABLE `tborder`
  ADD CONSTRAINT `tborder_ibfk_1` FOREIGN KEY (`idproduk`) REFERENCES `produk` (`idproduk`),
  ADD CONSTRAINT `tborder_ibfk_2` FOREIGN KEY (`idadmin`) REFERENCES `admin` (`idadmin`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
