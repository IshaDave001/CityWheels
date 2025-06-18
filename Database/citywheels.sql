-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2023 at 06:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutcars`
--

CREATE TABLE `aboutcars` (
  `type` varchar(30) NOT NULL,
  `seater` int(10) NOT NULL,
  `about` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `aboutcars`
--

INSERT INTO `aboutcars` (`type`, `seater`, `about`) VALUES
('Ertiga', 7, 'It is available with Manual & Automatic transmission. Depending upon the variant and fuel type the E'),
('Innova', 7, 'The Diesel engine is 2494 cc while the Petrol engine is 1998 cc . It is available with Manual transm'),
('Creta', 5, 'Hyundai Creta is a 5 seater SUV available in a price range of Rs. 10.87 - 19.20 Lakh*. It is availab'),
('Fortuner', 7, 'The Toyota Fortuner, also known as the Toyota SW4, is a mid-size SUV manufactured by the Japanese au'),
('Swift', 5, 'Swift is a powerful and intuitive programming language for all Apple platforms. It\'s easy to get sta');

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(5) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL,
  `updateDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `username`, `password`, `updateDate`) VALUES
(1, 'admin', 'abc@123', '2023-08-20 06:33:19');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `ride_id` int(15) NOT NULL,
  `cust_id` int(15) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `phoneno` varchar(10) NOT NULL,
  `date` date NOT NULL,
  `pickup` varchar(100) NOT NULL DEFAULT 'Rajkot',
  `destination` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `cab_type` varchar(15) NOT NULL,
  `preference` varchar(10) NOT NULL,
  `payment` varchar(10) NOT NULL DEFAULT 'cash',
  `driver_id` int(20) NOT NULL,
  `driver_name` varchar(50) NOT NULL,
  `cab_number` varchar(50) NOT NULL,
  `cost` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`ride_id`, `cust_id`, `cust_name`, `phoneno`, `date`, `pickup`, `destination`, `time`, `cab_type`, `preference`, `payment`, `driver_id`, `driver_name`, `cab_number`, `cost`) VALUES
(34, 142, 'aasthaba jadeja ', '0123456789', '2023-09-20', 'rajkot ', 'morbi ', '10:00:00', 'Creta  ', 'AC', 'cash', 3, 'Sureshbhai Jadav ', 'GJ08IK2580', 2000),
(35, 142, 'aasthaba jadeja ', '0123456789', '2023-09-15', 'rajkot ', 'jamnagar ', '09:10:00', 'Creta  ', 'NON AC', 'cash', 3, 'Sureshbhai Jadav ', 'GJ08IK2580', 2000),
(36, 142, 'aasthaba jadeja ', '0123456789', '2023-09-19', 'Rajkot ', 'Bhuj ', '12:00:00', 'Swift  ', 'AC', 'cash', 5, 'Prakashbhai Kamani ', 'GJ54IK7899', 2000),
(37, 143, 'isha dave ', '9876543210', '2023-09-21', 'Rajkot ', 'Bhuj ', '22:00:00', 'Creta  ', 'AC', 'cash', 3, 'Sureshbhai Jadav ', 'GJ08IK2580', 4200),
(38, 143, 'aasthaba jadeja ', '9876543210', '2023-09-28', 'rajkot ', 'Jamnagar ', '10:00:00', 'Creta  ', 'AC', 'cash', 3, 'Sureshbhai Jadav ', 'GJ08IK2580', 2300);

-- --------------------------------------------------------

--
-- Table structure for table `cab_prices`
--

CREATE TABLE `cab_prices` (
  `destination` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL,
  `AC` int(30) NOT NULL,
  `NONAC` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cab_prices`
--

INSERT INTO `cab_prices` (`destination`, `type`, `AC`, `NONAC`) VALUES
('Morbi', 'Ertiga', 2074, 2000),
('Morbi', 'Innova', 4000, 3900),
('Morbi', 'Creta', 4300, 4200),
('Morbi', 'Fortuner', 1300, 1200),
('Morbi', 'Swift', 1433, 1300),
('Bhuj', 'Ertiga', 4500, 4400),
('Bhuj', 'Innova', 4300, 4200),
('Bhuj', 'Creta', 4200, 4100),
('Bhuj', 'Fortuner', 4600, 4500),
('Bhuj', 'Swift', 4000, 3900),
('Jamnagar', 'Ertiga', 2288, 2100),
('Jamnagar', 'Innova', 2300, 2200),
('Jamnagar', 'Creta', 2300, 2200),
('Jamnagar', 'Fortuner', 2500, 2400),
('Jamnagar', 'Swift', 2000, 1900),
('Ahmedabad', 'Ertiga', 5500, 5400),
('Ahmedabad', 'Innova', 9200, 9100),
('Ahmedabad', 'Creta', 8000, 7900),
('Ahmedabad', 'Fortuner', 9500, 9400),
('Ahmedabad', 'Swift', 6000, 5900),
('Surat', 'Ertiga', 10000, 9900),
('Surat', 'Innova', 8000, 7900),
('Surat', 'Creta', 9500, 9400),
('Surat', 'Fortuner', 10500, 10400),
('Surat', 'Swift', 7500, 7400),
('Vadodra', 'Innova', 6800, 6700),
('Vadodra', 'Creta', 6900, 6800),
('Vadodra', 'Fortuner', 7500, 7400),
('Vadodra', 'Swift', 6500, 6400),
('Vadodra', 'Ertiga', 6700, 6600);

-- --------------------------------------------------------

--
-- Table structure for table `driver_details`
--

CREATE TABLE `driver_details` (
  `driver_id` int(20) NOT NULL,
  `driver_name` varchar(30) NOT NULL,
  `cab_number` varchar(15) NOT NULL,
  `cab_type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `driver_details`
--

INSERT INTO `driver_details` (`driver_id`, `driver_name`, `cab_number`, `cab_type`) VALUES
(2, 'Pankanjbhai Surani', 'GJ20TJ5689', 'Innova'),
(3, 'Sureshbhai Jadav ', 'GJ08IK2580', 'Creta'),
(4, 'Hareshbhai Ramani', 'GJ56JK2021', 'Fortuner'),
(5, 'Prakashbhai Kamani ', 'GJ54IK7899', 'Swift'),
(9, 'Milanbhai Doshi', 'GJ18BA4561', 'Ertiga'),
(10, 'Rakeshbhai parmar ', 'GJ78RT9807', 'Creta');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `cust_id` int(20) NOT NULL,
  `feedback` varchar(100) NOT NULL,
  `rating` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`cust_id`, `feedback`, `rating`) VALUES
(143, 'Submit', 3),
(143, 'very good', 5),
(142, 'very ince', 5),
(143, 'good experience', 4);

-- --------------------------------------------------------

--
-- Table structure for table `signup_login`
--

CREATE TABLE `signup_login` (
  `cust_id` int(4) NOT NULL,
  `cust_name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  `phone_no` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_login`
--

INSERT INTO `signup_login` (`cust_id`, `cust_name`, `email`, `password`, `phone_no`) VALUES
(142, 'aasthaba jadeja', 'aasthaba@gmail.com', '123', '0123456789'),
(143, 'isha dave', 'ishadave@gmail.com', '321', '9876543210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`ride_id`),
  ADD KEY `Forign` (`cust_id`);

--
-- Indexes for table `driver_details`
--
ALTER TABLE `driver_details`
  ADD PRIMARY KEY (`driver_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD KEY `FORIGN KEY` (`cust_id`);

--
-- Indexes for table `signup_login`
--
ALTER TABLE `signup_login`
  ADD PRIMARY KEY (`cust_id`),
  ADD UNIQUE KEY `phone_no` (`phone_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `ride_id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `driver_details`
--
ALTER TABLE `driver_details`
  MODIFY `driver_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `signup_login`
--
ALTER TABLE `signup_login`
  MODIFY `cust_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `FORIGN KEY` FOREIGN KEY (`cust_id`) REFERENCES `signup_login` (`cust_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
