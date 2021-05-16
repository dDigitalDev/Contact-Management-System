-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 01:59 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contacts_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Fullname` varchar(255) NOT NULL,
  `Mobile` varchar(255) NOT NULL,
  `Profession` varchar(255) NOT NULL,
  `contact_type` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `Address`, `City`, `Email`, `Fullname`, `Mobile`, `Profession`, `contact_type`) VALUES
(13, ' Road Montainview', 'Cape Town', 'Edit@gamail.com', 'Edith kanes', '08137684756', 'junior Dev ', 3),
(14, 'Dan street 1400', 'Johannesburg ', 'paul@outlook.com', 'Paul ', '0719677768', 'Mananger', 2),
(15, '4134 Polla', 'Pretoria', 'Deeny13@gmail.com', 'Dennis', '0819677767', 'Senior dev', 1),
(20, 'Holkom Road 2091', 'Johannesburg ', 'herros279@gmail.com', 'Mpendulo Charles Nkuna', '0672320947', 'Systems Developer', 2);

-- --------------------------------------------------------

--
-- Table structure for table `contact_type`
--

CREATE TABLE `contact_type` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_type`
--

INSERT INTO `contact_type` (`id`, `name`) VALUES
(1, 'Public'),
(2, 'Business'),
(3, 'Private');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `user`, `pass`) VALUES
(1, 'Myuser', 'SA1@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `fk_contact_type` (`contact_type`);

--
-- Indexes for table `contact_type`
--
ALTER TABLE `contact_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact_type`
--
ALTER TABLE `contact_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_contact_type` FOREIGN KEY (`contact_type`) REFERENCES `contact_type` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
