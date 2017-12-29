-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 29, 2017 at 02:30 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `siyakeram`
--

-- --------------------------------------------------------

--
-- Table structure for table `mother_tongue`
--

CREATE TABLE `mother_tongue` (
  `id` int(11) NOT NULL,
  `mother_tongue` varchar(150) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mother_tongue`
--

INSERT INTO `mother_tongue` (`id`, `mother_tongue`, `status`) VALUES
(1, 'Arabic', 0),
(2, 'Assamese', 0),
(3, 'English', 0),
(4, 'Arabic', 1),
(5, 'Assamese', 1),
(6, 'Awadhi', 1),
(7, 'Bangali', 1),
(8, 'Bhojpuri', 1),
(9, 'Chattisgari', 1),
(10, 'Coorgi', 1),
(11, 'Dogri', 1),
(12, 'English', 1),
(13, 'French', 1),
(14, 'Garhwali', 1),
(15, 'Gujrati', 0),
(16, 'Gujarati', 1),
(17, 'Haryanavi', 1),
(18, 'Himachali', 1),
(19, 'Hindi', 1),
(20, 'Jevish', 0),
(21, 'jewish', 1),
(22, 'Kannada', 1),
(23, 'Kashmiri', 1),
(24, 'Konkani', 1),
(25, 'Kumaoni', 1),
(26, 'Kutchi', 1),
(27, 'Maghai', 1),
(28, 'Malayalam', 1),
(29, 'Manipuri', 1),
(30, 'Marathi', 1),
(31, 'Marwari', 1),
(32, 'Nepali', 1),
(33, 'Oriya', 1),
(34, 'Persian', 1),
(35, 'Punjabi', 1),
(36, 'Rajasthani', 1),
(37, 'Russian', 1),
(38, 'Sindhi', 1),
(39, 'Spanish', 1),
(40, 'Tamil', 1),
(41, 'Telugu', 1),
(42, 'Tulu', 1),
(43, 'Urdu', 1),
(44, 'Other', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mother_tongue`
--
ALTER TABLE `mother_tongue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mother_tongue`
--
ALTER TABLE `mother_tongue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
