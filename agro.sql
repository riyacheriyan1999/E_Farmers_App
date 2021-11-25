-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2021 at 12:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `agro`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'vegitables'),
(2, 'fruits'),
(3, 'crops');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE IF NOT EXISTS `district` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `name`) VALUES
(1, 'Thiruvananthapuram'),
(2, 'Kollam'),
(3, 'Pathanamthitta'),
(4, 'Alappuzha'),
(5, 'Kottyam'),
(6, 'Idukki'),
(7, 'Ernakulam'),
(8, 'Thrissur'),
(9, 'Palakkad'),
(10, 'Malappuram'),
(11, 'Kozhikode'),
(12, 'Kannur'),
(13, 'Wayanad'),
(14, 'Kasaragod');

-- --------------------------------------------------------

--
-- Table structure for table `farmers`
--

CREATE TABLE IF NOT EXISTS `farmers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `krishibavan` varchar(255) NOT NULL,
  `photo_id_type` varchar(100) NOT NULL,
  `id_number` varchar(25) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `email` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `account_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `ifsc` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `certificate` tinytext NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `farmers`
--

INSERT INTO `farmers` (`id`, `full_name`, `address`, `pincode`, `krishibavan`, `photo_id_type`, `id_number`, `phone`, `email`, `bank_name`, `account_name`, `account_number`, `ifsc`, `username`, `password`, `certificate`, `type`) VALUES
(1, 'Gokul', 'test', '857458', '1', 'Adhaar', '9865985465', '7558840004', 'gokul.vishnu587@gmail.com', 'boi', 'gv', '98564653', '8998552', 'gokul', 'gokul', '', 'farmers'),
(2, 'thomas', 'asdf', '123345', '2', 'Adhaar', '123456789', '123456', 'def@gmail.com', 'asdfghjk', 'asdfghjk', '12345678', '12345678', 'thomas', 'thomas', '', 'farmers'),
(3, 'abcd', 'asdf', '123345', '1', 'Adhaar', '12345', '123456', 'def@gmail.com', 'asdfghjk', 'asdfghjk', '1234567', '12345678', 'abcd', 'abcd', '', 'farmers'),
(4, 'ann', 'asdf', '123345', '1', 'Adhaar', '12345', '123456', 'def@gmail.com', 'asdfghjk', 'asdfghjk', '123456', '23456789', 'ann', 'ann', '', 'client'),
(5, 'Joy', 'asdf', '123345', '2', 'Adhaar', '4534567', '45678989', 'asd@gmail.com', 'asdfghjk', 'asertyju', '2345678', '2345678', 'joy', 'joy', 'target_pathALKA BRIGIT SENSON CV 1.docx', 'farmers'),
(6, 'Unni', 'asdfghj', '123345', '3', 'Adhaar', '12345', '123456', 'qwe@gmail.com', 'sdfg', 'zxcvb', '345678', '2345678', 'unni', 'unni', 'uploads/ALKA BRIGIT SENSON CV 1.docx', 'farmers'),
(7, 'asd', 'sdfghj', '123345', '1', 'Voters ID', '345678', '3456789', 'asd@gmail.com', 'sdfghj', 'asdfgh', '23456789', '3456789', 'asd', 'asd', 'uploads/20191109_230334.jpg', ''),
(8, 'Sasi', 'hjh', '9864895', '6', 'Voters ID', 'SNV898', '7558840004', 'g@gmail.com', 'asdfghjk', 'asdfghjk', '9856324578', 'SBIN000856', 'sasi', 'sasi', 'uploads/20191109_230334.jpg', 'client'),
(9, 'angel', 'asdfghjklmnbvcxz', '686577', '7', 'Adhaar', '456789234567', '9876845312', 'angel@gmail.com', 'asdfgthyjuklkjhbgvfcdxs', 'Angel', '8765431234567', '23456709876', 'angel', 'angel', 'uploads/BDVR2142.JPG', 'client'),
(10, 'Jose', 'asdfghjklmnbv', '686577', '1', 'Adhaar', '12345', '98765432', 'jose@gmail.com', 'sbi', 'Jose', '87654321', '98765432', 'jose', 'jose', 'uploads/BDVR2142.JPG', 'client'),
(11, 'Ammini', 'kjhgfdsasdfgvbhn', '9876543', '5', 'Adhaar', '4567', '89876543234', 'mnbv@gmail.com', 'aswefghjk', 'mnbv', '1234567890', '098765432', 'ammini', 'ammini', 'uploads/BDVR2142.JPG', 'client'),
(12, 'Suni', 'lkjhgfdsxcvbnm', '987654', '2', 'Voters ID', '8765', '9877654324', 'lkj@gmail.com', 'sbi', 'lkj', '098765432134', '0987652134567', 'suni', 'suni', 'uploads/BDVR2142.JPG', 'client'),
(13, 'milan', 'awedcvghukjm,', '686544', '3', 'Adhaar', '76', '8976789054', 'milan@gmail.com', 'sbi', 'milan george', '98974546732', 'SBIN000856', 'milan', 'milan', 'uploads/BDVR2142.JPG', 'farmers'),
(14, 'sara', 'sdfghjklxcvbnm,', '686544', '4', 'Adhaar', '34', '9878659823', 'sara@gmail.com', 'sbi', 'sara joseph', '46784098724', 'SBIN000856', 'sara', 'sara', 'uploads/ABUR9374.JPG', 'farmers'),
(15, 'okp', 'aswderfgthj', '12345', '1', 'Adhaar', '1234567', '87654323456', 'okp@gmail.com', 'sbi', 'okp', '1234567890', '9876543q1234567', 'okp', 'okp', 'uploads/IMG_0121.PNG', 'client'),
(16, 'Sera Mathew', 'asxdcfv bh nkm', '686574', 'Thiruvananthapuram', 'Adhaar', '123', '9878980324', 'sera@gmail.com', 'sbi', 'Sera Joseph', '1234567890', 'SBIN000857', 'sera', 'sera', 'uploads/', 'client'),
(17, 'Philip Tom', 'jhgfdsxcvbhnm', '686588', '2', 'Voters ID', '543', '9086457644', 'philip@gmail.com', 'sbi', 'Philip Tom', '1234567898765', 'SBIN000858', 'philip', 'philip', 'uploads/', 'farmers'),
(18, 'Lilly George', 'kuzhuppilly house, kazhakoottam', '686578', '2', 'Adhaar', '45', '8976734562', 'lilly@gmail.com', 'sbi', 'Lilly George', '78654344989', 'SBIN000845', 'lilly', 'lilly', 'uploads/', ''),
(19, 'ora', 'oravbnmvfh', '686544', '3', 'Voters ID', '12', '7865473245', 'ora@gmail.com', 'sbi', 'ora', '2345678909876543', 'SBIN000857', 'ora', 'ora', 'uploads/', 'farmers'),
(20, 'Suma R', 'SDFGHJVBNH', '686577', '7', 'Adhaar', '34', '9870654768', 'suma@gmail.com', 'sbi', 'Suma R', '56789678543', 'SBIN0070364', 'suma', 'suma', 'uploads/', 'farmers'),
(21, 'Tom Jose', 'Koottungal House, Kazhakoottam', '686567', 'Thiruvananthapuram', 'Adhaar', '1234556890087654', '9876789065', 'tom@gmail.com', 'sbi', 'Tom Jose', '34567656579', 'SBIN0070364', 'tom', 'tom', 'uploads/', ''),
(22, 'Zac P', 'OIUYTREDRFTGHJHG', '686544', '1', 'Adhaar', '78654356768767', '9807876546', 'zac@gmail.com', 'sbi', 'Zac P', '87867543657', 'SBIN0070356', 'zac', 'zac', 'uploads/', 'client'),
(23, 'Angel', 'dfrtgyhjnkml', '897655', '2', 'Adhaar', '234566789023456789', '8976545678', 'angel@gmail.com', 'sbi', 'Angel', '23456789087654', 'SBIN0070356', 'angel', 'angel', 'uploads/', 'client'),
(24, 'Riya Cheriyan', 'VALLOORAN HOUSE', '683580', '3', 'Adhaar', '523685236920', '8157803242', 'riyacheriyan1999@gmail.com', 'sbi', 'Riya', '5263417896', 'sbi002578', 'riya', 'Riya@12345', 'uploads/2021-06-02-05-01-302021-04-30-04-22-52strawberry.jpg', 'client'),
(25, 'Reenu Cheriyan', 'VALLOORAN HOUSE', '683580', '15', 'Adhaar', '536555235656', '9526974691', 'reenucheriyan2018@gmail.com', 'sbi', 'reenu', '52686345', '5236987', 'reenu', 'Reenu@12345', 'uploads/cucumber.jpg', 'farmers');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `mobile_no` varchar(20) NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `feedback` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `mobile_no`, `email_id`, `feedback`) VALUES
(1, 'sara', '9878659823', 'sara@gmail.com', 'better quality'),
(2, 'ann', '8562394253', 'def@gmail.com', 'good app');

-- --------------------------------------------------------

--
-- Table structure for table `krishibavan`
--

CREATE TABLE IF NOT EXISTS `krishibavan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `district` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `krishibavan`
--

INSERT INTO `krishibavan` (`id`, `district`, `name`) VALUES
(1, 7, 'Maradu Krishi Bhavan, Ernakulam'),
(2, 9, 'Alathur Krishi Bhavan, Palakkad'),
(3, 5, 'Thodupuzha Krishibhavan, Kottayam'),
(5, 1, 'Pulimath Krishibhavan, TVM'),
(6, 2, 'Krishibavan Kollam'),
(7, 5, 'Mutholy Krishibhavan, kottayam'),
(8, 6, 'samagra krishi bhavan, Idukki'),
(9, 9, 'Kodumbu Krishi Bhavan, Palakkad'),
(10, 7, 'Njarakkal Krishi Bhavan, Ernakulam'),
(11, 1, 'Kazhakuttom Krishi Bhavan, Thiruvananthapuram'),
(12, 1, 'Attingal Krishi Bhavan, Thiruvananthapuram'),
(13, 7, 'Aluva Krishi Bhavan, Ernakulam'),
(14, 9, 'Tharur Krishi Bhavan, Palakkad'),
(15, 9, 'Nallepilly Krishi Bhavan, Palakkad'),
(16, 12, 'Payyanur Krishi Bhavan, Kannur'),
(17, 12, 'Kuttiyattur Krishi Bhavan, Kannur'),
(18, 12, 'Ulikkal Krishi Bhavan, Kannur'),
(19, 13, 'Vellamunda Krishi Bhavan, Wayanad '),
(20, 13, 'Meenangadi Krishi Bhavan, Wayanad ');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`id`, `location_name`) VALUES
(1, 'kerala');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `type`) VALUES
(1, 'admin', 'admin', 'admin'),
(2, 'gokul.vishnu587', '12345', 'supplier'),
(3, 'abcd', '12345', 'client'),
(4, 'alka', 'alka', 'supplier'),
(5, 'aksh', 'aksh', 'client'),
(6, 'unni', 'unni', 'farmers'),
(7, 'abcd', 'abcd', 'farmers'),
(8, 'ann', 'ann', 'farmers'),
(9, 'asd', 'asd', 'farmers'),
(10, 'thomas', 'thomas', 'farmers'),
(11, 'asd', 'asd', 'farmers'),
(12, 'gokul', '12345', 'client'),
(13, 'qwe', 'qwe', 'client'),
(14, 'angel', 'angel', 'client'),
(15, 'davis', 'davis', 'client'),
(16, 'joy', 'joy', 'farmers'),
(17, 'lkj', 'lkj', 'client'),
(18, 'milan', 'MILAN', 'farmers'),
(19, 'sara', 'sara', 'farmers'),
(20, 'okp', 'okp', 'client'),
(21, 'sera', 'sera', 'client'),
(22, 'philip', 'philip', 'farmers'),
(23, 'lilly', 'lilly', 'client'),
(24, 'ora', 'ora', 'farmers'),
(25, 'suma', 'suma', 'farmers'),
(26, 'tom', 'tom', 'farmers'),
(27, 'zac', 'zac', 'client'),
(28, 'angel', 'angel', 'client'),
(29, 'riya', 'riya', 'client'),
(30, 'reenu', 'Reenu@12345', 'farmers');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `image` tinytext NOT NULL,
  `date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `description`, `image`, `date_time`) VALUES
(3, 'Agro Management', 'Farm management, making and implementing of the decisions involved in organizing and operating a farm for maximum production and profit. Farm management draws on agricultural economics for information on prices, markets, agricultural policy, and economic institutions such as leasing and credit.', '2021-05-05-11-29-36Agro Management.jpg', '2021-05-05 17:59:15'),
(4, 'Diseases related to crops - Aphelenchoides besseyi Parasitizing Common Bean', 'Aphelenchoides besseyi is the causal agent of soybean green stem and foliar retention syndrome known as â€œSoja Louca II.â€ This nematode has recently been reported parasitizing cotton in Brazil. In Costa Rica, it causes the symptoms known as â€œamachamientoâ€ and false angular spots in common bean (Phaseolus vulgaris). Due to the great importance of beans to Brazilian agriculture, the objective of this research was to study the pathogenicity of A. besseyi in common bean under greenhouse conditions, including its endoparasitic relationships by staining root and shoot system tissues with fuchsin acid. In addition, A. besseyi was collected and quantified from shoot systems 30 days after inoculation by washing the tissue in water and blender centrifugal flotation. We observed the symptoms of amachamiento, leaf and vein deformation in the expanded trifoliate leaves, and also leaves with necrotic, brown to reddish and angular lesions, characteristics from false angular spot, and deformed stems characterized by enlargement of nodes, retortions, and necrotic lesions. High numbers of nematodes were found inside common bean plants. This is the first report of the pathogenicity and symptoms caused by A. besseyi in common bean in Brazil. These findings are important for development of management strategies to avoid losses on bean cropped in infested areas.', '2021-06-17-08-48-39Aphelenchoides besseyi Parasitizing Common Bean.jpg', '2021-06-17 15:08:28'),
(5, 'E - FARMERS APP', 'Including vegetables and fruits as part of a healthy eating pattern can reduce the risk of some chronic diseases, including heart disease and type 2 diabetes, as well stroke and cancer. USDA''s MyPlate includes all vegetables and 100% vegetable juice in this group. Vegetables can be raw or cooked, and they can be fresh, frozen, canned or dehydrated. This offers a wide variety of options for meeting daily and weekly intake recommendations.\r\nFarmers face many problems like market strategy, intermediary people, etc while selling their agricultural products. They  were not entitled  to enjoy the benefits to the fullest.\r\n\r\nOnline farmerâ€™s app allows farmers to sell crops directly to consumers. E-Farmerâ€™s App is a web application for farmers which allows them to sell their products directly to consumers without any middlemen or intermediary. It is a revolutionary online farmerâ€™s marketing app, which connects the local farmers along with their fresh items all around the world. It is different from any other grocery-shopping app because of something we can do as direct farming  by directly connecting farmers with consumers. We even avoid unnecessary and expensive middlemen, and both sides end up benefiting.\r\n\r\nThis app allows farmers to register directly and login to the site and sell their product. Buyers can check the site and register with it and buy the products and they can directly contact the seller. This helps farmers and buyers to save a lot of time and money. This system promises to provide an easy way to sell the products. The system lets the farmers sell goods at a reasonable price and makes business even fair and transparent. Consumers are the opposite side of the same coin. This system lets consumers choose from a wide variety of products, select the product as per their requirement and also to apply price filters. The basic objective of the system is to consider everyone''s needs and fulfil their requirement with a fair and transparent agriculture business.\r\n\r\n\r\nCrop prediction is one of the main highlight of this E - Farmers App. It''s done with the help of Isolation forest algorithm.It is an unsupervised learning algorithm for anomaly detection that works on the principle of isolating anomalies.It isolates the outliers by randomly selecting a feature from the given set of features and then randomly selecting a split value between the maximum and minimum values of the selected feature. ', '2021-06-21-12-50-17WhatsApp Image 2021-06-21 at 12.23.48 AM.jpeg', '2021-06-21 07:15:59');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `product` int(11) NOT NULL,
  `farmer` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id`, `product`, `farmer`) VALUES
(1, 1, 'gokul.vishnu587@gmail.com'),
(2, 15, ''),
(3, 16, ''),
(4, 17, ''),
(5, 18, ''),
(6, 19, ''),
(7, 20, ''),
(8, 21, ''),
(9, 22, ''),
(10, 23, ''),
(11, 24, '');

-- --------------------------------------------------------

--
-- Table structure for table `predit`
--

CREATE TABLE IF NOT EXISTS `predit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `season` int(11) NOT NULL,
  `ph` int(11) NOT NULL,
  `elevation` int(11) NOT NULL,
  `soil_type` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=92 ;

--
-- Dumping data for table `predit`
--

INSERT INTO `predit` (`id`, `season`, `ph`, `elevation`, `soil_type`, `temperature`) VALUES
(1, 1, 7, 1300, 2, 30),
(2, 1, 7, 1300, 2, 30),
(3, 2, 8, 1200, 2, 35),
(4, 1, 7, 1200, 2, 30),
(5, 1, 7, 1300, 1, 30),
(6, 1, 7, 1300, 0, 30),
(7, 1, 7, 1300, 2, 30),
(8, 1, 7, 1300, 2, 30),
(9, 1, 7, 1300, 2, 30),
(10, 1, 7, 1300, 2, 30),
(11, 10, 8, 1300, 2, 40),
(12, 5, 8, 1300, 1, 40),
(13, 5, 8, 1300, 3, 40),
(14, 5, 7, 1300, 3, 40),
(15, 5, 7, 1300, 4, 40),
(16, 5, 7, 1300, 1, 40),
(17, 1, 6, 1300, 2, 30),
(18, 1, 5, 1300, 2, 30),
(19, 1, 5, 1300, 2, 30),
(20, 1, 5, 1200, 1, 20),
(21, 5, 6, 1200, 1, 32),
(22, 1, 6, 1200, 2, 30),
(23, 1, 7, 1200, 2, 30),
(24, 1, 6, 1200, 2, 30),
(25, 2, 6, 1200, 1, 30),
(26, 1, 7, 1300, 1, 30),
(27, 2, 7, 1300, 2, 30),
(28, 3, 6, 1200, 2, 30),
(29, 4, 6, 1200, 1, 30),
(30, 5, 6, 1200, 3, 30),
(31, 3, 7, 1300, 1, 30),
(32, 4, 6, 1200, 1, 30),
(33, 1, 6, 1300, 1, 40),
(34, 3, 6, 1300, 1, 40),
(35, 4, 6, 1300, 2, 40),
(36, 4, 7, 1300, 2, 40),
(37, 5, 7, 1200, 2, 40),
(38, 3, 6, 1200, 1, 40),
(39, 3, 6, 1200, 1, 40),
(40, 4, 6, 1300, 1, 40),
(41, 3, 6, 1300, 1, 40),
(42, 3, 6, 1300, 1, 40),
(43, 5, 6, 1200, 1, 30),
(44, 1, 6, 1200, 1, 20),
(45, 1, 6, 1600, 1, 20),
(46, 1, 6, 900, 1, 20),
(47, 1, 6, 500, 1, 20),
(48, 1, 6, 200, 1, 20),
(49, 2, 6, 500, 1, 20),
(50, 2, 6, 400, 1, 20),
(51, 2, 6, 400, 1, 20),
(52, 1, 6, 1200, 1, 20),
(53, 1, 6, 1200, 1, 20),
(54, 5, 8, 1400, 3, 25),
(55, 3, 8, 1400, 3, 25),
(56, 4, 7, 1400, 3, 25),
(57, 3, 6, 1200, 2, 25),
(58, 3, 6, 1200, 2, 25),
(59, 3, 6, 1200, 3, 25),
(60, 3, 6, 1500, 3, 25),
(61, 3, 6, 300, 3, 25),
(62, 1, 6, 1200, 1, 20),
(63, 1, 6, 900, 1, 20),
(64, 2, 6, 1200, 1, 20),
(65, 2, 6, 400, 1, 20),
(66, 1, 6, 900, 1, 20),
(67, 1, 6, 1200, 1, 25),
(68, 1, 6, 1200, 3, 25),
(69, 1, 6, 1200, 3, 25),
(70, 1, 6, 1200, 3, 25),
(71, 2, 6, 1200, 1, 20),
(72, 1, 6, 800, 1, 30),
(73, 9, 6, 1300, 1, 20),
(74, 3, 7, 400, 2, 20),
(75, 4, 6, 1000, 1, 20),
(76, 12, 7, 1000, 1, 20),
(77, 2, 6, 1000, 1, 20),
(78, 2, 6, 1000, 1, 20),
(79, 3, 6, 1200, 1, 20),
(80, 1, 7, 400, 1, 20),
(81, 2, 7, 500, 1, 20),
(82, 2, 7, 1500, 1, 20),
(83, 2, 7, 400, 1, 20),
(84, 2, 6, 500, 3, 15),
(85, 1, 6, 1200, 3, 25),
(86, 1, 6, 1300, 2, 20),
(87, 1, 6, 1300, 2, 20),
(88, 3, 6, 800, 2, 20),
(89, 3, 6, 800, 1, 20),
(90, 3, 6, 800, 3, 15),
(91, 1, 6, 1600, 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `cat_id` int(50) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(50) NOT NULL,
  `sales_qty` int(50) NOT NULL,
  `rate` varchar(10) NOT NULL,
  `image` tinytext NOT NULL,
  `farmer_id` varchar(110) NOT NULL,
  `krishibhavan` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `cat_id`, `name`, `description`, `sales_qty`, `rate`, `image`, `farmer_id`, `krishibhavan`, `status`) VALUES
(5, 1, 'carrot', 'organic with sweet taste', 0, '100', '2021-06-02-04-54-54carrot.jpg', 'suma@gmail.com', '7', 'stock'),
(7, 2, 'apple', 'organic with sweet taste', 2, '200', '2021-06-03-03-06-102021-04-15-07-46-53index.jpg', 'suma@gmail.com', '7', 'stock'),
(8, 1, 'cucumber', 'fresh and tastey', 1, '200', '2021-06-03-05-44-35cucumber.jpg', 'def@gmail.com', '1', 'stock'),
(9, 1, 'Brinjal', 'fresh and organic', 1, '50', '2021-06-05-05-46-47brinjal.jpg', 'asd@gmail.com', '2', 'stock'),
(10, 2, 'Banana', 'organic with sweet taste', 1, '33', '2021-06-05-05-50-10banana 2.jpg', 'asd@gmail.com', '2', 'stock'),
(11, 1, 'tapioca', 'natural and fresh', 3, '54', '2021-06-05-05-52-45tapioca.jpg', 'qwe@gmail.com', '3', 'stock'),
(12, 2, 'orange', 'organic with sweet taste', 1, '90', '2021-06-05-05-53-30orange.jpg', 'qwe@gmail.com', '3', 'stock'),
(13, 2, 'Grape', 'organic with sweet taste', 5, '100', '2021-06-05-05-56-54grape.jpg', 'sara@gmail.com', '4', 'stock'),
(14, 1, 'Lady finger', 'fresh and organic', 2, '40', '2021-06-05-05-58-10lady finger.jpg', 'sara@gmail.com', '4', 'stock'),
(15, 2, 'Banana', 'fresh and organic', 3, '25', '2021-06-16-04-26-05banana.jpg', 'tom@gmail.com', 'Thiruvananthapuram', 'stock'),
(16, 2, 'Grape', 'organic with sweet taste', 2, '70', '2021-06-16-04-54-52grape.jpg', 'def@gmail.com', '1', 'stock'),
(18, 1, 'Tapioca', 'fresh and tastey', 3, '32', '2021-06-16-05-06-43tapioca.jpg', 'suma@gmail.com', '7', 'stock'),
(19, 1, 'Cucumber', 'fresh and tastey', 2, '54', '2021-06-16-05-13-59cucumber.jpg', 'tom@gmail.com', 'Thiruvananthapuram', 'stock'),
(20, 1, 'Brinjal', 'fresh and tastey', 2, '65', '2021-06-17-01-15-15brinjal.jpg', 'def@gmail.com', '2', 'stock'),
(21, 1, 'carrot', 'fresh and tastey', 5, '100', '2021-06-17-06-10-20carrot.jpg', 'qwe@gmail.com', '3', 'stock'),
(22, 3, 'Rice', 'fresh and organic', 8, '50', '2021-06-19-01-24-16rice.jpg', 'milan@gmail.com', '3', 'stock'),
(23, 2, 'Guava', 'organic with sweet taste', 5, '80', '2021-06-19-01-26-01guava.jpg', 'milan@gmail.com', '3', 'stock'),
(24, 2, 'Banana', 'fresh and tastey', 8, '33', '2021-06-21-12-31-09banana.jpg', 'reenucheriyan2018@gmail.com', '15', 'stock');

-- --------------------------------------------------------

--
-- Table structure for table `sales_child`
--

CREATE TABLE IF NOT EXISTS `sales_child` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `om_id` int(50) NOT NULL,
  `item_id` int(50) NOT NULL,
  `order_qty` int(50) NOT NULL,
  `price` int(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `sales_child`
--

INSERT INTO `sales_child` (`id`, `om_id`, `item_id`, `order_qty`, `price`) VALUES
(1, 1, 5, 2, 500),
(2, 2, 1, 11, 500),
(3, 2, 2, 13, 20),
(4, 4, 5, 2, 40),
(5, 5, 4, 1, 30),
(6, 5, 4, 1, 30),
(7, 5, 4, 1, 30),
(8, 5, 4, 1, 30),
(9, 5, 4, 4, 30),
(10, 6, 2, 1, 20),
(11, 7, 5, 1, 40),
(12, 8, 2, 1, 20),
(13, 9, 4, 1, 30),
(14, 10, 4, 1, 30),
(15, 11, 4, 1, 30),
(16, 11, 4, 2, 30),
(17, 12, 4, 1, 30),
(18, 13, 2, 1, 20),
(19, 13, 4, 1, 30),
(20, 14, 2, 2, 20),
(21, 14, 1, 3, 500),
(22, 15, 5, 2, 40),
(23, 15, 6, 6, 500),
(25, 16, 5, 2, 40),
(26, 16, 5, 1, 40),
(27, 17, 8, 1, 100),
(28, 18, 8, 1, 100),
(29, 19, 8, 1, 100),
(30, 20, 2, 1, 20),
(31, 21, 2, 1, 20),
(32, 22, 4, 2, 30),
(33, 22, 2, 1, 20),
(35, 22, 2, 1, 20),
(36, 22, 1, 2, 500),
(37, 23, 5, 4, 100),
(38, 23, 6, 4, 200),
(39, 24, 6, 2, 200),
(40, 26, 7, 3, 200),
(41, 27, 5, 1, 100),
(42, 28, 7, 3, 200),
(43, 29, 8, 3, 200),
(44, 28, 5, 2, 100),
(46, 30, 7, 3, 200),
(47, 31, 6, 1, 200),
(48, 32, 9, 1, 50),
(49, 33, 8, 2, 200),
(50, 34, 8, 3, 200),
(51, 35, 10, 3, 33),
(52, 36, 10, 2, 33),
(53, 37, 10, 3, 33),
(54, 38, 12, 1, 90),
(55, 3, 12, 1, 90),
(57, 39, 11, 2, 54),
(58, 40, 13, 1, 100),
(63, 42, 9, 1, 50),
(65, 41, 10, 1, 33),
(68, 43, 15, 2, 25),
(69, 44, 18, 2, 32);

-- --------------------------------------------------------

--
-- Table structure for table `sales_master`
--

CREATE TABLE IF NOT EXISTS `sales_master` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `c_id` int(50) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `sales_master`
--

INSERT INTO `sales_master` (`id`, `c_id`, `date`, `status`) VALUES
(1, 1, '2021-01-06', 'Completed'),
(2, 1, '2021-04-18', 'cart'),
(3, 2, '2021-04-20', 'Completed'),
(4, 15, '2021-05-03', 'Completed'),
(5, 16, '2021-05-03', 'Completed'),
(6, 18, '2021-05-03', 'Completed'),
(7, 18, '2021-05-03', 'Completed'),
(8, 18, '2021-05-03', 'Completed'),
(9, 18, '2021-05-03', 'Completed'),
(10, 18, '2021-05-03', 'Completed'),
(11, 18, '2021-05-03', 'Completed'),
(12, 18, '2021-05-03', 'Completed'),
(13, 18, '2021-05-04', 'Completed'),
(14, 22, '2021-05-04', 'Completed'),
(15, 22, '2021-05-04', 'Completed'),
(16, 18, '2021-05-05', 'Completed'),
(17, 18, '2021-05-05', 'Completed'),
(18, 18, '2021-05-05', 'Completed'),
(19, 18, '2021-05-05', 'Completed'),
(20, 18, '2021-05-21', 'Completed'),
(21, 18, '2021-05-21', 'Completed'),
(22, 20, '2021-06-01', 'Completed'),
(23, 20, '2021-06-02', 'Completed'),
(24, 24, '2021-06-03', 'cart'),
(25, 1, '2021-06-03', 'stock'),
(26, 4, '2021-06-03', 'Completed'),
(27, 21, '2021-06-11', 'Completed'),
(28, 21, '2021-06-16', 'Completed'),
(29, 4, '2021-06-16', 'cart'),
(30, 21, '2021-06-17', 'Completed'),
(31, 21, '2021-06-17', 'Completed'),
(32, 21, '2021-06-17', 'Completed'),
(33, 21, '2021-06-17', 'Completed'),
(34, 21, '2021-06-17', 'Completed'),
(35, 21, '2021-06-17', 'Completed'),
(36, 6, '2021-06-17', 'Completed'),
(37, 6, '2021-06-17', 'Completed'),
(38, 6, '2021-06-17', 'Completed'),
(39, 2, '2021-06-17', 'Completed'),
(40, 2, '2021-06-17', 'Completed'),
(41, 21, '2021-06-20', 'Completed'),
(42, 20, '2021-06-20', 'Completed'),
(43, 21, '2021-06-21', 'cart'),
(44, 20, '2021-06-25', 'Completed');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
