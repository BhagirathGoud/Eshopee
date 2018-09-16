-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 10, 2013 at 01:42 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `pid` int(20) NOT NULL,
  `qty` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=34 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `pid`, `qty`) VALUES
(3, 'bh', 3, 3),
(7, 'bh', 6, 5),
(14, 'bh', 19, 1),
(27, 'bh', 12, 1),
(28, 'bh', 20, 1),
(29, 'bh', 29, 1),
(32, 'bh', 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `confirm`
--

CREATE TABLE IF NOT EXISTS `confirm` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `userid` varchar(50) NOT NULL,
  `key` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `confirm`
--

INSERT INTO `confirm` (`id`, `userid`, `key`, `email`) VALUES
(1, '67e3c6ed61bf2a6574292c3a1376b0e7', '087edfd86de7cf80019768dbd463af51', 'bhagi.goud@gmail.com'),
(2, 'c08bba7a0c0386f1551e8474d853ecbf', 'eaf1642319a3f9ad786fd2b2180d821a', 'bhagi.goud@gmail.com'),
(3, '48a4d4064afc1fe4625bec30a94ccf41', 'c81bce152742c49c23c2008b07f49482', 'bhagi.goud@gmail.com'),
(4, '23af498bbaddfc2589b3958edc7bded6', '3e16804dd1ed511cec66823fa13e52b0', 'bhagi.goud@gmail.com'),
(5, '0', '087edfd86de7cf80019768dbd463af51', 'bhagi.goud@gmail.com'),
(6, 'e2fc714c4727ee9395f324cd2e7f331f', 'baf95cf9064cb038f5ed59f3cc228581', 'bhagi.goud@gmail.com'),
(7, '93e7955eca1bfb712ecc9293479248df', 'd49e97a30b9bade16bb8176b2bc0e3d1', 'bhagi.goud@gmail.com'),
(8, '412566367c67448b599d1b7666f8ccfc', '6ec4dcdfef5b44179f901169094f0d72', 'bhagi.goud@gmail.com'),
(9, '11d8c28a64490a987612f2332502467f', '45f046261aa15bdd5a3366615b6e0cc8', 'bhagi.goud@gmail.com'),
(10, '8264ee52f589f4c0191aa94f87aa1aeb', 'fab3ef32529d8afc51ebc800ee1a8d9a', 'bhagi.goud@gmail.com'),
(11, 'f27f6f1c7c5cbf4e3e192e0a47b85300', 'eedf0a92cea5629a0ef8a52d56c1b272', 'bhagi.goud@gmail.com'),
(12, '7f94dd413148ff9ac9e9e4b6ff2b6ca9', '428db16996070a1c220f9dbeb60f9064', 'bhagi.goud@gmail.com'),
(13, '9d5da4f31eddc5eea1c1222da1d7ff12', '0fd5275fd8815d1e5bba89a1c8b6610f', 'bhagi.goud@gmail.com'),
(14, '3d2c350ce8caf2783ee09f5f8f9cd5e3', '89d9c7166c156d9712f3c98b6338887f', 'bhagi.goud@gmail.com'),
(15, '121aa3ee4a7d5b1bbbc760fd0c6de79b', '3a4bf43346f8a5c695333e73822f86c9', 'bhagi.goud@gmail.com'),
(16, 'cc8c0a97c2dfcd73caff160b65aa39e2', 'c49c84a4f4739a7abadbc9648aef5212', 'bhagi.goud@gmail.com'),
(17, 'e5bb23797bfea314a3db43d07dbd6a74', '6c996d49cf37b2fdf43b0b290fd37087', 'bhagi.goud@gmail.com'),
(18, '288404204e3d452229308317344a285d', 'a126975a556289d06388430684e4b483', 'bhagi.goud@gmail.com'),
(20, '771f01104d905386a134a676167edccc', 'b458f60d2452611653e204ba7de861b4', 'bhagi.goud@gmail.com'),
(21, '385d04e7683a033fcc6c6654529eb7e9', 'f7669095e0b37f47696024d6185e7b68', 'bhagi.goud@gmail.com'),
(22, 'c9f9d7dd806cf4122041837a80f47c64', '391c992483f048ec9031caa833395697', 'bhagi.goud@gmail.com'),
(23, '9818af84da6f96579e99ed315f69e0c5', '69b1f4584135f00d86d46798c8061498', 'bhagi.goud@gmail.com'),
(24, 'de3ec0aa2234aa1e3ee275bbc715c6c9', '12d019de6e86b21ce5cf56f85a7fde71', 'bhagi.goud@gmail.com'),
(25, 'f6122c971aeb03476bf01623b09ddfd4', '6431c40dce208a6a94c4a1f4883d05f2', 'bhagi.goud@gmail.com'),
(26, '1bfad22f0925978f310a37440bfdff43', '978340fcbb93154f723274affdb1f2b0', 'bhagi.goud@gmail.com'),
(27, '6864f389d9876436bc8778ff071d1b6c', 'a7af71e02bd664cfc8f91845a2e536fa', 'bhagirathgoud@ymail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee_details`
--

CREATE TABLE IF NOT EXISTS `employee_details` (
  `empid` varchar(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `details` varchar(300) NOT NULL,
  `contact_no` int(20) NOT NULL,
  `region` varchar(100) NOT NULL,
  `salary` int(30) NOT NULL,
  PRIMARY KEY (`empid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `items_sold`
--

CREATE TABLE IF NOT EXISTS `items_sold` (
  `transid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `pid` int(20) NOT NULL,
  `cat_id` int(20) NOT NULL,
  `qty` int(20) NOT NULL,
  PRIMARY KEY (`transid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `items_sold`
--

INSERT INTO `items_sold` (`transid`, `username`, `pid`, `cat_id`, `qty`) VALUES
(1, 'bh', 1, 2, 2),
(2, 'bh', 2, 2, 1),
(3, 'bh', 21, 4, 1),
(4, 'bh', 19, 3, 2),
(9, 'bh', 5, 5, 1),
(10, 'bh', 30, 1, 1),
(11, 'bh', 20, 3, 1),
(12, 'bh', 36, 3, 1),
(13, 'bh', 38, 4, 1),
(14, 'gt', 50, 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `products_catag`
--

CREATE TABLE IF NOT EXISTS `products_catag` (
  `cat_id` int(50) NOT NULL AUTO_INCREMENT,
  `category` varchar(200) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products_catag`
--

INSERT INTO `products_catag` (`cat_id`, `category`) VALUES
(1, 'Books'),
(2, 'Electronics'),
(3, 'Mobiles'),
(4, 'Computers'),
(5, 'Cameras'),
(6, 'Office & Stationery'),
(7, 'Gifts');

-- --------------------------------------------------------

--
-- Table structure for table `products_details`
--

CREATE TABLE IF NOT EXISTS `products_details` (
  `pid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `sub_cat_id` int(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `extra_details` text NOT NULL,
  `image_product` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `price` int(10) NOT NULL,
  `current_price` int(10) NOT NULL,
  `offer` int(20) NOT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=91 ;

--
-- Dumping data for table `products_details`
--

INSERT INTO `products_details` (`pid`, `name`, `sub_cat_id`, `details`, `extra_details`, `image_product`, `brand`, `price`, `current_price`, `offer`) VALUES
(1, 'Atek ATK MP3 Player 31 Grey', 10, '', '', 'css/images/deal4.jpg', 'Atek', 1199, 559, 50),
(2, 'Apple iPod shuffle 2GB - Silver', 10, '', '', 'css/images/deal5.jpg', 'Apple', 3700, 3499, 5),
(3, 'Nikon L25 10.1 MP Digital Camera', 28, '', '', 'css/images/best_cam_1.jpg', 'Nikon', 4830, 4450, 8),
(4, 'The Oath of the Vayuputras: Shiva Trilogy 3', 7, '', '', 'css/images/deal1.jpg', 'Amt Tripati', 350, 245, 30),
(5, 'DigiFlip Wizard CB001 Camera Bag', 33, '', '', 'css/images/deal2.jpg', '', 1500, 1249, 17),
(6, 'Intex Aqua 5 Android Mobile Phone - Whit..', 14, '', '', 'css/images/best_mobile_1.jpg', 'Intex', 10500, 9600, 10),
(7, 'Creative D200 Portable Bluetooth Wireless Speaker', 25, '', '', 'css/images/deal3.jpg', 'Creative', 7999, 5799, 28),
(8, 'Water for Elephants', 7, '', '', 'css/images/image-best01.jpg', 'Sara Craug', 450, 360, 20),
(9, 'HP Pavilion G6-2313AX Laptop', 22, '', '', 'css/images/comp_1.jpg', 'Hp', 0, 38490, 0),
(10, 'Cooler Master Notepal X2 Cooling Pad', 21, '', '', 'css/images/comp_2.jpg', '', 0, 1600, 0),
(11, 'Dell 1TB USB 3.0 Portable Hard Drive (Black)', 21, '', '', 'css/images/comp_3.jpeg', 'Dell', 0, 4990, 0),
(12, 'Sandisk Cruzer Blade 16 GB Pen Drive (Black & Red)', 24, '', '', 'css/images/comp_4.jpeg', 'Sandisk', 999, 547, 50),
(13, 'Huawei Mediapad 7 Lite', 23, '', '', 'css/images/comp_5.jpg', '', 0, 13700, 0),
(14, 'Sky Tab X10 7', 23, '', '', 'css/images/comp_6.jpg', '', 0, 5590, 0),
(15, 'Sony BRAVIA 26 inches HD LED KDL-26EX550 Television', 13, '', '', 'css/images/mp1.jpg', 'Sony', 27900, 26900, 4),
(16, 'New Apple iPod touch 32GB Blue (5th Generation)', 10, '', '', 'css/images/mp2.jpg', 'Apple', 23900, 22944, 4),
(17, 'HP v220w 16 GB Pendrive', 24, '', '', 'css/images/mp3.jpg', 'Hp', 999, 604, 39),
(18, 'Notex 2013 Diary Black & Brown - CNP...', 39, '', '', 'css/images/diary1.jpg', 'Notex', 0, 339, 0),
(19, 'Philips SBCH140 Headphone', 19, '', '', 'css/images/headphone_1.jpg', 'Philips', 0, 219, 0),
(20, 'Philips SHE1360 Headphones', 19, '', '', 'css/images/headphone_2.jpg', 'Philips', 0, 139, 0),
(21, 'Sennheiser RS 110 Wireless Headphone...', 19, '', '', 'css/images/headphone_3.jpg', 'Sennheiser ', 0, 5349, 0),
(22, 'Quantum 555 Stereo Earphone ', 19, '', '', 'css/images/headphone_4.jpg', 'Quantum', 0, 149, 0),
(23, 'HUMX Bluetooth Headset', 19, '', '', 'css/images/headphone_5.jpg', 'HUMX', 1599, 599, 62),
(24, 'Nokia WH-205 Headset ', 19, '', '', 'css/images/headphone_6.jpg', 'Nokia ', 349, 319, 8),
(25, 'A Praving Life', 7, '', '', 'css/images/image03.jpg', 'Paul.F.Miller', 0, 150, 0),
(26, 'Trader of Secrets', 7, '', '', 'css/images/image06.jpg', 'Steve Martini', 0, 165, 0),
(27, 'The Affair', 7, '', '', 'css/images/image07.jpg', 'Lee child', 0, 145, 0),
(28, 'The Third Gate', 7, '', '', 'css/images/image08.jpg', 'Licoln Child', 0, 250, 0),
(29, 'The Devil''d Elixir', 7, '', '', 'css/images/image01.jpg', 'Raymond Khoury', 0, 750, 0),
(30, 'The Strange case of Finley Jayne', 7, '', '', 'css/images/image04.jpg', 'Khoody kroks', 0, 350, 0),
(31, 'Samsung Galaxy Tab 2 P3100 | Titanium Silver', 23, '', '', 'css/images/gadg1.jpg', 'Samsung ', 0, 15912, 0),
(32, 'SPC Internet 821 2GB MP3 Player', 10, '', '', 'css/images/gadg2.jpg', '', 1699, 1359, 20),
(33, 'HUMX GO Music MP3 Player with FM + H...', 10, '', '', 'css/images/gadg3.jpg', 'HUMX', 0, 2290, 0),
(34, 'Philips PD7030/94 Portable DVD Player', 12, '', '', 'css/images/gadg4.jpg', 'Philips', 0, 5900, 0),
(35, 'Apple Unlock Brand New I Phone 3G S 16 GB', 14, '', '', 'css/images/gadg5.jpg', 'Apple', 0, 14999, 0),
(36, 'Samsung Galaxy S3/SIII Mobile | Mar...', 14, '', '', 'css/images/gadg6.jpg', 'Samsung', 0, 30600, 0),
(37, 'Canon EOS 600D SLR (Kit 18-135mm IS) + Tripod + freebies inside', 30, 'combo', '', 'css/images/combo1.jpg', 'Canon', 56990, 55280, 3),
(38, 'Strontium 4GB Key Pen Drive  + micro chip', 24, 'combo', '', 'css/images/combo2.jpg', 'Strontium', 698, 370, 46),
(39, 'A4 Document Folder - Friendly Folder', 40, 'combo', 'Buy1 Get 1Free', 'css/images/combo3.jpg', '', 0, 4999, 0),
(40, 'Sandisk SDCZ 52 16GB Pendrive', 24, 'combo', 'Buy1 Get 1Free', 'css/images/combo4.jpg', 'Sandisk ', 0, 1099, 0),
(41, 'Quantum QHM7468-2V USB Game Pad with Shock...', 9, '', '', 'css/images/game_1.jpg', 'Quantum', 350, 279, 23),
(42, 'HUMX Universal Adaptor', 11, '', '', 'css/images/adaptor_1.jpg', 'HUMX', 999, 350, 65),
(43, 'Panasonic KX TG3611BX Cordless Phone', 11, '', '', 'css/images/phone_1.jpg', 'Panasonic', 1999, 1825, 9),
(44, 'HDMI to Mini HDMI Cable 1.3 HDTV HDD... ', 11, '', '', 'css/images/cable_2.jpg', '', 350, 299, 14),
(45, 'Prolink USB To USB Mini Cable - 2 Mt... ', 11, '', '', 'css/images/cable_1.jpg', '', 499, 495, 0),
(46, 'MX High Quality Stereo Extension 3.5... ', 11, '', '', 'css/images/cable_3.jpg', '', 499, 449, 10),
(47, 'Prolink iPod 30 Pin To 5 RCA + USB A... ', 11, '', '', 'css/images/cable_4.jpg', '', 2499, 2475, 0),
(48, 'Olympus E-P3 DSLR Camera with 14-42m... ', 30, '', '', 'css/images/slr_1.jpg', 'Olympus', 48995, 47525, 4),
(49, 'Sony Alpha SLT A57 with 18-55 Lens D...', 30, '', '', 'css/images/slr_1.jpg', 'Sony', 45990, 44990, 5),
(50, 'Nikon 1 J1 DSLR with 10-30mm + 30-110 mm Lens', 30, '', '', 'css/images/slr_3.jpg', 'Nikon', 39950, 33900, 15),
(51, 'Parker Jotter Valentine''s Special Stainl..', 44, '', '', 'css/images/pen_1.jpg', 'Parker', 500, 250, 50),
(52, 'Parker Vector Valentine''s Special Matte ..', 44, '', '', 'css/images/pen_2.jpg', 'Parker', 850, 650, 20),
(53, 'Parker Vector Valentine''s Special Stainl..', 44, '', '', 'css/images/pen_3.jpg', 'Parker', 750, 650, 15),
(54, 'Parker Frontier Valentine''s Special Stai..', 44, '', '', 'css/images/pen_4.jpg', 'Parker', 450, 350, 10),
(55, 'Parker Classic Valentine''s Special Matte..', 44, '', '', 'css/images/pen_5.jpg', 'Parker', 650, 350, 40),
(56, 'Love And Love Only Chocolates', 42, '', '', 'css/images/val1.jpg', '', 279, 229, 17),
(57, 'You And Me Chocolates', 42, '', '', 'css/images/val2.jpg', '', 329, 399, 9),
(58, 'Swiss Military Stainless Steel Bever... ', 45, '', '', 'css/images/mug1.jpg', 'Swiss Military', 690, 549, 20),
(59, 'Citizen SDC-810 BN Desktop Series Calcul..', 38, '', '', 'css/images/calc.jpg', 'Citizen', 500, 225, 50),
(60, 'Photo Frame with Digital Display - P... ', 41, '', '', 'css/images/art1.jpg', '', 0, 549, 0),
(61, 'Pen Stand with Digital Display - Sta..', 41, '', '', 'css/images/art2.jpg', '', 0, 649, 0),
(62, 'Waterman Hemisphere Deluxe Black Met... ', 35, '', '', 'css/images/p1.jpg', 'Waterman', 0, 4400, 0),
(63, 'Gifting Ideas 12 Colour Pencils with... ', 35, '', '', 'css/images/p2.jpg', 'Gifting Ideas ', 0, 199, 0),
(64, 'Luxor Sl N.Excel Marker Pen Black (S... ', 35, '', '', 'css/images/p3.jpg', 'Luxor', 0, 200, 0),
(65, 'Luxor Gloliter Pen Pink (Set of 10 P... ', 37, '', '', 'css/images/h1.jpg', 'Luxor', 0, 200, 0),
(66, 'Slik MINI II Minipod ', 31, '', '', 'css/images/t1.jpg', 'Slik', 1500, 1095, 15),
(67, 'Slik SLIM POD II Monopod ', 31, '', '', 'css/images/t2.jpg', 'Slik', 1200, 1120, 6),
(68, 'Celestron UpClose G2 7x35 - Porro (B... ', 34, '', '', 'css/images/bi1.jpg', 'Celestron', 3399, 3100, 7),
(69, 'Vanguard KDT-1025 Binoculars ', 34, '', '', 'css/images/bi2.jpg', 'Vanguard', 3000, 2500, 18),
(70, 'Strontium 4GB SD Card (Class 4) ', 32, '', '', 'css/images/mc1.jpg', 'Strontium', 399, 210, 47),
(71, 'Sony SF-4N4/T 4GB Class 4 SDHC Card ', 32, '', '', 'css/images/mc2.jpg', 'Sony ', 300, 285, 4),
(72, 'Quantum 495-LM PC Camera (With 6 Lig... ', 26, '', '', 'css/images/wc1.jpg', 'Quantum', 495, 399, 19),
(73, 'Genius Facecam 1320 1.3MP Webcam', 26, '', '', 'css/images/wc2.jpg', 'Genius', 1999, 799, 60),
(74, 'Zebronics Wireless Bluetooth 3.0 Opt... ', 27, '', '', 'css/images/kb1.jpg', 'Zebronics ', 0, 889, 0),
(75, 'Logitech MK270 Wireless Keyboard & M... ', 27, '', '', 'css/images/kb2.jpg', 'Logitech ', 2095, 1879, 10),
(76, 'iAccy Antiglare Screenguard for HTC ... ', 15, '', '', 'css/images/ma1.jpg', 'iAccy', 299, 255, 14),
(77, 'Mili Universal Charger HC - U20-2 ', 15, '', '', 'css/images/ma2.jpg', 'Mili', 0, 1990, 0),
(78, 'iAccy Diamond Case for HTC Explorer ..', 17, '', '', 'css/images/mco1.jpg', 'iAccy ', 349, 319, 8),
(79, 'Callmate 6 in 1 Car Charger with iPh... ', 16, '', '', 'css/images/mch1.jpg', 'Callmate ', 399, 249, 37),
(80, 'Belkin Conserve Valet ', 16, '', '', 'css/images/mch.jpg', 'Belkin', 0, 2399, 0),
(81, 'Transcend 2 GB MicroSD Memory Card ', 18, '', '', 'css/images/mca1.jpg', 'Transcend ', 300, 199, 37),
(82, 'Kingston 4GB MicroSD Memory Card (Cl... ', 18, '', '', 'css/images/mca2.jpg', 'Kingston', 599, 214, 64),
(83, 'Wall and Piece', 1, '', '', 'css/images/a1.jpg', ' Banksy', 1322, 1066, 19),
(84, 'Graffiti Planet: The Best Graffiti from Around the World', 1, '', '', 'css/images/a2.jpg', 'NA', 926, 741, 19),
(85, 'Absolute Dark Knight', 2, '', '', 'css/images/c1.jpg', 'Frank Miller', 5600, 3752, 33),
(86, 'Essential Thor V01 Journey (R)', 2, '', '', 'css/images/c1.jpg', 'Stan Lee', 1160, 920, 20),
(87, 'Software Testing', 4, '', '', 'css/images/ct1.jpg', 'Rajiv Chopra', 33, 255, 15),
(88, 'Educating the First Digital Generation', 4, '', '', 'css/images/ct2.jpg', 'Paul G Harwood', 550, 385, 30),
(89, 'Ronaldo: The Obsession for Perfection', 5, '', '', 'css/images/s1.jpg', ' Luca Caioli', 299, 215, 30),
(90, 'The Ball Is Round: A Global History Of Soccer', 5, '', '', 'css/images/s2.jpg', ' David Goldblatt', 1450, 1150, 20);

-- --------------------------------------------------------

--
-- Table structure for table `products_sub_catag`
--

CREATE TABLE IF NOT EXISTS `products_sub_catag` (
  `subcat_id` int(50) NOT NULL AUTO_INCREMENT,
  `cat_id` int(50) NOT NULL,
  `subcategory` varchar(200) NOT NULL,
  PRIMARY KEY (`subcat_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `products_sub_catag`
--

INSERT INTO `products_sub_catag` (`subcat_id`, `cat_id`, `subcategory`) VALUES
(1, 1, 'Arts'),
(2, 1, 'Comics'),
(4, 1, 'Computers & Technology'),
(5, 1, 'Sports'),
(6, 1, 'Music&Movies'),
(7, 1, 'Novels'),
(9, 2, 'Gaming Controllers'),
(10, 2, 'ipods&Mp3 Players '),
(11, 2, 'Cables & Connectors'),
(12, 2, 'DVD Players'),
(13, 2, 'LCD/LED Tvs'),
(14, 3, 'Mobile Phones'),
(15, 3, 'Mobile Accessories'),
(16, 3, 'Mobile Chargers'),
(17, 3, 'Mobile Covers'),
(18, 3, 'Memory Cards'),
(19, 3, 'Headphones & Headsets'),
(21, 4, 'Computer Peripherals'),
(22, 4, 'Laptops'),
(23, 4, 'Tablets & iPads'),
(24, 4, 'Pendrives & Memory Devices'),
(25, 4, 'Speakers'),
(26, 4, 'Webcam'),
(27, 4, 'Keyboard & Mouse'),
(28, 5, 'Digital Camera'),
(29, 5, 'Lens'),
(30, 5, 'Digital SLRs'),
(31, 5, 'Tripods'),
(32, 5, 'Memory cards'),
(33, 5, 'Cases & Bags'),
(34, 5, 'Binoculars'),
(35, 6, 'Pens & Pencils'),
(36, 6, 'Markers'),
(37, 6, 'Highlighters'),
(38, 6, 'Calculators'),
(39, 6, 'Diaries'),
(40, 6, 'Files & Folders'),
(41, 6, 'Art Supplies'),
(42, 7, 'Cakes & Chocolates'),
(43, 7, 'Sweets & Dry Fruits '),
(44, 7, 'Festivals'),
(45, 7, 'Tea Mugs');

-- --------------------------------------------------------

--
-- Table structure for table `purchase_details`
--

CREATE TABLE IF NOT EXISTS `purchase_details` (
  `transid` int(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `employee_id` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `method_paid` varchar(30) NOT NULL,
  `status` varchar(100) NOT NULL,
  PRIMARY KEY (`transid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `purchase_details`
--

INSERT INTO `purchase_details` (`transid`, `username`, `employee_id`, `date`, `time`, `method_paid`, `status`) VALUES
(1, 'bh', '152', '2013-02-06', '2013-02-09 06:18:25', 'Cash on Delivery', 'Processing..'),
(12, 'bh', '0', '2013-02-09', '2013-02-09 06:18:25', 'Cash on Delivery', 'Processing..'),
(13, 'bh', '0', '2013-02-09', '2013-02-09 06:18:25', 'Cash on Delivery', 'Processing..'),
(14, 'gt', '0', '2013-02-10', '2013-02-10 06:33:13', 'Cash on Delivery', 'Processing..');

-- --------------------------------------------------------

--
-- Table structure for table `users_details`
--

CREATE TABLE IF NOT EXISTS `users_details` (
  `userid` varchar(100) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `home_address` text NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(10) NOT NULL,
  `pincode` int(10) NOT NULL,
  `country` varchar(20) NOT NULL,
  `contact_no` int(20) NOT NULL,
  `emailid` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `active` int(5) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users_details`
--

INSERT INTO `users_details` (`userid`, `firstname`, `lastname`, `home_address`, `city`, `state`, `pincode`, `country`, `contact_no`, `emailid`, `username`, `password`, `active`) VALUES
('48a4d4064afc1fe4625bec30a94ccf', 'ldc', 'cdlc', 'ckm ;', 'cc ', 'cdc', 789465, 'cdd', 2147483647, 'bhagi.goud@gmail.com', 'bhagi', 'bhagi', 0),
('67e3c6ed61bf2a6574292c3a1376b0', 'hj', 'njjaks', 'kald', 'kofd', 'kofewf', 123456, 'keorfwe', 1234567890, 'bhagi.goud@gmail.com', 'bhagirath', 'bh', 0),
('c08bba7a0c0386f1551e8474d853ec', 'hj', 'njjaks', 'jkkmk', 'kkk', 'kkk', 111111, 'lll', 1234567890, 'bhagi.goud@gmail.com', 'bh', 'bh', 1),
('ce877963f0fab97495233f91bf0960', 'ikjkjmnk', 'kl', 'mk', 'fff', 'cc', 789465, 'dc', 2147483647, 'bhagi.goud@gmail.com', 'bhjjjj', 'bh', 0),
('23af498bbaddfc2589b3958edc7bde', 'sds', 'fvdv', 'dcac', 'cdscvds', 'fggvdf', 123456, 'wrffg', 2147483647, 'bhagi.goud@gmail.com', 'bha', 'bha', 0),
('0', 'bhagi', 'bhagi', 'bhagi', 'bhagi', 'bh', 123456, 'bhagi', 2147483647, 'bhagi.goud@gmail.com', 'bhagirath', 'bb', 0),
('e2fc714c4727ee9395f324cd2e7f33', 'hjsxh', 'SKDXSA', 'XASDKC', 'nhjx', 'SJXSA', 123456, 'GHYKB', 2147483647, 'bhagi.goud@gmail.com', 'abcd', 'abcd', 0),
('93e7955eca1bfb712ecc9293479248', 'pqs', 'pqs', 'pqs', 'pqs', 'pqs', 613401, 'pqs', 2147483647, 'bhagi.goud@gmail.com', 'pqs', 'pqs', 0),
('412566367c67448b599d1b7666f8cc', 'mn', 'mn', 'mn', 'mn', 'mn', 123456, 'bb', 2147483647, 'bhagi.goud@gmail.com', 'mn', 'mn', 0),
('11d8c28a64490a987612f233250246', 'op', 'op', 'op', 'op', 'op', 123456, 'op', 2147483647, 'bhagi.goud@gmail.com', 'op', 'op', 0),
('8264ee52f589f4c0191aa94f87aa1a', 'qa', 'qa', 'qa', 'qa', 'qa', 613401, 'qa', 2147483647, 'bhagi.goud@gmail.com', 'qa', 'qa', 0),
('f27f6f1c7c5cbf4e3e192e0a47b853', 'ppp', 'ppp', 'ppp', 'ppp', 'ppp', 123456, 'ppp', 2147483647, 'bhagi.goud@gmail.com', 'ppp', 'ppp', 0),
('7f94dd413148ff9ac9e9e4b6ff2b6c', 'ooo', 'ooo', 'ooo', 'ooo', 'ooo', 123456, 'ooo', 2147483647, 'bhagi.goud@gmail.com', 'ooo', 'ooo', 0),
('9d5da4f31eddc5eea1c1222da1d7ff', 'ol', 'ol', 'ol', 'ol', 'ol', 123456, 'ol', 2147483647, 'bhagi.goud@gmail.com', 'ol', 'ol', 0),
('3d2c350ce8caf2783ee09f5f8f9cd5', 'uj', 'uj', 'uj', 'uj', 'uj', 123456, 'uj', 2147483647, 'bhagi.goud@gmail.com', 'uj', 'uj', 0),
('121aa3ee4a7d5b1bbbc760fd0c6de7', 'bv', 'bv', 'bv', 'bv', 'bv', 123456, 'bv', 2147483647, 'bhagi.goud@gmail.com', 'bv', 'bv', 0),
('cc8c0a97c2dfcd73caff160b65aa39', 'az', 'az', 'az', 'az', 'az', 123456, 'az', 2147483647, 'bhagi.goud@gmail.com', 'az', 'az', 0),
('e5bb23797bfea314a3db43d07dbd6a', 'gf', 'gf', 'gf', 'gf', 'gf', 123456, 'gf', 2147483647, 'bhagi.goud@gmail.com', 'gf', 'gf', 0),
('288404204e3d452229308317344a28', 'pl', 'pl', 'pl', 'pl', 'pl', 123456, 'pl', 2147483647, 'bhagi.goud@gmail.com', 'pl', 'pl', 0),
('444bcb3a3fcf8389296c49467f27e1', 'ok', 'OK', 'OK', 'OK', 'OK', 123456, 'ok', 2147483647, 'bhagi.goud@gmail.com', 'ok', 'ok', 0),
('771f01104d905386a134a676167edc', 'kj', 'kj', 'kj', 'kj', 'kj', 123456, 'kj', 2147483647, 'bhagi.goud@gmail.com', 'kj', 'kj', 0),
('385d04e7683a033fcc6c6654529eb7e9', 'yu', 'yu', 'yu', 'yu', 'yu', 613401, 'yu', 1234567890, 'bhagi.goud@gmail.com', 'yu', 'yu', 1),
('c9f9d7dd806cf4122041837a80f47c64', 'bf', 'bf', 'bf', 'bf', 'bf', 123465, 'bf', 2147483647, 'bhagi.goud@gmail.com', 'bf', 'bf', 1),
('9818af84da6f96579e99ed315f69e0c5', 'yh', 'yh', 'yh', 'yh', 'yh', 123456, 'yh', 2147483647, 'bhagi.goud@gmail.com', 'yh', 'yh', 0),
('de3ec0aa2234aa1e3ee275bbc715c6c9', 'cv', 'cv', 'cv', 'cv', 'cv', 123456, 'cv', 2147483647, 'bhagi.goud@gmail.com', 'cv', 'cv', 1),
('f6122c971aeb03476bf01623b09ddfd4', 'po', 'po', 'po', 'po', 'po', 123456, 'po', 2147483647, 'bhagi.goud@gmail.com', 'po', 'po', 1),
('1bfad22f0925978f310a37440bfdff43', 'gt', 'gt', 'jdfcd', 'djfcisdcf', 'djciksdc', 123456, 'djicfcjd', 1224567890, 'bhagi.goud@gmail.com', 'gt', 'gt', 1),
('6864f389d9876436bc8778ff071d1b6c', 'my', 'my', 'my', 'my', 'my', 789465, 'my', 2147483647, 'bhagirathgoud@ymail.', 'my', 'my', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
