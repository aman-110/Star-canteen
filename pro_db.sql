-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 07:34 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pro_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminpage`
--

CREATE TABLE `adminpage` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpage`
--

INSERT INTO `adminpage` (`name`, `email`, `contact`, `password`) VALUES
('adminr', 'adminr@gmail.com', '1234509876', 'admin123'),
('myadmin1', 'radmin@gmail.com', '1234359992', 'radmin');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `image` varchar(500) NOT NULL,
  `catagary` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`id`, `name`, `price`, `image`, `catagary`) VALUES
(1, 'Burgur', '80', 'uploads/f1.jpg', 'Food'),
(2, 'Biryani', '150', 'uploads/f2.jpg', 'Food'),
(3, 'Idli-Sambhar', '70', 'uploads/f3.jpg', 'Food'),
(4, 'Coca-cola', '40', 'uploads/f4.jfif', 'Beaverges'),
(5, 'Dosa', '80', 'uploads/f5.jfif', 'Food'),
(6, 'Pizza', '140', 'uploads/f6.jpg', 'Food'),
(7, 'Chhole-Bhature', '60', 'uploads/f7.jpg', 'Food'),
(8, 'Pasta', '50', 'uploads/f8.jpg', 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `oder_detail`
--

CREATE TABLE `oder_detail` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `food_id` int(11) NOT NULL,
  `quantity` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_db`
--

CREATE TABLE `order_db` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `pay_status` varchar(100) NOT NULL,
  `food_name` varchar(100) NOT NULL,
  `food_price` varchar(100) NOT NULL,
  `food_quantity` varchar(100) NOT NULL,
  `total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_db`
--

INSERT INTO `order_db` (`id`, `user_name`, `email`, `phone`, `pincode`, `address`, `pay_status`, `food_name`, `food_price`, `food_quantity`, `total`) VALUES
(1, 'etetr', ' rahul123@gmail.com', '9976453211', '3422424', 'dsvfywejne', 'Chash On Delivery', 'Burgur', '80', '  1', '₹ 160'),
(2, 'etetr', ' rahul123@gmail.com', '9976453211', '3422424', 'dsvfywejne', 'Chash On Delivery', 'Burgur', '80', '  1', '₹ 160'),
(3, 'etetr', ' rahul123@gmail.com', '9976453211', '3422424', 'dsvfywejne', 'Chash On Delivery', 'Burgur', '80', '  1', '₹ 160'),
(4, 'etetr', ' rahul123@gmail.com', '9976453211', '3422424', 'dsvfywejne', 'Chash On Delivery', 'Burgur', '80', '  1', '₹ 160'),
(5, 'etetr', ' rahul123@gmail.com', '9976453211', '3422424', 'dsvfywejne', 'Chash On Delivery', 'Burgur', '80', '  1', '₹ 160'),
(6, 'etetr', ' rahul123@gmail.com', '9976453211', '3422424', 'dsvfywejne', 'Chash On Delivery', 'Burgur', '80', '  1', '₹ 160'),
(7, 'varun', ' var', '2898490814', '647282', 'ahemdabaad', 'Paytm', 'Dosa', '80', '  1', '₹ 80');

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `id` int(11) NOT NULL,
  `User_name` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone` varchar(20) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`id`, `User_name`, `Email`, `Phone`, `Password`) VALUES
(4, 'Rahul', 'rahul123@gmail.com', '9976453211', 'rahul'),
(5, 'Ritik', 'ritik@gmail.com', '1234567892', 'ritik'),
(6, 'Varun', 'varun@gmail.com', '55236652653', 'varun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oder_detail`
--
ALTER TABLE `oder_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_db`
--
ALTER TABLE `order_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `oder_detail`
--
ALTER TABLE `oder_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_db`
--
ALTER TABLE `order_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
