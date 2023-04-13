-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2023 at 05:52 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cpp`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `num` varchar(30) NOT NULL,
  `locality` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `Age` int(4) NOT NULL,
  `About` varchar(30) DEFAULT NULL,
  `Improved` varchar(30) DEFAULT NULL,
  `Exprience` varchar(30) NOT NULL,
  `Satisfied` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `username`, `firstname`, `lastname`, `num`, `locality`, `city`, `Age`, `About`, `Improved`, `Exprience`, `Satisfied`) VALUES
(1, '1q', 'v', 'bfd', '2', '42', 'Mumbai', 542, '542', '64', 'Good', 'Good'),
(8, '123456', 'rushi ', 'Bhansali', '9321542278', 'borivali (west) ', 'Mumbai', 123, 'frefdbvfdmbfdbddngenbofenfenbn', 'rvffffffffffffffffffffffffffff', 'Good', 'Good'),
(9, '123456', 'mgrgr', 'hgtrht', '1234567890', 'brsrbgtttttttttttttttttttttttt', 'Mumbai', 123, 'tdjyh,rfsht,djtr,jtgd', 'nfdfn,dnhsnh,snfrs', 'Good', 'Good'),
(11, '123456', 'nfn', 'nd', '3436435353', 'fbdbfdg,sgbrs,bhrhds,b,d, ds,b', 'Mumbai', 4, 'jtnd', 'tjd', 'Good', 'Good'),
(39, '123456', 'vds', 'sfvds', '3254634658', 'bfdgbf', 'Mumbai', 45, 'hgg', 'j gj', 'Good', 'Good'),
(40, '', 'ctdryr', 'bgybv', '6758656176', 'buykhy', 'Mumbai', 145, 'h7h7u7i9huo', ',onbtcfru', 'Good', 'Good'),
(41, '', 'giuygu', 'ygutigyu', '4654898765', 'joimk', 'Mumbai', 90, 'jmkmikp', 'ik0pmikjj', 'Good', 'Good');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(6) UNSIGNED NOT NULL,
  `UserName` varchar(30) DEFAULT NULL,
  `Pass` varchar(15) DEFAULT NULL,
  `Authenticated` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `UserName`, `Pass`, `Authenticated`) VALUES
(14, 'xyzasc', '1', 1),
(15, 'abc', 'xyzabc', 1),
(89, '12', 'abcfefew', 0),
(92, '123', '223456', 0),
(94, '1234', '223456', 0),
(96, '12345', '223456', 0),
(98, '1234a', 'assdfs', 0),
(99, '1234agf', 'assdfs', 0),
(101, '1234567', '123456', 0),
(103, '1234asd', '123456', 0),
(104, 'aq', '123456', 0),
(106, '1q', '123456', 0),
(108, '123456', '123456', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
