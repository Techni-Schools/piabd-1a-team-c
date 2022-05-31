-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 31, 2022 at 09:39 AM
-- Server version: 10.3.34-MariaDB-0ubuntu0.20.04.1
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `phone_number` varchar(16) NOT NULL,
  `email_address` varchar(50) NOT NULL,
  `date_of_birth` date NOT NULL,
  `payment_method` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date_in` date NOT NULL,
  `date_out` date NOT NULL,
  `number_of_guests` int(11) NOT NULL,
  `number_room` int(10) NOT NULL,
  `confirm_reservation` varchar(10) NOT NULL DEFAULT 'NO',
  `confirm_by` varchar(30) NOT NULL DEFAULT '-'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`name`, `surname`, `phone_number`, `email_address`, `date_of_birth`, `payment_method`, `message`, `date_in`, `date_out`, `number_of_guests`, `number_room`, `confirm_reservation`, `confirm_by`) VALUES
('fddfdf', 'fdfddf', 'fddffd', 'fdfd@fdfd', '2022-05-05', 'credit card', 'dffdfd', '2022-05-12', '2022-05-12', 4, 0, 'YES', 'ok1234'),
('dfdfdf', 'fdfdf', 'dffddf', 'fddf@fdfd', '2022-05-06', 'cash', 'dffddf', '2022-05-05', '2022-05-19', 4, 1, 'YES', 'ok1234');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
