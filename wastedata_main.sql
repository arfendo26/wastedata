-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2019 at 05:11 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wastedata_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `garbage_list`
--

CREATE TABLE `garbage_list` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garbage_list`
--

INSERT INTO `garbage_list` (`id`, `nama`) VALUES
(1, 'Botol Plastik Bening - Kotor'),
(2, 'Botol Plastik Bening - Bersih'),
(3, 'Botol Plastik Bening Biru - Kotor'),
(4, 'Botol Plastik Bening Biru - Bersih'),
(5, 'Botol Berwarna - Bersih'),
(6, 'Bak - Warna Campur'),
(7, 'Bak - Warna Hitam'),
(8, 'Toples Plastik'),
(9, 'Botol Susu'),
(10, 'Gelas PET Warna'),
(11, 'Tutup Botol PET'),
(12, 'Tutup Galon'),
(13, 'Galon'),
(14, 'Gelas PET - Kotor'),
(15, 'Gelas PET - Bersih'),
(16, 'Plastik Bening'),
(17, 'Tas Kresek'),
(18, 'Sachet');

-- --------------------------------------------------------

--
-- Table structure for table `garbage_predict`
--

CREATE TABLE `garbage_predict` (
  `id` int(11) NOT NULL,
  `bank` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `mse` float NOT NULL,
  `mae` float NOT NULL,
  `r2` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garbage_predict`
--

INSERT INTO `garbage_predict` (`id`, `bank`, `jenis`, `harga`, `tanggal`, `mse`, `mae`, `r2`) VALUES
(0, 1, 1, 1683, '2019-09-30', 19204.3, 80.0184, 0.839103),
(0, 1, 1, 1683, '2019-10-31', 19204.3, 80.0184, 0.839103),
(0, 1, 1, 1683, '2019-11-30', 19204.3, 80.0184, 0.839103),
(0, 1, 1, 1683, '2019-12-31', 19204.3, 80.0184, 0.839103),
(0, 1, 1, 1683, '2020-01-31', 19204.3, 80.0184, 0.839103),
(0, 1, 2, 2824, '2019-09-30', 4660.27, 34.481, 0.923305),
(0, 1, 2, 2824, '2019-10-31', 4660.27, 34.481, 0.923305),
(0, 1, 2, 2824, '2019-11-30', 4660.27, 34.481, 0.923305),
(0, 1, 2, 2824, '2019-12-31', 4660.27, 34.481, 0.923305),
(0, 1, 2, 2824, '2020-01-31', 4660.27, 34.481, 0.923305),
(0, 1, 3, 1479, '2019-09-30', 20208.9, 77.1374, 0.854496),
(0, 1, 3, 1479, '2019-10-31', 20208.9, 77.1374, 0.854496),
(0, 1, 3, 1479, '2019-11-30', 20208.9, 77.1374, 0.854496),
(0, 1, 3, 1479, '2019-12-31', 20208.9, 77.1374, 0.854496),
(0, 1, 3, 1479, '2020-01-31', 20208.9, 77.1374, 0.854496),
(0, 1, 4, 2563, '2019-09-30', 0.010036, 0.10018, 0.999999),
(0, 1, 4, 2563, '2019-10-31', 0.010036, 0.10018, 0.999999),
(0, 1, 4, 2563, '2019-11-30', 0.010036, 0.10018, 0.999999),
(0, 1, 4, 2563, '2019-12-31', 0.010036, 0.10018, 0.999999),
(0, 1, 4, 2563, '2020-01-31', 0.010036, 0.10018, 0.999999),
(0, 1, 5, 2000, '2019-09-30', 0, 0, 1),
(0, 1, 5, 2000, '2019-10-31', 0, 0, 1),
(0, 1, 5, 2000, '2019-11-30', 0, 0, 1),
(0, 1, 5, 2000, '2019-12-31', 0, 0, 1),
(0, 1, 5, 2000, '2020-01-31', 0, 0, 1),
(0, 1, 6, 2161, '2019-09-30', 13767.8, 33.9638, 0.858389),
(0, 1, 6, 2161, '2019-10-31', 13767.8, 33.9638, 0.858389),
(0, 1, 6, 2161, '2019-11-30', 13767.8, 33.9638, 0.858389),
(0, 1, 6, 2161, '2019-12-31', 13767.8, 33.9638, 0.858389),
(0, 1, 6, 2161, '2020-01-31', 13767.8, 33.9638, 0.858389),
(0, 1, 7, 653, '2019-09-30', 3030.38, 23.0635, 0.8649),
(0, 1, 7, 653, '2019-10-31', 3030.38, 23.0635, 0.8649),
(0, 1, 7, 653, '2019-11-30', 3030.38, 23.0635, 0.8649),
(0, 1, 7, 653, '2019-12-31', 3030.38, 23.0635, 0.8649),
(0, 1, 7, 653, '2020-01-31', 3030.38, 23.0635, 0.8649),
(0, 1, 8, 2526, '2019-09-30', 47522, 110.906, 0.873275),
(0, 1, 8, 2526, '2019-10-31', 47522, 110.906, 0.873275),
(0, 1, 8, 2526, '2019-11-30', 47522, 110.906, 0.873275),
(0, 1, 8, 2526, '2019-12-31', 47522, 110.906, 0.873275),
(0, 1, 8, 2526, '2020-01-31', 47522, 110.906, 0.873275),
(0, 1, 9, 3000, '2019-09-30', 0, 0, 1),
(0, 1, 9, 3000, '2019-10-31', 0, 0, 1),
(0, 1, 9, 3000, '2019-11-30', 0, 0, 1),
(0, 1, 9, 3000, '2019-12-31', 0, 0, 1),
(0, 1, 9, 3000, '2020-01-31', 0, 0, 1),
(0, 1, 10, 2500, '2019-09-30', 0, 0, 1),
(0, 1, 10, 2500, '2019-10-31', 0, 0, 1),
(0, 1, 10, 2500, '2019-11-30', 0, 0, 1),
(0, 1, 10, 2500, '2019-12-31', 0, 0, 1),
(0, 1, 10, 2500, '2020-01-31', 0, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `garbage_price`
--

CREATE TABLE `garbage_price` (
  `id` int(11) NOT NULL,
  `bank` int(11) NOT NULL,
  `jenis` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `garbage_price`
--

INSERT INTO `garbage_price` (`id`, `bank`, `jenis`, `harga`, `tanggal`) VALUES
(0, 0, 0, 0, '0000-00-00'),
(1, 1, 1, 1750, '2018-10-01'),
(2, 1, 1, 1750, '2018-11-01'),
(3, 1, 1, 1750, '2018-12-01'),
(4, 1, 1, 2000, '2019-01-01'),
(5, 1, 1, 2000, '2019-02-01'),
(6, 1, 1, 2000, '2019-03-01'),
(7, 1, 1, 2000, '2019-04-01'),
(8, 1, 1, 1000, '2019-05-01'),
(9, 1, 1, 1000, '2019-06-01'),
(10, 1, 1, 1500, '2019-07-01'),
(11, 1, 1, 1500, '2019-08-01'),
(12, 1, 1, 1500, '2019-09-01'),
(13, 1, 2, 3000, '2018-10-01'),
(14, 1, 2, 3000, '2018-11-01'),
(15, 1, 2, 3000, '2018-12-01'),
(16, 1, 2, 3000, '2019-01-01'),
(17, 1, 2, 3000, '2019-02-01'),
(18, 1, 2, 3000, '2019-03-01'),
(19, 1, 2, 3000, '2019-04-01'),
(20, 1, 2, 2500, '2019-05-01'),
(21, 1, 2, 2500, '2019-06-01'),
(22, 1, 2, 2500, '2019-07-01'),
(23, 1, 2, 2500, '2019-08-01'),
(24, 1, 2, 2500, '2019-09-01'),
(25, 1, 3, 1500, '2018-10-01'),
(26, 1, 3, 1500, '2018-11-01'),
(27, 1, 3, 1500, '2018-12-01'),
(28, 1, 3, 2000, '2019-01-01'),
(29, 1, 3, 2000, '2019-02-01'),
(30, 1, 3, 2000, '2019-03-01'),
(31, 1, 3, 1000, '2019-04-01'),
(32, 1, 3, 1000, '2019-05-01'),
(33, 1, 3, 1000, '2019-06-01'),
(34, 1, 3, 1200, '2019-07-01'),
(35, 1, 3, 1200, '2019-08-01'),
(36, 1, 3, 1300, '2019-09-01'),
(37, 1, 4, 2700, '2018-10-01'),
(38, 1, 4, 2700, '2018-11-01'),
(39, 1, 4, 2700, '2018-12-01'),
(40, 1, 4, 2500, '2019-01-01'),
(41, 1, 4, 2500, '2019-02-01'),
(42, 1, 4, 2500, '2019-03-01'),
(43, 1, 4, 2500, '2019-04-01'),
(44, 1, 4, 2500, '2019-05-01'),
(45, 1, 4, 2500, '2019-06-01'),
(46, 1, 4, 2500, '2019-07-01'),
(47, 1, 4, 2500, '2019-08-01'),
(48, 1, 4, 2500, '2019-09-01'),
(49, 1, 5, 2000, '2018-10-01'),
(50, 1, 5, 2000, '2018-11-01'),
(51, 1, 5, 2000, '2018-12-01'),
(52, 1, 5, 2000, '2019-01-01'),
(53, 1, 5, 2000, '2019-02-01'),
(54, 1, 5, 2000, '2019-03-01'),
(55, 1, 5, 2000, '2019-04-01'),
(56, 1, 5, 2000, '2019-05-01'),
(57, 1, 5, 2000, '2019-06-01'),
(58, 1, 5, 2000, '2019-07-01'),
(59, 1, 5, 2000, '2019-08-01'),
(60, 1, 5, 2000, '2019-09-01'),
(61, 1, 6, 2000, '2018-10-01'),
(62, 1, 6, 2000, '2018-11-01'),
(63, 1, 6, 2000, '2018-12-01'),
(64, 1, 6, 2500, '2019-01-01'),
(65, 1, 6, 2000, '2019-02-01'),
(66, 1, 6, 2000, '2019-03-01'),
(67, 1, 6, 2000, '2019-04-01'),
(68, 1, 6, 3000, '2019-05-01'),
(69, 1, 6, 2000, '2019-06-01'),
(70, 1, 6, 2000, '2019-07-01'),
(71, 1, 6, 2000, '2019-08-01'),
(72, 1, 6, 2500, '2019-09-01'),
(73, 1, 7, 700, '2018-10-01'),
(74, 1, 7, 700, '2018-11-01'),
(75, 1, 7, 700, '2018-12-01'),
(76, 1, 7, 1000, '2019-01-01'),
(77, 1, 7, 500, '2019-02-01'),
(78, 1, 7, 500, '2019-03-01'),
(79, 1, 7, 500, '2019-04-01'),
(80, 1, 7, 500, '2019-05-01'),
(81, 1, 7, 500, '2019-06-01'),
(82, 1, 7, 500, '2019-07-01'),
(83, 1, 7, 500, '2019-08-01'),
(84, 1, 7, 500, '2019-09-01'),
(85, 1, 8, 2500, '2018-10-01'),
(86, 1, 8, 2500, '2018-11-01'),
(87, 1, 8, 2500, '2018-12-01'),
(88, 1, 8, 3500, '2019-01-01'),
(89, 1, 8, 3500, '2019-02-01'),
(90, 1, 8, 3500, '2019-03-01'),
(91, 1, 8, 2000, '2019-04-01'),
(92, 1, 8, 2000, '2019-05-01'),
(93, 1, 8, 2000, '2019-06-01'),
(94, 1, 8, 2000, '2019-07-01'),
(95, 1, 8, 2000, '2019-08-01'),
(96, 1, 8, 2000, '2019-09-01'),
(97, 1, 9, 3000, '2018-10-01'),
(98, 1, 9, 3000, '2018-11-01'),
(99, 1, 9, 3000, '2018-12-01'),
(100, 1, 9, 3000, '2019-01-01'),
(101, 1, 9, 3000, '2019-02-01'),
(102, 1, 9, 3000, '2019-03-01'),
(103, 1, 9, 3000, '2019-04-01'),
(104, 1, 9, 3000, '2019-05-01'),
(105, 1, 9, 3000, '2019-06-01'),
(106, 1, 9, 3000, '2019-07-01'),
(107, 1, 9, 3000, '2019-08-01'),
(108, 1, 9, 3000, '2019-09-01'),
(109, 1, 10, 2500, '2018-10-01'),
(110, 1, 10, 2500, '2018-11-01'),
(111, 1, 10, 2500, '2018-12-01'),
(112, 1, 10, 2500, '2019-01-01'),
(113, 1, 10, 2500, '2019-02-01'),
(114, 1, 10, 2500, '2019-03-01'),
(115, 1, 10, 2500, '2019-04-01'),
(116, 1, 10, 2500, '2019-05-01'),
(117, 1, 10, 2500, '2019-06-01'),
(118, 1, 10, 2500, '2019-07-01'),
(119, 1, 10, 2500, '2019-08-01'),
(120, 1, 10, 2500, '2019-09-01'),
(121, 1, 11, 2500, '2018-10-01'),
(122, 1, 11, 2500, '2018-11-01'),
(123, 1, 11, 2500, '2018-12-01'),
(124, 1, 11, 2500, '2019-01-01'),
(125, 1, 11, 2500, '2019-02-01'),
(126, 1, 11, 2500, '2019-03-01'),
(127, 1, 11, 2500, '2019-04-01'),
(128, 1, 11, 2500, '2019-05-01'),
(129, 1, 11, 2500, '2019-06-01'),
(130, 1, 11, 2500, '2019-07-01'),
(131, 1, 11, 2500, '2019-08-01'),
(132, 1, 11, 2500, '2019-09-01'),
(133, 1, 12, 3000, '2018-10-01'),
(134, 1, 12, 3000, '2018-11-01'),
(135, 1, 12, 3000, '2018-12-01'),
(136, 1, 12, 3500, '2019-01-01'),
(137, 1, 12, 3500, '2019-02-01'),
(138, 1, 12, 3500, '2019-03-01'),
(139, 1, 12, 3500, '2019-04-01'),
(140, 1, 12, 3500, '2019-05-01'),
(141, 1, 12, 3500, '2019-06-01'),
(142, 1, 12, 3500, '2019-07-01'),
(143, 1, 12, 3500, '2019-08-01'),
(144, 1, 12, 3500, '2019-09-01'),
(145, 1, 13, 5000, '2018-10-01'),
(146, 1, 13, 5000, '2018-11-01'),
(147, 1, 13, 5000, '2018-12-01'),
(148, 1, 13, 5000, '2019-01-01'),
(149, 1, 13, 5000, '2019-02-01'),
(150, 1, 13, 5000, '2019-03-01'),
(151, 1, 13, 5000, '2019-04-01'),
(152, 1, 13, 5000, '2019-05-01'),
(153, 1, 13, 4000, '2019-06-01'),
(154, 1, 13, 4000, '2019-07-01'),
(155, 1, 13, 4000, '2019-08-01'),
(156, 1, 13, 4000, '2019-09-01'),
(157, 1, 14, 2500, '2018-10-01'),
(158, 1, 14, 2500, '2018-11-01'),
(159, 1, 14, 2500, '2018-12-01'),
(160, 1, 14, 2500, '2019-01-01'),
(161, 1, 14, 2500, '2019-02-01'),
(162, 1, 14, 2500, '2019-03-01'),
(163, 1, 14, 2500, '2019-04-01'),
(164, 1, 14, 2500, '2019-05-01'),
(165, 1, 14, 2500, '2019-06-01'),
(166, 1, 14, 2500, '2019-07-01'),
(167, 1, 14, 2500, '2019-08-01'),
(168, 1, 14, 2500, '2019-09-01'),
(169, 1, 15, 5500, '2018-10-01'),
(170, 1, 15, 5500, '2018-11-01'),
(171, 1, 15, 5500, '2018-12-01'),
(172, 1, 15, 6000, '2019-01-01'),
(173, 1, 15, 6000, '2019-02-01'),
(174, 1, 15, 6000, '2019-03-01'),
(175, 1, 15, 6000, '2019-04-01'),
(176, 1, 15, 6000, '2019-05-01'),
(177, 1, 15, 6000, '2019-06-01'),
(178, 1, 15, 6000, '2019-07-01'),
(179, 1, 15, 6000, '2019-08-01'),
(180, 1, 15, 6000, '2019-09-01'),
(181, 1, 16, 600, '2018-10-01'),
(182, 1, 16, 600, '2018-11-01'),
(183, 1, 16, 600, '2018-12-01'),
(184, 1, 16, 500, '2019-01-01'),
(185, 1, 16, 500, '2019-02-01'),
(186, 1, 16, 500, '2019-03-01'),
(187, 1, 16, 500, '2019-04-01'),
(188, 1, 16, 500, '2019-05-01'),
(189, 1, 16, 500, '2019-06-01'),
(190, 1, 16, 500, '2019-07-01'),
(191, 1, 16, 500, '2019-08-01'),
(192, 1, 16, 500, '2019-09-01'),
(193, 1, 17, 300, '2018-10-01'),
(194, 1, 17, 300, '2018-11-01'),
(195, 1, 17, 300, '2018-12-01'),
(196, 1, 17, 300, '2019-01-01'),
(197, 1, 17, 300, '2019-02-01'),
(198, 1, 17, 300, '2019-03-01'),
(199, 1, 17, 300, '2019-04-01'),
(200, 1, 17, 300, '2019-05-01'),
(201, 1, 17, 300, '2019-06-01'),
(202, 1, 17, 300, '2019-07-01'),
(203, 1, 17, 300, '2019-08-01'),
(204, 1, 17, 300, '2019-09-01'),
(205, 1, 18, 500, '2018-10-01'),
(206, 1, 18, 500, '2018-11-01'),
(207, 1, 18, 500, '2018-12-01'),
(208, 1, 18, 500, '2019-01-01'),
(209, 1, 18, 500, '2019-02-01'),
(210, 1, 18, 500, '2019-03-01'),
(211, 1, 18, 500, '2019-04-01'),
(212, 1, 18, 500, '2019-05-01'),
(213, 1, 18, 500, '2019-06-01'),
(214, 1, 18, 500, '2019-07-01'),
(215, 1, 18, 500, '2019-08-01'),
(216, 1, 18, 500, '2019-09-01');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `garbage_list`
--
ALTER TABLE `garbage_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `garbage_list`
--
ALTER TABLE `garbage_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
