-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2020 at 06:20 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(120) NOT NULL,
  `keterangan` varchar(225) NOT NULL,
  `kategori` varchar(60) NOT NULL,
  `harga` int(11) NOT NULL,
  `stok` int(4) NOT NULL,
  `gambar` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `keterangan`, `kategori`, `harga`, `stok`, `gambar`) VALUES
(1, 'JBL T600BT Noise Cancelling', 'Merek: JBL', 'Headphone dan Headset', 1600000, 5, '1.1.jpg'),
(2, 'AKG Y50 On-Ear Headphone ', 'Merek: akg', 'Headphone dan Headset', 950000, 10, '1.2.jpg'),
(3, 'SONY WH-CH510 Wireless Headphones ', 'Merek: Sony', 'Headphone dan Headset', 549000, 3, '1.3.jpg'),
(4, 'Xiaomi Mi Sports Bluetooth Earphones', 'Merek: Xiaomi', 'Earphone', 375000, 2, '2.1.jpg'),
(5, 'OASE Bluetooth Wireless Earphone ', 'Merek: OPPO', 'Earphone', 179000, 20, '2.2.jpg'),
(6, 'Earphone ROBOT wired High', 'Merek: Robot', 'Earphone', 42900, 14, '2.3.jpg'),
(7, 'Bose Soundlink Micro Bluetooth Speaker', 'Merek: Bose', 'Speaker', 2243000, 17, '3.1.jpg'),
(8, 'Razer Leviathan Immersive Speaker ', 'Merek: Razer', 'Speaker', 4165000, 7, '3.2.jpg'),
(9, 'Multimedia Speaker Mediatech Super Bass', 'Merek: mediatech', 'Speaker', 92000, 8, '3.3.jpg'),
(10, 'WEITECH Kabel Aux Jack Audio 3.5', 'Merek:weitech', 'Kabel dan Konektor Audio', 6900, 7, '4.1.jpg'),
(11, 'Cable Audio AUX 3.5mm', 'Merek: JOYSEUS', 'Kabel dan Konektor Audio', 14900, 10, '4.2.jpg'),
(12, 'UGREEN Microphone Male to Female', 'Merek: UGREEN', 'Kabel dan Konektor Audio', 69024, 19, '4.3.jpg'),
(13, 'Boya Universal Cardioid Microphone ', 'Merek: naxen', 'Mic Audio', 298000, 4, '5.1.jpg'),
(14, 'Microphone Karaoke Bluetooth Wireless ', 'Merek: New Style', 'Mic Audio', 46000, 11, '5.2.jpg'),
(15, 'Xiaokoa Microphone Profesional', 'Merek: XIAOKOA', 'Mic Audio', 129400, 9, '5.3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_invoice`
--

CREATE TABLE `tb_invoice` (
  `id` int(11) NOT NULL,
  `nama` varchar(56) NOT NULL,
  `alamat` varchar(225) NOT NULL,
  `no_telp` int(13) NOT NULL,
  `jasa_kirim` varchar(10) NOT NULL,
  `tgl_pesan` datetime NOT NULL,
  `batas_bayar` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_invoice`
--

INSERT INTO `tb_invoice` (`id`, `nama`, `alamat`, `no_telp`, `jasa_kirim`, `tgl_pesan`, `batas_bayar`) VALUES
(22, 'I Wayan Ady Purnawibawa', 'Br ole, marga dauh puri, marga, tabanan', 990880666, 'JNE', '2020-06-10 23:23:55', '2020-06-11 23:23:55'),
(23, 'wowo', 'Kutuh kelod', 990880666, 'TIKI', '2020-06-11 09:51:49', '2020-06-12 09:51:49');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pesanan`
--

CREATE TABLE `tb_pesanan` (
  `id` int(11) NOT NULL,
  `id_invoice` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` int(3) NOT NULL,
  `harga` int(10) NOT NULL,
  `pilihan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_pesanan`
--

INSERT INTO `tb_pesanan` (`id`, `id_invoice`, `id_barang`, `nama_barang`, `jumlah`, `harga`, `pilihan`) VALUES
(22, 22, 9, 'Multimedia Speaker Mediatech Super Bass', 1, 92000, '');

--
-- Triggers `tb_pesanan`
--
DELIMITER $$
CREATE TRIGGER `pesanan_penjualan` AFTER INSERT ON `tb_pesanan` FOR EACH ROW BEGIN 
	UPDATE tb_barang SET stok = stok-NEW.jumlah
    WHERE id_barang = NEW.id_barang;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role_id` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id`, `nama`, `username`, `password`, `role_id`) VALUES
(1, 'ady', 'ady', '262603', 1),
(4, 'I Wayan Ady Purnawibawa', 'AdyPurna', '123', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tb_invoice`
--
ALTER TABLE `tb_invoice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tb_pesanan`
--
ALTER TABLE `tb_pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
