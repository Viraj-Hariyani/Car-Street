-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2023 at 04:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carstreet`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `user_name`, `password`) VALUES
(1, 'admin', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `car_inquiry`
--

CREATE TABLE `car_inquiry` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `phone_no` int(10) NOT NULL,
  `car_model` text NOT NULL,
  `user_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `car_inquiry`
--

INSERT INTO `car_inquiry` (`id`, `user_name`, `email`, `phone_no`, `car_model`, `user_price`) VALUES
(2, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'mahindara', '300000'),
(3, 'Hingrajiya kush M.', '15612421181@atmiyauni.edu.in', 2147483647, 'i20', '300000'),
(4, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000'),
(5, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000'),
(6, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000'),
(7, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000'),
(8, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000'),
(9, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000'),
(10, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000'),
(11, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000'),
(12, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000'),
(13, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 2147483647, 'i20', '300000');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` text NOT NULL,
  `feedback` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `user_name`, `email`, `feedback`) VALUES
(4, 'Kush', 'hingrajiyakush11@gmail.com', 'its a realy very good website'),
(5, 'Hingrajiya kush M.', 'hingrajiyakush11@gmail.com', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `payment_info`
--

CREATE TABLE `payment_info` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phone` int(100) NOT NULL,
  `payment_type` varchar(100) NOT NULL,
  `visiting_charge` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment_info`
--

INSERT INTO `payment_info` (`id`, `name`, `address`, `phone`, `payment_type`, `visiting_charge`) VALUES
(1, 'Hingrajiya kush M.', 'sdfdsfsd', 2147483647, 'Cash', '500'),
(2, 'Kush', 'sdfsdfs', 2147483647, 'UPI', '500'),
(3, 'parth', 'ajab', 2147483647, 'UPI', '500'),
(4, 'Hingrajiya kush M.', 'sjhkjhsnhb', 2147483647, 'Cash', '500'),
(5, 'Hingrajiya kush M.', 'shsklnadj', 2147483647, 'Cash', '500'),
(6, 'Hingrajiya kush M.', 'dfd vdf f', 2147483647, 'Cash', '500'),
(7, 'Hingrajiya kush M.', 'njkjnnknkjnn', 2147483647, 'Cash', '500'),
(8, 'Hingrajiya kush M.', 'rajkot', 2147483647, 'Cash', '500'),
(9, 'Hingrajiya kush M.', 'rajkot', 2147483647, 'Cash', '500'),
(10, 'Hingrajiya kush M.', 'rajkot', 2147483647, 'UPI', '500'),
(11, 'Hingrajiya kush M.', 'rajkot', 2147483647, 'Cash', '500');

-- --------------------------------------------------------

--
-- Table structure for table `product_tbl`
--

CREATE TABLE `product_tbl` (
  `car_category` varchar(200) NOT NULL,
  `car_company` varchar(200) NOT NULL,
  `id` int(50) NOT NULL,
  `model_name` varchar(100) NOT NULL,
  `year` int(100) NOT NULL,
  `fule` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `other_details` text NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_tbl`
--

INSERT INTO `product_tbl` (`car_category`, `car_company`, `id`, `model_name`, `year`, `fule`, `price`, `other_details`, `image`) VALUES
('suv', 'chevrolet', 17, 'mahindra ', 2017, 'petrol', '450000', 'OWNER 1st\r\n\r\nINSURANCE full\r\n\r\nCompany music system\r\n\r\nwith steering control\r\n\r\nAuto adjustable mirror\r\n\r\nReverse sensor\r\n\r\nCompany centerlock\r\n\r\nTyre good (Bridgestone', 'scorpio-exterior-right-front-three-quarter-46.webp'),
('sedan', 'toyota', 18, 'mahindra ', 2019, 'petrol', '450000', 'OWNER 1st\r\n\r\nINSURANCE full\r\n\r\nCompany music system\r\n\r\nwith steering control\r\n\r\nAuto adjustable mirror\r\n\r\nReverse sensor\r\n\r\nCompany centerlock\r\n\r\nTyre good (Bridgestone', 'fronx-exterior-right-front-three-quarter-4.webp'),
('convertible', 'ford', 19, 'mahindra ', 2017, 'desal', '120000', 'OWNER 1st\r\n\r\nINSURANCE full\r\n\r\nCompany music system\r\n\r\nwith steering control\r\n\r\nAuto adjustable mirror\r\n\r\nReverse sensor\r\n\r\nCompany centerlock\r\n\r\nTyre good (Bridgestone', 'invicto-exterior-right-front-three-quarter-2.webp'),
('minivan', 'toyota', 20, 'mahindra ', 2017, 'desal', '120000', 'OWNER 1st\r\n\r\nINSURANCE full\r\n\r\nCompany music system\r\n\r\nwith steering control\r\n\r\nAuto adjustable mirror\r\n\r\nReverse sensor\r\n\r\nCompany centerlock\r\n\r\nTyre good (Bridgestone', 'kwid-exterior-right-front-three-quarter.webp'),
('hatchback', 'bmw', 21, 'mahindra ', 2019, 'desal', '454000', 'OWNER 1st\r\n\r\nINSURANCE full\r\n\r\nCompany music system\r\n\r\nwith steering control\r\n\r\nAuto adjustable mirror\r\n\r\nReverse sensor\r\n\r\nCompany centerlock\r\n\r\nTyre good (Bridgestone', 'scorpio-exterior-right-front-three-quarter-46.webp');

-- --------------------------------------------------------

--
-- Table structure for table `user_contact`
--

CREATE TABLE `user_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phoneno` int(10) NOT NULL,
  `address` text NOT NULL,
  `payment_type` text NOT NULL,
  `visting_charge` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `id` int(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `birthdate` varchar(50) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `phone_no` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `first_name`, `last_name`, `birthdate`, `gender`, `phone_no`, `email`, `username`, `password`, `address`, `state`, `city`) VALUES
(20, 'kush', 'patel', '2023-09-12', 'Male', '8320695005', 'hingrajiyakush11@gmail.com', 'kp', '177', 'rajkot', 'gujarat', 'rajkot'),
(21, 'kush', 'HINGRAJIYA', '2023-09-27', 'Male', '8320695005', 'hingrajiyakush11@gmail.com', 'bca21202', 't55', 'rajkot', 'gujarat', 'rajkot'),
(22, 'jenil', 'patel', '2023-09-13', 'Male', '8320695005', 'hingrajiyakush11@gmail.com', 'jp', '1234', 'seriyakhan', 'gujarat', 'rajkot'),
(23, 'kush', 'patel', '2023-09-26', 'Male', '8320695005', 'hingrajiyakush11@gmail.com', 'bca21202', 't55', 'seriyakhan', 'gujarat', 'rajkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_inquiry`
--
ALTER TABLE `car_inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_info`
--
ALTER TABLE `payment_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_tbl`
--
ALTER TABLE `product_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_contact`
--
ALTER TABLE `user_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `car_inquiry`
--
ALTER TABLE `car_inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `payment_info`
--
ALTER TABLE `payment_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `product_tbl`
--
ALTER TABLE `product_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_contact`
--
ALTER TABLE `user_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_login`
--
ALTER TABLE `user_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
