-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2019 at 07:19 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ams`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `email`, `message`) VALUES
(1, 'suhel@gmail.com', 'bfbf'),
(2, 'admin@gmail.com', 'gtff'),
(3, 'suhel@gmail.com', '123er'),
(4, 'temail834@gmail.com', '123'),
(5, 'suhel@gmail.com', 'ssfsf'),
(6, 'suhel@gmail.com', 'sffffffffff'),
(7, 'admin@gmail.com', 'dd'),
(8, 'admin@gmail.com', 'suhellllllllllll'),
(9, 'suhel@gmail.com', ' nvbn'),
(10, 'admin@gmail.com', 'ddddddddddddddddd');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_item`
--

CREATE TABLE `tbl_item` (
  `i_id` int(11) NOT NULL,
  `o_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `amount` double NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_item`
--

INSERT INTO `tbl_item` (`i_id`, `o_id`, `p_id`, `quantity`, `price`, `amount`, `status`) VALUES
(1, 1, 15, 1, 14000, 14000, 1),
(2, 1, 17, 1, 700, 700, 0),
(3, 1, 11, 1, 3500, 3500, 0),
(4, 1, 12, 3, 12500, 37500, 0),
(5, 2, 11, 1, 3500, 3500, 0),
(6, 3, 11, 1, 3500, 3500, 0),
(7, 3, 6, 1, 3500, 3500, 0),
(8, 4, 12, 1, 12500, 12500, 0),
(9, 4, 10, 1, 25000, 25000, 0),
(10, 5, 16, 1, 11500, 11500, 1),
(11, 5, 11, 1, 3500, 3500, 1),
(12, 5, 13, 1, 13500, 13500, 1),
(13, 5, 16, 1, 11500, 11500, 0),
(14, 6, 17, 1, 700, 700, 0),
(15, 6, 11, 1, 3500, 3500, 0),
(16, 7, 27, 2, 12500, 25000, 0),
(17, 8, 19, 1, 350, 350, 0),
(18, 9, 18, 1, 2500, 2500, 0),
(19, 10, 11, 1, 3500, 3500, 0),
(20, 11, 15, 1, 14000, 14000, 0),
(21, 12, 15, 1, 14000, 14000, 0),
(22, 13, 11, 1, 3500, 3500, 0),
(23, 14, 16, 1, 11500, 11500, 0),
(24, 15, 11, 1, 3500, 3500, 0),
(25, 16, 16, 1, 11500, 11500, 0),
(26, 17, 16, 1, 11500, 11500, 0),
(27, 18, 16, 1, 11500, 11500, 0),
(28, 18, 12, 1, 12500, 12500, 0),
(29, 19, 27, 1, 12500, 12500, 1),
(30, 19, 15, 1, 14000, 14000, 1),
(31, 20, 16, 1, 11500, 11500, 1),
(32, 20, 27, 1, 12500, 12500, 1),
(33, 20, 27, 1, 12500, 12500, 1),
(34, 20, 27, 1, 12500, 12500, 1),
(35, 20, 27, 1, 12500, 12500, 0),
(36, 20, 27, 5, 12500, 62500, 0),
(37, 20, 27, 9, 12500, 112500, 0),
(38, 20, 27, 1, 12500, 12500, 0),
(39, 20, 27, 1, 12500, 12500, 0),
(40, 20, 27, 1, 12500, 12500, 0),
(41, 20, 27, 1, 12500, 12500, 0),
(42, 20, 27, 1, 12500, 12500, 0),
(43, 20, 27, 1, 12500, 12500, 0),
(44, 20, 27, 1, 12500, 12500, 0),
(45, 21, 20, 1, 2500, 2500, 0),
(46, 21, 20, 1, 2500, 2500, 0),
(47, 22, 15, 1, 14000, 14000, 0),
(48, 23, 29, 1, 1500, 1500, 0),
(49, 24, 28, 1, 2000, 2000, 0),
(50, 25, 14, 1, 12500, 12500, 0),
(51, 26, 18, 1, 2500, 2500, 0),
(52, 26, 19, 1, 350, 350, 0),
(53, 27, 18, 1, 2500, 2500, 0),
(54, 28, 27, 1, 12500, 12500, 0),
(55, 29, 29, 1, 1500, 1500, 0),
(56, 29, 27, 1, 12500, 12500, 0),
(57, 30, 29, 1, 1500, 1500, 0),
(58, 30, 17, 1, 700, 700, 0),
(59, 31, 29, 1, 1500, 1500, 0),
(60, 32, 19, 1, 350, 350, 0),
(61, 33, 17, 1, 700, 700, 0),
(62, 34, 29, 1, 1500, 1500, 0),
(63, 35, 27, 1, 12500, 12500, 0),
(64, 36, 18, 1, 2500, 2500, 0),
(65, 36, 27, 1, 12500, 12500, 0),
(66, 36, 19, 3, 350, 1050, 0),
(67, 36, 19, 1, 350, 350, 0),
(68, 37, 16, 1, 11500, 11500, 0),
(69, 38, 17, 1, 700, 700, 1),
(70, 39, 13, 1, 13500, 13500, 0),
(71, 40, 28, 1, 2000, 2000, 0),
(72, 40, 29, 1, 1500, 1500, 0),
(73, 41, 28, 1, 2000, 2000, 0),
(74, 41, 28, 1, 2000, 2000, 0),
(75, 41, 28, 1, 2000, 2000, 0),
(76, 42, 17, 1, 700, 700, 0),
(77, 43, 29, 5, 1500, 7500, 1),
(78, 43, 29, 1, 1500, 1500, 1),
(79, 43, 29, 1, 1500, 1500, 1),
(80, 43, 29, 1, 1500, 1500, 1),
(81, 43, 29, 1, 1500, 1500, 1),
(82, 43, 29, 1, 1500, 1500, 1),
(83, 43, 29, 1, 1500, 1500, 1),
(84, 43, 29, 1, 1500, 1500, 1),
(85, 43, 29, 1, 1500, 1500, 1),
(86, 43, 29, 10, 1500, 15000, 1),
(87, 43, 29, 2, 1500, 3000, 1),
(88, 43, 29, 9, 1500, 13500, 1),
(89, 43, 29, 13, 1500, 19500, 1),
(90, 43, 28, 1, 2000, 2000, 1),
(91, 43, 28, 3, 2000, 6000, 1),
(92, 43, 27, 1, 12500, 12500, 0),
(93, 43, 28, 1, 2000, 2000, 0),
(94, 43, 28, 1, 2000, 2000, 0),
(95, 43, 18, 1, 2500, 2500, 0),
(96, 44, 28, 1, 2000, 2000, 0),
(97, 44, 28, 1, 2000, 2000, 0),
(98, 44, 28, 1, 2000, 2000, 0),
(99, 44, 28, 1, 2000, 2000, 0),
(100, 44, 20, 1, 2500, 2500, 0),
(101, 45, 27, 1, 12500, 12500, 0),
(102, 46, 28, 1, 2000, 2000, 0),
(103, 47, 29, 1, 1500, 1500, 0),
(104, 48, 30, 1, 0, 0, 0),
(105, 49, 29, 1, 1500, 1500, 0),
(106, 49, 29, 1, 1500, 1500, 0),
(107, 49, 29, 1, 1500, 1500, 0),
(108, 49, 30, 1, 0, 0, 0),
(109, 49, 29, 1, 1500, 1500, 0),
(110, 49, 30, 1, 0, 0, 0),
(111, 49, 16, 1, 11500, 11500, 0),
(112, 49, 29, 1, 1500, 1500, 0),
(113, 50, 20, 1, 2500, 2500, 0),
(114, 50, 29, 1, 1500, 1500, 0),
(115, 50, 29, 1, 1500, 1500, 0),
(116, 51, 29, 1, 1500, 1500, 0),
(117, 52, 14, 1, 12500, 12500, 0),
(118, 53, 29, 1, 1500, 1500, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `id` int(11) NOT NULL,
  `news_subtitle` varchar(200) NOT NULL,
  `news_title` varchar(250) NOT NULL,
  `file_path` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`id`, `news_subtitle`, `news_title`, `file_path`) VALUES
(2, 'New Arrival', 'new xolo', '2.jpg'),
(3, 'New Arrival', 'new xolo', '21.jpg'),
(4, 'New Arrival', 'new xolo', 'main_p3gd-4y.jpg'),
(5, 'New Arrival', 'new xolo', 'banner-01.jpg'),
(6, 'Low price Samart Phone arrived', 'Huwai', 'mobile-tall-banner_2x__CB515416528_.jpg'),
(7, 'i phone x', 'latest collection.', 'maxresdefault.jpg'),
(8, 'i phone ', 'new arrival', 'DSCF9432-920x613.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `amount` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `delivery_status` varchar(30) NOT NULL DEFAULT 'Undelivered',
  `payment` varchar(30) NOT NULL DEFAULT 'CASH',
  `trx_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`id`, `date`, `user_id`, `amount`, `status`, `delivery_status`, `payment`, `trx_id`) VALUES
(1, '2018-10-28', 0, 0, 0, 'Undelivered', 'CASH', ''),
(2, '2018-10-30', 0, 0, 0, 'Undelivered', 'CASH', ''),
(3, '2018-10-30', 0, 0, 0, 'Undelivered', 'CASH', ''),
(4, '2018-10-31', 2, 37500, 2, 'Undelivered', 'CASH', ''),
(5, '2018-11-05', 2, 25000, 1, 'Undelivered', 'CASH', ''),
(6, '2018-11-07', 0, 0, 0, 'Undelivered', 'CASH', ''),
(7, '2018-11-08', 2, 25000, 1, 'Undelivered', 'CASH', ''),
(8, '2018-11-09', 2, 350, 1, 'Undelivered', 'CASH', ''),
(9, '2018-11-09', 0, 0, 0, 'Undelivered', 'CASH', ''),
(10, '2018-11-09', 2, 3500, 1, 'Delivered', 'CASH', ''),
(11, '2018-11-09', 0, 0, 0, 'Undelivered', 'CASH', ''),
(12, '2018-11-10', 2, 0, 0, 'Undelivered', 'CASH', ''),
(13, '2018-11-10', 0, 0, 0, 'Undelivered', 'CASH', ''),
(14, '2018-11-10', 2, 11500, 1, 'Delivered', 'CARD', 'txn_1DUqM6APKZq6VdBi72dglmON'),
(15, '2018-11-10', 2, 3500, 1, 'Delivered', 'CARD', 'txn_1DUqPEAPKZq6VdBiCnfmHbsN'),
(16, '2018-11-10', 0, 0, 0, 'Undelivered', 'CASH', ''),
(17, '2018-11-10', 3, 11500, 1, 'Delivered', 'CARD', 'txn_1DUtWiAPKZq6VdBiyfqtlfjV'),
(18, '2018-11-10', 3, 24000, 2, 'Undelivered', 'CARD', 'txn_1DUtm1APKZq6VdBiUkNo7IhJ'),
(19, '2018-11-10', 0, 0, 0, 'Undelivered', 'CASH', ''),
(20, '2018-11-10', 3, 275000, 1, 'Undelivered', 'CASH', ''),
(21, '2018-11-10', 3, 5000, 1, 'Undelivered', 'CARD', 'txn_1DUzqpAPKZq6VdBitxOFZf83'),
(22, '2018-11-10', 0, 14000, 1, 'Undelivered', 'CARD', 'txn_1DVBgfAPKZq6VdBi5imeHD0y'),
(23, '2018-11-11', 3, 1500, 1, 'Undelivered', 'CASH', ''),
(24, '2018-11-11', 3, 2000, 1, 'Undelivered', 'CARD', 'txn_1DVCgoAPKZq6VdBiZ5DClWfY'),
(25, '2018-11-11', 0, 0, 0, 'Undelivered', 'CASH', ''),
(26, '2018-11-11', 3, 2850, 1, 'Undelivered', 'CARD', 'txn_1DVDjTAPKZq6VdBiC6H424R7'),
(27, '2018-11-11', 0, 0, 0, 'Undelivered', 'CASH', ''),
(28, '2019-01-03', 0, 0, 0, 'Undelivered', 'CASH', ''),
(29, '2019-01-07', 3, 14002, 1, 'Delivered', 'CASH', ''),
(30, '2019-01-07', 3, 2202, 2, 'Undelivered', 'CASH', ''),
(31, '2019-01-07', 0, 0, 0, 'Undelivered', 'CASH', ''),
(32, '2019-01-09', 0, 0, 0, 'Undelivered', 'CASH', ''),
(33, '2019-01-09', 0, 0, 0, 'Undelivered', 'CASH', ''),
(34, '2019-01-09', 0, 0, 0, 'Undelivered', 'CASH', ''),
(35, '2019-01-09', 3, 12502, 2, 'Undelivered', 'CASH', ''),
(36, '2019-01-12', 3, 16402, 2, 'Undelivered', 'CASH', ''),
(37, '2019-01-12', 0, 0, 0, 'Undelivered', 'CASH', ''),
(38, '2019-01-14', 0, 0, 0, 'Undelivered', 'CASH', ''),
(39, '2019-01-20', 0, 0, 0, 'Undelivered', 'CASH', ''),
(40, '2019-01-20', 0, 0, 0, 'Undelivered', 'CASH', ''),
(41, '2019-01-20', 0, 0, 0, 'Undelivered', 'CASH', ''),
(42, '2019-01-21', 0, 0, 0, 'Undelivered', 'CASH', ''),
(43, '2019-01-21', 0, 0, 0, 'Undelivered', 'CASH', ''),
(44, '2019-01-21', 0, 0, 0, 'Undelivered', 'CASH', ''),
(45, '2019-01-21', 0, 0, 0, 'Undelivered', 'CASH', ''),
(46, '2019-01-21', 0, 0, 0, 'Undelivered', 'CASH', ''),
(47, '2019-01-21', 0, 0, 0, 'Undelivered', 'CASH', ''),
(48, '2019-01-22', 0, 0, 0, 'Undelivered', 'CASH', ''),
(49, '2019-01-23', 0, 0, 0, 'Undelivered', 'CASH', ''),
(50, '2019-01-23', 3, 5502, 1, 'Undelivered', 'CASH', ''),
(51, '2019-01-23', 0, 0, 0, 'Undelivered', 'CASH', ''),
(52, '2019-01-24', 0, 0, 0, 'Undelivered', 'CASH', ''),
(53, '2019-01-24', 0, 0, 0, 'Undelivered', 'CASH', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `p_id` int(11) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `product_name` varchar(200) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_description` text NOT NULL,
  `picture` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`p_id`, `tag`, `product_name`, `product_price`, `product_description`, `picture`) VALUES
(2, 'smartphone', 'samsung', 29000, ' Key Features:\r\n\r\n-4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n-3200 mAh Battery\r\n-Android Marshmallow 6.0\r\n-1.5 GHz MT6750T Octa Core', 'product-03.jpg'),
(3, 'smartphone', 'Samsung Galxy', 22500, ' Key Features:\r\n\r\n-4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n-3200 mAh Battery\r\n-Android Marshmallow 6.0\r\n-1.5 GHz MT6750T Octa Core', 'product-04.jpg'),
(4, 'smartphone', 'Oppo F3', 25000, ' Key Features:\r\n\r\n-4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n-3200 mAh Battery\r\n-Android Marshmallow 6.0\r\n-1.5 GHz MT6750T Octa Core', 'product-05.jpg'),
(5, 'smartphone', 'Samsung  S7', 23500, ' Key Features:\r\n\r\n-4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n-3200 mAh Battery\r\n-Android Marshmallow 6.0\r\n-1.5 GHz MT6750T Octa Core', 'product-06.jpg'),
(6, 'mobile', 'Nokia W56', 3500, ' Key Features:\r\n\r\nWith Camera\r\n-1600mAh Battery\r\n-Analog Phone\r\n-1.5 GHz MT6750T \r\n-Long Battery Backup\r\n-Torch\r\n-Radio', 'product-02.jpg'),
(7, 'smartphone', 'Iphone +', 29000, ' Key Features\r\n- 4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n- 3200 mAh Battery\r\n- Android Marshmallow 6.0\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-07.jpg'),
(8, 'smartphone', 'Huwai Yii', 9000, ' Key Features\r\n- 4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n- 3200 mAh Battery\r\n- Android Marshmallow 6.0\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-08.jpg'),
(9, 'smartphone', 'Xiaomi R5', 22500, ' Key Features\r\n- 4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n- 3200 mAh Battery\r\n- Android Marshmallow 6.0\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-09.jpg'),
(10, 'smartphone', 'Xiamoni 6', 25000, ' Key Features\r\n- 4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n- 3200 mAh Battery\r\n- Android Marshmallow 6.0\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-10.jpg'),
(11, 'mobile', 'LG 1230', 3500, ' Key Features\r\n- Expandable Upto 10 GB\r\n-Full HD Display \r\n- Camera\r\n- 1600mAh Battery\r\n- Radio\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-14.jpg'),
(12, 'smartphone', 'Huwai W9', 12500, ' Key Features\r\n- 4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n- 3200 mAh Battery\r\n- Android Marshmallow 6.0\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-15.jpg'),
(13, 'smartphone', 'Huwai W10', 13500, ' Key Features\r\n- 4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n- 3200 mAh Battery\r\n- Android Marshmallow 6.0\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-12.jpg'),
(14, 'smartphone', 'Huwai Q3', 12500, ' Key Features\r\n- 4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n- 3200 mAh Battery\r\n- Android Marshmallow 6.0\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-13.jpg'),
(15, 'smartphone', 'Huwai 10', 14000, ' Key Features\r\n- 4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n- 3200 mAh Battery\r\n- Android Marshmallow 6.0\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-16.jpg'),
(16, 'smartphone', 'Huwai Z1', 11500, ' Key Features\r\n- 4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n- 3200 mAh Battery\r\n- Android Marshmallow 6.0\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-11.jpg'),
(17, 'gadget', 'Mobile Charger', 700, ' Key Features\r\n- 3200 mAh Battery\r\n- Quick Charge\r\n- Good Bakcup\r\n-Easy portability\r\n- 1.5 GHz MT6750T Octa Core\r\n', 'product-20.jpg'),
(18, 'gadget', 'Mobile Portable Charger', 2500, ' Key Features\r\n- Easy Portbalie\r\n- 9000 mAh Battery\r\n- Quick Charge\r\n-4 Time Charge', 'product-17.jpg'),
(19, 'gadget', 'Back Cover', 350, ' Key Features\r\n- Available Color\r\n-Smart Protector\r\n-1 Year Warrenty', 'product-18.jpg'),
(20, 'gadget', 'Portable Charger', 2500, ' Key Features\r\n- Easy Portbalie\r\n- 16000 mAh Battery\r\n- Quick Charge\r\n-4 Time Charge', 'product-19.jpg'),
(27, 'smartphone', 'Smart Mobiles XOLO', 12500, ' Key Features<br />\r\n- Available Color<br />\r\n-Smart Protector<br />\r\n-1 Year Warrenty', 'Mb1.jpg'),
(28, 'gadget', 'wireless charger', 2000, 'Model NO.: DBX015W<br />\r\nType: electric', 'hqdefault.jpg'),
(29, 'mobile', 'jio', 1500, 'well specified.', '511qpyTfuIL__SR500,500_.jpg'),
(30, '', 'iphone x', 0, 'MEMORY	Card slot	No<br />\r\nInternal	64/256 GB, 3 GB RAM<br />\r\nMAIN CAMERA	Dual	12 MP, f/1.8, 28mm (wide), 1/3\", 1.22µm, OIS, PDAF <br />\r\n12 MP, f/2.4, 52mm (telephoto), 1/3.4\", 1.0µm, OIS, PDAF, 2x optical zoom<br />\r\nFeatures	Quad-LED dual-tone flash, HDR (photo/panorama), panorama, HDR<br />\r\nVideo	2160p@24/30/60fps, 1080p@30/60/120/240fps<br />\r\nSELFIE CAMERA	Single	7 MP, f/2.2, 32mm (standard)<br />\r\nFeatures	HDR<br />\r\nVideo	1080p@30fps<br />\r\nSOUND	Loudspeaker	Yes, with stereo speakers<br />\r\n3.5mm jack	No', 'lemon_856c4140-9609-404d-bf94-addb2abc2895_300x300.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rating`
--

CREATE TABLE `tbl_rating` (
  `r_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_rating`
--

INSERT INTO `tbl_rating` (`r_id`, `p_id`, `user_id`, `rating`) VALUES
(1, 20, 2, 5),
(2, 27, 2, 1),
(3, 19, 2, 5),
(4, 19, 3, 4),
(5, 12, 2, 4),
(6, 28, 3, 3),
(7, 29, 3, 3),
(8, 20, 3, 3),
(9, 30, 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(200) NOT NULL,
  `mobile` varchar(14) NOT NULL,
  `address` text NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `mobile`, `address`, `type`) VALUES
(1, 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '+455555', '', 'admin'),
(2, 'Shuvo 1', 's@gmail.com', '202cb962ac59075b964b07152d234b70', '0177789989', 'Sylhet ', 'user'),
(3, 'suhel', 'sr@gmail.com', '202cb962ac59075b964b07152d234b70', '01711024457', 'sylhet', 'user'),
(5, 'user2', 'user2@yahoo.com', '202cb962ac59075b964b07152d234b70', '01838097112', 'dhaka', 'user'),
(6, 'chy', 'a@gmail.com', '202cb962ac59075b964b07152d234b70', '01744585558', 'sylhet', 'user'),
(7, 'tuhin', 'ss@gmail.com', '202cb962ac59075b964b07152d234b70', '01727838512', 'sssssssssssss', 'user'),
(8, 'shuvo', 'ar@gmail.com', '202cb962ac59075b964b07152d234b70', '01838097112', 'rgg', 'user'),
(9, 'suhel', 'archy@gmail.com', '202cb962ac59075b964b07152d234b70', '12589222222222', 'suhel', 'user'),
(10, 'suhel', 'sr@gmail.com', '202cb962ac59075b964b07152d234b70', '556589', 'hhhh', 'user'),
(11, 'archy', 'archysuhel@gmail.com', '202cb962ac59075b964b07152d234b70', '555658', 'kul', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_item`
--
ALTER TABLE `tbl_item`
  ADD PRIMARY KEY (`i_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
