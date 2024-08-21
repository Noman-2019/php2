-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2024 at 06:52 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmd`
--

-- --------------------------------------------------------

--
-- Table structure for table `sign`
--

CREATE TABLE `sign` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` char(30) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sign`
--

INSERT INTO `sign` (`id`, `name`, `email`, `password`, `phone`) VALUES
(1, 'Amir ', 'Amir@ddf.com ', 'ffffrtyy', '54128935'),
(7, 'Abdullah ', 'abdullah@gmail.com ', 'uirjrfmdl', '42561222'),
(17, 'Kalam', 'mamun@gmail.com  ', 'ffffrtyy', '54128935'),
(19, 'Amir', 'abdullah@g.com', 'ffff', '42561222'),
(20, 'Mamun', 'abuhmdabdullah@gmail.com', 'ffffrtyy', '42561222'),
(27, 'Samir', 'amun@gmail.com ', 'ffff', '10003864'),
(37, 'Amiras', 'm@gmail.com', 'uirjrfmdl', '510003864'),
(38, 'Mamasi  ', 'ullah@gmail.com     ', 'ffffrtyy', '54128935'),
(39, 'Mamun', 'asmpi.com', 'uirjrfmdl', '42561222'),
(41, 'Amir', 'abdullayhh@gmail.com', 'ujhggnnb', '10003864'),
(42, 'samd', 'asrtyym@gmail.com ', 'ujhggnnb', '510003864'),
(43, 'Nihan', 'rass@fgm.com ', 'efffff', '01254128935'),
(116, 'Amir', 'abdullah@yttgmail.com', 'ojgfffggy', '54128935'),
(117, 'Robi', 'rony@gmail.com ', 'uirjrfmdl', '01210003864'),
(118, 'mhan ', 'ah@gmail.com ', 'ffffiooll', '012510003864'),
(119, 'rojain', 'nihan@gmail.com ', 'jfckfgo', '510003864'),
(121, 'jamil', 'opiullah@gmail.com ', 'ujhggnnb', '54128935');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sign`
--
ALTER TABLE `sign`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sign`
--
ALTER TABLE `sign`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=125;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
