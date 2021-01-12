-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2020 at 06:43 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `170204112`
--
CREATE DATABASE IF NOT EXISTS `170204112` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `170204112`;

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `banner_id` int(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `parent_cat` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banner`
--

INSERT INTO `banner` (`banner_id`, `cat_id`, `parent_cat`, `cat_name`, `image1`, `image2`, `image3`) VALUES
(1, 1, 0, 'Men', '/sd_project/img/men1.jpeg', '/sd_project/img/men2.jpeg', '/sd_project/img/men3.jpeg'),
(2, 2, 0, 'Women', '/sd_project/img/women1.jpg', '/sd_project/img/women2.jpg', '/sd_project/img/women3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `Product ID` int(11) NOT NULL,
  `ID` varchar(255) NOT NULL,
  `Qty` int(255) NOT NULL,
  `Total Price` int(255) NOT NULL,
  `Status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `parent_cat` int(255) NOT NULL,
  `cat_image` varchar(255) NOT NULL,
  `status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `parent_cat`, `cat_image`, `status`) VALUES
(1, 'Men', 0, '/sd_project/img/banner-men.jpg', 1),
(2, 'Women', 0, '/sd_project/img/banner-women.jpg', 1),
(3, 'Panjabi', 1, '/sd_project/img/cat1.jpg', 1),
(4, 'T Shirts', 1, '/sd_project/img/cat2.jpg', 1),
(5, 'Formal Shirt', 1, '/sd_project/img/cat3.jpg', 1),
(6, 'Casual Shirts ', 1, '/sd_project/img/cat4.jpg', 1),
(7, 'Jeans', 1, '/sd_project/img/cat5.jpg', 1),
(8, 'Joggers', 1, '/sd_project/img/cat6.jpg', 1),
(9, 'Footwear', 1, '/sd_project/img/cat7.jpg', 1),
(10, 'Accessories', 1, '/sd_project/img/cat8.jpg', 1),
(11, 'Long Shirts\r\n', 2, '/sd_project/img/cat9.jpg', 1),
(12, 'Shrugs\r\n', 2, '/sd_project/img/cat10.jpg', 1),
(13, 'Tops', 2, '/sd_project/img/cat11.jpg', 1),
(14, 'Bottoms', 2, '/sd_project/img/cat12.jpg', 1),
(15, 'Scarves', 2, '/sd_project/img/cat13.jpg', 1),
(16, 'Kameez', 2, '/sd_project/img/cat14.jpg', 1),
(17, 'Bags', 2, '/sd_project/img/cat15.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Name`, `Email`, `Phone`, `Message`) VALUES
('Noor', 'noor@gmail.com', '1123456789', 'Hello'),
('Nafisa', 'nafisa@gmail.com', '011234567892', 'Good Job.'),
('Fabiha', 'fabiha@gmail.com', '022234567892', 'Nice work.'),
('NoorATanjim', 'nooratanjim@gmail.com', '01521580665', 'hey'),
('noor', 'nooratanjim@gmail.com', '01521580665', 'valo acho bro?');

-- --------------------------------------------------------

--
-- Table structure for table `customer_orders`
--

CREATE TABLE `customer_orders` (
  `Order Id` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Due_amount` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `order_date` date NOT NULL,
  `order_status` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `ID` int(255) NOT NULL,
  `Email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsletter`
--

INSERT INTO `newsletter` (`ID`, `Email`) VALUES
(1, 'sara@gmail.com'),
(2, 'noor00@gmail.com'),
(3, 'bushra@gmail.com'),
(4, 'nafisa@gmail.com'),
(5, 'nooratanjim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `Product_ID` int(255) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Price` float NOT NULL,
  `Image1` varchar(255) NOT NULL,
  `Image2` varchar(255) NOT NULL,
  `parent_cat` int(255) NOT NULL,
  `cat_id` int(255) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Status` tinyint(5) NOT NULL,
  `Qty` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`Product_ID`, `Title`, `Price`, `Image1`, `Image2`, `parent_cat`, `cat_id`, `Description`, `Status`, `Qty`) VALUES
(1, 'COTTON PANJABI ', 2100, '/sd_project/img/cat3/prod1-1.jpg', '/sd_project/img/cat3/prod1-2.jpg', 1, 3, '100% Cotton', 1, 10),
(2, ' COLLARED RED PANJABI', 2700, '/sd_project/img/cat3/prod2-1.jpg', '/sd_project/img/cat3/prod2-2.jpg', 1, 3, '100% Cotton', 1, 10),
(3, 'WHITE PANJABI', 2990, '/sd_project/img/cat3/prod3-1.jpg', '/sd_project/img/cat3/prod3-2.jpg', 1, 3, '100% Cotton', 1, 10),
(4, 'CHECK STRIPED PANJABI', 2190, '/sd_project/img/cat3/prod4-1.jpg', '/sd_project/img/cat3/prod4-2.jpg', 1, 3, '100% Cotton', 1, 10),
(5, ' WHITE PANJABI', 2050, '/sd_project/img/cat3/prod5-1.jpg', '/sd_project/img/cat3/prod5-2.jpg', 1, 3, '100% Cotton', 1, 10),
(6, 'CHECK STRIPED PANJABI', 2190, '/sd_project/img/cat3/prod6-1.jpg', '/sd_project/img/cat3/prod6-2.jpg', 1, 3, '100% Cotton', 1, 10),
(7, 'PRINT T-SHIRT', 1850, '/sd_project/img/cat4/prod7-1.jpg', '/sd_project/img/cat4/prod7-2.jpg', 1, 4, '95% Cotton 5% Spandex', 1, 10),
(8, 'PRINT T-SHIRT', 2170, '/sd_project/img/cat4/prod8-1.jpg', '/sd_project/img/cat4/prod8-2.jpg', 1, 4, '95% Cotton 5% Spandex', 1, 10),
(9, 'FORMAL SHIRT', 1800, '/sd_project/img/cat5/prod9-1.jpg', '/sd_project/img/cat5/prod9-2.jpg', 1, 5, '95% Cotton 5% Spandex', 1, 10),
(10, 'FORMAL SHIRT', 1900, '/sd_project/img/cat5/prod10-1.jpg', '/sd_project/img/cat5/prod10-2.jpg', 1, 5, '95% Cotton 5% Spandex', 1, 10),
(12, 'PRINTED SHIRT', 1550, '/sd_project/img/cat6/prod11-1.jpg', '/sd_project/img/cat6/prod11-2.jpg', 1, 6, '95% Cotton 5% Spandex', 1, 10),
(13, 'SIDE STRAP DENIM', 2200, '/sd_project/img/cat7/prod12-1.jpg', '/sd_project/img/cat7/prod12-2.jpg', 1, 7, '95% Cotton 5% Spandex', 1, 10),
(14, 'BLACK DENIM', 2400, '/sd_project/img/cat7/prod13-1.jpg', '/sd_project/img/cat7/prod13-2.jpg', 1, 7, '95% Cotton 5% Spandex', 1, 10),
(15, 'DISTRESSED DENIM', 2400, '/sd_project/img/cat7/prod14-1.jpg', '/sd_project/img/cat7/prod14-2.jpg', 1, 7, '95% Cotton 5% Spandex', 1, 10),
(16, 'CARGO JOGGERS', 2390, '/sd_project/img/cat8/prod15-1.jpg', '/sd_project/img/cat8/prod15-2.jpg', 1, 8, '95% Cotton 5% Spandex', 1, 10),
(17, 'BROWN LEATHER CHELSEA BOOTS', 8999, '/sd_project/img/cat9/prod16-1.jpg', '/sd_project/img/cat9/prod16-2.jpg', 1, 9, 'Leather ankle boots. LIGHT split lug soles that guarantee maximum lightness and comfort.', 1, 10),
(18, 'Black LEATHER CHELSEA BOOTS', 8999, '/sd_project/img/cat9/prod17-1.jpg', '/sd_project/img/cat9/prod17-2.jpg', 1, 9, 'Leather ankle boots. LIGHT split lug soles that guarantee maximum lightness and comfort.', 1, 10),
(19, 'WALLET', 2300, '/sd_project/img/cat10/prod19-1.jpg', '/sd_project/img/cat10/prod19-2.jpg', 1, 10, '100% Leather Carbon Fiber Texture', 1, 10),
(20, 'LONG WALLET', 2700, '/sd_project/img/cat10/prod20-1.jpg', '/sd_project/img/cat10/prod20-2.jpg', 1, 10, '100% Leather Carbon Fiber Texture', 1, 10),
(21, 'BOTTLE GREEN TOPS', 1450, '/sd_project/img/cat11/prod22-1.jpg', '/sd_project/img/cat11/prod22-2.jpg', 2, 11, '95% Cotton 5% Spandex', 1, 10),
(22, 'MAROON FIT T-SHIRT', 1350, '/sd_project/img/cat11/prod23-1.jpg', '/sd_project/img/cat11/prod23-2.jpg', 2, 11, '95% Cotton 5% Spandex', 1, 10),
(23, 'PRINTED SHRUGS', 2100, '/sd_project/img/cat12/prod25-1.jpg', '/sd_project/img/cat12/prod25-2.jpg', 2, 12, 'LINEN', 1, 10),
(24, 'FLORAL PRINTED SHRUGS', 1700, '/sd_project/img/cat12/prod27-1.jpg', '/sd_project/img/cat12/prod27-2.jpg', 2, 12, 'LINEN', 1, 10),
(25, 'CONTRASTED KURTI', 1920, '/sd_project/img/cat13/prod28-1.jpg', '/sd_project/img/cat13/prod28-2.jpg', 2, 13, '100% Cotton', 1, 10),
(26, 'DARK BLUE JEANS', 1790, '/sd_project/img/cat14/prod29-1.jpg', '/sd_project/img/cat14/prod29-2.jpg', 2, 14, 'Stretchable Denim Material: 95% Cotton 5% Spandex', 1, 10),
(27, 'LIGHT BLUE JEANS', 1860, '/sd_project/img/cat14/prod30-1.jpg', '/sd_project/img/cat14/prod30-2.jpg', 2, 14, 'Stretchable Denim Material: 95% Cotton 5% Spandex', 1, 10),
(28, 'EMBROIDERY PRINT SCARF', 1230, '/sd_project/img/cat15/prod32.jpg', '/sd_project/img/cat15/prod32.jpg', 2, 15, 'Material: Silk', 1, 10),
(29, 'EMBROIDERY PRINT SCARF', 1230, '/sd_project/img/cat15/prod33.jpg', '/sd_project/img/cat15/prod33.jpg', 2, 15, 'Material: Silk', 1, 10),
(30, 'PRINTED KAMEEZ', 2900, '/sd_project/img/cat16/prod35-1.jpg', '/sd_project/img/cat16/prod35-2.jpg', 2, 16, '100% Cotton', 1, 10),
(31, 'PRINTED KAMEEZ', 3070, '/sd_project/img/cat16/prod36-1.jpg', '/sd_project/img/cat16/prod36-2.jpg', 2, 16, 'LINEN', 1, 10),
(32, 'EXCLUSIVE KAMEEZ', 3590, '/sd_project/img/cat16/prod37-1.jpg', '/sd_project/img/cat16/prod37-2.jpg', 2, 16, 'LINEN', 1, 10),
(33, 'BAG', 3444, '/sd_project/img/cat17/prod39-1.jpg', '/sd_project/img/cat17/prod39-2.jpg', 2, 17, 'Material: Velvet & Leather.', 1, 10),
(34, 'PRINTED LEATHER BAG', 2220, '/sd_project/img/cat17/prod40-1.jpg', '/sd_project/img/cat17/prod40-2.jpg', 2, 17, '100% Leather', 1, 10);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(255) NOT NULL,
  `Username` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Phone` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `Status` int(11) NOT NULL,
  `Created Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `Username`, `Email`, `Phone`, `Address`, `Password`, `Status`, `Created Date`) VALUES
(1, 'Noor', 'noor00@gmail.com', '0123456789', 'Dhaka', '123456', 0, '0000-00-00 00:00:00'),
(2, 'Bushra', 'bushra@gmail.com', '01703301389', 'Dhaka', '123456', 0, '0000-00-00 00:00:00'),
(3, 'Maisha', 'maisha@gmail.com', '01722366732', 'Dhaka', '123456', 0, '0000-00-00 00:00:00'),
(4, 'Abir', 'abir@gmail.com', '01680000000', 'Dhaka', '123', 0, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`Product ID`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_orders`
--
ALTER TABLE `customer_orders`
  ADD PRIMARY KEY (`Order Id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`Product_ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `banner_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `customer_orders`
--
ALTER TABLE `customer_orders`
  MODIFY `Order Id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `Product_ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
