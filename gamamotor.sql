-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2020 at 10:59 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamamotor`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `stock_id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_status` enum('active','inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`stock_id`, `no`, `category_name`, `category_status`) VALUES
(1, 1, 'Cup Kit', 'active'),
(2, 2, 'Dinamo Sapu Kaca', 'active'),
(3, 3, 'Gigi Roda Angin', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `stock_id` int(11) NOT NULL,
  `no` int(11) NOT NULL,
  `stock_code` varchar(255) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `stock_location` varchar(255) NOT NULL,
  `stock_beginning` int(11) NOT NULL,
  `stock_in` int(11) NOT NULL,
  `stock_out` int(11) NOT NULL,
  `stock_quantity` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`stock_id`, `no`, `stock_code`, `product_type`, `brand`, `price`, `stock_location`, `stock_beginning`, `stock_in`, `stock_out`, `stock_quantity`, `date`) VALUES
(1, 1, '1', 'Cup Kit', 'CJP', 0, 'Warehouse', 0, 7000, 2000, 5000, '2020-01-14 17:00:00'),
(2, 2, '2', 'Dinamo Sapu Kaca', 'JP', 0, 'Warehouse', 0, 0, 0, 0, '2020-01-14 17:00:00'),
(3, 3, '3', 'Gigi Roda Angin', 'MEC', 0, 'Warehouse', 0, 0, 0, 0, '2020-01-14 17:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `stock_card`
--

CREATE TABLE `stock_card` (
  `stock_card_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `stock_description` varchar(100) NOT NULL,
  `stock_beginning` int(11) NOT NULL,
  `stock_in` int(11) NOT NULL,
  `stock_out` int(11) NOT NULL,
  `stock_balance` int(11) NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_card`
--

INSERT INTO `stock_card` (`stock_card_id`, `stock_id`, `stock_description`, `stock_beginning`, `stock_in`, `stock_out`, `stock_balance`, `date`) VALUES
(110, 1, 'PANTHER MK 8-94461-250', 0, 1000, 0, 1000, '2020-02-06 20:12:40'),
(111, 1, 'PANTHER MK 8-94461-250', 1000, 6000, 0, 7000, '2020-02-06 20:12:56'),
(112, 1, 'PANTHER MK 8-94461-250', 7000, 0, 2000, 5000, '2020-02-06 20:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `stock_in`
--

CREATE TABLE `stock_in` (
  `stock_in_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `stock_description` text NOT NULL,
  `stock_in` int(11) NOT NULL,
  `stock_status` enum('active','inactive') NOT NULL,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_in`
--

INSERT INTO `stock_in` (`stock_in_id`, `stock_id`, `stock_description`, `stock_in`, `stock_status`, `date`) VALUES
(109, 1, 'PANTHER MK 8-94461-250', 1000, 'active', '2020-02-06 20:12:40'),
(110, 1, 'PANTHER MK 8-94461-250', 6000, 'active', '2020-02-06 20:12:56');

--
-- Triggers `stock_in`
--
DELIMITER $$
CREATE TRIGGER `stock_in` BEFORE INSERT ON `stock_in` FOR EACH ROW BEGIN
	INSERT INTO stock_card(stock_card_id,stock_id,stock_description,stock_beginning,stock_in,stock_out,stock_balance,date)
    VALUES(null,NEW.stock_id,NEW.stock_description,(SELECT stock_quantity FROM stock WHERE stock_id = NEW.stock_id),NEW.stock_in,0,(SELECT stock_quantity+NEW.stock_in FROM stock WHERE stock_id = NEW.stock_id),CURRENT_TIMESTAMP);
    
    UPDATE stock SET stock_quantity = stock_quantity+NEW.stock_in
    WHERE stock_id = NEW.stock_id;
    
    
    
   
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `stock_out`
--

CREATE TABLE `stock_out` (
  `stock_out_id` int(11) NOT NULL,
  `stock_id` int(11) NOT NULL,
  `stock_description` text NOT NULL,
  `stock_out` int(11) NOT NULL,
  `stock_status` enum('active','inactive') NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stock_out`
--

INSERT INTO `stock_out` (`stock_out_id`, `stock_id`, `stock_description`, `stock_out`, `stock_status`, `date`) VALUES
(54, 1, 'PANTHER MK 8-94461-250', 2000, 'active', '2020-02-06 20:13:37');

--
-- Triggers `stock_out`
--
DELIMITER $$
CREATE TRIGGER `stock_out` BEFORE INSERT ON `stock_out` FOR EACH ROW BEGIN
	INSERT INTO stock_card(stock_card_id,stock_id,stock_description,stock_beginning,stock_in,stock_out,stock_balance,date)
    VALUES(null,NEW.stock_id,NEW.stock_description,(SELECT stock_quantity FROM stock WHERE stock_id = NEW.stock_id),0,NEW.stock_out,(SELECT stock_quantity-NEW.stock_out FROM stock WHERE stock_id = NEW.stock_id),CURRENT_TIMESTAMP);
    
    UPDATE stock SET stock_quantity = stock_quantity-NEW.stock_out
    WHERE stock_id = NEW.stock_id;
    
    
    
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'admin', '21232f297a57a5a743894a0e4a801fc3'),
(10, 'febe', '9f51ce8e8e4374fd0736f3ece4a679dc'),
(9, 'argie', '6cf51b9070c74b2b7b90a24428e9a99b'),
(11, 'bob', 'c20ad4d76fe97759aa27a0c99bff6710'),
(12, 'kebin', 'c20ad4d76fe97759aa27a0c99bff6710'),
(13, 'deddy', '56ecbde3150f89f00c86337fc29b265d');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_password` varchar(200) NOT NULL,
  `user_name` varchar(200) NOT NULL,
  `user_type` enum('master','user') NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`user_id`, `user_email`, `user_password`, `user_name`, `user_type`, `user_status`) VALUES
(1, 'john_smith@gmail.com', '$2y$10$0Yo2F.EetL3yhB8l6MNvcOH8AYNS0SuXLOoAQr1qXJa3uPASWV0NC', 'John Smith', 'master', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`stock_id`);

--
-- Indexes for table `stock_card`
--
ALTER TABLE `stock_card`
  ADD PRIMARY KEY (`stock_card_id`);

--
-- Indexes for table `stock_in`
--
ALTER TABLE `stock_in`
  ADD PRIMARY KEY (`stock_in_id`);

--
-- Indexes for table `stock_out`
--
ALTER TABLE `stock_out`
  ADD PRIMARY KEY (`stock_out_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `stock_card`
--
ALTER TABLE `stock_card`
  MODIFY `stock_card_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `stock_in`
--
ALTER TABLE `stock_in`
  MODIFY `stock_in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=111;

--
-- AUTO_INCREMENT for table `stock_out`
--
ALTER TABLE `stock_out`
  MODIFY `stock_out_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
