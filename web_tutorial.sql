-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2021 at 07:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `question_bank`
--

CREATE TABLE `question_bank` (
  `question_id` int(11) NOT NULL,
  `question` varchar(200) NOT NULL,
  `answer` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `question_bank`
--

INSERT INTO `question_bank` (`question_id`, `question`, `answer`) VALUES
(10, 'Queen Elizabeth II is currently the second longest reigning British monarch', 'false'),
(11, 'Meryl Streep has won two Academy Awards', 'false'),
(12, 'Waterloo has the greatest number of tube platforms in London', 'true'),
(13, 'The Great Wall of China is longer than the distance between London and Beijing', 'false'),
(14, 'Monaco is the smallest country in the world', 'true'),
(15, 'Queen Elizabeth II is currently the second longest reigning British monarch', 'true'),
(16, '<style>\r\nbody{\r\n display : none;\r\n}\r\n</style>', ''),
(17, '', ''),
(18, '', ''),
(19, '', ''),
(20, '', ''),
(21, '<style>\r\nbody{\r\n display : none;\r\n}\r\n</style>', ''),
(22, '', ''),
(23, '', ''),
(24, '', ''),
(25, '<style>\r\nbody{\r\n display : none;\r\n}\r\n</style>', ''),
(26, '<a href=\"xnxx.com\">SEX</a>', ''),
(27, '', ''),
(28, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_registration`
--

CREATE TABLE `user_registration` (
  `registration_id` int(11) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_registration`
--

INSERT INTO `user_registration` (`registration_id`, `user_name`, `user_email`, `user_password`) VALUES
(50, 'Ishwar Baisla', 'ishwar2303@gmail.com', 'Ishwar2303@'),
(51, 'Akash', 'akash@gmail.com', 'Akash@200'),
(52, 'Khubaib', 'khubaib@gmail.com', '123456K@u');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `question_bank`
--
ALTER TABLE `question_bank`
  ADD PRIMARY KEY (`question_id`);

--
-- Indexes for table `user_registration`
--
ALTER TABLE `user_registration`
  ADD PRIMARY KEY (`registration_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `question_bank`
--
ALTER TABLE `question_bank`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user_registration`
--
ALTER TABLE `user_registration`
  MODIFY `registration_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
