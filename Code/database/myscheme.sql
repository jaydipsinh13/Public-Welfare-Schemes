-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2023 at 12:40 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `myscheme`
--

-- --------------------------------------------------------

--
-- Table structure for table `forms`
--

CREATE TABLE `forms` (
  `id` int(6) NOT NULL,
  `fullname` varchar(191) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(191) NOT NULL,
  `mobile` varchar(191) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `aadhar` varchar(191) NOT NULL,
  `fathername` varchar(191) NOT NULL,
  `relation` enum('દીકરો/પુત્ર','પુત્રી') NOT NULL,
  `caste` enum('Bhathi Rajput/ભાથી રાજપૂત','Charan gadhvi/ચારણ ગઢવી','Chaudhary/ચૌધરી','Prajapati/પ્રજાપતિ') NOT NULL,
  `district` enum('Banaskantha') NOT NULL,
  `taluka` enum('Vav','Tharad','Dhanera','Dantiwada','Vadgam','Palanpur','Deesa','Deodar','Bhabhar','Kankrej') NOT NULL,
  `village` enum('Pasvadal','Malosana','Majadar','Teniwada','Basu','Bharkawada') NOT NULL,
  `IncomeProof` varchar(191) NOT NULL,
  `annualincome` varchar(191) NOT NULL,
  `issuedate` date NOT NULL,
  `CasteCertificate` varchar(191) NOT NULL,
  `Certificatenumber` varchar(191) NOT NULL,
  `Photo` varchar(191) NOT NULL,
  `remark` varchar(500) NOT NULL,
  `fstatus` enum('Pending','Approved','Cancelled') NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `forms`
--

INSERT INTO `forms` (`id`, `fullname`, `dob`, `email`, `mobile`, `gender`, `aadhar`, `fathername`, `relation`, `caste`, `district`, `taluka`, `village`, `IncomeProof`, `annualincome`, `issuedate`, `CasteCertificate`, `Certificatenumber`, `Photo`, `remark`, `fstatus`) VALUES
(48, 'JAYDIPSINH', '2004-04-13', 'amitjoshiamit107@gmail.com', '9510241375', 'male', '214578963210', 'JASHVANTSINH', 'દીકરો/પુત્ર', 'Bhathi Rajput/ભાથી રાજપૂત', 'Banaskantha', 'Vadgam', 'Pasvadal', '4E991FD7-70BD-4198-9283-547F8672B654.JPG', '70000', '2021-06-15', '0FB4E2B5-BD58-4283-9B8B-ADA96578FEBC.JPG', '1234560120', '70213F6B-8ACE-4727-BBEC-ED87C2CB474B.JPG', 'OK', 'Approved'),
(51, 'Jigarbhai', '2023-11-01', 'jaydipsinh1@12.com', '123123123', 'male', '1213123123', 'arvind bhai', 'દીકરો/પુત્ર', 'Bhathi Rajput/ભાથી રાજપૂત', 'Banaskantha', 'Vav', 'Malosana', 'blog-banner-1.jpg', '100121', '2023-11-16', 'blog-banner-2.jpg', '7412587', 'features-img-1.png', 'Ok', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `schemes`
--

CREATE TABLE `schemes` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `description` varchar(500) NOT NULL,
  `document` varchar(500) NOT NULL,
  `eligibility` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(100) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `name`, `email`, `uname`, `password`) VALUES
(1, 'Jaydipsinh', 'admin@jamanagarmunicipal', 'admin@jamanagarmunicipal', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `forms`
--
ALTER TABLE `forms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `schemes`
--
ALTER TABLE `schemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `forms`
--
ALTER TABLE `forms`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `schemes`
--
ALTER TABLE `schemes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
