-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2018 at 06:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invoice_sys`
--

-- --------------------------------------------------------

--
-- Table structure for table `client_customer`
--

CREATE TABLE `client_customer` (
  `customer_ID` int(11) NOT NULL,
  `customer_Name` varchar(100) DEFAULT NULL,
  `customer_Contact` varchar(100) DEFAULT NULL,
  `customer_Address_Line` varchar(20) DEFAULT NULL,
  `customer_Address_City` varchar(1000) DEFAULT NULL,
  `customer_Address_Country` varchar(1000) DEFAULT NULL,
  `customer_Address_State` varchar(1000) DEFAULT NULL,
  `customer_Address_ZIP` varchar(1000) DEFAULT NULL,
  `customer_Register_Date` date DEFAULT NULL,
  `client_ID` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_customer`
--

INSERT INTO `client_customer` (`customer_ID`, `customer_Name`, `customer_Contact`, `customer_Address_Line`, `customer_Address_City`, `customer_Address_Country`, `customer_Address_State`, `customer_Address_ZIP`, `customer_Register_Date`, `client_ID`) VALUES
(1, 'Poh Yan Ling', '012-4567720', 'poh', 'ipoh', 'central ipoh', 'kedah', '12600', '2018-07-22', '1'),
(2, 'Bryson Lai', '0196169999', 'sampleline', 'samplecity', 'samplecountry', 'samplestate', 'samplezip', '2018-05-14', '2');

-- --------------------------------------------------------

--
-- Table structure for table `client_invoice`
--

CREATE TABLE `client_invoice` (
  `invoice_ID` bigint(20) NOT NULL,
  `invoice_Date` date NOT NULL,
  `invoice_No` int(11) NOT NULL,
  `quotation_ID` int(11) NOT NULL,
  `customer_ID` int(11) NOT NULL,
  `client_ID` bigint(20) NOT NULL,
  `status` enum('draft','paid','partial','overdue') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_invoice`
--

INSERT INTO `client_invoice` (`invoice_ID`, `invoice_Date`, `invoice_No`, `quotation_ID`, `customer_ID`, `client_ID`, `status`) VALUES
(1, '2018-07-22', 1, 1, 1, 1, 'paid'),
(2, '2018-05-24', 2, 2, 2, 2, 'overdue'),
(3, '2018-07-24', 3, 3, 3, 3, 'draft'),
(4, '2018-07-23', 4, 4, 4, 4, 'partial');

-- --------------------------------------------------------

--
-- Table structure for table `client_invoice_item`
--

CREATE TABLE `client_invoice_item` (
  `invoice_ID` bigint(20) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_invoice_item`
--

INSERT INTO `client_invoice_item` (`invoice_ID`, `product_ID`, `quantity`) VALUES
(1, 1, 30),
(2, 2, 200);

-- --------------------------------------------------------

--
-- Table structure for table `client_product`
--

CREATE TABLE `client_product` (
  `product_ID` bigint(20) NOT NULL,
  `product_Name` varchar(100) NOT NULL,
  `product_Price` double NOT NULL,
  `product_Description` varchar(1000) NOT NULL,
  `client_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_product`
--

INSERT INTO `client_product` (`product_ID`, `product_Name`, `product_Price`, `product_Description`, `client_ID`) VALUES
(1, 'sampleproduct1', 25, 'sampledescriptionlorumpoisum', 1),
(2, 'sampleproduct2', 150, 'sampledescriptionlorumpoisum', 2);

-- --------------------------------------------------------

--
-- Table structure for table `client_quotation`
--

CREATE TABLE `client_quotation` (
  `quotation_ID` bigint(20) NOT NULL,
  `quotation_No` int(11) NOT NULL,
  `quotation_Date` date DEFAULT NULL,
  `customer_ID` int(11) DEFAULT NULL,
  `client_ID` bigint(20) DEFAULT NULL,
  `quotation_Amount` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `client_quotation_item`
--

CREATE TABLE `client_quotation_item` (
  `quotation_ID` bigint(11) NOT NULL,
  `product_ID` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_ID` int(11) NOT NULL,
  `client_ID` int(11) DEFAULT NULL,
  `username` varchar(150) NOT NULL,
  `password` varchar(35) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` enum('admin','client','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_ID`, `client_ID`, `username`, `password`, `name`, `status`) VALUES
(1, NULL, 'admin', 'admin123', 'admin', 'admin'),
(2, 2, 'yanling', 'yanling123', 'Poh Sdn Bhd', 'client');

-- --------------------------------------------------------

--
-- Table structure for table `manage_client`
--

CREATE TABLE `manage_client` (
  `client_ID` int(11) NOT NULL,
  `client_Name` varchar(100) NOT NULL,
  `client_Address_Line` text NOT NULL,
  `client_Address_City` varchar(100) NOT NULL,
  `client_Address_Country` varchar(100) NOT NULL,
  `client_Address_State` varchar(100) NOT NULL,
  `client_Address_ZIP` int(11) NOT NULL,
  `client_Contact` varchar(20) NOT NULL,
  `client_Email` varchar(100) DEFAULT NULL,
  `client_Register_Date` date NOT NULL,
  `client_Remark` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client_customer`
--
ALTER TABLE `client_customer`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `client_invoice`
--
ALTER TABLE `client_invoice`
  ADD PRIMARY KEY (`invoice_ID`);

--
-- Indexes for table `client_product`
--
ALTER TABLE `client_product`
  ADD PRIMARY KEY (`product_ID`);

--
-- Indexes for table `client_quotation`
--
ALTER TABLE `client_quotation`
  ADD PRIMARY KEY (`quotation_ID`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_ID`);

--
-- Indexes for table `manage_client`
--
ALTER TABLE `manage_client`
  ADD PRIMARY KEY (`client_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client_customer`
--
ALTER TABLE `client_customer`
  MODIFY `customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client_invoice`
--
ALTER TABLE `client_invoice`
  MODIFY `invoice_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `client_product`
--
ALTER TABLE `client_product`
  MODIFY `product_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `client_quotation`
--
ALTER TABLE `client_quotation`
  MODIFY `quotation_ID` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `manage_client`
--
ALTER TABLE `manage_client`
  MODIFY `client_ID` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
