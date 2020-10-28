-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2020 at 05:10 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_island`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(55, 28, 27, 1, 12500, 12500, 0),
(56, 28, 16, 1, 11500, 11500, 0),
(57, 29, 29, 7, 1500, 10500, 0),
(58, 30, 14, 1, 12500, 12500, 0),
(59, 30, 13, 1, 13500, 13500, 0),
(60, 30, 13, 1, 13500, 13500, 0),
(61, 31, 27, 1, 12500, 12500, 0),
(62, 32, 28, 1, 2000, 2000, 0),
(63, 33, 27, 1, 12500, 12500, 0),
(64, 34, 27, 1, 12500, 12500, 0),
(65, 34, 19, 1, 350, 350, 0),
(66, 35, 29, 1, 1500, 1500, 0),
(67, 36, 18, 1, 2500, 2500, 0),
(68, 37, 16, 1, 11500, 11500, 0),
(69, 38, 30, 1, 0, 0, 0),
(70, 39, 9, 1, 22500, 22500, 0),
(71, 40, 29, 1, 1500, 1500, 0),
(72, 41, 29, 1, 1500, 1500, 0),
(73, 42, 29, 1, 1500, 1500, 0),
(74, 43, 27, 1, 12500, 12500, 0),
(75, 44, 14, 1, 12500, 12500, 0),
(76, 45, 15, 1, 14000, 14000, 0),
(77, 46, 29, 1, 1500, 1500, 0),
(78, 47, 28, 1, 2000, 2000, 0),
(79, 48, 12, 1, 12500, 12500, 0),
(80, 48, 27, 1, 12500, 12500, 0),
(81, 49, 28, 1, 2000, 2000, 0),
(82, 50, 17, 1, 700, 700, 0),
(83, 51, 28, 1, 2000, 2000, 1),
(84, 51, 28, 1, 2000, 2000, 1),
(85, 51, 30, 1, 0, 0, 0),
(86, 51, 28, 1, 2000, 2000, 0),
(87, 51, 18, 1, 2500, 2500, 0),
(88, 51, 27, 1, 12500, 12500, 0),
(89, 52, 19, 1, 350, 350, 0),
(90, 53, 16, 1, 11500, 11500, 0),
(91, 54, 15, 1, 14000, 14000, 0),
(92, 55, 18, 1, 2500, 2500, 1),
(93, 55, 16, 1, 11500, 11500, 0),
(94, 56, 29, 1, 1500, 1500, 0),
(95, 57, 19, 6, 350, 2100, 0),
(96, 58, 19, 1, 350, 350, 0),
(97, 58, 30, 1, 0, 0, 0),
(98, 58, 27, 1, 12500, 12500, 0),
(99, 58, 15, 1, 14000, 14000, 0),
(100, 59, 28, 1, 2000, 2000, 0),
(101, 60, 29, 2, 1500, 3000, 1),
(102, 60, 28, 3, 2000, 6000, 1),
(103, 60, 28, 4, 2000, 8000, 1),
(104, 60, 13, 5, 13500, 67500, 0),
(105, 60, 15, 1, 14000, 14000, 0),
(106, 60, 14, 3, 12500, 37500, 0),
(107, 60, 16, 1, 11500, 11500, 0),
(108, 60, 28, 1, 2000, 2000, 0),
(109, 60, 10, 1, 25000, 25000, 0),
(110, 60, 13, 1, 13500, 13500, 0),
(111, 60, 8, 1, 9000, 9000, 0),
(112, 60, 5, 1, 23500, 23500, 0),
(113, 60, 11, 1, 3500, 3500, 0),
(114, 60, 8, 1, 9000, 9000, 0),
(115, 60, 19, 1, 350, 350, 0),
(116, 61, 14, 1, 12500, 12500, 0),
(117, 62, 19, 6, 350, 2100, 0),
(118, 63, 28, 1, 2000, 2000, 0),
(119, 64, 28, 6, 2000, 12000, 0),
(120, 65, 18, 1, 2500, 2500, 0),
(121, 66, 14, 5, 12500, 62500, 0),
(122, 66, 29, 4, 1500, 6000, 0),
(123, 67, 29, 1, 1500, 1500, 0),
(124, 68, 16, 1, 11500, 11500, 0),
(125, 69, 30, 1, 22000, 22000, 0),
(126, 70, 28, 1, 2000, 2000, 0),
(127, 71, 20, 6, 2500, 15000, 0),
(128, 72, 29, 5, 1500, 7500, 0),
(129, 73, 20, 5, 2500, 12500, 0),
(130, 74, 16, 1, 11500, 11500, 0),
(131, 75, 30, 3, 22000, 66000, 0),
(132, 76, 16, 6, 11500, 69000, 1),
(133, 77, 15, 5, 14000, 70000, 0),
(134, 77, 12, 1, 12500, 12500, 0),
(135, 78, 29, 8, 1500, 12000, 1),
(136, 78, 30, 1, 22000, 22000, 0),
(137, 79, 28, 1, 2000, 2000, 0),
(138, 80, 28, 1, 2000, 2000, 0),
(139, 81, 18, 1, 2500, 2500, 0),
(140, 81, 29, 1, 1500, 1500, 0),
(141, 82, 27, 1, 12500, 12500, 0);

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
(7, 'i phone xs max', 'NEW ARRIVAL', 'best_iphone_xs_xr_xs_max_deals_hero1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `id` int(11) NOT NULL,
  `date` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT 0,
  `amount` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `delivery_status` varchar(30) NOT NULL DEFAULT 'Undelivered',
  `payment` varchar(30) NOT NULL DEFAULT 'CASH',
  `trx_id` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'smartphone', 'Iphone 6S+', 7800, ' Key Features:\r\n\r\n-4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n-3200 mAh Battery\r\n-Android Marshmallow 6.0\r\n-1.5 GHz MT6750T Octa Core', 'product-01.jpg'),
(2, 'smartphone', 'Samsung Galxy 8', 29000, ' Key Features:\r\n\r\n-4 GB RAM | 64 GB ROM | Expandable Upto 128 GB\r\n-5.5 Inch Full HD Display | Fingerprint Sensor\r\n-13 MP Primary Camera | 16 + 8MP MP Front Camera With Dual Selfie Camera\r\n-3200 mAh Battery\r\n-Android Marshmallow 6.0\r\n-1.5 GHz MT6750T Octa Core', 'product-03.jpg'),
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
(28, 'gadget', 'Huawei Y7P', 18999, 'Huawei Y7P', 'huawei.jpg'),
(29, 'mobile', 'Oppo A7', 25900, 'well specified.', 'oppoa72.png'),
(30, 'smartphone', 'Vivo Z3', 22000, 'NETWORK	Technology	<br />\r\nGSM / HSPA / LTE<br />\r\nLAUNCH	Announced	2018, August<br />\r\nStatus	Available. Released 2018, August<br />\r\n', 'vivo.jpg'),
(31, 'smartphone', 'iphone XII max Pro', 100000, 'iphone XII max Pro<br />\r\n<br />\r\nPhoneApple iPhone Xs MaxManufacturerAppleStatusComing SoonAvailable in IndiaYesPrice (Indian Rupees) Expected Price:Rs.109900 <br />\r\n<br />\r\nPlace : Chennai Delhi Kolkata Mumbai Price (USD) Expected Price: $2442.22 approx <br />\r\nDescription Apple iPhone Xs Max is a ', 'iphone121.jpg');

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
(7, 14, 2, 4),
(8, 15, 2, 1),
(9, 29, 1, 1),
(10, 30, 1, 3),
(11, 29, 9, 2),
(12, 16, 9, 3),
(13, 15, 9, 2);

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
  `type` varchar(20) NOT NULL,
  `unique_key` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `email`, `password`, `mobile`, `address`, `type`, `unique_key`, `status`) VALUES
(1, 'Admin', 'admin@gmail.com', '202cb962ac59075b964b07152d234b70', '+455555', '', 'admin', '', 1),
(2, 'Rubina', 'rubina@gmail.com', '96e79218965eb72c92a549dd5a330112', '0177789989', 'Sylhet ', 'user', '', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_item`
--
ALTER TABLE `tbl_item`
  MODIFY `i_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_rating`
--
ALTER TABLE `tbl_rating`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
