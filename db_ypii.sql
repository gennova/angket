-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2016 at 03:03 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ypii`
--
CREATE DATABASE IF NOT EXISTS `db_ypii` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_ypii`;

-- --------------------------------------------------------

--
-- Table structure for table `angket`
--

CREATE TABLE `angket` (
  `namapengisi` varchar(100) NOT NULL,
  `pengisian` varchar(100) NOT NULL,
  `namaguru` varchar(100) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `soal1` int(1) NOT NULL DEFAULT '0',
  `soal2` int(1) NOT NULL DEFAULT '0',
  `soal3` int(1) NOT NULL DEFAULT '0',
  `soal4` int(1) NOT NULL DEFAULT '0',
  `soal5` int(1) NOT NULL DEFAULT '0',
  `soal6` int(1) NOT NULL DEFAULT '0',
  `soal7` int(1) NOT NULL DEFAULT '0',
  `soal8` int(1) NOT NULL DEFAULT '0',
  `soal9` int(1) NOT NULL DEFAULT '0',
  `soal10` int(1) NOT NULL DEFAULT '0',
  `soal11` int(1) NOT NULL DEFAULT '0',
  `soal12` int(1) NOT NULL DEFAULT '0',
  `soal13` int(1) NOT NULL DEFAULT '0',
  `soal14` int(1) NOT NULL DEFAULT '0',
  `soal15` int(1) NOT NULL DEFAULT '0',
  `soal16` int(1) NOT NULL DEFAULT '0',
  `soal17` int(1) NOT NULL DEFAULT '0',
  `soal18` int(1) NOT NULL DEFAULT '0',
  `soal19` int(1) NOT NULL DEFAULT '0',
  `soal20` int(1) NOT NULL DEFAULT '0',
  `soal21` int(1) NOT NULL DEFAULT '0',
  `soal22` int(1) NOT NULL DEFAULT '0',
  `soal23` int(1) NOT NULL DEFAULT '0',
  `soal24` int(1) NOT NULL DEFAULT '0',
  `soal25` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `angket`
--

INSERT INTO `angket` (`namapengisi`, `pengisian`, `namaguru`, `mapel`, `cabang`, `kota`, `soal1`, `soal2`, `soal3`, `soal4`, `soal5`, `soal6`, `soal7`, `soal8`, `soal9`, `soal10`, `soal11`, `soal12`, `soal13`, `soal14`, `soal15`, `soal16`, `soal17`, `soal18`, `soal19`, `soal20`, `soal21`, `soal22`, `soal23`, `soal24`, `soal25`) VALUES
('Admin', 'Belum Mengisi', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Jeremy', 'Sudah Mengisi', 'Yovita', 'PKN', 'SD Kanisius', 'Semarang', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1),
('Albert', 'Belum Mengisi', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
('Perry', 'Belum Mengisi', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `cabang`
--

CREATE TABLE `cabang` (
  `nama` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cabang`
--

INSERT INTO `cabang` (`nama`, `kota`, `status`) VALUES
('SD Kanisius', 'Semarang', 'Aktif'),
('SD Kebon Dalem', 'Semarang', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE `guru` (
  `no` int(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`no`, `nama`, `status`) VALUES
(1, 'Yovita', 'Aktif'),
(2, 'Tara', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `cabang` varchar(100) NOT NULL,
  `kota` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `nama`, `status`, `cabang`, `kota`) VALUES
('admin', 'admin', 'Admin', 'Admin', '', 'Semarang'),
('jeremy', 'jeremy', 'Jeremy', 'User', 'SD Kanisius', 'Semarang'),
('albert', 'albert', 'Albert', 'User', 'SD Kanisius', 'Semarang'),
('perry', 'perry', 'Perry', 'User', 'SD Kebon Dalem', 'Semarang'),
('novaryan', '267e4f069fa6fff26559f619c', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `matpel`
--

CREATE TABLE `matpel` (
  `nama` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matpel`
--

INSERT INTO `matpel` (`nama`, `status`) VALUES
('PKN', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `soal`
--

CREATE TABLE `soal` (
  `no` int(10) NOT NULL,
  `soal` varchar(255) NOT NULL,
  `status` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `soal`
--

INSERT INTO `soal` (`no`, `soal`, `status`) VALUES
(1, 'Guru selalu hadir di kelas tepat waktu /sesuai jadwal', 'Aktif'),
(2, 'Guru selalu mengakhiri pelajaran sesuai jadwal', 'Aktif'),
(3, 'Cara guru mengajar membuat saya tertarik untuk mempelajari materi yang diajarkan', 'Aktif'),
(4, 'Guru sering menggunakan media pembelaran yang mempermudah saya memahami materi pelajaran', 'Aktif'),
(5, 'Saya tidak pernah merasa bosan mengikuti pelajaran ini', 'Aktif'),
(6, 'Saya ingin belajar lebih banyak dari guru mata pelajaran ini', 'Aktif'),
(7, 'Sebagian besar waktu pelajaran di kelas hanya untuk mendengarkan penjelasan guru', 'Aktif'),
(8, 'Di dalam pelajaran ini saya didorong untuk berpikir kritis dan kreatif', 'Aktif'),
(9, 'Saya memahami manfaat / kegunaan matapelajaran ini untuk masa depan saya', 'Aktif'),
(10, 'Sumber utama bahan belajar yang saya miliki adalah buku catatan saja', 'Aktif'),
(11, 'Yang paling penting untuk bisa sukses dalam ulangan untuk pelajaran ini adalah menghafalkan materi pelajaran', 'Aktif'),
(12, 'Soal-soal ulangan pada umumnya mudah untuk dikerjakan', 'Aktif'),
(13, 'Guru sering memberi tugas yang membuat saya sungguh-sungguh belajar', 'Aktif'),
(14, 'Saya mengikuti pelajaran dengan sungguh-sungguh dan semangat', 'Aktif'),
(15, 'Saya memahami materi yang diajarkan dengan baik', 'Aktif'),
(16, 'Saya bisa menghubungkan materi yang diajarkan dengan peristiwa nyata dalam kehidupan', 'Aktif'),
(17, 'Soal-soal ulangan pada umumnya menantang saya untuk belajar lebih baik', 'Aktif'),
(18, 'Melalui pelajaran ini saya merasa semakin tidak mampu belajar', 'Aktif'),
(19, 'Kalau ada tugas, saya dapat mengerjakannya tanpa harus mencari di buku sumber ', 'Aktif'),
(20, 'Pekerjaan ulangan harian dinilai dan dikembalikan oleh guru tidak lebih dari 1minggu setelah ulangan', 'Aktif'),
(21, 'Melalui pelajaran ini guru membantu saya mengembangkan karakter yang baik', 'Aktif'),
(22, 'Saya melihat sikap dan perilaku guru yang patut diteladani', 'Aktif'),
(23, 'Pelajaran ini membuat saya menyadari memiliki potensi baik yang saya miliki untuk dikembangkan ', 'Aktif'),
(24, 'Melalui pelajaran ini saya dibantu mengembangkan sikap/karakter yang baik', 'Aktif'),
(25, 'Melalui pelajaran ini saya memahami arti penting dari belajar', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `soal`
--
ALTER TABLE `soal`
  ADD PRIMARY KEY (`no`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
