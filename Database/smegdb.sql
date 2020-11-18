-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 10:29 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `smegdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(2, 'myousef', 'yousef');

-- --------------------------------------------------------

--
-- Table structure for table `aes_lines`
--

CREATE TABLE `aes_lines` (
  `id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `aes_lines`
--

INSERT INTO `aes_lines` (`id`, `name`) VALUES
(1, 'دولتشي ستيل نوفو'),
(2, 'بورتوفينو'),
(3, 'كولونيال'),
(4, 'تصميم البيانو'),
(5, 'لينيا'),
(6, 'معاصر'),
(7, 'كلاسيكا'),
(8, 'ستايل الـ50s'),
(9, 'اختياري'),
(10, 'فيكتوريا'),
(11, 'كورتينا');

-- --------------------------------------------------------

--
-- Table structure for table `main_cat`
--

CREATE TABLE `main_cat` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `main_cat`
--

INSERT INTO `main_cat` (`id`, `name`) VALUES
(1, 'منتجات رئيسية'),
(2, 'منتجات صغيرة');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `line_id` int(20) NOT NULL,
  `sub_cat_id` int(20) NOT NULL,
  `color` varchar(50) NOT NULL,
  `img_url` varchar(900) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `name`, `line_id`, `sub_cat_id`, `color`, `img_url`) VALUES
(2, 'SFP6604PNXE', 1, 1, 'أسود', 'images/products/ovens/SFP6604PNXE.jpg'),
(3, 'SFP6604NRE', 1, 1, 'أسود', 'images/products/ovens/SFP6604NRE.jpg'),
(4, 'SFP6604NXE', 1, 1, 'أسود', 'images/products/ovens/SFP6604NXE.jpg'),
(5, 'SFP6604STNR', 1, 1, 'أسود', 'images/products/ovens/SFP6604STNR.jpg'),
(6, 'SFP6604STNX', 1, 1, 'أسود', 'images/products/ovens/SFP6604STNX.jpg'),
(7, 'SFP6606WSPNR', 1, 1, 'أسود', 'images/products/ovens/SFP6606WSPNR.jpg'),
(8, 'SFPR9604NR', 1, 1, 'أسود', 'images/products/ovens/SFPR9604NR.jpg'),
(9, 'SFPR9604NX', 1, 1, 'أسود', 'images/products/ovens/SFPR9604NX.jpg'),
(10, 'SFP6604PNRE', 1, 1, 'أسود', 'images/products/ovens/SFP6604PNRE.jpg'),
(11, 'SFP6606WSPNX', 1, 1, 'أسود', 'images/products/ovens/SFP6606WSPNX.jpg'),
(12, 'SFP6606WTPNX', 1, 1, 'أسود', 'images/products/ovens/SFP6606WTPNX.jpg'),
(13, 'SFP6606WTPNR', 1, 1, 'أسود', 'images/products/ovens/SFP6606WTPNR.jpg'),
(14, 'SF4604WVCPNR', 1, 1, 'أسود', 'images/products/ovens/SF4604WVCPNR.jpg'),
(15, 'SF6603NXE', 1, 1, 'أسود', 'images/products/ovens/SF6603NXE.jpg'),
(16, 'SF6603NRE', 1, 1, 'أسود', 'images/products/ovens/SF6603NRE.jpg'),
(17, 'SF4603MCNR', 1, 1, 'أسود', 'images/products/ovens/SF4603MCNR.jpg'),
(18, 'SF4604PVCNR1', 1, 1, 'أسود', 'images/products/ovens/SF4604PVCNR1.jpg'),
(19, 'SF4604VCNX1', 1, 1, 'أسود', 'images/products/ovens/SF4604VCNX1.jpg'),
(20, 'SF4604PVCNX1', 1, 1, 'أسود', 'images/products/ovens/SF4604PVCNX1.jpg'),
(21, 'SF4604VCNR1', 1, 1, 'أسود', 'images/products/ovens/SF4604VCNR1.jpg'),
(22, 'SF4604PMCNX', 1, 1, 'أسود', 'images/products/ovens/SF4604PMCNX.jpg'),
(23, 'SF4604PMCNR', 1, 1, 'أسود', 'images/products/ovens/SF4604PMCNR.jpg'),
(24, 'SF4604MCNR', 1, 1, 'أسود', 'images/products/ovens/SF4604MCNR.jpg'),
(25, 'SF4604MCNX', 1, 1, 'أسود', 'images/products/ovens/SF4604MCNX.jpg'),
(26, 'SFP6104WTPB', 5, 1, 'أبيض', 'images/products/ovens/SFP6104WTPB.jpg'),
(27, 'SFP6104TVB', 5, 1, 'أبيض', 'images/products/ovens/SFP6104TVB.jpg'),
(28, 'SFP6104TVN', 5, 1, 'أسود', 'images/products/ovens/SFP6104TVN.jpg'),
(29, 'SFP6104STS', 5, 1, 'فضي', 'images/products/ovens/SFP6104STS.jpg'),
(30, 'SFP6104TVS', 5, 1, 'فضي', 'images/products/ovens/SFP6104TVS.jpg'),
(31, 'SFP6102TVS', 5, 1, 'فضي', 'images/products/ovens/SFP6102TVS.jpg'),
(32, 'SFP6102TVB', 5, 1, 'أبيض', 'images/products/ovens/SFP6102TVB.jpg'),
(33, 'SFP6102TVN', 5, 1, 'أسود', 'images/products/ovens/SFP6102TVN.jpg'),
(34, 'SF6104STS', 5, 1, 'فضي', 'images/products/ovens/SF6104STS.jpg'),
(35, 'SF6104TVS', 5, 1, 'فضي', 'images/products/ovens/SF6104TVS.jpg'),
(36, 'SF6102TVN', 5, 1, 'أسود', 'images/products/ovens/SF6102TVN.jpg'),
(37, 'SF6102TVS', 5, 1, 'فضي', 'images/products/ovens/SF6102TVS.jpg'),
(38, 'SF6102TVB', 5, 1, 'أبيض', 'images/products/ovens/SF6102TVB.jpg'),
(39, 'SFP6101TVS', 5, 1, 'فضي', 'images/products/ovens/SFP6101TVS.jpg'),
(40, 'SFP6101VS', 5, 1, 'فضي', 'images/products/ovens/SFP6101VS.jpg'),
(41, 'SF6102PZS', 5, 1, 'فضي', 'images/products/ovens/SF6102PZS.jpg'),
(42, 'SFP6101TVB', 5, 1, 'أبيض', 'images/products/ovens/SFP6101TVB.jpg'),
(43, 'SFP6101TVN', 5, 1, 'أسود', 'images/products/ovens/SFP6101TVN.jpg'),
(44, 'SFP6101TVB1', 5, 1, 'أبيض', 'images/products/ovens/SFP6101TVB1.jpg'),
(45, 'SFP6101TVS1', 5, 1, 'فضي', 'images/products/ovens/SFP6101TVS1.jpg'),
(46, 'SFP6101TVN1', 5, 1, 'أسود', 'images/products/ovens/SFP6101TVN1.jpg'),
(47, 'SF6101TVN1', 5, 1, 'أسود', 'images/products/ovens/SF6101TVN1.jpg'),
(48, 'SF6101TVB1', 5, 1, 'أبيض', 'images/products/ovens/SF6101TVB1.jpg'),
(49, 'SF6101TVS1', 5, 1, 'فضي', 'images/products/ovens/SF6101TVS1.jpg'),
(50, 'SF6101VB', 5, 1, 'أبيض', 'images/products/ovens/SF6101VB.jpg'),
(51, 'SF6100VS1', 5, 1, 'فضي', 'images/products/ovens/SF6100VS1.jpg'),
(52, 'SF6101VN', 5, 1, 'أسود', 'images/products/ovens/SF6101VN.jpg'),
(53, 'SF6100VB1', 5, 1, 'أبيض', 'images/products/ovens/SF6100VB1.jpg'),
(54, 'SF6101VS', 5, 1, 'فضي', 'images/products/ovens/SF6101VS.jpg'),
(55, 'SF6100VN1', 5, 1, 'أسود', 'images/products/ovens/SF6100VN1.jpg'),
(56, 'SF6101TVS', 5, 1, 'فضي', 'images/products/ovens/SF6101TVS.jpg'),
(57, 'SFP4102PZS', 5, 1, 'فضي', 'images/products/ovens/SFP4102PZS.jpg'),
(58, 'SF6395XE', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6395XE.jpg'),
(59, 'SF6300VX', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6300VX.jpg'),
(60, 'SF6381X', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6381X.jpg'),
(61, 'SF6390XPZE', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6390XPZE.jpg'),
(62, 'SF6390XE', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6390XE.jpg'),
(63, 'SF166X', 4, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF166X.jpg'),
(64, 'SF6388X', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6388X.jpg'),
(65, 'SF6388XPZ', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6388XPZ.jpg'),
(66, 'SF6400TVN', 9, 1, 'أسود', 'images/products/ovens/SF6400TVN.jpg'),
(67, 'SF6341GVX', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6341GVX.jpg'),
(68, 'SF6400TVX', 9, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6400TVX.jpg'),
(69, 'SF6400TVS', 9, 1, 'فضي', 'images/products/ovens/SF6400TVS.jpg'),
(70, 'SF6372X', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6372X.jpg'),
(71, 'SFP6390XE', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SFP6390XE.jpg'),
(72, 'SFP6401TVX', 9, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SFP6401TVX.jpg'),
(73, 'SFP6401TVS', 9, 1, 'فضي', 'images/products/ovens/SFP6401TVS.jpg'),
(74, 'SFP6401TVN', 9, 1, 'أسود', 'images/products/ovens/SFP6401TVN.jpg'),
(75, 'SFP6402TVN', 9, 1, 'أسود', 'images/products/ovens/SFP6402TVN.jpg'),
(76, 'SF6402TVS', 9, 1, 'فضي', 'images/products/ovens/SF6402TVS.jpg'),
(77, 'SFP6402TVX', 9, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SFP6402TVX.jpg'),
(78, 'SF6402TVX', 9, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6402TVX.jpg'),
(79, 'SF64M3DS', 9, 1, 'فضي', 'images/products/ovens/SF64M3DS.jpg'),
(80, 'SF64M3TVN', 9, 1, 'أسود', 'images/products/ovens/SF64M3TVN.jpg'),
(81, 'SF64M3DN', 9, 1, 'أسود', 'images/products/ovens/SF64M3DN.jpg'),
(82, 'SF64M3PZN', 9, 1, 'أسود', 'images/products/ovens/SF64M3PZN.jpg'),
(83, 'SF64M3PZS', 9, 1, 'فضي', 'images/products/ovens/SF64M3PZS.jpg'),
(84, 'SF64M3TVS', 9, 1, 'فضي', 'images/products/ovens/SF64M3TVS.jpg'),
(85, 'SF64M3TVX', 9, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF64M3TVX.jpg'),
(86, 'SF64M3DX', 9, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF64M3DX.jpg'),
(87, 'SF64M3VAV2', 9, 1, 'لون الشوفان', 'images/products/ovens/SF64M3VAV2.jpg'),
(88, 'SF64M3VB', 9, 1, 'أبيض', 'images/products/ovens/SF64M3VB.jpg'),
(89, 'SFR9390X', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SFR9390X.jpg'),
(90, 'SF64M3VX', 9, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF64M3VX.jpg'),
(91, 'SF64M3VN', 9, 1, 'أسود', 'images/products/ovens/SF64M3VN.jpg'),
(92, 'SF64M3VS', 9, 1, 'فضي', 'images/products/ovens/SF64M3VS.jpg'),
(93, 'SF9390X1', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF9390X1.jpg'),
(94, 'SFP9395X1', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SFP9395X1.jpg'),
(95, 'SFR9300X', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SFR9300X.jpg'),
(96, 'SFP6925PPZE1', 10, 1, 'لون كريمي', 'images/products/ovens/SFP6925PPZE1.jpg'),
(97, 'SFP6925XPZE1', 10, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SFP6925XPZE1.jpg'),
(98, 'SFP6925NPZE1', 10, 1, 'أسود', 'images/products/ovens/SFP6925NPZE1.jpg'),
(99, 'SFP6925BPZE1', 10, 1, 'أبيض', 'images/products/ovens/SFP6925BPZE1.jpg'),
(100, 'SF6922NPZE1', 10, 1, 'أسود', 'images/products/ovens/SF6922NPZE1.jpg'),
(101, 'SF6922PPZE1', 10, 1, 'لون كريمي', 'images/products/ovens/SF6922PPZE1.jpg'),
(102, 'SF6922XPZE1', 10, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6922XPZE1.jpg'),
(103, 'SF6922BPZE1', 10, 1, 'أبيض', 'images/products/ovens/SF6922BPZE1.jpg'),
(104, 'SF6905NO1', 10, 1, 'أسود', 'images/products/ovens/SF6905NO1.jpg'),
(105, 'SF6905X1', 10, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF6905X1.jpg'),
(106, 'SFP750POPZ', 11, 1, 'لون كريمي', 'images/products/ovens/SFP750POPZ.jpg'),
(107, 'SF6905P1', 10, 1, 'لون كريمي', 'images/products/ovens/SF6905P1.jpg'),
(108, 'SF6905B1', 10, 1, 'أبيض', 'images/products/ovens/SF6905B1.jpg'),
(109, 'SFP750BSPZ', 11, 1, 'أبيض', 'images/products/ovens/SFP750BSPZ.jpg'),
(110, 'SF6905N1', 10, 1, 'أسود', 'images/products/ovens/SF6905N1.jpg'),
(111, 'SFP750AOPZ', 11, 1, 'لون فحم', 'images/products/ovens/SFP750AOPZ.jpg'),
(112, 'SF700BS', 11, 1, 'أبيض', 'images/products/ovens/SF700BS.jpg'),
(113, 'SF750AO', 11, 1, 'لون فحم', 'images/products/ovens/SF750AO.jpg'),
(114, 'SF750OT', 11, 1, 'نحاس قديم', 'images/products/ovens/SF750OT.jpg'),
(115, 'SF750RA', 11, 1, 'نحاسي', 'images/products/ovens/SF750RA.jpg'),
(116, 'SF750PO', 11, 1, 'لون كريمي', 'images/products/ovens/SF750PO.jpg'),
(117, 'SF800AO', 3, 1, 'لون فحم', 'images/products/ovens/SF800AO.jpg'),
(118, 'SF750AS', 11, 1, 'لون فحم', 'images/products/ovens/SF750AS.jpg'),
(119, 'SF750BS', 11, 1, 'أبيض', 'images/products/ovens/SF750BS.jpg'),
(120, 'SF700PO', 11, 1, 'لون كريمي', 'images/products/ovens/SF700PO.jpg'),
(121, 'SF7390X', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF7390X.jpg'),
(122, 'SF855AVO', 3, 1, 'لون الشوفان', 'images/products/ovens/SF855AVO.jpg'),
(123, 'SF855X', 3, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF855X.jpg'),
(124, 'SF855RA', 3, 1, 'نحاسي', 'images/products/ovens/SF855RA.jpg'),
(125, 'SF800PO', 3, 1, 'لون كريمي', 'images/products/ovens/SF800PO.jpg'),
(126, 'SF855PO', 3, 1, 'لون كريمي', 'images/products/ovens/SF855PO.jpg'),
(127, 'SF800AVO', 3, 1, 'لون الشوفان', 'images/products/ovens/SF800AVO.jpg'),
(128, 'SF855AO', 3, 1, 'لون فحم', 'images/products/ovens/SF855AO.jpg'),
(129, 'SF4120V', 5, 1, 'فضي', 'images/products/ovens/SF4120V.jpg'),
(130, 'SF4102VS', 5, 1, 'فضي', 'images/products/ovens/SF4102VS.jpg'),
(131, 'SF4104VCS', 5, 1, 'فضي', 'images/products/ovens/SF4104VCS.jpg'),
(132, 'SF4104VCN', 5, 1, 'أسود', 'images/products/ovens/SF4104VCN.jpg'),
(133, 'SF4102VCS', 5, 1, 'فضي', 'images/products/ovens/SF4102VCS.jpg'),
(134, 'SF4102MN', 5, 1, 'أسود', 'images/products/ovens/SF4102MN.jpg'),
(135, 'SF4102VCN', 5, 1, 'أسود', 'images/products/ovens/SF4102VCN.jpg'),
(136, 'SF4102MB', 5, 1, 'أبيض', 'images/products/ovens/SF4102MB.jpg'),
(137, 'SF4102MS', 5, 1, 'فضي', 'images/products/ovens/SF4102MS.jpg'),
(138, 'SF4102MCN', 5, 1, 'أسود', 'images/products/ovens/SF4102MCN.jpg'),
(139, 'SF4102MCS', 5, 1, 'فضي', 'images/products/ovens/SF4102MCS.jpg'),
(140, 'SF4102MCB', 5, 1, 'أبيض', 'images/products/ovens/SF4102MCB.jpg'),
(141, 'SF4101MS', 5, 1, 'فضي', 'images/products/ovens/SF4101MS.jpg'),
(142, 'SF4104MCS', 5, 1, 'فضي', 'images/products/ovens/SF4104MCS.jpg'),
(143, 'SF4120VCB', 5, 1, 'أبيض', 'images/products/ovens/SF4120VCB.jpg'),
(144, 'SF4120VCS', 5, 1, 'فضي', 'images/products/ovens/SF4120VCS.jpg'),
(145, 'SF4120VCN', 5, 1, 'أسود', 'images/products/ovens/SF4120VCN.jpg'),
(146, 'SF4104MCN', 5, 1, 'أسود', 'images/products/ovens/SF4104MCN.jpg'),
(147, 'SFP4120PZ', 5, 1, 'فضي', 'images/products/ovens/SFP4120PZ.jpg'),
(148, 'SF4120VC', 5, 1, 'فضي', 'images/products/ovens/SF4120VC.jpg'),
(149, 'SF4140VC', 5, 1, 'فضي', 'images/products/ovens/SF4140VC.jpg'),
(150, 'SF4309MX', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4309MX.jpg'),
(151, 'SF4140VCB', 5, 1, 'أبيض', 'images/products/ovens/SF4140VCB.jpg'),
(152, 'SFP4390XPZ', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SFP4390XPZ.jpg'),
(153, 'SF4390MCX', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4390MCX.jpg'),
(154, 'SF4390VX', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4390VX.jpg'),
(155, 'SF4390MX', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4390MX.jpg'),
(156, 'SF4390VX1', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4390VX1.jpg'),
(157, 'SF4400MX', 9, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4400MX.jpg'),
(158, 'SF4390VCX1', 7, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4390VCX1.jpg'),
(159, 'SF4920MCP1', 10, 1, 'لون كريمي', 'images/products/ovens/SF4920MCP1.jpg'),
(160, 'SF4920MCX1', 10, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4920MCX1.jpg'),
(161, 'SF4920MCP', 10, 1, 'لون كريمي', 'images/products/ovens/SF4920MCP.jpg'),
(162, 'SF4920MCN1', 10, 1, 'أسود', 'images/products/ovens/SF4920MCN1.jpg'),
(163, 'SF4400MCX', 9, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4400MCX.jpg'),
(164, 'SF4920MCB1', 10, 1, 'أبيض', 'images/products/ovens/SF4920MCB1.jpg'),
(165, 'SF4920VCB', 10, 1, 'أبيض', 'images/products/ovens/SF4920VCB.jpg'),
(166, 'SF4920VCP', 10, 1, 'لون كريمي', 'images/products/ovens/SF4920VCP.jpg'),
(167, 'SF4920VCN', 10, 1, 'أسود', 'images/products/ovens/SF4920VCN.jpg'),
(168, 'SF4920VCN1', 10, 1, 'أسود', 'images/products/ovens/SF4920VCN1.jpg'),
(169, 'SF4920VCX1', 10, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4920VCX1.jpg'),
(170, 'SF4920VCX', 10, 1, 'الفولاذ المقاوم للصدأ', 'images/products/ovens/SF4920VCX.jpg'),
(171, 'SF4920VCB1', 10, 1, 'أبيض', 'images/products/ovens/SF4920VCB1.jpg'),
(172, 'SF4920VCP1', 10, 1, 'لون كريمي', 'images/products/ovens/SF4920VCP1.jpg'),
(173, 'SF4750MPO', 11, 1, 'لون كريمي', 'images/products/ovens/SF4750MPO.jpg'),
(174, 'SF4750MAO', 11, 1, 'لون فحم', 'images/products/ovens/SF4750MAO.jpg'),
(175, 'SF4750MBS', 11, 1, 'أبيض', 'images/products/ovens/SF4750MBS.jpg'),
(176, 'SF4800MAO', 3, 1, 'لون فحم', 'images/products/ovens/SF4800MAO.jpg'),
(177, 'SF4800MPO', 3, 1, 'لون كريمي', 'images/products/ovens/SF4800MPO.jpg'),
(366, 'TSF01CHMEU', 8, 8, 'ذهبي', 'images/products/toasters/TSF01CHMEU.jpg'),
(367, 'TSF01BLMEU', 8, 8, 'أسود', 'images/products/toasters/TSF01BLMEU.jpg'),
(368, 'TSF01WHMEU', 8, 8, 'أبيض', 'images/products/toasters/TSF01WHMEU.jpg'),
(369, 'TSF01CREU', 8, 8, 'لون كريمي', 'images/products/toasters/TSF01CREU.jpg'),
(370, 'TSF01BLEU', 8, 8, 'أسود', 'images/products/toasters/TSF01BLEU.jpg'),
(371, 'TSF01PBEU', 8, 8, 'أزرق فاتح', 'images/products/toasters/TSF01PBEU.jpg'),
(372, 'TSF01PKEU', 8, 8, 'وردي', 'images/products/toasters/TSF01PKEU.jpg'),
(373, 'TSF01PGEU', 8, 8, 'أخضر فاتح', 'images/products/toasters/TSF01PGEU.jpg'),
(374, 'TSF01RDEU', 8, 8, 'أحمر', 'images/products/toasters/TSF01RDEU.jpg'),
(375, 'TSF01SSEU', 8, 8, 'كروم', 'images/products/toasters/TSF01SSEU.jpg'),
(376, 'TSF01WHEU', 8, 8, 'أبيض', 'images/products/toasters/TSF01WHEU.jpg'),
(377, 'TSF01GOEU', 8, 8, 'ذهبي', 'images/products/toasters/TSF01GOEU.jpg'),
(378, 'TSF01RGEU', 8, 8, 'ذهب وردي', 'images/products/toasters/TSF01RGEU.jpg'),
(379, 'TSF02BLEU', 8, 8, 'أسود', 'images/products/toasters/TSF02BLEU.jpg'),
(380, 'TSF02PGEU', 8, 8, 'أخضر فاتح', 'images/products/toasters/TSF02PGEU.jpg'),
(381, 'TSF02CREU', 8, 8, 'لون كريمي', 'images/products/toasters/TSF02CREU.jpg'),
(382, 'TSF02PBEU', 8, 8, 'أزرق فاتح', 'images/products/toasters/TSF02PBEU.jpg'),
(383, 'TSF02SSEU', 8, 8, 'كروم', 'images/products/toasters/TSF02SSEU.jpg'),
(384, 'TSF02PKEU', 8, 8, 'وردي', 'images/products/toasters/TSF02PKEU.jpg'),
(385, 'TSF02RDEU', 8, 8, 'أحمر', 'images/products/toasters/TSF02RDEU.jpg'),
(386, 'TSF02WHEU', 8, 8, 'أبيض', 'images/products/toasters/TSF02WHEU.jpg'),
(387, 'TSF03BLEU', 8, 8, 'أسود', 'images/products/toasters/TSF03BLEU.jpg'),
(388, 'TSF03CREU', 8, 8, 'لون كريمي', 'images/products/toasters/TSF03CREU.jpg'),
(389, 'TSF03PBEU', 8, 8, 'أزرق فاتح', 'images/products/toasters/TSF03PBEU.jpg'),
(390, 'TSF03PGEU', 8, 8, 'أخضر فاتح', 'images/products/toasters/TSF03PGEU.jpg'),
(391, 'TSF03PKEU', 8, 8, 'وردي', 'images/products/toasters/TSF03PKEU.jpg'),
(392, 'TSF03RDEU', 8, 8, 'أحمر', 'images/products/toasters/TSF03RDEU.jpg'),
(393, 'TSF03WHEU', 8, 8, 'أبيض', 'images/products/toasters/TSF03WHEU.jpg'),
(394, 'TSF03SSEU', 8, 8, 'كروم', 'images/products/toasters/TSF03SSEU.jpg'),
(557, 'RI360RX', 7, 7, 'الفولاذ المقاوم للصدأ', 'images/products/refrigerators/RI360RX.jpg'),
(558, 'FAB5RWH', 8, 7, 'أبيض', 'images/products/refrigerators/FAB5RWH.jpg'),
(559, 'FAB5LWH', 8, 7, 'أبيض', 'images/products/refrigerators/FAB5LWH.jpg'),
(560, 'FAB5LWH3', 8, 7, 'أبيض', 'images/products/refrigerators/FAB5LWH3.jpg'),
(561, 'FAB5RBL', 8, 7, 'أسود', 'images/products/refrigerators/FAB5RBL.jpg'),
(562, 'FAB5RWH3', 8, 7, 'أبيض', 'images/products/refrigerators/FAB5RWH3.jpg'),
(563, 'FAB5RBL3', 8, 7, 'أسود', 'images/products/refrigerators/FAB5RBL3.jpg'),
(564, 'FAB5LBL3', 8, 7, 'أسود', 'images/products/refrigerators/FAB5LBL3.jpg'),
(565, 'FAB5ROR3', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB5ROR3.jpg'),
(566, 'FAB5LOR', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB5LOR.jpg'),
(567, 'FAB5LCR3', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB5LCR3.jpg'),
(568, 'FAB5RSV3', 8, 7, 'فضي', 'images/products/refrigerators/FAB5RSV3.jpg'),
(569, 'FAB5LSV3', 8, 7, 'فضي', 'images/products/refrigerators/FAB5LSV3.jpg'),
(570, 'FAB5RRD3', 8, 7, 'أحمر', 'images/products/refrigerators/FAB5RRD3.jpg'),
(571, 'FAB5LRD', 8, 7, 'أحمر', 'images/products/refrigerators/FAB5LRD.jpg'),
(572, 'FAB5LOR3', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB5LOR3.jpg'),
(573, 'FAB5RCR3', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB5RCR3.jpg'),
(574, 'FAB5RRD', 8, 7, 'أحمر', 'images/products/refrigerators/FAB5RRD.jpg'),
(575, 'FAB5LRD3', 8, 7, 'أحمر', 'images/products/refrigerators/FAB5LRD3.jpg'),
(576, 'FAB5RGO', 8, 7, 'ذهبي', 'images/products/refrigerators/FAB5RGO.jpg'),
(577, 'FAB5RDGO3', 8, 7, 'ذهبي', 'images/products/refrigerators/FAB5RDGO3.jpg'),
(578, 'FAB5RPB3', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB5RPB3.jpg'),
(579, 'FAB5LPB3', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB5LPB3.jpg'),
(580, 'FAB5RPK3', 8, 7, 'وردي', 'images/products/refrigerators/FAB5RPK3.jpg'),
(581, 'FAB5RPG3', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB5RPG3.jpg'),
(582, 'FAB5LPG', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB5LPG.jpg'),
(583, 'FAB5LPG3', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB5LPG3.jpg'),
(584, 'FAB5LPK', 8, 7, 'وردي', 'images/products/refrigerators/FAB5LPK.jpg'),
(585, 'FAB10RPB2', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB10RPB2.jpg'),
(586, 'FAB5LPK3', 8, 7, 'وردي', 'images/products/refrigerators/FAB5LPK3.jpg'),
(587, 'FAB10LCR2', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB10LCR2.jpg'),
(588, 'FAB10RP', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB10RP.jpg'),
(589, 'FAB10RPG2', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB10RPG2.jpg'),
(590, 'FAB10RPK2', 8, 7, 'وردي', 'images/products/refrigerators/FAB10RPK2.jpg'),
(591, 'FAB10RCR2', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB10RCR2.jpg'),
(592, 'FAB10LOR2', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB10LOR2.jpg'),
(593, 'FAB10ROR2', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB10ROR2.jpg'),
(594, 'FAB10RBL2', 8, 7, 'أسود', 'images/products/refrigerators/FAB10RBL2.jpg'),
(595, 'FAB10RNE', 8, 7, 'أسود', 'images/products/refrigerators/FAB10RNE.jpg'),
(596, 'FAB10RR', 8, 7, 'أحمر', 'images/products/refrigerators/FAB10RR.jpg'),
(597, 'FAB10LBL2', 8, 7, 'أسود', 'images/products/refrigerators/FAB10LBL2.jpg'),
(598, 'FAB10RRD2', 8, 7, 'أحمر', 'images/products/refrigerators/FAB10RRD2.jpg'),
(599, 'FAB10LRD2', 8, 7, 'أحمر', 'images/products/refrigerators/FAB10LRD2.jpg'),
(600, 'FAB10RB', 8, 7, 'أبيض', 'images/products/refrigerators/FAB10RB.jpg'),
(601, 'FAB10RWH2', 8, 7, 'أبيض', 'images/products/refrigerators/FAB10RWH2.jpg'),
(602, 'FAB10LB', 8, 7, 'أبيض', 'images/products/refrigerators/FAB10LB.jpg'),
(603, 'FAB10LWH2', 8, 7, 'أبيض', 'images/products/refrigerators/FAB10LWH2.jpg'),
(604, 'FAB10HRR', 8, 7, 'أحمر', 'images/products/refrigerators/FAB10HRR.jpg'),
(605, 'FAB10HLR', 8, 7, 'أحمر', 'images/products/refrigerators/FAB10HLR.jpg'),
(606, 'FAB10HRNE', 8, 7, 'أسود', 'images/products/refrigerators/FAB10HRNE.jpg'),
(607, 'FAB10HRP', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB10HRP.jpg'),
(608, 'FAB10HLNE', 8, 7, 'أسود', 'images/products/refrigerators/FAB10HLNE.jpg'),
(609, 'FAB10HLP', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB10HLP.jpg'),
(610, 'FAB10HRB', 8, 7, 'أبيض', 'images/products/refrigerators/FAB10HRB.jpg'),
(611, 'FAB10HRCR2', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB10HRCR2.jpg'),
(612, 'FAB10HLB', 8, 7, 'أبيض', 'images/products/refrigerators/FAB10HLB.jpg'),
(613, 'FAB38RBL', 8, 7, 'أسود', 'images/products/refrigerators/FAB38RBL.jpg'),
(614, 'FAB38RCR', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB38RCR.jpg'),
(615, 'FAB38LCR', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB38LCR.jpg'),
(616, 'FAB38RWH', 8, 7, 'أبيض', 'images/products/refrigerators/FAB38RWH.jpg'),
(617, 'FAB38LBL', 8, 7, 'أسود', 'images/products/refrigerators/FAB38LBL.jpg'),
(618, 'FAB38RPB', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB38RPB.jpg'),
(619, 'FAB38RPG', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB38RPG.jpg'),
(620, 'FAB38RRD', 8, 7, 'أحمر', 'images/products/refrigerators/FAB38RRD.jpg'),
(621, 'FAB28RWH3', 8, 7, 'أبيض', 'images/products/refrigerators/FAB28RWH3.jpg'),
(622, 'FAB28LWH3', 8, 7, 'أبيض', 'images/products/refrigerators/FAB28LWH3.jpg'),
(623, 'FAB28RYW3', 8, 7, 'أصفر', 'images/products/refrigerators/FAB28RYW3.jpg'),
(624, 'FAB28LYW3', 8, 7, 'أصفر', 'images/products/refrigerators/FAB28LYW3.jpg'),
(625, 'FAB28RPG3', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB28RPG3.jpg'),
(626, 'FAB28RBL3', 8, 7, 'أسود', 'images/products/refrigerators/FAB28RBL3.jpg'),
(627, 'FAB28LBL3', 8, 7, 'أسود', 'images/products/refrigerators/FAB28LBL3.jpg'),
(628, 'FAB28RPK3', 8, 7, 'وردي', 'images/products/refrigerators/FAB28RPK3.jpg'),
(629, 'FAB28RPB3', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB28RPB3.jpg'),
(630, 'FAB28LPK3', 8, 7, 'وردي', 'images/products/refrigerators/FAB28LPK3.jpg'),
(631, 'FAB28LPB3', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB28LPB3.jpg'),
(632, 'FAB28LPG3', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB28LPG3.jpg'),
(633, 'FAB28LCR3', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB28LCR3.jpg'),
(634, 'FAB28RCR3', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB28RCR3.jpg'),
(635, 'FAB28LOR3', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB28LOR3.jpg'),
(636, 'FAB28ROR3', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB28ROR3.jpg'),
(637, 'FAB28RDEG3', 8, 7, 'اخضر زمردي', 'images/products/refrigerators/FAB28RDEG3.jpg'),
(638, 'FAB28RBE3', 8, 7, 'أزرق', 'images/products/refrigerators/FAB28RBE3.jpg'),
(639, 'FAB28RRD3', 8, 7, 'أحمر', 'images/products/refrigerators/FAB28RRD3.jpg'),
(640, 'FAB28LRD3', 8, 7, 'أحمر', 'images/products/refrigerators/FAB28LRD3.jpg'),
(641, 'FAB28RSV3', 8, 7, 'فضي', 'images/products/refrigerators/FAB28RSV3.jpg'),
(642, 'FAB28LSV3', 8, 7, 'فضي', 'images/products/refrigerators/FAB28LSV3.jpg'),
(643, 'FAB28RDRB3', 8, 7, 'أحمر ياقوتي', 'images/products/refrigerators/FAB28RDRB3.jpg'),
(644, 'FAB28RDTP3', 8, 7, 'رمادي داكن', 'images/products/refrigerators/FAB28RDTP3.jpg'),
(645, 'FAB30RPB3', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB30RPB3.jpg'),
(646, 'FAB30RWH3', 8, 7, 'أبيض', 'images/products/refrigerators/FAB30RWH3.jpg'),
(647, 'FAB30LPB3', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB30LPB3.jpg'),
(648, 'FAB30LAZ1', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB30LAZ1.jpg'),
(649, 'FAB30LWH3', 8, 7, 'أبيض', 'images/products/refrigerators/FAB30LWH3.jpg'),
(650, 'FAB30LNE1', 8, 7, 'أسود', 'images/products/refrigerators/FAB30LNE1.jpg'),
(651, 'FAB30RBL3', 8, 7, 'أسود', 'images/products/refrigerators/FAB30RBL3.jpg'),
(652, 'FAB30LBL3', 8, 7, 'أسود', 'images/products/refrigerators/FAB30LBL3.jpg'),
(653, 'FAB30RBE3', 8, 7, 'أزرق', 'images/products/refrigerators/FAB30RBE3.jpg'),
(654, 'FAB30ROR3', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB30ROR3.jpg'),
(655, 'FAB30RCR3', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB30RCR3.jpg'),
(656, 'FAB30LOR3', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB30LOR3.jpg'),
(657, 'FAB30LP1', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB30LP1.jpg'),
(658, 'FAB30RRO1', 8, 7, 'وردي', 'images/products/refrigerators/FAB30RRO1.jpg'),
(659, 'FAB30LCR3', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB30LCR3.jpg'),
(660, 'FAB30LRD3', 8, 7, 'أحمر', 'images/products/refrigerators/FAB30LRD3.jpg'),
(661, 'FAB30RRD3', 8, 7, 'أحمر', 'images/products/refrigerators/FAB30RRD3.jpg'),
(662, 'FAB30LR1', 8, 7, 'أحمر', 'images/products/refrigerators/FAB30LR1.jpg'),
(663, 'FAB30RV1', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB30RV1.jpg'),
(664, 'FAB30RPK3', 8, 7, 'وردي', 'images/products/refrigerators/FAB30RPK3.jpg'),
(665, 'FAB30LRO1', 8, 7, 'وردي', 'images/products/refrigerators/FAB30LRO1.jpg'),
(666, 'FAB30LPK3', 8, 7, 'وردي', 'images/products/refrigerators/FAB30LPK3.jpg'),
(667, 'FAB30LPG3', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB30LPG3.jpg'),
(668, 'FAB30RPG3', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB30RPG3.jpg'),
(669, 'FAB30LV1', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB30LV1.jpg'),
(670, 'FAB30RSV3', 8, 7, 'فضي', 'images/products/refrigerators/FAB30RSV3.jpg'),
(671, 'FAB30LSV3', 8, 7, 'فضي', 'images/products/refrigerators/FAB30LSV3.jpg'),
(672, 'FAB32RCR3', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB32RCR3.jpg'),
(673, 'FAB32LCR3', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB32LCR3.jpg'),
(674, 'FAB32RWH3', 8, 7, 'أبيض', 'images/products/refrigerators/FAB32RWH3.jpg'),
(675, 'FAB32LPB3', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB32LPB3.jpg'),
(676, 'FAB32LWH3', 8, 7, 'أبيض', 'images/products/refrigerators/FAB32LWH3.jpg'),
(677, 'FAB32RPB3', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB32RPB3.jpg'),
(678, 'FAB32RBE3', 8, 7, 'أزرق', 'images/products/refrigerators/FAB32RBE3.jpg'),
(679, 'FAB32ROR3', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB32ROR3.jpg'),
(680, 'FAB32LOR3', 8, 7, 'برتقالي', 'images/products/refrigerators/FAB32LOR3.jpg'),
(681, 'FAB32LPG3', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB32LPG3.jpg'),
(682, 'FAB32RBL3', 8, 7, 'أسود', 'images/products/refrigerators/FAB32RBL3.jpg'),
(683, 'FAB32LBL3', 8, 7, 'أسود', 'images/products/refrigerators/FAB32LBL3.jpg'),
(684, 'FAB32RPK3', 8, 7, 'وردي', 'images/products/refrigerators/FAB32RPK3.jpg'),
(685, 'FAB32RRD3', 8, 7, 'أحمر', 'images/products/refrigerators/FAB32RRD3.jpg'),
(686, 'FAB32LPK3', 8, 7, 'وردي', 'images/products/refrigerators/FAB32LPK3.jpg'),
(687, 'FAB32RSV3', 8, 7, 'فضي', 'images/products/refrigerators/FAB32RSV3.jpg'),
(688, 'FAB32LRD3', 8, 7, 'أحمر', 'images/products/refrigerators/FAB32LRD3.jpg'),
(689, 'FAB32LSV3', 8, 7, 'فضي', 'images/products/refrigerators/FAB32LSV3.jpg'),
(690, 'FAB32RRON1', 8, 7, 'وردي', 'images/products/refrigerators/FAB32RRON1.jpg'),
(691, 'FAB50RSV', 8, 7, 'فضي', 'images/products/refrigerators/FAB50RSV.jpg'),
(692, 'FAB50LSV', 8, 7, 'فضي', 'images/products/refrigerators/FAB50LSV.jpg'),
(693, 'FAB50RCRB', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB50RCRB.jpg'),
(694, 'FAB50LCRB', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB50LCRB.jpg'),
(695, 'FAB50RCR', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB50RCR.jpg'),
(696, 'FAB50RWH', 8, 7, 'أبيض', 'images/products/refrigerators/FAB50RWH.jpg'),
(697, 'FAB50LWH', 8, 7, 'أبيض', 'images/products/refrigerators/FAB50LWH.jpg'),
(698, 'FAB50RBL', 8, 7, 'أسود', 'images/products/refrigerators/FAB50RBL.jpg'),
(699, 'FAB50LBL', 8, 7, 'أسود', 'images/products/refrigerators/FAB50LBL.jpg'),
(700, 'FAB50LCR', 8, 7, 'لون كريمي', 'images/products/refrigerators/FAB50LCR.jpg'),
(701, 'FAB50RPB', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB50RPB.jpg'),
(702, 'FAB50LPB', 8, 7, 'أزرق فاتح', 'images/products/refrigerators/FAB50LPB.jpg'),
(703, 'FAB50RPG', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB50RPG.jpg'),
(704, 'FAB50LPG', 8, 7, 'أخضر فاتح', 'images/products/refrigerators/FAB50LPG.jpg'),
(705, 'FAB50RRD', 8, 7, 'أحمر', 'images/products/refrigerators/FAB50RRD.jpg'),
(706, 'RF396RSIX', 7, 7, 'الفولاذ المقاوم للصدأ', 'images/products/refrigerators/RF396RSIX.jpg'),
(707, 'RF396LSIX', 7, 7, 'الفولاذ المقاوم للصدأ', 'images/products/refrigerators/RF396LSIX.jpg'),
(708, 'FAB50LRD', 8, 7, 'أحمر', 'images/products/refrigerators/FAB50LRD.jpg'),
(709, 'FA8003POS', 3, 7, 'لون كريمي', 'images/products/refrigerators/FA8003POS.jpg'),
(710, 'FA8003P', 3, 7, 'لون كريمي', 'images/products/refrigerators/FA8003P.jpg'),
(711, 'FA390XS4', 7, 7, 'الفولاذ المقاوم للصدأ', 'images/products/refrigerators/FA390XS4.jpg'),
(712, 'FA390X4', 7, 7, 'الفولاذ المقاوم للصدأ', 'images/products/refrigerators/FA390X4.jpg'),
(713, 'FA8003AO', 3, 7, 'لون فحم', 'images/products/refrigerators/FA8003AO.jpg'),
(714, 'FA8003AOS', 3, 7, 'لون فحم', 'images/products/refrigerators/FA8003AOS.jpg'),
(715, 'FA8003PO', 3, 7, 'لون كريمي', 'images/products/refrigerators/FA8003PO.jpg'),
(716, 'FA8003PS', 3, 7, 'لون كريمي', 'images/products/refrigerators/FA8003PS.jpg'),
(717, 'RF376LSIX', 7, 7, 'الفولاذ المقاوم للصدأ', 'images/products/refrigerators/RF376LSIX.jpg'),
(718, 'RF376RSIX', 7, 7, 'الفولاذ المقاوم للصدأ', 'images/products/refrigerators/RF376RSIX.jpg'),
(719, 'SMEG500R', 8, 7, 'أحمر', 'images/products/refrigerators/SMEG500R.jpg'),
(720, 'SMEG500V', 8, 7, 'أخضر', 'images/products/refrigerators/SMEG500V.jpg'),
(721, 'SMEG500B', 8, 7, 'أبيض', 'images/products/refrigerators/SMEG500B.jpg'),
(722, 'SMEG500BL', 8, 7, 'أزرق', 'images/products/refrigerators/SMEG500BL.jpg'),
(723, 'SMEG500G', 8, 7, 'أصفر', 'images/products/refrigerators/SMEG500G.jpg'),
(724, 'SBS8004PO', 3, 7, 'لون كريمي', 'images/products/refrigerators/SBS8004PO.jpg'),
(725, 'SBS8004AO', 3, 7, 'لون فحم', 'images/products/refrigerators/SBS8004AO.jpg'),
(726, 'SBS8004P', 3, 7, 'لون كريمي', 'images/products/refrigerators/SBS8004P.jpg'),
(727, 'FA63X', 7, 7, 'الفولاذ المقاوم للصدأ', 'images/products/refrigerators/FA63X.jpg'),
(728, 'FA63XBI', 7, 7, 'الفولاذ المقاوم للصدأ', 'images/products/refrigerators/FA63XBI.jpg'),
(729, 'SBS963P', 10, 7, 'لون كريمي', 'images/products/refrigerators/SBS963P.jpg'),
(730, 'SBS963N', 10, 7, 'أسود', 'images/products/refrigerators/SBS963N.jpg'),
(731, 'FQ960P', 10, 7, 'لون كريمي', 'images/products/refrigerators/FQ960P.jpg'),
(732, 'FQ960N', 10, 7, 'أسود', 'images/products/refrigerators/FQ960N.jpg'),
(733, 'FQ960PB', 10, 7, 'أزرق فاتح', 'images/products/refrigerators/FQ960PB.jpg'),
(734, 'FQ60CPO', 3, 7, 'لون كريمي', 'images/products/refrigerators/FQ60CPO.jpg'),
(735, 'FQ60CAO', 3, 7, 'لون فحم', 'images/products/refrigerators/FQ60CAO.jpg'),
(736, 'FI360LX', 7, 18, 'الفولاذ المقاوم للصدأ', 'images/products/freezers/FI360LX.jpg'),
(737, 'CVB20LNE1', 8, 18, 'أسود', 'images/products/freezers/CVB20LNE1.jpg'),
(738, 'CVB20RP1', 8, 18, 'لون كريمي', 'images/products/freezers/CVB20RP1.jpg'),
(739, 'CVB20LP1', 8, 18, 'لون كريمي', 'images/products/freezers/CVB20LP1.jpg'),
(740, 'CVB20LR1', 8, 18, 'أحمر', 'images/products/freezers/CVB20LR1.jpg'),
(741, 'CVB20RNE1', 8, 18, 'أسود', 'images/products/freezers/CVB20RNE1.jpg'),
(742, 'CVB20RR1', 8, 18, 'أحمر', 'images/products/freezers/CVB20RR1.jpg'),
(743, 'FMI425X', 9, 4, 'الفولاذ المقاوم للصدأ', 'images/products/microwaveOvens/FMI425X.jpg'),
(744, 'FMI425S', 9, 4, 'الفولاذ المقاوم للصدأ', 'images/products/microwaveOvens/FMI425S.jpg'),
(745, 'MP322X1', 7, 4, 'الفولاذ المقاوم للصدأ', 'images/products/microwaveOvens/MP322X1.jpg'),
(746, 'FMI325X', 7, 4, 'الفولاذ المقاوم للصدأ', 'images/products/microwaveOvens/FMI325X.jpg'),
(747, 'MP122B1', 5, 4, 'أبيض', 'images/products/microwaveOvens/MP122B1.jpg'),
(748, 'MP122S1', 5, 4, 'فضي', 'images/products/microwaveOvens/MP122S1.jpg'),
(749, 'FMI320X', 7, 4, 'الفولاذ المقاوم للصدأ', 'images/products/microwaveOvens/FMI320X.jpg'),
(750, 'FMI120S1', 5, 4, 'فضي', 'images/products/microwaveOvens/FMI120S1.jpg'),
(751, 'FMI120N1', 5, 4, 'أسود', 'images/products/microwaveOvens/FMI120N1.jpg'),
(752, 'FMI420S', 9, 4, 'فضي', 'images/products/microwaveOvens/FMI420S.jpg'),
(753, 'MP122N1', 5, 4, 'أسود', 'images/products/microwaveOvens/MP122N1.jpg'),
(754, 'FMI120B1', 5, 4, 'أبيض', 'images/products/microwaveOvens/FMI120B1.jpg'),
(755, 'CMS4604NR', 1, 5, 'أسود', 'images/products/coffeemachines/CMS4604NR.jpg'),
(756, 'CMS4303X', 7, 5, 'الفولاذ المقاوم للصدأ', 'images/products/coffeemachines/CMS4303X.jpg'),
(757, 'CMS4101N', 5, 5, 'أسود', 'images/products/coffeemachines/CMS4101N.jpg'),
(758, 'CMS4104S', 5, 5, 'فضي', 'images/products/coffeemachines/CMS4104S.jpg'),
(759, 'CMS4604NX', 1, 5, 'أسود', 'images/products/coffeemachines/CMS4604NX.jpg'),
(760, 'CMS4101S', 5, 5, 'فضي', 'images/products/coffeemachines/CMS4101S.jpg'),
(761, 'CMS4104N', 5, 5, 'أسود', 'images/products/coffeemachines/CMS4104N.jpg'),
(762, 'CMSC45NE', 5, 5, 'أسود', 'images/products/coffeemachines/CMSC45NE.jpg'),
(763, 'CMSC451B', 5, 5, 'أبيض', 'images/products/coffeemachines/CMSC451B.jpg'),
(764, 'CMS6451X', 7, 5, 'الفولاذ المقاوم للصدأ', 'images/products/coffeemachines/CMS6451X.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sub_cat`
--

CREATE TABLE `sub_cat` (
  `main_cat_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `en_name` varchar(60) NOT NULL,
  `cat_desc` varchar(600) NOT NULL,
  `sub_cat_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sub_cat`
--

INSERT INTO `sub_cat` (`main_cat_id`, `name`, `en_name`, `cat_desc`, `sub_cat_id`) VALUES
(1, 'أفران', 'oven', 'تقدم Smeg مجموعة واسعة من الأفران المدمجة ، المصممة والمنتجة في إيطاليا ، مع العديد من الوظائف المثالية لأي نوع من المأكولات ، من البيتزا إلى الحلويات الأكثر دقة. تختلف في الحجم والتشطيب ، وهي متوفرة بثمانية أشكال جمالية حصرية يمكن تنسيقها مع أجهزة Smeg المدمجة الأخرى: المواقد ، والشفاطات ، وآلات القهوة ، والأدراج ، و المبردات.', 1),
(1, 'غسالات', 'washer', 'تقدم Smeg مجموعة واسعة من الغسالات القائمة بذاتها والمدمجة.', 2),
(2, 'الخلاطات', 'blenders', 'تمزج خلاطات Smeg بشكل مثالي بين المكونات المختلفة القوام إلى الكمال لترافقك طوال اليوم.', 3),
(1, 'أفران الميكروويف', 'microwave-oven', 'تتوفر أفران الميكروويف Smeg في عدد من التصميمات المختلفة التي تم إنشاؤها للحفاظ على المبادئ الجمالية لمجموعة المنتجات.', 4),
(1, 'ماكينات صنع القهوة', 'coffee-machines', 'يمكن لآلة صنع القهوة المدمجة Smeg ، في الواقع ، استخدام كل من البن المطحون وأقراص القهوة ، مما يسمح لعشاق القهوة الإيطالية باختيار التحميص المفضل لديهم والحصول على طعم ورائحة شريط الإسبريسو الحقيقيين.', 5),
(1, 'غسالات صحون', 'dishwashers', 'تعتبر غسالات الأطباق القائمة بذاتها أو المدمجة من Smeg الطريقة المثالية لإكمال مطبخك بأناقة.', 6),
(1, 'ثلاجات', 'refrigerators', 'تقدم Smeg مجموعة مذهلة من الثلاجات ، مصممة لتبدو رائعة وتحافظ على طعامك طازجًا ومشروباتك باردة.', 7),
(2, 'محمصات التوست', 'toasters', 'تجمع محمصة Smeg بين بيئة العمل والوظائف والتوازن الجمالي. الإفطار أو الغداء أو الغداء أو الوجبة الخفيفة - عندما تقع في حب محمصة SMEG 50\'s Style ، ستجد كل الأعذار المتاحة لاستخدامها.', 8),
(2, 'غلايات', 'kettles', 'تتميز غلايات Smeg بالسرعة والأمان والموثوقية ، وهي توفر هيكلًا من الفولاذ المقاوم للصدأ ، وسعة كبيرة تبلغ 1.7 لترًا وقاعدة لاسلكية مما يجعلها أكثر عملية وعملية حيث يمكن إعادة وضعها حسب الرغبة.', 9),
(2, 'الخلاطات اليدوية', 'hand-blenders', 'صُمم الخلاط اليدوي Smeg ليكون متينًا وعمليًا ومفيدًا بمقبضه العملي المريح والمقاوم للانزلاق ، وهو جهاز منزلي لا غنى عنه للطهي بسرعة وذكاء', 10),
(2, 'خلاطات بقاعدة', 'stand-mixers', 'خلاطات ستاند Smeg ، التي تتميز بخطوط منحنية وألوان نابضة بالحياة تعكس روحك الإبداعية وشغفك بالطهي ، هي حليفك المثالي في المطبخ.', 11),
(2, 'آلات رغوة الحليب', 'milk-frothers', 'يعتبر جهاز إزباد الحليب Smeg\'s مثاليًا للكابتشينو واللاتيه ماكياتو والأبيض المسطح بالإضافة إلى تحضير المشروبات الفورية مثل الشوكولاتة الساخنة.', 12),
(1, 'مجمدات', 'freezers', 'طورت Smeg مجموعة واسعة من المجمدات ، مدمجة أو طرز قائمة بذاتها، بتصميم معاصر، وأدراج صلبة وسعة كبيرة.', 18);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `aes_lines`
--
ALTER TABLE `aes_lines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_cat`
--
ALTER TABLE `main_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`),
  ADD KEY `sub_cat_id_fk` (`sub_cat_id`),
  ADD KEY `line_id_fk` (`line_id`);

--
-- Indexes for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD PRIMARY KEY (`sub_cat_id`),
  ADD KEY `main_cats_id_fk` (`main_cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `aes_lines`
--
ALTER TABLE `aes_lines`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `main_cat`
--
ALTER TABLE `main_cat`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=765;

--
-- AUTO_INCREMENT for table `sub_cat`
--
ALTER TABLE `sub_cat`
  MODIFY `sub_cat_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `line_id_fk` FOREIGN KEY (`line_id`) REFERENCES `aes_lines` (`id`),
  ADD CONSTRAINT `sub_cat_id_fk` FOREIGN KEY (`sub_cat_id`) REFERENCES `sub_cat` (`sub_cat_id`);

--
-- Constraints for table `sub_cat`
--
ALTER TABLE `sub_cat`
  ADD CONSTRAINT `main_cats_id_fk` FOREIGN KEY (`main_cat_id`) REFERENCES `main_cat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
