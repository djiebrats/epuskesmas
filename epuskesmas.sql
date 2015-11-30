-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 30, 2015 at 03:24 PM
-- Server version: 5.1.72
-- PHP Version: 5.5.25

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `epuskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `id_rm` varchar(9) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `sim` varchar(30) NOT NULL,
  `paspor` varchar(15) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tempat_lahir` varchar(50) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` varchar(5) NOT NULL,
  `status` int(5) NOT NULL COMMENT '1.menikah;2.blmMenikah;3.cerai;4.duda',
  `agama` varchar(20) NOT NULL,
  `kebangsaan` varchar(30) NOT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kelurahan` varchar(40) NOT NULL,
  `kecamatan` varchar(40) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kabupaten` varchar(30) NOT NULL,
  `asuransi` varchar(30) NOT NULL,
  `alamat2` varchar(100) NOT NULL,
  `no_tlp` varchar(20) NOT NULL,
  `no_tlp2` varchar(20) NOT NULL,
  `no_kantor` varchar(20) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `e_nama` varchar(50) NOT NULL,
  `e_hubungan` varchar(50) NOT NULL,
  `e_no_tlp` varchar(20) NOT NULL,
  `e_alamat` varchar(100) NOT NULL,
  `ket` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id`, `id_rm`, `nik`, `sim`, `paspor`, `nama`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `status`, `agama`, `kebangsaan`, `pekerjaan`, `alamat`, `kelurahan`, `kecamatan`, `rt`, `rw`, `kabupaten`, `asuransi`, `alamat2`, `no_tlp`, `no_tlp2`, `no_kantor`, `hp`, `e_nama`, `e_hubungan`, `e_no_tlp`, `e_alamat`, `ket`) VALUES
(1, '000001', '123456789', '', '', 'kennedy', 'Amerika', '2015-11-01', 'L', 2, 'islam', 'Indonesia', '', 'JL. Surabaya no 1', 'kelurahan', 'kecamatan', '01', '02', 'kediri', '', '', '', '', '', '', '', '', '', '', ''),
(2, '000002', '1', 'sim', '', 'paimin', 'surabaya', '0000-00-00', 'L', 1, 'islam', 'Indonesia', 'Petani', 'Deket sawah', 'kelurahan', 'kecamatan', '02', '03', 'Kediri', 'BPJS', '', '', '', '', '', 'Paijo', 'Adik', '00000111', 'deket sawah juga', ''),
(3, '000004', '123456789', '', '', 'Abby Hardi', 'Kediri', '0000-00-00', 'L', 2, 'islam', 'indonesia', 'pelajar', 'jl kediri', 'kediri', 'kediri', '01', '01', 'kediri', '', 'jl kediri', '0000', '0000', '0000', '000', 'Mega', 'Ibu', '0000', 'jl kediri', '');

-- --------------------------------------------------------

--
-- Table structure for table `rujukan`
--

CREATE TABLE IF NOT EXISTS `rujukan` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `id_rm` varchar(20) NOT NULL,
  `nama_pasien` varchar(20) NOT NULL,
  `alamat_pasien` varchar(50) NOT NULL,
  `rt` varchar(5) NOT NULL,
  `rw` varchar(5) NOT NULL,
  `kelurahan` varchar(30) NOT NULL,
  `kecamatan` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `poli` varchar(30) NOT NULL,
  `status_layanan` tinyint(1) NOT NULL,
  `status_rm` tinyint(1) NOT NULL,
  `status_antrian` tinyint(1) NOT NULL,
  `status_hapus` tinyint(1) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=62 ;

--
-- Dumping data for table `rujukan`
--

INSERT INTO `rujukan` (`id`, `user_id`, `username`, `id_rm`, `nama_pasien`, `alamat_pasien`, `rt`, `rw`, `kelurahan`, `kecamatan`, `tanggal`, `poli`, `status_layanan`, `status_rm`, `status_antrian`, `status_hapus`) VALUES
(48, 2, 'puskesmas', '000001', 'kennedy', 'JL. Surabaya no 1', '01', '02', 'kelurahan', 'kecamatan', '2015-12-01', 'bedah_syaraf', 1, 1, 1, 0),
(46, 2, 'puskesmas', '000001', 'kennedy', 'JL. Surabaya no 1', '01', '02', 'kelurahan', 'kecamatan', '2015-12-01', 'syaraf', 1, 0, 1, 0),
(49, 2, 'puskesmas', '000002', 'paimin', 'Deket sawah', '02', '03', 'kelurahan', 'kecamatan', '2015-12-05', 'syaraf', 1, 1, 1, 0),
(50, 2, 'puskesmas', '000002', 'paimin', 'Deket sawah', '02', '03', 'kelurahan', 'kecamatan', '2015-12-05', 'syaraf', 0, 0, 0, 0),
(60, 2, 'puskesmas', '000004', 'Abby Hardi', 'jl kediri', '01', '01', 'kediri', 'kediri', '2015-12-02', 'syaraf', 0, 0, 0, 0),
(61, 2, 'puskesmas', '000002', 'paimin', 'Deket sawah', '02', '03', 'kelurahan', 'kecamatan', '2015-12-04', 'bedah', 1, 1, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(5) NOT NULL,
  `status_user` tinyint(1) NOT NULL,
  `status_login` tinyint(1) NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `type`, `status_user`, `status_login`) VALUES
(2, 'puskesmas', 'puspus', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0),
(3, 'Administrator', 'admin', 'ac43724f16e9241d990427ab7c8f4228', '9', 0, 0),
(4, 'Rumah Sakit', 'rumkit', 'ac43724f16e9241d990427ab7c8f4228', '2', 0, 0),
(5, 'Pesantren', 'pesantren', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0),
(6, 'Pesantren II', 'pesantren2', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0),
(7, 'Ngeletih', 'ngeletih', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0),
(8, 'Mrican', 'mrican', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0),
(9, 'Sukorame', 'sukorame', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0),
(10, 'Campurejo', 'campurejo', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0),
(11, 'Balowerti', 'balowerti', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0),
(19, 'Kota Wilayah Selatan', 'kowilsel', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0),
(20, 'Kota Wilayah Utara', 'kowilut', 'ac43724f16e9241d990427ab7c8f4228', '1', 0, 0);
